@extends('admin.master')

@section('title')
    Add User
@endsection

@section('body')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title mb-4 text-center">New User Create Form</h1>

                    <h4 class="text-success text-center">{{session('message')}}</h4>
                    <form action="{{route('user.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row mb-4">
                            <label for="mobile" class="col-sm-3 col-form-label">Mobile Number</label>
                            <div class="col-sm-9">
                                <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile Number"/>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password"/>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="amount" class="col-sm-3 col-form-label">User Initial Balance</label>
                            <div class="col-sm-9">
                                <input type="number" name="amount" class="form-control" id="amount" placeholder="Enter User Initial Balance"/>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New User</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

