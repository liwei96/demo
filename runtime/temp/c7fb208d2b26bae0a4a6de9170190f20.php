<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"G:\jiayuan\tp2\public/../application/home\view\index\buy.html";i:1573972005;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>楼盘资讯</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <link rel="stylesheet" href="/static/home/css/i-buy.css">
        <link rel="stylesheet" href="/static/home/css/comm.css">
        <link rel="stylesheet" href="/static/home/css/buy.css">
        <link rel="stylesheet" href="//at.alicdn.com/t/font_1416845_pj9yhloc7em.css">
        <link rel="stylesheet" href="//at.alicdn.com/t/font_1329849_7za7eo8yzvj.css">
    <style>
	
.m-w-list{
            width:100%;
        }
        .swiper-slide a{
            padding:0;
            width:74px;
            height:24px;
            text-align: center;
            line-height: 24px;
        }
        .m-chang {
            display: none;
    position: fixed;
    top: 0;
    width: 100%;
    height: 1000px;
    background-color: rgba(0, 0, 0, 0.4);
    z-index: 1000;
}

.m-c-content {
    width: 74.6666667%;
    height: 286px;
    display: none;
    background-color: #fff;
    border-radius: 12px;
    position: fixed;
    top: 0;
    margin-top: 190px;
    left: 50%;
    margin-left: -37.333333%;
    text-align: center;
    padding: 0 5%;
    z-index: 1001;
}

.m-c-content h5 {
    color: #3AC869;
    font-size: 18px;
    margin: 0;
    margin-top: 25px;
    font-weight: bold;
    margin-bottom: 25px;
}

.m-c-content img {
    position: absolute;
    width: 8.6%;
    top: 3.1%;
    right: 3.5%;
}

.m-c-content p {
    color: #999999;
    font-size: 16px;
    text-align: initial;
}

.m-c-content input {
    width: 100%;
    height: 44px;
    border: 0px;
    border-bottom: 0.5px solid #F2F2F2;
    margin-bottom: 10px;
    color: #4D4D4D;
    font-size: 18px;
}

.m-c-content input::-webkit-input-placeholder {
    font-size: 15px;
    color: #999999;
}

.m-c-content button {
    display: block;
    width: 240px;
    height: 40px;
    background-color: #F0F5F2;
    border-radius: 4px;
    color: #3AC869;
    font-size: 16px;
    text-align: center;
    line-height: 40px;
    margin-top: 10px;
    border: 0px;
}

.m-c-content span {
    display: block;
    text-align: center;
    line-height: 26px;
    border: 0.5px solid #3AC869;
    color: #3AC869;
    font-size: 12px;
    width: 29%;
    height: 26px;
    background-color: #fff;
    border-radius: 4px;
    position: absolute;
    top: 41%;
    right: 7%;
}
.m-o-succ {
    display: none;
    position: fixed;
    top: 190px;
    left: 50%;
    margin-left: -37.33333%;
    width: 74.666667%;
    background-color: #fff;
    z-index: 10001;
    padding: 0 5%;
    border-radius: 12px;
    height: 325px;
    text-align: center;
}

.m-o-succ .o-esc {
    position: absolute;
    width: 8.6%;
    top: 3.1%;
    right: 3.5%;
}

.m-o-succ .o-success {
    width: 41%;
    margin-top: 45px;
    margin-bottom: 33px;
}

.m-o-succ p {
    color: #666666;
    font-size: 16px;
    line-height: 23px;
    font-weight: 500;
    margin-bottom: 32px;
}

.m-o-succ button {
    width: 100%;
    height: 40px;
    background-color: #3AC869;
    color: #fff;
    font-size: 16px;
    text-align: center;
    line-height: 40px;
    border: 0px;
    border-radius: 4px;
}

