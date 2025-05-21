<x-app-layout>

</x-app-layout>


<html lang="en">
   <head>

    @include('home.css')

   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      
      <!-- end header inner -->
      <!-- end header -->
      
      
      <!-- our_room -->

      @include('home.room')

      <!-- end our_room -->
      <!-- gallery -->

      @include('home.gallery')

      <!-- end gallery -->
      <!-- blog -->

      
      <!--  contact -->
      @include('home.contact')
      <!-- end contact -->
      <!--  footer -->
      <footer>
   @include('home.footer')
   </body>
</html>



