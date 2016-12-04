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
                    <h4>Comment <label for="" class="label label-info">{{$commentcount}} data</label></h4> 
                </div>
                    <a  href="{{route('admincomment.create')}}" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
                
                </div>
                
                <div class="panel-body">
                        @if(!$comment->count())
            <div class="alert alert-warning">
                <p>Nothing Found</p>
            </div>
            @endif
                   <table class="table table-bordered table-striped tb">
                       <thead>
                          <tr>
                         <td width="40">No.</td>
                          <td width="150">Action</td>
                           <td width="200">Name</td>
                           <td width="120">email</td>
                          
                           
                           </tr> 
                       </thead>
                       <?php $i=1 ?>
                       @foreach($comment as $com)
                       
                           <tbody>
                               <tr class="tb">
                               <td>{{$i++}}</td>
                                   <td class="tm">
                                    <div class="">
                       
                     {!!Form::open(['method'=>'DELETE','route'=>['admincomment.destroy',$com->id]])!!}
                        <a href="{{route('admincomment.edit',$com->id)}}" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');" type="submit"><i class="glyphicon glyphicon-remove"></i></button>
                     {!!Form::close()!!}
                    </div>
                                   </td>
                                   <td>{{$com->name}}</td>
                                   <td class="tm">{{$com->email}}</td>
                               </tr>
                           </tbody>
                       @endforeach
                   </table>


                </div>
                <div class="panel-footer sc post-meta padding-10 clearfix">
                    <nav>
                  <ul class="pager nav navbar-right">
                    {{$comment->links()}}
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
