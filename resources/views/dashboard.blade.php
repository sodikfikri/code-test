<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 14:42:11 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Lorax - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('assets/css/styles/all-themes.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="light">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="{{ asset('assets/images/loading.png') }}" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-expanded="false"></a>
                <a href="#" onClick="return false;" class="bars"></a>
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" />
                    <span class="logo-name">Lorax</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-left">
                    <li>
                        <a href="#" onClick="return false;" class="sidemenu-collapse">
                            <i class="material-icons">reorder</i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>
                    <!-- #END# Full Screen Button -->
                    <!-- #START# Notifications-->
                    <li class="dropdown">
                        <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="far fa-bell"></i>
                            <span class="label-count bg-orange"></span>
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('assets/images/user/user1.jpg') }}" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Sarah Smith</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('') }}assets/images/user/user2.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Airi Satou</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('') }}assets/images/user/user3.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('') }}assets/images/user/user4.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Ashton Cox</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('') }}assets/images/user/user5.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Cara Stevens</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('') }}assets/images/user/user6.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Charde Marshall</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('') }}assets/images/user/user7.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#" onClick="return false;">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications-->
                    <li class="dropdown user_profile">
                        <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <img src="{{ asset('') }}assets/images/user.jpg" width="32" height="32" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">person</i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">feedback</i>Feedback
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">help</i>Help
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">power_settings_new</i>Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right">
                        <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="{{ asset('') }}assets/images/usrbig.jpg" class="img-circle user-img-circle" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Emily Smith </div>
                            <div class="profile-usertitle-job ">Manager </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation">
                    <a href="#skins" data-toggle="tab" class="active">SKINS</a>
                </li>
                <li role="presentation">
                    <a href="#settings" data-toggle="tab">SETTINGS</a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                    <div class="demo-skin">
                        <div class="rightSetting">
                            <p>GENERAL SETTINGS</p>
                            <ul class="setting-list list-unstyled m-t-20">
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked> Save
                                                History
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked> Show
                                                Status
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked> Auto
                                                Submit Issue
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked> Show
                                                Status To All
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="rightSetting">
                            <p>SIDEBAR MENU COLORS</p>
                            <button type="button" class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button" class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                        </div>
                        <div class="rightSetting">
                            <p>THEME COLORS</p>
                            <button type="button" class="btn btn-theme-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button" class="btn btn-theme-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                        </div>
                        <div class="rightSetting">
                            <p>SKINS</p>
                            <ul class="demo-choose-skin choose-theme list-unstyled">
                                <li data-theme="black" class="actived">
                                    <div class="black-theme"></div>
                                </li>
                                <li data-theme="white">
                                    <div class="white-theme white-theme-border"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple-theme"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue-theme"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan-theme"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green-theme"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange-theme"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="rightSetting">
                            <p>Disk Space</p>
                            <div class="sidebar-progress">
                                <div class="progress m-t-20">
                                    <div class="progress-bar l-bg-cyan shadow-style width-per-45" role="progressbar"
                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                    <small>26% remaining</small>
                                </span>
                            </div>
                        </div>
                        <div class="rightSetting">
                            <p>Server Load</p>
                            <div class="sidebar-progress">
                                <div class="progress m-t-20">
                                    <div class="progress-bar l-bg-orange shadow-style width-per-63" role="progressbar"
                                        aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                    <small>Highly Loaded</small>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-green"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever switch-col-blue"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-purple"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-cyan"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-red"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever switch-col-lime"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="card">
                        <div class="header">
                            <button type="button" id="btn-modal-add" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Create
                            </button>                              
                        </div>
                        <div class="body table-responsive">
                            <table class="table" id="list-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Bonus</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <form>
                            <meta name="csrf-token" content="{{ csrf_token() }}" />
                            <label for="email_address">Pembayaran</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="bonus" class="form-control" required>
                                    <small class="validate_bonus" style="color: red; display: none">Form pembayaran tidak boleh kosong</small>
                                </div>
                            </div>
                            <label for="password">Buruh A (%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="persen_a" class="form-control" required>
                                    <small class="validate_prsen" style="color: red; display: none">Data persen tidak sesuai</small>
                                </div>
                            </div>
                            <label for="password">Buruh B (%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="persen_b" class="form-control" required>
                                    <small class="validate_prsen" style="color: red; display: none">Data persen tidak sesuai</small>
                                </div>
                            </div>
                            <label for="password">Buruh C (%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="persen_c" class="form-control" required>
                                    <small class="validate_prsen" style="color: red; display: none">Data persen tidak sesuai</small>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-6" style="padding-top: 7rem">
                        {{-- <form> --}}
                            <label for="password">Buruh A (Rp)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="count_a" class="form-control" disabled>
                                </div>
                            </div>
                            <label for="password">Buruh B (Rp)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="count_b" class="form-control" disabled>
                                </div>
                            </div>
                            <label for="password">Buruh C (Rp)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="count_c" class="form-control" disabled>
                                </div>
                            </div>
                        {{-- </form> --}}
                    </div>
                </div>
                {{-- </div> --}}
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" id="" class="btn btn-primary c-btn">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    <!-- Plugins Js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/admin.js') }}"></script>
    <script src="{{ asset('assets/js/pages/index.js') }}"></script>
    <script src="{{ asset('assets/js/pages/charts/jquery-knob.js') }}"></script>
    <script src="{{ asset('assets/js/pages/sparkline/sparkline-data.js') }}"></script>
    <script src="{{ asset('assets/js/pages/medias/carousel.js') }}"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        jQuery(function($) {
            let role = localStorage.getItem("role")

            let Component = {}

            let state = {
                detail_id: null
            }

            Component.active = function() {
                Component.Function.Count()
                Component.Event.active()
                Component.API.list()
            }

            Component.API = {
                create: function(data) {
                    $.ajax({
                        url: 'http://localhost:8000/create',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: 'POST',
                        data: data,
                        success: function(resp) {
                            console.log(resp);
                            $('#exampleModal').modal('hide')
                            $('.form-control').val()
                        },
                        complete: function() {
                            setTimeout(() => {
                                alert('Berhasil simpan data')
                                Component.API.list()
                            }, 1000);

                        },
                        error: function(e) {
                            console.log(e);
                        }
                    })
                },
                update: function(data) {
                    $.ajax({
                        url: 'http://localhost:8000/update',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: 'PUT',
                        data: data,
                        success: function(resp) {
                            $('#exampleModal').modal('hide')
                            $('.form-control').val()
                        },
                        complete: function() {
                            setTimeout(() => {
                                alert('Berhasil ubah data')
                                Component.API.list()
                            }, 1000);

                        },
                        error: function(e) {
                            console.log('error: ', e);
                        }
                    })
                },
                list: function() {
                    $.ajax({
                        url: 'http://localhost:8000/list',
                        method: 'GET',
                        success: function(resp) {
                            $('#list-table tbody').empty()
                            if (resp.data.length != 0) {
                                $.each(resp.data, function(key, val) {
                                    // console.log('role: ', role);
                                    let del = ''
                                    if (role != 1) {
                                        del = ''
                                    } else {
                                        console.log('masuk ke sini nih');
                                        del = '<span class="border-detail" title="Hapus" id="delete" style="cursor: pointer" data-id="${val.id}"><i class="fas fa-trash"></i></span>'
                                    }

                                    $('#list-table tbody').append(
                                        `<tr>
                                            <td>#</td>
                                            <td>${new Intl.NumberFormat().format(val.total_bonus)}</td>
                                            <td>${moment.unix(val.created_at).format('YYYY-MM-DD HH:mm:ss')}</td>
                                            <td>
                                                <span class="border-detail" title="Detail" id="detail" data-id="${val.id}" style="cursor: pointer"><i class="fas fa-eye"></i></span>
                                                ${del}
                                            </td>
                                        </tr>`
                                    )
                                })
                            }
                        }
                    })
                },
                detail: function(data) {
                    $.ajax({
                        url: 'http://localhost:8000/detail',
                        method: 'GET',
                        data: {id: data},
                        success: function(resp) {
                            $('#bonus').val(new Intl.NumberFormat().format(resp.data.total_bonus))
                            $('#count_a').val(new Intl.NumberFormat().format(resp.data.u_a))
                            $('#count_b').val(new Intl.NumberFormat().format(resp.data.u_b))
                            $('#count_c').val(new Intl.NumberFormat().format(resp.data.u_c))
                            $('#persen_a').val(resp.data.p_a)
                            $('#persen_b').val(resp.data.p_b)
                            $('#persen_c').val(resp.data.p_c)
                            $('#exampleModal').modal('show')
                        }, 
                        error: function(e) {
                            console.log('error: ', e);
                        }
                    })
                },
                delete: function(data) {
                    $.ajax({
                        url: 'http://localhost:8000/delete',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: 'DELETE',
                        data: {id: data},
                        success: function(resp) {
                            Component.API.list()
                        },
                        error: function(e) {
                            console.log(e);
                        }
                    })
                }
            }

            Component.Function = {
                Count: function() {
                    $('#bonus').on('keyup', function() {
                        $('#persen_a').val('')
                        $('#persen_b').val('')
                        $('#persen_c').val('')
                        $('#count_a').val('')
                        $('#count_b').val('')
                        $('#count_c').val('')

                    })
                    $('#persen_a').on('keyup', function() {
                        let bonus = $('#bonus').val()
                        if (!bonus) {
                            $('.validate_bonus').css('display', '')
                            return false
                        } else {
                            $('.validate_bonus').css('display', 'none')
                        }
                        let thsVal = $(this).val()

                        let resp = parseInt(bonus) * parseInt(thsVal) / parseInt(100)

                        $('#count_a').val(new Intl.NumberFormat().format(resp))
                    })
                    $('#persen_b').on('keyup', function() {
                        let bonus = $('#bonus').val()
                        
                        let thsVal = $(this).val()

                        let resp = parseInt(bonus) * parseInt(thsVal) / parseInt(100)

                        $('#count_b').val(new Intl.NumberFormat().format(resp))
                    })
                    $('#persen_c').on('keyup', function() {
                        let bonus = $('#bonus').val()
                        
                        let thsVal = $(this).val()

                        let resp = parseInt(bonus) * parseInt(thsVal) / parseInt(100)

                        $('#count_c').val(new Intl.NumberFormat().format(resp))
                    })
                }
            }

            Component.Event = {
                active: function() {
                    $('#btn-modal-add').on('click', function() {
                        $('.c-btn').attr('id', 'save-data')
                        $('.form-control').val('')
                    })

                    $(document).on('click', '#save-data', function() {
                        
                        let a = $('#persen_a').val()
                        let b = $('#persen_b').val()
                        let c = $('#persen_c').val()

                        let count = parseInt(a) + parseInt(b) + parseInt(c)
                        if (count != 100) {
                            $('.validate_prsen').css('display', '')
                            return false
                        } else {
                            $('.validate_prsen').css('display', 'none')
                        }

                        let params = {
                            total_bonus: $('#bonus').val(),
                            buruh_a: $('#count_a').val().replaceAll(',', ''),
                            buruh_b: $('#count_b').val().replaceAll(',', ''),
                            buruh_c: $('#count_c').val().replaceAll(',', ''),
                            persen_a: $('#persen_a').val(),
                            persen_b: $('#persen_b').val(),
                            persen_c: $('#persen_c').val(),
                        }
                        // console.log(params);
                        Component.API.create(params)
                    })

                    $(document).on('click', '#edit-data', function() {
                        let a = $('#persen_a').val()
                        let b = $('#persen_b').val()
                        let c = $('#persen_c').val()

                        let count = parseInt(a) + parseInt(b) + parseInt(c)
                        if (count != 100) {
                            $('.validate_prsen').css('display', '')
                            return false
                        } else {
                            $('.validate_prsen').css('display', 'none')
                        }
                        let params = {
                            id: state.detail_id,
                            total_bonus: $('#bonus').val(),
                            buruh_a: $('#count_a').val().replaceAll(',', ''),
                            buruh_b: $('#count_b').val().replaceAll(',', ''),
                            buruh_c: $('#count_c').val().replaceAll(',', ''),
                            persen_a: $('#persen_a').val(),
                            persen_b: $('#persen_b').val(),
                            persen_c: $('#persen_c').val(),
                        }

                        Component.API.update(params)
                    })

                    $(document).on('click', '#detail', function() {
                        if (role != 1) {
                            $('.c-btn').css('display', 'none')
                        } else {
                            $('.c-btn').attr('id', 'edit-data')
                        }

                        $('.form-control').val()

                        let id = $(this).data('id')
                        state.detail_id = id
                        Component.API.detail(id)
                    })

                    $(document).on('click', '#delete', function() {

                        var r = confirm("Apakah kamu yakin ingin menghapus data ini ?");
                        if (r !== true) return;

                        let id = $(this).data('id')
                        Component.API.delete(id)
                    })
                }
            }

            Component.active()
        })
    </script>
</body>