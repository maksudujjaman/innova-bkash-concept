@extends('user.master')

@section('title')
Agent Send
@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-24">Agent Send</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title mb-4 text-center">Agent Send</h1>

                <h4 class="text-success text-center">{{session('message')}}</h4>
                <form action="{{route('user.dashboard.user.send')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row mb-4">
                        <label for="mobile" class="col-sm-3 col-form-label">Mobile Number</label>
                        <div class="col-sm-9">
                            <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile Number"/>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="amount" class="col-sm-3 col-form-label">Amount</label>
                        <div class="col-sm-9">
                            <input type="number" name="amount" class="form-control" id="amount" placeholder="Enter Amount"/>
                        </div>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Send to Agent</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
