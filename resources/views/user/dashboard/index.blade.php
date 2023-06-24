@extends('user.master')

@section('title')
    User Dashboard
@endsection

@section('body')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-24">User Dashboard</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <p class="text-muted font-weight-medium">Current Amount</p>
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
                <h3 class="card-title mt-0 py-3">User to User Transfer</h3>
                <a href="{{route('user.dashboard.send-user')}}" class="btn btn-primary waves-effect waves-light">Send Money to User</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body">
                <h3 class="card-title mt-0 py-3">User to Agent Transfer</h3>
                <a href="{{route('user.dashboard.send-agent')}}" class="btn btn-primary waves-effect waves-light">Send Money to Agent</a>
            </div>
        </div>
    </div>


@endsection
