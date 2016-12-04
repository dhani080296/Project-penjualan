@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            
                

             
                {!! Form::model($category,['method'=>'PUT','route'=>['admincategory.update',$category->id],'files'=>true]) !!}
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="ht">Edit Data Category</h4>
                </div>
                @include('admin.category-form')
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
