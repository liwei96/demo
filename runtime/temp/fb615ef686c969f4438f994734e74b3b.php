<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\php\PHPTutorial\WWW\tp\public/../application/home\view\content\xiang.html";i:1557648578;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>楼盘详情</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <link rel="stylesheet" href="/static/home/css/c-xiang.css">
        <style>
            
        </style>
</head>
<body>
    <!-- PC -->
    <!-- PC -->

    <!-- m -->
    <div class="container-fluid m">
        <div class="m-title visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>楼盘详情</h3>
        </div>
        <div class="m-incro visible-xs-block .visible-sm-block">
            <h3><?php echo $data['building_name']; ?></h3>
            <div class="m-ic-icons">
                <span class="m-zai"><?php echo $data['building_xiaoshou']; ?></span>
                <span class="m-jing"><?php echo $data['building_zhuangxiu']; ?></span>
                <?php foreach($data['building_ditie'] as $v): ?>
                <span><?php echo $v; ?></span>
                <?php endforeach; foreach($data['building_xingshi'] as $v): ?>
                <span><?php echo $v; ?></span>
                <?php endforeach; foreach($data['building_tese'] as $v): ?>
                <span><?php echo $v; ?></span>
                <?php endforeach; ?>
            </div>
            <ul>
                <li>参考单价&nbsp;&nbsp;&nbsp;&nbsp;<span class="m-pric"><span><?php echo $data['danjia']; ?></span>元/m²起</span></li>
                <li>建筑面积&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['jianji']; ?>m²</span></li>
                <li>楼盘户型&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['building_huxing']; ?>、<?php foreach($data['building_xingshi'] as $v): ?><?php echo $v; endforeach; ?></span></li>
                <li>开盘时间&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['kaitime']; ?></span></li>
                <li>楼盘地址&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['building_address']; ?></span></li>
            </ul>
            
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-bot visible-xs-block .visible-sm-block">
            <ul>
                <li>楼盘类型&nbsp;&nbsp;&nbsp;&nbsp;<span><?php foreach($data['building_xingshi'] as $v): ?><?php echo $v; endforeach; ?></span></li>
                <li>开 发  商&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['kaifa']; ?></span></li>
                <li>楼盘地址&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['building_address']; ?></span></li>
                <li>楼盘面积&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['jianji']; ?>方</span></li>
                <li>装修状况&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['building_zhuangxiu']; ?></span></li>
                <li>产权年限&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['channian']; ?>年</span></li>
                <li>开盘时间&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['kaitime']; ?></span></li>
                <li>交房时间&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['jiaotime']; ?></span></li>
                <li><p class="m-sl">公交路线</p>&nbsp;&nbsp;&nbsp;&nbsp;<span class="m-gong">地铁一号线闸弄口站，可达成公交34/k34路、40/k40、k80路、528/</span></li>
                <li>绿 化 率&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['lvhua']; ?>%</span></li>
                <li>容 积 率&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['rongji']; ?></span></li>
            </ul>
        </div>
        <div class="m-botnav visible-xs-block .visible-sm-block">
            <p><img src="/static/home/imgs/forked.png" alt="">收藏</p>
            <button class="m-pho">电话咨询</button>
            <button class="m-yu">预约看房</button>
        </div>
    </div>
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
    <script>
        $(document).ready(function(){
            $('.m-yu').on('click',function(){
                window.location.href="<?php echo url('home/user/yue'); ?>";
            })
        })
    </script>
</body>
</html>