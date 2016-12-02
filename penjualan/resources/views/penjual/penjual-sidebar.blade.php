                        
                 
                   <div class="search-widget">
                    <form action="{{url('/home')}}" role="search" id=".ui-autocomplete">
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