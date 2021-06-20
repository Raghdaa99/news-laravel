@extends('admin.layout.master')
@section('content')
    <div class="row">

        <div class="large-10 medium-12 small-12 columns light-grey-bg-pattern">

            <div class="row">
                <div class="large-10 columns">
                    <div class="page-name">
                        <h3 class="left">Welcome To Our Dashboard</h3>
                        <div class="clearfix"></div>


                        <div class="large-10 medium-12 small-12 columns light-grey-bg-pattern">
                            <div class="row">
                                <div class="large-10 columns">
                                    <div class="page-name">
                                        <div class="clearfix"></div>
                                        <a class="button tiny radius success lable js-open-modal btn"
                                           href="{{route('category.create')}}">Add Category</a><br>
                                        <br>
                                        @include('admin.layout.messages')
                                    </div>
                                </div>
                            </div>
                            <div id="inbox">
                                <div class="row">
                                    <div class="large-12 columns">
                                        <div class="custom-panel blue-bg">

                                            <div class="custom-panel-body">
                                                <table class="width-100 custom-table responsive">
                                                    <thead>
                                                    <tr>
                                                        <th>S.N.</th>
                                                        <th>Title</th>
                                                        <th>Code</th>
                                                        <th>Actions</th>
                                                    </tr>

                                                    </thead>
                                                    @foreach($categories as $category)
                                                    <tr>
                                                        <td>  {{$loop->iteration}}</td>
                                                        <td>{{$category->title}}</td>
                                                        <td>{{$category->code}}</td>

                                                        <td>
                                                            <a class="alert label btn" style="background-color: #0a9d11"
                                                               href="{{route('category.edit',$category)}}">Update Category</a>
                                                            <a class="alert label btn" href="{{route('category.destroy',$category)}}">Delete
                                                                Category</a>
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
                </div>
            </div>

        </div>
    </div>
@endsection
