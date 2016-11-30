@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard Admin</div>

                <div class="panel-body">
                    Hello {{ Auth::guard('admin_user')->user()->name }}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection