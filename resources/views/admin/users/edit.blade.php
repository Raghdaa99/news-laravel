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
                                <h4>Edit Admin</h4>
                            </div>

                            <div class="custom-panel-body">
                                <form action="{{route('user.update',$user)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <table class="tbl-30">
                                        <tr>
                                            <td>Full Name:</td>
                                            <td>
                                                <input type="text" name="full_name" value="{{$user->name}}">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Email:</td>
                                            <td>
                                                <input type="email" name="email" value="{{$user->email}}">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <input type="hidden" name="id" value="">
                                                <input type="submit" name="submit" value="Update Admin"
                                                       class="btn-secondary">
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
