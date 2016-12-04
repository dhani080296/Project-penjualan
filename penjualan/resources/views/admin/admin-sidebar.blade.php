                        
             @if(Request::segment(1)=='admin_home')
                    <div class="search-widget">
                    <form action="{{url('admin_home')}}" role="search" id=".ui-autocomplete">
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
                    @elseif(Request::segment(1)=='admin_comment')
                    <div class="search-widget">
                    <form action="{{url('admin_comment')}}" role="search" id=".ui-autocomplete">
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
                     @elseif(Request::segment(1)=='admin_user')
                      <div class="search-widget">
                    <form action="{{url('admin_user')}}" role="search" id=".ui-autocomplete">
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
                      @elseif(Request::segment(1)=='admin_iklan')
                       <div class="search-widget">
                    <form action="" role="search" id=".ui-autocomplete">
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
                   

            @endif

            
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            <h4><a href="" id="slide">Menu</a></h4>
                        </div>
                        <div class="panel-body" id="slide-show">
                            <ul class="nav nav-pills nav-stacked" >
                            
                                <li class="{{Request::segment(1)=='admin_comment' ? 'active':''}}">
                                    <a href="{{url('admin_comment')}}">Comment</a>
                                    
                                </li>
                                <li class="{{Request::segment(1)=='admin_home' ? 'active':''}}">
                                    <a href="{{url('admin_home')}}">Category</a>
                                    
                                </li>
                                <li class="{{Request::segment(1)=='admin_user' ? 'active':''}}">
                                    <a href="{{url('admin_user')}}">User</a>
                                    
                                </li>
                                <li class="{{Request::segment(1)=='admin_iklan' ? 'active':''}}">
                                    <a href="{{url('admin_iklan')}}">Iklan Product</a>
                                    
                                </li>
                                <li class="{{Request::segment(1)=='admin' ? 'active':''}}">
                                    <a href="{{route('admin.edit',Auth::guard('admin_user')->user()->id)}}">Update Admin</a>
                                    
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                       
                        
                       <br>
                      
                   
                  
                    
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