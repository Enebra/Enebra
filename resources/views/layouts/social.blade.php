<!DOCTYPE html>

<html lang="{{$locale -> slug }}">

  <head>

      @include($social . '.common.head')
 
  </head>

  <body class="social">
    @include('vendor.loader')

        <div class="wrapper">

    @include($social . '.common.header')
                    
            <div class="container-fluid ">
              <div class="row">
              		@yield('content')
             </div>     
            </div>  
         </div>
    
	@include($social . '.common.footer')
  
  </body>
</html>