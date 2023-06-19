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
									<h4>Foundation Icons</h4>
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
					<div
						class="search-icon-box bg-white box-shadow border-radius-10 mb-30"
					>
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
							<h5 class="h5 text-blue">General Icons</h5>
							<div class="row fontawesome-icon-list foundation-icon">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-heart"></i>heart
									</a>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-star"></i>star</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-plus"></i>plus</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-minus"></i>minus</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"><i class="icon-copy fi-x"></i>x</a>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-check"></i>check</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-upload"></i>upload</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-download"></i>download</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-widget"></i>widget</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-marker"></i>marker</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-refresh"></i>refresh</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-home"></i>home</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-trash"></i>trash</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-paperclip"></i>paperclip</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-lock"></i>lock</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-unlock"></i>unlock</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-calendar"></i>calendar</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-cloud"></i>cloud</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-magnifying-glass"></i
										>magnifying-glass</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-zoom-out"></i>zoom-out</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-zoom-in"></i>zoom-in</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-wrench"></i>wrench</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"><i class="icon-copy fi-rss"></i>rss</a>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-share"></i>share</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-flag"></i>flag</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-list-thumbnails"></i
										>list-thumbnails</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-list"></i>list</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-thumbnails"></i>thumbnails</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-annotate"></i>annotate</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-folder"></i>folder</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-folder-lock"></i>folder-lock</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-folder-add"></i>folder-add</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-clock"></i>clock</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-play-video"></i>play-video</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-crop"></i>crop</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-archive"></i>archive</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-pencil"></i> pencil</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-graph-trend"></i>graph-trend</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-graph-bar"></i>graph-bar</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-graph-horizontal"></i
										>graph-horizontal</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-graph-pie"></i>graph-pie</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-checkbox"></i>checkbox</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-minus-circle"></i>minus-circle</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-x-circle"></i>x-circle</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"><i class="icon-copy fi-eye"></i>eye</a>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-database"></i>database</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-results"></i>results</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-results-demographics"></i
										>results-demographics</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-like"></i>like</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-dislike"></i>dislike</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-upload-cloud"></i>upload-cloud</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-camera"></i>camera</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-alert"></i>alert</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-bookmark"></i>bookmark</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-contrast"></i>contrast</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-mail"></i>mail</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-video"></i>video</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-telephone"></i>telephone</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-comment"></i>comment</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-comment-video"></i>comment-video</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-comment-quotes"></i
										>comment-quotes</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-comment-minus"></i>comment-minus</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-comments"></i>comments</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-microphone"></i>microphone</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-megaphone"></i>megaphone</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-sound"></i>sound</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-address-book"></i>address-book</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-bluetooth"></i>bluetooth</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-html5"></i>html5</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-css3"></i>css3</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-layout"></i>layout</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"><i class="icon-copy fi-web"></i>web</a>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-foundation"></i>foundation</a
									>
								</div>
							</div>
						</div>

						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">Page Icons</h5>
							<div class="row fontawesome-icon-list foundation-icon">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page"></i>page</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page-csv"></i>page-csv</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page-doc"></i>page-doc</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page-pdf"></i>page-pdf</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page-export"></i>page-export</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page-export-csv"></i
										>page-export-csv</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page-export-doc"></i
										>page-export-doc</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page-export-pdf"></i
										>page-export-pdf</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page-add"></i>page-add</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page-remove"></i>page-remove</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page-delete"></i>page-delete</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page-edit"></i>page-edit</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page-search"></i>page-search</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page-copy"></i>page-copy</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page-filled"></i>page-filled</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-page-multiple"></i>page-multiple</a
									>
								</div>
							</div>
						</div>

						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">Arrow Icons</h5>
							<div class="row fontawesome-icon-list foundation-icon">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-arrow-up"></i>arrow-up</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-arrow-right"></i>arrow-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-arrow-down"></i>arrow-down</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-arrow-left"></i>arrow-left</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-arrows-out"></i>arrows-out</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-arrows-in"></i>arrows-in</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-arrows-expand"></i>arrows-expand</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-arrows-compress"></i
										>arrows-compress</a
									>
								</div>
							</div>
						</div>

						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">People Icons</h5>
							<div class="row fontawesome-icon-list foundation-icon">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-torso"></i>torso</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-torso-female"></i>torso-female</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-torsos"></i>torsos</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-torsos-female-male"></i
										>torsos-female-male</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-torsos-male-female"></i
										>torsos-male-female</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-torsos-all"></i>torsos-all</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-torsos-all-female"></i
										>torsos-all-female</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-torso-business"></i
										>torso-business</a
									>
								</div>
							</div>
						</div>

						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">Device Icons</h5>
							<div class="row fontawesome-icon-list foundation-icon">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-monitor"></i>monitor</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-laptop"></i>laptop</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-tablet-portrait"></i
										>tablet-portrait</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-tablet-landscape"></i
										>tablet-landscape</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-mobile"></i>mobile</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-mobile-signal"></i>mobile-signal</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"><i class="icon-copy fi-usb"></i>usb</a>
								</div>
							</div>
						</div>

						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">Text Editor Icons</h5>
							<div class="row fontawesome-icon-list foundation-icon">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-bold"></i>bold</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-italic"></i>italic</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-underline"></i>underline</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-strikethrough"></i>strike</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-text-color"></i>text-color</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-background-color"></i
										>background-color</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-superscript"></i>superscript</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-subscript"></i>subscript</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-align-left"></i>align-left</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-align-center"></i>align-center</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-align-right"></i>align-right</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-align-justify"></i>align-justify</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-list-number"></i>list-numbered</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-list-bullet"></i>list-bullet</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-indent-more"></i>indent-more</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-indent-less"></i>indent-less</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-print"></i>print</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-save"></i>save</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-photo"></i>photo</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-filter"></i>filter</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-paint-bucket"></i>paint-bucket</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-link"></i>link</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-unlink"></i>unlink</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-quote"></i>quote</a
									>
								</div>
							</div>
						</div>

						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">Media Control Icons</h5>
							<div class="row fontawesome-icon-list foundation-icon">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-play"></i>play</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-stop"></i>stop</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-pause"></i>pause</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-previous"></i>previous</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-rewind"></i>rewind</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-fast-forward"></i>fast-forward</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-next"></i>next</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-record"></i>record</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-play-circle"></i>play-circle</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-volume-none"></i>volume-none</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-volume"></i>volume</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-volume-strike"></i>volume-strike</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-loop"></i>loop</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-shuffle"></i>shuffle</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-eject"></i>eject</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-rewind-ten"></i> rewind-ten</a
									>
								</div>
							</div>
						</div>

						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">Ecommerce Icons</h5>
							<div class="row fontawesome-icon-list foundation-icon">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-dollar"></i>dollar</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-euro"></i>euro</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-pound"></i>pound</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"><i class="icon-copy fi-yen"></i>yen</a>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-bitcoin"></i>bitcoin</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-bitcoin-circle"></i
										>bitcoin-circle</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-credit-card"></i>credit-card</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-shopping-cart"></i>shopping-cart</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-burst"></i>burst</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-burst-new"></i> burst-new</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-burst-sale"></i>burst-sale</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-paypal"></i>paypal</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-price-tag"></i>price-tag</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-pricetag-multiple"></i
										>pricetag-multiple</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-shopping-bag"></i>shopping-bag</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-dollar-bill"></i>dollar-bill</a
									>
								</div>
							</div>
						</div>

						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">Accessibility Icons</h5>
							<div class="row fontawesome-icon-list foundation-icon">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-wheelchair"></i>wheelchair</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-braille"></i>braille</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-closed-caption"></i
										>closed-caption</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-blind"></i>blind</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"><i class="icon-copy fi-asl"></i>asl</a>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-hearing-aid"></i>hearing-aid</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-guide-dog"></i>guide-dog</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-universal-access"></i
										>universal-access</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-telephone-accessible"></i
										>telephone-accessible</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-elevator"></i>elevator</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-male"></i>male</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-female"></i>female</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-male-female"></i>male-female</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-male-symbol"></i>male-symbol</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-female-symbol"></i>female-symbol</a
									>
								</div>
							</div>
						</div>

						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">Social &amp; Brand Icons</h5>
							<div class="row fontawesome-icon-list foundation-icon">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-500px"></i>social-500px</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-adobe"></i>social-adobe</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-amazon"></i>social-amazon</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-android"></i
										>social-android</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-apple"></i>social-apple</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-behance"></i
										>social-behance</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-bing"></i>social-bing</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-blogger"></i
										>social-blogger</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-delicious"></i
										>social-delicious</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-designer-news"></i
										>social-designer-news</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-deviant-art"></i
										>social-deviant-art</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-digg"></i>social-digg</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-dribbble"></i
										>social-dribbble</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-drive"></i>social-drive</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-dropbox"></i
										>social-dropbox</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-evernote"></i
										>social-evernote</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-facebook"></i
										>social-facebook</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-flickr"></i>social-flickr</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-forrst"></i>social-forrst</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-foursquare"></i
										>social-foursquare</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-game-center"></i
										>social-game-center</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-github"></i>social-github</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-google-plus"></i
										>social-google-plus</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-hacker-news"></i
										>social-hacker-news</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-hi5"></i>social-hi5</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-instagram"></i
										>social-instagram</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-joomla"></i>social-joomla</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-lastfm"></i>social-lastfm</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-linkedin"></i
										>social-linkedin</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-medium"></i>social-medium</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-myspace"></i
										>social-myspace</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-orkut"></i>social-orkut</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-path"></i>social-path</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-picasa"></i>social-picasa</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-pinterest"></i
										>social-pinterest</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-rdio"></i>social-rdio</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-reddit"></i>social-reddit</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-skype"></i>social-skype</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-skillshare"></i
										>social-skillshare</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-smashing-mag"></i
										>social-smashing-mag</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-snapchat"></i
										>social-snapchat</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-spotify"></i
										>social-spotify</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-squidoo"></i
										>social-squidoo</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-stack-overflow"></i
										>social-stack-overflow</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-steam"></i>social-steam</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-stumbleupon"></i
										>social-stumbleupon</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-treehouse"></i
										>social-treehouse</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-tumblr"></i>social-tumblr</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-twitter"></i
										>social-twitter</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-vimeo"></i>social-vimeo</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-windows"></i
										>social-windows</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-xbox"></i>social-xbox</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-yahoo"></i>social-yahoo</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-yelp"></i>social-yelp</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-youtube"></i
										>social-youtube</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-zerply"></i>social-zerply</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-social-zurb"></i>social-zurb</a
									>
								</div>
							</div>
						</div>

						<div class="icon-list pd-20 card-box mb-30">
							<h5 class="h5 text-blue">Miscellaneous Icons</h5>
							<div class="row fontawesome-icon-list foundation-icon">
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-compass"></i>compass</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-music"></i>music</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-lightbulb"></i>lightbulb</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-battery-full"></i>battery-full</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-battery-half"></i>battery-half</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-battery-empty"></i>battery-empty</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-projection-screen"></i
										>projection-screen</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-info"></i>info</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-power"></i>power</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-asterisk"></i>asterisk</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-at-sign"></i>at-sign</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"><i class="icon-copy fi-key"></i>key</a>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-ticket"></i>ticket</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-book"></i>book</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-book-bookmark"></i>book-bookmark</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-anchor"></i>anchor</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-puzzle"></i>puzzle</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-foot"></i>foot</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"><i class="icon-copy fi-paw"></i>paw</a>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-mountains"></i>mountains</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-trees"></i>trees</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-sheriff-badge"></i>sheriff-badge</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-first-aid"></i>first-aid</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-trophy"></i>trophy</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-prohibited"></i>prohibited</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-no-dogs"></i>no-dogs</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-no-smoking"></i>no-smoking</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-safety-cone"></i>safety-cone</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-shield"></i>shield</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-crown"></i>crown</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-target"></i>target</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-target-two"></i>target-two</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-die-one"></i>die-one</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-die-two"></i>die-two</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-die-three"></i>die-three</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-die-four"></i>die-four</a
									>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-die-five"></i>die-five</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-die-six"></i>die-six</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-skull"></i>skull</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"><i class="icon-copy fi-map"></i>map</a>
								</div>

								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-clipboard"></i>clipboard</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-clipboard-pencil"></i
										>clipboard-pencil</a
									>
								</div>
								<div
									class="fa-hover col-md-3 col-sm-6 col-12"
									data-toggle="tooltip"
									data-placement="bottom"
									title="Click To Copy Code"
								>
									<a href="javascript:;"
										><i class="icon-copy fi-clipboard-notes"></i
										>clipboard-notes</a
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
