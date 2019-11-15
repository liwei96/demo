<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"G:\jiayuan\tp2\public/../application/home\view\index\dongs.html";i:1573809612;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>动态详情</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="//at.alicdn.com/t/font_1416845_l80icjbk93.css">

    <style>
        .m {
            padding: 0;
        }
        li{
            list-style: none;
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

        .m-dong {
            margin-top: 65px;
        }

        .m-dong h3 {
            color: #404040;
            font-size: 16px;
            margin: 25px 0 25px 4%;
            font-weight: bold;
        }

        .m-dong h3 span {
            color: #898989;
            font-size: 14px;
            float: right;
            margin-right: 4%;
            font-weight: normal;
        }

        .m-dong h3 span img {
            width: 25%;
            margin-top: -3%;
            margin-left: 14%;
        }

        .m-dong .m-tai {
            margin-bottom: 26px;
            border-bottom:1px solid #F2F2F2;
            width:92%;
            margin-left:4%;
        }

        .m-dong .m-tai h4 {
            color: #404040;
            font-size: 16px;
            margin-bottom: 17.5px;
            font-family: "Microsoft YaHei";
            margin-top:15px;
        }

        .m-dong .m-tai p {
            color: #666666;
            font-size: 15px;
            text-indent: 8%;
            line-height: 24px;
            margin: 0;
            font-family: "Microsoft YaHei";
            margin-bottom:10px;
        }
        .m-dong .m-tai h6{
             text-align:right;
            font-size:12px;
            font-family:"Microsoft YaHei";
            font-weight:500;
            color:rgba(51,51,51,1);
        }
        .m-dong .m-tai span {
            color: #333333;
            font-size: 14px;
            float: right;
            font-family: "Microsoft YaHei";
            margin-right:4%;
        }
        .m-dong .m-tai  h4 a{
               color:#333333;
               text-decoration:underline
        }
        /* .m-dong button {
            width: 92%;
            height: 44px;
            background-color: #F0F5F2;
            color: #1CB64F;
            font-size: 16px;
            text-align: center;
            line-height: 44px;
            margin-left: 4%;
            border-radius: 4px;
            border: 0px;
            margin-bottom: 20px;
        } */


        /* PC */
        /* 顶部导航 */
        .top-nav {
            height: 80px;
            width: 100%;
            background-color: #fff;
            position: relative;
        }

        .box {
            width: 1200px;
            position: absolute;
            left: 50%;
            margin-left: -600px;
        }

        .top-nav ul {
            margin: 0;
        }

        .top-nav ul li {
            float: left;
            margin-right: 40px;
        }

        .top-nav ul li a {
            color: #999999;
            font-size: 18px;
            line-height: 80px;
        }

        .top-nav ul li a.active {
            color: #1CB64F;
            border-bottom: 2px solid #1CB64F;
            padding-bottom: 10px;
        }

        .top-nav p {
            float: right;
            color: #1CB64F;
            font-size: 24px;
            line-height: 80px;
            font-weight: bold;
        }

        .top-nav span {
            color: #9A9A9A;
            font-size: 18px;
            line-height: 80px;
            margin-right: 19px;
            cursor: pointer;
        }

        .top-nav img {
            width: 17px;
            margin-left: 90px;
            margin-right: 11px;
            line-height: 80px;
        }

        .top-nav .register {
            margin-right: 7px;
        }

        .top-nav img.jk {
            margin-left: 33px;
        }

        .top-nav .user {
            color: #2DD264;
        }


        /* 搜索栏 */
        .search {
            width: 100%;
            height: 120px;
            background-color: #F5F7F6;
        }

        .search .top {
            position: relative;
            padding-top: 30px;
            margin-bottom: 30px;
        }

        .search .top img {
            width: 100px;
            margin-right: 26px;
            display: inline-block;
        }

        .search .top p {
            padding-left: 5px;
            display: inline-block;
            border-left: 1px solid #999999;
        }

        .search .top p i {
            color: #323232;
            font-size: 18px;
            font-style: normal;
        }

        .search .top p img {
            width: 14px;
            margin-left: 10px;
        }

        .search .top input {
            width: 622px;
            height: 60px;
            border: 1px solid #2FBF4A;
            padding-left: 44px;
        }

        .search .top input::-webkit-input-placeholder {
            color: #989898;
            font-size: 16px;
        }

        .search .top span {
            display: block;
            position: absolute;
            width: 160px;
            height: 60px;
            font-size: 16px;
            top: 19px;
            line-height: 60px;
            text-align: center;
        }

        .search .top #find {
            cursor: pointer;
            background-color: #1CB64F;
            color: #FFFFFF;
            top: 30px;
            right: 193px;
        }

        .search .top #find img {
            width: 22px;
            margin-right: 10px;
        }

        .search .top #map {
            cursor: pointer;
            border: 1px solid #1CB64F;
            color: #1CB64F;
            top: 30px;
            right: 0;
        }

        .search .top #map img {
            width: 22px;
            margin-right: 10px;
        }

        /* footer */
        footer {
            width: 100%;
            height: 260px;
            background-color: #1B1B1B;
            position: relative;
        }

        .footer-top {
            position: absolute;
            top: 38px;
            left: 50%;
            margin-left: -600px;
        }

        .footer-top li {
            color: #FFFFFF;
            float: left;
            font-size: 14px;
            margin-right: 18px;
            cursor: pointer;
        }

        .footer-line {
            width: 1200px;
            height: 1px;
            background-color: #333333;
            position: absolute;
            top: 100px;
            left: 50%;
            margin-left: -600px;
        }

        footer p {
            color: #FFFFFF;
            font-size: 24px;
            position: absolute;
            top: 29px;
            left: 50%;
            margin-left: 300px;
        }

        .footer-bottom {
            position: absolute;
            top: 136px;
            left: 50%;
            margin-left: -310px;
        }

        .footer-bottom li {
            float: left;
            margin-right: 25px;
            color: #fff;
            font-size: 14px;
            cursor: pointer;
        }

        footer span {
            display: block;
            position: absolute;
            color: #fff;
            font-size: 14px;
            top: 180px;
            left: 50%;
            margin-left: -300px;
        }

        /* content */
        .content{
            width:1200px;
            position: relative;
            left:50%;
            margin-left:-600px;
            margin-bottom:80px;
        }
        .content .list h5{
            color:#404040;
            font-size: 18px;
            font-weight: bold;
            margin-top:54px;
            margin-bottom:24px;
        }
        .content .list h5 span{
            color:#676767;
            font-size: 16px;
            float:right;
            font-weight: normal;
        }
        .content .list p{
            color:#989898;
            font-size: 16px;
            line-height:24px;
            margin:0;
        }
        .pagination{
            margin-top:60px;
        }
        .pagination li {
        list-style: none;
        float: left;
        margin-left: 12px;
        background-color: #fff;
        border: 1px solid #D9D9D9;
        height: 36px;
        width: 36px;
        line-height: 36px;
        cursor: pointer;
        color: #808080;
        text-align: center;
    }

    .pagination li a {
        width: 100%;
        height: 100%;
        color: #808080;
        padding: 0;
        line-height: inherit;
        border: none;
    }

    .pagination li a:hover {
        background-color: white;
    }

    .pagination li.active {
        color: #1CB64F;
        border:1px solid #3AC869;
    }
    .pagination li.active span{
        width:36px;
        height:36px;
        text-align: center;
        background-color: #fff;
        color:#1CB64F;
        border:1px solid #3AC869;
    }

    .pagination li.disabled {
        
    }


    /*m-如何找房*/
