<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\php\PHPTutorial\WWW\tp\public/../application/admin\view\user\yue.html";i:1556269535;s:70:"D:\php\PHPTutorial\WWW\tp\public/../application/admin\view\layout.html";i:1553218686;}*/ ?>
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


    <style type="text/css">
    .pagination li {
        list-style: none;
        float: left;
        margin-left: 10px;
        background-color: #fff;
        border: 1px solid #ccc;
        height: 26px;
        width: 26px;
        line-height: 26px;
        cursor: pointer;
        color: #5a98de;
        text-align: center;
    }

    .pagination li a {
        width: 100%;
        height: 100%;
        color: #5a98de;
        padding: 0;
        line-height: inherit;
        border: none;
    }

    .pagination li a:hover {
        background-color: white;
    }

    .pagination li.active {
        background-color: #5a98de;
        color: white;
    }

    .pagination li.disabled {
        background-color: white;
        color: gray;
    }
</style>


<!-- 右 -->
<div class="content">
    <div class="header">
        <h1 class="page-title">预约看房</h1>
    </div>

    <div class="well">
        <!-- search button -->
        <form action="<?php echo url('admin/user/yue'); ?>" method="post" class="form-search">
            <div class="row-fluid" style="text-align: left;">
                <div class="pull-left span4 unstyled">
                    <p style="width:1100px"> 
                        时间：<input class="input-medium" name="time" type="text">
                        称呼：<input class="input-medium" name="sex" type="text">
                    </p>
                </div>
            </div>
            <button type="submit" class="btn">查找</button>
        </form>
    </div>
    <div class="well">
        <!-- table -->
        <table class="table table-bordered table-hover table-condensed">
            <thead>
                <tr>
                    <th>编号</th>
                    <th>时间</th>
                    <th>称呼</th>
                    <th>电话号</th>
                    <th>状态</th>
                    <th>添加时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $v): ?>
                <tr class="success">
                    <td><?php echo $v['id']; ?></td>
                    <td><?php echo $v['time']; ?></td>
                    <td><?php echo $v['sex']; ?></td>
                    <td><?php echo $v['phone']; ?></td>
                    <td><?php if($v['is_over']=='0'): ?><a class="as" href="#" data_v="<?php echo $v['id']; ?>">未解决</a><?php else: if($v['is_over']=='1'): ?>已解决<?php endif; endif; ?></td>
                    <td><?php echo $v['create_time']; ?></td>
                    <td>
                        <a href="javascript:void(0);" onclick="if(confirm('确认删除？')) location.href='<?php echo url('admin/user/del',['id'=>$v['id']]); ?>'">
                            删除 </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- pagination -->
        <div class="pagination">
           
            <?php echo $data->render(); ?>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.as').on('click',function(){
                var data={'str':$(this).text(),'id':$(this).attr('data_v')}
                var that=$(this);
                $.post(
                    "<?php echo url('admin/user/y'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            that.parent().text(res.msg);
                        }
                    }
                )
            })
            
        })
        
        
        
    </script>

    <!-- footer -->
    <footer>
        <hr>
        <p>© 2017 <a href="javascript:void(0);" target="_blank">ADMIN</a></p>
    </footer>
    </div>
</body>

</html>