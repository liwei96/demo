<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\php\PHPTutorial\WWW\tp\public/../application/home\view\content\content.html";i:1565336322;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="家园新房为您提供<?php echo $data['building_name']; ?>售楼电话，价格，户型图，动态以及楼盘周边服务和物业相关信息" />

    <meta name="keywords" content="<?php echo $data['keys']; ?>" />
    <title><?php echo $data['building_name']; ?>-家园新房-楼盘详情-动态</title>
    <script src="/static/home/js/echarts.min.js"></script> 
    <link rel="stylesheet" href="https://cache.amap.com/lbs/static/main1119.css"/>
    <link rel="stylesheet" href="/static/home/css/home.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_910507_r4xtt3p98p.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_910507_jtjljxhac2.css">
    <link rel="stylesheet" href="//cache.amap.com/lbs/static/main1119.css"/>
    <link rel="stylesheet" href="/static/home/css/css.css">
    <link rel="stylesheet" href="/static/home/css/newcss.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1329849_a342433cger.css">
    <style>
         @font-face {
        font-family: "myfont";
        font-style: normal;
        src: url(./fonts/msyhbd.ttf);
     }
        #container{
            width:1200px;
            height:500px;
            position: absolute;
        }
        #panel {
            top:40px;
            position: absolute;
            right:0;
            background-color: white;
            max-height: 92%;
            overflow-y: auto;
            width: 340px;
            border-bottom: solid 1px silver;
            border-left:none;
            border-right:none;
        }
        #list{
            right:0;
            position: absolute;
            background-color: white;
            max-height: 90%;
            overflow-y: auto;
            width: 340px;
            border: solid 1px silver;
        }
        #list ul{
            margin:0;
            padding:0;
        }
        #list ul li{
            list-style-type: none;
            float: left;
            text-align: center;
            line-height: 38px;
            width:70px;
            cursor: pointer;
        }



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
             margin-left:66px;
             margin-right: 11px;
             line-height: 80px;
         }
         .top-nav .register{
             margin-right:7px;
         }
         .top-nav img.jk{
             margin-left:58px;
         }
         .top-nav .user{
             color:#2DD264;
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
	.tan .weiter .t-bottom button{
	    margin-top:33px;
	}
	.tan .addre .t-bottom button{
	       margin-top:10px;
	}
         .tan .addre .t-bottom{
             height:260px;
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
	.house-detail .loupan-center .lou-detail{
		height:260px;
	}
	.house-detail .loupan-center .lou-detail .list-l, .house-detail .loupan-center .lou-detail .list-r{
		width:600px;
		height:290px;
	}
	.youhui-con .con-left .text p{
		width:700px;
		height:125px;
		overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
	}
	.boutique-ul3 ul li .name .name-price p{
		height:32px;
		overflow: hidden;
		text-overflow:ellipsis;
		white-space: nowrap;
		width:335px;
	}
	.detail-center .detail-title .title-list li{
		    background: #f5f5f5;
	}
	.detail-center .detail-title .title-list li.active{
		background:#EAF3FF;
        border-top:0;
	}



    /* 地图css */
    li{
        list-style:none;
    }
    *{
        padding:0;
        margin:0;
    }
        #panel {
            position: absolute;
            background-color: white;
            max-height: 76%;
            overflow-y: auto;
            top:99px;
            right: 10px;
            width: 420px;
        }
        #list{
            position: absolute;
            background-color: rgba(237,237,237,1);
            max-height: 76%;
            overflow-y: auto;
            top: 10px;
            right: 10px;
            width: 420px;
        }
        .bus{
            position: absolute;
            background-color:#fff;
            max-height: 90%;
            overflow-y: auto;
            top: 50px;
            right: 10px;
            width: 420px;
            
        }
        .bus ul{
              border-bottom:1px solid rgba(237,237,237,1);
              height:48px;
              width:380px;
              margin:0 auto;
        }
        .bus ul li{
            height:48px;
            float:left;
            padding-left: 10px;
            padding-right: 10px;
            line-height:48px;
            font-size:14px;
            font-family:'MicrosoftYaHei';
            font-weight:400;
            cursor:pointer;
        }
        #list ul{
            margin:0;
            padding:0;
        }
        #list ul li{
            list-style-type: none;
            float: left;
            text-align: center;
            line-height: 38px;
            width:70px;
            cursor: pointer;
        }
        #list ul li.active{
              border-top:2px solid rgba(28,182,79,1);
              background:#fff;
        }
        .ping{
            background-color: rgba(237,237,237,1);   
        }
         .amap_lib_placeSearch{
              border:none;
        }
        /*
        .amap_lib_placeSearch .poibox{
               border:none;
               min-height:85px;
               padding:0;
        } */
        .dian{
            font-size:14px;
            font-family:'MicrosoftYaHei';
            font-weight:400;
            color:rgba(28,182,79,1);
            line-height:20px;
            border-bottom:rgba(28,182,79,1) 1px solid;
        }

    </style>

	<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?230bc6d42c4b990e03d4981911da5ffe";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body>
        <nav class="top-nav">
                <div class="box">
                    <ul>
                        <li><a href="<?php echo url('home/index/index'); ?>">家园首页</a></li>
                        <li><a href="<?php echo url('home/search/index',['type'=>0]); ?>" class="active">楼盘查询</a></li>
                        <li><a href="<?php echo url('home/search/tuan',['type'=>0]); ?>">团购优惠</a></li>
                        <li><a href="<?php echo url('home/index/buy'); ?>">买房指南</a></li>
                        <li><a href="<?php echo url('home/news/index'); ?>">楼盘资讯</a></li>
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
            <div class="top-search">
                    <div class="top-search-center">
                            <div  class="top-search-top">
                                        <div class="logo"><img src="/static/home/imgs/logo.png"/></div>
                                        <div class="sel">
                                         <select name="" id="">
                                             <?php foreach($city as $v): ?>
                                                <option value=""><?php echo $v['area_name']; ?></option>
                                                <?php endforeach; ?>
                                         </select>
                                        </div>
                                         
                                             <div class="input-search">
                                                 <form id="bname" action="<?php echo url('home/search/index',['type'=>0]); ?>" method="post">
                                                 <input name="name" type="text" placeholder="请输入楼盘名称、地域">
                                               </form>
                                                  <a id="find" class="search-button" href="javascript:;">
                                                        <span class="iconfont icon-xiazai17"></span>
                                                        我要找房
                                                  </a>  
                                               
                                               
                                            </div></li>
                                            <a id="map" class="input-map"> <span class="iconfont icon-biaodiandidian"></span> 地图找房</a>
                                         
                             </div>  
                          <div  class="top-search-bot">
                            <ul class="top-search-list">
                                <?php foreach($hots as $v): ?>
                                    <li> <a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>"><?php echo $v['building_name']; ?></a></li>
                                    <?php endforeach; ?>
                                 
                            </ul> 
                        </div>
                    </div>
             </div>
    <div class="detail">
        <div class="detail-center">
            <div class="title-fixed">
                   <div  class="detail-title">
                       <div class="title" >  <i><?php echo $data['building_name']; ?></i><span><?php echo $data['building_xiaoshou']; ?></span></div>
                       <ul class="title-list">
                               <li class="active"> <a href=""><?php echo $data['building_zhuangxiu']; ?></a></li>
                               <li> <a href=""><?php echo $data['building_ditie']; ?></a></li>
                               <li> <a href=""><?php echo $data['building_xingshi']; ?></a></li>
				<?php foreach($data['building_tese'] as $v): ?>
                               <li> <a href=""><?php echo $v; ?></a></li>
				<?php endforeach; ?>
                       </ul>
                       <ul class="nav">
                            <li class="green lp-index"> <a href="javascript:;">楼盘主页</a></li>
                            <li  class="off lp-detail"> <a href="javascript:;">楼盘详情</a></li>
                            <li class="off lp-action"> <a href="javascript:;"> 楼盘动态</a></li>
                            <li class="off lp-main"> <a href="javascript:;">主力户型</a></li> 
                            <li class="off lp-pic"> <a href="javascript:;"> 楼盘相册</a></li>
                            <li class="off lp-nearby"> <a href="javascript:;">楼盘周边</a></li>
                            <li class="off  lp-free"> <a href="javascript:;">免费资料</a></li>
                            <li class="off lp-quest"> <a href="javascript:;">置业顾问</a></li>
                                        
                    </ul>
                   </div>
            </div>   

                   <div  class="detail-context">
                          
                           <div class="content">
                               <div class="contentlist" style="display:block;">
                                     
                                               <!-- 存放大图的容器-->
                                            <div class="big-mid">
                                                  <!-- 左侧轮播-->
                                               <div class="all">
                                                   <div class="top-img">
                                                       <div class="activeimg">
                                                           <?php foreach($xiaoimgs as $v): ?>
                                                           <img src="<?php echo $v['x_big']; ?>">
                                                           <?php endforeach; foreach($shiimgs as $v): ?>
                                                           <img src="<?php echo $v['s_big']; ?>">
                                                           <?php endforeach; foreach($yangimgs as $v): ?>
                                                           <img src="<?php echo $v['y_big']; ?>">
                                                           <?php endforeach; ?>
                                                       </div>
                                                     
                                                   </div>
                                                   <!-- 存放缩略图的容器-->
                                                   <div class="bot-img">
                                                       <ul>
                                                           <?php foreach($xiaoimgs as $k=>$v): ?>
                                                           <li <?php if($k==0): ?>class="active"<?php endif; ?>><img src="<?php echo $v['x_small']; ?>"> </li>
                                                           <?php endforeach; foreach($shiimgs as $k=>$v): ?>
                                                           <li><img src="<?php echo $v['s_small']; ?>"> </li>
                                                           <?php endforeach; foreach($yangimgs as $k=>$v): ?>
                                                           <li><img src="<?php echo $v['y_small']; ?>"> </li>
                                                           <?php endforeach; ?>
                                                       </ul>
                                                   </div>
                                               </div>
                                               <!--右侧价格-->
                                               <div class="detail-prise">
                                                   <ul>
                                                       <li><span>参考单价：</span><i><?php echo $data['danjia']; ?>元/m²起</i><a class="p1" data-v="最新变价通知" href="javascript:;"><img src="/static/home/imgs/zhu.png">最新变价通知</a></li>
                                                       <li><span>建筑面积：</span><i><?php echo $data['humianji']; ?>m²</i></li>
                                                       </li><span>楼盘户型：</span><i><?php echo $data['building_huxing']; ?> 、<?php echo $data['building_xingshi']; ?></i><a class="p2" href="javascript:;" data-v="详细楼盘户型"><img src="/static/home/imgs/sou.png">详细楼盘户型</a></li>
                                                       <li><span>开盘时间：</span><i><?php echo $data['kaitime']; ?></i><a class="p1" href="#" data-v="最新开盘通知"><img src="/static/home/imgs/voice.png">最新开盘通知</a></li>
                                                       <li><span>楼盘地址：</span><i><?php echo $data['building_address']; ?></i></li>
                                                       <li><span>最新预售许可证：</span><i>201904785</i><a class="p1" data-v="最新预售许可证" href="javascript:;"><img src="/static/home/imgs/sou.png">最新预售许可证</a></li>
                                                   </ul>
                                                   <div class="detail-tel">
                                                          <div class="tel" >
                                                              <h1><?php if(($data['city'] == '贵阳') OR ($data['city'] == '成都') OR ($data['city'] == '重庆')): ?>400-718-6686<?php else: ?>0571-82576775<?php endif; ?></h1>
                                                              <span>致电售楼处了解更多信息</span>
                                                          </div>
                                                         <div class="img"><img src="/static/home/imgs/tel.png" alt=""></div>
                                                   </div>
                                                   <div  class="detail-fuwu">
                                                       <div class="fuwu-l">
                                                               <h1>您预约、我接送</h1>
                                                               <p>1、提前3个小时预约，免费小车上门接送</p>
                                                               <p>2、可带家人一起参观多个热门楼盘</p>
                                                       </div>
                                                       <div class="fuwu-r">
                                                           <a class="p1" data-v="预约看房" href="javascript:;">预约看房</a>
                                                           <h6>已有<span><?php echo $data['id']; ?></span>人选择预约看房</h6>
                                                       </div>
                                                           
                                                   </div>
                                               </div>
                                           </div>
                                          
                                        
                               </div>
                                  
                           </div>
                   </div>
                   
        </div>

        
