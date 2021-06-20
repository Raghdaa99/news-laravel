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
                                           href="{{route('post.create')}}">Add Posts</a><br>
                                        <br>
                                       @include('admin.layout.messages')
                                    </div>
                                </div>
                            </div>
                            <div id="inbox">
                                <div class="row">
                                    <div class="large-12 columns">
                                        <div class="custom-panel blue-bg">
                                            <div  class="custom-panel-body">
                                                <table class="width-100 custom-table responsive js-dynamitable"
                                                       id="resultTable">
                                                    <thead>
                                                    <tr>
                                                        <th>S.N.</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Image</th>
                                                        <th>Category</th>
                                                        <th>Actions</th>
                                                    </tr>

                                                    </thead>
                                                    @if($posts->count()>0)
                                                    @foreach($posts as $post)
                                                        <tr>
                                                            <td> {{$loop->iteration}}</td>
                                                            <td> {{$post->title}}</td>
                                                            <td width="50%"> {{$post->description}}</td>
                                                            <td>
                                                                <img src="{{asset('post_images/'.$post->image)}}" width="50px">
                                                            </td>
                                                            <?php
                                                            //                                                            $sql_categ = "select * from category where id ='$category'";
                                                            //                                                            $res_categ = mysqli_query($conn,$sql_categ);
                                                            //                                                            if ($res_categ->num_rows>0){
                                                            //                                                                $row=$res_categ->fetch_assoc();
                                                            ?>
                                                            <td> {{$post->category->title}}</td>
                                                            <?php
                                                            //    }
                                                            ?>
                                                            <td class="raghda">
                                                                <a class="alert label btn"
                                                                   style="background-color: #0a9d11"
                                                                   href="{{route('post.edit',$post)}}">Update</a>
                                                                <form method="post" action="{{route('post.destroy',$post)}}">
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
                                                    @else
                                                        <tr>
                                                            <td colspan="6">
                                                                <div class="error">No posts Added.</div>
                                                            </td>
                                                        </tr>
                                                    @endif


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
        {{$posts->links()}}
    </div>
@endsection


