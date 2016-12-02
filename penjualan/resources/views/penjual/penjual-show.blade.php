@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if($iklan->image_url)
                    <div class="post-item-image ">
                        <a href="{{$iklan->image_thumburl}}">
                            <img src="{{$iklan->image_url}}" alt="{{$iklan->title}}" width="400" height="400">
                        </a>
                    </div>
                    @else
                    <div class="post-item-image ">
                        <a href="{{$iklan->image_thumburl}}">
                            <img src="/img/image-not-found.png" alt="{{$iklan->title}}" width="400" height="400">
                        </a>
                    </div>
                    @endif
                </div>
                <div class="panel-body">
                    <h1>{{$iklan->title}}</h1>
                        <p align="right">{{$iklan->address}}</p>

                        {!!$iklan->body_html!!}
                </div>
                
                    <div class="panel-footer sc post-meta padding-10 clearfix">
                                <div class="pull-left">
                                <ul class="post-meta-group">
                                    <li><i class="glyphicon glyphicon-user"></i><a  class="gh">{{$iklan->user->name}}</a></li>
                                    <li><i class="glyphicon glyphicon-time"></i><time>{{$iklan->date}}</time></li>
                                    <li><i class="glyphicon glyphicon-folder-open"></i><a  class="gh"> {{$iklan->category->title}}</a></li>
                                    <li><i class="glyphicon glyphicon-comment" class="gh"></i><a  class="gh"> 4 Comments</a></li>
                                     <?php $iklanCount=$iklan->user->iklans()->published()->count() ?>
                                    <li><i class="glyphicon glyphicon-th-list"></i><a class="gh"> {{$iklanCount}} {{str_plural('Post',$iklanCount)}}</a></li>
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

                
                 @include('penjual.penjual-comment')
                
            </div>
            <div class="col-md-4">
                <aside class="right-sidebar">
                    
                     @include('penjual.penjual-sidebar')
                    <div class="widget">
                        <div class="widget-heading">
                            <h4>Phone: {{$iklan->phone}}</h4>
                        </div>
                        </div>
                         <div class="widget">
                        <div class="widget-heading">
                            <h4>BBM: {{$iklan->bbm}}</h4>
                        </div>
                        </div>
                    
                </aside>
            </div>
        </div>
    </div>
@endsection
    