<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\php\PHPTutorial\WWW\tp\public/../application/home\view\index\read.html";i:1562490752;}*/ ?>
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
            .m{
                padding:0;
            }
            .m-title{
                position: relative;
                width:100%;
                height:44px;
                text-align: center;
                line-height: 44px;
                border-bottom: 0.5px solid #F2F2F2;
            }
            .m-title img{
                position: absolute;
                width:5%;
                margin-top:14px;
                left:5.3333%;
            }
            .m-title h3{
                color:#333333;
                font-size: 18px;
                margin:0;
                font-weight: bold;
                line-height: 44px;
            }

            .m-content{
                margin-top:15px;
            }
            .m-content .left{
                width:50%;
                float:left;
            }
            .m-content .left img{
                width:85%;
                margin-left: 8%;
                border-radius: 2px;
            }
            .m-content .right{
                width:50%;
                float:right;
                padding-left:2%;
            }
            .m-content .right .ct{
                color:#999999;
                font-size: 12px;
                margin-bottom: 2px;
            }
            .m-content .right .cx{
                color:#323232;
                font-size: 14px;
                margin-bottom:4px;
            }
            .m-content .right .nei{
                color:#323232;
                font-size: 15px;
            }
            
            .m-content .nei{
                margin-top:10px;
                float:left;
                padding:0 4% 0 4%;
                color:#999999;
                font-size: 16px;
                line-height: 28px;
                text-indent: 8%;
            }
        </style>
</head>
<body>
    <!-- PC -->
    <!-- PC -->

    <!-- m -->
    <div class="container-fluid m">
        <div class="m-title visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>成交案例</h3>
        </div>
        <div class="m-content">
            <div class="left">
                <img src="<?php echo $data['img']; ?>" alt="">
            </div>
            <div class="right">
                <p class="ct">成交用户</p>
                <p class="cx"><?php echo $data['name']; ?></p>
                <p class="ct">成交时间</p>
                <p class="cx"><?php echo $data['time']; ?></p>
                <p class="ct">成交楼盘</p>
                <p class="cv"><?php echo $data['lou']; ?></p>
            </div>
            <p class="nei">
                <?php echo $data['content']; ?>
            </p>
        </div>
    </div>
    <script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
    <script>
        $(document).ready(function(){
            
        })
    </script>
</body>
</html>