</div>
<!--l楼盘优惠-->
<div class="youhui">
       <img class="p1" data-v="我要优惠" src="/static/home/imgs/pc-you.gif" alt="">
</div>
 <!--l楼盘详情-->
 <div class="house-detail">
      <div class="loupan-center">
           <div class="lou-tit">
                   <h1 id="detail">楼盘详情</h1><a class="p2" href="javascript:;" data-v="获取最新楼盘详情">获取最新楼盘详情</a>
           </div>
           <div class="lou-detail">
                       <div class="list-l">
                               <ul>
                                       <li><span>楼盘名称 </span><i> <?php echo $data['building_name']; ?></i></li>
                                       <li><span>楼盘地址</span><i>   <?php echo $data['building_address']; ?></i></li>
                                       <li><span>建筑类型</span><i>  <?php echo $data['building_xingshi']; ?></i></li>
                                       <li><span>装修状况</span><i><?php echo $data['building_zhuangxiu']; ?></i></li>
                                       <li><span>物业费用  </span><i> <?php echo $data['wufei']; ?>元/m²</i></li>
                                       <li><span>开盘时间  </span><i> <?php echo $data['kaitime']; ?></i></li>
                                       <li><span>交房时间   </span><i><?php echo $data['jiaotime']; ?></i></li>
                                       
                                       
                                   </ul>
                       </div>
                       <div class="list-r">
                               <ul>
                                       <li><span>绿&nbsp;  化&nbsp;  率</span><i><?php echo $data['lvhua']; ?>%</i></li>
                                       <li><span>容&nbsp;  积&nbsp; 率</span><i> <?php echo $data['rongji']; ?></i></li>
                                       <li><span>车位情况</span><i> <?php echo $data['chewei']; ?></i></li>
                                       <li><span>户&nbsp;&nbsp;面&nbsp;&nbsp;积 </span><i><?php echo $data['humianji']; ?></i></li>
                                       <li><span>开&nbsp;&nbsp;发&nbsp;&nbsp;商</span><i> <?php echo $data['kaifa']; ?></i></li>
                                       <li><span>物业公司   </span><i><?php echo $data['wuye']; ?></i></li>
                                       
                                   </ul>
                       </div>
            </div>
            <div class="loupan-bot">
                  <span>项目简介: </span>
                   <p><?php echo $data['introduce']; ?></p>

           </div>
      </div>
 </div>
    <!--主力户型-->
    <div class="house-layout house-layout-center">
        <div class="house-la-cen">
              <h3>主力户型</h3>
              <p class="select">全部 (8)</p>
              <div class="h-box">
                    <ul class="huxing">
                            <?php foreach($huimgs as $v): ?>
                            <li>
                                 <div class="hu-pic">
                                        <img src="<?php echo $v['h_big']; ?>"/>
                                 </div>
                                 <div class="hu-content">
                                     <div class="tit01">
                                        <span><?php echo $v['content']; ?>   建面<?php echo $v['mian']; ?>m²</span>
                                        <a href="">在售</a>
                                        <i><?php echo $v['jia']; ?>万起</i>
                                     </div>
                                     <div class="tit02">
                                            <span>特点：<?php echo $v['te']; ?></span>
                                            <i>类型：<?php echo $v['lei']; ?></i>
                                            <a class="p2" data-v="领取高清户型图" href="javascript:;" >了解户型详情</a>
                                     </div>
                                    <p>
                                            户型分析：<?php echo $v['fen']; ?>。
                                    </p>
            
                                 </div>
            
                            </li>
                            <?php endforeach; ?>
                            
                        </ul>
              </div>
              
              
              <a href="javascript:;" class="more">查看更多</a>
        </div>
    </div>
  




    <!--楼盘动态-->
 <div class="dong action-center">
    <div  class="dong-cen">
            <h3>楼盘动态<span class="d-c-more">查看更多</span></h3>

        <div class="m-dong ">
            <div class="m-tai m-d">
                <?php foreach($dongs as $v): ?>
            <h4><img src="/static/home/imgs/dt.png" alt=""/><?php echo $data['building_name']; ?>最新房源动态<span><?php echo $v['create_time']; ?></span></h4>
            <p><?php echo $v['introduce']; ?></p>
                <?php endforeach; ?>
            </div>
        
            <div class="m-d-jia m-d">
            <h4><img src="/static/home/imgs/jf.png" alt="">预计交房时间：<?php echo $data['jiaotime']; ?></h4>
            
            </div>
        
            <div class="m-d-jiao m-d">
                <?php foreach($jia as $v): ?>
            <h4><img src="/static/home/imgs/jt.png" alt="">最新加推时间：<?php echo $v['create_time']; ?><span><?php echo $v['create_time']; ?></span></h4>
            <p><?php echo $v['introduce']; ?></p >
                <?php endforeach; ?>
            </div>
            <div class="m-d-shou m-d">
            <h4><img src="/static/home/imgs/sk.png" alt="">首开时间：<?php echo $data['kaitime']; ?></h4>
            </div>

            <div class="m-d-na m-d">
            <h4><img src="/static/home/imgs/nd.png" alt="">拿地时间：<?php echo $data['n_time']; ?></h4>
            </div>
            <div class="zhu">
                <div class="t-o o1"></div>
                <div class="t-o o2"></div>
                <div class="t-o o3"></div>
                <div class="t-o o4"></div>
                <div class="t-o o5"></div>
                <div class="t-l l1"></div>
                <div class="t-l l2"></div>
                <div class="t-l l3"></div>
                <div class="t-l l4"></div>
                
            </div>
           
            <a href="javascript:;" class="more-dong p1" data-v="订阅楼盘动态">订阅楼盘动态</a>

        </div>
    </div>
