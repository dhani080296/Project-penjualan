 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="copyright">&copy; Ahmad Ramdhani</p>
                </div>
                <div class="col-md-4">
                    <nav>
                        <ul class="social-icons">
                            <li><a href="#" class="i fa fa-facebook"></a></li>
                            <li><a href="#" class="i fa fa-twitter"></a></li>
                            <li><a href="#" class="i fa fa-google-plus"></a></li>
                            <li><a href="#" class="i fa fa-github"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>


  <script src="/js/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/bootstrap.min.js"></script>
     <script src="/jquery-ui/jquery-ui.min.js"></script>
      <script src="/js/app.js"></script>
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
 window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

 @endsection