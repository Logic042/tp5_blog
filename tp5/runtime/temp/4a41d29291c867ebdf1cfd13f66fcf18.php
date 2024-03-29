<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"C:\wamp\www\tp5\public/../application/admin\view\admin\lst.html";i:1566833430;s:57:"C:\wamp\www\tp5\application\admin\view\common\header.html";i:1568529349;s:55:"C:\wamp\www\tp5\application\admin\view\common\left.html";i:1567309594;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>管理员列表</title>

<meta name="description" content="Dashboard">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--Basic Styles-->
<link href="http://localhost/tp5/public/static/admin/style/bootstrap.css" rel="stylesheet">
<link href="http://localhost/tp5/public/static/admin/style/font-awesome.css" rel="stylesheet">
<link href="http://localhost/tp5/public/static/admin/style/weather-icons.css" rel="stylesheet">

<!--Beyond styles-->
<link id="beyond-link" href="http://localhost/tp5/public/static/admin/style/beyond.css"
	rel="stylesheet" type="text/css">
<link href="http://localhost/tp5/public/static/admin/style/demo.css" rel="stylesheet">
<link href="http://localhost/tp5/public/static/admin/style/typicons.css" rel="stylesheet">
<link href="http://localhost/tp5/public/static/admin/style/animate.css" rel="stylesheet">

</head>
<body>
	<!-- 头部 -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="navbar-container">
				<!-- Navbar Barnd -->
				<div class="navbar-header pull-left">
					<a href="http://localhost/tp5/public/admin" class="navbar-brand"> <small> <img
							src="http://localhost/tp5/public/static/admin/images/logo.png" alt="">
					</small>
					</a>
				</div>
				<!-- /Navbar Barnd -->
				<!-- Sidebar Collapse -->
				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="collapse-icon fa fa-bars"></i>
				</div>
				<!-- /Sidebar Collapse -->
				<!-- Account Area and Settings -->
				<div class="navbar-header pull-right">
					<div class="navbar-account">
						<ul class="account-area">
							<li><a class="login-area dropdown-toggle"
								data-toggle="dropdown">
									<div class="avatar" title="View your public profile">
										<img src="http://localhost/tp5/public/static/admin/images/adam-jansen.jpg">
									</div>
									<section>
										<h2>
											<span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span>
										</h2>
									</section>
							</a> <!--Login Area Dropdown-->
								<ul
									class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
									<li class="username"><a><?php echo \think\Request::instance()->session('username'); ?></a></li>
									<li class="dropdown-footer"><a
										href="<?php echo url('Admin/logout'); ?>"> 退出登录 </a></li>
									<li class="dropdown-footer"><a
										href="<?php echo url('admin/edit',array('id' => \think\Request::instance()->session('uid'))); ?>"> 修改密码 </a></li>
								</ul> <!--/Login Area Dropdown--></li>
							<!-- /Account Area -->
							<!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
							<!-- Settings -->
						</ul>
					</div>
				</div>
				<!-- /Account Area and Settings -->
			</div>
		</div>
	</div>

	<!-- /头部 -->

	<div class="main-container container-fluid">
		<div class="page-container">
			<!-- Page Sidebar -->
			<div class="page-sidebar" id="sidebar">
	<!-- Page Sidebar Header-->
	<div class="sidebar-header-wrapper">
		<input class="searchinput" type="text"> <i
			class="searchicon fa fa-search"></i>
		<div class="searchhelper">Search Reports, Charts, Emails or
			Notifications</div>
	</div>
	<!-- /Page Sidebar Header -->
	<!-- Sidebar Menu -->
	<ul class="nav sidebar-menu">
		<!--Dashboard-->
		<li><a href="#" class="menu-dropdown"> <i
				class="menu-icon fa fa-user"></i> <span class="menu-text">管理员</span>
				<i class="menu-expand"></i>
		</a>
			<ul class="submenu">
				<li><a href="<?php echo url('Admin/lst'); ?>"> <span class="menu-text">
							管理列表 </span> <i class="menu-expand"></i>
				</a></li>
			</ul></li>

		<li><a href="#" class="menu-dropdown"> <i
				class="menu-icon fa fa-file-text"></i> <span class="menu-text">文章管理</span>
				<i class="menu-expand"></i>
		</a>
			<ul class="submenu">
				<li><a href="<?php echo url('Article/lst'); ?>"> <span
						class="menu-text"> 文章列表 </span> <i class="menu-expand"></i>
				</a></li>
			</ul></li>

		<li><a href="#" class="menu-dropdown"> <i
				class="menu-icon fa fa-link"></i> <span class="menu-text">热门链接</span>
				<i class="menu-expand"></i>
		</a>
			<ul class="submenu">
				<li><a href="<?php echo url('Links/lst'); ?>"> <span class="menu-text">
							链接列表 </span> <i class="menu-expand"></i>
				</a></li>
			</ul></li>
			
		<li><a href="#" class="menu-dropdown"> <i
				class="menu-icon fa fa-list"></i> <span class="menu-text">栏目管理</span>
				<i class="menu-expand"></i>
		</a>
			<ul class="submenu">
				<li><a href="<?php echo url('Cate/lst'); ?>"> <span class="menu-text">
							栏目列表 </span> <i class="menu-expand"></i>
				</a></li>
			</ul></li>

		<li><a href="#" class="menu-dropdown"> <i
				class="menu-icon fa fa-gear"></i> <span class="menu-text">系统</span>
				<i class="menu-expand"></i>
		</a>
			<ul class="submenu">
				<li><a href="/admin/document/index.html"> <span
						class="menu-text"> 配置 </span> <i class="menu-expand"></i>
				</a></li>
			</ul></li>
