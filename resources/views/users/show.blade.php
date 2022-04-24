@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Roles:</strong>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                 @if($v=='Admin')
                  <label class="badge bg-success">{{ $v }}</label>
                 @elseif($v=='Buyer')
                  <label class="badge bg-primary">{{ $v }}</label>
                 @elseif($v=='Seller')
                  <label class="badge bg-secondary">{{ $v }}</label>
                 @else
                  <label class="badge bg-dark">{{ $v }}</label>
                 @endif
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection