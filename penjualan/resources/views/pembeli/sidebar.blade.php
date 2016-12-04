                        
             
                    <div class="search-widget">
                    <form action="{{route('pembeli')}}" role="search" id=".ui-autocomplete">
                    <div class="input-group">
                          <input type="text" name="term" value="{{Request::get("term")}}" class="form-control input-lg" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-lg btn-default search" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                          </span>
                        </div>
                        </form> <!-- /input-group -->
                    </div>

            
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            <h4><a href="" id="slide">Categories</a></h4>
                        </div>
                        <div class="panel-body" id="slide-show">
                            <ul class="nav nav-pills nav-stacked" >
                            @foreach($categories as $category)
                            @if($category->iklans->count())
                            <?php $selected_category= Request::segment(2); ?>
                                <li class="{{$selected_category==$category->slug ? 'active':''}}">
                                    <a href="{{route('category',$category->slug)}}">{{$category->title}} <span class="badge pull-right">{{$category->iklans->count()}}</span></a>
                                    
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                       
                        
                       <br>
                      
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><a href="" id="on">Product </a></h4>
                        </div>
                        <div class="panel-body" id="off">
                            <ul class="popular-posts" >
                            @foreach($populariklans as $iklan)
                                <li>
                                    @if($iklan->image_thumb_url)
                                    <div class="post-image">
                                        <a href="{{route('pembeli.show',$iklan->slug)}}">
                                            <img src="{{$iklan->image_thumb_url}}" />
                                        </a>
                                    </div>
                                    @else
                                    <div class="post-image">
                                        <a href="{{route('pembeli.show',$iklan->slug)}}">
                                            <img src="/img/image-not-found.png" />
                                        </a>
                                    </div>
                                    @endif
                                    <div class="post-body">
                                        <h6><a href="{{route('pembeli.show',$iklan->slug)}}">{{$iklan->title}}</a></h6>
                                        <div class="post-meta">
                                            <span>{{$iklan->date}}</span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                  
                    
 @section('form-script')
  <script>
       $(function() {
            $("input[name=term]").autocomplete({
                source: "{{ route("pembeli.autocomplete") }}",
                minLength: 3,
                select: function(event, ui) {
                    $(this).val(ui.item.value);
                }
            });
        });
     </script>
      @endsection