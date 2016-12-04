@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            
                

             
                {!! Form::model($comment,['method'=>'PUT','route'=>['admincomment.update',$comment->id],'files'=>true]) !!}
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="ht">Edit Data Comment</h4>
                </div>
                @include('admin.comment-form')
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
