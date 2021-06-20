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
                                <h4 style="color:red">Add News</h4>
                            </div>
                            <div class="custom-panel-body">
                                <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <label> <span>Title :</span> <input type="text" name="title"
                                                                  value="{{old('title')}}"      placeholder="news" required
                                        />
                                    </label>
                                    <label> <span>Description :</span>
                                        <textarea name="description" cols="30" rows="5"
                                                     placeholder="Description of the news.">{{old('description')}}</textarea>

                                    </label>
                                    <label> <span>upload Image :</span> <input type="file" name="img"
                                                                               placeholder="Category"

                                        />
                                    </label>
                                    <label> <span>Category  :</span>
                                        <select name="category">
                                            @foreach($categories as $category)
                                                <option
                                                    value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach

                                        <!--                                    <option value="0">No Category Found</option>-->
                                        </select>
                                    </label>

                                    <label> <span>Featured :</span>
                                        <input type="radio" name="featured" value="Yes" checked> Yes
                                        <input type="radio" name="featured" value="No"> No
                                    </label>
                                    <label> <span>Active :</span> <input type="radio" name="active" value="Yes" checked>
                                        Yes
                                        <input type="radio" name="active" value="No"> No
                                    </label>
                                    <!--<label><span>Content </span> <textarea placeholder="Content" name="content" required></textarea></label>-->
                                    <label><span>&nbsp;</span><input type="submit" name="add"
                                                                     class="button tiny radius coral-bg right"
                                                                     value="Add"></label>
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