.find-house{
       width:100%;
       height:90px;
}
.find-house .fh-big-box{
       width:100%;
       height:80px;
       background:rgba(228,242,228,1);
}
.fh-big-box img{
    float:left;
    margin-left:4.8%;
    margin-right:5.6%;
}
.fh-big-box .fh-mid{
    float:left;
}
.fh-mid h1{
    font-size:15px;
    font-family:"Microsoft YaHei";
    font-weight:bold;
    color:rgba(28,182,79,1);
    margin-top:24px;
    margin-bottom:7px;
}
.fh-mid p{
    font-size:12px;
    font-family:"Microsoft YaHei";
    font-weight:300;
    color:rgba(28,182,79,1);
} 
.fh-big-box .bang{
     float: left;
background:linear-gradient(-90deg,rgba(40,194,91,1),rgba(94,215,85,1));
border-radius:3px;
     width:21.8%;
     height:30px;
    font-size:14px;
    font-family:"Microsoft YaHei";
    font-weight:bold;
    color:#fff;
    float:right;
    margin-top:25px;
    margin-right:4.8%;
    outline: none;
    border:none;
}
    </style>
</head>

<body>
    <nav class="top-nav visible-lg-block">
        <div class="box">
            <ul>
                <li><a href="<?php echo url('home/index/index'); ?>">家园首页</a></li>
                <li><a href="<?php echo url('home/search/index',['type'=>0]); ?>">楼盘查询</a></li>
                <li><a href="<?php echo url('home/search/tuan',['type'=>0]); ?>">团购优惠</a></li>
                <li><a href="<?php echo url('home/index/buy'); ?>">买房指南</a></li>
                <li><a href="<?php echo url('home/news/index'); ?>" class="active">楼盘资讯</a></li>
                <li><a href="<?php echo url('home/user/guan'); ?>">关于家园</a></li>
            </ul>
            <?php if(\think\Session::get('user')): ?>
            <img class="jk" src="/static/home/imgs/icon-5.png" alt="">
            <span class="user"><?php echo \think\Session::get('user.p'); ?></span>
            <span class="logout">退出</span>
            <?php else: ?>
            <img src="/static/home/imgs/icon-5.png" alt="">
            <span class="register">注册/登录</span>
            <?php endif; ?>
            <p>购房热线 &nbsp;400-718-6686</p>
        </div>


    </nav>
    <div class="search visible-lg-block">
        <div class="box">
            <div class="top">
                <img src="/static/home/imgs/logo2.png" alt="">
                <p><i><?php if(\think\Cookie::get('cityname')): ?> <?php echo \think\Cookie::get('cityname'); else: ?>杭州<?php endif; ?></i><img
                        src="/static/home/imgs/triangle.png" alt=""></p>
                <form id="bname" style="display: initial" action="<?php echo url('home/search/index',['type'=>0]); ?>"
                    method="post">
                    <input type="text" name="name" placeholder="请输入楼盘名称、地域">
                    <span id="find"><img src="/static/home/imgs/icon-8.png">我要找房</span>
                </form>
                <span id="map"><img src="/static/home/imgs/pcadd.png" alt="">地图找房</span>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="content visible-md-block visible-lg-block">
        <?php foreach($dongs as $v): ?>
        <div class="list">
            <h5><a href="<?php echo url('home/content/content',['id'=>$v['bid']]); ?>"><?php echo $v['name']; ?></a>最新房源动态<span><?php echo $v['create_time']; ?></span></h5>
            <p><?php echo $v['introduce']; ?></p>
        </div>
        <?php endforeach; ?>
        
        
            <?php echo $dongs->render(); ?>
    </div>

    <footer class="container-fluid visible-md-block visible-lg-block">
        <ul class="footer-top">
            <a href="<?php echo url('home/user/lian'); ?>">
                <li>联系我们</li>
            </a>
            <a href="<?php echo url('home/user/guan'); ?>">
                <li>关于家园</li>
            </a>
            <a href="<?php echo url('home/news/index'); ?>">
                <li>楼盘资讯</li>
            </a>
            <a href="<?php echo url('home/search/index',['type'=>0]); ?>">
                <li>楼盘查询</li>
            </a>
            <a href="<?php echo url('home/index/buy'); ?>">
                <li>买房指南</li>
            </a>
            <a href="<?php echo url('home/search/tuan',['type'=>0]); ?>">
                <li>团购优惠</li>
            </a>
        </ul>
        <div class="footer-line"></div>
        <p>购房热线 400-718-6686</p>
        <span>Copyright © 2017 - 2022 杭州亚汉网络科技有限公司版权所有 浙ICP备18057005号 </span>
    </footer>

 <!-- 手机端 -->
    <div class="container-fluid m">
        <div class="visible-xs-block .visible-sm-block m-top">
            <img class="m-go" src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>更多动态</h3>
        </div>
        <div class="m-dong visible-xs-block .visible-sm-block">
               <?php foreach($tops as $v): ?>
                <div class="m-tai">
                    <h4><a href=""><?php echo $v['name']; ?></a>最新房源动态</h4>
                    <p><?php echo $v['introduce']; ?></p>
                    <h6><?php echo $v['create_time']; ?></h6>
                </div>
              <?php endforeach; ?>
                <div class="find-house">
                        <div class="fh-big-box">
                            <img src="https://www.jy1980.com/static/home/imgs/car.png" alt="">
                            <div class="fh-mid">
                                <h1>如何找房</h1>
                                <p>专家教你如何选择房子</p>
                            </div>
                            <button class="bang" id='help'>帮我找房</button>
                        </div>
            
                </div>
            <?php foreach($ds as $v): ?>
            <div class="m-tai">
                <h4><a href="<?php echo url('home/content/index',['id'=>$v['bid']]); ?>"><?php echo $v['name']; ?></a>最新房源动态</h4>
                <p><?php echo $v['introduce']; ?></p>
                <h6><?php echo $v['create_time']; ?></h6>
            </div>
            <?php endforeach; ?>
        </div>

      

    </div>
</body>
<script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
    // 帮我找房
    $('#help').on('click',function(){
                window.location.href="<?php echo url('home/user/yue'); ?>"
            })
</script>
</html>