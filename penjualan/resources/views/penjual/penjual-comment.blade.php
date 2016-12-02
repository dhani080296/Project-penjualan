
                            <article class="post-comments">
                <div class="comment-footer padding-10">
                             
                        <h3>Leave a comment</h3>
                        {!! Form::model($comments,[
                                'method'=>'POST',
                            'route'=>'home.store'])  !!}
                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                               <input type="text" class="form-control" value="{{$iklan->id}}" style="display: none;" name="iklan_id">
                              
                                <input type="text" class="form-control" value="{{Auth::user()->name}}" style="display: none;" name="name">
                                <input type="text" class="form-control" value="{{Auth::user()->email}}" style="display: none;" name="email">
                               
                            </div>
                           
                            <div class="form-group {{$errors->has('comment') ? 'has-error' : ''}}">
                                {!! Form::label('Comment') !!}
                                {!! Form::textarea('comment',null,['class'=>'form-control']) !!}
                                 @if($errors->has('comment'))
                                <span class="help-block">{{$errors->first('comment')}}</span>
                                @endif
                            </div>
                            <div class="clearfix">
                                <div class="pull-left">
                                   {!!Form::submit('Kirim',['class'=>'btn btn-success'])!!}
                                </div>
                                <div class="pull-right">
                                    <p class="text-muted">
                                        <span class="required">*</span>
                                        <em>Indicates required fields</em>
                                    </p>
                                </div>
                            </div>
                        {!!Form::close()!!}
                    </div>
                   
                    <h3><i class="fa fa-comments"></i> 5 Comments</h3>
                    
                    @foreach($comments as $comment)

                    <div class="comment-body padding-10">
                        <ul class="comments-list as">
                            <li class="comment-item">
                                <div class="comment-heading clearfix">
                                    <div class="comment-author-meta">
                                        <h4>{{$comment->name}}<small> {{$comment->date}}</small></h4>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    {!!$comment->comment_html!!}
                                </div>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                     <nav>
                  <ul class="pager nav navbar-right">
                    {{$comments->links()}}
                  </ul>
                </nav>
                    </article>
   