@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="large-10 medium-12 small-12 columns light-grey-bg-pattern">
            @include('admin.layout.messages')

            <div id="dashboard">
                <div class="row">
                    <div class="large-12 columns">
                        <div class="custom-panel">
                            <div class="custom-panel-heading">
                                <h4>Edit News</h4>
                            </div>

                            <div class="custom-panel-body">
                                <form action="{{route('post.update',$post)}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <label> <span>Title :</span>
                                        <input type="text" name="title" value="{{$post->title}}"
                                               required="required">
                                    </label>
                                    <label> <span>Description :</span>
                                        <textarea name="description" cols="30" rows="5"
                                        >{{$post->description}}</textarea>
                                    </label>
                                    <label> <span>Image1</span>
                                        <input type="file"
                                               name="img" accept=".jpg, .jpeg,.png"/>
                                    </label> <label style="margin: -15px 0; padding: 0;"><span>&nbsp;</span>
                                        <div class="message msgpic1"></div>
                                    </label>
                                    <div class="clearfix"></div>
                                    <label> <span>Image1</span> <img src="{{asset('post_images/'.$post->image)}}"
                                                                     width="100px" height="90px"/> </label>
                                    <br>
                                    <label> <span>Category  :</span>
                                        <select name="category">
                                            @foreach($categories as $category)

                                                <option
                                                    value="{{$category->id}}"

                                                {{$post->category_id==$category->id?'selected' : ' '}}>

                                                    {{$category->title}}</option>

                                        @endforeach
                                        <!--                                    <option value="0">No Category Found</option>-->
                                        </select>
                                    </label>
                                    <label> <span>Featured :</span>
                                        <input type="radio" name="featured"
                                               value="Yes"
                                            {{$post->featured=='Yes'?'checked' : ' '}}
                                        >Yes
                                        <input type="radio" name="featured"
                                               value="No"
                                            {{$post->featured=='No'?'checked' : ' '}}
                                        > No
                                    </label>
                                    <label> <span>Active :</span> <input type="radio" name="active"
                                           value="Yes"
                                            {{$post->active=='Yes'?'checked' : ' '}}>
                                        Yes
                                        <input type="radio" name="active"
                                               value="No"
                                            {{$post->active=='No'?'checked' : ' '}}
                                       > No
                                    </label>
                                    <input type="submit" class="button tiny radius coral-bg right" name="submit"
                                           value="Update Post">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
