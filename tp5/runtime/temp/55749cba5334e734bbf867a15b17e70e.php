<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"C:\wamp\www\tp5\public/../application/admin\view\article\edit.html";i:1567527082;s:57:"C:\wamp\www\tp5\application\admin\view\common\header.html";i:1567176926;s:55:"C:\wamp\www\tp5\application\admin\view\common\left.html";i:1567309594;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>修改文章信息</title>

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

<script type="text/javascript" src="http://localhost/tp5/public/static/admin/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="http://localhost/tp5/public/static/admin/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="http://localhost/tp5/public/static/admin/ueditor/lang/zh-cn/zh-cn.js"></script>



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
											<span class="profile"><span>admin</span></span>
										</h2>
									</section>
							</a> <!--Login Area Dropdown-->
								<ul
									class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
									<li class="username"><a>David Stevenson</a></li>
									<li class="dropdown-footer"><a
										href="/admin/user/logout.html"> 退出登录 </a></li>
									<li class="dropdown-footer"><a
										href="/admin/user/changePwd.html"> 修改密码 </a></li>
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
						<li><a href="http://localhost/tp5/public/admin/">系统</a></li>
						<li><a href="<?php echo url('Article/lst'); ?>">文章管理</a></li>
						<li class="active">修改文章信息</li>
					</ul>
				</div>
				<!-- /Page Breadcrumb -->

				<!-- Page Body -->
				<div class="page-body">

					<div class="row">
						<div class="col-lg-12 col-sm-12 col-xs-12">
							<div class="widget">
								<div class="widget-header bordered-bottom bordered-blue">
									<span class="widget-caption">修改文章信息</span>
								</div>
								<div class="widget-body">
									<div id="horizontal-form">
										<form class="form-horizontal" role="form" action="" enctype="multipart/form-data"
											method="post">

											<input type="hidden" id="id" value="<?php echo $Article['id']; ?>">



											<div class="form-group">
												<label for="username"
													class="col-sm-2 control-label no-padding-right">文章标题</label>
												<div class="col-sm-6">
													<input class="form-control" id="username" placeholder="" value="<?php echo $Article['title']; ?>"
														name="articletitle" type="text">
												</div>
												<p class="help-block col-sm-4 red">* 必填</p>
											</div>
											
											<div class="form-group">
												<label for="username"
													class="col-sm-2 control-label no-padding-right">文章简介</label>
												<div class="col-sm-6">
													<input class="form-control" id="username" placeholder="" value="<?php echo $Article['descr']; ?>"
														name="articledescr" type="text">
												</div>
												<p class="help-block col-sm-4 red">* 必填</p>
											</div>
											
											<div class="form-group">
												<label for="username"
													class="col-sm-2 control-label no-padding-right">文章关键词</label>
												<div class="col-sm-6">
													<input class="form-control" id="username" placeholder="" value="<?php echo $Article['keywords']; ?>"
														name="articlekeyword" type="text">
												</div>
												<p class="help-block col-sm-4 red">* 必填</p>
											</div>
											
											<div class="form-group">
												<label for="username"
													class="col-sm-2 control-label no-padding-right">文章作者</label>
												<div class="col-sm-6">
													<input class="form-control" id="username" placeholder="" value="<?php echo $Article['author']; ?>"
														name="articleauthor" type="text">
												</div>
												<p class="help-block col-sm-4 red">* 必填</p>
											</div>
											
											<div class="form-group">
												<label for="username"
													class="col-sm-2 control-label no-padding-right">文章缩略图</label>
												<div class="col-sm-6">
													<input id="pic" type="file" name="articlepic" style="display:inline;"> 
													<?php if($Article['pic'] != ''): ?>
														<img src="http://localhost/tp5/public/static/<?php echo $Article['pic']; ?>" height="50">
														<?php else: ?>
														暂无缩略图
													<?php endif; ?>
												</div>
												<p class="help-block col-sm-4 red"></p>
											</div>
											
											<div class="form-group">
												<label for="username"
													class="col-sm-2 control-label no-padding-right">文章所属栏目</label>
												<div class="col-sm-6">
													<select name="articlecateid">
													
														
														
														<option value="">请选择栏目</option>
													
														<?php foreach($cate as $vo): if($Article['cateid'] == 'cate.id'): ?>
																<option value="" selected="selected"><?php echo $vo['catename']; ?></option>
															<?php else: ?>
																<option value="" selected=""><?php echo $vo['catename']; ?></option>
															<?php endif; endforeach; ?>
													</select>
												</div>
												<p class="help-block col-sm-4 red">* 必选</p>
											</div>
											
											<div class="form-group">
												<label for="username"
													class="col-sm-2 control-label no-padding-right">是否推荐</label>
												<div class="col-sm-6">
												<?php if($Article['state'] == '1'): ?>
													<input class="checkbox-slider colored-darkorange" name="articlestate" type="checkbox" checked="checked">
													<?php else: ?>
													<input class="checkbox-slider colored-darkorange" name="articlestate" type="checkbox" checked="">
												<?php endif; ?>
                                    				<span class="text"></span>
												</div>
												<p class="help-block col-sm-4 red"></p>
											</div>
											
											<div class="form-group">
                           					<label for="group_id" class="col-sm-2 control-label no-padding-right">文章内容</label>
                            					<div class="col-sm-6">
                                 					<label>
                                    					<textarea name="articlecontent"  id="content" ><?php echo $Article['content']; ?></textarea>
                                 					</label>
                            					</div>
                        					</div>
											


											
											<div class="form-group">
												<div class="col-sm-offset-2 col-sm-10">
													<button type="submit" class="btn btn-default">保存信息</button>
												</div>
											</div>
										</form>
									</div>
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
	
	<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:400,});
    


	</script>



</body>
</html>