</div>
   <!--对比分析资料-->
<div class="zi-bi map-center">
    <div class="zi-bi-cen">
            <h3>对比分析资料</h3>
           <div class="zi-pic">
                <img src="/static/home/imgs/pc-db.png" alt=""/>
           </div>
           <div class="zi-rig">
                <div class="zi-tou">
                     <h4>投资分析</h4>
                    <ul>
                        <li>1.<?php echo $tou['cone']; ?></li>
                        <li>2.<?php echo $tou['ctwo']; ?></li>
                    </ul>
                </div>
                <div class="zi-tou">
                        <h4>宜居分析</h4>
                        <ul>
                            <li>1.<?php echo $yi['cone']; ?></li>
                            <li>2.<?php echo $yi['ctwo']; ?></li>
                        </ul>
               </div>
               <div class="zi-get">
                     <a href="javascript:;" class="get-btn p2" data-v="免费领取资料">获取分析资料</a>
               </div>
          </div>
    </div>
</div>
   <!--楼盘地图免费领-->
   <div class="map-ling">
        <div class="map-ling-cen">
                <h3>楼盘地图免费领</h3> 
               <div class="map-img">
                    <img src="/static/home/imgs/pc-map.png" alt=""/>
               </div>
               <div class="map-rigs">
                    <div class="quest-top">
                         <h4>为什么大家在准备买房的时候领一份资料？</h4>
                        <ul>
                            <li>1.没领地图，许多人后悔买错了房子</li>
                            <li>2.领地图可以给想买房的朋友</li>
                            <li>3.没领地图，一天只能看3个楼盘，领地图可以看7个楼盘</li>
                            <li>4.楼盘价格走势及商业分析报告相关资料</li>
                        </ul>
                    </div>
                   <div class="map-get">
                         <a href="javascript:;" class="get-btn p2" data-v="免费领取地图">免费领取地图</a>
                   </div>
              </div>
        </div>
    </div>




