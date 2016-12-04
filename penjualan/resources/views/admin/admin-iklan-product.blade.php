@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <div class="alert alert-info">
                 Hello <b><strong>{{ Auth::guard('admin_user')->user()->name }}</strong></b>!
             </div>
               @if(session('message'))
                          <div class="alert alert-info">
                            {{session('message')}}
                          </div>
                          @endif
            <div class="panel panel-default">
             
                <div class="panel-heading">
                <div class="col-md-10">
                    <h4>IKlan Product <label for="" class="label label-info">{{$iklancount}} data</label></h4> 
                </div>
                    <a  href="{{route('adminiklan.create')}}" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
                
                </div>
                
                <div class="panel-body">
                       @if(!$iklans->count())
            <div class="alert alert-warning">
                <p>Nothing Found</p>
            </div>
            @endif
                   <table class="table table-bordered table-striped tb">
                       <thead>
                          <tr>
                         <td width="40">No.</td>
                          <td width="150">Action</td>
                           <td width="200">title</td>
                           <td width="120">Date</td>
                          
                           
                           </tr> 
                       </thead>
                       <?php $i=1 ?>
                       @foreach($iklans as $iklan)
                       
                           <tbody>
                               <tr class="tb">
                               <td>{{$i++}}</td>
                                   <td class="tm">
                                    <div class="">
                       
                     {!!Form::open(['method'=>'DELETE','route'=>['adminiklan.destroy',$iklan->id]])!!}
                        <a href="{{route('adminiklan.edit',$iklan->id)}}" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');" type="submit"><i class="glyphicon glyphicon-remove"></i></button>
                     {!!Form::close()!!}
                    </div>
                                   </td>
                                   <td>{{$iklan->title}}</td>
                                   <td class="tm">
                                   <abbr title="{{$iklan->dateFormatted(true)}}"> {{$iklan->dateFormatted()}} </abbr>&nbsp; 
                            {!!$iklan->publicationLabel()!!}</td>
                               </tr>
                           </tbody>
                       @endforeach
                   </table>


                </div>
                <div class="panel-footer sc post-meta padding-10 clearfix">
                    <nav>
                  <ul class="pager nav navbar-right">
                    {{$iklans->links()}}
                  </ul>
                </nav>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <aside class="right-sidebar">
                    
@include('admin.admin-sidebar')
                  
                </aside></div>
          
    </div>
</div>
@endsection
