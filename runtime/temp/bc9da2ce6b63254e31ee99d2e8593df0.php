<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\php\PHPTutorial\WWW\tp\public/../application/both\view\news\index.html";i:1563948024;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, maximum-scale=1.0 , user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="家园新房属于新房房产网，信息网，主要是为每一位用户提供找房信息，为每一位客户提供一手房新房最新资讯，新房最新动态，公寓，商铺，写字楼最新动态，住宅新闻等相关资讯" />
	<meta name="keywords" content="家园新房 ,杭州房产网,杭州房产价格,新房信息网,杭州新房" />
        <title>一手房信息网-新房最新动态-新房信息网-新房房产-家园新房</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        <style>
             * {
                    padding: 0;
                    margin: 0;
		font-family:"Microsoft YaHei";
                }
                html,body{overflow-x:hidden;}
                a a:hover,
                a:visited,
                a:link,
                a:active {
                    text-decoration: none;
                    color: #fff;
                }
                li {
                    list-style-type: none;
                }
















                /* 头部 */
                .m{
                    padding:0;
                }
                .m-nav{
                    width:100%;
                    height:48px;
                    text-align: center;
                    border-bottom: 1px solid #F2F2F2;
		  background-color:#fff;
                }
                .m-nav img{
                    width: 5%;
                    float:left;
                    margin-top:3.3%;
                    margin-left: 5.33%;
                }
                .m-nav span{
                    color:#999999;
                    display: inline-block;
                    font-size: 14px;
                    height:48px;
                    line-height: 48px;
                    width:16%;
                }
                .m-nav .m-p-news{
                    margin-left:-6%;
                }
                .m-nav span.m-active{
                    color:#333333;
                    font-size: 16px;
                    font-weight: bold;
                    position: relative;
                }
                .m-nav span.m-active i{
                    height: 3px;
                    display: block;
                    width: 20%;
                    background-color: #1CB64F;
                    position: absolute;
                    top: 81%;
                    left: 40%;
                }




                /* 列表 */
                .m-list{
                    width:100%;
                    padding:0;
		  margin-top:60px;
                }
                .m-list .row{
                    height:105px;
                    border-bottom:0.5px solid #EBEBEB;
                }
                .m-list .row .m-title{
                    padding-top: 2%;
                    padding-left: 8%;
                }
                .m-list .row h5{
                    color: #404040;
    font-size: 15px;
    width: 90%;
    line-height: 20px;
    margin-bottom: 6%;
    height: 40px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
    text-overflow: ellipsis;                }
                .m-list .row span{
                    color: #979797;
                    font-size: 10px;
                    margin-right: 5%;
                }
                .m-list .row img{
                    width: 28%;
                    margin-top: 3.5%;
		height:72px;
                }
                #m-n{
                    display: none;
                }


		/* 土拍 预售*/
                .m-list .m-di{
                    padding:0 4% 0 4%;
                }
                .m-list .m-di h6{
                    color:#333333;
                    font-size: 16px;
                    margin-top:22px;
                    margin-bottom:18px;
                }
                .m-list .m-di ul li:nth-child(2n+1){
                    background-color: #CBF4C4;
                    height:40px;
                }
                .m-list .m-di ul li:nth-child(2n){
                    background-color: #F1FFEC;
                    height:40px;
                }
                .m-list .m-di ul li span.left{
                    float:left;
                    width:50%;
                    text-align: center;
                    color:#4D4D4D;
                    font-size: 14px;
                    line-height: 40px;
                }
                .m-list .m-di ul li span.right{
                    float:right;
                    width:50%;
                    text-align: center;
                    color:#808080;
                    font-size: 14px;
                    line-height: 40px;
                    overflow: hidden;/*超出部分隐藏*/
                    text-overflow:ellipsis;/* 超出部分显示省略号 */
                    white-space: nowrap;/*规定段落中的文本不进行换行 */
                }
                /* 土拍 预售*/
                /* 预售证 */
                #m-t{display:none;}
                .m-list .m-di{
                    padding:0 4% 0 4%;
                }
                .m-list .m-di h6{
                    color:#333333;
                    font-size: 16px;
                    margin-top:22px;
                    margin-bottom:18px;
                }
                .m-list .m-di ul li:nth-child(2n+1){
                    background-color: #CBF4C4;
                    height:40px;
                }
                .m-list .m-di ul li:nth-child(2n){
                    background-color: #F1FFEC;
                    height:40px;
                }
                .m-list .m-di ul li span.left{
                    float:left;
                    width:50%;
                    text-align: center;
                    color:#4D4D4D;
                    font-size: 14px;
                    line-height: 40px;
                }
                .m-list .m-di ul li span.right{
                    float:right;
                    width:50%;
                    text-align: center;
                    color:#808080;
                    font-size: 14px;
                    line-height: 40px;
                    overflow: hidden;/*超出部分隐藏*/
                    text-overflow:ellipsis;/* 超出部分显示省略号 */
                    white-space: nowrap;/*规定段落中的文本不进行换行 */
                }
                /* 预售证 */

                /* 摇号登记 */
                #m-y{display:none;}
                #m-h{display:none;}
                .m-list .m-al{
                    padding:4%;
                }
                .m-list .m-al h6{
                    color:#333333;
                    font-size: 18px;
                    margin-top:12px;
                    margin-bottom:22px;
                }
                .m-list .m-al ul li{
                    margin-bottom: 23px;
                }
                .m-list .m-al ul li span{
                    color:#808080;
                    font-size: 14px;
                }
                .m-list .m-al ul li span.a-area{
                    width:20%;
                    float:left;
                }
                .m-list .m-al ul li span.a-lou{
                    width:50%;
                    color:#4D4D4D;
                    font-weight: bold;
                    display: inline-block;
                }
                .m-list .m-al ul li span.a-time{
                    float:right;
                }
                .m-list .a-line{
                    height:10px;
                    width:100%;
                    background-color: #f7f7f7;
                }
                /* 摇号登记 */




	/* PC */
                /* 顶部导航 */
         .top-nav{
             height:80px;
             width:100%;
             background-color: #fff;
             position: relative;
         }
         .box{
             width:1200px;
             position: absolute;
             left:50%;
             margin-left:-600px;
         }
         .top-nav ul{
             margin:0;
         }
         .top-nav ul li{
             float: left;
             margin-right:40px;
         }
         .top-nav ul li a{
             color:#999999;
             font-size: 18px;
             line-height: 80px;
         }
         .top-nav ul li a.active{
             color:#1CB64F;
             border-bottom: 2px solid #1CB64F;
             padding-bottom: 10px;
         }
         .top-nav p{
             float: right;
             color:#1CB64F;
             font-size: 24px;
             line-height: 80px;
             font-weight: bold;
         }
         .top-nav span{
             color:#9A9A9A;
             font-size: 18px;
             line-height: 80px;
             margin-right:19px;
             cursor: pointer;
         }
         .top-nav img{
             width:17px;
             margin-left:90px;
             margin-right: 11px;
             line-height: 80px;
         }
         .top-nav .register{
             margin-right:7px;
         }
	.top-nav img.jk{
             margin-left:33px;
         }
         .top-nav .user{
             color:#2DD264;
         }


         /* 搜索栏 */
         .search{
             width:100%;
             height:120px;
             background-color: #F5F7F6;
         }
         .search .top{
             position: relative;
             padding-top:30px;
             margin-bottom:30px;
         }
         .search .top img{
             width:100px;
             margin-right:26px;
             display: inline-block;
         }
         .search .top p{
             padding-left:5px;
             display: inline-block;
             border-left:1px solid #999999;
         }
         .search .top p i{
             color:#323232;
             font-size: 18px;
             font-style: normal;
         }
         .search .top p img{
             width:14px;
             margin-left:10px;
         }
         .search .top input{
             width:622px;
             height:60px;
             border:1px solid #2FBF4A;
             padding-left: 44px;
         }
         .search .top input::-webkit-input-placeholder {
            color: #989898;
            font-size: 16px;
         }
         .search .top span{
             display: block;
             position: absolute;
             width:160px;
             height:60px;
             font-size: 16px;
             top:19px;
             line-height: 60px;
             text-align: center;
         }
         .search .top #find{
             cursor: pointer;
             background-color: #1CB64F;
             color:#FFFFFF;
             top:30px;
             right:193px;
         }
         .search .top #find img{
             width:22px;
             margin-right:10px;
         }
         .search .top #map{
             cursor: pointer;
             border:1px solid #1CB64F;
             color:#1CB64F;
             top:30px;
             right:0;
         }
         .search .top #map img{
             width:22px;
             margin-right:10px;
         }

         /* content */
         .content{
             width:100%;
             height:2318px;
             padding-top:38px;
         }
         .content .left{
             padding:0;
         }
         .content .left h5{
             color:#333333;
             font-size: 24px;
             margin-bottom:38px;
             margin-top:0;
         }
         .content .left .row{
             border-bottom: 1px solid #EBEBEB;
             margin-bottom: 39px;
         }
         .content .left .row img{
             width:220px;
             height:165px;
             border-radius: 4px;
         }
         .content .left .row h6{
             color:#404040;
             font-size: 24px;
             margin-top:0;
             margin-bottom:16px;
             line-height: 38px;
             font-weight: bold;
         }
         .content .left .row .xiang p{
            color:#666666;
            font-size: 16px;
            line-height: 28px;
            height:83.33px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            overflow: hidden;
         }
         .content .left .row .type{
             float:right;
             color:#979797;
             font-size: 16px;
             margin-bottom: 21px;
             padding-right:32px;
         }
         .content .left .row .type  span{
             margin-left:8px;
         }


         .content .page{
            float: left;
            display: inline-block;
         }
         .content .page li{
            float: left;
            width:36px;
            height:36px;
            text-align: center;
            line-height: 36px;
            border:1px solid #D9D9D9;
            color:#808080;
            font-size: 16px;
            margin-right:10px;
            cursor: pointer;
         }
         .content .page li.active{
             color:#3AC869;
             border:1px solid #3AC869;
         }
         .content .pages span{
            font-size: 16px;
            display: inline-block;
            cursor: pointer;
            color: #808080;
            width: 36px;
            float: left;
            height: 36px;
            border: 1px solid #D9D9D9;
            text-align: center;
            line-height: 36px;
         }
         .content #back{
             margin-right: 11px;
         }

         .content .right{
             padding-left:47px;
         }
         .content .right h6{
             color:#333333;
             font-size: 24px;
             font-weight: 500;
             margin-bottom: 38px;
         }
         .content .right ul li{
             
             margin-bottom: 23px;
         }
         .content .right ul li a{
             color: #666666;
             font-size: 18px;
             width:302px;
             display: inline-block;
             height:51.11px;
             overflow: hidden;
         }
         .content .right ul li span{
             display: inline-block;
             width:20px;
             height:20px;
             background-color: #989898;
             text-align: center;
             line-height: 20px;
             color:#fff;
             font-size: 16px;
             margin-right:12px;
             top: -34px;
            position: relative;
         }
         .content .right ul li span.new{
             background-color: #1CB64F;
         }

         /* footer */
         footer{
         width:100%;
         height:260px;
         background-color: #1B1B1B;
         position: relative;
         }
         .footer-top{
         position: absolute;
         top:38px;
         left:50%;
         margin-left:-600px;
         }
         .footer-top li{
         color:#FFFFFF;
         float:left;
         font-size: 14px;
         margin-right:18px;
         cursor: pointer;
         }
         .footer-line{
         width:1200px;
         height:1px;
         background-color: #333333;
         position: absolute;
         top:100px;
         left:50%;
         margin-left:-600px;
         }
         footer p{
         color:#FFFFFF;
         font-size: 24px;
         position: absolute;
         top:29px;
         left:50%;
         margin-left:300px;
         }
         .footer-bottom{
         position: absolute;
         top:136px;
         left:50%;
         margin-left:-310px;
         }
         .footer-bottom li{
         float: left;
         margin-right: 25px;
         color:#fff;
         font-size: 14px;
         cursor: pointer;
         }
         footer span{
         display: block;
         position: absolute;
         color: #fff;
         font-size: 14px;
         top:180px;
         left:50%;
         margin-left:-300px;
         }







	/* 弹框 */
    .tan .zhao{
            display: none;
            width:100%;
            background-color: #000000;
            opacity: 0.4;
            position: fixed;
            top:0;
            z-index: 20000;
         }
         .tan .ts{
            display:none;
            width:500px;
            height:380px;
            border-radius: 20px;
            position: fixed;
            top:150px;
            left:50%;
            margin-left:-250px;
            z-index: 20001;
         }
         .tan .ts .t-top{
             height: 140px;
             background-color: #2DD264;
             text-align: center;
             position: relative;
             border-radius:20px 20px 0px 0px;
         }
         .tan .ts .t-top h6{
             color:#FFFFFF;
             font-size: 20px;
             font-weight: bold;
             position: relative;
             top:28px;
         }
         .tan .ts .t-top p{
             color:#FFFFFF;
             font-size: 18px;
             position: relative;
             top:58px;
         }
         .tan .ts .t-top img{
             width:16px;
             height:16px;
             position: absolute;
             top:28px;
             right:32px;
         }
         .tan .ts .t-bottom{
             height:240px;
             background-color: #fff;
             padding-top:30px;
             position: relative;
             border-radius:0px 0px 20px 20px;
         }
         .tan .ts .t-bottom input{
             width:350px;
             border:0px;
             border-bottom:1px solid #F2F2F2;
             display: block;
             margin-left:75px;
             padding-bottom: 22px;
             margin-bottom: 12px;
             color:#4D4D4D;
             font-size: 24px;
         }
         .tan .ts .t-bottom input::-webkit-input-placeholder { /* WebKit browsers */
            color: #999;
            font-size:18px;
        }

        .tan .ts .t-bottom input::-moz-placeholder { /* Mozilla Firefox 19+ */
            color: #999;
            font-size:18px;
        }

        .tan .ts .t-bottom input:-ms-input-placeholder { /* Internet Explorer 10+ */
            color: #999;
            font-size:18px;
        }   

        .tan .ts .t-bottom span{
            border:1px solid #2DD264;
            color:#2DD264;
            font-size: 16px;
            text-align: center;
            line-height: 22px;
            padding:3px;
            position: absolute;
            top:107px;
            right:77px;
            width:100px;
            border-radius: 5px;
            cursor: pointer;
        }
        .tan .ts .t-bottom button{
            width:300px;
            height:44px;
            margin-left:100px;
            background-color:#F0F5F2;
            font-size: 16px;
            color:#3AC869;
            text-align: center;
            line-height: 44px;
            border:0px;
            border-radius: 6px;
        }
        </style>
