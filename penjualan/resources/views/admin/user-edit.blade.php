@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            
                

             
                {!! Form::model($user,['method'=>'PUT','route'=>['adminuser.update',$user->id],'files'=>true]) !!}
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="ht">Edit Data User</h4>
                </div>
                @include('admin.user-form')
            </div>

            {!!Form::close()!!}
                <br>
            
         
            
           
        </div>
        <div class="col-md-4">
                <aside class="right-sidebar">
                    
                    @include('admin.admin-sidebar')
                  
                </aside>
    </div>
</div>
</div>

@endsection
