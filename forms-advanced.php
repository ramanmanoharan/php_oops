<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Advanced Forms | Porto Admin - Responsive HTML5 Template 2.2.0</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="vendor/animate/animate.css">

		<link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
		<link rel="stylesheet" href="vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
		<link rel="stylesheet" href="vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
		<link rel="stylesheet" href="vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="vendor/dropzone/basic.css" />
		<link rel="stylesheet" href="vendor/dropzone/dropzone.css" />
		<link rel="stylesheet" href="vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
		<link rel="stylesheet" href="vendor/summernote/summernote-bs4.css" />
		<link rel="stylesheet" href="vendor/codemirror/lib/codemirror.css" />
		<link rel="stylesheet" href="vendor/codemirror/theme/monokai.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../2.2.0" class="logo">
						<img src="img/logo.png" width="75" height="35" alt="Porto Admin" />
					</a>
					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.php" class="search nav-form">
						<div class="input-group">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-append">
								<button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fas fa-tasks"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="float-right badge badge-default">3</span>
									Tasks
								</div>
			
								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-1">
												<span class="message float-left">Generating Sales Report</span>
												<span class="message float-right text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-1">
												<span class="message float-left">Importing Contacts</span>
												<span class="message float-right text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-1">
												<span class="message float-left">Uploading something big</span>
												<span class="message float-right text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-1">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fas fa-envelope"></i>
								<span class="badge">4</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-right badge badge-default">230</span>
									Messages
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fas fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-right badge badge-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-thumbs-down bg-danger text-light"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-lock bg-warning text-light"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-signal bg-success text-light"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2017</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">John Doe Junior</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.php"><i class="fas fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fas fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.php"><i class="fas fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            Navigation
				        </div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>
				
				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">
				            
				                <ul class="nav nav-main">
				                    <li>
				                        <a class="nav-link" href="layouts-default.php">
				                            <i class="fas fa-home" aria-hidden="true"></i>
				                            <span>Dashboard</span>
				                        </a>                        
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="fas fa-columns" aria-hidden="true"></i>
				                            <span>Layouts</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="index.php">
				                                    Landing Page
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-default.php">
				                                    Default
				                                </a>
				                            </li>
				                            <li class="nav-parent">
				                                <a>
				                                    Boxed
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="layouts-boxed.php">
				                                            Static Header
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-boxed-fixed-header.php">
				                                            Fixed Header
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li class="nav-parent">
				                                <a>
				                                    Horizontal Menu Header
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="layouts-header-menu.php">
				                                            Pills
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-header-menu-stripe.php">
				                                            Stripe
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-header-menu-top-line.php">
				                                            Top Line
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-dark.php">
				                                    Dark
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-dark-header.php">
				                                    Dark Header
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-two-navigations.php">
				                                    Two Navigations
				                                </a>
				                            </li>
				                            <li class="nav-parent">
				                                <a>
				                                    Tab Navigation
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="layouts-tab-navigation-dark.php">
				                                            Tab Navigation Dark
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-tab-navigation.php">
				                                            Tab Navigation Light
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-tab-navigation-boxed.php">
				                                            Tab Navigation Boxed
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-light-sidebar.php">
				                                    Light Sidebar
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-left-sidebar-collapsed.php">
				                                    Left Sidebar Collapsed
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-left-sidebar-scroll.php">
				                                    Left Sidebar Scroll
				                                </a>
				                            </li>
				                            <li class="nav-parent">
				                                <a>
				                                    Left Sidebar Big Icons
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="layouts-left-sidebar-big-icons.php">
				                                            Left Sidebar Big Icons Dark
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-left-sidebar-big-icons-light.php">
				                                            Left Sidebar Big Icons Light
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li class="nav-parent">
				                                <a>
				                                    Left Sidebar Panel
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="layouts-left-sidebar-panel.php">
				                                            Left Sidebar Panel Dark
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-left-sidebar-panel-light.php">
				                                            Left Sidebar Panel Light
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li class="nav-parent">
				                                <a>
				                                    Left Sidebar Sizes
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="layouts-sidebar-sizes-xs.php">
				                                            Left Sidebar XS
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-sidebar-sizes-sm.php">
				                                            Left Sidebar SM
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-sidebar-sizes-md.php">
				                                            Left Sidebar MD
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-square-borders.php">
				                                    Square Borders
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="fas fa-copy" aria-hidden="true"></i>
				                            <span>Pages</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="pages-signup.php">
				                                    Sign Up
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-signin.php">
				                                    Sign In
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-recover-password.php">
				                                    Recover Password
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-lock-screen.php">
				                                    Locked Screen
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-user-profile.php">
				                                    User Profile
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-session-timeout.php">
				                                    Session Timeout
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-calendar.php">
				                                    Calendar
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-timeline.php">
				                                    Timeline
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-media-gallery.php">
				                                    Media Gallery
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-invoice.php">
				                                    Invoice
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-blank.php">
				                                    Blank Page
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-404.php">
				                                    404
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-500.php">
				                                    500
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-log-viewer.php">
				                                    Log Viewer
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-search-results.php">
				                                    Search Results
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="fas fa-tasks" aria-hidden="true"></i>
				                            <span>UI Elements</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="ui-elements-typography.php">
				                                    Typography
				                                </a>
				                            </li>
				                            <li class="nav-parent">
				                                <a class="nav-link" href="#">
				                                    Icons <span class="mega-sub-nav-toggle toggled float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-1"></span>
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-icons-elusive.php">
				                                            Elusive
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-icons-font-awesome.php">
				                                            Font Awesome
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-icons-line-icons.php">
				                                            Line Icons
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-icons-meteocons.php">
				                                            Meteocons
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-tabs.php">
				                                    Tabs
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-cards.php">
				                                    Cards
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-widgets.php">
				                                    Widgets
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-portlets.php">
				                                    Portlets
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-buttons.php">
				                                    Buttons
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-alerts.php">
				                                    Alerts
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-notifications.php">
				                                    Notifications
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-modals.php">
				                                    Modals
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-lightbox.php">
				                                    Lightbox
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-progressbars.php">
				                                    Progress Bars
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-sliders.php">
				                                    Sliders
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-carousels.php">
				                                    Carousels
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-accordions.php">
				                                    Accordions
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-toggles.php">
				                                    Toggles
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-nestable.php">
				                                    Nestable
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-tree-view.php">
				                                    Tree View
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-scrollable.php">
				                                    Scrollable
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-grid-system.php">
				                                    Grid System
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-charts.php">
				                                    Charts
				                                </a>
				                            </li>
				                            <li class="nav-parent">
				                                <a class="nav-link" href="#">
				                                    Animations <span class="mega-sub-nav-toggle float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-2"></span>
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-animations-appear.php">
				                                            Appear
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-animations-hover.php">
				                                            Hover
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li class="nav-parent">
				                                <a class="nav-link" href="#">
				                                    Loading <span class="mega-sub-nav-toggle float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-3"></span>
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-loading-overlay.php">
				                                            Overlay
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-loading-progress.php">
				                                            Progress
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-extra.php">
				                                    Extra
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li class="nav-parent nav-expanded nav-active">
				                        <a class="nav-link" href="#">
				                            <i class="fas fa-list-alt" aria-hidden="true"></i>
				                            <span>Forms</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="forms-basic.php">
				                                    Basic
				                                </a>
				                            </li>
				                            <li class="nav-active">
				                                <a class="nav-link" href="forms-advanced.php">
				                                    Advanced
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="forms-validation.php">
				                                    Validation
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="forms-layouts.php">
				                                    Layouts
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="forms-wizard.php">
				                                    Wizard
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="forms-code-editor.php">
				                                    Code Editor
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="fas fa-table" aria-hidden="true"></i>
				                            <span>Tables</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="tables-basic.php">
				                                    Basic
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="tables-advanced.php">
				                                    Advanced
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="tables-responsive.php">
				                                    Responsive
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="tables-editable.php">
				                                    Editable
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="tables-ajax.php">
				                                    Ajax
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="tables-pricing.php">
				                                    Pricing
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li>
				                        <a class="nav-link" href="mailbox-folder.php">
				                            <span class="float-right badge badge-primary">182</span>
				                            <i class="fas fa-envelope" aria-hidden="true"></i>
				                            <span>Mailbox</span>
				                        </a>                        
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
				                            <span>Maps</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="maps-google-maps.php">
				                                    Basic
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="maps-google-maps-builder.php">
				                                    Map Builder
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="maps-vector.php">
				                                    Vector
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="fas fa-asterisk" aria-hidden="true"></i>
				                            <span>Extra</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="extra-changelog.php">
				                                    Changelog
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="extra-ajax-made-easy.php">
				                                    Ajax Made Easy
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li>
				                        <a class="nav-link" href="http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler">
				                            <i class="fas fa-external-link-alt" aria-hidden="true"></i>
				                            <span>Front-End <em class="not-included">(Not Included)</em></span>
				                        </a>                        
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="fas fa-align-left" aria-hidden="true"></i>
				                            <span>Menu Levels</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a>
				                                    First Level
				                                </a>
				                            </li>
				                            <li class="nav-parent">
				                                <a class="nav-link" href="#">
				                                    Second Level
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a>
				                                            Second Level Link #1
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a>
				                                            Second Level Link #2
				                                        </a>
				                                    </li>
				                                    <li class="nav-parent">
				                                        <a class="nav-link" href="#">
				                                            Third Level
				                                        </a>
				                                        <ul class="nav nav-children">
				                                            <li>
				                                                <a>
				                                                    Third Level Link #1
				                                                </a>
				                                            </li>
				                                            <li>
				                                                <a>
				                                                    Third Level Link #2
				                                                </a>
				                                            </li>
				                                        </ul>
				                                    </li>
				                                </ul>
				                            </li>
				                        </ul>
				                    </li>
				
				                </ul>
				            </nav>
				
				            <hr class="separator" />
				
				            <div class="sidebar-widget widget-tasks">
				                <div class="widget-header">
				                    <h6>Projects</h6>
				                    <div class="widget-toggle">+</div>
				                </div>
				                <div class="widget-content">
				                    <ul class="list-unstyled m-0">
				                        <li><a href="#">Porto HTML5 Template</a></li>
				                        <li><a href="#">Tucson Template</a></li>
				                        <li><a href="#">Porto Admin</a></li>
				                    </ul>
				                </div>
				            </div>
				
				            <hr class="separator" />
				
				            <div class="sidebar-widget widget-stats">
				                <div class="widget-header">
				                    <h6>Company Stats</h6>
				                    <div class="widget-toggle">+</div>
				                </div>
				                <div class="widget-content">
				                    <ul>
				                        <li>
				                            <span class="stats-title">Stat 1</span>
				                            <span class="stats-complete">85%</span>
				                            <div class="progress">
				                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
				                                    <span class="sr-only">85% Complete</span>
				                                </div>
				                            </div>
				                        </li>
				                        <li>
				                            <span class="stats-title">Stat 2</span>
				                            <span class="stats-complete">70%</span>
				                            <div class="progress">
				                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
				                                    <span class="sr-only">70% Complete</span>
				                                </div>
				                            </div>
				                        </li>
				                        <li>
				                            <span class="stats-title">Stat 3</span>
				                            <span class="stats-complete">2%</span>
				                            <div class="progress">
				                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
				                                    <span class="sr-only">2% Complete</span>
				                                </div>
				                            </div>
				                        </li>
				                    </ul>
				                </div>
				            </div>
				        </div>
				
				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
				                    
				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>
				        
				
				    </div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body card-margin">
					<header class="page-header">
						<h2>Advanced Forms</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>Forms</span></li>
								<li><span>Advanced</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Select Replacement</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered" action="#">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Basic select</label>
												<div class="col-lg-6">
													<select data-plugin-selectTwo class="form-control populate">
														<optgroup label="Alaskan/Hawaiian Time Zone">
															<option value="AK">Alaska</option>
															<option value="HI">Hawaii</option>
														</optgroup>
														<optgroup label="Pacific Time Zone">
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>
														</optgroup>
														<optgroup label="Mountain Time Zone">
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option>
															<option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>
														</optgroup>
														<optgroup label="Central Time Zone">
															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>
														</optgroup>
														<optgroup label="Eastern Time Zone">
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option>
															<option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option>
															<option value="RI">Rhode Island</option>
															<option value="SC">South Carolina</option>
															<option value="VT">Vermont</option>
															<option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</optgroup>
													</select>
												</div>
											</div>
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Multi-Value Select</label>
												<div class="col-lg-6">
													<select multiple data-plugin-selectTwo class="form-control populate">
														<optgroup label="Alaskan/Hawaiian Time Zone">
															<option value="AK">Alaska</option>
															<option value="HI">Hawaii</option>
														</optgroup>
														<optgroup label="Pacific Time Zone">
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>
														</optgroup>
														<optgroup label="Mountain Time Zone">
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option>
															<option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>
														</optgroup>
														<optgroup label="Central Time Zone">
															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>
														</optgroup>
														<optgroup label="Eastern Time Zone">
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option>
															<option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option>
															<option value="RI">Rhode Island</option>
															<option value="SC">South Carolina</option>
															<option value="VT">Vermont</option>
															<option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</optgroup>
													</select>
												</div>
											</div>
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Placeholders </label>
												<div class="col-lg-6">
													<select data-plugin-selectTwo class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select a State", "allowClear": true }'>
														<optgroup label="Alaskan/Hawaiian Time Zone">
															<option value="AK">Alaska</option>
															<option value="HI">Hawaii</option>
														</optgroup>
														<optgroup label="Pacific Time Zone">
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>
														</optgroup>
														<optgroup label="Mountain Time Zone">
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option>
															<option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>
														</optgroup>
														<optgroup label="Central Time Zone">
															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>
														</optgroup>
														<optgroup label="Eastern Time Zone">
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option>
															<option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option>
															<option value="RI">Rhode Island</option>
															<option value="SC">South Carolina</option>
															<option value="VT">Vermont</option>
															<option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</optgroup>
													</select>
												</div>
											</div>
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Minimum Input</label>
												<div class="col-lg-6">
													<select data-plugin-selectTwo class="form-control populate" data-plugin-options='{ "minimumInputLength": 2 }'>
														<optgroup label="Alaskan/Hawaiian Time Zone">
															<option value="AK">Alaska</option>
															<option value="HI">Hawaii</option>
														</optgroup>
														<optgroup label="Pacific Time Zone">
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>
														</optgroup>
														<optgroup label="Mountain Time Zone">
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option><option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>
														</optgroup>
														<optgroup label="Central Time Zone">
															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>
														</optgroup>
														<optgroup label="Eastern Time Zone">
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option>
															<option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option>
															<option value="RI">Rhode Island</option>
															<option value="SC">South Carolina</option>
															<option value="VT">Vermont</option>
															<option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</optgroup>
													</select>
												</div>
											</div>
						
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Multi-select</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered" action="#">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Basic Multi-select</label>
												<div class="col-lg-6">
													<select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' id="ms_example0">
														<option value="cheese">Cheese</option>
														<option value="tomatoes" selected>Tomatoes</option>
														<option value="mozarella" selected>Mozzarella</option>
														<option value="mushrooms">Mushrooms</option>
														<option value="pepperoni">Pepperoni</option>
														<option value="onions">Onions</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Basic Multi-select (Only One)</label>
												<div class="col-lg-6">
													<select class="form-control" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' id="ms_example1">
														<option value="cheese" selected>Cheese</option>
														<option value="tomatoes">Tomatoes</option>
														<option value="mozarella">Mozzarella</option>
														<option value="mushrooms">Mushrooms</option>
														<option value="pepperoni">Pepperoni</option>
														<option value="onions">Onions</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">With Preselected Options</label>
												<div class="col-lg-6">
													<select class="form-control" multiple="multiple" data-plugin-options='{ "maxHeight": 200 }' data-plugin-multiselect id="ms_example2">
														<option value="cheese" selected>Cheese</option>
														<option value="tomatoes" selected>Tomatoes</option>
														<option value="mozarella" selected>Mozzarella</option>
														<option value="mushrooms">Mushrooms</option>
														<option value="pepperoni">Pepperoni</option>
														<option value="onions">Onions</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Link button</label>
												<div class="col-lg-6">
													<select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200, "buttonClass": "btn btn-link pl-0 pr-0" }' id="ms_example3">
														<option value="cheese">Cheese</option>
														<option value="tomatoes">Tomatoes</option>
														<option value="mozarella">Mozzarella</option>
														<option value="mushrooms">Mushrooms</option>
														<option value="pepperoni">Pepperoni</option>
														<option value="onions">Onions</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">With icon</label>
												<div class="col-lg-6">
													<div class="input-group input-group-select-append">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<i class="fas fa-th-list"></i>
															</span>
														</span>
														<select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' id="ms_example4">
															<option value="cheese">Cheese</option>
															<option value="tomatoes">Tomatoes</option>
															<option value="mozarella">Mozzarella</option>
															<option value="mushrooms">Mushrooms</option>
															<option value="pepperoni">Pepperoni</option>
															<option value="onions">Onions</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Select All Option</label>
												<div class="col-lg-6">
													<select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200, "includeSelectAllOption": true }' id="ms_example5">
														<optgroup label="Mathematics">
															<option value="analysis">Analysis</option>
															<option value="algebra">Linear Algebra</option>
															<option value="discrete">Discrete Mathematics</option>
															<option value="numerical">Numerical Analysis</option>
															<option value="probability">Probability Theory</option>
														</optgroup>
														<optgroup label="Computer Science">
															<option value="programming">Introduction to Programming</option>
															<option value="automata">Automata Theory</option>
															<option value="complexity">Complexity Theory</option>
															<option value="software">Software Engineering</option>
														</optgroup>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">With Search</label>
												<div class="col-lg-6">
													<select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200, "enableCaseInsensitiveFiltering": true }' id="ms_example6">
														<optgroup label="Mathematics">
															<option value="analysis">Analysis</option>
															<option value="algebra">Linear Algebra</option>
															<option value="discrete">Discrete Mathematics</option>
															<option value="numerical">Numerical Analysis</option>
															<option value="probability">Probability Theory</option>
														</optgroup>
														<optgroup label="Computer Science">
															<option value="programming">Introduction to Programming</option>
															<option value="automata">Automata Theory</option>
															<option value="complexity">Complexity Theory</option>
															<option value="software">Software Engineering</option>
														</optgroup>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Toggle All Button</label>
												<div class="col-lg-6">
													<div class="btn-group">
														<select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' data-multiselect-toggle-all="true" id="ms_example7">
															<option value="cheese">Cheese</option>
															<option value="tomatoes">Tomatoes</option>
															<option value="mozarella">Mozzarella</option>
															<option value="mushrooms">Mushrooms</option>
															<option value="pepperoni">Pepperoni</option>
															<option value="onions">Onions</option>
														</select>
														<div class="btn-group-append">
															<button id="ms_example7-toggle" class="btn btn-primary ml-2">Select All</button>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Tag Autocomplete</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered form-bordered">
											<div class="form-group row">
												<label for="tags-input" class="col-lg-3 control-label text-lg-right pt-2">Input Tags</label>
												<div class="col-lg-7">
													<input name="tags" id="tags-input" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
													<p>
														Just add <code>data-role="tagsinput"</code> to your input field to automatically change it to a tags input field.
													</p>
												</div>
											</div>
											<div class="form-group row">
												<label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">True multi value</label>
												<div class="col-lg-7">
													<select id="tags-input-multiple" multiple data-role="tagsinput" data-tag-class="badge badge-primary">
														<option value="Amsterdam">Amsterdam</option>
														<option value="Washington">Washington</option>
														<option value="Sydney">Sydney</option>
														<option value="Beijing">Beijing</option>
													</select>
													<p>
														Use a <code>&lt;select multiple /&gt;</code> as your input element for a tags input, to gain true multivalue support. Instead of a comma separated string, the values will be set in an array. Existing <code>&lt;option /&gt;</code> elements will automatically be set as tags. This makes it also possible to create tags containing a comma.
													</p>
												</div>
											</div>
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Toggle Switches</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered">
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2 col-lg-3">Large</label>
												<div class="col-lg-9">
													<div class="switch switch-lg switch-primary">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
													<div class="switch switch-lg switch-success">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
													<div class="switch switch-lg switch-warning">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
													<div class="switch switch-lg switch-danger">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
													<div class="switch switch-lg switch-info">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
													<div class="switch switch-lg switch-dark">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
												</div>
											</div>
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2 col-lg-3">Default</label>
												<div class="col-lg-9">
													<div class="switch switch-primary">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
													<div class="switch switch-success">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
													<div class="switch switch-warning">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
													<div class="switch switch-danger">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
													<div class="switch switch-info">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
													<div class="switch switch-dark">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
												</div>
											</div>
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2 col-lg-3">Small</label>
												<div class="col-lg-9">
													<div class="switch switch-sm switch-primary">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
													<div class="switch switch-sm switch-success">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
													<div class="switch switch-sm switch-warning">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
													<div class="switch switch-sm switch-danger">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
													<div class="switch switch-sm switch-info">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
													<div class="switch switch-sm switch-dark">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div>
												</div>
											</div>
										</form>
									</div>
								</section>
							</div>
						</div>
						
						
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Slider Range</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered">
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">One Value</label>
												<div class="col-lg-6">
													<div class="m-md slider-primary" data-plugin-slider data-plugin-options='{ "value": 50, "range": "min", "max": 100 }' data-plugin-slider-output="#listenSlider">
														<input id="listenSlider" type="hidden" value="50" />
													</div>
													<p class="output">The current <code>value</code> is: <b>50</b></p>
												</div>
											</div>
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Range</label>
												<div class="col-lg-6">
													<div class="m-md slider-primary" data-plugin-slider data-plugin-options='{ "values": [ 25, 75 ], "range": true, "max": 100 }' data-plugin-slider-output="#listenSlider2">
														<input id="listenSlider2" type="hidden" value="25, 75" />
													</div>
													<p class="output2">The <code>min</code> is: <b class="min">25</b> and the <code>max</code> is: <b class="max">75</b></p>
												</div>
											</div>
						
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Spinners</h2>
									</header>
									<div class="card-body">
						
										<form class="form-horizontal form-bordered" action="#">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Default Spinner</label>
												<div class="col-lg-6">
													<div data-plugin-spinner>
														<div class="input-group form-control-small">
															<input type="text" class="spinner-input form-control" readonly="readonly">
															<div class="spinner-buttons input-group-btn btn-group-vertical">
																<button type="button" class="btn spinner-up btn-xs btn-default">
																	<i class="fas fa-angle-up"></i>
																</button>
																<button type="button" class="btn spinner-down btn-xs btn-default">
																	<i class="fas fa-angle-down"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Disabled</label>
												<div class="col-lg-6">
													<div data-plugin-spinner data-plugin-options='{ "disabled": true }'>
														<div class="input-group form-control-small">
															<input type="text" class="spinner-input form-control" maxlength="3" readonly>
															<div class="spinner-buttons input-group-btn btn-group-vertical">
																<button type="button" class="btn spinner-up btn-xs">
																	<i class="fas fa-angle-up"></i>
																</button>
																<button type="button" class="btn spinner-down btn-xs">
																	<i class="fas fa-angle-down"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Horizontal buttons</label>
												<div class="col-lg-6">
													<div data-plugin-spinner data-plugin-options='{ "value":0, "min": 0, "max": 10 }'>
														<div class="input-group" style="width:150px;">
															<input type="text" class="spinner-input form-control" maxlength="3" readonly>
															<div class="input-group-append">
																<button type="button" class="btn btn-default spinner-up">
																	<i class="fas fa-angle-up"></i>
																</button>
																<button type="button" class="btn btn-default spinner-down">
																	<i class="fas fa-angle-down"></i>
																</button>
															</div>
														</div>
													</div>
													<p>
														with <code>max</code> value set to 10
													</p>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Alternative</label>
												<div class="col-lg-6">
													<div data-plugin-spinner data-plugin-options='{ "value":0, "step": 5, "min": 0, "max": 200 }'>
														<div class="input-group">
															<div class="input-group-prepend">
																<button type="button" class="btn btn-default spinner-up">
																	<i class="fas fa-plus"></i>
																</button>
															</div>
															<input type="text" class="spinner-input form-control" maxlength="3" readonly>
															<div class="input-group-append">
																<button type="button" class="btn btn-default spinner-down">
																	<i class="fas fa-minus"></i>
																</button>
															</div>
														</div>
													</div>
													<p>
														with <code>step</code> set to 5
													</p>
												</div>
											</div>
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Masked Inputs</h2>
										<p class="card-subtitle">
											Input masks allows a user to more easily enter fixed width input where you would like them to enter the data in a certain format (dates,phones, etc).
										</p>
									</header>
									<div class="card-body">
										<div class="form-body">
											<form class="form-horizontal form-bordered">
												<div class="form-group row">
													<label class="col-lg-3 control-label text-lg-right pt-2">Date</label>
													<div class="col-lg-6">
														<div class="input-group">
															<span class="input-group-prepend">
																<span class="input-group-text">
																	<i class="fas fa-calendar-alt"></i>
																</span>
															</span>
															<input id="date" data-plugin-masked-input data-input-mask="99/99/9999" placeholder="__/__/____" class="form-control">
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 control-label text-lg-right pt-2">Phone</label>
													<div class="col-lg-6">
														<div class="input-group">
															<span class="input-group-prepend">
																<span class="input-group-text">
																	<i class="fas fa-phone"></i>
																</span>
															</span>
															<input id="phone" data-plugin-masked-input data-input-mask="(999) 999-9999" placeholder="(123) 123-1234" class="form-control">
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 control-label text-lg-right pt-2">Product Key</label>
													<div class="col-lg-6">
														<div class="input-group">
															<span class="input-group-prepend">
																<span class="input-group-text">
																	<i class="fas fa-tag"></i>
																</span>
															</span>
															<input id="product-key" data-plugin-masked-input data-input-mask="(aa) 99-999" placeholder="(ab) 12-123" class="form-control">
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 control-label text-lg-right pt-2" for="fc_inputmask_1">SSN</label>
													<div class="col-lg-6">
														<div class="input-group">
															<span class="input-group-prepend">
																<span class="input-group-text">
																	<i class="fas fa-plus"></i>
																</span>
															</span>
															<input id="fc_inputmask_1" data-plugin-masked-input data-input-mask="999-99-9999" placeholder="___-__-____" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-12">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Date Picker</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered">
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Default Datepicker</label>
												<div class="col-lg-6">
													<div class="input-group">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<i class="fas fa-calendar-alt"></i>
															</span>
														</span>
														<input type="text" data-plugin-datepicker class="form-control">
													</div>
												</div>
											</div>
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Date range</label>
												<div class="col-lg-6">
													<div class="input-daterange input-group" data-plugin-datepicker>
														<span class="input-group-prepend">
															<span class="input-group-text">
																<i class="fas fa-calendar-alt"></i>
															</span>
														</span>
														<input type="text" class="form-control" name="start">
														<span class="input-group-text border-left-0 border-right-0 rounded-0">
															to
														</span>
														<input type="text" class="form-control" name="end">
													</div>
												</div>
											</div>
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Multiple dates</label>
												<div class="col-lg-6">
													<div class="input-group">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<i class="fas fa-calendar-alt"></i>
															</span>
														</span>
														<input type="text" data-plugin-datepicker data-plugin-options='{ "multidate": true }' class="form-control">
													</div>
												</div>
											</div>
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Inline</label>
												<div class="col-lg-3">
													<div data-plugin-datepicker data-plugin-skin="primary">
												</div>
											</div>
						
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-12">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Time Pickers</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered">
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Default Time Picker</label>
												<div class="col-lg-6">
													<div class="input-group">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<i class="far fa-clock"></i>
															</span>
														</span>
														<input type="text" data-plugin-timepicker class="form-control">
													</div>
												</div>
											</div>
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">24 Hour Mode Time Picker</label>
												<div class="col-lg-6">
													<div class="input-group">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<i class="far fa-clock"></i>
															</span>
														</span>
														<input type="text" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false }'>
													</div>
												</div>
											</div>
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Specify a step for the minute field</label>
												<div class="col-lg-6">
													<div class="input-group">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<i class="far fa-clock"></i>
															</span>
														</span>
														<input type="text" data-plugin-timepicker class="form-control" data-plugin-options='{ "minuteStep": 15 }'>
													</div>
												</div>
											</div>
						
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-12">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Color Pickers</h2>
									</header>
									<div class="card-body">
						
										<form class="form-horizontal form-bordered" action="#">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Default</label>
												<div class="col-lg-6">
													<input type="text" data-plugin-colorpicker class="colorpicker-default form-control" value="#8fff00"/>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">RGBA</label>
												<div class="col-lg-6">
													<input type="text" data-plugin-colorpicker class="colorpicker-rgba form-control" value="rgb(0,194,255,0.78)" data-color-format="rgba" data-plugin-options="{'format': 'rgb'}" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Horizontal</label>
												<div class="col-lg-6">
													<input type="text" data-plugin-colorpicker class="colorpicker-rgba form-control" value="#8fff00" data-horizontal="true"/>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Component</label>
												<div class="col-lg-6">
													<div class="input-group color" data-plugin-colorpicker>
														<span class="input-group-prepend"><span class="input-group-text input-group-addon"><i></i></span></span>
														<input type="text" class="form-control" value="#0088cc">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Button</label>
												<div class="col-lg-6 col-xs-11">
													<a href="#" class="btn btn-primary" data-plugin-colorpicker data-color-format="hex" data-color="rgb(255, 255, 255)">Select color</a>
												</div>
											</div>
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-12">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">MaxLength Control</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered form-bordered" action="#">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="textareaDefault">Input</label>
												<div class="col-lg-6">
													<input class="form-control" data-plugin-maxlength maxlength="20" />
													<p>
														<code>max-length</code> set to 20.
													</p>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="textareaDefault">Textarea</label>
												<div class="col-lg-6">
													<textarea class="form-control" rows="3" data-plugin-maxlength maxlength="140"></textarea>
													<p>
														<code>max-length</code> set to 140.
													</p>
												</div>
											</div>
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">File Upload Drag'n Drop</h2>
									</header>
									<div class="card-body">
										<form action="/upload" class="dropzone dz-square" id="dropzone-example"></form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">WYSIWYG Editors</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered" method="post" action="test.php">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Summernote</label>
												<div class="col-lg-9">
													<div class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><p>Start typing...</p></div>
												</div>
											</div>
											<input type="submit">
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Markdown Editor</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Bootstrap Markdown</label>
												<div class="col-lg-9">
													<textarea name="content" data-plugin-markdown-editor rows="10">Start typing...</textarea>
												</div>
											</div>
										</form>
									</div>
								</section>
							</div>
						</div>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close d-md-none">
							Collapse <i class="fas fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark"></div>
			
								<ul>
									<li>
										<time datetime="2017-04-19T00:00+00:00">04/19/2017</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="vendor/common/common.js"></script>
		<script src="vendor/nanoscroller/nanoscroller.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="vendor/jquery-ui/jquery-ui.js"></script>
		<script src="vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="vendor/select2/js/select2.js"></script>
		<script src="vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
		<script src="vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
		<script src="vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<script src="vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<script src="vendor/fuelux/js/spinner.js"></script>
		<script src="vendor/dropzone/dropzone.js"></script>
		<script src="vendor/bootstrap-markdown/js/markdown.js"></script>
		<script src="vendor/bootstrap-markdown/js/to-markdown.js"></script>
		<script src="vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
		<script src="vendor/codemirror/lib/codemirror.js"></script>
		<script src="vendor/codemirror/addon/selection/active-line.js"></script>
		<script src="vendor/codemirror/addon/edit/matchbrackets.js"></script>
		<script src="vendor/codemirror/mode/javascript/javascript.js"></script>
		<script src="vendor/codemirror/mode/xml/xml.js"></script>
		<script src="vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<script src="vendor/codemirror/mode/css/css.js"></script>
		<script src="vendor/summernote/summernote-bs4.js"></script>
		<script src="vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
		<script src="vendor/ios7-switch/ios7-switch.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<!-- Examples -->
		<script src="js/examples/examples.advanced.form.js"></script>

	</body>
</html>