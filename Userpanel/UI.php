<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-ui-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:38 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search, agency, agent, classified, directory, google maps, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
<meta name="description" content="Houzing - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>STAYSEARCH</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
  <div class="preloader"></div>
  
  <!-- Main Header Nav -->
  <header class="header-nav menu_style_home_one style2 navbar-scrolltofixed stricky main-menu">
    <div class="container">
      <!-- Ace Responsive Menu -->
      <nav> 
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
        	<img class="nav_logo_img img-fluid" src="images/header-logo.svg" alt="header-logo.svg">
          <button type="button" id="menu-btn">
          	<span class="icon-bar"></span>
          	<span class="icon-bar"></span>
          	<span class="icon-bar"></span>
          </button>
        </div>
        <a href="index-2.html" class="navbar_brand float-left dn-md">
					<img class="logo1 img-fluid" src="images/header-logo2.svg" alt="header-logo.svg">
					<img class="logo2 img-fluid" src="images/header-logo2.svg" alt="header-logo2.svg">
					<span>Staysearch</span>
				</a> 
        <!-- Responsive Menu Structure-->
	        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
            <li> 
                
                <a href="index.php"><span class="title">Home</span></a>
            
          </li>
          <li> <a href="#"><span class="title">Properties</span></a>
            <ul>
              <li> 
                  
                  <a href="listing.php">Listing Properties</a> 
                
              </li>
              <li>
                
                  <a href="listingmap.php">Listing Map</a>
                
              </li>
            </ul>
          </li>
          <li> <a href="#"><span class="title">User</span></a>
            <!-- Level Two-->
            <ul>
              <li>   
                  <a href="dashboard.php">User Dashboard</a> 
              </li>
            </ul>
        </li>
        <li> <a href="#"><span class="title">Pages</span></a>
            <ul>
              
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="myaccount.php">My Account</a></li>
              <li><a href="package.php">Plans</a></li>
              <li><a href="compare.html">Compare</a></li>
              <li><a href="error.php">404 Page</a></li>
              <li><a href="tearm.php">Terms and Conditions</a></li>
              <!-- <li><a href="page-coming-soon.html">Coming Soon</a></li> 
              <li><a href="page-faq.html">Faq</a></li>
              <li><a href="page-ui-element.html">UI Elements</a></li>-->
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
          <li class="list-inline-item list_c"><a href="#"><span class="flaticon-phone mr7"></span> <span>(+91)1234567890</span></a></li>
          <li class="list-inline-item list_s"><a href="#" class="btn" data-toggle="modal" data-target="#logInModal"><span class="flaticon-user"></span></a></li>
          <li class="list-inline-item add_listing"><a href="page-dashboard-new-property.html"><span class="icon flaticon-button"></span><span class="dn-lg"> Add Property </span></a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- Modal -->
  <div class="sign_up_modal modal fade" id="logInModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body container pb30 pl0 pr0 pt0">
          <div class="row">
            <div class="col-lg-12">
              <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sign in</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content container" id="myTabContent">
            <div class="row mt30 tab-pane fade show active pl20 pr20" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="col-lg-12">
                <div class="login_form">
                  <form action="#">
                    <div class="mb-2 mr-sm-2">
                      <label for="formGroupExampleInput" class="form-label mb0">Login</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ali Tufa..">
                    </div>
                    <div class="form-group mb5">
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                      <label class="custom-control-label" for="exampleCheck2">Remember me</label>
                      <a class="btn-fpswd float-right text-thm" href="#">Forgot</a>
                    </div>
                    <button type="submit" class="btn btn-log btn-block btn-thm mt20">Sign in</button>
                    <div class="row mt10">
                      <div class="col-lg-12">
                        <div class="user_log_info">
                          <p>Username: <span>agency or agent</span></p>
                          <p>Password: <span>demo</span></p>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="row mt30 tab-pane fade pl20 pr20" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="col-lg-12">
                <div class="sign_up_form">
                  <form action="#">
                    <div class="form-group input-group">
                      <input type="text" class="form-control" placeholder="Login">
                    </div>
                    <div class="form-group input-group">
                      <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="form-group input-group">
                      <input type="text" class="form-control" placeholder="Last name">
                    </div>
                    <div class="form-group input-group">
                      <select class="selectpicker form-control" data-width="100%">
                        <option data-tokens="banking">User role</option>
                        <option data-tokens="digital&creative">User role 2</option>
                        <option data-tokens="retail">User role 3</option>
                        <option data-tokens="humanresource">User role 4</option>
                      </select>
                    </div>
                    <div class="form-group input-group">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group input-group mb20">
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group input-group mb30">
                      <input type="password" class="form-control" placeholder="Re-enter password">
                    </div>
                    <button type="submit" class="btn btn-signup btn-block btn-dark mb0">REGISTER</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Main Header Nav For Mobile -->
  <div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
      <div class="header stylehome1">
        <div class="main_logo_home2 text-center"> <img class="nav_logo_img img-fluid mt10" src="images/header-logo.svg" alt="header-logo.svg"> <span class="mt15">Houzing</span> </div>
        <ul class="menu_bar_home2">
          <li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" href="#"></a></li>
          <li class="list-inline-item"><a class="muser_icon" href="#" data-toggle="modal" data-target="#logInModal"><span class="flaticon-user"></span></a></li>
          <li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
        </ul>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
      <ul>
        <li><span>Home</span>
          <ul>
            <li><a href="index-2.html">Home V1</a></li>
            <li><a href="index2.html">Home V2</a></li>
            <li><a href="index3.html">Home V3</a></li>
            <li><a href="index4.html">Home V4</a></li>
            <li><a href="index5.html">Home V5</a></li>
            <li><a href="index6.html">Home V6</a></li>
            <li><a href="index7.html">Home V7</a></li>
            <li><a href="index8.html">Home V8</a></li>
            <li><a href="index9.html">Home V9</a></li>
            <li><a href="index10.html">Home V10</a></li>
          </ul>
        </li>
        <li><span>Listing</span>
          <ul>
						<li><span>Listing Styles</span>
							<ul>
                <li><a href="page-listing-v1.html">Listing v1</a></li>
                <li><a href="page-listing-v2.html">Listing v2</a></li>
                <li><a href="page-listing-v3.html">Listing v3</a></li>
                <li><a href="page-listing-v4.html">Listing v4</a></li>
                <li><a href="page-listing-v5.html">Listing v5</a></li>
                <li><a href="page-listing-v6.html">Listing v6</a></li>
                <li><a href="page-listing-all.html">Listing All</a></li>
							</ul>
						</li>
						<li><span>Listing Map</span>
							<ul>
                <li><a href="page-listing-v7.html">Map v1</a></li>
                <li><a href="page-listing-v8.html">Map v2</a></li>
                <li><a href="page-listing-v9.html">Map v3</a></li>
                <li><a href="page-listing-v10.html">Map v4</a></li>
                <li><a href="page-listing-v11.html">Map v5</a></li>
                <li><a href="page-listing-v12.html">Map v6</a></li>
                <li><a href="page-listing-v13.html">Map v7</a></li>
							</ul>
						</li>
						<li><span>Listing Single</span>
							<ul>
                <li><a href="page-listing-single-v1.html">Single V1</a></li>
                <li><a href="page-listing-single-v2.html">Single V2</a></li>
                <li><a href="page-listing-single-v3.html">Single V3</a></li>
                <li><a href="page-listing-single-v4.html">Single V4</a></li>
                <li><a href="page-listing-single-v5.html">Single V5</a></li>
                <li><a href="page-listing-single-v6.html">Single V6</a></li>
                <li><a href="page-listing-single-v7.html">Single V7</a></li>
                <li><a href="page-listing-single-v8.html">Single V8</a></li>
							</ul>
						</li>
            <li><span>User Detils</span>
              <ul>
                <li><a href="page-dashboard.html">Dashboard</a></li>
                <li><a href="page-dashboard-profile.html">My Profile</a></li>
                <li><a href="page-dashboard-property.html">My Listings</a></li>
                <li><a href="page-dashboard-new-property.html">New Listings</a></li>
                <li><a href="page-dashboard-favorites.html">Favorites</a></li>
                <li><a href="page-dashboard-save-search.html">Save Search</a></li>
                <li><a href="page-dashboard-invoices.html">My Invoice</a></li>
                <li><a href="page-dashboard-message.html">Inbox</a></li>
                <li><a href="page-dashboard-logout.html">Logout</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><span>Pages</span>
          <ul>
            <li><span>Shop</span>
              <ul>
                <li><a href="page-shop.html">Shop Pages</a></li>
                <li><a href="page-shop-single.html">Shop Single</a></li>
                <li><a href="page-shop-cart.html">Cart</a></li>
                <li><a href="page-shop-checkout.html">Checkout</a></li>
                <li><a href="page-shop-order.html">Order</a></li>
              </ul>
            </li>
            <li><a href="page-about.html">About Us</a></li>
				<li><span>Blog</span>
					<ul>
            <li><a href="page-blog-grid.html">Blog Grid</a></li>
            <li><a href="page-blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
            <li><a href="page-blog-details.html">Blog Details</a></li>
            <li><a href="page-blog-list.html">Blog List</a></li>
            <li><a href="page-blog-single.html">Blog Single</a></li>
            <li><a href="page-blog-single2.html">Blog Single v2</a></li>
					</ul>
				</li>
              <li><a href="page-coming-soon.html">Coming Soon</a></li>
            <li><a href="page-gallery.html">Gallery</a></li>
            <li><a href="page-faq.html">Faq</a></li>
            <li><a href="page-login.html">My Account</a></li>
            <li><a href="page-pricing.html">Pricing V1</a></li>
            <li><a href="page-compare.html">Compare</a></li>
            <li><a href="page-error.html">404 Page</a></li>
            <li><a href="page-terms.html">Terms and Conditions</a></li>
            <li><a href="page-ui-element.html">UI Elements</a></li>
          </ul>
        </li>
        <li><a href="page-contact.html">Contact</a></li>
        <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm rounded" href="#"><span class="icon flaticon-button mr5"></span> Create Listing</a></li>
      </ul>
    </nav>
  </div>
  
  <!-- Inner Page Breadcrumb -->
  <section class="inner_page_breadcrumb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6">
          <div class="breadcrumb_content">
            <h2 class="breadcrumb_title">UI Elements</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">UI Elements</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- UI Accordions, Tabs & other elements -->
  <section class="our-ui-elements">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="shortcode_widget_accprdons">
            <h4 class="short_code_title">Accordions</h4>
            <div class="faq_according">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header active" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Why won't my payment go through? </button>
                    </h2>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.<br><br>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> How do I get a refund? </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.<br><br>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> How do I redeem a coupon? </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.<br><br>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Changing account name </button>
                    </h2>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.<br><br>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="shortcode_widget_tab">
            <h4 class="short_code_title">Tabs</h4>
            <div class="ui_kit_tab mt30"> 
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home">Items 1</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu1">Items 2</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu2">Items 3</a> </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div id="home2" class="container tab-pane active">
                  <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus. <br><br>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                </div>
                <div id="menu1" class="container tab-pane fade">
                  <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus. <br><br>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                </div>
                <div id="menu2" class="container tab-pane fade">
                  <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus. <br><br>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                </div>
              </div>
            </div>
            <div class="ui_kit_tab style2 mt30"> 
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2">Items 1</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu4">Items 2</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu5">Items 3</a> </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div id="home3" class="container tab-pane active">
                  <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus. <br><br>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                </div>
                <div id="menu4" class="container tab-pane fade">
                  <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus. <br><br>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                </div>
                <div id="menu5" class="container tab-pane fade">
                  <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus. <br><br>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="shortcode_widget_table">
            <h4 class="short_code_title">Table</h4>
            <div class="ui_kit_table">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Description</th>
                    <th scope="col">Hour</th>
                    <th scope="col">Quantity</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="body-color">Design UX and UI</td>
                    <td class="body-color">14</td>
                    <td class="body-color">3</td>
                  </tr>
                  <tr class="bgc-alice-blue">
                    <td class="body-color">Design UX and UI</td>
                    <td class="body-color">14</td>
                    <td class="body-color">3</td>
                  </tr>
                  <tr>
                    <td class="body-color">Design UX and UI</td>
                    <td class="body-color">14</td>
                    <td class="body-color">3</td>
                  </tr>
                  <tr class="bgc-alice-blue">
                    <td class="body-color">Design UX and UI</td>
                    <td class="body-color">14</td>
                    <td class="body-color">3</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="shortcode_widget_message_box">
            <h4 class="short_code_title">Message Boxes</h4>
            <div class="ui_kit_message_box">
              <div class="alert alart_style_one alert-dismissible fade show" role="alert"> Please fill in all the fields required
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              </div>
            </div>
            <div class="ui_kit_message_box">
              <div class="alert alart_style_two alert-dismissible fade show" role="alert"> You did it, now relax and enjoy it
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              </div>
            </div>
            <div class="ui_kit_message_box">
              <div class="alert alart_style_three alert-dismissible fade show" role="alert"> Change this and that and try again
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              </div>
            </div>
            <div class="ui_kit_message_box">
              <div class="alert alart_style_four alert-dismissible fade show" role="alert"> Please check the information below
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="shortcode_widget_buttons">
            <h4 class="short_code_title">Buttons</h4>
            <div class="ui_kit_button mb35">
              <button type="button" class="btn btn-lg btn-primary">Primary</button>
              <button type="button" class="btn btn-lg btn-secondary">Secondary</button>
              <button type="button" class="btn btn-lg btn-success">Success</button>
              <button type="button" class="btn btn-lg btn-danger">Danger</button>
              <button type="button" class="btn btn-lg btn-warning">Warning</button>
              <button type="button" class="btn btn-lg btn-info">Info</button>
              <button type="button" class="btn btn-lg btn-light mt10">Light</button>
            </div>
            <div class="ui_kit_button mb35">
              <button type="button" class="btn btn-lg btn-thm">Button</button>
              <button type="button" class="btn btn-lg btn-dark">Button</button>
              <button type="button" class="btn btn-lg btn-gray">Button</button>
              <button type="button" class="btn btn-lg btn-transparent">Button</button>
              <button type="button" class="btn btn-lg btn-green">Button</button>
              <button type="button" class="btn btn-lg btn-white">Button</button>
            </div>
            <div class="ui_kit_button mb35">
              <button type="button" class="btn dbxshad btn-lg btn-thm circle white">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-thm circle">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-dark circle">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-thm2 circle">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-thm3 circle">Button</button>
            </div>
            <div class="ui_kit_button">
              <button type="button" class="btn dbxshad btn-lg btn-thm white">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-thm rounded">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-dark rounded">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-thm2 rounded">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-thm3 rounded">Button</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="shortcode_form_title">
            <h4 class="short_code_title">Form</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="shortcode_widget_form">
            <div class="ui_kit_input mb25">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Input Text">
                </div>
              </form>
            </div>
            <div class="ui_kit_select_box">
              <h5 class="short_code_title">Select boxes</h5>
              <select class="selectpicker custom-select-lg mb40">
                <option value="one">London</option>
                <option value="Two">New York</option>
                <option value="Three">Paris</option>
                <option value="Three">Istanbul</option>
                <option value="Three">Amsterdam</option>
                <option value="Three">Rome</option>
              </select>
            </div>
            <div class="ui_kit_textarea mt30">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="6" placeholder="Textarea"></textarea>
                </div>
              </form>
            </div>
            <div class="ui_kit_tooltip mt50">
              <h4 class="short_code_title">Tooltips</h4>
              <button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="Top"> Top </button>
              <button type="button" class="btn" data-toggle="tooltip" data-placement="bottom" title="Bottom"> Bottom </button>
              <button type="button" class="btn" data-toggle="tooltip" data-placement="left" title="Left"> Left </button>
              <button type="button" class="btn" data-toggle="tooltip" data-placement="right" title="Right"> Right </button>
            </div>
            <div class="price_range_slider_new mt100 mt30-sm mb30-md">
              <div class="wrapper">
                <h4 class="short_code_title">Range Slider</h4>
                <div class="uilayout_range mt100">
                  <input class="range-uilayouts" type="text" value="40,892" name="points"/>
                  <!-- <input class="range-uilayouts" type="text" min="0" max="1000" value="40,892" name="points"/>  -->  

                  <div class="slider-range mt80"></div>
                  <input type="text" class="amount" placeholder="$11,200"> 
                  <input type="text" class="amount2" placeholder="$15,200">

                  <div class="mt50" id="slider"></div>
                  <span id="slider-range-value1"></span>
                  <span id="slider-range-value2"></span>

                  <div class="sidebar_range_slider mb30 mt100">
                    <input class="range-example-km mb20" value="50" type="text">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="ui_kit_input mb25 mt30-sm">
            <h5 class="short_code_title">Input Text Focus</h5>
            <form>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Ali Tufa...">
              </div>
            </form>
          </div>
          <div class="shortcode_widget_multiselect mb25">
            <h5 class="short_code_title">Multiple select focus</h5>
            <div class="ui_kit_multi_select_box">
              <select class="selectpicker" multiple>
                <option>London</option>
                <option>New York</option>
                <option>Paris</option>
                <option>Istanbul</option>
                <option>Amsterdam</option>
                <option>Rome</option>
              </select>
            </div>
          </div>
          <div class="ui_kit_select_search mb25">
            <h5 class="short_code_title">Live Search focus</h5>
            <select class="selectpicker" data-live-search="true" data-width="100%" placeholder="Search">
              <option data-tokens="banking">Banking</option>
              <option data-tokens="digital&creative">Designer</option>
              <option data-tokens="retail">Developer</option>
              <option data-tokens="humanresource">Digital</option>
            </select>
          </div>
          <div class="row mt50">
            <div class="col-lg-4">
              <div class="shortcode_widget_radiobox">
                <h5 class="mb20 short_code_title">Radiobox</h5>
                <div class="ui_kit_radiobox">
                  <div class="radio">
                    <input id="radio_one" name="radio" type="radio" checked="">
                    <label for="radio_one"><span class="radio-label"></span> Item</label>
                  </div>
                  <div class="radio">
                    <input id="radio_two" name="radio" type="radio">
                    <label for="radio_two"><span class="radio-label"></span> Item</label>
                  </div>
                  <div class="radio">
                    <input id="radio_three" name="radio" type="radio">
                    <label for="radio_three"><span class="radio-label"></span> Item</label>
                  </div>
                  <div class="radio">
                    <input id="radio_four" name="radio" type="radio">
                    <label for="radio_four"><span class="radio-label"></span> Item</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="shortcode_widget_checkbox">
                <h5 class="mb20 short_code_title">Checkbox</h5>
                <div class="ui_kit_checkbox">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Items</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Items</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">Items</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">Items</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="shortcode_widget_switch">
                <h5 class="mb20 short_code_title">Switch</h5>
                <div class="ui_kit_whitchbox">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Items</label>
                  </div>
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                    <label class="custom-control-label" for="customSwitch2">Items</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ui_kit_progress_bar mt50">
            <div class="shortcode_widget_progressbar">
              <h4 class="mb40">Progress bars</h4>
              <div class="progress-levels">
                <div class="progress-box wow animated" data-wow-delay="100ms" data-wow-duration="1500ms"> <br>
                  <div class="inner">
                    <div class="bar">
                      <div class="bar-innner">
                        <div class="bar-fill" data-percent="90">
                          <div class="percent">90%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="progress-box wow animated" data-wow-delay="200ms" data-wow-duration="1500ms"> <br>
                  <div class="inner">
                    <div class="bar">
                      <div class="bar-innner">
                        <div class="bar-fill" data-percent="50">
                          <div class="percent">50%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="progress-box wow animated" data-wow-delay="300ms" data-wow-duration="1500ms"> <br>
                  <div class="inner">
                    <div class="bar">
                      <div class="bar-innner">
                        <div class="bar-fill" data-percent="40">
                          <div class="percent">40%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt100">
        <div class="col-lg-12">
          <div class="ui_page_heading mb40">
            <h4 class="short_code_title mb35">Typography</h4>
            <h5 class="short_code_title mb15">Course Description</h5>
            <p class="mb25">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue. Nullam tempus sollicitudin cursus. Ut et adipiscing erat. Curabitur this is a text link libero tempus congue.</p>
            <p class="mb20">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</p>
            <blockquote class="blockquote mt50">
              <h4 class="title">This is going to be a challenging dance. Our teachers are true change makers. They are providers and they are leaders and this period in history is going to shine a light on their vital role in our children’s emotional health.</h4>
            </blockquote>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ui_page_heading mb30-md">
            <h4 class="short_code_title mb25">Requirettments</h4>
            <ul class="order_list list-style-type-bullet list-inline-item">
              <li><a href="#">We do not require any previous experience or pre-defined skills to take this course. A great orientation would be enough to master UI/UX design.</a></li>
              <li><a href="#">A computer with a good internet connection.</a></li>
              <li><a href="#">Adobe Photoshop (OPTIONAL)</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ui_page_heading">
            <h4 class="mb25 short_code_title">What you'll learn</h4>
            <ul class="order_list list-style-check-circle list-inline-item">
              <li><a href="#">Become a UI/UX designer.</a></li>
              <li><a href="#">You will be able to start earning money Figma skills.</a></li>
              <li><a href="#">Build a UI project from beginning to end.</a></li>
              <li><a href="#">Work with colors & fonts.</a></li>
              <li><a href="#">You will create your own UI Kit.</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row mt40">
        <div class="col-lg-12">
          <h4 class="mb25 short_code_title">Counter</h4>
          <div class="event_counter_plugin_container">
            <div class="event_counter_plugin_content">
              <ul>
                <li class="text-center">days<span id="days"></span></li>
                <li class="text-center">Hours<span id="hours"></span></li>
                <li class="text-center">Minutes<span id="minutes"></span></li>
                <li class="text-center">Seconds<span id="seconds"></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt40">
        <div class="col-lg-4">
          <h4 class="mb25 short_code_title">Custom Dropdown</h4>
          <div class="listing_price_tag posr">
            <div class="tag_btn mega_tags_dropdown">Tags <span class="fa fa-angle-down"></span></div>
            <div class="tag_dropdown_content">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="ui_kit_checkbox selectable-list tal-767">
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                        <label class="custom-control-label mb0" for="customCheck5">Accepts Credit Cards</label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                        <label class="custom-control-label mb0" for="customCheck6">Smoking Allowed</label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                        <label class="custom-control-label mb0" for="customCheck7">Bike Parking</label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck8">
                        <label class="custom-control-label mb0" for="customCheck8">Street Parking</label>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="ui_kit_checkbox selectable-list tal-767">
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck9">
                        <label class="custom-control-label mb0" for="customCheck9">Wireless Internet</label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck10">
                        <label class="custom-control-label mb0" for="customCheck10">Alcohol</label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck11">
                        <label class="custom-control-label mb0" for="customCheck11">Pet Friendly</label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt40">
        <div class="col-lg-12">
          <h4 class="mb25 short_code_title">Extra Testimonials</h4>
        </div>
        <div class="col-lg-12">
          <div class="testimonial_slider_home3">
            <div class="item">
              <div class="testimonial_post_home3">
                <div class="details">
                  <ul class="client_review">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  </ul>
                  <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                </div>
                <div class="thumb">
                  <img src="images/testimonial/1.png" alt="1.png">
                  <h4 class="title">Augusta Silva <br><small>Sales Manager</small></h4>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial_post_home3">
                <div class="details">
                  <ul class="client_review">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  </ul>
                  <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                </div>
                <div class="thumb">
                  <img src="images/testimonial/2.png" alt="2.png">
                  <h4 class="title">Helene Powers <br><small>Sales Manager</small></h4>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial_post_home3">
                <div class="details">
                  <ul class="client_review">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  </ul>
                  <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                </div>
                <div class="thumb">
                  <img src="images/testimonial/3.png" alt="3.png">
                  <h4 class="title">Augusta Silva <br><small>Sales Manager</small></h4>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial_post_home3">
                <div class="details">
                  <ul class="client_review">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  </ul>
                  <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                </div>
                <div class="thumb">
                  <img src="images/testimonial/1.png" alt="1.png">
                  <h4 class="title">Augusta Silva <br><small>Sales Manager</small></h4>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial_post_home3">
                <div class="details">
                  <ul class="client_review">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  </ul>
                  <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                </div>
                <div class="thumb">
                  <img src="images/testimonial/2.png" alt="2.png">
                  <h4 class="title">Helene Powers <br><small>Sales Manager</small></h4>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial_post_home3">
                <div class="details">
                  <ul class="client_review">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  </ul>
                  <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                </div>
                <div class="thumb">
                  <img src="images/testimonial/3.png" alt="3.png">
                  <h4 class="title">Augusta Silva <br><small>Sales Manager</small></h4>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial_post_home3">
                <div class="details">
                  <ul class="client_review">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  </ul>
                  <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                </div>
                <div class="thumb">
                  <img src="images/testimonial/1.png" alt="1.png">
                  <h4 class="title">Augusta Silva <br><small>Sales Manager</small></h4>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial_post_home3">
                <div class="details">
                  <ul class="client_review">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  </ul>
                  <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                </div>
                <div class="thumb">
                  <img src="images/testimonial/2.png" alt="2.png">
                  <h4 class="title">Helene Powers <br><small>Sales Manager</small></h4>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial_post_home3">
                <div class="details">
                  <ul class="client_review">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  </ul>
                  <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                </div>
                <div class="thumb">
                  <img src="images/testimonial/3.png" alt="3.png">
                  <h4 class="title">Augusta Silva <br><small>Sales Manager</small></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Our Footer -->
  <?php
    include './footer.php';
  ?>
  <a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a> </div>
<!-- Wrapper End --> 
<script src="js/jquery-3.6.0.js"></script> 
<script src="js/jquery-migrate-3.0.0.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.mmenu.all.js"></script> 
<script src="js/ace-responsive-menu.js"></script> 
<script src="js/bootstrap-select.min.js"></script> 
<script src="js/snackbar.min.js"></script> 
<script src="js/simplebar.js"></script> 
<script src="js/parallax.js"></script> 
<script src="js/scrollto.js"></script> 
<script src="js/jquery-scrolltofixed-min.js"></script> 
<script src="js/jquery.counterup.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/progressbar.js"></script> 
<script src="js/slider.js"></script>
<script src="js/pricing-slider.js"></script>
<script src="js/timepicker.js"></script> 
<script src="js/single-counter.js"></script> 
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-ui-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:38 GMT -->
</html>