@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            
                

             
                {!! Form::model($iklan,['method'=>'POST','route'=>'adminiklan.store','files'=>true]) !!}
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="ht">Tambah Data Iklan Product</h4>
                </div>
                @include('admin.iklan-form')
            </div>

            {!!Form::close()!!}
                <br>
            
         
            
            <nav>
                  <ul class="pager nav navbar-right">
                   
                  </ul>
                </nav>
        </div>
        <div class="col-md-4">
                <aside class="right-sidebar">
                    
               @include('admin.admin-sidebar')
                   
                </aside>
    </div>
</div>
</div>

@endsection
