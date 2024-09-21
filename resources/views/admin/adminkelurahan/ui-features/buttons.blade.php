<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo me-5" href="../../index.html"><img src="../../assets/images/logo.svg" class="me-2" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
            <span class="input-group-text" id="search">
              <i class="icon-search"></i>
            </span>
          </div>
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
          <i class="icon-bell mx-0"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="ti-info-alt mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Application Error</h6>
              <p class="font-weight-light small-text mb-0 text-muted"> Just now </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-warning">
                <i class="ti-settings mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Settings</h6>
              <p class="font-weight-light small-text mb-0 text-muted"> Private message </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="ti-user mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">New user registration</h6>
              <p class="font-weight-light small-text mb-0 text-muted"> 2 days ago </p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
          <img src="../../assets/images/faces/face28.jpg" alt="profile" />
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="ti-settings text-primary"></i> Settings </a>
          <a class="dropdown-item">
            <i class="ti-power-off text-primary"></i> Logout </a>
        </div>
      </li>
      <li class="nav-item nav-settings d-none d-lg-flex">
        <a class="nav-link" href="#">
          <i class="icon-ellipsis"></i>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="../../index.html">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
          <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a></li>
          <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="icon-columns menu-icon"></i>
        <span class="menu-title">Form elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.html">Basic Elements</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="icon-bar-graph menu-icon"></i>
        <span class="menu-title">Charts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartjs.html">ChartJs</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
        <i class="icon-grid-2 menu-icon"></i>
        <span class="menu-title">Tables</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../../pages/tables/basic-table.html">Basic table</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <i class="icon-contract menu-icon"></i>
        <span class="menu-title">Icons</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="icons">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../../pages/icons/mdi.html">Mdi icons</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
        <i class="icon-ban menu-icon"></i>
        <span class="menu-title">Error pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="error">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../../../docs/documentation.html">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li>
  </ul>
</nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card-body">
                        <h4 class="card-title">Single color buttons</h4>
                        <p class="card-description">Add class <code>.btn-{color}</code> for buttons in theme colors</p>
                        <div class="template-demo">
                          <button type="button" class="btn btn-primary">Primary</button>
                          <button type="button" class="btn btn-secondary">Secondary</button>
                          <button type="button" class="btn btn-success">Success</button>
                          <button type="button" class="btn btn-danger">Danger</button>
                          <button type="button" class="btn btn-warning">Warning</button>
                          <button type="button" class="btn btn-info">Info</button>
                          <button type="button" class="btn btn-light">Light</button>
                          <button type="button" class="btn btn-dark">Dark</button>
                          <button type="button" class="btn btn-link">Link</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card-body">
                        <h4 class="card-title">Rounded buttons</h4>
                        <p class="card-description">Add class <code>.btn-rounded</code></p>
                        <div class="template-demo">
                          <button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button>
                          <button type="button" class="btn btn-secondary btn-rounded btn-fw">Secondary</button>
                          <button type="button" class="btn btn-success btn-rounded btn-fw">Success</button>
                          <button type="button" class="btn btn-danger btn-rounded btn-fw">Danger</button>
                          <button type="button" class="btn btn-warning btn-rounded btn-fw">Warning</button>
                          <button type="button" class="btn btn-info btn-rounded btn-fw">Info</button>
                          <button type="button" class="btn btn-light btn-rounded btn-fw">Light</button>
                          <button type="button" class="btn btn-dark btn-rounded btn-fw">Dark</button>
                          <button type="button" class="btn btn-link btn-rounded btn-fw">Link</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card-body">
                        <h4 class="card-title">Outlined buttons</h4>
                        <p class="card-description">Add class <code>.btn-outline-{color}</code> for outline buttons</p>
                        <div class="template-demo">
                          <button type="button" class="btn btn-outline-primary btn-fw">Primary</button>
                          <button type="button" class="btn btn-outline-secondary btn-fw">Secondary</button>
                          <button type="button" class="btn btn-outline-success btn-fw">Success</button>
                          <button type="button" class="btn btn-outline-danger btn-fw">Danger</button>
                          <button type="button" class="btn btn-outline-warning btn-fw">Warning</button>
                          <button type="button" class="btn btn-outline-info btn-fw">Info</button>
                          <button type="button" class="btn btn-outline-light btn-fw">Light</button>
                          <button type="button" class="btn btn-outline-dark btn-fw">Dark</button>
                          <button type="button" class="btn btn-link btn-fw">Link</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card-body">
                        <h4 class="card-title">Inverse buttons</h4>
                        <p class="card-description">Add class <code>.btn-inverse-{color} for inverse buttons</code></p>
                        <div class="template-demo">
                          <button type="button" class="btn btn-inverse-primary btn-fw">Primary</button>
                          <button type="button" class="btn btn-inverse-secondary btn-fw">Secondary</button>
                          <button type="button" class="btn btn-inverse-success btn-fw">Success</button>
                          <button type="button" class="btn btn-inverse-danger btn-fw">Danger</button>
                          <button type="button" class="btn btn-inverse-warning btn-fw">Warning</button>
                          <button type="button" class="btn btn-inverse-info btn-fw">Info</button>
                          <button type="button" class="btn btn-inverse-light btn-fw">Light</button>
                          <button type="button" class="btn btn-inverse-dark btn-fw">Dark</button>
                          <button type="button" class="btn btn-link btn-fw">Link</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="card-body">
                        <h4 class="card-title">Icon Buttons</h4>
                        <p class="card-description">Add class <code>.btn-icon</code> for buttons with only icons</p>
                        <div class="template-demo d-flex justify-content-between flex-nowrap">
                          <button type="button" class="btn btn-primary btn-rounded btn-icon">
                            <i class="ti-home"></i>
                          </button>
                          <button type="button" class="btn btn-dark btn-rounded btn-icon">
                            <i class="ti-world"></i>
                          </button>
                          <button type="button" class="btn btn-danger btn-rounded btn-icon">
                            <i class="ti-email"></i>
                          </button>
                          <button type="button" class="btn btn-info btn-rounded btn-icon">
                            <i class="ti-star"></i>
                          </button>
                          <button type="button" class="btn btn-success btn-rounded btn-icon">
                            <i class="ti-location-pin"></i>
                          </button>
                        </div>
                        <div class="template-demo d-flex justify-content-between flex-nowrap">
                          <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                            <i class="ti-home"></i>
                          </button>
                          <button type="button" class="btn btn-inverse-dark btn-icon">
                            <i class="ti-world"></i>
                          </button>
                          <button type="button" class="btn btn-inverse-danger btn-icon">
                            <i class="ti-email"></i>
                          </button>
                          <button type="button" class="btn btn-inverse-info btn-icon">
                            <i class="ti-star"></i>
                          </button>
                          <button type="button" class="btn btn-inverse-success btn-icon">
                            <i class="ti-location-pin"></i>
                          </button>
                        </div>
                        <div class="template-demo d-flex justify-content-between flex-nowrap mt-4">
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="ti-heart text-danger"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="ti-music-alt text-dark"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="ti-star text-primary"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="ti-bar-chart-alt text-info"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="ti-stats-up text-success"></i>
                          </button>
                        </div>
                        <div class="template-demo d-flex justify-content-between flex-nowrap">
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="ti-heart"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="ti-music-alt"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="ti-star"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="ti-bar-chart-alt"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="ti-stats-up"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="card-body">
                        <h4 class="card-title">Button Size</h4>
                        <p class="card-description">Use class <code>.btn-{size}</code></p>
                        <div class="template-demo">
                          <button type="button" class="btn btn-outline-secondary btn-lg">btn-lg</button>
                          <button type="button" class="btn btn-outline-secondary btn-md">btn-md</button>
                          <button type="button" class="btn btn-outline-secondary btn-sm">btn-sm</button>
                        </div>
                        <div class="template-demo mt-4">
                          <button type="button" class="btn btn-danger btn-lg">btn-lg</button>
                          <button type="button" class="btn btn-success btn-md">btn-md</button>
                          <button type="button" class="btn btn-primary btn-sm">btn-sm</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Block buttons</h4>
                    <p class="card-description">Add class <code>d-grid gap-2</code> to parent div of button element</p>
                    <div class="template-demo d-grid gap-2">
                      <button type="button" class="btn btn-info btn-lg btn-block">Block buttons <i class="ti-menu float-right"></i>
                      </button>
                      <button type="button" class="btn btn-dark btn-lg btn-block">Block buttons</button>
                      <button type="button" class="btn btn-primary btn-lg btn-block">
                        <i class="ti-user"></i> Block buttons </button>
                      <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Block buttons</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card-body">
                        <h4 class="card-title">Button groups</h4>
                        <p class="card-description">Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code></p>
                        <div class="template-demo">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">1</button>
                            <button type="button" class="btn btn-outline-secondary">2</button>
                            <button type="button" class="btn btn-outline-secondary">3</button>
                          </div>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="ti-heart"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="ti-calendar"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="ti-time"></i>
                            </button>
                          </div>
                        </div>
                        <div class="template-demo">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">1</button>
                            <button type="button" class="btn btn-primary">2</button>
                            <button type="button" class="btn btn-primary">3</button>
                          </div>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">
                              <i class="ti-heart"></i>
                            </button>
                            <button type="button" class="btn btn-primary">
                              <i class="ti-calendar"></i>
                            </button>
                            <button type="button" class="btn btn-primary">
                              <i class="ti-time"></i>
                            </button>
                          </div>
                        </div>
                        <div class="template-demo mt-4">
                          <div class="btn-group-vertical" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="ti-upload"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="ti-split-v"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="ti-download"></i>
                            </button>
                          </div>
                          <div class="btn-group-vertical" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">Default</button>
                            <div class="btn-group">
                              <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Go back</a>
                                <a class="dropdown-item">Delete</a>
                                <a class="dropdown-item">Swap</a>
                              </div>
                            </div>
                            <button type="button" class="btn btn-outline-secondary">Default</button>
                          </div>
                          <div class="btn-group-vertical" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">Top</button>
                            <button type="button" class="btn btn-outline-secondary">Middle</button>
                            <button type="button" class="btn btn-outline-secondary">Bottom</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card-body">
                        <h4 class="card-title">Button with text and icon</h4>
                        <p class="card-description">Wrap icon and text inside <code>.btn-icon-text</code> and use <code>.btn-icon-prepend</code> or <code>.btn-icon-append</code> for icon tags </p>
                        <div class="template-demo">
                          <button type="button" class="btn btn-primary btn-icon-text">
                            <i class="ti-file btn-icon-prepend"></i> Submit </button>
                          <button type="button" class="btn btn-dark btn-icon-text"> Edit <i class="ti-file btn-icon-append"></i>
                          </button>
                          <button type="button" class="btn btn-success btn-icon-text">
                            <i class="ti-alert btn-icon-prepend"></i> Warning </button>
                        </div>
                        <div class="template-demo">
                          <button type="button" class="btn btn-danger btn-icon-text">
                            <i class="ti-upload btn-icon-prepend"></i> Upload </button>
                          <button type="button" class="btn btn-info btn-icon-text"> Print <i class="ti-printer btn-icon-append"></i>
                          </button>
                          <button type="button" class="btn btn-warning btn-icon-text">
                            <i class="ti-reload btn-icon-prepend"></i> Reset </button>
                        </div>
                        <div class="template-demo mt-2">
                          <button type="button" class="btn btn-outline-primary btn-icon-text">
                            <i class="ti-file btn-icon-prepend"></i> Submit </button>
                          <button type="button" class="btn btn-outline-secondary btn-icon-text"> Edit <i class="ti-file btn-icon-append"></i>
                          </button>
                          <button type="button" class="btn btn-outline-success btn-icon-text">
                            <i class="ti-alert btn-icon-prepend"></i> Warning </button>
                        </div>
                        <div class="template-demo">
                          <button type="button" class="btn btn-outline-danger btn-icon-text">
                            <i class="ti-upload btn-icon-prepend"></i> Upload </button>
                          <button type="button" class="btn btn-outline-info btn-icon-text"> Print <i class="ti-printer btn-icon-append"></i>
                          </button>
                          <button type="button" class="btn btn-outline-warning btn-icon-text">
                            <i class="ti-reload btn-icon-prepend"></i> Reset </button>
                        </div>
                        <div class="template-demo mt-2">
                          <button class="btn btn-outline-dark btn-icon-text">
                            <i class="ti-apple btn-icon-prepend"></i>
                            <span class="d-inline-block text-left">
                              <small class="font-weight-light d-block">Available on the</small> App Store </span>
                          </button>
                          <button class="btn btn-outline-dark btn-icon-text">
                            <i class="ti-android btn-icon-prepend"></i>
                            <span class="d-inline-block text-left">
                              <small class="font-weight-light d-block">Get it on the</small> Google Play </span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Social Icon Buttons</h4>
                    <p class="card-description">Add class <code>.btn-social-icon</code></p>
                    <div class="template-demo">
                      <button type="button" class="btn btn-social-icon btn-outline-facebook"><i class="ti-facebook"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-youtube"><i class="ti-youtube"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-twitter"><i class="ti-twitter-alt"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-dribbble"><i class="ti-dribbble"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-linkedin"><i class="ti-linkedin"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-google"><i class="ti-google"></i></button>
                    </div>
                    <div class="template-demo">
                      <button type="button" class="btn btn-social-icon btn-facebook"><i class="ti-facebook"></i></button>
                      <button type="button" class="btn btn-social-icon btn-youtube"><i class="ti-youtube"></i></button>
                      <button type="button" class="btn btn-social-icon btn-twitter"><i class="ti-twitter-alt"></i></button>
                      <button type="button" class="btn btn-social-icon btn-dribbble"><i class="ti-dribbble"></i></button>
                      <button type="button" class="btn btn-social-icon btn-linkedin"><i class="ti-linkedin"></i></button>
                      <button type="button" class="btn btn-social-icon btn-google"><i class="ti-google"></i></button>
                    </div>
                    <div class="template-demo">
                      <button type="button" class="btn btn-social-icon btn-facebook btn-rounded"><i class="ti-facebook"></i></button>
                      <button type="button" class="btn btn-social-icon btn-youtube btn-rounded"><i class="ti-youtube"></i></button>
                      <button type="button" class="btn btn-social-icon btn-twitter btn-rounded"><i class="ti-twitter-alt"></i></button>
                      <button type="button" class="btn btn-social-icon btn-dribbble btn-rounded"><i class="ti-dribbble"></i></button>
                      <button type="button" class="btn btn-social-icon btn-linkedin btn-rounded"><i class="ti-linkedin"></i></button>
                      <button type="button" class="btn btn-social-icon btn-google btn-rounded"><i class="ti-google"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Social button with text</h4>
                    <p class="card-description">Add class <code>.btn-social-icon-text</code></p>
                    <div class="template-demo">
                      <button type="button" class="btn btn-social-icon-text btn-facebook"><i class="ti-facebook"></i>Facebook</button>
                      <button type="button" class="btn btn-social-icon-text btn-youtube"><i class="ti-youtube"></i>Youtube</button>
                      <button type="button" class="btn btn-social-icon-text btn-twitter"><i class="ti-twitter-alt"></i>Twitter</button>
                      <button type="button" class="btn btn-social-icon-text btn-dribbble"><i class="ti-dribbble"></i>Dribbble</button>
                      <button type="button" class="btn btn-social-icon-text btn-linkedin"><i class="ti-linkedin"></i>Linkedin</button>
                      <button type="button" class="btn btn-social-icon-text btn-google"><i class="ti-google"></i>Google</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ms-1"></i></span>
  </div>
</footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets/js/template.js') }}"></script>
    <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
  </body>
</html>