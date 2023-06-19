<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
		<div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="vendors/images/deskapp-logo.svg" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div>

		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<div class="header-search">
					<form>
						<div class="form-group mb-0">
							<i class="dw dw-search2 search-icon"></i>
							<input
								type="text"
								class="form-control search-input"
								placeholder="Search Here"
							/>
							<div class="dropdown">
								<a
									class="dropdown-toggle no-arrow"
									href="#"
									role="button"
									data-toggle="dropdown"
								>
									<i class="ion-arrow-down-c"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>From</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">To</label>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>Subject</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="text-right">
										<button class="btn btn-primary">Search</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="header-right">
				<div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="javascript:;"
							data-toggle="right-sidebar"
						>
							<i class="dw dw-settings2"></i>
						</a>
					</div>
				</div>
				<div class="user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<i class="icon-copy dw dw-notification"></i>
							<span class="badge notification-active"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="notification-list mx-h-350 customscroll">
								<ul>
									<li>
										<a href="#">
											<img src="vendors/images/img.jpg" alt="" />
											<h3>John Doe</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/photo1.jpg" alt="" />
											<h3>Lea R. Frith</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/photo2.jpg" alt="" />
											<h3>Erik L. Richards</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/photo3.jpg" alt="" />
											<h3>John Doe</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/photo4.jpg" alt="" />
											<h3>Renee I. Hansen</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/img.jpg" alt="" />
											<h3>Vicki M. Coleman</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<span class="user-icon">
								<img src="vendors/images/photo1.jpg" alt="" />
							</span>
							<span class="user-name">Ross C. Lopez</span>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
							<a class="dropdown-item" href="profile.html"
								><i class="dw dw-user1"></i> Profile</a
							>
							<a class="dropdown-item" href="profile.html"
								><i class="dw dw-settings2"></i> Setting</a
							>
							<a class="dropdown-item" href="faq.html"
								><i class="dw dw-help"></i> Help</a
							>
							<a class="dropdown-item" href="login.html"
								><i class="dw dw-logout"></i> Log Out</a
							>
						</div>
					</div>
				</div>
				<div class="github-link">
					<a href="https://github.com/dropways/deskapp" target="_blank"
						><img src="vendors/images/github.svg" alt=""
					/></a>
				</div>
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="index.html">
					<img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
					<img
						src="vendors/images/deskapp-logo-white.svg"
						alt=""
						class="light-logo"
					/>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext">Home</span>
							</a>
							<ul class="submenu">
								<li><a href="index.html">Dashboard style 1</a></li>
								<li><a href="index2.html">Dashboard style 2</a></li>
								<li><a href="index3.html">Dashboard style 3</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-textarea-resize"></span
								><span class="mtext">Forms</span>
							</a>
							<ul class="submenu">
								<li><a href="form-basic.html">Form Basic</a></li>
								<li>
									<a href="advanced-components.html">Advanced Components</a>
								</li>
								<li><a href="form-wizard.html">Form Wizard</a></li>
								<li><a href="html5-editor.html">HTML5 Editor</a></li>
								<li><a href="form-pickers.html">Form Pickers</a></li>
								<li><a href="image-cropper.html">Image Cropper</a></li>
								<li><a href="image-dropzone.html">Image Dropzone</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-table"></span
								><span class="mtext">Tables</span>
							</a>
							<ul class="submenu">
								<li><a href="basic-table.html">Basic Tables</a></li>
								<li><a href="datatable.html">DataTables</a></li>
							</ul>
						</li>
						<li>
							<a href="calendar.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-calendar4-week"></span
								><span class="mtext">Calendar</span>
							</a>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-archive"></span
								><span class="mtext"> UI Elements </span>
							</a>
							<ul class="submenu">
								<li><a href="ui-buttons.html">Buttons</a></li>
								<li><a href="ui-cards.html">Cards</a></li>
								<li><a href="ui-cards-hover.html">Cards Hover</a></li>
								<li><a href="ui-modals.html">Modals</a></li>
								<li><a href="ui-tabs.html">Tabs</a></li>
								<li>
									<a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a>
								</li>
								<li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
								<li><a href="ui-notification.html">Notification</a></li>
								<li><a href="ui-timeline.html">Timeline</a></li>
								<li><a href="ui-progressbar.html">Progressbar</a></li>
								<li><a href="ui-typography.html">Typography</a></li>
								<li><a href="ui-list-group.html">List group</a></li>
								<li><a href="ui-range-slider.html">Range slider</a></li>
								<li><a href="ui-carousel.html">Carousel</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-command"></span
								><span class="mtext">Icons</span>
							</a>
							<ul class="submenu">
								<li><a href="bootstrap-icon.html">Bootstrap Icons</a></li>
								<li><a href="font-awesome.html">FontAwesome Icons</a></li>
								<li><a href="foundation.html">Foundation Icons</a></li>
								<li><a href="ionicons.html">Ionicons Icons</a></li>
								<li><a href="themify.html">Themify Icons</a></li>
								<li><a href="custom-icon.html">Custom Icons</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-pie-chart"></span
								><span class="mtext">Charts</span>
							</a>
							<ul class="submenu">
								<li><a href="highchart.html">Highchart</a></li>
								<li><a href="knob-chart.html">jQuery Knob</a></li>
								<li><a href="jvectormap.html">jvectormap</a></li>
								<li><a href="apexcharts.html">Apexcharts</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-file-earmark-text"></span
								><span class="mtext">Additional Pages</span>
							</a>
							<ul class="submenu">
								<li><a href="video-player.html">Video Player</a></li>
								<li><a href="login.html">Login</a></li>
								<li><a href="forgot-password.html">Forgot Password</a></li>
								<li><a href="reset-password.html">Reset Password</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-bug"></span
								><span class="mtext">Error Pages</span>
							</a>
							<ul class="submenu">
								<li><a href="400.html">400</a></li>
								<li><a href="403.html">403</a></li>
								<li><a href="404.html">404</a></li>
								<li><a href="500.html">500</a></li>
								<li><a href="503.html">503</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-back"></span
								><span class="mtext">Extra Pages</span>
							</a>
							<ul class="submenu">
								<li><a href="blank.html">Blank</a></li>
								<li><a href="contact-directory.html">Contact Directory</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog-detail.html">Blog Detail</a></li>
								<li><a href="product.html">Product</a></li>
								<li><a href="product-detail.html">Product Detail</a></li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="profile.html">Profile</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="pricing-table.html">Pricing Tables</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-hdd-stack"></span
								><span class="mtext">Multi Level Menu</span>
							</a>
							<ul class="submenu">
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
								<li class="dropdown">
									<a href="javascript:;" class="dropdown-toggle">
										<span class="micon fa fa-plug"></span
										><span class="mtext">Level 2</span>
									</a>
									<ul class="submenu child">
										<li><a href="javascript:;">Level 2</a></li>
										<li><a href="javascript:;">Level 2</a></li>
									</ul>
								</li>
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
							</ul>
						</li>
						<li>
							<a href="sitemap.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-diagram-3"></span
								><span class="mtext">Sitemap</span>
							</a>
						</li>
						<li>
							<a href="chat.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-chat-right-dots"></span
								><span class="mtext">Chat</span>
							</a>
						</li>
						<li>
							<a href="invoice.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-receipt-cutoff"></span
								><span class="mtext">Invoice</span>
							</a>
						</li>
						<li>
							<div class="dropdown-divider"></div>
						</li>
						<li>
							<div class="sidebar-small-cap">Extra</div>
						</li>
						<li>
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-file-pdf"></span
								><span class="mtext">Documentation</span>
							</a>
							<ul class="submenu">
								<li><a href="introduction.html">Introduction</a></li>
								<li><a href="getting-started.html">Getting Started</a></li>
								<li><a href="color-settings.html">Color Settings</a></li>
								<li>
									<a href="third-party-plugins.html">Third Party Plugins</a>
								</li>
							</ul>
						</li>
						<li>
							<a
								href="https://dropways.github.io/deskapp-free-single-page-website-template/"
								target="_blank"
								class="dropdown-toggle no-arrow"
							>
								<span class="micon bi bi-layout-text-window-reverse"></span>
								<span class="mtext"
									>Landing Page
									<img src="vendors/images/coming-soon.png" alt="" width="25"
								/></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Themify Icons</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Icons
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-primary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										January 2020
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="search-icon-box card-box mb-30">
						<input
							type="text"
							class="border-radius-10"
							id="filter_input"
							placeholder="Search Icons..."
							title="Type in a name"
						/>
						<i class="search_icon dw dw-search"></i>
					</div>
					<div id="filter_list">
						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">Arrows &amp; Direction Icons</h5>
							<div class="row fontawesome-icon-list filter_list">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-arrow-up"></span>ti-arrow-up</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-arrow-right"></span
										>ti-arrow-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-arrow-left"></span
										>ti-arrow-left</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-arrow-down"></span
										>ti-arrow-down</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-arrows-vertical"></span
										>ti-arrows-vertical</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-arrows-horizontal"></span
										>ti-arrows-horizontal</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-angle-up"></span>ti-angle-up</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-angle-right"></span
										>ti-angle-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-angle-left"></span
										>ti-angle-left</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-angle-down"></span
										>ti-angle-down</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-angle-double-up"></span
										>ti-angle-double-up</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-angle-double-right"></span
										>ti-angle-double-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-angle-double-left"></span
										>ti-angle-double-left</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-angle-double-down"></span
										>ti-angle-double-down</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-move"></span>ti-move</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-fullscreen"></span
										>ti-fullscreen</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-arrow-top-right"></span
										>ti-arrow-top-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-arrow-top-left"></span
										>ti-arrow-top-left</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-arrow-circle-up"></span
										>ti-arrow-circle-up</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-arrow-circle-right"></span
										>ti-arrow-circle-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-arrow-circle-left"></span
										>ti-arrow-circle-left</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-arrow-circle-down"></span
										>ti-arrow-circle-down</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-arrows-corner"></span
										>ti-arrows-corner</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-split-v"></span>ti-split-v</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-split-v-alt"></span
										>ti-split-v-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-split-h"></span>ti-split-h</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-hand-point-up"></span
										>ti-hand-point-up</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-hand-point-right"></span
										>ti-hand-point-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-hand-point-left"></span
										>ti-hand-point-left</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-hand-point-down"></span
										>ti-hand-point-down</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-back-right"></span
										>ti-back-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-back-left"></span>ti-back-left</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-exchange-vertical"></span
										>ti-exchange-vertical</a
									>
								</div>
							</div>
						</div>

						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">Web App Icons</h5>
							<div class="row fontawesome-icon-list">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-wand"></span>ti-wand</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-save"></span>ti-save</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-save-alt"></span>ti-save-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-direction"></span>ti-direction</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-direction-alt"></span
										>ti-direction-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-user"></span>ti-user</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-link"></span>ti-link</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-unlink"></span>ti-unlink</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-trash"></span>ti-trash</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-target"></span>ti-target</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-tag"></span>ti-tag</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-desktop"></span>ti-desktop</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-tablet"></span>ti-tablet</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-mobile"></span>ti-mobile</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-email"></span>ti-email</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-star"></span>ti-star</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-spray"></span>ti-spray</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-signal"></span>ti-signal</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-shopping-cart"></span
										>ti-shopping-cart</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-shopping-cart-full"></span
										>ti-shopping-cart-full</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-settings"></span>ti-settings</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-search"></span>ti-search</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-zoom-in"></span>ti-zoom-in</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-zoom-out"></span>ti-zoom-out</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-cut"></span>ti-cut</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-ruler"></span>ti-ruler</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-ruler-alt-2"></span
										>ti-ruler-alt-2</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-ruler-pencil"></span
										>ti-ruler-pencil</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-ruler-alt"></span>ti-ruler-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-bookmark"></span>ti-bookmark</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-bookmark-alt"></span
										>ti-bookmark-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-reload"></span>ti-reload</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-plus"></span>ti-plus</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-minus"></span>ti-minus</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-close"></span>ti-close</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-pin"></span>ti-pin</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-pencil"></span>ti-pencil</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-pencil-alt"></span
										>ti-pencil-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-paint-roller"></span
										>ti-paint-roller</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-paint-bucket"></span
										>ti-paint-bucket</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-na"></span>ti-na</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-medall"></span>ti-medall</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-medall-alt"></span
										>ti-medall-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-marker"></span>ti-marker</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-marker-alt"></span
										>ti-marker-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-lock"></span>ti-lock</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-unlock"></span>ti-unlock</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-location-arrow"></span
										>ti-location-arrow</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout"></span>ti-layout</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layers"></span>ti-layers</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layers-alt"></span
										>ti-layers-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-key"></span>ti-key</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-image"></span>ti-image</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-heart"></span>ti-heart</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-heart-broken"></span
										>ti-heart-broken</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-hand-stop"></span>ti-hand-stop</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-hand-open"></span>ti-hand-open</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-hand-drag"></span>ti-hand-drag</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-flag"></span>ti-flag</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-flag-alt"></span>ti-flag-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-flag-alt-2"></span
										>ti-flag-alt-2</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-eye"></span>ti-eye</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-import"></span>ti-import</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-export"></span>ti-export</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-cup"></span>ti-cup</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-crown"></span>ti-crown</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-comments"></span>ti-comments</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-comment"></span>ti-comment</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-comment-alt"></span
										>ti-comment-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-thought"></span>ti-thought</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-clip"></span>ti-clip</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-check"></span>ti-check</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-check-box"></span>ti-check-box</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-camera"></span>ti-camera</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-announcement"></span
										>ti-announcement</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-brush"></span>ti-brush</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-brush-alt"></span>ti-brush-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-palette"></span>ti-palette</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-briefcase"></span>ti-briefcase</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-bolt"></span>ti-bolt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-bolt-alt"></span>ti-bolt-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-blackboard"></span
										>ti-blackboard</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-bag"></span>ti-bag</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-world"></span>ti-world</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-wheelchair"></span
										>ti-wheelchair</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-car"></span>ti-car</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-truck"></span>ti-truck</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-timer"></span>ti-timer</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-ticket"></span>ti-ticket</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-thumb-up"></span>ti-thumb-up</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-thumb-down"></span
										>ti-thumb-down</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-stats-up"></span>ti-stats-up</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-stats-down"></span
										>ti-stats-down</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-shine"></span>ti-shine</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-shift-right"></span
										>ti-shift-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-shift-left"></span
										>ti-shift-left</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-shift-right-alt"></span
										>ti-shift-right-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-shift-left-alt"></span
										>ti-shift-left-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-shield"></span>ti-shield</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-notepad"></span>ti-notepad</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-server"></span>ti-server</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-pulse"></span>ti-pulse</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-printer"></span>ti-printer</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-power-off"></span>ti-power-off</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-plug"></span>ti-plug</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-pie-chart"></span>ti-pie-chart</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-panel"></span>ti-panel</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-package"></span>ti-package</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-music"></span>ti-music</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-music-alt"></span>ti-music-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-mouse"></span>ti-mouse</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-mouse-alt"></span>ti-mouse-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-money"></span>ti-money</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-microphone"></span
										>ti-microphone</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-menu"></span>ti-menu</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-menu-alt"></span>ti-menu-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-map"></span>ti-map</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-map-alt"></span>ti-map-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-location-pin"></span
										>ti-location-pin</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-light-bulb"></span
										>ti-light-bulb</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-info"></span>ti-info</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-infinite"></span>ti-infinite</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-id-badge"></span>ti-id-badge</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-hummer"></span>ti-hummer</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-home"></span>ti-home</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-help"></span>ti-help</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-headphone"></span>ti-headphone</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-harddrives"></span
										>ti-harddrives</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-harddrive"></span>ti-harddrive</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-gift"></span>ti-gift</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-game"></span>ti-game</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-filter"></span>ti-filter</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-files"></span>ti-files</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-file"></span>ti-file</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-zip"></span>ti-zip</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-folder"></span>ti-folder</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-envelope"></span>ti-envelope</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-dashboard"></span>ti-dashboard</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-cloud"></span>ti-cloud</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-cloud-up"></span>ti-cloud-up</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-cloud-down"></span
										>ti-cloud-down</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-clipboard"></span>ti-clipboard</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-calendar"></span>ti-calendar</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-book"></span>ti-book</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-bell"></span>ti-bell</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-basketball"></span
										>ti-basketball</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-bar-chart"></span>ti-bar-chart</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-bar-chart-alt"></span
										>ti-bar-chart-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-archive"></span>ti-archive</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-anchor"></span>ti-anchor</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-alert"></span>ti-alert</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-alarm-clock"></span
										>ti-alarm-clock</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-agenda"></span>ti-agenda</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-write"></span>ti-write</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-wallet"></span>ti-wallet</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-video-clapper"></span
										>ti-video-clapper</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-video-camera"></span
										>ti-video-camera</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-vector"></span>ti-vector</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-support"></span>ti-support</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-stamp"></span>ti-stamp</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-slice"></span>ti-slice</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-shortcode"></span>ti-shortcode</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-receipt"></span>ti-receipt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-pin2"></span>ti-pin2</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-pin-alt"></span>ti-pin-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-pencil-alt2"></span
										>ti-pencil-alt2</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-eraser"></span>ti-eraser</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-more"></span>ti-more</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-more-alt"></span>ti-more-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-microphone-alt"></span
										>ti-microphone-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-magnet"></span>ti-magnet</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-line-double"></span
										>ti-line-double</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-line-dotted"></span
										>ti-line-dotted</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-line-dashed"></span
										>ti-line-dashed</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-ink-pen"></span>ti-ink-pen</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-info-alt"></span>ti-info-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-help-alt"></span>ti-help-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-headphone-alt"></span
										>ti-headphone-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-gallery"></span>ti-gallery</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-face-smile"></span
										>ti-face-smile</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-face-sad"></span>ti-face-sad</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-credit-card"></span
										>ti-credit-card</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-comments-smiley"></span
										>ti-comments-smiley</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-time"></span>ti-time</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-share"></span>ti-share</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-share-alt"></span>ti-share-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-rocket"></span>ti-rocket</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-new-window"></span
										>ti-new-window</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-rss"></span>ti-rss</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-rss-alt"></span>ti-rss-alt</a
									>
								</div>
							</div>
						</div>

						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">Control Icons</h5>
							<div class="row fontawesome-icon-list">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-control-stop"></span
										>ti-control-stop</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-control-shuffle"></span
										>ti-control-shuffle</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-control-play"></span
										>ti-control-play</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-control-pause"></span
										>ti-control-pause</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-control-forward"></span
										>ti-control-forward</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-control-backward"></span
										>ti-control-backward</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-volume"></span>ti-volume</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-control-skip-forward"></span
										>ti-control-skip-forward</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-control-skip-backward"></span
										>ti-control-skip-backward</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-control-record"></span
										>ti-control-record</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-control-eject"></span
										>ti-control-eject</a
									>
								</div>
							</div>
						</div>

						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">Text Editor</h5>
							<div class="row fontawesome-icon-list">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-paragraph"></span>ti-paragraph</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-uppercase"></span>ti-uppercase</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-underline"></span>ti-underline</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-text"></span>ti-text</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-Italic"></span>ti-Italic</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-smallcap"></span>ti-smallcap</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-list"></span>ti-list</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-list-ol"></span>ti-list-ol</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-align-right"></span
										>ti-align-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-align-left"></span
										>ti-align-left</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-align-justify"></span
										>ti-align-justify</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-align-center"></span
										>ti-align-center</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-quote-right"></span
										>ti-quote-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-quote-left"></span
										>ti-quote-left</a
									>
								</div>
							</div>
						</div>

						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">Layout Icons</h5>
							<div class="row fontawesome-icon-list">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-width-full"></span
										>ti-layout-width-full</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-width-default"></span
										>ti-layout-width-default</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-width-default-alt"></span
										>ti-layout-width-default-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-tab"></span
										>ti-layout-tab</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-tab-window"></span
										>ti-layout-tab-window</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-tab-v"></span
										>ti-layout-tab-v</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-tab-min"></span
										>ti-layout-tab-min</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-slider"></span
										>ti-layout-slider</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-slider-alt"></span
										>ti-layout-slider-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-sidebar-right"></span
										>ti-layout-sidebar-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-sidebar-none"></span
										>ti-layout-sidebar-none</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-sidebar-left"></span
										>ti-layout-sidebar-left</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-placeholder"></span
										>ti-layout-placeholder</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-menu"></span
										>ti-layout-menu</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-menu-v"></span
										>ti-layout-menu-v</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-menu-separated"></span
										>ti-layout-menu-separated</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-menu-full"></span
										>ti-layout-menu-full</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-media-right"></span
										>ti-layout-media-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-media-right-alt"></span
										>ti-layout-media-right-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-media-overlay"></span
										>ti-layout-media-overlay</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-media-overlay-alt"></span
										>ti-layout-media-overlay-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span
											class="icon-copy ti-layout-media-overlay-alt-2"
										></span
										>ti-layout-media-overlay-alt-2</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-media-left"></span
										>ti-layout-media-left</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-media-left-alt"></span
										>ti-layout-media-left-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-media-center"></span
										>ti-layout-media-center</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-media-center-alt"></span
										>ti-layout-media-center-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-list-thumb"></span
										>ti-layout-list-thumb</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-list-thumb-alt"></span
										>ti-layout-list-thumb-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-list-post"></span
										>ti-layout-list-post</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-list-large-image"></span
										>ti-layout-list-large-image</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-line-solid"></span
										>ti-layout-line-solid</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-grid4"></span
										>ti-layout-grid4</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-grid3"></span
										>ti-layout-grid3</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-grid2"></span
										>ti-layout-grid2</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-grid2-thumb"></span
										>ti-layout-grid2-thumb</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-cta-right"></span
										>ti-layout-cta-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-cta-left"></span
										>ti-layout-cta-left</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-cta-center"></span
										>ti-layout-cta-center</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-cta-btn-right"></span
										>ti-layout-cta-btn-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-cta-btn-left"></span
										>ti-layout-cta-btn-left</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-column4"></span
										>ti-layout-column4</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-column3"></span
										>ti-layout-column3</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-column2"></span
										>ti-layout-column2</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span
											class="icon-copy ti-layout-accordion-separated"
										></span
										>ti-layout-accordion-separated</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-accordion-merged"></span
										>ti-layout-accordion-merged</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-accordion-list"></span
										>ti-layout-accordion-list</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-widgetized"></span
										>ti-widgetized</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-widget"></span>ti-widget</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-widget-alt"></span
										>ti-widget-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-view-list"></span>ti-view-list</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-view-list-alt"></span
										>ti-view-list-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-view-grid"></span>ti-view-grid</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-upload"></span>ti-upload</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-download"></span>ti-download</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-loop"></span>ti-loop</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-sidebar-2"></span
										>ti-layout-sidebar-2</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-grid4-alt"></span
										>ti-layout-grid4-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-grid3-alt"></span
										>ti-layout-grid3-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-grid2-alt"></span
										>ti-layout-grid2-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-column4-alt"></span
										>ti-layout-column4-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-column3-alt"></span
										>ti-layout-column3-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-layout-column2-alt"></span
										>ti-layout-column2-alt</a
									>
								</div>
							</div>
						</div>

						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">Brand Icons</h5>
							<div class="row fontawesome-icon-list">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-flickr"></span>ti-flickr</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-flickr-alt"></span
										>ti-flickr-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-instagram"></span>ti-instagram</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-google"></span>ti-google</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-github"></span>ti-github</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-facebook"></span>ti-facebook</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-dropbox"></span>ti-dropbox</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-dropbox-alt"></span
										>ti-dropbox-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-dribbble"></span>ti-dribbble</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-apple"></span>ti-apple</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-android"></span>ti-android</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-yahoo"></span>ti-yahoo</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-trello"></span>ti-trello</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-stack-overflow"></span
										>ti-stack-overflow</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-soundcloud"></span
										>ti-soundcloud</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-sharethis"></span>ti-sharethis</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-sharethis-alt"></span
										>ti-sharethis-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-reddit"></span>ti-reddit</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-microsoft"></span>ti-microsoft</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-microsoft-alt"></span
										>ti-microsoft-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-linux"></span>ti-linux</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-jsfiddle"></span>ti-jsfiddle</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-joomla"></span>ti-joomla</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-html5"></span>ti-html5</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-css3"></span>ti-css3</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-drupal"></span>ti-drupal</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-wordpress"></span>ti-wordpress</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-tumblr"></span>ti-tumblr</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-tumblr-alt"></span
										>ti-tumblr-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-skype"></span>ti-skype</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-youtube"></span>ti-youtube</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-vimeo"></span>ti-vimeo</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-vimeo-alt"></span>ti-vimeo-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-twitter"></span>ti-twitter</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-twitter-alt"></span
										>ti-twitter-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-linkedin"></span>ti-linkedin</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-pinterest"></span>ti-pinterest</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-pinterest-alt"></span
										>ti-pinterest-alt</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-themify-logo"></span
										>ti-themify-logo</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-themify-favicon"></span
										>ti-themify-favicon</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><span class="icon-copy ti-themify-favicon-alt"></span
										>ti-themify-favicon-alt</a
									>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div>
			</div>
		</div>
		<!-- welcome modal start -->
		<div class="welcome-modal">
			<button class="welcome-modal-close">
				<i class="bi bi-x-lg"></i>
			</button>
			<iframe
				class="w-100 border-0"
				src="https://embed.lottiefiles.com/animation/31548"
			></iframe>
			<div class="text-center">
				<h3 class="h5 weight-500 text-center mb-2">
					Open source
					<span role="img" aria-label="gratitude">❤️</span>
				</h3>
				<div class="pb-2">
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-star"
						data-size="large"
						data-show-count="true"
						aria-label="Star dropways/deskapp dashboard on GitHub"
						>Star</a
					>
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp/fork"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-repo-forked"
						data-size="large"
						data-show-count="true"
						aria-label="Fork dropways/deskapp dashboard on GitHub"
						>Fork</a
					>
				</div>
			</div>
			<div class="text-center mb-1">
				<div>
					<a
						href="https://github.com/dropways/deskapp"
						target="_blank"
						class="btn btn-light btn-block btn-sm"
					>
						<span class="text-danger weight-600">STAR US</span>
						<span class="weight-600">ON GITHUB</span>
						<i class="fa fa-github"></i>
					</a>
				</div>
				<script
					async
					defer="defer"
					src="https://buttons.github.io/buttons.js"
				></script>
			</div>
			<a
				href="https://github.com/dropways/deskapp"
				target="_blank"
				class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
			>
				DOWNLOAD
				<i class="fa fa-download"></i>
			</a>
			<p class="font-14 text-center mb-1 d-none d-md-block">
				Available in the following technologies:
			</p>
			<div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
				<i class="fa fa-html5"></i>
			</div>
		</div>
		<button class="welcome-modal-btn">
			<i class="fa fa-download"></i> Download
		</button>
		<!-- welcome modal end -->
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>