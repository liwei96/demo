<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"D:\php\PHPTutorial\WWW\tp\public/../application/admin\view\tupai\edit.html";i:1561081275;s:70:"D:\php\PHPTutorial\WWW\tp\public/../application/admin\view\layout.html";i:1553218686;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/static/admin/css/main.css" rel="stylesheet" type="text/css" />
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
    <script src="/static/admin/js/jquery-1.8.1.min.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- 上 -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <ul class="nav pull-right">
                    <li id="fat-menu" class="dropdown">
                        <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user icon-white"></i> <?php echo session('userinfo.username'); ?>
                            <i class="icon-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="<?php echo url('admin/manager/modifyPassword',['id'=>session('userinfo.id')]); ?>">修改密码</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="<?php echo url('admin/login/logout'); ?>">安全退出</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="brand" href="<?php echo url('admin/goods/index'); ?>"><span class="first">后台管理系统</span></a>
                <ul class="nav">
                    <li class="active"><a href="javascript:void(0);">首页</a></li>
                    <li><a href="javascript:void(0);">系统管理</a></li>
                    <li><a href="<?php echo url('admin/auth/index'); ?>">权限管理</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 左 -->
    <div class="sidebar-nav">
        <!-- 注意在同一页面上的命名冲突 -->
        <?php foreach($top_nav as $k => $top_vv): ?>
        <a href="#error-menu <?php echo $k; ?>" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i><?php echo $top_vv['auth_name']; ?></a>
        <ul id="error-menu <?php echo $k; ?>" class="nav nav-list collapse in">
            <?php foreach($second_nav as $second_vv): if($second_vv['pid'] == $top_vv['id']): ?>
            <li><a href="<?php echo url($second_vv['auth_c'].'/'.$second_vv['auth_a']); ?>"><?php echo $second_vv['auth_name']; ?></a></li>
            <?php endif; endforeach; ?>
        </ul>
        <?php endforeach; ?>
    </div>


    
<!-- 右 -->
<div class="content">
    <div class="header">
        <h1 class="page-title">土拍信息修改</h1>
    </div>

    <!-- add form --> 
    <form action="<?php echo url('update',['id'=>$data['id']]); ?>" method="post" id="tab" enctype="multipart/form-data">
       
        <div class="tab-content">
            <div class="tab-pane fade in active" id="basic">
                <div class="well">
                        <label>地块名称：</label>
                        <input type="text" name="name" value="<?php echo $data['name']; ?>" class="input-xlarge">
                        <label>地块编号：</label>
                        <input type="text" name="code" value="<?php echo $data['code']; ?>" class="input-xlarge">
                        <label>出让面积（㎡）：</label>
                        <input type="text" name="area" value="<?php echo $data['area']; ?>" class="input-xlarge">
                        <label>用途：</label>
                        <input type="text" name="for" value="<?php echo $data['for']; ?>" class="input-xlarge">
                        <label>容积率：</label>
                        <input type="text" name="rong" value="<?php echo $data['rong']; ?>" class="input-xlarge">
                        <label>建筑面积（㎡）：</label>
                        <input type="text" name="jianmian" value="<?php echo $data['jianmian']; ?>" class="input-xlarge">
                        <label>起价（万元）：</label>
                        <input type="text" name="qijia" value="<?php echo $data['qijia']; ?>" class="input-xlarge">
                        <label>楼面起价（元）：</label>
                        <input type="text" name="loumian" value="<?php echo $data['loumian']; ?>" class="input-xlarge">
                        <label>成交价（万元）：</label>
                        <input type="text" name="chengjiao" value="<?php echo $data['chengjiao']; ?>" class="input-xlarge">
                        <label>楼面价（元）：</label>
                        <input type="text" name="loujia" value="<?php echo $data['loujia']; ?>" class="input-xlarge">
                        <label>溢价率：</label>
                        <input type="text" name="yijia" value="<?php echo $data['yijia']; ?>" class="input-xlarge">
                        <label>竞得单位：</label>
                        <input type="text" name="unit" value="<?php echo $data['unit']; ?>" class="input-xlarge">
                </div>
            </div>
           
            <button class="btn btn-primary" type="submit">保存</button>
        </div>
    </form>

    

    <!-- footer -->
    <footer>
        <hr>
        <p>© 2017 <a href="javascript:void(0);" target="_blank">ADMIN</a></p>
    </footer>
    </div>
</body>

</html>