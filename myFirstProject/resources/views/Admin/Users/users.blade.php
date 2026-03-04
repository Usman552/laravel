@extends('Admin.includes.app')

@section('title', 'Users')

@section('content')
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between pb-0">
                        <h5 class="font-weight-bolder opacity-7">Users Table</h5>
                        <button class="btn"><a href="{{route('users.register')}}">Add User</a></button>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class=" text-secondary  font-weight-bolder opacity-7">
                                            Users</th>
                                        <th
                                            class="text-secondary  font-weight-bolder opacity-7 ps-2">
                                            Email</th>
                                        <th
                                            class="text-center  text-secondary  font-weight-bolder opacity-7">
                                            Role</th>
                                        <th
                                            class="text-center  text-secondary  font-weight-bolder opacity-7">
                                            Created At</th>
                                        <th class="text-secondary text-center  font-weight-bolder opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                        alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                    <p class="text-xs text-secondary mb-0"><a
                                                            href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                            data-cfemail="640e0b0c0a2407160105100d120149100d094a070b09">[email&#160;protected]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Manager</p>
                                            <p class="text-xs text-secondary mb-0">Organization</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Online</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