<!--地图及分析资料-->
  <div class="map">
       <div class="map-center">
            
            <div class="map-mid">
                   
                   <div class="map-rig">
                       <div class="top-jia">
                            <div class="tit">
                                    <h4>查询最新真实成交价</h4> 
                                    <span>已有<i>147</i>人查询</span>
                            </div>
                            <div id="chart" style="width:320px;height:200px;margin-left:20px"></div>
                            <div class="tab">
                                <table  width="320" border="1">
                                  <thead>
                                      <tr>
                                          <th>日期</th>
                                          <th>成交套数</th>
                                          <th>成交金额</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                        <?php foreach($all as $v): ?>
                                        <tr>
                                            <td><?php echo $v[0]; ?></td>
                                            <td><?php echo $v[1]; ?>套</td>
                                            <td><?php echo $v[2]; ?>万</td>
                                        </tr>
                                        <?php endforeach; ?>
                                    
                                  </tbody>
                                </table>
                            </div>
                            <a href="javascript:;" data-v="获取最新成交价" class="bao-name p1">获取最新成交价</a>
                       </div>
                        <div class="people">
                            <h4>高级置业顾问</h4>
                        <div class="name"> 
                            <div class="zi-pic">
                                <img src="/static/home/imgs/people.png" alt="">
                            </div>
                            <div class="zi-name">
                                    <div class="zi-name-left">
                                            <ul>
                                                <li>李胜斌</li>
                                                <li>评分5.0分</li>
                                            </ul>
                                            <div class="zixun">
                                                <a href="javascript:;" class="p1" data-v="咨询服务"><img style="
                                                    width: 16px;
                                                    height: 16px;margin-right:8px;
                                                " src="/static/home/imgs/m-zx.png">向她咨询</a>
                                            </div>
                                    </div>
                                     <p>我带看过本房，清楚本房特色</p>     
                            </div>
                        </div>
                       </div>
                   </div>
           </div>
       </div>
   </div>

  
  
    <!--楼盘相册-->
    <div class="house-photo house-photo-center">
           <div class="house-photo-center">
               <div class="photo-small">
                   <div class="photo-tit">
                           <h1 id="pic">楼盘相册</h1><a class="p2" data-v="获取更多高清图" href="#">获取更多高清图</a>
                   </div>
                   <div class="photo-pic">
                           <ul class="nav2">
                               <li class="green2" data-v="x"> <a href="javascript:;">效果图</a></li>
                               <li  class="off2" data-v="s"> <a href="javascript:;">实景图</a></li>
                               <li class="off2" data-v="y"> <a href="javascript:;"> 样板房</a></li>
                               <li class="off2" data="p"> <a href="javascript:;">配套图</a></li> 
                               <li class="off2" data="p"> <a href="javascript:;">交通图</a></li> 
                           </ul>
                           <div class="content2">
                               <div class="contentlist2" style="display:block;">
                                   <div class="layout2-pic">
                                       <div class="boutique2-ul">
                                           <ul class="ul2-long">
                                               <!-- <a href="javascript:;"> -->
                                                   <?php foreach($xiaoimgs as $v): ?>
                                                   <li>
                                                       <div class="house2-pic">
                                                           <img src="<?php echo $v['x_big']; ?>"/>
                                                       </div>
                                                      
                                                   </li>
                                                   <?php endforeach; ?>
                                                       
                                                  
                                                 
                                                 
                                                <!-- </a> -->
                                           </ul>
                                          
                                      </div>
                                        <button class="leftBtn2"  >  <img src="/static/home/imgs/left.png"/></button>
                                        <button class="rightBtn2" >  <img src="/static/home/imgs/right.png"/></button>
                                   </div>
                               </div>
                               <div class="contentlist2" style="display:none;">
                                       <div class="layout2-pic">
                                               <div class="boutique2-ul">
                                                   <ul class="ul2-long">
                                                       <!-- <a href="javascript:;"> -->
                                                           <?php foreach($shiimgs as $v): ?>
                                                           <li>
                                                               <div class="house2-pic">
                                                                   <img src="<?php echo $v['s_big']; ?>"/>
                                                               </div>
                                                              
                                                           </li>
                                                          <?php endforeach; ?>
                                                          
                                                         
                                                         
                                                        <!-- </a> -->
                                                   </ul>
                                                  
                                              </div>
                                                <button class="leftBtn2 l2"  >  <img src="/static/home/imgs/left.png"/></button>
                                                <button class="rightBtn2 r2" >  <img src="/static/home/imgs/right.png"/></button>
                                           </div>
                               </div>
                               <div class="contentlist2" style="display:none;">
                                       <div class="layout2-pic">
                                               <div class="boutique2-ul">
                                                   <ul class="ul2-long">
                                                       <!-- <a href="javascript:;"> -->
                                                           <?php foreach($yangimgs as $v): ?>
                                                           <li>
                                                               <div class="house2-pic">
                                                                   <img src="<?php echo $v['y_big']; ?>"/>
                                                               </div>
                                                              
                                                           </li>
                                                           <?php endforeach; ?>
                                                          
                                                         
                                                         
                                                        <!-- </a> -->
                                                   </ul>
                                                  
                                              </div>
                                                <button class="leftBtn2 l3"  >  <img src="/static/home/imgs/left.png"/></button>
                                                <button class="rightBtn2 r3" >  <img src="/static/home/imgs/right.png"/></button>
                                           </div>
                               </div>
                               <div class="contentlist2" style="display:none;">
                                       <div class="layout2-pic">
                                               <div class="boutique2-ul">
                                                   <ul class="ul2-long">
                                                       <!-- <a href="javascript:;"> -->
                                                           <?php foreach($peiimgs as $v): ?>
                                                           <li>
                                                               <div class="house2-pic">
                                                                   <img src="<?php echo $v['p_big']; ?>"/>
                                                               </div>
                                                              
                                                           </li>
                                                          <?php endforeach; ?>
                                                          
                                                         
                                                         
                                                        <!-- </a> -->
                                                   </ul>
                                                  
                                              </div>
                                                <button class="leftBtn2 l4"  >  <img src="/static/home/imgs/left.png"/></button>
                                                <button class="rightBtn2 r4" >  <img src="/static/home/imgs/right.png"/></button>
                                           </div>
                               </div>
                               <div class="contentlist2" style="display:none;">
                                    <div class="layout2-pic">
                                            <div class="boutique2-ul">
                                                <ul class="ul2-long">
                                                    <!-- <a href="javascript:;"> -->
                                                        <?php foreach($jiaoimgs as $v): ?>
                                                        <li>
                                                            <div class="house2-pic">
                                                                <img src="<?php echo $v['j_big']; ?>"/>
                                                            </div>
                                                           
                                                        </li>
                                                       <?php endforeach; ?>
                                                       
                                                      
                                                      
                                                     <!-- </a> -->
                                                </ul>
                                               
                                           </div>
                                             <button class="leftBtn2 l5"  >  <img src="/static/home/imgs/left.png"/></button>
                                             <button class="rightBtn2 r5" >  <img src="/static/home/imgs/right.png"/></button>
                                        </div>
                            </div>
                           </div>
                   </div>
               </div>
           </div>
       </div>
  <!--楼盘点评-->
  <div class="talk">
        <div class="talk-cen">
                <h4>楼盘点评</h4>
                <?php foreach($pings as $v): ?>
            <div class="big-talk" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                <div class="left-talk">
                    <div class="head"><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1564661814898&di=ea578fb4c9f4eecfcd814ac0869796c8&imgtype=0&src=http%3A%2F%2Fb-ssl.duitang.com%2Fuploads%2Fitem%2F201508%2F04%2F20150804211608_KLFV2.jpeg" alt=""></div>
                    <div class="talk-list">
                        <div class="talk-time"><span><?php echo $v['tel']; ?></span> <i><?php echo $v['create_time']; ?></i></div>   
                        <p><?php echo $v['content']; ?></p>
                    </div>
                </div>
    
                <div class="rig-icon">
                        <input type="hidden" value="<?php echo $v['id']; ?>"><img class="p-t-g" data-v="<?php echo $v['num']; ?>" src="/static/home/imgs/good.png"><i><?php echo $v['num']; ?></i> 
                </div>
            </div>
            <?php endforeach; ?>
           
            <a href="javascript:;" class="btn p-btn"><span class="iconfont iconpinglun"></span>写评论</a>
    
        </div>
    </div>  



 
    <!--周边配套-->
    <div class="house-nearby house-nearby-center">
           <div class="house-nearby-center">
              
                   <div class="nearby-tit">
                           <h1 id="neary">周边配套</h1><a class="p1" data-v="获取详细售楼部位置" href="javascript:;">获取详细售楼部位置</a>
                   </div>
                   <div class="nearby-map">
                    <div id="container"></div>
                    <div id="map_box">
                        <div id="list">
                            <ul>
                                <li class=" active" id='2'>交通</li>
                                <li >教育</li>
                                <li >医疗</li>
                                <li >购物</li>
                                <li >生活</li>
                                <li >娱乐</li>
                            </ul>
                        </div>
                        <div class="bus">
                            <ul>
                                <li class="dian">公交站</li>
                                <li>地铁站</li>
                            </ul>
                        </div>
                        <div id="panel">
                        
                        </div>
                    </div>
                    
                     
                   </div>
               
           </div>   
   </div>        
   <!--相似楼盘-->
   <div class="house-like">
           <div class="house-like-center">
              
                   <div class="like-tit">
                           <h1>相似楼盘</h1><a class="p2" data-v="获取楼盘对比分析资料" href="javascript:;">获取楼盘对比分析资料</a>
                   </div>
                   <div class="like-pic">
                       <div class="boutique-ul3">
                           <ul class="ul3-long">
                               <!-- <a href="javascript:;"> -->
                                   <?php foreach($xiangs as $v): ?>
                                   <li>
                                       <a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>">
                                       <div class="house-pic">
                                           <img src="<?php echo $v['building_img']; ?>"/>
                                       </div>
                                       <div class="name">
                                           <div class="name-big">
                                              <span><?php echo $v['building_name']; ?></span>
                                              <i>均价<?php echo $v['danjia']; ?>元/m²</i>
                                           </div>  
                                           <div class="name-price">
                                             <p><span class="iconfont icon-biaodiandidian "></span><?php echo $v['building_address']; ?></p>

                                           </div> 
                                       </div>
                                    </a>
                                   </li>
                                    <?php endforeach; ?>
                                      
                                
                                
                                 
                                <!-- </a> -->
                           </ul>
                          
                      </div>
                        <button class="leftBtn3"  >  <img src="/static/home/imgs/left.png"/></button>
                        <button class="rightBtn3" >  <img src="/static/home/imgs/right.png"/></button>
                   </div>
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
                <input class="l-c" type="text" placeholder="请输入姓名">
                <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
                <button class="port1">确定</button>
            </div>
        </div>
        <div class="addre ts">
            <div class="t-top">
                <h6>专业服务</h6>
		<p>一键订阅，享受最专业的服务！</p>
                <img id="a-esc" src="/static/home/imgs/xx.png" alt="">
            </div>
            <div class="t-bottom">
                <input class="l-p" type="text" placeholder="请输入手机号">
                <input class="l-c" type="text" placeholder="请输入姓名">
                <input class="l-a" type="text" placeholder="请输入地址">
                <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
                <button class="port2">确定</button>
            </div>
        </div>
        <div class="succ">
            <div class="t-top">
                <img id="s_esc" src="/static/home/imgs/xx.png" alt="">
                <img class="gou" src="/static/home/imgs/gou.png" alt="">
            </div>
            <div class="t-bottom">
                <p id="txt">132133</p>
                <button class="s-btn">确定</button>
            </div>
        </div>
        <div class="pings">
            <div class="p-top">
                    发表一下您对我们楼盘的评价
                    <img class="p-p-esc" src="/static/home/imgs/xx.png" alt="">
            </div>
            <div class="p-bottom">
                <p>评论</p>
                <textarea name="" id="" cols="30" rows="10" placeholder="在此处写下您的评价"></textarea>
                <button class="f-b-p-l" data-v="<?php echo $data['id']; ?>">发表</button>
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

