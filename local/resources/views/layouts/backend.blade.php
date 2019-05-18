<!DOCTYPE html>
<html lang="en">

<head>
    <title>ananblinds</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="softdevltd Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <meta name="csrf-token" content="{{csrf_token()}}">

    <!-- Favicon icon -->
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets//backend')}}/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('assets//backend')}}/assets//pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets//backend')}}/assets//icon/feather/css/feather.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets//backend')}}/assets//icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets//backend')}}/assets//icon/icofont/css/icofont.css">

    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets//backend')}}/assets//css/font-awesome-n.min.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets//backend')}}/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets//backend')}}/bower_components/bootstrap-tagsinput/css/bootstrap-tagsinput.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="{{asset('assets//backend')}}/bower_components/chartist/css/chartist.css" type="text/css" media="all">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets//backend')}}/assets//css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets//backend')}}/assets//css/widget.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets//backend')}}/assets//css/pages.css">
    <!-- sweetalert -->
    <script src="{{asset('assets//backend')}}/assets//js/sweetalert.min.js"></script>

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <!-- [ Pre-loader ] end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- [ Header ] start -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="{{route('index')}}" target="_blank">
                            View Site
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close">
										<i class="feather icon-x input-group-text"></i>
									</span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn">
										<i class="feather icon-search input-group-text"></i>
									</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                <i class="full-screen feather icon-maximize"></i>
                            </a>
                            </li>
                        </ul>
                        <ul class="nav-right">


                            <li class="user-profile header-notification">

                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{asset('assets/backend')}}/assets//images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span> </span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            <i class="feather icon-log-out"></i> Logout

                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>




            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- [ navigation menu ] start -->
                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigation-label">Navigation</div>
                                <ul class="pcoded-item pcoded-left-item">


                                    <li class="">
                                        <a href="{{route('home')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                          <i class="feather icon-home"></i>
                                        </span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
                                    </li>



                                    <li class="">
                                        <a href="{{route('blog.index')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                          <i class="feather icon-mail"></i>
                                        </span>
                                            <span class="pcoded-mtext">Order</span>
                                        </a>
                                    </li>







                                </ul>

                            </div>
                        </div>
                    </nav>
                    <!-- [ navigation menu ] end -->

                    @yield('contents')

                    <!-- [ style Customizer ] start -->
                    <div id="styleSelector">
                    </div>
                    <!-- [ style Customizer ] end -->
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script type="text/javascript" src="{{asset('assets/backend')}}/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/backend')}}/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/backend')}}/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/backend')}}/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- waves js -->
    <script src="{{asset('assets/backend')}}/assets//pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('assets/backend')}}/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- Float Chart js -->
    <script src="{{asset('assets/backend')}}/assets//pages/chart/float/jquery.flot.js"></script>
    <script src="{{asset('assets/backend')}}/assets//pages/chart/float/jquery.flot.categories.js"></script>
    <script src="{{asset('assets/backend')}}/assets//pages/chart/float/curvedLines.js"></script>
    <script src="{{asset('assets/backend')}}/assets//pages/chart/float/jquery.flot.tooltip.min.js"></script>
    <!-- Chartlist charts -->
    <script src="{{asset('assets/backend')}}/bower_components/chartist/js/chartist.js"></script>
    <!-- amchart js -->
    <script src="{{asset('assets/backend')}}/assets//pages/widget/amchart/amcharts.js"></script>
    <script src="{{asset('assets/backend')}}/assets//pages/widget/amchart/serial.js"></script>
    <script src="{{asset('assets/backend')}}/assets//pages/widget/amchart/light.js"></script>

     <!-- tyniymce editor  -->
        <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
    <!-- data-table js -->
    <script src="{{asset('assets/backend')}}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets/backend')}}/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Tags js -->
    <script type="text/javascript" src="{{asset('assets/backend')}}/bower_components/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

    <!-- Custom js -->
    <script src="{{asset('assets/backend')}}/assets//js/pcoded.min.js"></script>
    <script src="{{asset('assets/backend')}}/assets//js/vertical/vertical-layout.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/backend')}}/assets//pages/dashboard/custom-dashboard.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/backend')}}/assets//js/script.min.js"></script>


  <script>
  $(document).ready(function() {
    var table=$('#lang-dt').DataTable();

    } );
</script>

 <script>
   var editor_config = {
     path_absolute :"http://localhost/softdevltd/",
     selector: "textarea.my-editor",
     plugins: [
       "advlist autolink lists link image charmap print preview hr anchor pagebreak",
       "searchreplace wordcount visualblocks visualchars code fullscreen",
       "insertdatetime media nonbreaking save table contextmenu directionality",
       "emoticons template paste textcolor colorpicker textpattern"
     ],
     toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
     relative_urls: false,
     file_browser_callback : function(field_name, url, type, win) {
       var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
       var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

       var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
       if (type == 'image') {
         cmsURL = cmsURL + "&type=Images";
       } else {
         cmsURL = cmsURL + "&type=Files";
       }

       tinyMCE.activeEditor.windowManager.open({
         file : cmsURL,
         title : 'Filemanager',
         width : x * 0.8,
         height : y * 0.8,
         resizable : "yes",
         close_previous : "no"
       });
     }
   };

   tinymce.init(editor_config);
 </script>



<script>
    function mysweet(){
      swal({
        title: "Are you sure?",
        text: "Do you really want to delete data!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
    }
</script>

<script>


$('.hidenote').delay(6000).fadeOut();
$('#msg').delay(6000).fadeOut();
$('.faq_softdevltd').hide();
$('.add_faq').click(function(){
  $('.add_faq').hide();
  $('.faq_softdevltd').slideToggle();
});


</script>

  @yield('custom-script')

</body>

</html>
