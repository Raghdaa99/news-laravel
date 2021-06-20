@extends('admin.layout.master')
@section('content')
    <!-- Main Content Section Starts -->
    <div class="large-10 medium-12 small-12 columns light-grey-bg-pattern">
        <div class="row">
            <div class="large-10 columns">
                <div class="page-name">
                    <div class="clearfix"></div>
                    <a class="button tiny radius success lable js-open-modal btn"
                       href="{{route('user.create')}}">Add Admin</a><br>
                    <br>
                    @include('admin.layout.messages')
                </div>
            </div>
        </div>

            <!-- Button to Add Admin -->
{{--            <a href="{{route('user.create')}}" class="btn-primary">Add Admin</a>--}}


            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{route('user.edit',$user)}}" class="btn-secondary"> update </a> &nbsp;
{{--                            <a href="{{route('user.destroy',$user)}}" class="btn-danger"> delete </a>&nbsp;--}}
                            <form method="post" style="display: inline" action="{{route('user.destroy',$user)}}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn-danger" >
                                    Delete
                                </button>

                            </form>
                            <a href="{{route('password',$user->id)}}" class="btn-primary"> change password </a>&nbsp;

                        </td>
                    </tr>


                @endforeach

            </table>

        </div>
    </div>
    <!-- Main Content Setion Ends -->
@endsection

