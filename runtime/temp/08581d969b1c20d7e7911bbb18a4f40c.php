<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"G:\jiayuan\tp2\public/../application/home\view\index\jiao.html";i:1574132014;}*/ ?>
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

            .m-jiao{
                padding-left: 4%;
                padding-right: 4%;
                margin-top: 4%;
        }
        .m-jiao:last-child{
             margin-bottom:30px; 
        }
        .m-jiao h5{
            font-size: 16px;
            color:#333333;
            font-weight: bold;
            margin-bottom: 16px;
            margin-top:0;
        }
        .m-jiao h5 span{
            font-size: 14px;
            color:#898989;
            font-weight: 100;
            float:right;
        }
        .m-jiao h5 span img{
            width:12%;
        }
        .m-jiao .m-j-con{
            padding:4%;
            height:100px;
            box-shadow:0px 0px 20px 5px rgba(0, 0, 0, 0.04);
            border-radius:6px;
        }
        .m-jiao .m-j-con .j-c-left{
            float:left;
            width:40%;
        }
        .m-jiao .m-j-con .j-c-left img{
            border-radius: 4px;
            width:82%;
        }
        .m-jiao .m-j-con .j-c-right{
            float:right;
            width:60%;
        }
        .m-jiao .m-j-con .j-c-right h6{
            font-size: 12px;
            margin-top:0;
            color:#323232;
            margin-bottom:4px;
            line-height: 14px;
        }
        .m-jiao .m-j-con .j-c-right p{
            font-size: 14px;
            color:#999999;
            height:36px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            line-height: 18px;
            text-indent: 14%;
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
            <h3>更多案例</h3>
        </div>
        <?php foreach($data as $v): ?>
        <div class="m-jiao">
            <a href="<?php echo url('home/index/read',['id'=>$v['id']]); ?>">
                <div class="m-j-con">
                    <div class="j-c-left">
                        <img src="<?php echo $v['img']; ?>" alt="">
                    </div>
                    <div class="j-c-right">
                        <h6><?php echo $v['title']; ?></h6>
                        <p><?php echo $v['content']; ?></p>
                    </div>
                </div>
            </a>
            </div>
            <?php endforeach; ?>
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