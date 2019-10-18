<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpstudy_pro\WWW\tp2\public/../application/home\view\news\project.html";i:1571036682;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $data['title']; ?>-楼盘资讯</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="//at.alicdn.com/t/font_1350331_tr69ulhj2bk.css">
        <link rel="stylesheet" href="//at.alicdn.com/t/font_910507_hzufm6hpwxd.css">
        <link rel="stylesheet" href="//at.alicdn.com/t/font_1416845_s5ckf94qr0b.css">
        <link rel="stylesheet" href="/static/home/css/comm.css">
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
	       #cox a{
		     color:#338DE6;
		}
            






            /* m  tou */
            .m-top{
                width:100%;
                text-align: center;
                position: relative;
                height:44px;
            }
            .m-top img{
                position: absolute;
                top:25%;
                width:6%;
                left:1%;
            }
            .m-top h3{
                color:#333333;
                font-size: 18px;
                margin:0;
                height:100%;
                line-height: 43px;
                font-weight: bold;
            }
            /* m  tou */
            .m-line{
                width:1000px;
                height:1px;
                background-color: #F2F2F2;
                position: relative;
                left:-20%;
            }
            /* content */
            .m-content{
                width:100%;
            }
            .m-content h3{
                color:#404040;
                font-size: 20px;
                line-height: 28px;
            }
            .m-content .m-auth span{
                color:#979797;
                font-size: 10px;
                padding-right:3%;
            }
            .m-content p{
                color:#666666;
                font-size: 15px;
                line-height: 26px;
            }
            .m-content img{
                background-size:contain;
                width:90%;
                height: auto;
                margin: 0 auto;
                display: block;
            }
            /* content */




	/* pc */
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


  .pro .hot-tui{
       float:right;
       min-height: 718px;
       width:360px;
       /* background:rgb(202, 223, 212); */
       padding-left: 24px;
  }
  .pro .hot-tui h3{
    font-size:24px;
    font-family:"Source Han Sans SC";
    font-weight:bold;
    color:rgba(50,51,51,1);
    line-height:104px;
    margin-top:10px;
}
.hot-tui ul li{
       height:134px;
       width:312px;
}
.hot-tui ul li .hot-list{
    width:312px;
    height:90px;
   
}
.dianping .hot-tui  h3{
    font-size:24px;
    font-family:"Source Han Sans SC";
    font-weight:bold;
    color:rgba(50,51,51,1);
    line-height: 104px;
}
.hot-tui ul li .hot-list .hot-img{
    float:left;
    position: relative;
    height:90px;
    margin-right: 24px;
}
.hot-tui ul li .hot-list .hot-img span{
    width:72px;
    height:24px;
    background:linear-gradient(270deg,rgba(255,124,72,1),rgba(255,66,52,1));
    border-radius:6px 0px 6px 0px;
    font-size:14px;
    font-family:'PingFang SC';
    font-weight:500;
    color:rgba(255,255,255,1);
    position: absolute;
    display: block;
    text-align: center;
    line-height: 24px;
}
.hot-tui ul li .hot-list .hot-name{
    float:left;
    height:90px;
}
.hot-tui ul li .hot-list .hot-img img{
    width:130px;
    height:90px;
    border-radius:8px;
}
.hot-tui ul li .hot-list .hot-img i{
    width:130px;
    height:90px;
    background:rgba(0,0,0,1);
    opacity:0.4;
    border-radius:8px;
    position: absolute;
    top:0;
}
.hot-tui ul li .hot-list:hover i {
    opacity:0;
}
.hot-tui ul li .hot-list .hot-name h4{
    font-size:14px;
    font-family:'Microsoft YaHei';
    font-weight:bold;
    color:rgba(51,51,51,1);
    line-height:20px;
    margin-top:0px;
    margin-bottom:0px;
}
.hot-tui ul li .hot-list .hot-name h5{
    font-size:14px;
    font-family:'Microsoft YaHei';
    font-weight:400;
    color:rgba(128,128,128,1);
    line-height:26px;
    margin-top:0px;
    margin-bottom:0px;
}
.hot-tui ul li .hot-list .hot-name h6{
    font-size:14px;
    font-family:'Microsoft YaHei';
    font-weight:400;
    color:rgba(128,128,128,1);
    line-height:26px;
    margin-top:0px;
    margin-bottom:0px;
}
 




