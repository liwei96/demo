<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpstudy_pro\WWW\tp2\public/../application/home\view\index\city.html";i:1565162083;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>城市选择</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style>
        .m {
            padding: 0;
        }

        .m-top {
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 100;
            text-align: center;
            background-color: #fff;
            height: 44px;
            border-bottom: 0.5px solid #F2F2F2;
        }

        .m-top img {
            position: absolute;
            top: 25%;
            width: 6%;
        }

        .m-top .m-go {
            left: 5%;
        }

        .m-top h3 {
            color: #333333;
            font-size: 18px;
            margin: 0;
            height: 100%;
            line-height: 43px;
            font-weight: bold;
        }

        .m-city{
            margin-top:44px;
        }
        .m-city .m-line{
            width:100%;
            height:50px;
            background-color: #F7F7F7;
            color:#808080;
            font-size: 12px;
            line-height: 50px;
            padding-left:15px;
        }
        .m-city .m-now{
            width:100%;
            height:50px;
            color:#4D4D4D;
            font-size: 16px;
            line-height: 50px;
            padding-left:20px;
        }
        .m-city .m-now img{
            width:5%;
            margin-right:2%;
        }
        .m-city .m-list ul{
            padding:0;
        }
        .m-city .m-list ul li{
            width:100%;
            height:50px;
            border-bottom: 0.5px solid #F2F2F2;
            line-height: 50px;
            padding-left:4%;
            color:#333333;
            font-size: 14px;
            list-style: none;
        }

        
    </style>
</head>

<body>




    <div class="container-fluid m">
        <div class="visible-xs-block .visible-sm-block m-top">
            <img class="m-go" src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>城市选择</h3>
        </div>
        <div class="m-city visible-xs-block .visible-sm-block">
            <div class="m-line">当前城市</div>
            <div class="m-now"><img src="/static/home/imgs/path.png"><?php if(\think\Cookie::get('cityname')): ?> <?php echo \think\Cookie::get('cityname'); else: ?>杭州<?php endif; ?></div>
            <div class="m-line">选择城市</div>
            <div class="m-list">
                <ul>
                    <?php foreach($city as $v): ?>
                    <li data-v="<?php echo $v['id']; ?>" data-name="<?php echo $v['area_name']; ?>"><?php echo $v['area_name']; ?></li>
                    <?php endforeach; ?>
                    
                </ul>
            </div>
        </div>
    </div>
</body>
<script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.m-list ul li').on('click',function(){
            var id=$(this).attr('data-v');
            var name=$(this).attr('data-name');
            $.post(
                    "<?php echo url('home/index/city'); ?>",
                    {'id':id,'name':name},
                    function(res){
                        if(res.code==100){
                            window.location.href="<?php echo url('home/index/index'); ?>"
                        }
                    },
                    'json'
                )
        })
    })
        

    
</script>


</html>