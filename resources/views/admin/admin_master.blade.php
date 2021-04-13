<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Jakjamok Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 


        <!-- plugin css -->
        <link href="{{asset('backend/assets/libs/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/libs/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/libs/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/libs/datatables/select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 


        <meta name="user-id" content="1" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
        <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />    
        

            <!-- Sweet alert CDN link -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

      <!--Summar note link-->

      <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


    </head>

    <body>

        <div id="app">
                    
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link nav-user mr-0 waves-effect waves-light" href="{{route('admin.logout')}}">Logout</a>
                    </li>
                </ul> 

                <ul class="list-unstyled menu-left mb-0">          
                    <li class="float-left">
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
                    <li class="app-search d-none d-sm-block">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fe-search"></i>
                                    </button> 
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="left-side-menu">
                <div class="slimscroll-menu">
                    <a href="index.html" class="logo text-center mb-4">
                        <span class="logo-lg">
                            <img src="{{asset('media/jj.png')}}" alt="" height="20">
                        </span>
                        <span class="logo-sm">
                            <img src="{{asset('media/jj.png')}}" alt="" height="24">
                        </span>
                    </a>
                    <div id="sidebar-menu">
                        <ul class="metismenu" id="side-menu"> 
                            <li>
                                <a href="{{URL::to('admin/dashboard')}}"> 
                                    <i class="fe-airplay"></i>
                                    {{-- <span class="badge badge-success float-right">01</span> --}}
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-hard-drive"></i>
                                    <span>Category </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">

                                    <li>
                                        <a href="{{route('admin.index.category')}}">All Category</a> 
                                    </li>

                                    <li>
                                        <a href="{{route('admin.index.subcategory')}}">All Sub Category</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-airplay"></i>
                                    <span>Product </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{route('admin.create.product')}}">Add Product</a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.index.product')}}">All Product</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>


            <router-view></router-view>   
            @yield('admin_body') 



        </div>
        <div class="rightbar-overlay"></div>
        </div>

        <!--JS SCRIPT LINK-->   

        <script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>  
        <script src="{{asset('backend/assets/libs/chart-js/Chart.bundle.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/pages/dashboard.init.js')}}"></script>
        <script src="{{asset('backend/assets/js/app.min.js')}}"></script> 
        {{-- <script src="{{asset('js/app.js')}}"></script> --}} 

        <!-- datatable js -->
        <script src="{{asset('backend/assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
        
        <script src="{{asset('backend/assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables/buttons.flash.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables/buttons.print.min.js')}}"></script>

        <script src="{{asset('backend/assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables/dataTables.select.min.js')}}"></script>

        <!-- Datatables init -->
        <script src="{{asset('backend/assets/js/pages/datatables.init.js')}}"></script>




        <!--Normal sweet alert nonification-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

<script>
  @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){ 
        case 'info':
             toastr.info("{{ Session::get('messege') }}");
             break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
           toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
  @endif
</script>  

<script>  
$(document).on("click", "#delete", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
       swal({
         title: "Are you Want to delete?",
         text: "OK? or Cancle",
         icon: "warning",
         buttons: true,
         dangerMode: true,
       })
       .then((willDelete) => {
         if (willDelete) {
              window.location.href = link;
         } else {
           swal("Safe Data!");
         }
       });
   });
</script>

<!-- APPROVE PRODUCT SCRIPT -->

<script>  
$(document).on("click", "#approveProduct", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
       swal({
         title: "Are you Want to approve this product? ",
         text: "Approve? or Cancle",
         icon: "warning",
         buttons: true,
         dangerMode: true,
       })
       .then((willDelete) => {
         if (willDelete) {
              window.location.href = link;
         } else {
           swal("Pending!"); 
         }
       });
   });
</script>
<!-- BLOCK PRODUCT SCRIPT -->

<script>  
    $(document).on("click", "#blockProduct", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
           swal({
             title: "Are you Want to block this product? ",
             text: "Block? or Cancle",
             icon: "warning",
             buttons: true,
             dangerMode: true,
           })
           .then((willDelete) => {
             if (willDelete) {
                  window.location.href = link;
             } else {
               swal("Safe!"); 
             }
           });
       });
  </script>
      <!-- UNBLOCK PRODUCT SCRIPT -->

<script>  
    $(document).on("click", "#unblockProduct", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
           swal({
             title: "Are you Want to unblock this product? ",
             text: "Un Block? or Cancle",
             icon: "warning",
             buttons: true,
             dangerMode: true,
           })
           .then((willDelete) => {
             if (willDelete) {
                  window.location.href = link;
             } else {
               swal("Safe!"); 
             }
           });
       });
  </script>

<script>  
$(document).on("click", "#unblock", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
       swal({
         title: "Are you Want to unblock?",
         text: "Unblock? or Cancle",
         icon: "warning",
         buttons: true,
         dangerMode: true,
       })
       .then((willDelete) => {
         if (willDelete) {
              window.location.href = link;
         } else {
           swal("Safe!"); 
         }
       });
   });
</script>

<script>  
$(document).on("click", "#block", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
       swal({
         title: "Are you Want to block?",
         text: "Block? or Cancle",
         icon: "warning",
         buttons: true,
         dangerMode: true,
       })
       .then((willDelete) => {
         if (willDelete) {
              window.location.href = link;
         } else {
           swal("Safe!"); 
         }
       });
   });
</script>

<script>  
$(document).on("click", "#approve", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
       swal({
         title: "Are you Want to approve?",
         text: "Approve? or Not",
         icon: "warning",
         buttons: true,
         dangerMode: true,
       })
       .then((willDelete) => {
         if (willDelete) {
              window.location.href = link;
         } else {
           swal("Safe!"); 
         }
       });
   });
</script>


<script>  
$(document).on("click", "#verifyMail", function(e){
    e.preventDefault();
    var link = 'verify/email-for-all-user';
       swal({
         title: "Email verify for all customer? ",
         text: "Are you sure? or Cancle",
         icon: "warning",
         buttons: true,
         dangerMode: true,
       })
       .then((willDelete) => {
         if (willDelete) {
              window.location.href = link;
         } else {
           swal("Data no change!"); 
         }
       });
   });
</script>

<script>  
$(document).on("click", "#confirm", function(e){
    e.preventDefault();
    var link = 'verify/email-for-all-user';
       swal({
         title: "Are You Sure? ",
         text: "Are you sure? or Cancle",
         icon: "warning",
         buttons: true,
         dangerMode: true,
       })
       .then((willDelete) => {
         if (willDelete) {
              window.location.href = link;
         } else {
           swal("No Change!"); 
         }
       });
   });
</script>

<script>  
$(document).on("click", "#confirmCustomerReceivedOrder", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
       swal({
         title: "Customer Recived Order?",
         text: "Are you sure? or No",
         icon: "warning", 
         buttons: true,
         dangerMode: true,
       })
       .then((willDelete) => {
         if (willDelete) {
              window.location.href = link;
         } else {
           swal("No Change!"); 
         }
       });
   });
</script>



<script>
  $(document).ready(function() {
      $('#summernote').summernote();
  });
</script>



    </body>
</html>