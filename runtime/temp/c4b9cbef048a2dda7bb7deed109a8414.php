<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"D:\php\PHPTutorial\WWW\tp\public/../application/admin\view\building\edit.html";i:1557970469;s:70:"D:\php\PHPTutorial\WWW\tp\public/../application/admin\view\layout.html";i:1553218686;}*/ ?>
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


    <script type="text/javascript" charset="utf-8" src="__STATIC__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/ueditor/lang/zh-cn/zh-cn.js"></script>
<style>
        .content{
            top:-18px;
        }
    </style>
!-- 右 -->
<div class="content"> 
    <div class="header">
        <h1 class="page-title">楼盘编辑</h1>
    </div>
    <input type="hidden" name="id" id="goods_type_id" value="<?php echo $list['id']; ?>">
    <!-- edit form -->
    <form action="<?php echo url('update',['id'=>$list['id']]); ?>" method="post" id="tab" enctype="multipart/form-data">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#basic" data-toggle="tab">基本信息</a></li>
            <li role="presentation"><a href="#desc" data-toggle="tab">楼盘描述</a></li>
            <li role="presentation"><a href="#attr" data-toggle="tab">楼盘属性</a></li>
            
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="basic">
                <div class="well">
                    <label>楼盘名称：</label>
                    <input type="text" name="building_name" value="<?php echo $list['building_name']; ?>" class="input-xlarge">
                    <label>启用状态：</label>
                    <select name="type" id="">
                        <?php foreach($type as $v): ?>
                        <option value="<?php echo $v; ?>" <?php if($v==$list['type']): ?>selected<?php endif; ?>><?php echo $v; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>销售状态：</label>
                    <select name="building_xiaoshou" id="">
                        <?php foreach($xiaoshou as $v): ?>
                        <option value="<?php echo $v; ?>" <?php if($v==$list['building_xiaoshou']): ?>selected<?php endif; ?>><?php echo $v; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>价格等级：</label>
                    <select name="building_jiage" id="">
                        <?php foreach($jiage as $v): ?>
                        <option value="<?php echo $v; ?>" <?php if($v==$list['building_jiage']): ?>selected<?php endif; ?>><?php echo $v; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>价格等级(总价)：</label>
                        <select name="zongjia" id="">
                            <?php foreach($zongjia as $v): ?>
                            <option value="<?php echo $v; ?>" <?php if($v==$list['zongjia']): ?>selected<?php endif; ?>><?php echo $v; ?></option>
                            <?php endforeach; ?>
                        </select>
                    <label>楼盘价格：</label>
                    <select name="building_dengji" id="">
                        <?php foreach($dengji as $v): ?>
                        <option value="<?php echo $v; ?>" <?php if($v==$list['building_dengji']): ?>selected<?php endif; ?>><?php echo $v; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>装修情况：</label>
                    <select name="building_zhuangxiu" id="">
                        <?php foreach($zhuangxiu as $v): ?>
                        <option value="<?php echo $v; ?>" <?php if($v==$list['building_zhuangxiu']): ?>selected<?php endif; ?>><?php echo $v; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>预售证：</label>
                    <select name="yushou" id="">
                        <?php foreach($yushou as $v): ?>
                        <option value="<?php echo $v; ?>" <?php if($v==$list['yushou']): ?>selected<?php endif; ?>><?php echo $v; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>楼盘地址：</label>
                    <input type="text" name="building_address" value="<?php echo $list['building_address']; ?>" class="input-xlarge">
                    <label>开发商：</label>
                        <input type="text" name="kaifa" value="<?php echo $list['kaifa']; ?>" class="input-xlarge">
                        <label>物业公司：</label>
                        <input type="text" name="wuye" value="<?php echo $list['wuye']; ?>" class="input-xlarge">
                        <label>售楼处地址：</label>
                        <input type="text" name="shoulou" value="<?php echo $list['shoulou']; ?>" class="input-xlarge">
                    <label>录入人员：</label>
                    <input type="text" name="building_people" value="<?php echo $list['building_people']; ?>" class="input-xlarge">
                    <label>楼盘户数：</label>
                        <input type="text" name="hushu" value="<?php echo $list['hushu']; ?>" class="input-xlarge">
                        <label>规划面积：</label>
                        <input type="text" name="guiji" value="<?php echo $list['guiji']; ?>" class="input-xlarge">
                        <label>建筑面积：</label>
                        <input type="text" name="jianji" value="<?php echo $list['jianji']; ?>" class="input-xlarge">
                        <label>家庭面积：</label>
                        <input type="text" name="jianji" value="<?php echo $list['humianji']; ?>" class="input-xlarge">
                        <label>单价：(元)</label>
                        <input type="text" name="danjia" value="<?php echo $list['danjia']; ?>" class="input-xlarge">
                        <label>总价：(万)</label>
                        <input type="text" name="zong" value="<?php echo $list['zong']; ?>" class="input-xlarge">
                        <label>相似楼盘：(编号用,隔开)</label>
                        <input type="text" name="xiangsi" value="<?php echo $list['xiangsi']; ?>" class="input-xlarge">
                        <label>开盘时间：</label>
                        <input name="kaitime" type="date" value="<?php echo $list['kaitime']; ?>"/>
                        <label>交房时间：</label>
                        <input name="jiaotime" type="date" value="<?php echo $list['jiaotime']; ?>"/>
                        <label>容积率：</label>
                        <input type="text" name="rongji" value="<?php echo $list['rongji']; ?>" class="input-xlarge">
                        <label>绿化率：</label>
                        <input type="text" name="lvhua" value="<?php echo $list['lvhua']; ?>" class="input-xlarge">
                        <label>产权年限：</label>
                        <input type="text" name="channian" value="<?php echo $list['channian']; ?>" class="input-xlarge">
                        <label>车位数：</label>
                        <input type="text" name="chewei" value="<?php echo $list['chewei']; ?>" class="input-xlarge">

                        <label>物业费：</label>
                        <input type="text" name="wufei" value="<?php echo $list['wufei']; ?>" class="input-xlarge">
                        <label>层高：</label>
                        <input type="text" name="cenggao" value="<?php echo $list['cenggao']; ?>" class="input-xlarge">
                        <label>mapx：</label>
                        <input type="text" name="mapx" value="<?php echo $list['mapx']; ?>" class="input-xlarge">
                        <a href="https://lbs.amap.com/console/show/picker" target="_blank">点击这里</a>

                        <label>mapy：</label>
                        <input type="text" name="mapy" value="<?php echo $list['mapy']; ?>" class="input-xlarge">
                    <label>有楼盘资料：</label>
                    <select name="building_ziliao" id="">
                        <?php foreach($ziliao as $v): ?>
                        <option value="<?php echo $v; ?>" <?php if($v==$list['building_ziliao']): ?>selected<?php endif; ?>><?php echo $v; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>是否上热搜：(不能超过4个)</label>
                    <select name="building_tejia" id="">
                        <?php foreach($tejia as $v): ?>
                        <option value="<?php echo $v; ?>" <?php if($v==$list['building_tejia']): ?>selected<?php endif; ?>><?php echo $v; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>楼盘主图：</label>
                    <input type="file" name="building_logo" value="" class="input-xlarge">
                    
                        </div>
                </div>
                 <div class="tab-pane fade in" id="desc">
                            <div class="well">
                                <label>楼盘简介：</label>
                                <textarea id="editor" name="introduce" style="width:800px;height:500px;" class="input-xlarge"><?php echo $list['introduce']; ?></textarea>
                            </div>
                            <div class="well">
                                <label>活动优惠：</label>
                                <textarea name="preferential" style="width:800px;height:500px;"><?php echo $list['preferential']; ?></textarea>
                            </div>
                            <div class="well">
                            <label>公交路线：(到楼盘)</label>
                            <textarea name="traffic" style="width:800px;height:500px;"><?php echo $list['traffic']; ?></textarea>
                        </div>
                </div>
                <div class="tab-pane fade in" id="attr">
                        <div class="well">
                            <label>地铁：</label>
                            <?php foreach($ditie as $v): ?>
                            
                            <input type="checkbox" name="building_ditie[]" value="<?php echo $v; ?>"<?php foreach($l_ditie as $l): if($v==$l): ?>checked<?php endif; endforeach; ?>><?php echo $v; endforeach; ?>
                            
                            <label>户型：</label>
                            <?php foreach($huxing as $v): ?>
                            
                            <input type="checkbox" name="building_huxing[]" value="<?php echo $v; ?>"<?php foreach($l_huxing as $l): if($v==$l): ?>checked<?php endif; endforeach; ?>><?php echo $v; endforeach; ?>
                            <label>建筑形式：</label>
                            <?php foreach($xingshi as $v): ?>
                            
                            <input type="checkbox" name="building_xingshi[]" value="<?php echo $v; ?>"<?php foreach($l_xingshi as $l): if($v==$l): ?>checked<?php endif; endforeach; ?>><?php echo $v; endforeach; ?>
                            <label>楼盘特色：</label>
                            <?php foreach($tese as $v): ?>
                            
                            <input type="checkbox" name="building_tese[]" value="<?php echo $v; ?>"<?php foreach($l_tese as $l): if($v==$l): ?>checked<?php endif; endforeach; ?>><?php echo $v; endforeach; ?>
                        </div>
                        <div class="well">
                            <label>楼盘分区：</label>
                            <select name="" class="input-xlarge" id="cate_one">
                                <option value="">请选择城市</option>
                                <?php foreach($lists as $v): ?>
                                <option value="<?php echo $v['id']; ?>" <?php if($v['id']==$once['id']): ?> selected <?php endif; ?>><?php echo $v['area_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <select name="cate_id" class="input-xlarge" id="cate_two">
                                <?php foreach($seconds as $s): ?>
                                <option value="<?php echo $s['id']; ?>" <?php if($s['id']==$second['id']): ?> selected <?php endif; ?>><?php echo $s['area_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>关键字：</label>
                            <input type="text" name="keys" value="<?php echo $list['keys']; ?>" class="input-xlarge">   
                        </div>
                </div>
                    <button class="btn btn-primary" type="submit">保存</button>
                </div>
    </form>

    <script type="text/javascript">
        $(function () {
            // 实例化编辑器
            UE.getEditor('editor');
            UE.getEditor('editor1');
            UE.getEditor('editor2');
            UE.getEditor('editor3');
            $('#cate_one').change(function () {
                $('#cate_two').html('<option value="">请选择区域</option>');
                $('#cate_three').html('<option value="">请选择板块</option>');
                var id = $(this).val();
                if (id == '') {
                    return;
                }
                var data = {
                    'id': id
                };
                $.ajax({
                    'url': '<?php echo url("admin/category/getSubCate"); ?>',
                    'type': 'post',
                    'data': data,
                    'dataType': 'json',
                    'success': function (res) {
                        if (res.data != 10000) {
                            var html = '<option value="">请选择区域</option>';
                            var data = res.data;
                            $.each(data, function (k, v) {
                                html += '<option value="' + v.id + '">' + v.area_name + '</option>';
                            })
                            $('#cate_two').html(html);
                        }

                    }
                })
            });
            
            $('.delete_pics').click(function () {
                var id = $(this).attr('pics_id');
                var data = {
                    'id': id
                }
                var that = $(this);
                $.ajax({
                    'url': "<?php echo url('admin/goods/delpics'); ?>",
                    'type': 'post',
                    'data': data,
                    'dataType': 'json',
                    'success': function (res) {
                        if (res.code == 10000) {
                            alert(res.msg);
                        } else {
                            that.parent().remove();
                        }
                    }
                })
            })
            $('.add').click(function () {
                var add_div = '<div>[<a href="javascript:void(0);" class="sub">-</a>]楼盘图片：<input type="file" name="goods_pics[]" value="" class="input-xlarge"></div>';
                $(this).parent().parent().append(add_div);
            });
            $('.sub').live('click', function () {
                $(this).parent().remove();
            });
            // 保存原始的属性信息,用于后续处理
            var html = $('#attrs').val();
            // 楼盘类型的下拉列表
            $('select[name=type_id]').change(function () {
                $('#attrs').html();
                var id = $(this).val();
                if (id == '') {
                    return;
                };
                // {}中间不能有空格,否则各种bug
                if (id == $('#goods_type_id').val()) {
                    $('#attrs').html(html);
                }
                var data = { 'id': id };
                $.ajax({
                    'url': "<?php echo url('admin/attribute/getattr'); ?>",
                    'type': 'post',
                    'data': data,
                    'dataType': 'json',
                    'success': function (res) {
                        if (res.code != 10000) {
                            alert(res.msg); return;
                        }
                        // 遍历结果数组,拼接html展示属性信息
                        var str = '';
                        $.each(res.data, function (i, v) {
                            str += '<label>' + v.attr_name + ':</label>';
                            if (v.attr_input_type == '0') {
                                str += '<input type="text" name="attr_value[' + v.id + '][]" value="">';
                            } else if (v.attr_input_type == '1') {
                                str += '<select name="attr_value[' + v.id + '][]">';
                                $.each(v.attr_values, function (index, value) {
                                    str += '<option  value="' + value + '">' + value + '</option>';
                                })
                                str += '</select>';
                            } else {
                                $.each(v.attr_values, function (index, value) {
                                    str += '<input type="checkbox" name="attr_value[' + v.id + '][]" value="' + value + '">' + value;
                                })
                            }
                        })
                        $('#attrs').html(str);
                    }
                })
            })
        });
    </script>

    <!-- footer -->
    <footer>
        <hr>
        <p>© 2017 <a href="javascript:void(0);" target="_blank">ADMIN</a></p>
    </footer>
    </div>
</body>

</html>