<script type="text/javascript" >  




          // 初始化图表标签
    var myChart = echarts.init(document.getElementById('chart'));
    var options={
        //定义一个标题
        legend:{
            data:['AI']
        },
        color: ['rgba(45,196,90,1)'],
        //X轴设置
        xAxis:[
            {
              type : 'category',
              data:['<?php echo $reallt[0]; ?>','<?php echo $reallt[1]; ?>','<?php echo $reallt[2]; ?>','<?php echo $reallt[3]; ?>','<?php echo $reallt[4]; ?>','<?php echo $reallt[5]; ?>','<?php echo $reallt[6]; ?>'],
              axisLine:{
                  lineStyle:{
                    color:'rgba(153,153,153,1)'
                  }  
            },
              axisLabel: {
                show: true,
                textStyle: {
                  color: 'rgba(153,153,153,1)'   //这里用参数代替了
                }
              },
            }
            
          ],
         
        yAxis:[{
            name: '单位：万',
            axisLabel: {
                show: true,
                textStyle: {
                  color:'rgba(153,153,153,1)'  //这里用参数代替了
                }
              },
              axisLine:{
                  lineStyle:{
                    color:'rgba(153,153,153,1)'
                  }  
            },
        }],
        series:[{
            name:'销量',
            type:'bar',
            data:[<?php echo $really[0]; ?>,<?php echo $really[1]; ?>,<?php echo $really[2]; ?>,<?php echo $really[3]; ?>,<?php echo $really[4]; ?>,<?php echo $really[5]; ?>,<?php echo $really[6]; ?>]
        }]
 
    };
    myChart.setOption(options);
