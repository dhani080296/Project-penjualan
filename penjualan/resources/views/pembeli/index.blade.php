@extends('layouts.main')

@section('content')

  <div class="container">
        <div class="row">
            <div class="col-md-8">
                  @if(session('message'))
                          <div class="alert alert-success">
                            {{session('message')}}
                          </div>
                          @endif
            @if(!$iklans->count())
            <div class="alert alert-warning">
                <p>Nothing Found</p>
            </div>
            <div class="lg"></div>
            @else
             @if(isset($categoryName))
            <div class="alert alert-info">
                <p>Category: <strong>{{$categoryName}}</strong></p>
            </div>
            @endif
             @if(isset($userName))
            <div class="alert alert-info">
                <p>Name: <strong>{{$userName}}</strong></p>
            </div>
            @endif
            @foreach($iklans as $iklan)
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if($iklan->image_url)
                    <div class="post-item-image ">
                        <a href="{{route('pembeli.show',$iklan->slug)}}">
                            <img src="{{$iklan->image_url}}" alt="{{$iklan->title}}" width="400" height="400">
                        </a>
                    </div>
                    @else
                    <div class="post-item-image ">
                        <a href="{{route('pembeli.show',$iklan->slug)}}">
                            <img src="/img/image-not-found.png" alt="{{$iklan->title}}" width="400" height="400">
                        </a>
                    </div>
                    @endif 
                </div>
                <div class="panel-body">
                    <h2><a href="{{route('pembeli.show',$iklan->slug)}}" >{{$iklan->title}}</a></h2>
                            <p align="right">{{$iklan->address}} </p>
                </div>
                <div class="panel-footer sc post-meta padding-10 clearfix">
                                <div class="pull-left">
                                <ul class="post-meta-group">
                                    <li><i class="glyphicon glyphicon-user"></i><a href="{{route('user',$iklan->user->slug)}}" class="gh">{{$iklan->user->name}}</a></li>
                                    <li><i class="glyphicon glyphicon-time"></i><time>{{$iklan->date}}</time></li>
                                    <li><i class="glyphicon glyphicon-folder-open"></i><a href="{{ route('category', $iklan->category->slug)}}" class="gh"> {{$iklan->category->title}}</a></li>
                                   
                                    <li><i class="glyphicon glyphicon-comment" class="gh"></i><a href="#" " class="gh">4 Comments</a></li>
                                     <?php $iklanCount=$iklan->user->iklans()->published()->count() ?>
                                    <li><i class="glyphicon glyphicon-th-list"></i><a href="{{route('user',$iklan->user->slug)}}" class="gh"> {{$iklanCount}} {{str_plural('Post',$iklanCount)}}</a></li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <ul class="post-meta-group">
                                    <li><p class="gh">Rp <?php echo number_format($iklan->price,2,",",".") ?></p></li>
                                </ul>
                            </div>
                </div>
            </div>
                <br>
            
            @endforeach
            @endif
            
                <nav>
                  <ul class="pager nav navbar-right">
                    {{$iklans->links()}}
                  </ul>
                </nav>
                
                
            </div>
            <div class="col-md-4">
                <aside class="right-sidebar">
                    

                    @include('pembeli.sidebar')
                </aside>
            </div>
        </div>
    </div>
 
@endsection
