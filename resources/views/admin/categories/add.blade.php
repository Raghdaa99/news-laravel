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
                                <h4 style="color:red">Add Category</h4>
                            </div>
                            <div class="custom-panel-body">
                                <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <label> <span>Category title:</span> <input type="text" name="title"
                                                                                value="{{old('title')}}"    placeholder="Category" required
                                        />
                                    </label>
                                    <label> <span>Category Code :</span> <input type="text" name="code"
                                                                                value="{{old('code')}}"  placeholder="Category Code" required
                                        />
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