.hot-tui ul li .hot-list .hot-name span{
    font-size:16px;
    font-family:'Microsoft YaHei';
    font-weight:bold;
    color:rgba(255,106,72,1);
    /* line-height:48px; */
}
.hot-tui ul li p{
    width:312px;
    height:20px;
    background:rgba(250,250,250,1);
    border-radius:2px;
    line-height: 20px;
    margin-top:7px;
    overflow: hidden;
    text-overflow:ellipsis;
    white-space: nowrap;
}
/*项目资讯*/

.zilist .xiang-left {
    width: 840px;
    float: left;
    /* background:#f00; */
}

.xiang-left h1 {
    font-size: 32px;
    font-family: 'Microsoft YaHei';
    font-weight: bold;
    color: rgba(51, 51, 51, 1);
    margin-top: 80px;
}

.xiang-left .title-p {
    font-size: 20px;
    font-family: 'Microsoft YaHei';
    font-weight: 400;
    color: rgba(156, 156, 156, 1);
    line-height: 56px;
    margin-bottom: 40px;
}

.xiang-left ul li {
    height: 165px;
    width: 840px;
    margin-bottom: 30px;
}

.xiang-left ul li:hover {
    background: rgb(241, 241, 241);
    cursor: pointer;
}

.xiang-left ul li:hover .zi-img img {
    transform: scale(1.1);

}

.xiang-left ul li .zi-img {
    width: 220px;
    height: 165px;
    overflow: hidden;
    float: left;
}

.xiang-left ul li .zi-img img {
    width: 220px;
    height: 165px;
    background: rgba(27, 27, 27, 1);
    border-radius: 4px;

    transition: all 0.6s;

}

.xiang-left ul li .zi-content {
    width: 620px;
    height: 165px;
    float: left;
    /* background:#4393FF; */
    padding: 0 40px 0 31px;
}

.xiang-left ul li .zi-content h2 {
    font-size: 20px;
    font-family: 'Microsoft YaHei';
    font-weight: bold;
    color: rgba(64, 64, 64, 1);
    line-height: 36px;
    width: 537px;
}

.xiang-left ul li .zi-content p {
    font-size: 16px;
    font-family: 'Microsoft YaHei';
    font-weight: 400;
    color: rgba(102, 102, 102, 1);
    line-height: 30px;
}

.xiang-left ul li .zi-content h4 {
    font-size: 16px;
    font-family: 'Microsoft YaHei';
    font-weight: 400;
    color: rgba(151, 151, 151, 1);
    line-height: 34px;
    float: right;
    margin-right: 13px;
}
.xiang-left .more-zi{
    font-size:16px;
    font-family:"Microsoft YaHei";
    font-weight:bold;
    color:rgba(62,203,88,1);
    line-height:29px;
    padding:17px 368px 16px 368px;
    border:1px solid rgba(237,237,237,1);
    border-radius:4px;
    margin-top:49px;
    display: inline-block;
}
.xiang-left .more-zi:hover{
    color:#fff;
    background: rgba(62,203,88,1);
    opacity: 0.6;
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
             padding-top:38px;
         }
         .content .left{
             padding:0;
         }
         .content .left h5{
             color:#333333;
             font-size: 24px;
             margin-bottom:16px;
             margin-top:0;
             font-weight:bold;
             font-family:"Microsoft YaHei";
         }
         .content .left .type{
             margin-bottom: 39px;
         }
         .content .left .zan{
            margin-bottom: 80px;
            position: relative;
         }
         .content .left .zan .er-wei{
            position: absolute;
            top:-73px;
            left:125px;
         }
         .content .left .zan  .zan-left-btn,
         .content .left .zan  .zan-rig-btn
         {
               float:left;
               width:140px;
                height:42px;
                border:1px solid rgba(237,237,237,1);
                border-radius:21px;
                cursor:pointer;
         }
         .content .left .zan  .zan-left-btn:hover,
         .content .left .zan  .zan-rig-btn:hover{
                 background:rgb(236, 230, 230);
         }

         .content .left .zan  .zan-left-btn{
                margin-right:40px;
                margin-left:253px;
         }


         .content .left .zan  .zan-left-btn i,
         .content .left .zan  .zan-rig-btn i{
                 font-style:normal;
                 text-align: center;
                 line-height: 42px;
                 font-size:16px;
                font-family:"Microsoft YaHei";
                font-weight:400;
                color:rgba(51,51,51,1);
         }
         .content .left .zan  .zan-left-btn span
        {
                 text-align: center;
                 color:#1CB64F;
                 font-size:18px;
         }
         .content .left .zan  .zan-rig-btn span{
                text-align: center;
                 font-size:18px;
         }
         .content .left .zan  .zan-left-btn span{
                margin-left:16px;
                
         }
         .content .left .zan  .zan-rig-btn span{
                margin-left:40px;
         }







         .content .left .type span{
             color:#979797;
             font-size: 16px;
             margin-right:8px;
         }
         .content .left .type .time{
             font-size: 18px;
         }
         .content .left #cox p{
            color:#333333;
            font-size: 16px;
            line-height: 28px;
         }
         .content .right{
             padding-left:47px;
	        width:400px;
         }
         .content .right .zixun-list{
                width:360px;
         }
         .content .right .zixun-list h6{
             color:#333333;
             font-size: 24px;
             font-weight: 500;
             margin-bottom: 38px;
             margin-top:0;
             font-weight:bold;
         } 
         .content .right .pro{
             margin-top:7px;
             position: relative;
         }
         /* .content .right .pro p{
             width:170px;
             height:202px;
             display: inline-block;
             margin-right:18px;
             border:1px solid #EDEDED;
             margin-bottom: 38px;
         } */
         .content .right .pro p.ss{
            position: absolute;
         }
         .content .right .pro p img{
             width:170px;
             height:128px;
             margin-bottom: 15px;
         }
         .content .right .pro p span{
             display: inline-block;
             font-size: 17px;
             color:#333333;
             font-weight: bold;
             width:137px;
             height:42px;
             margin-left:16px;
             display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
         }
         .content .right .xinwen li{
             margin-right:0px;
             margin-bottom: 23px;
         }
         .content .right ul li a{
             color: #666666;
             font-size: 18px;
             width:302px;
             height:51.11px;
             display: inline-block;
             overflow: hidden;
         }
         .content .right .zixun-list ul li span{
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
         /* footer{
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

 */




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
            margin-top:0;
        }
	.m-content a{
	    color:#338DE6;
	}
        </style>