/* pc */
    .p{
        padding:0;
    }
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
             font-size: 16px;
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
             font-size: 20px;
             line-height: 80px;
             font-weight: bold;
         }
         .top-nav span{
             color:#9A9A9A;
             font-size: 16px;
             line-height: 80px;
             margin-right:19px;
         }
         .top-nav img{
             width:17px;
             margin-left:190px;
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
             padding-top: 30px;
             margin-bottom:26px;
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
             background-color: #1CB64F;
             color:#FFFFFF;
             right:193px;
             top:30px;
	         cursor:pointer;
         }
         .search .top #find img{
             width:22px;
             margin-right:10px;
         }
         .questions .bottom{
             text-align: center;
             height:248px;
             width:200px;
            float:left;
         }
         .questions .bottom span{
            background:rgba(236,236,236,1); 
             border-bottom:2px solid #fff;
             width:200px;
            height:48px;
            border-radius:2px;
             cursor:pointer;
             display:inline-block;
             font-size:16px;
            font-family:"PingFang SC";
            font-weight:500;
            color:rgba(51,51,51,1);
            line-height:48px;
         }
         .questions .bottom span.active{
             color:#fff;
             background:#3AC869;
             font-weight:bold;
         }
         .questions .bottom span.active i{
             width:24px;
             height:2px;
             background-color: #2FBF4A;
             display: block;
             position: absolute;
             bottom:-9px;
             left:12px;
             cursor:pointer;
             
         }
         .questions .bottom span:hover{
             color:#fff;
             background:#3AC869;
             font-weight:bold;
         }
         .questions .bottom span:hover i{
             width:24px;
             height:2px;
             background-color: #2FBF4A;
             display: block;
             position: absolute;
             bottom:-9px;
             left:12px;
             cursor:pointer;
             
         }


         /* question */
         .questions{
             padding-top:58px;
             height:1282px;
             width:1200px;
             margin:0 auto;
         }
         .questions .row{
             border-bottom: 1px solid #ededed;
             margin-bottom: 28px;
         }
         .questions .row h6{
             color:#4D4D4D;
             font-size: 20px;
             margin-bottom: 28px;
         }
         .questions .row h6 img{
             width:21px;
             margin-right: 11px;
         }
         .questions .row p{
             color:#808080;
             font-size: 16px;
             margin-bottom: 28px;
	    text-indent: 28px;
         }
         .questions .peo{
             text-align: center;
             margin-bottom: 48px;
         }
         .questions .peo img{
             width:80px;
             border-radius: 40px;
             margin-bottom:20px;
         }
         .questions .peo h6{
            color:#333333;
            font-size: 20px;
            margin-bottom: 12px;
         }
         .questions .peo p{
             color:#666666;
             font-size: 16px;
             margin-bottom: 8px;
         }
         .questions .peo p span{
             color:#FF5E5E;
         }
         .questions .peo button{
             width:100px;
             height:32px;
             border:1px solid #3AC869;
             color:#3AC869;
             text-align: center;
             line-height: 32px;
             font-size: 16px;
             background-color: #fff;
             border-radius: 4px;
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
	.d{
            display: none;
        }
        .t{
            display: none;
        }



	.tan .succ{
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
        .tan .succ .t-top{
            height: 140px;
             background-color: #2DD264;
             text-align: center;
             position: relative;
             border-radius:20px 20px 0px 0px;
        }
        .tan .succ .t-top #s_esc{
             width:16px;
             height:16px;
             position: absolute;
             top:28px;
             right:32px;
        }
        .tan .succ .t-top .gou{
            width:140px;
            position: absolute;
            top:71px;
            left:50%;
            margin-left:-70px;
            z-index: 1;
        }
        .tan .succ .t-bottom{
            height:240px;
             background-color: #fff;
             padding-top:30px;
             position: relative;
             border-radius:0px 0px 20px 20px;
        }
        .tan .succ .t-bottom p{
            color:#666666;
            font-size: 18px;
            line-height: 24px;
            margin-top:80px;
            margin-bottom:24px;
            text-align: center;
            width:250px;
            margin-left:125px;
        }
        .tan .succ .t-bottom button{
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
/*选项卡**/
* {
	margin: 0;
	padding: 0;
}
ul {
	list-style: none;
}
body {
	font-size: 12px;
	background:#fff;
}
.tou{
	box-shadow:0px 1px 20px 0px rgba(38,36,37,0.08);
}

#boxXuan {
	width:100%;
    height:auto;
  
}
.boxlist{
     border-bottom:rgba(242,242,242,1) 1px solid;
     width:100%;
     height:48px;
}
#boxXuan .back{
    width:18px;
    height:16px;
    float:left;
    margin-top:20px;
    margin-left:5.3%;
}
#menu {
    margin-left:16%;
    width:84%;
    height:48px;
  
}
#menu li {
    margin-left:4.7%;
    margin-right:4.7%;
	line-height: 48px;
	text-align: center;
	cursor: pointer;
	font-size:14px;
	font-family:'PingFang SC';
	font-weight:500;
    color:rgba(153,153,153,1);
    float:left;
}
#menu .active {
	font-size:14px;
	font-family:'PingFang SC';
	font-weight:bold;
	color:#1CB64F;
	border-bottom:2px solid #1CB64F;
}
#panel .panel {
	display: none;
}
.panel  .m-jinghua li{
       width:92%;
       height:auto;
       margin-left:4%;
       border-bottom:1px solid rgba(243,243,243,1);
}
.m-jinghua li  .m-biao{
      width:100%;
      height:17px;
      display:flex;
      margin-top:20px;
      margin-bottom:15px;
}
.m-jinghua li  .m-biao img{
       
       height:17px;
       width:12.7%;
       display: block;
}
.m-jinghua li  .m-biao span{
      color:#333333;
       font-size:16px;
       line-height: 16px;
       width:87.3%;
    margin-left:3%;
}
.m-jinghua li p{
    width:100%;
    height:auto;
    font-size:14px;
    font-family:"PingFang SC";
    font-weight:500;
    color:rgba(128,128,128,1);
    line-height:24px;
       margin-bottom:15px;
}

