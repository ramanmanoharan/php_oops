<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Advanced Tables | Porto Admin - Responsive HTML5 Template 2.2.0</title>
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
		<link rel="stylesheet" href="vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
		<link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />

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
				                    <li class="nav-parent">
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
				                            <li>
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
				                    <li class="nav-parent nav-expanded nav-active">
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
				                            <li class="nav-active">
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

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Advanced Tables</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>Tables</span></li>
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
						
										<h2 class="card-title">Basic</h2>
									</header>
									<div class="card-body">
										<table class="table table-bordered table-striped mb-0" id="datatable-default">
											<thead>
												<tr>
													<th>Rendering engine</th>
													<th>Browser</th>
													<th>Platform(s)</th>
													<th class="d-lg-none">Engine version</th>
													<th class="d-lg-none">CSS grade</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Trident</td>
													<td>Internet
														Explorer 4.0
													</td>
													<td>Win 95+</td>
													<td class="center d-lg-none">4</td>
													<td class="center d-lg-none">X</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet
														Explorer 5.0
													</td>
													<td>Win 95+</td>
													<td class="center d-lg-none">5</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet
														Explorer 5.5
													</td>
													<td>Win 95+</td>
													<td class="center d-lg-none">5.5</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet
														Explorer 6
													</td>
													<td>Win 98+</td>
													<td class="center d-lg-none">6</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet Explorer 7</td>
													<td>Win XP SP2+</td>
													<td class="center d-lg-none">7</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>AOL browser (AOL desktop)</td>
													<td>Win XP</td>
													<td class="center d-lg-none">6</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 1.0</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center d-lg-none">1.7</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 1.5</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 2.0</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 3.0</td>
													<td>Win 2k+ / OSX.3+</td>
													<td class="center d-lg-none">1.9</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Camino 1.0</td>
													<td>OSX.2+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Camino 1.5</td>
													<td>OSX.3+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Netscape 7.2</td>
													<td>Win 95+ / Mac OS 8.6-9.2</td>
													<td class="center d-lg-none">1.7</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Netscape Browser 8</td>
													<td>Win 98SE+</td>
													<td class="center d-lg-none">1.7</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Netscape Navigator 9</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.0</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.1</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.1</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.2</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.2</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.3</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.3</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.4</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.4</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.5</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.5</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.6</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.6</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.7</td>
													<td>Win 98+ / OSX.1+</td>
													<td class="center d-lg-none">1.7</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.8</td>
													<td>Win 98+ / OSX.1+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Seamonkey 1.1</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Epiphany 2.20</td>
													<td>Gnome</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 1.2</td>
													<td>OSX.3</td>
													<td class="center d-lg-none">125.5</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 1.3</td>
													<td>OSX.3</td>
													<td class="center d-lg-none">312.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 2.0</td>
													<td>OSX.4+</td>
													<td class="center d-lg-none">419.3</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 3.0</td>
													<td>OSX.4+</td>
													<td class="center d-lg-none">522.1</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>OmniWeb 5.5</td>
													<td>OSX.4+</td>
													<td class="center d-lg-none">420</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>iPod Touch / iPhone</td>
													<td>iPod</td>
													<td class="center d-lg-none">420.1</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>S60</td>
													<td>S60</td>
													<td class="center d-lg-none">413</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 7.0</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 7.5</td>
													<td>Win 95+ / OSX.2+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 8.0</td>
													<td>Win 95+ / OSX.2+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 8.5</td>
													<td>Win 95+ / OSX.2+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 9.0</td>
													<td>Win 95+ / OSX.3+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 9.2</td>
													<td>Win 88+ / OSX.3+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 9.5</td>
													<td>Win 88+ / OSX.3+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera for Wii</td>
													<td>Wii</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Nokia N800</td>
													<td>N800</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Nintendo DS browser</td>
													<td>Nintendo DS</td>
													<td class="center d-lg-none">8.5</td>
													<td class="center d-lg-none">C/A<sup>1</sup></td>
												</tr>
												<tr>
													<td>KHTML</td>
													<td>Konqureror 3.1</td>
													<td>KDE 3.1</td>
													<td class="center d-lg-none">3.1</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>KHTML</td>
													<td>Konqureror 3.3</td>
													<td>KDE 3.3</td>
													<td class="center d-lg-none">3.3</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>KHTML</td>
													<td>Konqureror 3.5</td>
													<td>KDE 3.5</td>
													<td class="center d-lg-none">3.5</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Tasman</td>
													<td>Internet Explorer 4.5</td>
													<td>Mac OS 8-9</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">X</td>
												</tr>
												<tr>
													<td>Tasman</td>
													<td>Internet Explorer 5.1</td>
													<td>Mac OS 7.6-9</td>
													<td class="center d-lg-none">1</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>Tasman</td>
													<td>Internet Explorer 5.2</td>
													<td>Mac OS 8-X</td>
													<td class="center d-lg-none">1</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>NetFront 3.1</td>
													<td>Embedded devices</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>NetFront 3.4</td>
													<td>Embedded devices</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>Dillo 0.8</td>
													<td>Embedded devices</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">X</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>Links</td>
													<td>Text only</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">X</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>Lynx</td>
													<td>Text only</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">X</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>IE Mobile</td>
													<td>Windows Mobile 6</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>PSP browser</td>
													<td>PSP</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr class="gradeU">
													<td>Other browsers</td>
													<td>All others</td>
													<td>-</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">U</td>
												</tr>
											</tbody>
										</table>
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
						
										<h2 class="card-title">Basic with Table Tools</h2>
									</header>
									<div class="card-body">
										<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
											<thead>
												<tr>
													<th>Rendering engine</th>
													<th>Browser</th>
													<th>Platform(s)</th>
													<th class="d-lg-none">Engine version</th>
													<th class="d-lg-none">CSS grade</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Trident</td>
													<td>Internet
														Explorer 4.0
													</td>
													<td>Win 95+</td>
													<td class="center d-lg-none">4</td>
													<td class="center d-lg-none">X</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet
														Explorer 5.0
													</td>
													<td>Win 95+</td>
													<td class="center d-lg-none">5</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet
														Explorer 5.5
													</td>
													<td>Win 95+</td>
													<td class="center d-lg-none">5.5</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet
														Explorer 6
													</td>
													<td>Win 98+</td>
													<td class="center d-lg-none">6</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet Explorer 7</td>
													<td>Win XP SP2+</td>
													<td class="center d-lg-none">7</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>AOL browser (AOL desktop)</td>
													<td>Win XP</td>
													<td class="center d-lg-none">6</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 1.0</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center d-lg-none">1.7</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 1.5</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 2.0</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 3.0</td>
													<td>Win 2k+ / OSX.3+</td>
													<td class="center d-lg-none">1.9</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Camino 1.0</td>
													<td>OSX.2+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Camino 1.5</td>
													<td>OSX.3+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Netscape 7.2</td>
													<td>Win 95+ / Mac OS 8.6-9.2</td>
													<td class="center d-lg-none">1.7</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Netscape Browser 8</td>
													<td>Win 98SE+</td>
													<td class="center d-lg-none">1.7</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Netscape Navigator 9</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.0</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.1</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.1</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.2</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.2</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.3</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.3</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.4</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.4</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.5</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.5</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.6</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.6</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.7</td>
													<td>Win 98+ / OSX.1+</td>
													<td class="center d-lg-none">1.7</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.8</td>
													<td>Win 98+ / OSX.1+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Seamonkey 1.1</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Epiphany 2.20</td>
													<td>Gnome</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 1.2</td>
													<td>OSX.3</td>
													<td class="center d-lg-none">125.5</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 1.3</td>
													<td>OSX.3</td>
													<td class="center d-lg-none">312.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 2.0</td>
													<td>OSX.4+</td>
													<td class="center d-lg-none">419.3</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 3.0</td>
													<td>OSX.4+</td>
													<td class="center d-lg-none">522.1</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>OmniWeb 5.5</td>
													<td>OSX.4+</td>
													<td class="center d-lg-none">420</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>iPod Touch / iPhone</td>
													<td>iPod</td>
													<td class="center d-lg-none">420.1</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>S60</td>
													<td>S60</td>
													<td class="center d-lg-none">413</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 7.0</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 7.5</td>
													<td>Win 95+ / OSX.2+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 8.0</td>
													<td>Win 95+ / OSX.2+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 8.5</td>
													<td>Win 95+ / OSX.2+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 9.0</td>
													<td>Win 95+ / OSX.3+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 9.2</td>
													<td>Win 88+ / OSX.3+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 9.5</td>
													<td>Win 88+ / OSX.3+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera for Wii</td>
													<td>Wii</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Nokia N800</td>
													<td>N800</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Nintendo DS browser</td>
													<td>Nintendo DS</td>
													<td class="center d-lg-none">8.5</td>
													<td class="center d-lg-none">C/A<sup>1</sup></td>
												</tr>
												<tr>
													<td>KHTML</td>
													<td>Konqureror 3.1</td>
													<td>KDE 3.1</td>
													<td class="center d-lg-none">3.1</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>KHTML</td>
													<td>Konqureror 3.3</td>
													<td>KDE 3.3</td>
													<td class="center d-lg-none">3.3</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>KHTML</td>
													<td>Konqureror 3.5</td>
													<td>KDE 3.5</td>
													<td class="center d-lg-none">3.5</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Tasman</td>
													<td>Internet Explorer 4.5</td>
													<td>Mac OS 8-9</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">X</td>
												</tr>
												<tr>
													<td>Tasman</td>
													<td>Internet Explorer 5.1</td>
													<td>Mac OS 7.6-9</td>
													<td class="center d-lg-none">1</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>Tasman</td>
													<td>Internet Explorer 5.2</td>
													<td>Mac OS 8-X</td>
													<td class="center d-lg-none">1</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>NetFront 3.1</td>
													<td>Embedded devices</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>NetFront 3.4</td>
													<td>Embedded devices</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>Dillo 0.8</td>
													<td>Embedded devices</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">X</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>Links</td>
													<td>Text only</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">X</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>Lynx</td>
													<td>Text only</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">X</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>IE Mobile</td>
													<td>Windows Mobile 6</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>PSP browser</td>
													<td>PSP</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr class="gradeU">
													<td>Other browsers</td>
													<td>All others</td>
													<td>-</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">U</td>
												</tr>
											</tbody>
										</table>
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
						
										<h2 class="card-title">Rows with Details</h2>
									</header>
									<div class="card-body">
										<table class="table table-bordered table-striped mb-0" id="datatable-details">
											<thead>
												<tr>
													<th>Rendering engine</th>
													<th>Browser</th>
													<th>Platform(s)</th>
													<th>Engine version</th>
													<th>CSS grade</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Trident</td>
													<td>Internet
														 Explorer 4.0</td>
													<td>Win 95+</td>
													<td class="center">4</td>
													<td class="center">X</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet
														 Explorer 5.0</td>
													<td>Win 95+</td>
													<td class="center">5</td>
													<td class="center">C</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet
														 Explorer 5.5</td>
													<td>Win 95+</td>
													<td class="center">5.5</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet
														 Explorer 6</td>
													<td>Win 98+</td>
													<td class="center">6</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet Explorer 7</td>
													<td>Win XP SP2+</td>
													<td class="center">7</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>AOL browser (AOL desktop)</td>
													<td>Win XP</td>
													<td class="center">6</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 1.0</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center">1.7</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 1.5</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center">1.8</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 2.0</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center">1.8</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 3.0</td>
													<td>Win 2k+ / OSX.3+</td>
													<td class="center">1.9</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Camino 1.0</td>
													<td>OSX.2+</td>
													<td class="center">1.8</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Camino 1.5</td>
													<td>OSX.3+</td>
													<td class="center">1.8</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Netscape 7.2</td>
													<td>Win 95+ / Mac OS 8.6-9.2</td>
													<td class="center">1.7</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Netscape Browser 8</td>
													<td>Win 98SE+</td>
													<td class="center">1.7</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Netscape Navigator 9</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center">1.8</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.0</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center">1</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.1</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center">1.1</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.2</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center">1.2</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.3</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center">1.3</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.4</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center">1.4</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.5</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center">1.5</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.6</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center">1.6</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.7</td>
													<td>Win 98+ / OSX.1+</td>
													<td class="center">1.7</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.8</td>
													<td>Win 98+ / OSX.1+</td>
													<td class="center">1.8</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Seamonkey 1.1</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center">1.8</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Epiphany 2.20</td>
													<td>Gnome</td>
													<td class="center">1.8</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 1.2</td>
													<td>OSX.3</td>
													<td class="center">125.5</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 1.3</td>
													<td>OSX.3</td>
													<td class="center">312.8</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 2.0</td>
													<td>OSX.4+</td>
													<td class="center">419.3</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 3.0</td>
													<td>OSX.4+</td>
													<td class="center">522.1</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>OmniWeb 5.5</td>
													<td>OSX.4+</td>
													<td class="center">420</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>iPod Touch / iPhone</td>
													<td>iPod</td>
													<td class="center">420.1</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>S60</td>
													<td>S60</td>
													<td class="center">413</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 7.0</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center">-</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 7.5</td>
													<td>Win 95+ / OSX.2+</td>
													<td class="center">-</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 8.0</td>
													<td>Win 95+ / OSX.2+</td>
													<td class="center">-</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 8.5</td>
													<td>Win 95+ / OSX.2+</td>
													<td class="center">-</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 9.0</td>
													<td>Win 95+ / OSX.3+</td>
													<td class="center">-</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 9.2</td>
													<td>Win 88+ / OSX.3+</td>
													<td class="center">-</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 9.5</td>
													<td>Win 88+ / OSX.3+</td>
													<td class="center">-</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera for Wii</td>
													<td>Wii</td>
													<td class="center">-</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Nokia N800</td>
													<td>N800</td>
													<td class="center">-</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Nintendo DS browser</td>
													<td>Nintendo DS</td>
													<td class="center">8.5</td>
													<td class="center">C/A<sup>1</sup></td>
												</tr>
												<tr>
													<td>KHTML</td>
													<td>Konqureror 3.1</td>
													<td>KDE 3.1</td>
													<td class="center">3.1</td>
													<td class="center">C</td>
												</tr>
												<tr>
													<td>KHTML</td>
													<td>Konqureror 3.3</td>
													<td>KDE 3.3</td>
													<td class="center">3.3</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>KHTML</td>
													<td>Konqureror 3.5</td>
													<td>KDE 3.5</td>
													<td class="center">3.5</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Tasman</td>
													<td>Internet Explorer 4.5</td>
													<td>Mac OS 8-9</td>
													<td class="center">-</td>
													<td class="center">X</td>
												</tr>
												<tr>
													<td>Tasman</td>
													<td>Internet Explorer 5.1</td>
													<td>Mac OS 7.6-9</td>
													<td class="center">1</td>
													<td class="center">C</td>
												</tr>
												<tr>
													<td>Tasman</td>
													<td>Internet Explorer 5.2</td>
													<td>Mac OS 8-X</td>
													<td class="center">1</td>
													<td class="center">C</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>NetFront 3.1</td>
													<td>Embedded devices</td>
													<td class="center">-</td>
													<td class="center">C</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>NetFront 3.4</td>
													<td>Embedded devices</td>
													<td class="center">-</td>
													<td class="center">A</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>Dillo 0.8</td>
													<td>Embedded devices</td>
													<td class="center">-</td>
													<td class="center">X</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>Links</td>
													<td>Text only</td>
													<td class="center">-</td>
													<td class="center">X</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>Lynx</td>
													<td>Text only</td>
													<td class="center">-</td>
													<td class="center">X</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>IE Mobile</td>
													<td>Windows Mobile 6</td>
													<td class="center">-</td>
													<td class="center">C</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>PSP browser</td>
													<td>PSP</td>
													<td class="center">-</td>
													<td class="center">C</td>
												</tr>
												<tr class="gradeU">
													<td>Other browsers</td>
													<td>All others</td>
													<td>-</td>
													<td class="center">-</td>
													<td class="center">U</td>
												</tr>
											</tbody>
										</table>
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
		<script src="vendor/select2/js/select2.js"></script>
		<script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>
		<script src="vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<!-- Examples -->
		<script src="js/examples/examples.datatables.default.js"></script>
		<script src="js/examples/examples.datatables.row.with.details.js"></script>
		<script src="js/examples/examples.datatables.tabletools.js"></script>
	</body>
</html>