</head>
<body>
    <!-- PC -->
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
                <p>购房热线  &nbsp;400-718-6686</p>
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
                <h5><?php echo $data['title']; ?></h5>
                <p class="type">
                    <span>项目资讯</span>
                    <span class="time"><?php echo $data['create_time']; ?></span>
                </p>
                 <div id="cox">
                     <?php echo html_entity_decode($data['content']); ?>
                 </div>
                    <!-- 点赞按钮 -->
                 <div class="zan">
                        <div class="er-wei" style="display:none">
                                <img src="https://www.jy1980.com/static/home/imgs/g-icon.png" alt="">
                       </div>
                      <div class="zan-left-btn">
                            <span class="iconfont iconweixin"></span>
                            <i>家园公众号</i>
                      </div>

                      <div class="zan-rig-btn">
                            <span class="iconfont icon-dianzan"></span>
                            <i>点赞</i>
                      </div>
                 </div>
                <!-- 咨询列表 -->
                 <div class="zilist">
                    <div class="xiang-left">
                        <ul>
                            <?php foreach($ps as $v): ?>
                            <li>
                                <a href="<?php echo url('home/news/pro',['id'=>$v['id']]); ?>">
                                     <div class="zi-img">
                                             <img src="<?php echo $v['img']; ?>" alt="">
                                         </div>
                                         <div class="zi-content">
                                             <h2><?php echo $v['title']; ?></h2>
                                             <p><?php echo $v['content']; ?></p>
                                             <h4>项目资讯&nbsp;&nbsp;<?php echo $v['create_time']; ?></h4>
                                         </div>
                                </a>
                            </li>
                            <?php endforeach; ?>
                            
                            
                        </ul>
                        <a href="<?php echo url('home/news/index'); ?>" class="more-zi">更多资讯</a>
                 </div>
                 </div>




            </div>
            <div class="col-lg-4 right">
                <div class="pro">
                    <div class="hot-tui">
                        <h3>推荐楼盘</h3>
                        <ul>
                            <?php foreach($tdengs as $v): ?>
                            <a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>">
                            <li>
                               
                                <div class="hot-list">
                                    <div class="hot-img">
                                        <i></i>
                                        <span>热门楼盘</span>
                                        <img src="<?php echo $v['building_img']; ?>" alt="">
                                    </div>
        
                                    <div class="hot-name">
                                        <h4><?php echo $v['building_name']; ?></h4>
                                        <h5><?php echo $v['city']; ?>-<?php echo $v['qu']; ?></h5>
                                        <h6>建面：<?php echo $v['humianji']; ?>/m²</h6>
                                        <span><?php echo $v['danjia']; ?>元/m²起</span>
                                    </div>
                                </div>
                                <p>最新动态：<?php echo $v['dong']; ?></p>
                                
                            </li>
                        </a>
                            <?php endforeach; ?>
                            
                        </ul>
        
        
                    </div>

                    <div class="zixun-list">
                        <h6>新闻资讯</h6>
                        <ul class="xinwen">
                            <?php foreach($ns as $k=>$v): ?>
                            <li><span <?php if(($k+1)<4): ?>class="new"<?php endif; ?>><?php echo $k+1; ?></span><a href="/article/<?php echo $v['id']; ?>"><?php echo $v['title']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                            
                    </div>

               
            </div>
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

    <!-- <footer class="container-fluid visible-md-block visible-lg-block">
            <ul class="footer-top">                                  
                <a href="<?php echo url('home/user/lian'); ?>"><li>联系我们</li></a>
                <a href="<?php echo url('home/user/guan'); ?>"><li>关于家园</li></a>
                <a href="<?php echo url('home/news/index'); ?>"><li>楼盘资讯</li></a>
                <a href="<?php echo url('home/search/index',['type'=>0]); ?>"><li>楼盘查询</li></a>
                <a href="<?php echo url('home/index/buy'); ?>"><li>买房指南</li></a>
                <a href="<?php echo url('home/search/tuan',['type'=>0]); ?>"><li>团购优惠</li></a>
            </ul>
            <div class="footer-line"></div>
            <p>购房热线   400-718-6686</p>
                        <span>Copyright © 2017 - 2022 杭州亚汉网络有限公司有限公司版权所有 浙ICP备18057005号 </span>
    </footer> -->
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



    <!-- PC -->
    <!-- PC -->



    <!-- 移动 -->
    <div class="container-fluid">
        <div class="visible-xs-block .visible-sm-block m-top">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>楼盘资讯</h3>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-content visible-xs-block .visible-sm-block">
            <h3><?php echo $data['title']; ?></h3>
            <p class="m-auth">
                <span>项目资讯</span>
                <span><?php echo $data['create_time']; ?></span>
            </p>
            <p>
                    <?php echo html_entity_decode($data['content']); ?>
                </p>
        </div>
    </div>
    <!-- 移动 -->

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
                if(phone==''){return}
                if(code==''){return}
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


            $('.zan-left-btn').hover(function(){
            $('.er-wei').css({
                   display:"block"
            })
    },function(){
        $('.er-wei').css({
                   display:"none"
            }) 
    })


    window.tap=1;
    $('.zan-rig-btn').click(function(){
            if( window.tap==1){
                $(this).children("span").css({
                   color:"#1CB64F"
                 }) 
                 window.tap=2
            }else if(window.tap==2){
                $(this).children("span").css({
                   color:"#999999"
                 })  
                 window.tap=1
            }


            
    })



	// $(window).scroll(function(){
    //             var t = $(this).scrollTop();
    //             var h=$('.right').height();
    //             var hs = $(document).height();
    //             var b=$('footer').height();
    //             var sk=hs-b-h;
    //             if(t>=230){
    //                 $('.right').css({'position':'fixed','right':'50%','top':'20px','margin-right':'-600px'});
    //             }
    //             if(t<230){
    //                 $('.right').css('position','initial');
    //             }
    //             if((t+h)>=(hs-b)){
    //                 let l=t;
    //                 $('.right').css({'position':'absolute','top':sk-220,'right':0,'margin':0})
    //             }
    //         })



	function set(){
                var h=$('.content .box .left').height();
                if(h<1000){
                    $('.content').height(1500);
                }else{
                    $('.content').height(h+100);
                }
            }
            setTimeout(set,2000);
	var h=$('.content .box .left').height();
            if(h<1000){
                $('.content').height(1500);
            }else{
                 $('.content').height(h+100);
            }
            $('#find').on('click',function(){
                $('#bname').submit();
            })
            $('#map').on('click',function(){
                window.location.href="<?php echo url('home/index/pmap'); ?>";
            })
        })
    </script>
</body>
</html>