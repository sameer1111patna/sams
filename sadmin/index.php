<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="robots" content="noindex, nofollow">
<title>Super Admin | SMART ATTENDANCE MARKING SYSTEMS</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/line-awesome.min.css">

<link rel="stylesheet" href="assets/css/select2.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="admin-dashboard.html" class="logo">
<img src="assets/img/logo2.png" width="40" height="40" alt="">
</a>
</div>

<a id="toggle_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

<div class="page-title-box">
<h3>SMART ATTENDANCE MARKING SYSTEMS</h3>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

<ul class="nav user-menu">

<li class="nav-item dropdown has-arrow main-drop">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="">
<span class="status online"></span></span>
<span>Admin</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="settings.html">Settings</a>
<a class="dropdown-item" href="index.html">Logout</a>
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="settings.html">Settings</a>
<a class="dropdown-item" href="index.html">Logout</a>
</div>
</div>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div class="sidebar-menu">
<ul>
<li>
<a href="admin-dashboard.html"><i class="la la-home"></i> <span>Back to Home</span></a>
</li>
<li class="menu-title">Settings</li>
<li class="active">
<a href="settings.html"><i class="la la-cog"></i> <span>Application Settings</span></a>
</li>
<li>
<a href="localization.html"><i class="la la-clock-o"></i> <span>Login History</span></a>
</li>

</ul>
</div>
</div>
</div>


<div class="page-wrapper">

<div class="content container-fluid">
<div class="row">
<div class="col-md-8 offset-md-2">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Company Settings</h3>
</div>
</div>
</div>

<form>
<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label>Company Name <span class="text-danger">*</span></label>
<input class="form-control" type="text" placeholder="eg. Dreamguy's Technologies">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Address 1</label>
<input class="form-control " placeholder="eg. 3864 Quiet Valley Lane" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Address 2</label>
<input class="form-control " placeholder="eg. Sherman Oaks, CA, 91403" type="text">
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-6">
<div class="form-group">
<label>City</label>
<input class="form-control" placeholder="eg. Oaks" type="text">
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-6">
<div class="form-group">
<label>Postal Code</label>
<input class="form-control" placeholder="eg. 91403" type="text">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Latitude</label>
<input class="form-control" placeholder="eg. 121.56" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Longtitude</label>
<input class="form-control" placeholder="eg. 22.5" type="text">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label>Radius in Meter <span style="font-size:12px">(Set Radius between 100m - 500m.By setting radus, employees can mark attendace inside in this set radis only.)</label>
<input class="form-control" placeholder="eg. 250" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Upload Logo</label>
<input type="file" class="form-control">
</div>
</div>
<div class="col-lg-2">
<label>&nbsp;</label>
<div class="img-thumbnail float-end"><img src="assets/img/logo3.png" class="img-fluid" alt="" width="140" height="40"></div>
</div>
<div class="col-sm-4">
<div class="form-group">
<label>Max Locations</label>
<input class="form-control" placeholder="eg. 4" type="text">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Max Employees</label>
<input class="form-control" placeholder="eg. 10" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Attendance Type</label>
<select class="select">
<option selected="selected">Auto</option>
<option>Manual</option>
<option>Selfie</option>
</select>
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label>Employees Attendance Mark by Admin :</label>
</div>
</div>

<div class="col-sm-2">
<div class="onoffswitch">
<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_hra" checked>
<label class="onoffswitch-label" for="switch_hra">
<span class="onoffswitch-inner"></span>
<span class="onoffswitch-switch"></span>
</label>
</div>
</div>



<div class="col-sm-6">
<div class="form-group">
<label>App License Valid From Date</label>
<input class="form-control" value="5/28/2022" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>App License Valid Till Date</label>
<input class="form-control" value="5/28/2022" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Change Password</label>
<input class="form-control" placeholder="eg. 123456" type="password">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Confirm Change Password</label>
<input class="form-control" placeholder="eg. 123456" type="password">
</div>
</div>
</div>
<div class="submit-section">
<button class="btn btn-primary submit-btn" style="width:100%">Save</button>
</div>
</form>
</div>
</div>
</div>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/select2.min.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>