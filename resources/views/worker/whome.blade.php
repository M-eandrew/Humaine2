<!DOCTYPE html>
<html lang="en">
  <head>
    
  @include('worker.css')

  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
       @include('worker.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        
        @include('worker.navbar')

        <!-- partial -->
        @include('worker.bodyhome')
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('worker.script')
    <!-- End custom js for this page -->
  </body>
</html>