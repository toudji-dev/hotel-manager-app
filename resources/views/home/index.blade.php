<!DOCTYPE html>
<html lang="en">
   <head>

    @include('home.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin=""></script>


  </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>

        @include('home.header')

      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->

      @include('home.banner')

      <!-- end banner -->
      <!-- about -->

      @include('home.about')

      <!-- end about -->
      <!-- our_room -->

      @include('home.room')

      <!-- end our_room -->
      <!-- gallery -->

      @include('home.gallery')

      <!-- end gallery -->
      <!-- blog -->

      @include('home.blog')

      <!-- end blog -->
      <!--  contact -->
      @include('home.contact')
      <!-- end contact -->
      <!--  footer -->
      <footer>
   @include('home.footer')


   <script type="text/javascript">
    
        $(window).scroll(function() {
            sessionStorage.scrolltop = $(this).scrolltop();
          });

          $(document).ready(function(){
             if(sessionStorage.scrolltop != "undefined"){
                $(window).scrolltop(sessionStorage.scrolltop);
             }
          });
    </script>
   </body>
</html>