</head>
<body>
    <!-- PC -->
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
                <p>购房热线  &nbsp;0571-82576775</p>
            </div>
            
            
        </nav>
        <div class="search visible-lg-block">
            <div class="box">
                <div class="top">
                    <img src="/static/home/imgs/logo2.png" alt="">
                    <p><i><?php if(\think\Cookie::get('cityname')): ?> <?php echo \think\Cookie::get('cityname'); else: ?>杭州<?php endif; ?></i><img src="/static/home/imgs/triangle.png" alt=""></p>
                    <form id="bname" style="display: initial" action="<?php echo url('home/search/index',['type'=>0]); ?>" method="post">
                    <input type="text" name="name" placeholder="请输入楼盘名称、地域">
                    <span id="find"><img src="/static/home/imgs/icon-8.png">我要找房</span>
                    </form>
                    <span id="map"><img src="/static/home/imgs/pcadd.png" alt="">地图找房</span>
                </div>
            </div>
        </div>
    <div class="content visible-lg-block">
        <div class="box">
            <div class="left col-lg-8">
                <h5>项目资讯</h5>
                 <div id="cox">
                     <?php foreach($ps as $v): ?>
                     <div class="row">
                         <a href="<?php echo url('home/news/pro',['id'=>$v['id']]); ?>">
                         <div class="col-lg-4">
                             <img src="<?php echo $v['img']; ?>" alt="">
                         </div>
                         <div class="col-lg-8 xiang">
                             <h6><?php echo $v['title']; ?></h6>
                             <p><?php echo $v['content']; ?>
                                </p>
                            
                         </div>
                         <p class="type">
                             <span>项目资讯</span>
                             <span><?php echo $v['create_time']; ?></span>
                         </p>
                        </a>
                     </div>
                     <?php endforeach; ?>
                     
                 </div>
                 <div class="pages">
                        <span id="back"><<</span>
                        <ul class="page">
                            <?php $__FOR_START_412988587__=0;$__FOR_END_412988587__=$page;for($i=$__FOR_START_412988587__;$i < $__FOR_END_412988587__;$i+=1){ if($i<7): ?>
                            <li <?php if($i==0): ?> class="active" <?php endif; ?> data-v="<?php echo $i; ?>"><?php echo $i+1; ?></li>
                            <?php endif; } ?>
                        </ul>
                        <span id="go">>></span>
                    </div>
            </div>
            <div class="col-lg-4 right">
                <h6>新闻资讯</h6>
                <ul>
                    <?php foreach($ns as $k=>$v): ?>
                    <li><span <?php if(($k+1)<4): ?>class="new"<?php endif; ?>><?php echo $k+1; ?></span><a href="<?php echo url('home/news/article',['id'=>$v['id']]); ?>"><?php echo $v['title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="tan visible-md-block visible-lg-block">
        <div class="zhao"></div>
        <div class="login ts">
            <div class="t-top">
                <h6>登录/注册</h6>
                <p>若是没有注册过，首次将自动注册登录</p>
                <img id="l-esc" src="/static/home/imgs/m-esc.png" alt="">
            </div>
            <div class="t-bottom">
                <input class="l-p" type="text" placeholder="请输入手机号">
                <input class="l-c" type="text" placeholder="请输入验证码">
                <span class="m-get">获取验证码</span>
                <button class="m-btn">确定</button>
            </div>
        </div>
    </div>
    <footer class="container-fluid visible-md-block visible-lg-block">
            <ul class="footer-top">                                  
                <a href="<?php echo url('home/user/lian'); ?>"><li>联系我们</li></a>
                <a href="<?php echo url('home/user/guan'); ?>"><li>关于家园</li></a>
                <a href="<?php echo url('home/news/index'); ?>"><li>楼盘资讯</li></a>
                <a href="<?php echo url('home/search/index',['type'=>0]); ?>"><li>楼盘查询</li></a>
                <a href="<?php echo url('home/index/buy'); ?>"><li>买房指南</li></a>
                <a href="<?php echo url('home/search/tuan',['type'=>0]); ?>"><li>团购优惠</li></a>
            </ul>
            <div class="footer-line"></div>
            <p>购房热线   0571-82576775</p>
            
            <span>Copyright © 2017 - 2022 杭州亚汉网络有限公司有限公司版权所有 浙ICP备18057005号 </span>
    </footer>
    <!-- PC -->


    <!-- 移动 -->
    <div class="container-fluid m">
        <div class="m-nav visible-xs-block .visible-sm-block navbar navbar-default navbar-fixed-top">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <span class="m-p-news m-active">项目<i></i></span>
            <span class="m-n-news">新闻<i></i></span>
            <span class="m-t-news">土拍<i></i></span>
            <span class="m-y-news">预售证<i></i></span>
            <span class="m-h-news">摇号<i></i></span>
        </div>
        <div class="m-list visible-xs-block .visible-sm-block">
            <div id="m-p">
                    <?php foreach($ps as $v): ?>
                    <a href="/home/news/pro/id/<?php echo $v['id']; ?>">
                    <div class="row m-l">
                        <div class="col-xs-8 m-title">
                            <h5><?php echo $v['title']; ?></h5>
                            <div>
                                <span>项目资讯</span>
                                <span><?php echo $v['create_time']; ?></span>
                            </div>
                        </div>
                        <img class="col-xs-4" src="<?php echo $v['img']; ?>" alt="">
                    </div>
                    </a>
                    <?php endforeach; ?>
                    
                      
            </div>
            <div id="m-n"></div>
           <div id="m-t">
                <?php foreach($tuis as $v): ?>
                <div class="m-di">
                        <h6><?php echo $v['name']; ?></h6>
                        <ul>
                            <li>
                                <span class="left">地块编号</span>
                                <span class="right"><?php echo $v['code']; ?></span>
                             </li>
                             <li>
                                 <span class="left">出让面积(m²)</span>
                                 <span class="right"><?php echo $v['area']; ?></span>
                             </li>
                             <li>
                                 <span class="left">用途</span>
                                 <span class="right"><?php echo $v['for']; ?></span>
                             </li>
                             <li>
                                 <span class="left">容积率</span>
                                 <span class="right"><?php echo $v['rong']; ?></span>
                             </li>
                             <li>
                                 <span class="left">建筑面积(m²)</span>  
                                 <span class="right"><?php echo $v['jianmian']; ?></span>
                             </li>
                             <li>
                                 <span class="left">楼面起价(元²)</span>
                                 <span class="right"><?php echo $v['loumian']; ?></span>
                             </li>
                             <li>
                                 <span class="left">成交价(万元)</span>
                                 <span class="right"><?php echo $v['chengjiao']; ?></span>
                             </li>
                             <li>
                                 <span class="left">楼面价(元/²)</span>
                                 <span class="right"><?php echo $v['loujia']; ?></span>
                             </li>
                             <li>
                                 <span class="left">溢价率</span>
                                 <span class="right"><?php echo $v['yijia']; ?></span>
                             </li>
                             <li>
                                 <span class="left">竞得单位 </span>
                                 <span class="right"><?php echo $v['unit']; ?></span>
                             </li>
                        </ul>
                    </div>
                <?php endforeach; ?>
               
           </div>
           <div id="m-y">
               <?php foreach($yus as $v): ?>
                <div class="m-di">
                        <h6><?php echo $v['name']; ?></h6>
                        <ul>
                            <li>
                                <span class="left">预售证号</span>
                                <span class="right"><?php echo $v['code']; ?></span>
                             </li>
                             <li>
                                 <span class="left">核发日期</span>
                                 <span class="right"><?php echo $v['time']; ?></span>
                             </li>
                             <li>
                                 <span class="left">幢号</span>
                                 <span class="right"><?php echo $v['zhuanghao']; ?></span>
                             </li>
                             <li>
                                 <span class="left">可售套数</span>
                                 <span class="right"><?php echo $v['taoshu']; ?></span>
                             </li>
                             <li>
                                 <span class="left">户型面积</span>  
                                 <span class="right"><?php echo $v['humianji']; ?></span>
                             </li>
                             <li>
                                 <span class="left">类型</span>
                                 <span class="right"><?php echo $v['type']; ?></span>
                             </li>
                             <li>
                                 <span class="left">均价</span>
                                 <span class="right"><?php echo $v['junjia']; ?></span>
                             </li>
                             <li>
                                 <span class="left">楼盘地址</span>
                                 <span class="right"><?php echo $v['address']; ?></span>
                             </li>
                        </ul>
                    </div>
                    <?php endforeach; ?>
           </div>
           <div id="m-h">
               <div class="m-al">
                    <h6>今日可登记楼盘</h6>
                    <ul>
                            <?php foreach($dengs as $v): ?>
                        <li>
                            <span class="a-area"><?php echo $v['area']; ?>：</span>
                            <span class="a-lou"><?php echo $v['loupan']; ?></span>
                            <span class="a-time"><?php echo $v['time']; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
               </div>
               <div class="a-line"></div>
               <div class="m-al">
                    <h6>今日可摇号楼盘</h6>
                    <ul>
                        <?php foreach($haos as $v): ?>
                        <li>
                            <span class="a-area"><?php echo $v['area']; ?>：</span>
                            <span class="a-lou"><?php echo $v['loupan']; ?></span>
                            <span class="a-time"><?php echo $v['time']; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
               </div>
           </div>           
        </div>
    </div>


    <script>
	$(document).ready(function(){
	$('.user').on('click',function(){
                    window.location.href="<?php echo url('home/user/zu'); ?>";
                })
	$('#l-esc').on('click',function(){
                $('.login').hide();
                $('.zhao').hide();
                })
            $('.zhao').on('click',function(){
                $(this).hide();
                $('.login').hide();
            })
            $('.register').on('click',function(){
                $('.zhao').show();
                $('.login').show(150);
            })
            $('.m-get').on('click',function(){
                var phone=$(this).prev().prev().val();
                var pattern_phone = /^1[3-9][0-9]{9}$/;
				if (phone == '') {
					$('.l-p').attr('placeholder','手机号不能为空');
					return;
				} else if (!pattern_phone.test(phone)) {
                    $('.l-p').val('');
					$('.l-p').attr('placeholder','手机号码不合法');
					return;
				} 

                var time=60;
                var fn = function () {
					time--;
					if (time > 0) {
						$('.m-get').html('重新发送' + time + 's');
                        $('.m-get').attr('disabled', true);
					} else {
						clearInterval(interval);
						$('.m-get').html('获取验证码');
						$('.m-get').attr('disabled', false);
					}
				};
				fn();
				var interval = setInterval(fn, 1000);
                var data={'phone':phone};
                $.post(
                    "<?php echo url('home/user/login'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            
                        }else{
                            alert(res.msg);
                        }
                    },
                    'json'
                )
            })
            $('.m-btn').on('click',function(){
                var phone=$(this).prev().prev().prev().val();
                var code=$(this).prev().prev().val();
                var data={'phone':phone,'code':code};
                $.post(
                    "<?php echo url('home/user/log'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            window.location.href="<?php echo url('home/index/index'); ?>";
                        }else{
                            alert(res.msg);
                        }
                    }
                )
            })
            $('.logout').on('click',function(){
                window.location.href="<?php echo url('home/user/logout'); ?>";
            })
            var h=$(document).height();
            $('.zhao').css('height',h);





            function pa(str){
                $.post(
                    "/home/news/project",
                    {suggest:str},
                    function(data){
                        var html='';
                        if(data.length>0){
                            $.each(data,function(i,v){
                                html+=`
                                <div class="row">
                         <a href="/home/news/pro/id/${v.id}">
                         <div class="col-lg-4">
                             <img src="${v.img}" alt="">
                         </div>
                         <div class="col-lg-8 xiang">
                             <h6>${v.title}</h6>
                             <p>${v.content}
                                </p>
                            
                         </div>
                         <p class="type">
                             <span>项目资讯</span>
                             <span>${v.create_time}</span>
                         </p>
                        </a>
                     </div>
                                `;
                            });
                            $('#cox').html(html);
                        }else{
                            $('#cox').html(html);
                        }
                    },
                    'json'
                );
            }
            $('#find').on('click',function(){
                $('#bname').submit();
            })
            $('#map').on('click',function(){
                window.location.href="<?php echo url('home/index/pmap'); ?>";
            })
            $('#back').on('click',function(){
                var num=$('.page li.active').attr('data-v');
                console.log(num);
                if(num==0){
                    return;
                }
                pa(num-1,0);
                $('.page li.active').prev().addClass('active').siblings('li').removeClass('active');
            })
            $('#go').on('click',function(){
                var num=$('.page li.active').attr('data-v');
                var end=$(this).prev().children('li').last().html();
                console.log(num);
                if(num==(end-1)){
                    return;
                }
                pa(Number(num)+1,0);
                $('.page li.active').next().addClass('active').siblings('li').removeClass('active');
            })
            $('.page').on('click','li',function(){
                var bb=<?php echo $page; ?>;
                var end=$(this).parent().children('li').last().html();
                var start=$(this).parent().children('li:first').html();
                console.log(start);
                var num=$(this).attr('data-v');
                $(this).addClass('active').siblings('li').removeClass('active');
                var that=$(this);
                pa(num,0)
                if((Number(num)+1)==end){
                    var s=end-3;
                    var b=Number(end)+3;
                    b=b>bb?bb:b;
                    s=s>1?s:1;
                    var html='';
                    for(var i=s;i<=b;i++){
                        if(i==end){
                            html+=`<li data-v="${i-1}" class="active">${i}</li>`;
                        }else{
                            html+=`<li data-v="${i-1}">${i}</li>`;
                        }
                    }
                    $('.page').html(html);
                }
                if((Number(num)+1)==start){
                    if(start==1){
                        return
                    }else{
                        var s=start-3;
                        var b=Number(start)+3;
                        var html="";
                        for(var i=s;i<=b;i++){
                            if(i==start){
                                html+=`<li data-v="${i-1}" class="active">${i}</li>`;
                            }else{
                                html+=`<li data-v="${i-1}">${i}</li>`;
                            }
                        }
                        $('.page').html(html);
                    }
                }
            })
        })




        $(document).ready(function(){
            $('.m-nav span').on('click',function(){
                $(this).siblings('span').removeClass('m-active');
                $(this).addClass('m-active');
            })
             $('.m-p-news').on('click',function(){
                $('#m-p').show();
                $('#m-n').hide();
                $('#m-t').hide();
                $('#m-y').hide();
                $('#m-h').hide();
            })            
            $('.m').on('scroll',function(){
                var h=$(this).height();
                console.log(h);
            })
            function send(path,str,name,type,to){
                $.post(
                    "/home/news/"+path,
                    {suggest:str},
                    function(data){
                        var html=$(name).html();
                        if(data.length>0){
                            $.each(data,function(i,v){
                                html+=`
                                <a href="/home/news/${to}/id/${v.id}">
                                <div class="row m-l">
                        <div class="col-xs-8 m-title">
                            <h5>${v.title}</h5>
                            <div>
                                <span>${type}</span>
                                <span>${v.create_time}</span>
                            </div>
                        </div>
                        <img class="col-xs-4" src="${v.img}" alt="">
                    </div>
                    </a>
                                `;
                            });
                            $(name).html(html);
                        }else{
                            $(name).html(html);
                        }
                    },
                    'json'
                );
            }
            function pull(path,str,name,type,to){
                var html=$(name).html();
               
                if(html.length==0){
                    $.post(
                    "/home/news/"+path,
                    {suggest:str},
                    function(data){
                        var html=$(name).html();
                        if(data.length>0){
                            $.each(data,function(i,v){
                                html+=`
                                <a href="/home/news/${to}/id/${v.id}">
                                <div class="row m-l">
                        <div class="col-xs-8 m-title">
                            <h5>${v.title}</h5>
                            <div>
                                <span>${type}</span>
                                <span>${v.create_time}</span>
                            </div>
                        </div>
                        <img class="col-xs-4" src="${v.img}" alt="">
                    </div>
                    </a>
                                `;
                            });
                            $(name).html(html);
                        }else{
                            $(name).html(html);
                        }
                    },
                    'json'
                );
                }else{
                    return;
                }
                
            }
            $('.m-n-news').on('click',function(){
                $('#m-p').hide();
                $('#m-n').show();
                $('#m-t').hide();
                $('#m-y').hide();
                $('#m-h').hide();
                pull('xin',0,'#m-n','楼盘资讯','article');
            })
	   $('.m-t-news').on('click',function(){
                $('#m-p').hide();
                $('#m-n').hide();
                $('#m-t').show();
                $('#m-y').hide();
                $('#m-h').hide();
            })
            $('.m-y-news').on('click',function(){
                $('#m-p').hide();
                $('#m-n').hide();
                $('#m-t').hide();
                $('#m-y').show();
                $('#m-h').hide();
            })
            $('.m-h-news').on('click',function(){
                $('#m-p').hide();
                $('#m-n').hide();
                $('#m-t').hide();
                $('#m-y').hide();
                $('#m-h').show();
            })
            var p=1;
            var n=1;
            $(window).scroll(function(){
                var scrollTop = $(this).scrollTop();               
                var scrollHeight = $(document).height();                   
                var windowHeight = $(this).height();                   
                if(scrollTop + windowHeight >= scrollHeight){       
                    if($('#m-p').css('display')=='block'){
                        send('project',p,'#m-p','项目资讯','pro');
                        p=p+1;
                    }else if($('#m-n').css('display')=='block'){
                        send('xin',n,'#m-n','楼盘资讯','article');
                        n=n+1;
                    }
                    
                }            });
        })
    </script>
</body>
</html>