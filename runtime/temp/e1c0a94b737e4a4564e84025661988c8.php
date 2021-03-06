<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"G:\jiayuan\tp2\public/../application/home\view\content\detail.html";i:1574837881;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>详情页面</title>
    <link rel="stylesheet" href="/static/home/css/comm.css">
    <link rel="stylesheet" href="/static/home/css/newcss.css">
    <link rel="stylesheet" href="/static/home/css/detail.css">
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_1416845_r9dt4y7kjwo.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_910507_r4xtt3p98p.css">  
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1416845_5clnzcbz3h5.css">
    <style>
        .tan .zhao{
            display: none;
            width:100%;
            background-color: #000000;
            opacity: 0.4;
            position: fixed;
            top:0;
            z-index: 20000;
            left: 0;
            height:1000px;
         }
        .tan .ts{
            display:none;
            width:500px;
            height:380px;
            border-radius: 20px;
            position: fixed;
            top:300px;
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
             height:150px;
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
             height:310px;
         }
         .tan .ts .t-bottom input{
             width:400px;
             border:1px solid rgba(238,238,238,1);
             display: block;
             margin-left:40px;
             padding-bottom: 14px;
             padding-top:14px;
             margin-bottom: 12px;
             color:#4D4D4D;
             font-size: 24px;
             padding-left:20px;
             border-radius: 4px;
         }
         .tan .ts .t-bottom .t-b-second .t-b-scode{
             width:80px;
             height:26px;
             background-color: #fff;
             border:1px solid #2DD264;
             color:#2DD264;
             font-size: 14px;
             text-align: center;
             line-height: 26px;
             border-radius: 0;
             position:absolute;
             right:40px;
             bottom:140px;
         }
         .tan .ts .t-bottom .t-b-second p{
             color:#808080;
             font-size: 14px;
             margin-bottom:15px;
             margin-top:-15px;
             margin-left:40px;
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

        
        .tan .ts .t-bottom button{
            width:300px;
            height:44px;
            margin-left:100px;
            margin-top:0;
            background-color:#F0F5F2;
            font-size: 16px;
            color:#3AC869;
            text-align: center;
            line-height: 44px;
            border:0px;
            border-radius: 6px;
        }
        .tan .ts .t-bottom .t-b-btn{
            width:300px;
            height:44px;
            background:rgba(240,245,242,1);
            border-radius:4px;
            font-size: 16px;
            color:#3AC869;
            margin-left:90px;
            text-align: center;
            line-height: 44px;
            margin-top:16px;
        }
        .tan .ts .t-bottom .t-b-first{
            display: block;
        }
        .tan .ts .t-bottom .t-b-second{
            display: none;
        }
        .top-search-center .top-search-left .sel select{
              margin-top:0!important;
        }
        .top-search-center .top-search-left .sel{
               border-left:none!important;
        }
    </style>

</head>
<body>
<!-- 头部导航 -->
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
                    <div class="login-box">
                        <div class="login-btn">
                                <span class="iconfont iconwode"></span>
                                注册/登录
                        </div>
                        <p>购房热线  &nbsp;400-718-6686</p>
                    </div>
                    <!-- <?php if(\think\Session::get('user')): ?>
                    <img class="jk" src="/static/home/imgs/icon-5.png" alt="">
                    <span class="user"><?php echo \think\Session::get('user.p'); ?></span>
                    <span class="logout">退出</span>
                    <?php else: ?>
                    <img src="/static/home/imgs/icon-5.png" alt="">
                    <span class="register">注册/登录</span>
                    <?php endif; ?> -->
                   
                </div>
                
                
        </nav>
 <!-- 搜索 -->
 <div class="top-search">
        <div class="top-search-center">
                <div  class="top-search-left">
                            <div class="logo"><img src="/static/home/imgs/logo.png"/></div>
                            <div class="sel">
                                <select name="" id="">
                                    <?php foreach($city as $v): ?>
                                    <option <?php if(\think\Cookie::get('cityname')==$v['area_name']): ?> selected <?php endif; ?>><?php echo $v['area_name']; ?></option>
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
                            </div>
                           <a id="map" class="input-map"> <span class="iconfont icon-biaodiandidian"></span> 地图找房</a>
                </div>  
                
        </div>
    </div>
 <!--详情-->
 <div class="detail">
    <div class="detail-cen">
        <div class="pro-name">
                <h1><?php echo $data['building_name']; ?><span>在售</span></h1>
                <ul>
                    <li>精装</li>
                    <li>地铁沿线</li>
                    <li>繁华街道</li>
                    <li>大型社区</li>
                </ul>
        </div>
        <div class="select-box">
                <div id="box">
                        <ul id="menu">
                            <li id="goback">楼盘主页</li>
                            <li class="<?php if($type==1): ?>active<?php endif; ?>">主力户型</li>
                            <li class="<?php if($type==2): ?>active<?php endif; ?>">楼盘详情</li>
                            <li class="<?php if($type==3): ?>active<?php endif; ?>">楼盘动态</li>
                            <li class="<?php if($type==4): ?>active<?php endif; ?>">楼盘相册</li>
                            <li class="<?php if($type==5): ?>active<?php endif; ?>">楼盘问问</li>
                            <li class="<?php if($type==6): ?>active<?php endif; ?>">楼盘点评</li>
                        </ul>
                        <div id="panel">
                            <div class="panel active">
                                <ul>
                                    1
                                    <li><img src="img/1.jpg"  alt=""  class="img" /></li>
                                    <li><img src="img/2.jpg" alt=""   class="img"></li>
                                    <li><img src="img/2.jpg" alt=""   class="img"></li>
                                    <li><img src="img/2.jpg" alt=""  class="img"></li>
                                    <li><img src="img/2.jpg" alt=""  class="img"></li>
                                </ul>
                            </div>
                             <!--主力户型-->
                            <div class="panel huxing-box <?php if($type==1): ?> active <?php else: ?> 123 <?php endif; ?>">
                                        <div class="house-min">
                                                <h3>主力户型</h3>
                                                <p class="select">全部 (<?php echo $hus; ?>)</p>
                                                <div class="h-box">
                                                    <ul class="huxing">
                                                            <?php foreach($huimgs as $v): ?>
                                                            <li>
                                                                <div class="hu-pic">
                                                                        <img src="<?php echo $v['h_big']; ?>"/>
                                                                </div>
                                                                <div class="hu-content">
                                                                    <div class="tit01">
                                                                        <span class="mian"><?php echo $v['content']; ?>   &nbsp;建面：<?php echo $v['mian']; ?>m²</span>
                                                                        <a href="">在售</a>
                                                                        <i><?php echo $v['jia']; ?><span>万起</span></i>
                                                                    </div>
                                                                    <div class="tit02">
                                                                            <span>特点：<?php echo $v['te']; ?></span>
                                                                            <i>类型：<?php echo $v['lei']; ?></i>
                                                                            <a class="p1" data-v="领取高清户型图" href="javascript:;" >了解户型详情</a>
                                                                    </div>
                                                                    <p>
                                                                            户型分析：<?php echo $v['fen']; ?>。
                                                                    </p>
                                            
                                                                </div>
                                            
                                                            </li>
                                                            <?php endforeach; ?>
                                                            
                                                        </ul>
                                                </div>
                                                
                                                
                                                <!-- <a href="javascript:;" class="more">更多户型</a> -->
                                        </div>
                                        <!--热门推荐-->
                                        <div class="hot-tui">
                                        <h3>推荐楼盘</h3>
                                        <ul>
                                                <?php foreach($tdengs as $v): ?>
                                                <li>
                                                    <a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>">
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
                                                <p>推荐理由：<?php echo $v['dong']; ?></p>
                                            </a>
                                                </li>
                                                <?php endforeach; ?>
                                            
                                        </ul>
                        
                        
                                        </div>
                            </div>
                              <!--楼盘详情-->
                            <div class="panel lou-detail <?php if($type==2): ?> active <?php else: endif; ?>">
                                    <div class="left-detail">
                                        <h1>楼盘详情</h1>
                                        <div class="base-xin">
                                            <span class="tit">基本信息</span>
                                            <ul class="left-xin">
                                                <li>楼盘名称 <span><?php echo $data['building_name']; ?></span></li>
                                                <li>楼盘地址 <span><?php echo $data['building_address']; ?></span></li>
                                                <li>建筑类型 <span><?php echo $data['building_xingshi']; ?></span></li>
                                                <li>产权年限 <span><?php echo $data['channian']; ?>年</span></li>
                                                <li>开盘时间 <span><?php echo $data['kaitime']; ?></span></li>
                                            </ul>
                                            <ul class="right-xin left-xin">
                                                <li>交房时间  <span><?php echo $data['jiaotime']; ?></span></li>
                                                <li>占地面积 <span><?php echo $data['humianji']; ?>/m²</span></li>
                                                <li>楼盘户型 <span><?php echo $data['building_huxing']; ?></span></li>
                                                <li>层 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高 <span><?php echo $data['cenggao']; ?></span></li>
                                                <li>预售许可证<span> <?php echo $data['yushou']; ?></span></li>
                                            </ul>
                                        </div>
                                        <div class="other-xin">
                                                <span class="tit">其它信息</span>
                                                <ul class="left-xin">
                                                    <li>物业公司  <span><?php echo $data['wuye']; ?>  </span></li>
                                                    <li>开&nbsp;&nbsp;发&nbsp;&nbsp;商<span><?php echo $data['kaifa']; ?></span></li>
                                                    <li>物业费用<span> <?php echo $data['wufei']; ?>元/m².月</span></li>
                                                    <li> 装修状况 <span><?php echo $data['building_zhuangxiu']; ?></span></li>
                                                    <li>物业费用<span> <?php echo $data['wufei']; ?>元/m².月</span></li>
                                                </ul>
                                                <ul class="right-xin left-xin">
                                                    <li>公交路线<span>&nbsp; 1号线、4号线、6号线</span></li>
                                                    <li>绿&nbsp;&nbsp;化&nbsp;&nbsp;率    <span> <?php echo $data['lvhua']; ?>%</span></li>
                                                    <li>容&nbsp;&nbsp;积&nbsp;&nbsp;率    <span><?php echo $data['rongji']; ?></span></li>
                                                    <li>车位情况<span> <?php echo $data['chewei']; ?></span></li>
                                                </ul>
                                        </div>
                                        <div class="pro-intro">
                                                <span>项目介绍 </span>
                                            <p><?php echo $data['introduce']; ?></p>
                                        </div>
 
                                    </div>
                                    <div class="hot-tui">
                                            <h3>推荐楼盘</h3>
                                            <ul>
                                                    <?php foreach($tdengs as $v): ?>
                                                    <li>
                                                        <a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>">
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
                                                    <p>推荐理由：<?php echo $v['dong']; ?></p>
                                                    </li>
                                                </a>
                                                    <?php endforeach; ?>
                                                
                                            </ul>
                            
                            
                                    </div>

                                
                            </div>
                           <!--楼盘动态-->
                            <div class="panel lou-dong-tai <?php if($type==3): ?> active <?php else: endif; ?>">
                                <div class="lou-dong-box">
                                        <h1>楼盘动态</h1>
                                        <ul>
                                             <!--第一条-->
                                             <?php foreach($dong as $v): ?>
                                                <li>
                                                        <div class="title-box">
                                                             <span><strong class="iconfont iconhothuorererexiao"></strong>最热</span>
                                                             <h2><?php echo $data['building_name']; ?>最新房源动态</h2>
                                                             <i><?php echo $v['create_time']; ?></i>
                                                        </div>
                                                        <p><?php echo $v['introduce']; ?></p>
                                                    </li>
                                                <?php endforeach; foreach($dongs as $v): ?>
                                                <li>
                                                    <div class="title-box">
                                                         <span>动态</span>
                                                         <h2><?php echo $data['building_name']; ?>商铺最新房源动态</h2>
                                                         <i><?php echo $v['create_time']; ?></i>
                                                    </div>
                                                    <p><?php echo $v['introduce']; ?></p>
                                                </li>
                                                <?php endforeach; ?>
                                                
                                        </ul> 
                                </div>
                                   <!--热门推荐-->
                                   <div class="hot-tui">
                                        <h3>推荐楼盘</h3>
                                        <ul>
                                            <?php foreach($tdengs as $v): ?>
                                           
                                            <li>
                                                    <a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>">
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
                                            <p>推荐理由：<?php echo $v['dong']; ?></p>
                                        </a>
                                            </li>
                                        
                                            <?php endforeach; ?>
                                            
                                        </ul>
                        
                        
                                   </div>
                            </div>
                           <!--楼盘相册-->
                            <div class="panel photo <?php if($type==4): ?> active <?php else: endif; ?>">
                                <div class="pictures">
                                 <!--效果图-->
                                    <div class="xg-box">
                                        <h1>效果图</h1>
                                        <ul class="">
                                                <?php foreach($ximgs as $v): ?>
                                                    <li><img src="<?php echo $v['x_big']; ?>"  alt=""  class="img"/></li>
                                                <?php endforeach; ?>
                                                    
                                        </ul>
                                    </div>
                                <!--实景图-->
                                    <div class=" xg-box">
                                            <h1>实景图</h1>
                                            <ul class="">
                                                    <?php foreach($simgs as $v): ?>
                                                        <li><img src="<?php echo $v['s_big']; ?>"  alt=""  class="img"/></li>
                                                    <?php endforeach; ?>
                                                       
                                                    
                                            </ul>
                                    </div>
                                <!--样板房-->
                                <div class=" xg-box">
                                        <h1>样板房</h1>
                                        <ul class="">
                                                <?php foreach($yimgs as $v): ?>
                                                    <li><img src="<?php echo $v['y_big']; ?>"  alt=""  class="img"/></li>
                                                <?php endforeach; ?>
                                                    
                                                
                                        </ul>
                                </div>
                                <!--配套图-->
                                <div class="xg-box">
                                        <h1>配套图</h1>
                                        <ul class="">
                                                <?php foreach($pimgs as $v): ?>
                                                    <li><img src="<?php echo $v['p_big']; ?>" alt=""  class="img"></li>
                                                <?php endforeach; ?>
                                                    
                                                
                                        </ul>
                                </div>
                                <!--交通图-->
                                <div class="xg-box">
                                        <h1>交通图</h1>
                                        <ul class="">
                                                <?php foreach($jimgs as $v): ?>
                                                    <li><img src="<?php echo $v['j_big']; ?>" alt=""  class="img"></li>
                                                <?php endforeach; ?>
                                                    
                                                
                                        </ul>
                                </div>
                                 <!--户型图-->
                                 <div class="xg-box hu-img">
                                        <h1>户型图</h1>
                                        <ul class="">
                                                <?php foreach($huimgs as $v): ?>
                                                    <li><img src="<?php echo $v['h_big']; ?>"  alt=""  class="img"/></li>
                                                <?php endforeach; ?>
                                                    
                                                
                                        </ul>
                                </div>
                               </div>
                                <!--热门推荐-->
                                <div class="hot-tui">
                                        <h3>推荐楼盘</h3>
                                        <ul>
                                                <?php foreach($tdengs as $v): ?>
                                                <li>
                                                    <a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>">
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
                                                <p>推荐理由：<?php echo $v['dong']; ?></p>
                                            </a>
                                                </li>
                                                <?php endforeach; ?>
                                            
                                        </ul>
                        
                        
                                </div>
                            
                            </div>
                            <!--楼盘问问-->
                            <div class="panel wenwen <?php if($type==5): ?> active <?php else: endif; ?>">
                                <div class="wenda-cen-min bg">
                                        <h1 class="title-1">楼盘问答 </h1>
                                        <div class="wenda-box">
                                            <div class="quest-list">
                                                    <ul class="timu">
                                                        <li>
                                                            <div class="wen">
                                                                <span>问</span>
                                                                <h1>现在外地人在杭州买房需要什么条件?</h1>
                                                            </div>
                                                            <div class="da">
                                                                <span>答</span>
                                                                <p>纳税或社保连年，需要连续足额缴存24个月，纳税或社保连年，需 要连续足额缴存24个月</p>
                                                            </div>
                                                            
                                                        </li>
                                                        <li>
                                                            <div  class="wen">
                                                                <span>问</span>
                                                                <h1>现在外地人在杭州买房需要什么条件?杭州买房需要什么条件?杭州买房需要什么条件?</h1>
                                                            </div>
                                                            <div class="da">
                                                                <span>答</span>
                                                                <p>纳税或社保连年，需要连续足额缴存24个月，纳税或社保连年，需 要连续足额缴存24个月</p>
                                                            </div>
                                                            
                                                        </li>
                                                        <li>
                                                                <div  class="wen">
                                                                    <span>问</span>
                                                                    <h1>现在外地人在杭州买房需要什么条件?杭州买房需要什么条件?杭州买房需要什么条件?</h1>
                                                                </div>
                                                                <div class="da">
                                                                    <span>答</span>
                                                                    <p>纳税或社保连年，需要连续足额缴存24个月，纳税或社保连年，需 要连续足额缴存24个月</p>
                                                                </div>
                                                                
                                                        </li>
                                                    </ul>
                                            </div>
                                            <div class="quest-zi">
                                                <div class="name"> 
                                                    <div class="zi-pic">
                                                        <img src="/static/home/imgs/people.png" alt="">
                                                    </div>
                                                    <div class="zi-name">
                                                            <div class="zi-name-left">
                                                                    <ul>
                                                                        <li>倪丽丽<span>楼盘分析师</span></li>
                                                                        <li>评分 5.0 
                                                                            <a href="javascript:;" class="p1" data-v="咨询服务">向她咨询</a>
                                                                        </li>
                                                                        <li>最了解该楼盘，熟悉本房周边信息</li>
                                                                    </ul>
                                                            </div>
                                                                    
                                                    </div>
                                                </div>
                                                <div class="name"> 
                                                        <div class="zi-pic">
                                                            <img src="/static/home/imgs/people.png" alt="">
                                                        </div>
                                                        <div class="zi-name">
                                                                <div class="zi-name-left">
                                                                        <ul>
                                                                            <li>倪丽丽<span>楼盘分析师</span></li>
                                                                            <li>评分 5.0 
                                                                                <a href="javascript:;" class="p1" data-v="咨询服务">向她咨询</a>
                                                                            </li>
                                                                            <li>最了解该楼盘，熟悉本房周边信息</li>
                                                                        </ul>
                                                                </div>
                                                                        
                                                        </div>
                                                </div>
                                                <div class="name"> 
                                                        <div class="zi-pic">
                                                            <img src="/static/home/imgs/people.png" alt="">
                                                        </div>
                                                        <div class="zi-name">
                                                                <div class="zi-name-left">
                                                                        <ul>
                                                                            <li>倪丽丽<span>楼盘分析师</span></li>
                                                                            <li>评分 5.0 
                                                                                <a href="javascript:;" class="p1" data-v="咨询服务">向她咨询</a>
                                                                            </li>
                                                                            <li>最了解该楼盘，熟悉本房周边信息</li>
                                                                        </ul>
                                                                </div>
                                                                        
                                                        </div>
                                                </div>
                                            </div>
                        
                                        </div>
                                        
                                </div>
                                <!--热门推荐-->
                                <div class="hot-tui">
                                        <h3>推荐楼盘</h3>
                                        <ul>
                                                <?php foreach($tdengs as $v): ?>
                                                <li>
                                                    <a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>">
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
                                                <p>推荐理由：<?php echo $v['dong']; ?></p>
                                            </a>
                                                </li>
                                                <?php endforeach; ?>
                                            
                                        </ul>
                        
                        
                                </div>
                                   
                                
                            </div>
                            <!--楼盘点评-->
                            <div class="panel dianping <?php if($type==6): ?> active <?php else: endif; ?>">
                                <h1>楼盘点评</h1>
                                

                                <!--热门推荐-->
                                <div class="hot-tui">
                                        <h3>推荐楼盘</h3>
                                        <ul>
                                                <?php foreach($tdengs as $v): ?>
                                                <li>
                                                    <a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>">
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
                                                <p>推荐理由：<?php echo $v['dong']; ?></p>
                                            </a>
                                                </li>
                                                <?php endforeach; ?>
                                            
                                        </ul>
                        
                        
                                </div>



                            </div>
                    
                </div>
        
        
        
        
                
            </div>

        </div>


    </div>
 </div>
 <!--底部-->
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
        <div class="tan">
                <div class="zhao"></div>
                <div class="weiter ts">
                        <div class="t-top">
                            <h6>变价通知</h6>
                            <p>一键订阅最新变价通知，楼盘变价我们第一时间 通知您，帮您找准买房好时机</p>
                            <img id="w-esc" src="/static/home/imgs/xx.png" alt="">
                        </div>
                        <div class="t-bottom">
                            <div class="t-b-first">
                                <input class="l-p" type="text" placeholder="请输入手机号">
                                <button class="t-b-btn t-b-btn2">立即订阅</button>
                            </div>
                            <div class="t-b-second">
                                <p>验证码已发送到<span>187****4376</span>，请注意查看</p>
                                <input type="text" placeholder="请输入验证码">
                                <button class="port1">确定</button>
                                <input type="hidden" value="<?php echo $data['building_name']; ?>">
                                <input type="hidden" value="">
                                <button class="t-b-scode">获取验证码</button>
                            </div>
                        </div>
                    </div>
        </div>
        
       

       </div>
</footer>



<script src="/static/home/js/libs/jquery.min.js"></script>
<script>
      $('.panel').eq(0).removeClass('active');
      $('#menu li').click(function(){
                        console.log(this);
                        $(this).addClass('active');
                        $(this).siblings().removeClass('active');
                        
                        $('.panel').siblings().removeClass('active');
                        console.log($(this).index());
                         $('.panel').eq($(this).index()).addClass('active');
                        
                })
        
        $('#goback').on('click',function(){
            window.location.href = document.referrer;
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
                }else if(type=="详细楼盘户型"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键咨询，了解楼盘详细户型！');
                }else if(type=="获取最新楼盘详情"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键订阅楼盘最新详情，楼盘详情早知道！');
                }else if(type=="免费领取地图"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键免费领取地图，楼盘随心看！');
                }else if(type=="领取高清户型图"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键领取高清户型图，真实户型早知道！');
                }else if(type=="获取更多高清图"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键领取高清图，楼盘图片清晰看！');
                }else if(type=="免费领取资料"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键获取楼盘对比分析资料，好楼盘早知道！');
                }
                $('.weiter').show();
                $('.zhao').show();
                
            })

            // 接口验证码
            $('.t-b-btn2').on('click',function(){
                var phone=$(this).prev().val();
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
						$('.t-b-btn').html('重新发送' + time + 's');
                        $('.t-b-btn').attr('disabled', true);
					} else {
						clearInterval(interval);
						$('.t-b-btn').html('获取验证码');
						$('.t-b-btn').attr('disabled', false);
					}
				};
				fn();
				var interval = setInterval(fn, 1000);
                var data={'phone':phone};
                var tel=phone.substr(0,3)+'****'+phone.substr(7,11);
                var that=$(this);
                $.post(
                    "<?php echo url('home/user/login'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            that.parent().hide();
                            that.parent().next().show();
                            $('.t-b-first').hide();
                            $('.t-b-second').show();
                            that.parent().next().children('input').eq(2).val(phone);
                            // console.log(l);
                            that.parent().next().find('p').find('span').html(tel);
                            // $('.t-b-second p span').html(tel);
                        }else{
                            alert(res.msg);
                        }
                    },
                    'json'
                ) 
            })



            $('.t-b-scode').on('click',function(){
                var phone=$(this).prev().val();
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
						$('.t-b-scode').html('重发' + time + 's');
                        $('.t-b-scode').attr('disabled', true);
					} else {
						clearInterval(interval);
						$('.t-b-scode').html('获取验证码');
						$('.t-b-scode').attr('disabled', false);
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

            $('.port1').on('click',function(){
                var building_name=$(this).next().val();
                var ma=$(this).prev().val();
                var tel=$(this).next().next().val();
                var name='要自己问了';
                var pattern_tel = /^1[3-9][0-9]{9}$/;
                var type=$(this).parent().parent().prev().find('h6').html();
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
                    'qu':qu,
                    'ma':ma
                }
                console.log(data);return
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
                            alert('发送成功');
                        }else{
                            alert(res.msg);
                        }
                    },
                    'json'
                )
            })
</script>
    




</body>
</html>