</script> 
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?230bc6d42c4b990e03d4981911da5ffe";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
	
    <script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script src="/static/home/js/index.js"></script>
    <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.14&key=729ac4d779c7e625bc11bd5ba3ff3112"></script>
    <script type="text/javascript" src="https://cache.amap.com/lbs/static/addToolbar.js"></script>
    <script>
    


        $(document).ready(function(){
            $('.d-c-more').on('click',function(){
                window.location.href="<?php echo url('home/content/dongs',['id'=>$data['id']]); ?>"
            })
            $('.p-p-esc').on('click',function(){
                $('.pings').hide();
                $('.zhao').hide();
            })
            $('.more').on('click',function(){
                var hu=$('.huxing').height();
                $('.h-box').height(hu);
            })
            $('.p-btn').on('click',function(){
                $('.zhao').show();
                $('.pings').show(300);
            })
            $('.f-b-p-l').on('click',function(){
                var data=$(this).prev().val();
                var id=$(this).attr('data-v');
                $.post(
                    "<?php echo url('home/content/ping'); ?>",
                    {'content':data,'bid':id},
                    function(res){
                        if(res.code==200){
                            $('.pings').hide();
                            $('#txt').text('评论成功');
                                $('.succ').show();
                        }else{
                            $('.pings').hide();
                            $('.login').show();
                        }
                    }
                )
            })
            var cnm=1;
            $('.p-t-g').on('click',function(){
                var id=$(this).prev().val();
                var num=$(this).attr('data-v');
                num=parseInt(num);
                var that=$(this);
                if(cnm==1){
                    $.post(
                    "<?php echo url('home/content/num'); ?>",
                    {'type':1,'id':id,'num':num},
                    
                    function(res){
                        if(res.code==200){
                            that.attr('src','/static/home/imgs/gooded.png');
                            that.next().html((num+1));
                            that.attr('data-v',(num+1));
                            cnm=0;
                            }
                        }
                    )
                }else if(cnm==0){
                    $.post(
                    "<?php echo url('home/content/num'); ?>",
                    {'type':2,'id':id,'num':num},
                    
                    function(res){
                        if(res.code==200){
                            that.attr('src','/static/home/imgs/good.png');
                            that.next().html((num-1));
                            that.attr('data-v',(num-1));
                            cnm=1;
                            }
                        }
                    )
                }
                
            })
	function getBrowserInfo(){
        var ua = navigator.userAgent.toLocaleLowerCase();
        var browserType='谷歌';
        if (ua.match(/msie/) != null || ua.match(/trident/) != null) {
            browserType = "IE";
            browserVersion = ua.match(/msie ([\d.]+)/) != null ? ua.match(/msie ([\d.]+)/)[1] : ua.match(/rv:([\d.]+)/)[1];
        } else if (ua.match(/firefox/) != null) {
            browserType = "火狐";
        }else if (ua.match(/ubrowser/) != null) {
            browserType = "UC";
        }else if (ua.match(/opera/) != null) {
            browserType = "欧朋";
        } else if (ua.match(/bidubrowser/) != null) {
            browserType = "百度";
        }else if (ua.match(/metasr/) != null) {
            browserType = "搜狗";
        }else if (ua.match(/tencenttraveler/) != null || ua.match(/qqbrowse/) != null) {
            browserType = "QQ";
        }else if (ua.match(/maxthon/) != null) {
            browserType = "遨游";
        }else if (ua.match(/chrome/) != null) {
            var is360 = _mime("type", "application/vnd.chromium.remoting-viewer");
            function _mime(option, value) {
                var mimeTypes = navigator.mimeTypes;
                for (var mt in mimeTypes) {
                    if (mimeTypes[mt][option] == value) {
                        return true;
                    }
                }
                return false;
            }
            if(is360){
                browserType = '360';
            }else{
                $('html').css("zoom",".80");
            }
        }else if (ua.match(/safari/) != null) {
            browserType = "Safari";
        }
        return browserType;
}	   

	function qudao(){
        var qu='自然进客';
            if(document.referrer.indexOf("baidu")!=-1){
                qu='百度';
            }
	   
            return qu;
        }
	   $('.p3').on('click',function(){
                var type=$(this).attr('data-v');
                var building_name=$(this).attr('data-name');
                var tel=$(this).prev().val();
                var pattern_tel = /^1[3-9][0-9]{9}$/;
				if (tel == '') {
					$(this).prev().val('')
                    $(this).prev().attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_tel.test(tel)) {
					$(this).prev().val('')
					$(this).prev().attr('placeholder','手机号码不合法');
					return;
				} 
		var brower=getBrowserInfo();
		var sd=qudao();
                var data={
                        'type':type,
                        'phone':tel,
                        'name':'',
                        'building_name':building_name,
		      'brower':brower,
		      'qu':sd
                    };
                
                $.post(
                    "<?php echo url('home/content/port1'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                                $('.zhao').show();
                                $('#txt').text('请注意手机，资料会很快到您手中');
                                $('.succ').show();
                        }
                    }
                )
            })
            $('.p2').on('click',function(){
                window.type=$(this).attr('data-v');
                if(type=="详细楼盘户型"){
                    $('.addre .t-top h6').html(type);
		  $('.addre .t-top p').html('一键咨询，了解楼盘详细户型！');
                }else if(type=="获取最新楼盘详情"){
                    $('.addre .t-top h6').html(type);
		  $('.addre .t-top p').html('一键订阅楼盘最新详情，楼盘详情早知道！');
                }else if(type=="免费领取地图"){
                    $('.addre .t-top h6').html(type);
		  $('.addre .t-top p').html('一键免费领取地图，楼盘随心看！');
                }else if(type=="领取高清户型图"){
                    $('.addre .t-top h6').html(type);
		  $('.addre .t-top p').html('一键领取高清户型图，真实户型早知道！');
                }else if(type=="获取更多高清图"){
                    $('.addre .t-top h6').html(type);
		  $('.addre .t-top p').html('一键领取高清图，楼盘图片清晰看！');
                }else if(type=="免费领取资料"){
                    $('.addre .t-top h6').html(type);
		  $('.addre .t-top p').html('一键获取楼盘对比分析资料，好楼盘早知道！');
                }
                $('.addre').show();
                $('.zhao').show();
            })
            $('.port2').on('click',function(){
                var building_name=$(this).prev().val();
                var address=$(this).prev().prev().val();
                var name=$(this).prev().prev().prev().val();
                var tel=$(this).prev().prev().prev().prev().val();
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
		var brower=getBrowserInfo();
		var sd=qudao();
                var data={
                    'phone':tel,
                    'type':type,
                    'name':name,
                    'building_name':building_name,
                    'address':address,
		  'brower':brower,
		  'qu':sd
                }
                var that=$(this)
                $.post(
                    "<?php echo url('home/content/port2'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            that.parent().parent().hide();
                                $('#txt').text('请注意电话，资料会很快到您手中');
                                $('.succ').show();
                        }
                    },
                    'json'
                )
            })
            $('.p1').on('click',function(){
                window.type=$(this).attr('data-v');
                if(type=="最新变价通知"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键订阅最新变价通知，不再错过变价信息哦！');
                }else if(type=="最新开盘通知"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键订阅最新开盘通知,不再错过开盘信息哦！');
                }else if(type=="预约看房"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键预约看房免费小车上门接送，可带家人一起参观多个热门楼盘 ');
                }else if(type=="我要优惠"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键领取，享受超额优惠!');
                }else if(type=="咨询服务"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('立即报名，专业人员为你解惑!');
                }else if(type=="订阅楼盘动态"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键订阅楼盘动态,最新动态抢先知！');
                }else if(type=="获取详细售楼部位置"){
                    $('.weiter .t-top h6').html('获取售楼部位置');
                    $('.weiter .t-top p').html('立即向售楼人员咨询详细位置');
                }else if(type=="最新预售许可证"){
                    $('.weiter .t-top h6').html('了解最新预售许可证');
                    $('.weiter .t-top p').html('向售楼人员咨询最新许可证');
                }else if(type=="获取最新成交价"){
                    $('.weiter .t-top h6').html('获取最新成交价');
                    $('.weiter .t-top p').html('向售楼人员咨询最新成交价');
                }
                $('.weiter').show();
                $('.zhao').show();
                
            })
            $('.port1').on('click',function(){
                var building_name=$(this).prev().val();
                var name=$(this).prev().prev().val();
                var tel=$(this).prev().prev().prev().val();
                var pattern_tel = /^1[3-9][0-9]{9}$/;
				if (tel == '') {
					$(this).prev().prev().prev().val('')
                    $(this).prev().prev().prev().attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_tel.test(tel)) {
					$(this).prev().prev().prev().val('')
					$(this).prev().prev().prev().attr('placeholder','手机号码不合法');
					return;
				} 
		var brower=getBrowserInfo();
		var qu=qudao();
                var data={
                    'phone':tel,
                    'type':type,
                    'name':name,
                    'building_name':building_name,
		  'brower':brower,
		  'qu':qu
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
            $('#find').on('click',function(){
                $('#bname').submit();
            })
            $('#map').on('click',function(){
                window.location.href="<?php echo url('home/index/pmap'); ?>";
            })
            $('#a-esc').on('click',function(){
                $('.addre').hide();
                $('.zhao').hide();
            })
            $('#l-esc').on('click',function(){
                $('.login').hide();
                $('.zhao').hide();
                })
            $('.zhao').on('click',function(){
                $(this).hide();
                $('.login').hide();
                $('.weiter').hide();
                $('.succ').hide();
                $('.addre').hide();
                $('.pings').hide();
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

                var time=3;
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
                            alert('发送成功');
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
        })
        var nav=document.querySelector('.nav2');
        var btns2=nav.children;
        var content=document.querySelector('.content2');
                var pps2=content.children;
        for(var i = 0; i<btns2.length;i++){
            btns2[i].index = i;
            btns2[i].onclick = function(){
            for(var j = 0; j < btns2.length; j++){
                btns2[j].className="off2";
                pps2[j].style.display="none"; 
            }
            this.className = "green2";
            pps2[this.index].style.display="block";
          
        }
      }
      
       //轮播切换

       $('.rightBtn').eq(0).click(function(){
            var speed=257;
        if(
            parseInt($('.ul-long').eq(0).css("left"))  <=  -1542
         ){
            speed=0 
         }

        //   console.log($('.ul-long').eq(0));
         $('.ul-long').eq(0).animate({
           left:parseInt( $('.ul-long').eq(0).css("left"))-speed+'px'
         },200)
        
        //   console.log( $('.ul-long').eq(0).css("left"));
     })


     $('.leftBtn').eq(0).click(function(){
         
        
        var speed=257;
        if(
            parseInt($('.ul-long').eq(0).css("left"))>=-1
         ){
            speed=0 
         }
        //  console.log(speed);
         $('.ul-long').eq(0).animate({
           left:parseInt( $('.ul-long').eq(0).css("left"))+speed+'px'
         },200)
        
        //  console.log( $('.gongyingshang').eq(0).css("left"));
     })
   //轮播切换02
   $('.rightBtn2').eq(0).click(function(){
            var speed=256;
        if(
            parseInt($('.ul2-long').eq(0).css("left"))  <=  -1280
         ){
            speed=0 
         }

        //   console.log($('.ul-long').eq(0));
         $('.ul2-long').eq(0).animate({
           left:parseInt( $('.ul2-long').eq(0).css("left"))-speed+'px'
         },200)
        
        //    console.log( $('.ul2-long').eq(0).css("left"));
     })


     $('.leftBtn2').eq(0).click(function(){
         
        
        var speed=256;
        if(
            parseInt($('.ul2-long').eq(0).css("left"))>=-1
         ){
            speed=0 
         }
        //  console.log(speed);
         $('.ul2-long').eq(0).animate({
           left:parseInt( $('.ul2-long').eq(0).css("left"))+speed+'px'
         },200)
        
        //  console.log( $('.gongyingshang').eq(0).css("left"));
     })
	$('.r2').eq(0).click(function(){
            var speed=256;
        if(
            parseInt($('.ul2-long').eq(0).css("left"))  <=  -1280
         ){
            speed=0 
         }

        //   console.log($('.ul-long').eq(0));
         $('.ul2-long').eq(1).animate({
           left:parseInt( $('.ul2-long').eq(1).css("left"))-speed+'px'
         },200)
        
        //    console.log( $('.ul2-long').eq(0).css("left"));
     })


     $('.l2').eq(0).click(function(){
         
        
        var speed=256;
        if(
            parseInt($('.ul2-long').eq(1).css("left"))>=-1
         ){
            speed=0 
         }
        //  console.log(speed);
         $('.ul2-long').eq(1).animate({
           left:parseInt( $('.ul2-long').eq(1).css("left"))+speed+'px'
         },200)
        
        //  console.log( $('.gongyingshang').eq(0).css("left"));
     })
     $('.r3').eq(0).click(function(){
            var speed=256;
        if(
            parseInt($('.ul2-long').eq(2).css("left"))  <=  -1280
         ){
            speed=0 
         }

        //   console.log($('.ul-long').eq(0));
         $('.ul2-long').eq(2).animate({
           left:parseInt( $('.ul2-long').eq(2).css("left"))-speed+'px'
         },200)
        
        //    console.log( $('.ul2-long').eq(0).css("left"));
     })


     $('.l3').eq(0).click(function(){
         
        
        var speed=256;
        if(
            parseInt($('.ul2-long').eq(2).css("left"))>=-1
         ){
            speed=0 
         }
        //  console.log(speed);
         $('.ul2-long').eq(2).animate({
           left:parseInt( $('.ul2-long').eq(2).css("left"))+speed+'px'
         },200)
        
        //  console.log( $('.gongyingshang').eq(0).css("left"));
     })
     $('.r4').eq(0).click(function(){
            var speed=256;
        if(
            parseInt($('.ul2-long').eq(3).css("left"))  <=  -1280
         ){
            speed=0 
         }

        //   console.log($('.ul-long').eq(0));
         $('.ul2-long').eq(3).animate({
           left:parseInt( $('.ul2-long').eq(3).css("left"))-speed+'px'
         },200)
        
        //    console.log( $('.ul2-long').eq(0).css("left"));
     })


     $('.l4').eq(0).click(function(){
         
        
        var speed=256;
        if(
            parseInt($('.ul2-long').eq(3).css("left"))>=-1
         ){
            speed=0 
         }
        //  console.log(speed);
         $('.ul2-long').eq(3).animate({
           left:parseInt( $('.ul2-long').eq(3).css("left"))+speed+'px'
         },200)
        
        //  console.log( $('.gongyingshang').eq(0).css("left"));
     })


     $('.r5').eq(0).click(function(){
            var speed=256;
        if(
            parseInt($('.ul2-long').eq(4).css("left"))  <=  -1280
         ){
            speed=0 
         }

        //   console.log($('.ul-long').eq(0));
         $('.ul2-long').eq(4).animate({
           left:parseInt( $('.ul2-long').eq(4).css("left"))-speed+'px'
         },200)
        
        //    console.log( $('.ul2-long').eq(0).css("left"));
     })


     $('.l5').eq(0).click(function(){
         
        
        var speed=256;
        if(
            parseInt($('.ul2-long').eq(4).css("left"))>=-1
         ){
            speed=0 
         }
        //  console.log(speed);
         $('.ul2-long').eq(4).animate({
           left:parseInt( $('.ul2-long').eq(4).css("left"))+speed+'px'
         },200)
        
        //  console.log( $('.gongyingshang').eq(0).css("left"));
     })






       //轮播切换03
   $('.rightBtn3').eq(0).click(function(){
            var speed=375;
        if(
            parseInt($('.ul3-long').eq(0).css("left"))  <=  -2250
         ){
            speed=0
         }

        //   console.log($('.ul-long').eq(0));
         $('.ul3-long').eq(0).animate({
           left:parseInt( $('.ul3-long').eq(0).css("left"))-speed+'px'
         },200)
        
        //    console.log( $('.ul3-long').eq(0).css("left"));
     })


     $('.leftBtn3').eq(0).click(function(){
         
        
        var speed=375;
        if(
            parseInt($('.ul3-long').eq(0).css("left"))>=-1
         ){
            speed=0 
         }
        //  console.log(speed);
         $('.ul3-long').eq(0).animate({
           left:parseInt( $('.ul3-long').eq(0).css("left"))+speed+'px'
         },200)
        
        //  console.log( $('.gongyingshang').eq(0).css("left"));
     })

     //百度地图
   
     var map = new AMap.Map("container", {
        resizeEnable: true,
        zoom:15
    });
    function addMarker() {
        marker = new AMap.Marker({
            icon: "https://a.amap.com/jsapi_demos/static/demo-center/icons/poi-marker-default.png",
            position: [120.144306,30.318731],
            offset: new AMap.Pixel(-13, -30)
        });
        marker.setMap(map);
    }
    addMarker();
    AMap.service(["AMap.PlaceSearch"], function() {
        //构造地点查询类
        var placeSearch = new AMap.PlaceSearch({ 
            pageSize: 10, // 单页显示结果条数
            pageIndex: 1, // 页码
            city: "", // 兴趣点城市
            citylimit: true,  //是否强制限制在设置的城市内搜索
            map: map, // 展现结果的地图实例
            panel: "panel", // 结果列表将在此容器中进行展示。
            autoFitView: true // 是否自动调整地图视野使绘制的 Marker点都处于视口的可见范围
        });
        
        var cpoint = [120.144306,30.318731]; //中心点坐标
        var p2=[120.144496,30.318836];
        var s=AMap.GeometryUtil.distance(cpoint, p2);
        console.log(s);
        placeSearch.searchNearBy('公交', cpoint, 2000, function(status, result) {
            console.log(result);
        });
        $(document).ready(function(){
        $('#list ul li').on('click',function(){
            $(this).addClass('active');
		   $(this).siblings().removeClass('active');
        
        console.log( $(this).attr('id'));
            if($(this).attr('id')==2){
                $(".bus").css("display","block");
                $('#panel').css('top',99)
            }else{
                $(".bus").css("display","none");
                $('#panel').css('top',50)
                placeSearch.searchNearBy($(this).html(), cpoint, 2000, function(status, result) {
        });
            }
            

        });

        $('.bus ul li').on('click',function(){
            console.log(1);
            $(this).addClass('dian');
		   $(this).siblings().removeClass('dian');
           placeSearch.searchNearBy($(this).html(), cpoint, 2000, function(status, result) {
             });
        })
    })
    });
                                
           //右侧聊天框
           
		window.onscroll=function(){
                   
		}
		
		
        
        // 顶部悬浮
       $(function(){
  window.onscroll=function(){
    var top1 =document.documentElement.scrollTop||document.body.scrollTop;//浏览器兼容
                // var top1=document.body.scrollTop;
                console.log(top1);
                if(top1<=1600){
                    $(".map-rig").css("position","absolute").css({"top":'-2080px',"right":"-3%",'margin':0});    
                }
                else if(top1>=1600&&top1<=3880){
                    $(".map-rig").css("position","fixed").css(
                        {"top":190,
                        "right":'48%','margin-right':'-600px'}
                );   
            }      
                else if(top1>=3880){
                    $(".map-rig").css("position","absolute").css( {
                        "top":208,
                        "right":"-3%",'margin':0});     
            }   







            var top=document.documentElement.scrollTop||document.body.scrollTop;
            if(top>=244){
               $('.title-fixed').css({
                   'position':'fixed',
               })
            }else {
                $('.title-fixed').css({
                   'position':'relative'
               })
            }
        }
        })
        
       var nav=document.querySelector('.nav');
        var btns1=nav.children;
       
        for(var i = 0; i<btns1.length;i++){
            btns1[i].index = i;
            btns1[i].onclick = function(){
            for(var j = 0; j < btns1.length; j++){
                btns1[j].className="off";
               
            }
            this.className = "green";
          
          
        }
      }

       //导航点击定位
       var top11=$('.detail-center').offset().top
            var sctop1=top11-180
            $('.lp-index').click(function(){$('html,body').animate({scrollTop:sctop1}, 800);});  

            var top2=$('.loupan-center').offset().top
            var sctop2=top2-180
            $('.lp-detail').click(function(){$('html,body').animate({scrollTop:sctop2 }, 800);});

            var top3=$('.action-center').offset().top
            var sctop3=top3-180
            $('.lp-action').click(function(){$('html,body').animate({scrollTop:sctop3}, 800);});

            var top4=$('.house-layout-center').offset().top
            var sctop4=top4-180
            $('.lp-main').click(function(){$('html,body').animate({scrollTop:sctop4}, 800);});

            var top5=$('.house-photo-center').offset().top
            var sctop5=top5-180
            $('.lp-pic').click(function(){$('html,body').animate({scrollTop:sctop5}, 800);});

            var top6=$('.house-nearby-center').offset().top
            var sctop6=top6-180
            $('.lp-nearby').click(function(){$('html,body').animate({scrollTop:sctop6}, 800);});

            var top7=$('.map-center').offset().top
            var sctop7=top7-180
            $('.lp-free').click(function(){$('html,body').animate({scrollTop:sctop7}, 800);});

            var top8=$('.map-center').offset().top
            var sctop8=top8-180
            $('.lp-quest').click(function(){$('html,body').animate({scrollTop:sctop8}, 800);});
            

    </script>
</html>