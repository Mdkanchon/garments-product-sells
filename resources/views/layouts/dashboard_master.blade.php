@guest


@else
        <!DOCTYPE html>
        <html lang="en">
          <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Twitter -->
            <meta name="twitter:site" content="@themepixels">
            <meta name="twitter:creator" content="@themepixels">
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:title" content="Starlight">
            <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
            <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

            <!-- Facebook -->
            <meta property="og:url" content="http://themepixels.me/starlight">
            <meta property="og:title" content="Starlight">
            <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

            <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
            <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
            <meta property="og:image:type" content="image/png">
            <meta property="og:image:width" content="1200">
            <meta property="og:image:height" content="600">

            <!-- Meta -->
            <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
            <meta name="author" content="ThemePixels">

            <title>EOGAS Dashboard</title>

            <!-- vendor css -->
            <link href="{{ asset('backend_assets/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
            <link href="{{ asset('backend_assets/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
            <link href="{{ asset('backend_assets/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
            <link href="{{ asset('backend_assets/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
            <link href="{{ asset('backend_assets/lib/summernote/summernote-bs4.css') }}" rel="stylesheet">
            <link href="{{ asset('backend_assets/css/bootstrap-tagsinput.css') }}" rel="stylesheet">

            <!-- Starlight CSS -->
            <link rel="stylesheet" href="{{ asset('backend_assets') }}/css/starlight.css">

            {{-- Datatable css --}}
            <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">


          </head>

          <body>

            <!-- ########## START: LEFT PANEL ########## -->
            <div class="sl-logo"><a href="">EOGAS</a></div>
            <div class="sl-sideleft">


              <div class="sl-sideleft-menu">
                <a href="{{ route('home') }}" class="sl-menu-link @yield('home')">
                  <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                  </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
                <a href="{{ url('/') }}" class="sl-menu-link" target="_blank">
                  <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Visit Site</span>
                  </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
                <a href="#" class="sl-menu-link @yield('Category')">
                  <div class="sl-menu-item">
                    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                    <span class="menu-item-label">Categories</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                  </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
                <ul class="sl-menu-sub nav flex-column">
                  <li class="nav-item"><a href="{{ route('category') }}" class="nav-link @yield('category')">Category</a></li>
                  <li class="nav-item"><a href="{{ route('sub.category') }}" class="nav-link @yield('subcategory')">Sub Category</a></li>
                  <li class="nav-item"><a href="{{ route('brand') }}" class="nav-link @yield('brand')">Brand</a></li>
                </ul>

                <a href="{{ route('coupon') }}" class="sl-menu-link @yield('coupon')">
                  <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Coupon</span>
                  </div><!-- menu-item -->
                </a><!-- sl-menu-link -->

                <a href="#" class="sl-menu-link @yield('products')">
                  <div class="sl-menu-item">
                    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                    <span class="menu-item-label">Products</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                  </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
                <ul class="sl-menu-sub nav flex-column">
                  <li class="nav-item"><a href="{{ route('add.product') }}" class="nav-link @yield('addproduct')">Add Product</a></li>
                  <li class="nav-item"><a href="" class="nav-link @yield('allproduct')">All Product</a></li>
                </ul>

                <a href="#" class="sl-menu-link @yield('others')">
                  <div class="sl-menu-item">
                    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                    <span class="menu-item-label">Others</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                  </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
                <ul class="sl-menu-sub nav flex-column">
                  <li class="nav-item"><a href="{{ route('newsletter') }}" class="nav-link @yield('newsletter')">Newsletters</a></li>
                </ul>

              </div><!-- sl-sideleft-menu -->

              <br>
            </div><!-- sl-sideleft -->
            <!-- ########## END: LEFT PANEL ########## -->

            <!-- ########## START: HEAD PANEL ########## -->
            <div class="sl-header">
              <div class="sl-header-left">
                <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
                <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
              </div><!-- sl-header-left -->
              <div class="sl-header-right">
                <nav class="nav">
                  <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                      <span class="logged-name"><span class="hidden-md-down">{{ Auth::user()->name }}</span>
                      <img src="{{ asset('backend_assets') }}/img/img3.jpg" class="wd-32 rounded-circle" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                      <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                        <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                        <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                        <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                        <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                      <i class="icon ion-power"></i> Sign Out</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                          </form>
                        </li>
                      </ul>
                    </div><!-- dropdown-menu -->
                  </div><!-- dropdown -->
                </nav>
                <div class="navicon-right">
                  <a id="btnRightMenu" href="" class="pos-relative">
                    <i class="icon ion-ios-bell-outline"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger"></span>
                    <!-- end: if statement -->
                  </a>
                </div><!-- navicon-right -->
              </div><!-- sl-header-right -->
            </div><!-- sl-header -->
            <!-- ########## END: HEAD PANEL ########## -->

            <!-- ########## START: RIGHT PANEL ########## -->
            <div class="sl-sideright">
              <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
                </li>
              </ul><!-- sidebar-tabs -->

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
                  <div class="media-list">
                    <!-- loop starts here -->
                    <a href="" class="media-list-link">
                      <div class="media">
                        <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                          <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                          <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                          <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                        </div>
                      </div><!-- media -->
                    </a>
                    <!-- loop ends here -->
                    <a href="" class="media-list-link">
                      <div class="media">
                        <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                          <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                          <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                          <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                        </div>
                      </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link">
                      <div class="media">
                        <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                          <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                          <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                          <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                        </div>
                      </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link">
                      <div class="media">
                        <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                          <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                          <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                          <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                        </div>
                      </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link">
                      <div class="media">
                        <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                          <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                          <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                          <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                        </div>
                      </div><!-- media -->
                    </a>
                  </div><!-- media-list -->
                  <div class="pd-15">
                    <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
                  </div>
                </div><!-- #messages -->

                <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
                  <div class="media-list">
                    <!-- loop starts here -->
                    <a href="" class="media-list-link read">
                      <div class="media pd-x-20 pd-y-15">
                        <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                          <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                          <span class="tx-12">October 03, 2017 8:45am</span>
                        </div>
                      </div><!-- media -->
                    </a>
                    <!-- loop ends here -->
                    <a href="" class="media-list-link read">
                      <div class="media pd-x-20 pd-y-15">
                        <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                          <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                          <span class="tx-12">October 02, 2017 12:44am</span>
                        </div>
                      </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                      <div class="media pd-x-20 pd-y-15">
                        <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                          <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                          <span class="tx-12">October 01, 2017 10:20pm</span>
                        </div>
                      </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                      <div class="media pd-x-20 pd-y-15">
                        <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                          <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                          <span class="tx-12">October 01, 2017 6:08pm</span>
                        </div>
                      </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                      <div class="media pd-x-20 pd-y-15">
                        <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                          <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 12 others in a post.</p>
                          <span class="tx-12">September 27, 2017 6:45am</span>
                        </div>
                      </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                      <div class="media pd-x-20 pd-y-15">
                        <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                          <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                          <span class="tx-12">September 28, 2017 11:30pm</span>
                        </div>
                      </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                      <div class="media pd-x-20 pd-y-15">
                        <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                          <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p>
                          <span class="tx-12">September 26, 2017 11:01am</span>
                        </div>
                      </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                      <div class="media pd-x-20 pd-y-15">
                        <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                          <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                          <span class="tx-12">September 23, 2017 9:19pm</span>
                        </div>
                      </div><!-- media -->
                    </a>
                  </div><!-- media-list -->
                </div><!-- #notifications -->

              </div><!-- tab-content -->
            </div><!-- sl-sideright -->
            <!-- ########## END: RIGHT PANEL ########## --->