<!-- 
		<li><a href="http://www.chuanke.com/s2260700.html"
			class="menu-dropdown"> <i class="menu-icon fa fa-gear"></i> <span
				class="menu-text">视频教程</span> <i class="menu-expand"></i>
		</a></li>
 -->
	</ul>
	<!-- /Sidebar Menu -->
</div>
			<!-- /Page Sidebar -->
			<!-- Page Content -->
			<div class="page-content">
				<!-- Page Breadcrumb -->
				<div class="page-breadcrumbs">
					<ul class="breadcrumb">
						<li><a href="#">系统</a></li>
						<li class="active">用户管理</li>
					</ul>
				</div>
				<!-- /Page Breadcrumb -->

				<!-- Page Body -->
				<div class="page-body">

					<button type="button" tooltip="添加用户"
						class="btn btn-sm btn-azure btn-addon"
						onClick="javascript:window.location.href = '<?php echo url('admin/add'); ?>'">
						<i class="fa fa-plus"></i> Add
					</button>
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-xs-12">
							<div class="widget">
								<div class="widget-body">
									<div class="flip-scroll">
										<table class="table table-bordered table-hover">
											<thead class="">
												<tr>
													<th class="text-center">ID</th>
													<th class="text-center">用户名称</th>
													<th class="text-center">操作</th>
												</tr>
											</thead>
											<tbody>
											<?php foreach($list as $vo): ?>
												<tr>
													<td align="center"><?php echo $vo['id']; ?></td>
													<td align="center"><?php echo $vo['username']; ?></td>
													<td align="center"><a
														href="<?php echo url('admin/edit',array('id'=>$vo['id'])); ?>"
														class="btn btn-primary btn-sm shiny"> <i
															class="fa fa-edit"></i> 编辑
													</a> <a href="#"
														onClick="warning('确实要删除吗', '<?php echo url('admin/delete',array('id'=>$vo['id'])); ?>')"
														class="btn btn-danger btn-sm shiny"> <i
															class="fa fa-trash-o"></i> 删除
													</a></td>
												</tr>
											<?php endforeach; ?>	
											</tbody>
										</table>
									</div>
									<div></div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /Page Body -->
			</div>
			<!-- /Page Content -->
		</div>
	</div>

	<!--Basic Scripts-->
	<script src="http://localhost/tp5/public/static/admin/style/jquery_002.js"></script>
	<script src="http://localhost/tp5/public/static/admin/style/bootstrap.js"></script>
	<script src="http://localhost/tp5/public/static/admin/style/jquery.js"></script>
	<!--Beyond Scripts-->
	<script src="http://localhost/tp5/public/static/admin/style/beyond.js"></script>



</body>
</html>