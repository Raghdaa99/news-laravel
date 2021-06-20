@extends('admin.layout.master')
@section('content')
    <!-- Main Content Section Starts -->
    <div class="large-10 medium-12 small-12 columns light-grey-bg-pattern">
        <div class="row">
            <div class="large-10 columns">
                <div class="page-name">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>


            <div class="col-4 text-center">


                <h1> {{$categories}}</h1>
                <br/>

                Categories
            </div>

            <div class="col-4 text-center">


                <h1> {{$posts}}</h1>
                <br/>
                Posts
            </div>

            <div class="col-4 text-center">


                <h1> {{$comments}}</h1>
                <br/>
                Total comments
            </div>

            <div class="col-4 text-center">


                <h1> {{$users}}</h1>
                <br/>
                users
            </div>

            <div class="clearfix"></div>

        </div>

    <!-- Main Content Setion Ends -->
@endsection
@section('title')
    Dashboard Page
@endsection
