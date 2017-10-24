<!DOCTYPE html>
<html lang="{{$locale -> slug}}">

  <head>
    
    @include( $information . '.common.head' )

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="{{ asset( 'js/jquery-ui.js' ) }}"></script>
   
  </head>

  <body class="{{$status}}" id="body">
  @include('vendor.loader')
<div href="#" id="go-to-top" onclick="scroll_to('body')" ></div>
        
        <div class="wrapper">

	        @yield('content')


        </div>   

        @include( $information . '.common.footer' )

        @include( $information . '.modals.answer' )
   
    <script src="{{ asset( 'js/jquery.backstretch.js' ) }}"></script>
    
    <script src="{{ asset( 'js/parallax.min.js' ) }}"></script>
    
    <script src="{{ asset( 'js/jquery.kwicks.min.js' ) }}"></script>
    
    <script src="{{ asset( 'js/bootstrap.min.js' ) }}"></script>
    
    <script src="{{ asset( 'js/owl.carousel.min.js' ) }}"></script>
    
    <script src="{{ asset( 'js/tinymce.min.js' ) }}"></script>

    <script src="{{ asset( 'js/toastr.min.js' ) }}"></script>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84297042-1', 'auto');
  ga('send', 'pageview');

</script>

    <script src="{{ asset( 'js/functions.js' ) }}"></script> 

    <script src="{{ asset( 'js/scripts.js' ) }}"></script>

    <script src="{{ asset( 'js/shared.js' ) }}"></script>

    <script src="{{ asset( 'js/signup.js' ) }}"></script>
  
  </body>
</html>