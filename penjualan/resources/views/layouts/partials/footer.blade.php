 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="copyright">&copy; Ahmad Ramdhani</p>
                </div>
                
            </div>
        </div>
    </footer>


  <script src="/js/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/bootstrap.min.js"></script>
     <script src="/jquery-ui/jquery-ui.min.js"></script>
      <script src="/datetimepicker/build/jquery.datetimepicker.full.js"></script>
      <script src="/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
      
</body>
</html>
                  @section('slidetoggle')
<script> 
     $("#slide-show").hide();
    $('#slide').click(function () {      
      $("#slide-show").slideToggle();
      return false;
    });
      $("#off").hide();
    $('#on').click(function () {      
      $("#off").slideToggle();
      return false;
    });

$('ul.pagination').addClass('no-margin pagination-sm');
$('#title').on('blur',function(){
 var theTitle=this.value.toLowerCase().trim(),
 slugInput=$('#slug'),
theSlug=theTitle.replace(/&/g,'-and-')
.replace(/[^a-z0-9-]+/g,'-')
.replace(/\-\-+/g,'-').replace(/^-+|-+$/g, '');

 slugInput.val(theSlug);

});
jQuery('#datetimepicker').datetimepicker({
  format:'Y-m-d H:i:s',
  lang:'ru'
});
    </script>

 @endsection