
                            <article class="post-comments">
                <div class="comment-footer padding-10">
                             
                        <h3>Leave a comment</h3>
                        {!! Form::model($comments,[
                                'method'=>'POST',
                            'route'=>'home.store'])  !!}
                            @include('penjual.comment-form')
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
   