#panel .active {
	display:block;
}
/*m-如何找房*/
.find-house{
       width:100%;
       height:90px;
       margin-top:20px;
}
.find-house .fh-big-box{
       width:92%;
       height:80px;
       margin-left:4%;
       background:rgba(228,242,228,1);
       border-radius:6px;
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
.fh-big-box button{
     float: left;
     width:21.8%;
     height:30px;
    background:linear-gradient(-90deg,rgba(40,194,91,1),rgba(94,215,85,1));
    border-radius:3px;
    font-size:14px;
    font-family:"Microsoft YaHei";
    color:#fff;
    float:right;
    margin-top:25px;
    margin-right:4.8%;
    outline: none;
    border:none;
}
/* list */
.panel .m-l {
    width: 92%;
    margin-left:4%;
    /* padding: 0 3% 1% 3%; */
    border-bottom: 2px solid #F3F3F3;
}

.panel .m-l h5 {
    color: #333333;
    font-size: 16px;
    line-height:26px;
    margin-top:15px;
    margin-bottom:10px;
}

.panel .m-l h5 span {
    width:4.5%;
    height:17px;
    background:rgba(28,182,79,1);
    border-radius:2px;
    display:inline-block;
    font-size:11px;
    color:#fff;
    line-height:17px;
    text-align:center;
    margin-right:3%;
}

.panel .m-l p {
    color: #808080;
    font-size: 13px;
    line-height: 20px;
    margin-bottom:20px;
}


    </style>
</head>
<body>

<!-- pc -->
    <div class="p container-fluid">
        <nav class="top-nav visible-md-block visible-lg-block">
            <div class="box">
                <ul>
                    <li><a href="<?php echo url('home/index/index'); ?>">家园首页</a></li>
                    <li><a href="<?php echo url('home/search/index',['type'=>0]); ?>">楼盘查询</a></li>
                    <li><a href="<?php echo url('home/search/tuan',['type'=>0]); ?>">团购优惠</a></li>
                    <li><a href="<?php echo url('home/index/buy'); ?>" class="active">买房指南</a></li>
                    <li><a href="<?php echo url('home/news/index'); ?>">楼盘资讯</a></li>
                    <li><a href="<?php echo url('home/user/guan'); ?>">关于家园</a></li>
                </ul>
                <?php if(\think\Session::get('user')): ?>
                    <img class="jk" src="/static/home/imgs/icon-5.png" alt="">
                    <span class="user"><?php echo \think\Session::get('user.p'); ?></span>
                    <span class="logout">退出</span>
                    <?php else: ?>
                    <img src="/static/home/imgs/icon-5.png" alt="家园新房">
                    <span class="register">注册/登录</span>
                    <?php endif; ?>
                <p>购房热线  &nbsp;400-718-6686</p>
            </div>
            
            
        </nav>
        <div class="search visible-md-block visible-lg-block">
                <div class="box">
                    <div class="top">
                        <img src="/static/home/imgs/logo2.png" alt="">
                        <p><i><?php if(\think\Cookie::get('cityname')): ?> <?php echo \think\Cookie::get('cityname'); else: ?>杭州<?php endif; ?></i><img src="/static/home/imgs/triangle.png" alt=""></p>
                         <form id="bname" style="display: initial" action="<?php echo url('home/search/index',['type'=>0]); ?>" method="post">
                        <input type="text" name="name" placeholder="请输入楼盘名称、地域">
                        <span id="find"><img src="/static/home/imgs/icon-8.png">我要找房</span>
                        </form>
                    </div>
                   
                </div>
        </div>
        <div class="questions visible-md-block visible-lg-block">
                <div class="bottom">
                        <span class="active" data-v="m">房价行情<i></i></span>
                        <span data-v="t">买房建议<i></i></span>
                        <span data-v="d">签约认购<i></i></span>
                        <span data-v="n">贷款办理<i></i></span>
                        <span data-v="l">收房验房<i></i></span>
                </div>
                <div class="select-box">
                    <!-- <div class="col-lg-10"> -->
                         <div class="m">
                            <!-- 前三条 -->
                            <ul class="nev-san">
                                <li>
                                    <div class="title-box  teshu">
                                        <!-- <span><strong class="iconfont iconShapecopy"></strong>精华</span> -->
                                        <img src="/static/home/imgs/jing.png" alt="">
                                        <h2>现在外地人在杭州买房需要什么条件?</h2>
                                    </div>
                                    <p class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                </li>
                                <li>
                                        <div class="title-box">
                                            <!-- <span><strong class="iconfont iconShapecopy"></strong>精华</span> -->
                                            <img src="/static/home/imgs/jing.png" alt="">
                                            <h2>现在外地人在杭州买房需要什么条件?</h2>
                                        </div>
                                        <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                </li>
                                <li>
                                        <div class="title-box">
                                            <!-- <span><strong class="iconfont iconShapecopy"></strong>精华</span> -->
                                            <img src="/static/home/imgs/jing.png" alt="">
                                            <h2>现在外地人在杭州买房需要什么条件?</h2>
                                        </div>
                                        <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                 </li>
                            </ul>
                            <!-- 帮我找房 -->
                            <div class="help-house">
                                <img src="/static/home/imgs/car.png" alt="">
                                <div class="help">
                                    <h3>如何找房</h3>
                                    <p>专家来帮你如何选择适合自己的房子</p>
                                </div>
                                <button>帮我找房</button>
                            </div>
                            <!-- 后面几条 -->
                            <ul class="nev-more">
                                    <li>
                                        <div class="title-box">
                                            <span>问</span>
                                            <h2>现在外地人在杭州买房需要什么条件?</h2>
                                        </div>
                                        <p class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                    </li>
                                    <li>
                                            <div class="title-box">
                                                <span>问</span>
                                                <h2>现在外地人在杭州买房需要什么条件?</h2>
                                            </div>
                                            <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                    </li>
                                    <li>
                                            <div class="title-box">
                                                <span>问</span>
                                                <h2>现在外地人在杭州买房需要什么条件?</h2>
                                            </div>
                                            <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                     </li>
                            </ul>
                            <!-- 页码 -->
                            <ul class="yema">
                                <li><span class="iconfont iconjiantou_zuo"></span></li>
                                <li class="dian">1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                                <li>5</li>
                                <li>6</li>
                                <li>7</li>
                                <li>8</li>
                                <li>99</li>
                                <li><span class="iconfont iconjiantou_you"></span></li>
                            </ul>


                        </div>
                        <div class="t">
                            <!-- 前三条 -->
                            <ul class="nev-san">
                                <li>
                                    <div class="title-box  teshu">
                                        <!-- <span><strong class="iconfont iconShapecopy"></strong>精华</span> -->

                                        <img src="/static/home/imgs/jing.png" alt="">
                                        <h2>现在外地人在杭州买房需要什么条件?</h2>
                                    </div>
                                    <p class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                </li>
                                <li>
                                        <div class="title-box">
                                            <!-- <span><strong class="iconfont iconShapecopy"></strong>精华</span> -->
                                            <img src="/static/home/imgs/jing.png" alt="">
                                            <h2>现在外地人在杭州买房需要什么条件?</h2>
                                        </div>
                                        <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                </li>
                                <li>
                                        <div class="title-box">
                                            <!-- <span><strong class="iconfont iconShapecopy"></strong>精华</span> -->
                                            <img src="/static/home/imgs/jing.png" alt="">
                                            <h2>现在外地人在杭州买房需要什么条件?</h2>
                                        </div>
                                        <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                 </li>
                            </ul>
                            <!-- 帮我找房 -->
                            <div class="help-house">
                                <img src="/static/home/imgs/car.png" alt="">
                                <div class="help">
                                    <h3>如何找房</h3>
                                    <p>专家来帮你如何选择适合自己的房子</p>
                                </div>
                                <button>帮我找房</button>
                            </div>
                            <!-- 后面几条 -->
                            <ul class="nev-more">
                                    <li>
                                        <div class="title-box">
                                            <span>问</span>
                                            <h2>现在外地人在杭州买房需要什么条件?</h2>
                                        </div>
                                        <p class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                    </li>
                                    <li>
                                            <div class="title-box">
                                                <span>问</span>
                                                <h2>现在外地人在杭州买房需要什么条件?</h2>
                                            </div>
                                            <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                    </li>
                                    <li>
                                            <div class="title-box">
                                                <span>问</span>
                                                <h2>现在外地人在杭州买房需要什么条件?</h2>
                                            </div>
                                            <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                     </li>
                            </ul>
                            <!-- 页码 -->
                            <ul class="yema">
                                <li><span class="iconfont iconjiantou_zuo"></span></li>
                                <li class="dian">1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                                <li>5</li>
                                <li>6</li>
                                <li>7</li>
                                <li>8</li>
                                <li>99</li>
                                <li><span class="iconfont iconjiantou_you"></span></li>
                            </ul>
                        </div>

                        <div class="d">
                             <!-- 前三条 -->
                             <ul class="nev-san">
                                    <li>
                                        <div class="title-box  teshu">
                                            <!-- <span><strong class="iconfont iconShapecopy"></strong>精华</span> -->
                                            <img src="/static/home/imgs/jing.png" alt="">
                                            <h2>现在外地人在杭州买房需要什么条件?</h2>
                                        </div>
                                        <p class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                    </li>
                                    <li>
                                            <div class="title-box">
                                                <!-- <span><strong class="iconfont iconShapecopy"></strong>精华</span> -->
                                                <img src="/static/home/imgs/jing.png" alt="">
                                                <h2>现在外地人在杭州买房需要什么条件?</h2>
                                            </div>
                                            <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                    </li>
                                    <li>
                                            <div class="title-box">
                                                <!-- <span><strong class="iconfont iconShapecopy"></strong>精华</span> -->
                                                <img src="/static/home/imgs/jing.png" alt="">
                                                <h2>现在外地人在杭州买房需要什么条件?</h2>
                                            </div>
                                            <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                     </li>
                                </ul>
                                <!-- 帮我找房 -->
                                <div class="help-house">
                                    <img src="/static/home/imgs/car.png" alt="">
                                    <div class="help">
                                        <h3>如何找房</h3>
                                        <p>专家来帮你如何选择适合自己的房子</p>
                                    </div>
                                    <button>帮我找房</button>
                                </div>
                                <!-- 后面几条 -->
                                <ul class="nev-more">
                                        <li>
                                            <div class="title-box">
                                                <span>问</span>
                                                <h2>现在外地人在杭州买房需要什么条件?</h2>
                                            </div>
                                            <p class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                        </li>
                                        <li>
                                                <div class="title-box">
                                                    <span>问</span>
                                                    <h2>现在外地人在杭州买房需要什么条件?</h2>
                                                </div>
                                                <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                        </li>
                                        <li>
                                                <div class="title-box">
                                                    <span>问</span>
                                                    <h2>现在外地人在杭州买房需要什么条件?</h2>
                                                </div>
                                                <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                         </li>
                                </ul>
                                <!-- 页码 -->
                                <ul class="yema">
                                    <li><span class="iconfont iconjiantou_zuo"></span></li>
                                    <li class="dian">1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <li>6</li>
                                    <li>7</li>
                                    <li>8</li>
                                    <li>99</li>
                                    <li><span class="iconfont iconjiantou_you"></span></li>
                                </ul>
                            
                        </div>   
                        <div class="n">
                           <!-- 前三条 -->
                           <ul class="nev-san">
                            <li>
                                <div class="title-box  teshu">
                                        <img src="/static/home/imgs/jing.png" alt="">
                                    <!-- <span><strong class="iconfont iconShapecopy"></strong>精华</span> -->
                                    <h2>现在外地人在杭州买房需要什么条件?</h2>
                                </div>
                                <p class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                            </li>
                            <li>
                                    <div class="title-box">
                                            <img src="/static/home/imgs/jing.png" alt="">
                                        <!-- <span><strong class="iconfont iconShapecopy"></strong>精华</span> -->
                                        <h2>现在外地人在杭州买房需要什么条件?</h2>
                                    </div>
                                    <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                            </li>
                            <li>
                                    <div class="title-box">
                                            <img src="/static/home/imgs/jing.png" alt="">
                                        <!-- <span><strong class="iconfont iconShapecopy"></strong>精华</span> -->
                                        <h2>现在外地人在杭州买房需要什么条件?</h2>
                                    </div>
                                    <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                             </li>
                        </ul>
                        <!-- 帮我找房 -->
                        <div class="help-house">
                            <img src="/static/home/imgs/car.png" alt="">
                            <div class="help">
                                <h3>如何找房</h3>
                                <p>专家来帮你如何选择适合自己的房子</p>
                            </div>
                            <button>帮我找房</button>
                        </div>
                        <!-- 后面几条 -->
                        <ul class="nev-more">
                                <li>
                                    <div class="title-box">
                                        <span>问</span>
                                        <h2>现在外地人在杭州买房需要什么条件?</h2>
                                    </div>
                                    <p class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                </li>
                                <li>
                                        <div class="title-box">
                                            <span>问</span>
                                            <h2>现在外地人在杭州买房需要什么条件?</h2>
                                        </div>
                                        <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                </li>
                                <li>
                                        <div class="title-box">
                                            <span>问</span>
                                            <h2>现在外地人在杭州买房需要什么条件?</h2>
                                        </div>
                                        <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                 </li>
                        </ul>
                        <!-- 页码 -->
                        <ul class="yema">
                            <li><span class="iconfont iconjiantou_zuo"></span></li>
                            <li class="dian">1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>99</li>
                            <li><span class="iconfont iconjiantou_you"></span></li>
                        </ul>
                            
                        </div>  
                        <div class="l">
                          <!-- 前三条 -->
                          <ul class="nev-san">
                                <li>
                                    <div class="title-box  teshu">
                                            <img src="/static/home/imgs/jing.png" alt="">
                                        <!-- <span><strong class="iconfont iconShapecopy"></strong>精华</span> -->
                                        <h2>现在外地人在杭州买房需要什么条件?</h2>
                                    </div>
                                    <p class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                </li>
                                <li>
                                        <div class="title-box">
                                            <!-- <span><strong class="iconfont iconShapecopy"></strong>精华</span> -->
                                            <img src="/static/home/imgs/jing.png" alt="">
                                            <h2>现在外地人在杭州买房需要什么条件?</h2>
                                        </div>
                                        <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                </li>
                                <li>
                                        <div class="title-box">
                                            <!-- <span><strong class="iconfont iconShapecopy"></strong>精华</span> -->
                                            <img src="/static/home/imgs/jing.png" alt="">
                                            <h2>现在外地人在杭州买房需要什么条件?</h2>
                                        </div>
                                        <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                 </li>
                            </ul>
                            <!-- 帮我找房 -->
                            <div class="help-house">
                                <img src="/static/home/imgs/car.png" alt="">
                                <div class="help">
                                    <h3>如何找房</h3>
                                    <p>专家来帮你如何选择适合自己的房子</p>
                                </div>
                                <button>帮我找房</button>
                            </div>
                            <!-- 后面几条 -->
                            <ul class="nev-more">
                                    <li>
                                        <div class="title-box">
                                            <span>问</span>
                                            <h2>现在外地人在杭州买房需要什么条件?</h2>
                                        </div>
                                        <p class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                    </li>
                                    <li>
                                            <div class="title-box">
                                                <span>问</span>
                                                <h2>现在外地人在杭州买房需要什么条件?</h2>
                                            </div>
                                            <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                    </li>
                                    <li>
                                            <div class="title-box">
                                                <span>问</span>
                                                <h2>现在外地人在杭州买房需要什么条件?</h2>
                                            </div>
                                            <p  class="pp">目前这边大多数的新房，在正式开盘前都有先登记的步骤，根据登记的人数来决定开盘是否要摇号。建议如果确实有买房的意愿，以下几个材料可以先提前准备</p>
                                     </li>
                            </ul>
                            <!-- 页码 -->
                            <ul class="yema">
                                <li><span class="iconfont iconjiantou_zuo"></span></li>
                                <li class="dian">1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                                <li>5</li>
                                <li>6</li>
                                <li>7</li>
                                <li>8</li>
                                <li>99</li>
                                <li><span class="iconfont iconjiantou_you"></span></li>
                            </ul>
                        </div>                    
                   
                </div>
                <div class="hot-loupan">
                      <h1>热门楼盘</h1>  
                    <ul>
                        <?php foreach($tdengs as $v): ?>
                         <li>
                             <div class="img-box">
                                    <img src="<?php echo $v['building_img']; ?>" alt="">
                                    <i></i>
                                    <span>热门楼盘</span>
                             </div>
                            <div class="lou-content">
                                    <h3><?php echo $v['building_name']; ?></h3>
                                    <i><?php echo $v['city']; ?>  |  <?php echo $v['building_address']; ?></i>
                                    <strong>建面：<?php echo $v['humianji']; ?>/m²</strong><br/>
                                    <span><?php echo $v['danjia']; ?>元/m²起</span>
                            </div>
                        </li>
                        <?php endforeach; ?>
                        

                        
                    </ul>



                </div>
        </div>

	    <div class="tan visible-md-block visible-lg-block">
            <div class="zhao"></div>
            <div class="login ts">
                <div class="t-top">
                    <h6>登录/注册</h6>
                    <p>若是没有注册过，首次将自动注册登录</p>
                    <img id="l-esc" src="/static/home/imgs/xx.png" alt="">
                </div>
                <div class="t-bottom">
                    <input class="l-p" type="text" placeholder="请输入手机号">
                    <input class="l-c" type="text" placeholder="请输入验证码">
                    <span class="m-get">获取验证码</span>
                    <button class="m-btn">确定</button>
                </div>
            </div>
	   <div class="weiter ts">
                <div class="t-top">
                    <h6>专业服务</h6>
                    <p>一键订阅，享受最专业的服务！</p>
                    <img id="w-esc" src="/static/home/imgs/xx.png" alt="">
                </div>
                <div class="t-bottom">
                    <input class="l-p" type="text" placeholder="请输入手机号">
                    <input class="l-c" type="text" placeholder="姓名">
                    <input type="hidden" value="专业服务">
                    <input type="hidden" name="building_name" value="买房指南">
                    <button class="port1">确定</button>
                </div>
            </div>
            <div class="succ">
                <div class="t-top">
                    <img id="s_esc" src="/static/home/imgs/m-esc.png" alt="">
                    <img class="gou" src="/static/home/imgs/gou.png" alt="">
                </div>
                <div class="t-bottom">
                    <p id="txt">132133</p>
                    <button class="s-btn">确定</button>
                </div>
            </div>
        </div>




        <footer class="container-fluid visible-md-block visible-lg-block">
            <div class="footer-cen">
    
            <div class="tou">
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
                <h2>购房热线 :  400-718-6686</h2>
            </div>
    
            <div class="you-cen">
                <div class="youqing-l">
                    <span>友情链接：</span>
                    <ul class="youqing">
                        <?php foreach($yous as $v): ?>
                            <li><a target="_blank" href="<?php echo $v['src']; ?>"><?php echo $v['title']; ?></a></li>
                        <?php endforeach; ?>
                            
                    </ul>
                    <p>Copyright © 2017 - 2022 杭州亚汉网络有限公司有限公司版权所有 浙ICP备18057005号</p>
                </div>
                <div  class="youqing-er">
                   <dl>
                       <dt><img src="/static/home/imgs/g-icon.png" alt=""></dt>
                       <dd>家园新房公众号</dd>
                   </dl>
                   <dl>
                        <dt><img src="/static/home/imgs/g-icon.png" alt=""></dt>
                        <dd>家园新房公众号</dd>
                    </dl>
                </div>
            </div>
           
           
    
           </div>
        </footer>
    </div>


    <!-- yidong -->
        <div>

                <div id="boxXuan">
                    <div class="boxlist">
                        <img  class="back" src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
                        <ul id="menu">
                            <li class="active">买房</li>
                            <li>投资</li>
                            <li>贷款</li>
                            <li>行情</li>
                            <li>政策</li>
                        </ul>
                    </div>

                        <div id="panel">
                            <div class="panel active">
                                  <!-- 精华问答 -->
                                  <ul class="m-jinghua">
                                      <li>
                                          <div class="m-biao">
                                                <img src="/static/home/imgs/jing.png" alt="">
                                                <span>现在外地人在杭州买房需要什么条件?</span>
                                          </div>
                                         <p>
                                           纳税或社保连年，需要连续足额缴存24个月，纳税或社保连年，需要连续足额缴存24个月...
                                         </p>

                                      </li>
                                      <li>
                                            <div class="m-biao">
                                                  <img src="/static/home/imgs/jing.png" alt="">
                                                  <span>现在外地人在杭州买房需要什么条件?</span>
                                            </div>
                                           <p>
                                             纳税或社保连年，需要连续足额缴存24个月，纳税或社保连年，需要连续足额缴存24个月...
                                           </p>
  
                                        </li>
                                        <li>
                                                <div class="m-biao">
                                                      <img src="/static/home/imgs/jing.png" alt="">
                                                      <span>现在外地人在杭州买房需要什么条件?</span>
                                                </div>
                                               <p>
                                                 纳税或社保连年，需要连续足额缴存24个月，纳税或社保连年，需要连续足额缴存24个月...
                                               </p>
      
                                            </li>
                                  </ul>
                                <!-- 买房box -->
                                <div class="find-house">
                                        <div class="fh-big-box">
                                            <img src="https://www.jy1980.com/static/home/imgs/car.png" alt="">
                                            <div class="fh-mid">
                                                <h1>如何找房</h1>
                                                <p>专家教你如何选择房子</p>
                                            </div>
                                            <button>帮我找房</button>
                                        </div>
                            
                                    </div>

                                    <div class="m-l">
                                            <h5><span>问</span>房子产权到期了怎么办？</h5>
                                            <p>按照新颁布的《物权法》一百四十九条规定：“住宅建设用地使用权期限届满的，自动续期。”《城市房地产管理法》第二十一条规定：“土地使用权出让合同约定的使用年限届满， </p>
                                    </div>
                                    <div class="m-l">
                                            <h5><span>问</span>房子产权到期了怎么办？</h5>
                                            <p>按照新颁布的《物权法》一百四十九条规定：“住宅建设用地使用权期限届满的，自动续期。”《城市房地产管理法》第二十一条规定：“土地使用权出让合同约定的使用年限届满， </p>
                                    </div>











                            </div>
                            <div class="panel">
                              2
                            
                           </div>
                            <div class="panel">
                               3
                             
                          </div> 
                            <div class="panel">
                                4
                            
                            </div>
                            <div class="panel">
                                5
                            
                            </div>
                      </div>
                    
                    </div>     




        </div>


    <!-- <div class="container-fluid m">
        <div class="visible-xs-block .visible-sm-block m-top">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>买房指南</h3>
        </div>
        <div class="m-content visible-xs-block .visible-sm-block">
            <h4>金牌置业顾问</h4>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/static/home/imgs/people.png" alt="家园新房">
                        <p class="m-one">张甜馨</p>
                        <p class="m-two">置业顾问</p>
                        <p class="m-three">139****3671</p>
                        <a class="m-wen" href="#">向他咨询</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="/static/home/imgs/r1.png" alt="家园新房">
                        <p class="m-one">李盛斌</p>
                        <p class="m-two">置业顾问</p>
                        <p class="m-three">139****3671</p>
                        <a class="m-wen" href="#">向他咨询</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="/static/home/imgs/r2.png" alt="家园新房">
                        <p class="m-one">赵凯</p>
                        <p class="m-two">置业顾问</p>
                        <p class="m-three">139****3671</p>
                        <a class="m-wen" href="#">向他咨询</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="/static/home/imgs/r3.png" alt="家园新房">
                        <p class="m-one">叶佳美</p>
                        <p class="m-two">置业顾问</p>
                        <p class="m-three">139****3671</p>
                        <a class="m-wen" href="#">向他咨询</a>
                    </div>
                </div>
            </div>
            <div class="m-wen">
                <div class="m-w-top">
                    <span class="m-active">买房</span>
                    <span>投资</span>
                    <span>贷款</span>
                </div>
            </div>
        </div>
        <div class="m-list visible-xs-block .visible-sm-block">
            <div class="m-l">
                <h5><img src="/static/home/imgs/wen.png">现在外地人在杭州买房需要什么条件?</h5>
                <p>
                        纳税或社保连年，需要连续足额缴存24个月，纳税或社保连年，需要连续足额缴存24个月
                </p>
            </div>
            <div class="m-l">
                <h5><img src="/static/home/imgs/wen.png">我和男朋友还没领证，买房可以写两个人名字吗？</h5>
                <p>
                        可以写两个人的名字前提是你们两个人都有购房资质，如果是已经结婚领了证那么就是以家庭为单位只要家庭中有一人有购房资质就是可以买房且可以写两个人的名字的。因为两个人没有领证所以要求两个人都要满足杭州市购房要求才可以写两个人的名字。                </p>
            </div>
            <div class="m-l">
                <h5><img src="/static/home/imgs/wen.png">你好，已经交了定金，觉得房子不好了，还可以退吗？</h5>
                <p>
                        一般情况下，交付定金方违约的，无权要求对方返还定金，但有例外情况。

重要参考依据：合同法 第一百一十五条 当事人可以依照《中华人民共和国担保法》约定一方向对方给付定金作为债权的担保。债务人履行债务后，定金应当抵作价款或者收回。给付定金的一方不履行约定的债务的，无权要求返还定金；收受定金的一方不履行约定的债务的，应当双倍返还定金。　　第一百一十六条 当事人既约定违约金，又约定定金的，一方违约时，对方可以选择适用违约金或者定金条款。　　第一百一十七条 因不可抗力不能履行合同的，根据不可抗力的影响，部分或者全部免除责任，但法律另有规定的除外。当事人迟延履行后发生不可抗力的，不能免除责任。　　本法所称不可抗力，是指不能预见、不能避免并不能克服的客观情况。　　第一百一十八条 当事人一方因不可抗力不能履行合同的，应当及时通知对方，以减轻可能给对方造成的损失，并应当在合理期限内提供证明。　　第一百一十九条 当事人一方违约后，对方应当采取适当措施防止损失的扩大；没有采取适当措施致使损失扩大的，不得就扩大的损失要求赔偿。　　当事人因防止损失扩大而支出的合理费用，由违约方承担。                </p>
            </div>
            <div class="m-l">
                <h5><img src="/static/home/imgs/wen.png">房子产权到期了怎么办？</h5>
                <p>
                        按照新颁布的《物权法》一百四十九条规定：“住宅建设用地使用权期限届满的，自动续期。”《城市房地产管理法》第二十一条规定：“土地使用权出让合同约定的使用年限届满，土地使用者需要继续使用土地的，应当于届满前一年申请续期，除根据社会公共利益需要收回该幅土地的，应当予以批准。经批准予以续期的，应当重新签订合同，并交付土地使用权出让金。土地使用权出让合同约定的使用年限届满，土地使用者未申请续期或者虽申请续期但依照前款规定未获批准的，土地使用权由国家无偿收回。”                </p>
            </div>
            <div class="m-l">
                <h5><img src="/static/home/imgs/wen.png">公积金贷款买房，夫妻能不能以个人名义按揭购买？</h5>
                <p>
                        您好，根据您所述的情况这是不可以的。若是公积金贷款买房，需要夫妻双方两个人的名义去公积金中心或公积金委贷银行签署借款合同，房屋买卖合同也须是夫妻双方的名义。                </p>
            </div>
            <div class="m-c-content">
                <h5>专业服务</h5>
                <img id="m_esc" src="/static/home/imgs/m-esc.png" alt="">
                <p>一键订阅，享受最专业的服务！</p>
                    <input type="text" placeholder="请输入手机号">
                    <input type="name" placeholder="请输入姓名">
                    <input type="hidden" name="type" value="专业服务">
                <input type="hidden" name="building_name" value="买房指南">
                <button class="m-c-port1">确定</button>
            </div>
            <div class="m-chang"></div>
            <div class="m-o-succ">
                <img class="o-esc" src="/static/home/imgs/m-esc.png" alt="">
                <img src="/static/home/imgs/m-success.png" alt="" class="o-success">
                <p id="o_p">已成功订阅最新动态，我们会第一时间通过短信通知您！</p>
                <button id="o_btn">确定</button>
            </div>
        </div>
    </div> -->

    <script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script>
    <script>
$('#find').on('click',function(){
                $('#bname').submit();
            })
            
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 20,
            centeredSlides: true,
            pagination: {
                clickable: true,
            },
        });
        $(document).ready(function(){
            $('.n').hide();
            $('.l').hide();
	$('.user').on('click',function(){
                    window.location.href="<?php echo url('home/user/zu'); ?>";
                })
	$('.req').on('click',function(){
                $('.weiter').show(150);
                $('.zhao').show();
            })
            $('#w-esc').on('click',function(){
                $('.weiter').hide();
                $('.zhao').hide();
            })
            $('#s_esc').on('click',function(){
                $('.succ').hide();
                $('.zhao').hide();
            })
            $('.s-btn').on('click',function(){
                $('.succ').hide();
                $('.zhao').hide();
            })
            $('.port1').on('click',function(){
                var building_name=$(this).prev().val();
                var name=$(this).prev().prev().prev().val();
                var tel=$(this).prev().prev().prev().prev().val();
                var type=$(this).prev().prev().val();
                var pattern_tel = /^1[3-9][0-9]{9}$/;
				if (tel == '') {
					$(this).prev().prev().prev().prev().val('')
                    $(this).prev().prev().prev().prev().attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_tel.test(tel)) {
					$(this).prev().prev().prev().prev().val('')
					$(this).prev().prev().prev().prev().attr('placeholder','手机号码不合法');
					return;
				} 
                var data={
                    'phone':tel,
                    'type':type,
                    'name':name,
                    'building_name':building_name
                }
                var that=$(this)
                $.post(
                    "<?php echo url('home/content/port1'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            that.parent().parent().hide();
                                $('#txt').text('已成功订购服务，我们会第一时间通过电话联系您');
                                $('.succ').show();
                        }
                    },
                    'json'
                )
            })
    	$('.bottom span').on('click',function(){
                var type=$(this).attr('data-v');
                if(type=='m'){
                    $('.m').show();
                    $('.d').hide();
                    $('.t').hide();
                    $('.n').hide();
                    $('.l').hide();
                }else if(type=="d"){
                    $('.d').show();
                    $('.m').hide();
                    $('.t').hide();
                    $('.n').hide();
                    $('.l').hide();
                }else if(type=="t"){
                    $('.t').show();
                    $('.d').hide();
                    $('.m').hide();
                    $('.n').hide();
                    $('.l').hide();
                }else if(type=="n"){
                    $('.n').show();
                    $('.d').hide();
                    $('.m').hide();
                    $('.t').hide();
                    $('.l').hide();
                }else if(type=="l"){
                    $('.l').show();
                    $('.d').hide();
                    $('.m').hide();
                    $('.n').hide();
                    $('.t').hide();
                }
                $(this).addClass('active').siblings('span').removeClass('active');
            })
	      $('#l-esc').on('click',function(){
                $('.login').hide();
                $('.zhao').hide();
                })
            $('.zhao').on('click',function(){
                $(this).hide();
                $('.login').hide();
	       $('.weiter').hide();
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



            $('.o-esc').on('click',function(){
                $('.m-o-succ').hide();
                $('.m-chang').hide();
            })
            $('#o_btn').on('click',function(){
                $('.m-o-succ').hide();
                $('.m-chang').hide();
            })
            $('.m-w-top span').on('click',function(){
                $(this).addClass('m-active').siblings('span').removeClass('m-active');
            })
            $('.m-wen').on('click',function(){
                $('.m-chang').show();
                $('.m-c-content').show(200);
            })
            $('.m-chang').on('click',function(){
                $(this).hide();
                $('.m-c-content').hide();
            })
            $('#m_esc').on('click',function(){
                $('.m-c-content').hide();
                $('.m-chang').hide();
            })
            $('.m-c-port1').on('click',function(){
                var building_name=$(this).prev().val();
                var name=$(this).prev().prev().prev().val();
                var tel=$(this).prev().prev().prev().prev().val();
                var type=$(this).prev().prev().val();
                var pattern_tel = /^1[3-9][0-9]{9}$/;
				if (tel == '') {
					$(this).prev().prev().prev().prev().val('')
                    $(this).prev().prev().prev().prev().attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_tel.test(tel)) {
					$(this).prev().prev().prev().prev().val('')
					$(this).prev().prev().prev().prev().attr('placeholder','手机号码不合法');
					return;
				} 
                var data={
                    'phone':tel,
                    'type':type,
                    'name':name,
                    'building_name':building_name
                }
                var that=$(this)
                $.post(
                    "<?php echo url('home/content/port1'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            that.parent().hide();
                                $('#o_p').text('已成功订购服务，我们会第一时间通过电话联系您');
                                $('.m-o-succ').show();
                        }
                    },
                    'json'
                )
            })
        })

        $('#menu li').click(function(){
            // console.log(this);
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            
            $('.panel').siblings().removeClass('active');
            // console.log($(this).index());
             $('.panel').eq($(this).index()).addClass('active');
            
      })
    </script>
</body>
</html>