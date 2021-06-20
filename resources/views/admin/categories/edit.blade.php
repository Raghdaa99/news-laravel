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
                                <h4>Edit Category</h4>
                            </div>

                            <div class="custom-panel-body">
                                <form action="{{route('category.update',$category)}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <label> <span>Category title :</span>
                                        <input type="text" name="title" value="{{$category->title}}"
                                               required="required">
                                    </label>
                                    <label> <span>Category code:</span>
                                        <input type="text" name="code" value="{{$category->code}}"
                                               required="required">
                                    </label>
                                    <br>
                                    <input type="submit" class="button tiny radius coral-bg right" name="submit"
                                           value="Update Category">
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