@endguest

      @yield('dashboard_content')

      <footer class="sl-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2023. EOGAS. All Rights Reserved.</div>
          
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="#"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="#"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{ asset('backend_assets') }}/lib/jquery/jquery.js"></script>
    <script src="{{ asset('backend_assets') }}/lib/popper.js/popper.js"></script>
    <script src="{{ asset('backend_assets') }}/lib/bootstrap/bootstrap.js"></script>
    <script src="{{ asset('backend_assets') }}/lib/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('backend_assets') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="{{ asset('backend_assets') }}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="{{ asset('backend_assets') }}/lib/d3/d3.js"></script>
    <script src="{{ asset('backend_assets') }}/lib/rickshaw/rickshaw.min.js"></script>
    <script src="{{ asset('backend_assets') }}/lib/chart.js/Chart.js"></script>
    <script src="{{ asset('backend_assets') }}/lib/Flot/jquery.flot.js"></script>
    <script src="{{ asset('backend_assets') }}/lib/Flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('backend_assets') }}/lib/Flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('backend_assets') }}/lib/flot-spline/jquery.flot.spline.js"></script>

    <script src="{{ asset('backend_assets') }}/js/starlight.js"></script>
    <script src="{{ asset('backend_assets') }}/js/ResizeSensor.js"></script>
    <script src="{{ asset('backend_assets') }}/js/dashboard.js"></script>
    <script src="{{ asset('backend_assets') }}/lib/medium-editor/medium-editor.js"></script>

    {{-- ajax --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('select[name="category_id"]').on('change', function(){
          var category_id = $(this).val();
          if (category_id) {
            $.ajax({
              url: "{{ url('/get/subcategory/') }}/"+category_id,
              type: "GET",
              dataType: "json",
              success:function(data){
                var d = $('select[name="sub_category_id"]').empty();
                $.each(data, function(key, value){
                    $('select[name="sub_category_id"]').append('<option value="'+value.id+'">'+value.
                    subcategory_name+'</option>');
                });
              },

            });
          }
          else {
            alert('danger');
          }
        });
      });
    </script>

    <script src="{{ asset('backend_assets') }}/lib/summernote/summernote-bs4.min.js"></script>
    <script src="{{ asset('backend_assets') }}/js/bootstrap-tagsinput.js"></script>

    <script type="text/javascript">
    $('#size').tagsinput({
      confirmKeys: [13, 44]
      });
    </script>

    <script type="text/javascript">
      $('#summernote').summernote({
      height: 150
      })
    </script>

    {{-- Data table js --}}

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#example').DataTable();
      } );
    </script>

    {{-- image picker js code --}}
    <script type="text/javascript">
      function readURL(input){
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(event){
            $('#image_one')
              .attr('src', event.target.result)
              .width(80)
              .height(80);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
  </body>
</html>
