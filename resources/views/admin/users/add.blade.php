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
                                <h4 style="color:red">Add Admin</h4>
                            </div>
                            <div class="custom-panel-body">

            <form action="{{route('user.store')}}" method="POST">
                @csrf
                <table class="tbl-30">
                    <tr>
                        <td>Full Name:</td>
                        <td>
                            <input type="text" name="username" placeholder="Enter Your Name">
                        </td>
                    </tr>

                    <tr>
                        <td>Email:</td>
                        <td>
                            <input type="email" name="email" placeholder="Your email">
                        </td>
                    </tr>

                    <tr>
                        <td>Password:</td>
                        <td>
                            <input type="password" name="password" placeholder="Your Password">
                        </td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td>
                            <input type="password" name="password_confirmation" placeholder="Retype password"></td>
                    <tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                        </td>
                    </tr>

                </table>

            </form>

        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>
@endsection

