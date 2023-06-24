@extends('admin.master')

{{--@section('title')--}}
{{--    --}}
{{--@endsection--}}

@section('body')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-24">Admin Dashboard</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <p class="text-muted font-weight-medium">Admin Balance</p>

                            @foreach($users as $user)
                            <h4 class="mb-0">
                                &#2547;{{$user->amount}}
                            </h4>
                            @endforeach
                        </div>

                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="bx bx-archive-in font-size-24"></i>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <h3 class="card-title mt-0 py-3">Click Below to Create User</h3>
                <a href="{{route('user.add')}}" class="btn btn-primary waves-effect waves-light">Create User</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body">
                <h3 class="card-title mt-0 py-3">Click Below to Create Agent</h3>
                <a href="{{route('agent.add')}}" class="btn btn-primary waves-effect waves-light">Create Agent</a>
            </div>
        </div>
    </div>



@endsection
