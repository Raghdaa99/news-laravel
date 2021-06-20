@extends('admin.layout.master')
@section('content')
    <div class="row">

        <div class="large-10 medium-12 small-12 columns light-grey-bg-pattern">

            <div id="inbox">
                <div class="row">
                    <div class="large-12 columns">
                        <div class="custom-panel blue-bg">
                            <div class="custom-panel-body">
                                <table class="width-100 custom-table responsive">
                                    <thead>
                                    <tr>
                                        <td>S. No.</td>
                                        <td>News</td>
                                        <td>Comments</td>
                                        <td>Date</td>
                                        <td>User</td>
                                        <td>Actions</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($comments as $comment)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$comment->post_id}}</td>
                                            <td>{{$comment->body}}</td>
                                            <td>{{$comment->created_at}}</td>
                                            <td>{{$comment->email}}</td>
                                            <td>

{{--                                                <a onClick="return confirm('Are you sure you want to delete?')"--}}
{{--                                                   href="" class="label">--}}
{{--                                                    Delete</a>--}}
                                                <form method="post" action="{{route('comment.destroy',$comment)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="alert label btn"
                                                            style="clear:both">
                                                        Delete
                                                    </button>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
