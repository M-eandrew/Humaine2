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
      
        <!-- partial:partials/_navbar.html -->
        
        @include('worker.navbar')
        @include('worker.rbody')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <p>Hi</p>

        </div>
       
  </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('worker.script')
    <!-- End custom js for this page -->
  </body>
</html>