@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            
                

             
                {!! Form::model($iklan,['method'=>'PUT','route'=>['penjualiklan.update',$iklan->id],'files'=>true]) !!}
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="ht">Edit Data Iklan Product</h4>
                </div>
                @include('penjual.penjual-form')
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
                    

                    @include('penjual.penjual-sidebar')
                </aside>
    </div>
</div>
</div>

@endsection
