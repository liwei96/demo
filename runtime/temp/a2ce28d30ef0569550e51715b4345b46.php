<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"G:\jiayuan\tp2\public/../application/home\view\content\index.html";i:1574832695;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="家园新房为您提供<?php echo $data['building_name']; ?>售楼电话，价格，户型图，动态以及楼盘周边服务和物业相关信息" />

<meta name="keywords" content="<?php echo $data['keys']; ?>" />
    <title><?php echo $data['building_name']; ?>-家园新房-楼盘详情-动态</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/home/css/jSlider.min.css">
    <link rel="stylesheet" href="/static/home/css/swiper-3.4.2.min.css">


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cache.amap.com/lbs/static/main1119.css"/>
    <link rel="stylesheet" href="/static/home/css/c-index.css">
    <!-- 1.2 -->
    <link rel="stylesheet" href="/static/home/css/c-index1.2.css">
    <link rel="stylesheet" type="text/css" href="http://dn.yunzhenshi.com/css/reset-min.css">
    <style>
	*{
	      font-family:"Microsoft YaHei";
		-webkit-overflow-scrolling:touch
	}
        .m-home{
            width: 7.3%;
            position: absolute;
            top: 20px;
            right: 4.6%;
            z-index: 200;
        }

        .m-imgs .swiper-container{
            width:100%;
            margin-left:4%;
        }
        .m-imgs div{
            margin-bottom: 0px;
        }
        .m-imgs .swiper-wrapper{
                    }
        .m-imgs .swiper-slide{
            width:160px!important;
            height:120px;
            margin-right:5%;
        }
        .m-imgs .swiper-slide img{
            width:100%;
            height: 100px;
	   border-radius:4px;
        }
        .m-imgs ul{
	     margin-bottom:7px;
        }
        .m-imgs ul li{
            color:#999999;
            font-size: 14px;
            display: inline-block;
            position: relative;
            margin-left: 6%;
            text-align: center;
            height: 44px;
            line-height: 44px;
        }
        .m-imgs ul li.m-active{
            color:#333333;
            font-size: 16px;
        }
        .m-imgs ul li.m-active i{
            width: 25px;
            height: 3px;
            background-color: #1CB64F;
            position: absolute;
            top: 80%;
            left: 25%;
        }
        .swiper-container{
            overflow: initial;
        }
        .m-bigimgs{
            position: fixed;
            display: none;
            top:230px;
            width:100%;
            z-index: 300000;
        }
        .m-bigimgs img{
            width:100%;
        }
	.m-huo .m-btns button {
    width: 92%;
    height: 44px;
    background-color: #F0F5F2;
    color: #1CB64F;
    font-size: 16px;
    text-align: center;
    line-height: 44px;
    margin-left: 4%;
    border: 0px;
    border-radius: 4px;
    margin-bottom: 0px;
    position:inherit;
    margin-top:20px;
    font-weight:bold;
}
	#m_sc_box{
	    display:none;
	}


        /* 改版1.2css */
        /* 留言 */
    .m-xuan img{
        height:34px;
        position: fixed;
        right:0;
        bottom:140px;
        z-index: 10000;
    }
    .weiter{
        display: none;
        width:75%;
        position: fixed;
        left:12.667%;
        top:180px;
        border-radius: 12px;
        z-index: 1001;
    }
    .weiter .t-top{
        width:100%;
        height:100px;
        background-color: #2DD264;
        border-radius: 12px 12px 0 0;
        padding-top:15px;
    }
    .weiter .t-top h6{
        color:#fff;
        font-size: 18px;
        text-align: center;
        margin-bottom:12px;
    }
    .weiter .t-top p{
        color:#fff;
        font-size: 13px;
        margin:0 18px;
        text-indent: 7%;
    }
    .weiter .t-top #w-esc{
        position: absolute;
        right:5%;
        top:5%;
    }

    .weiter .t-bottom{
        width:100%;
        height:227px;
        background-color: #fff;
        border-radius: 0 0 12px 12px;
    }
    .weiter .t-bottom .t-b-first{
        height:100%;
        display: block;
    }
    .weiter .t-bottom .t-b-first input{
        width:85%;
        height:40px;
        border:0.5px solid rgba(230,230,230,1);
        margin-top:40px;
        margin-bottom:25px;
        margin-left:7.52%;
        padding-left:5%;
        font-size: 14px;
    }
    .weiter .t-bottom .t-b-first button{
        width:85%;
        height:40px;
        border:0;
       
        color:#3AC869;
        font-size: 16px;
        text-align: center;
        line-height: 40px;
        margin-left:7.5%;
    }
    .weiter .t-bottom .t-b-first .bg_01{
        background-color: #F0F5F2;
    }
    .weiter .t-bottom .t-b-first .bg_02{
        background-color:  #e3e3e3;
    }
    .weiter .t-bottom .t-b-first p{
        color:#999999;
        font-size: 12px;
        width:85%;
        margin-left:7.5%;
        margin-top:20px;
        line-height: 18px;
    }
    .weiter .t-bottom .t-b-second{
        height:100%;
        display: none;
        padding-top:20px;
    }
    .weiter .t-bottom .t-b-second p{
        color:#808080;
        font-size: 12px;
        width:85%;
        margin-left:7.5%;
        margin-bottom:20px;
    }
    .weiter .t-bottom .t-b-second input{
        width:85%;
        height:40px;
        border-radius: 2px;
        border:0.5px solid rgba(238,238,238,1);
        margin-left:7.5%;
        margin-bottom:20px;
    }
    .weiter .t-bottom .t-b-second .port1{
        width:85%;
        height:40px;
        margin-left:7.5%;
        background-color: #F0F5F2;   
        color:#3AC869;
        font-size: 16px;
        text-align: center;
        line-height: 40px;
        border:0;
        margin-bottom:20px;
    }
    .weiter .t-bottom .t-b-second .t-b-scode{
        border:0;
        color:#2DD264;
        font-size: 13px;
        position: absolute;
        right:10%;
        top:52%;
        background-color: #fff;
    }

/*轮播图*/
    .swiper-box  {
             height:210px;
             margin-bottom:25px;
             margin-left:4%;
        }

        #swiper-pagination1{
               height:20px;
               position:absolute;
               z-index:100;
               text-align:center;
        }
        .swiper-pagination2{
               height:20px;
               text-align:center; 
               margin-top:5px;
        }

        .swiper-pagination2 .swiper-pagination-bullet{
                width:12px;
                height:3px;
                border-radius: 0;
        }

        .swiper-pagination2 .swiper-pagination-bullet-active{
            background: #52CC7A;
        }

        .swiper-box   .swiper-slide{
        width:54.3%!important;
        height:210px!important;
        margin-right:3.7%!important;
       } 

       .m-lun .m-luns #lnum{
    width:13.3333%;
    background: rgba(0, 0, 0, 0.6);
    height:20px;
    font-size: 10px;
    color:#fff;
    line-height: 20px;
    text-align: center;
    border-radius: 10px;
    opacity: 0.6;
    position: absolute;
    right: 4%;
    bottom: 20px;
    z-index:200;
}

.swiper-top .swiper-slide img{
      height:210px!important;
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
    <!-- PC -->
    <!-- PC -->



    <!-- yidong -->
    <div class="container-fluid m">
            <div class="m-lun visible-xs-block .visible-sm-block">
                <img class="m-back" src="/static/home/imgs/return2.png" alt="" onclick="javascript:history.go(-1)">
                <img class="m-home" src="/static/home/imgs/m-home.png" alt="主页">
                <div class="m-luns">


                        <!-- <div class="jSlider" id="slider1" data-navigation="none">
                            <?php foreach($xiaoimgs as $v): ?>
                            <div><img src="<?php echo $v['x_big']; ?>" style="width:100%"></div>
                            <?php endforeach; ?>
                        </div> -->

                        <div class="swiper-top">
                                <div class="swiper-wrapper">
                                <?php foreach($xiaoimgs as $v): ?>
                                  <div class="swiper-slide">
                                         <img src="<?php echo $v['x_big']; ?>" style="width:100%">
                                  </div>
                                <?php endforeach; ?>
                                
                                </div>
                                <!-- Add Pagination -->
                                <div id="swiper-pagination1"></div>
                        </div>




                      




                        <span id="lnum">共<?php echo $pics; ?>张</span>
                </div>
            </div>

        <div class="m-incro visible-xs-block .visible-sm-block">
            <h3><?php echo $data['building_name']; ?></h3>
            <div class="m-ic-icons">
                <span class="m-zai">在售</span>
                <span class="m-jing"><?php echo $data['building_zhuangxiu']; ?></span>
                <span><?php echo $data['building_ditie']; ?></span>
                <i class="m-ishou"><img src="/static/home/imgs/forked.png" alt=""><i class="m_shou01">收藏</i></i>
            </div>
            <ul class="m-jtop">
                <li>
                    <i><?php echo $data['zong']; ?>万起</i>
                    <span>总价</span>
                </li>
                <li>
                    <i><?php echo $data['building_huxing']; ?></i>
                    <span>户型</span>
                </li>
                <li>
                    <i><?php echo $data['humianji']; ?>/m²</i>
                    <span>建面</span>
                </li>
            </ul>
            
            <div class="m-ibottom">
                <ul>
                    <li>单价&nbsp;:&nbsp;&nbsp;&nbsp;<span class="m-pric"><span><?php echo $data['danjia']; ?></span>元/m²起</span></li>
                    <li>装修&nbsp;:&nbsp;&nbsp;&nbsp;<span><?php echo $data['building_zhuangxiu']; ?></span></li>
                    <li>层高&nbsp;:&nbsp;&nbsp;&nbsp;<span><?php echo $data['cenggao']; ?>米</span></li>
                </ul>
                <ul>
                    <li>类型&nbsp;:&nbsp;&nbsp;&nbsp;<span class="m-pric"><span><?php echo $data['building_xingshi']; ?></span></span></li>
                    <li>开盘&nbsp;:&nbsp;&nbsp;&nbsp;<span><?php echo $data['kaitime']; ?></span></li>
                    <li>地址&nbsp;:&nbsp;&nbsp;&nbsp;<span><?php echo $data['building_address']; ?></span></li>
                </ul>
            </div>
            <p id="m_more">更多楼盘信息</p>
            <div class="m-new">
                <a href="#" data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="变价通知"<?php else: ?>class="p1" data-v="变价通知"<?php endif; ?>><img src="/static/home/imgs/m-change.png">最新变价通知</a>
                <a href="#" data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="开盘通知"<?php else: ?>class="p1" data-v="开盘通知"<?php endif; ?>><img src="/static/home/imgs/m-open.png">最新开盘通知</a>
            </div>
        </div>  
        <div class="m-image visible-xs-block .visible-sm-block">
	
		     <a data-agl-cvt="2" href="tel:400-718-6686">
               <img src="/static/home/imgs/phone22.png" alt="">
            </a>
	    
	
        </div>
        <div class="m-dong visible-xs-block .visible-sm-block">
            <h3 id="m_dong">楼盘动态<span>共<?php echo $num; ?>条<img src="/static/home/imgs/m-go.png" alt=""></span></h3>

            <?php foreach($dongs as $v): ?>
            <div class="m-tai m-d">
                <h4><img src="/static/home/imgs/dt.png" alt=""><?php echo $data['building_name']; ?>最新房源动态</h4>
                <p><?php echo $v['introduce']; ?></p>
                <span>更新：<?php echo $v['create_time']; ?></span>
            </div>
            <?php endforeach; ?>
            
            <div class="m-d-jiao m-d m-jiaofang">
                <h4><img src="/static/home/imgs/jf.png" alt="">交房时间：<?php echo $data['jiaotime']; ?></h4>
            </div>
	    <?php foreach($jia as $v): ?>
            <div class="m-d-jia m-d">
                <h4><img src="/static/home/imgs/jt.png" alt="">加推时间：<?php echo $v['create_time']; ?></h4>
                <p><?php echo $v['introduce']; ?></p>
                <span>更新：<?php echo $v['create_time']; ?></span>
            </div>
            <?php endforeach; ?>
            <div class="m-d-jiao m-d m-shoukai">
                <h4><img src="/static/home/imgs/sk.png" alt="">首开时间：<?php echo $data['kaitime']; ?></h4>
            </div>
            <div class="m-d-jiao m-d m-nadi">
                <h4><img src="/static/home/imgs/nd.png" alt="">拿地时间：<?php echo $data['n_time']; ?></h4>
            </div>
            <!-- <div class="t-o o1"></div>
            <div class="t-o o2"></div>
            <div class="t-o o3"></div>
            <div class="t-o o4"></div>
            <div class="t-o o5"></div>
            <div class="t-l l1"></div>
            <div class="t-l l2"></div>
            <div class="t-l l3"></div>
            <div class="t-l l4"></div> -->

            <button data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="最新动态"<?php else: ?>class="p1" data-v="最新动态"<?php endif; ?> >获取最新动态</button>
            
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-you visible-xs-block .visible-sm-block">
            <h3>购房领优惠</h3>
            <img class="m-y-g p1" data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="我要优惠"<?php else: ?> data-v="我要优惠"<?php endif; ?> src="/static/home/imgs/yrdly.jpg" alt="">
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        
        <div class="m-hu visible-xs-block .visible-sm-block">
            <h3>主力户型<span class="m-h-more">更多户型<img src="/static/home/imgs/m-go.png" alt=""></span></h3>
            <?php foreach($huimgs as $v): ?>
            <div class="h-c">
                <div class="col-xs-4 h-c-i">
                    <a href="<?php echo url('home/content/hu',['id'=>$v['id'],'bid'=>$data['id']]); ?>">
                        <img src="<?php echo $v['h_small']; ?>" alt="">
                    </a>
                </div>
                <div class="col-xs-8 h-c-c">
                    <div class="h-t">
                        <h4><?php echo $v['content']; ?></h4>
                        <span class="h-t-z">在售</span>
                        <span class="h-t-m"><i><?php echo $v['jia']; ?></i>万起</span>
                    </div>
                    <div class="sp">特点：<?php echo $v['te']; ?></div>
                    <div class="sp">类型：<?php echo $v['lei']; ?></div>
                    <div class="sp sp-f">户型分析：<?php echo $v['fen']; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
            
                <button data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="了解详细户型"<?php else: ?>class="p1" data-v="了解详细户型"<?php endif; ?> >了解详细户型</button>
        </div>
         <!-- 留言 -->
        <div class="m-xuan visible-xs-block .visible-sm-block" data-v="<?php echo $data['building_name']; ?>">
            <img src="/static/home/imgs/new_liu.png" alt="">
        </div>
        
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-yu visible-xs-block .visible-sm-block">
            <h3>您预约、我接送</h3>
            <img src="/static/home/imgs/yy.png" alt="">
            <button data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="预约看房"<?php else: ?>class="p1" data-v="预约看房"<?php endif; ?> >我要预约</button>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>

          <!--对比分析资料 -->    
        <div class="m-fen visible-xs-block .visible-sm-block">
            <h3>对比分析资料<span class="m-more-fen">详细分析<img  class="xiang-img " src="/static/home/imgs/m-go.png" alt=""></span></h3>
           
             <!--对比分析资料 -->   
            <div class="dui-zi">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide dui-box">
                          <a href="<?php echo url('home/content/depth',['id'=>$data['id']]); ?>">
                          <div class="tou-con">
                                <h4>投资分析</h4>
                                <p> 1.&nbsp;<?php echo $tou['cone']; ?></p>
                                <p> 2.&nbsp;<?php echo $tou['ctwo']; ?> </p>
                          </div>
                          <div class="tou-img">
                              <img src="/static/home/imgs/pc-db.png" alt="">
                          </div>
                        </a>
                      </div>
                      <div class="swiper-slide dui-box">
                          <a href="<?php echo url('home/content/depth',['id'=>$data['id']]); ?>">
                            <div class="tou-con">
                                    <h4>宜居分析</h4>
                                    <p>1.&nbsp;<?php echo $yi['cone']; ?></p>
                                    <p> 2.&nbsp;<?php echo $yi['ctwo']; ?></p>
                              </div>
                              <div class="tou-img">
                                  <img src="/static/home/imgs/yiju.png" alt="">
                              </div> 
                            </a>
                      </div>
                    
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination2"></div>
            </div>




            <button data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="获取详细分析资料"<?php else: ?>class="p1" data-v="获取详细分析资料"<?php endif; ?> >获取详细分析资料</button>
        </div>



        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-ling visible-xs-block .visible-sm-block">
            <h3>楼盘资料免费领<span>已有<i>860</i>人领取</span></h3>
            <img src="/static/home/imgs/new_map.png" alt="">
            <div class="m-iright">
                <h4>为什么大家在准备买房的时候领 一份资料？</h4>
                <p>1.没领地图，许多人后悔买错了房子</p>
                <p>2.楼盘价格走势及商业分析报告资料</p>
            </div>
            <button data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="领取免费资料"<?php else: ?>class="p1" data-v="领取免费资料"<?php endif; ?> >我要领取地图</button>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-huo visible-xs-block .visible-sm-block">
            <h3>查询真实最新成交价<p>已有<span>147</span>人查询</p></h3>
            <div id="chart" style="width:92%;height:250px;margin-left:4%"></div>
            <table>
                <tr>
                    <th>日期</th>
                    <th>成交套数</th>
                    <th>成交金额</th>
                </tr>
                <?php foreach($all as $v): ?>
                <tr>
                    <td><?php echo $v[0]; ?></td>
                    <td><?php echo $v[1]; ?>套</td>
                    <td>***万</td>
                </tr>
                <?php endforeach; ?>
                
            </table>
            <div class="m-btns">
                
                <button data-agl-cvt="5" class="p1" data-v="最新成交价">获取成交详情</button>
                
            </div>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-dai visible-xs-block .visible-sm-block">
            <h3>楼盘问答<span>更多问答<img src="/static/home/imgs/m-go.png" alt=""></span></h3>
            <div class="m-d-content">
                <img src="/static/home/imgs/people.png" alt="<?php echo \think\Session::get('user.fork'); ?>">
                <div>
                    <p class="m-d-name">倪丽丽<span>金牌置业顾问</span></p>
                    <p class="m-d-fen">评分5.0分</p>
                    <p class="m-d-ping">最了解该楼盘，熟悉本房周边信息</p>
                    
                </div>
                <button data-agl-cvt="5" class="p1" data-v="咨询服务">我要咨询</button>
                <div class="m-w-content">
                    <h4><span>问</span>现在外地人在杭州买房需要什么条件?</h4>
                    <p>
                        <span>答</span><i>纳税或社保连年，需要连续足额缴存24个月，需要连续足额缴存24个月，纳税或社保连需要连续足额缴存24个月，纳税或社保连...纳税或社保连需要连续足额缴存24个月，纳税或社保连...</i>
                    </p>
                    <span class="m-w-all">查看全文</span>
                </div>
            </div>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        
        
        <div class="m-zhou visible-xs-block .visible-sm-block">
            <h3>周边规划<span>详细规划<img src="/static/home/imgs/m-go.png" alt=""></span></h3>
            <div class="m-continer" id="m-container">

            </div>
            <div class="m-z-icons" >
                <ul>
                    <li>
                        <img src="/static/home/imgs/icon_01.png" alt="">
                        生活
                    </li>
                    <li>
                        <img src="/static/home/imgs/icon_02.png" alt="">
                        交通
                    </li>
                    <li>
                        <img src="/static/home/imgs/icon_03.png" alt="">
                        医疗
                    </li>
                    <li>
                        <img src="/static/home/imgs/icon_04.png" alt="">
                        学校
                    </li>
                </ul>
            </div>
            <button data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="楼盘周边信息"<?php else: ?>class="p1" data-v="楼盘周边信息"<?php endif; ?> >获取周边信息</button>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        
        <div class="m-dian visible-xs-block .visible-sm-block">
            <h4>楼盘点评<span id="m_d_more">更多评论<img src="/static/home/imgs/m-go.png" alt=""></span></h4>
            <?php foreach($pings as $v): ?>
            <div class="m-ping">
                <div class="m-p-t">
                    <img class="p-t-img" src="/static/home/imgs/Mine.png" alt="">
                    <div class="p-t-user">
                        <p class="t-u-tel"><?php echo $v['tel']; ?></p>
                        <p class="t-u-time"><?php echo $v['create_time']; ?></p>
                    </div>
                    <span class="cnm"><input type="hidden" value="<?php echo $v['id']; ?>"><img class="p-t-g" data-v="<?php echo $v['num']; ?>" src="/static/home/imgs/good.png" alt=""><i style="font-style:normal"><?php echo $v['num']; ?></i></span>
                </div>
                <p class="m-p-p"><?php echo $v['content']; ?></p>
            </div>
            <?php endforeach; ?>
            <button data-agl-cvt="5" class="m-d-x">写评论</button>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>

        <div class="m-jian visible-xs-block .visible-sm-block">
            <h3>推荐楼盘</h3>

            <div class="swiper-box">
             <div class="swiper-wrapper">

                 <?php foreach($tui as $v): ?>
                <div class="swiper-slide"> 
                    <a href="<?php echo url('home/content/index',['id'=>$v['id']]); ?>">
                    <div class="m-j-con">
                        <div class="m-j-top">
                            <img src="<?php echo $v['building_img']; ?>" alt="">
                            <span>推荐楼盘</span>
                        </div>
                        <div class="m-j-bom">
                            <h4><?php echo $v['building_name']; ?></h4>
                            <p>
                                <span><?php echo $v['qu']; ?></span>
                                <span>建面: <?php echo $v['humianji']; ?>/m²</span>
                            </p>
                            <span class="m-j-pic"><?php echo $v['danjia']; ?>元/m²起</span>
                        </div>
                    </div>
                    </a>
                </div>
                <?php endforeach; ?>
                

            </div>
        </div>



        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        
        <div class="m-tui visible-xs-block .visible-sm-block">
            <h3>相似楼盘</h3>
            <div class="visible-xs-block .visible-sm--block m-list">
                    <div id="m-list-box">
                        <?php foreach($xiangs as $v): ?>  
                            <div class="col-xs-12 m-row">
                                    <a href="<?php echo url('home/content/index',['id'=>$v['id']]); ?>">
                                    <div class="col-xs-4 m-img">
                                        <img src="<?php echo $v['building_img']; ?>" alt="">
                                    </div>
                                    <div class="col-xs-8 m-text">
                                        <h4>
                                            <?php echo $v['building_name']; ?> 
                                            <span class="m-p-1"><?php echo $v['building_xiaoshou']; ?></span>
                                        </h4>
                                        <p class="m-price"><span><?php echo $v['danjia']; ?></span>元/m²</p>
                                        <p class="m-xiang">
                                            <span><?php echo $v['city']; ?>-<?php echo $v['qu']; ?></span>
                                            <span>建面</span>
                                            <span><?php echo $v['humianji']; ?>m²</span>
                                        </p>
                                        <p class="m-icon">
                                            
                                            <span class="m-p-2"><?php echo $v['building_zhuangxiu']; ?></span>
                                            <span class="m-p-3"><?php echo $v['building_ditie']; ?></span>
                                        </p>
                                    </div>
                                    </a>
                                </div>
                                <?php endforeach; ?>
                    </div>
                    
                </div>
        </div>
        <div class="visible-xs-block .visible-sm-block m-ll">
            <div class="m-tnav">
                    <img class="m-back" src="/static/home/imgs/return.png" alt="" onclick="javascript:history.go(-1)">
                    <span class="m-1 m-active">信息<i></i></span>
                    <span class="m-2">户型<i></i></span>
                    <span class="m-3">周边<i></i></span>
            </div>
            
	
        </div>
        <div class="m-botnav visible-xs-block .visible-sm-block">
            <p data-agl-cvt="5" id="m_shou" data_v="<?php echo $data['id']; ?>"><?php if(in_array($v['id'],\think\Session::get('fork'))): ?><img style="margin-left:17%" src="/static/home/imgs/fork2.png" alt="">已收藏<?php else: ?><img src="/static/home/imgs/forked.png" alt="">收藏<?php endif; ?></p>
            <a data-agl-cvt="5" href="tel:400-718-6686"><button class="m-pho">电话咨询</button></a>
            <button data-agl-cvt="5" class="m-y p1" data-v="预约看房">预约看房</button>
        </div>






        <div class="visible-xs-block .visible-sm-block">
            <div id="m_p_box">
                <h4>用户点评<img class="m_p_exc" src="/static/home/imgs/xx.png" alt=""></h4>
                <div class="m-d-content">
                    <textarea name="" id="" cols="30" rows="10" placeholder="在这里发表您的意见"></textarea>
                    <button class="f-b-p-l">发表点评</button>
                    <input type="hidden" name="" value="<?php echo $data['id']; ?>">
                </div>
            </div>
            <div class="m-p-succ">
                <div class="p-c-top">
                    <img src="/static/home/imgs/p-success.png" alt="">
                </div>
                <div class="p-c-bottom">
                    <p>评论成功</p>
                    <button class="p-c-exc">我知道了</button>
                </div>
            </div>




            <div class="weiter ts">
                <div class="t-top">
                    <h6>变价通知</h6>
                    <p>一键订阅最新变价通知，楼盘变价我们第一时间 通知您，帮您找准买房好时机</p>
                    <img id="w-esc" src="/static/home/imgs/xx.png" alt="">
                </div>
                <div class="t-bottom">
                    <div class="t-b-first">
                        <input class="l-p" type="text" placeholder="请输入手机号">
                        <button class="t-b-btn t-b-btn2    bg_01"  id="dingxue">立即订阅</button>
                        <p>
                            家园新房一对一专业服务，家园承诺保护您的隐私安全
                        </p>
                    </div>
                    <div class="t-b-second">
                        <p>验证码已发送到<span>187****4376</span>，请注意查看</p>
                        <input type="text" placeholder="请输入验证码">
                        <button class="port1">确定</button>
                        <input type="hidden" id="building_name" value="<?php echo $data['building_name']; ?>">
                        <input type="hidden" value="">
                        <button class="t-b-scode">获取验证码</button>
                        <p class="tishi">
                            家园新房一对一专业服务，家园承诺保护您的隐私安全
                        </p>
                    </div>
                </div>
            </div>





            


            <div class="m-chang"></div>



            
            <div class="m-o-succ">
                <img class="o-esc" src="/static/home/imgs/m-esc.png" alt="">
                <img src="/static/home/imgs/m-success.png" alt="" class="o-success">
                <p id="o_p">已成功订阅最新动态，我们会第一时间通过短信通知您！</p>
                <button id="o_btn">确定</button>
            </div>
            
            <div id="m_ti">

            </div>
            <div class="m-bigimgs">
                <img class="m_bigimgs" src="" alt="">
            </div>
        </div>
        <div id="panel" style="display:none;"></div>
    </div>
    <script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="/static/home/js/jquery.jSlider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script> 
    <!-- <script src="/static/home/js/libs/swiper.min.js"></script> -->

    <script src="/static/home/js/echarts.min.js"></script>
    <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.14&key=729ac4d779c7e625bc11bd5ba3ff3112"></script>
    <script type="text/javascript" src="https://cache.amap.com/lbs/static/addToolbar.js"></script>
       
    
    <script>
        /*头部轮播*/
     var swiper = new Swiper('.swiper-top', {
      spaceBetween: 30,
      pagination: {
        el: '#swiper-pagination1',
        clickable: true,
      },
    });
       /*对比分析资料轮播*/
     var swiper = new Swiper('.dui-zi', {
      spaceBetween: 20,
      pagination: {
        el: '.swiper-pagination2',
      },
    });
    /*推荐楼盘轮播*/
    var swiper = new Swiper('.swiper-box', {
      slidesPerView: 1.8,
      spaceBetween: 30,
    });

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
                    color:'rgba(153,153,153,1)',
                    fontSize:'10px'
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

         var swiper = new Swiper('.swiper-container', {
	    loop: true, // 循环模式选项
            slidesPerView: 'auto',
            spaceBetween: 15,
            pagination: {
            el: '.swiper-pagination',
            clickable: true,
	    speed:300, 
	    autoplay : { delay:3000 },
            },
            observer:true,//修改swiper自己或子元素时，自动初始化swiper
            observeParents:true,//修改swiper的父元素时，自动初始化swiper
            resistanceRatio : 0.1,
         });
         
        var map = new AMap.Map("m-container", {
            resizeEnable: true,
            zoom:11
        });
        function addMarker() {
            marker = new AMap.Marker({
                icon: "https://a.amap.com/jsapi_demos/static/demo-center/icons/poi-marker-default.png",
                position: [<?php echo $data['mapx']; ?>,<?php echo $data['mapy']; ?>],
                offset: new AMap.Pixel(-13, -30)
            });
            marker.setMap(map);
        }
        addMarker();

        map.add(marker);
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
        
        var cpoint = [<?php echo $data['mapx']; ?>,<?php echo $data['mapy']; ?>]; //中心点坐标
        
       
        $(document).ready(function(){
	    $('.m-xuan').on('click', function () {
	        	var id=$(this).attr('data-v');
                window.location.href = "<?php echo url('home/index/liu',['id'=>$data['building_name']]); ?>";
            })
            var h=$('.h-c-c').height();
            $('.h-c-i img').css('height',h+"px");
            $('.m-h-more').on('click',function(){
                window.location.href="<?php echo url('home/content/hus',['id'=>$data['id']]); ?>"
            })
            $('#m_d_more').on('click',function(){
                window.location.href="<?php echo url('home/content/pings',['id'=>$data['id']]); ?>";
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
            
            // 楼盘问答
            $('.m-dai h3 span').on('click',function(){
                window.location.href="<?php echo url('home/content/daimore',['id'=>$data['id']]); ?>";
            })

            // 详细分析跳转
            $('.m-more-fen').on('click',function(){
                window.location.href="<?php echo url('home/content/depth',['id'=>$data['id']]); ?>";
            })

            $('.m-d-x').on('click',function(){
                $('#m_p_box').css('display','block');
                $('.m-chang').show();
            })
            $('.m_p_exc').on('click',function(){
                $('#m_p_box').css('display','none');
                $('.m-chang').hide();
            })
            $('.p-c-exc').on('click',function(){
                $('.m-p-succ').hide();
                $('.m-chang').hide();
            })
	    $('#m_sc_esc').on('click',function(){
		$('#m_sc_box').hide();
		$('.m-chang').hide();
		})
		$('.m-c-content input').focus(
		       function(){
			     $('.m-c-content').css("margin-top",'80px')
				console.log(1)
			}	
		)
		$('.m-c-content input').blur(
		       function(){
			     $('.m-c-content').css("margin-top",'170px')
				console.log(2)
			}	
		)
        // 验证码
        $('.m-c-btn').on('click',function(){ 
            var tel=$(this).prev().prev().prev().prev().prev().prev().val();
	        var pattern_tel = /^1[3-9][0-9]{9}$/;
				if (tel == '') {
					$(this).prev().prev().prev().prev().prev().prev().val('')
                    $(this).prev().prev().prev().prev().prev().prev().attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_tel.test(tel)) {
					$(this).prev().prev().prev().prev().prev().prev().val('')
					$(this).prev().prev().prev().prev().prev().prev().attr('placeholder','手机号码不合法');
					return;
				}
	        console.log(tel);

	   
            $.post(
                "<?php echo url('home/user/login'); ?>",
                {'phone':tel},
                function(res){
                    if(res.code==100){
                        var time=60;
                        var fn = function () {
                            time--;
                            if (time > 0) {
                                $('.m-c-btn').val('重新发送' + time + 's');
                                $('.m-c-btn').attr('disabled', true);
                            } else {
                                clearInterval(interval);
                                $('.m-c-btn').val('获取验证码');
                                $('.m-c-btn').attr('disabled', false);
                            }
                        };
                        fn();
                        var interval = setInterval(fn, 1000);
                    }else if(res.code==1003){
                        $('.m-c-btn').val('发送太频繁');
                    }else if(res.code==300){
                        $('.m-c-btn').val('今天报名上限');
                    }
                }
            )
        })

		$('.user').on('click',function(){
                    window.location.href="<?php echo url('home/user/zu'); ?>";
                })
                $('.big').on('click',function(){
                                var img=$(this).attr('src');
                                var arr=img.split('/');
                                if(arr.length>4){
                                    var a=arr[5].split('_');
                                    a[1]=800;
                                    arr[5]=a.join('_');
                                    img=arr.join('/');
                                    var html=`
                                        <img class="m_bigimg" src="${img}">
                                    `;
                                }else{
                                    var a=arr[3].split('_');
                                    a[1]=800;
                                    arr[3]=a.join('_');
                                    img=arr.join('/');
                                    var html=`
                                        <img class="m_bigimg" src="${img}">
                                    `;
                                }
                                
                                $('.m-bigimgs').html(html);
                                $('.m-bigimgs').show();
                                $('.m-chang').show();
                            })
            $('.m-bigimgs').on('click',function(){
                $(this).hide();
                $('.m-chang').hide();
            })
            $('#m_dong').on('click',function(){
                window.location.href="<?php echo url('home/content/dongs',['id'=>$data['id']]); ?>"
            })
            $('.m-home').on('click',function(){
                window.location.href="<?php echo url('home/index/index'); ?>"
            })
            $('.f-b-p-l').on('click',function(){
                var data=$(this).prev().val();
                var id=$(this).next().val();
                $.post(
                    "<?php echo url('home/content/ping'); ?>",
                    {'content':data,'bid':id},
                    function(res){
                        console.log(res);
                        if(res.code==200){
                            $('#m_p_box').hide();
                            $('.m-p-succ').show();
                        }else{
                            window.location.href="<?php echo url('home/user/login'); ?>";
                        }
                    }
                )
            })
            $('#m_ul li').on('click',function(){
                $(this).addClass('m-active').siblings('li').removeClass('m-active');
                var type=$(this).attr('data-v');
                var id=<?php echo $id; ?>;
                $.post(
                    "<?php echo url('home/content/imgs'); ?>",
                    {'type':type,'id':id},
                    function(res){
                        if(res.code==100){
                            var html="";
                            
                                if(res.s=='p_small'){
                                    $.each(res.data,function(i,e){
                                    html+=`
                                    <div class="swiper-slide">
                                        <img src="${e.p_small}" alt="" class="big" data-v="p">
                                    </div>
                                    `;
                                    })
                                }else if(res.s=='j_small'){
                                    $.each(res.data,function(i,e){
                                    html+=`
                                    <div class="swiper-slide">
                                        <img src="${e.j_small}" alt="" class="big" data-v="j">
                                    </div>
                                    `;
                                    })
                                }else if(res.s=='x_small'){
                                    $.each(res.data,function(i,e){
                                    html+=`
                                    <div class="swiper-slide">
                                        <img src="${e.x_small}" alt="" class="big" data-v="x">
                                    </div>
                                    `;
                                    })
                                }else if(res.s=='y_small'){
                                    $.each(res.data,function(i,e){
                                    html+=`
                                    <div class="swiper-slide">
                                        <img src="${e.y_small}" alt="" class="big" data-v="y">
                                    </div>
                                    `;
                                    })
                                }else if(res.s=='s_small'){
                                    $.each(res.data,function(i,e){
                                    html+=`
                                    <div class="swiper-slide">
                                        <img src="${e.s_small}" alt="" class="big" data-v="s">
                                    </div>
                                    `;
                                    })
                                }
                                
                            
                            $('.m-lll').html(html);
                            $('.big').on('click',function(){
                                var img=$(this).attr('src');
                                var arr=img.split('/');
                                if(arr.length>4){
                                    var a=arr[5].split('_');
                                    a[1]=800;
                                    arr[5]=a.join('_');
                                    img=arr.join('/');
                                    var html=`
                                        <img class="m_bigimg" src="${img}">
                                    `;
                                }else{
                                    var a=arr[3].split('_');
                                    a[1]=800;
                                    arr[3]=a.join('_');
                                    img=arr.join('/');
                                    var html=`
                                        <img class="m_bigimg" src="${img}">
                                    `;
                                }
                                
                                $('.m-bigimgs').html(html);
                                $('.m-bigimgs').show();
                                $('.m-chang').show();
                            })
            		  
                        }
                    },
                    'json'
                )
            })
            $('.m-listen').on('click',function(){
                $('.m-chang').show();
                $('#m_a_box').show(300);
            })
            $('#m_a_esc').on('click',function(){
                $('.m-chang').hide();
                $('#m_a_box').hide();
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
        }else if (ua.match(/safari/) != null) {
            browserType = "Safari";
        }
        return browserType;
}
            function send(type,data){
                $.post(
                    "<?php echo url('home/content/port1'); ?>",
                    data,
                    function(){
                        if(type=='变价通知'){
                                $('#o_p').text('已成功订阅变价通知，我们会第一时间通过短信通知您');
                                $('.m-o-succ').show();
                                $('.m-chang').show();
                            }else if(type=='开盘通知'){
                                $('#o_p').text('已成功订阅开盘通知，我们会第一时间通过短信通知您');
                                $('.m-o-succ').show();
                                $('.m-chang').show();
                            }else if(type=="预约看房"){
                                $('#o_p').text('已预约成功，我们会第一时间与您联系');
                                $('.m-o-succ').show();
                                $('.m-chang').show();
                            }else if(type=="我要优惠"){
                                $('#o_p').text('已成功报名，我们会第一时间把优惠楼盘推送给您');
                                $('.m-o-succ').show();
                                $('.m-chang').show();
                            }else if(type=="最新动态"){
                                $('#o_p').text('已成功订阅最新动态，我们会第一时间把楼盘动态推送给您');
                                $('.m-o-succ').show();
                                $('.m-chang').show();
                            }else if(type=='领取户型图'){
                                $('#o_p').text('已成功领取，我们会第一时间将资料送给您');
                                $('.m-o-succ').show();
                                $('.m-chang').show();
                            }else if(type=='领取免费相册资料'){
                                $('#o_p').text('已成功领取，我们会第一时间将资料送给您');
                                $('.m-o-succ').show();
                                $('.m-chang').show();
                            }else if(type=="楼盘周边信息"){
                                $('#o_p').text('已成功获取，我们会第一时间与您沟通');
                                $('.m-o-succ').show();
                                $('.m-chang').show();
                            }else if(type=="领取免费资料"){
                                $('#o_p').text('已成功领取，我们会第一时间将资料送给您');
                                $('.m-o-succ').show();
                                $('.m-chang').show();
                            }else if(type=="获取详细分析资料"){
                                $('#o_p').text('已成功领取，我们会第一时间将资料送给您');
                                $('.m-o-succ').show();
                                $('.m-chang').show();
                            }
                    },
                    'json'
                )
            }

	function qudao(){
		var qu='自然进客';
	    var ua = navigator.userAgent.toLocaleLowerCase();
        if(document.referrer.indexOf("baidu")!=-1){
            var qu='百度';
        }
	    else if (ua.match(/safari/) != null) {
            qu = "UC";
        }
            return qu;
        }
            $('#m_want').on('click',function(){
                $('.m-chang').show();
                $('#m_sc_box').show(150);
            })
            $('.q-bian').on('click',function(){
                var type=$(this).attr('data-v');
                var phone='';
                phone=<?php if(\think\Session::get('user.phone')): ?><?php echo \think\Session::get('user.phone'); else: ?>''<?php endif; ?>;
                var data={
                    'type':$(this).attr('data-v'),
                    'phone':phone
                }
                send(type,data);
            })
            
            function moren(){
                placeSearch.searchNearBy('购物', cpoint, 2000, function(status, result) {
                var ht='<p class="m-type">购物</p>';
                // console.log(ht)
                $.each(result.poiList.pois,function(i,e){
                    // console.log(e);
                    var p2=[e.location.lng,e.location.lat];
                    var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                    s=s.toFixed(1);
                    ht+=`
                    <div class="m-te">
                        <h5 class="m-name">${e.name}</h5>
                        <p class="m-ju"><img src="/static/home/imgs/path.png" alt="">${s}km</p>
                    </div>
                    `;
                })
                $('.m-l-content').html(ht);
            });
            placeSearch.searchNearBy('美食', cpoint, 2000, function(status, result) {
                var html=$('.m-l-content').html();
                var ht='<p class="m-type">美食</p>';
                $.each(result.poiList.pois,function(i,e){
                    // console.log(e);
                    var p2=[e.location.lng,e.location.lat];
                    var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                    s=s.toFixed(1);
                    ht+=`
                    <div class="m-te">
                        <h5 class="m-name">${e.name}</h5>
                        <p class="m-ju"><img src="/static/home/imgs/path.png" alt="">${s}km</p>
                    </div>
                    `;
                })
                html+=ht;
                $('.m-l-content').html(html);
            });
            placeSearch.searchNearBy('超市', cpoint, 2000, function(status, result) {
                var html=$('.m-l-content').html();
                var ht='<p class="m-type">超市</p>';
                $.each(result.poiList.pois,function(i,e){
                    // console.log(e);
                    var p2=[e.location.lng,e.location.lat];
                    var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                    s=s.toFixed(1);
                    ht+=`
                    <div class="m-te">
                        <h5 class="m-name">${e.name}</h5>
                        <p class="m-ju"><img src="/static/home/imgs/path.png" alt="">${s}km</p>
                    </div>
                    `;
                })
                html+=ht;
                $('.m-l-content').html(html);
            });
            }
            moren();

            
        $('#list li').on('click',function(){
            $(this).addClass('m-active').siblings('li').removeClass('m-active');
            if($(this).text()=='生活'){
                moren();
            }else if($(this).text()=="交通"){
                
                placeSearch.searchNearBy('地铁', cpoint, 2000, function(status, result) {
                    var html="";
                    var ht='<p class="m-type">地铁</p>';
                    $.each(result.poiList.pois,function(i,e){
                        var p2=[e.location.lng,e.location.lat];
                        var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                        s=s.toFixed(1);
                        console.log(e);
                        ht+=`
                        <div class="m-te">
                            <h5 class="m-name">${e.name}</h5>
                            <p class="m-area">${e.address}</p>
                            <p class="m-ju"><img src="/static/home/imgs/path.png" alt="">${s}km</p>
                        </div>
                        `;
                    })
                    html+=ht;
                    console.log(html)
                    $('.m-l-content').html(html);
                });
                placeSearch.searchNearBy('公交', cpoint, 2000, function(status, result) {
                    var html=$('.m-l-content').html();
                    var ht='<p class="m-type">公交</p>';
                    $.each(result.poiList.pois,function(i,e){
                        var p2=[e.location.lng,e.location.lat];
                        var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                        s=s.toFixed(1);
                        ht+=`
                        <div class="m-te">
                            <h5 class="m-name">${e.name}</h5>
                            <p class="m-area">${e.address}</p>
                            <p class="m-ju"><img src="/static/home/imgs/path.png" alt="">${s}km</p>
                        </div>
                        `;
                    })
                    html+=ht;
                    $('.m-l-content').html(html);
                });
            }else if($(this).text()=='医疗'){
                placeSearch.searchNearBy('医院', cpoint, 2000, function(status, result) {
                    var ht='<p class="m-type">医院</p>';
                    $.each(result.poiList.pois,function(i,e){
                        var p2=[e.location.lng,e.location.lat];
                        var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                        s=s.toFixed(1);
                        ht+=`
                        <div class="m-te">
                            <h5 class="m-name">${e.name}</h5>
                            <p class="m-ju"><img src="/static/home/imgs/path.png" alt="">${s}km</p>
                        </div>
                        `;
                    })
                    $('.m-l-content').html(ht);
                });
            }else if($(this).text()=='学校'){
                placeSearch.searchNearBy('学校', cpoint, 2000, function(status, result) {
                    var ht='<p class="m-type">学校</p>';
                    $.each(result.poiList.pois,function(i,e){
                        var p2=[e.location.lng,e.location.lat];
                        var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                        s=s.toFixed(1);
                        ht+=`
                        <div class="m-te">
                            <h5 class="m-name">${e.name}</h5>
                            <p class="m-ju"><img src="/static/home/imgs/path.png" alt="">${s}km</p>
                        </div>
                        `;
                    })
                    $('.m-l-content').html(ht);
                });
            }
           
        });
        $('#m_look').on('click',function(){
                $('.m-chang').show();
            $('#m_y_box').show(300)
        })
        $('#m_fen').on('click',function(){
            $('.m-chang').show();
            $('#m_f_box').show(300)
        })
        $('.m-y').on('click',function(){
            $('.m-chang').show();
            $('#m_y_box').show(300)
        })
        $('#m_f_esc').on('click',function(){
            $('.m-chang').hide();
            $('#m_f_box').hide();
        })
        $('#m_more').on('click',function(){
            window.location.href="<?php echo url('home/content/xiang',['id'=>$data['id']]); ?>"
        })
        $('#m_ti').on('click',function(){
            window.location.href="<?php echo url('home/user/login'); ?>";
        })
        $('#m_shou').on('click',function(){
            var txt=$(this).text();
            
            if(txt=='收藏'){
                var id=$(this).attr('data_v');
                var that=$(this);
                $.post(
                    "<?php echo url('home/content/fork'); ?>",
                    {"id":id},
                    function(res){
                        if(res.code==100){
                           $('.m-fork').attr('src',res.ss);
                           $('.m-fork').attr('alt','已收藏');
                            var html=`
                                <img style="margin-left:17%" src="${res.msg}" alt="">已收藏
                                    `;
                            that.html(html)
                            
                        }else{
                            window.location.href="<?php echo url('home/user/login'); ?>";
                        }
                    },
                    'json'
                )
            }else{
                return;
            }
            
        })

        $('.m-ishou').on('click',function(){
            var txt=$(this).children('i').text();
            // console.log(txt);
            
            if(txt=='收藏'){
                var id=$(this).attr('data_v');
                var that=$(this);
                $.post(
                    "<?php echo url('home/content/fork'); ?>",
                    {"id":id},
                    function(res){
                        if(res.code==100){
                           $('.m-fork').attr('src',res.ss);
                           $('.m-fork').attr('alt','已收藏');
                            var html=`
                                <img style="margin-left:17%" src="${res.msg}" alt="">已收藏
                                    `;
                            that.html(html)
                            
                        }else{
                            $('.m-chang').show();
                            $('#m_ti').html(res.msg);
                            $('#m_ti').show();
                        }
                    },
                    'json'
                )
            }else{
                return;
            }
            
        })










        $('.m-fork').on('click',function(){
            var txt=$(this).attr('alt');
            console.log(txt);
            if(txt=='收藏'){
                var id=$(this).attr('data_v');
                var that=$(this);
                $.post(
                    "<?php echo url('home/content/fork'); ?>",
                    {"id":id},
                    function(res){
                        if(res.code==100){
                            that.attr('src',res.ss);
                            that.attr('alt','已收藏');
                            var html=`
                            <img style="margin-left:17%" src="${res.msg}" alt="">已收藏
                                    `;
                            $('#m_shou').html(html)
                        }else{
                            $('.m-chang').show();
                            $('#m_ti').html(res.msg);
                            $('#m_ti').show();
                        }
                    },
                    'json'
                )
            }else{
                return;
            }
        })
    })
   
    });
    </script>
    <script>
	        $(document).ready(function(){
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
        }else if (ua.match(/safari/) != null) {
            browserType = "Safari";
        }
        return browserType;
}
	
	function qudao(){
		var qu='自然进客';
	var ua = navigator.userAgent.toLocaleLowerCase();
            if(document.referrer.indexOf("baidu")!=-1){
                var qu='百度';
            }
	

	else if (ua.match(/safari/) != null) {
            qu = "UC";
        }
	   
            return qu;
        }



        // 点击顶部图片跳转
        $('.m-luns').on('click',function(){
            window.location.href="<?php echo url('home/content/lpic',['id'=>$data['id']]); ?>";
        })
        // 周边规划跳转
        $('.m-zhou h3 span').on('click',function(){
            window.location.href="<?php echo url('home/content/zg',['id'=>$data['id']]); ?>";
        })
        $('.m-z-icons').on('click',function(){
            window.location.href="<?php echo url('home/content/zg',['id'=>$data['id']]); ?>";
        })


            document.addEventListener('touchmove',function(e){
                var h=document.body.scrollTop; 
                if(h>=2279){
                    $('.m-3').addClass('m-active').siblings('span').removeClass('m-active');
                }else if(h>=1538){
                    $('.m-2').addClass('m-active').siblings('span').removeClass('m-active');
                }else if(h>=170){
                    $('.m-tnav').show();
                    $('.m-1').addClass('m-active').siblings('span').removeClass('m-active');
                }else{
                    $('.m-tnav').hide();
                }
            })
            $(window).scroll(function(){
                //获取滚动条的滑动距离
                    var h = $(this).scrollTop();
                   console.log(h);
                })    
            $('.m-1').on('click',function(){
                document.body.scrollTop=170;
                $('.m-1').addClass('m-active').siblings('span').removeClass('m-active');
            })
            $('.m-2').on('click',function(){
                document.body.scrollTop=1538;
                $('.m-2').addClass('m-active').siblings('span').removeClass('m-active');
            })
            $('.m-3').on('click',function(){
                document.body.scrollTop=2279;
                $('.m-3').addClass('m-active').siblings('span').removeClass('m-active');
            })
            $('.m-bian').on('click',function(){
                $('#m_c_box').show(150);
                $('.m-chang').show();
            })
            $('#m_c_esc').on('click',function(){
                $('#m_c_box').hide();
                $('.m-chang').hide();
            })
            $('.m-chang').on('click',function(){
                $('.m-p-succ').hide();
                $('.m-chang').hide();
                $('#m_c_box').hide();
                $('#m_d_box').hide();
                $('#m_g_box').hide();
                $('#m_y_box').hide();
                $('#m_k_box').hide();
                $('#m_h_box').hide();
                $('#m_l_box').hide();
                $('#m_w_box').hide();
                $('#m_z_box').hide();
                $('#m_a_box').hide();
                $('#m_ti').hide();
                $('#m_f_box').hide();
                $('.m-p-succ').hide();
		        $('#m_sc_box').hide();
                $('.weiter').hide();
            })
            

            $('.p1').on('click',function(){
                window.type=$(this).attr('data-v');
                if(type=="变价通知"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键订阅最新变价通知，不再错过变价信息哦！');
                }else if(type=="开盘通知"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键订阅最新开盘通知,不再错过开盘信息哦！');
                }else if(type=="预约看房"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键预约看房免费小车上门接送，可带家人一起参观多个热门楼盘 ');
                }else if(type=="我要优惠"){
                    $('.weiter .t-top h6').html('报名获取考察旅游名额');
                    $('.weiter .t-top p').html('一键获取亚热带三天两夜游的名额！');
                }else if(type=="咨询服务"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('立即报名，专业人员为你解惑!');
                }else if(type=="最新动态"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键订阅楼盘动态,最新动态抢先知！');
                }else if(type=="楼盘周边信息"){
                    $('.weiter .t-top h6').html('获取楼盘周边信息');
                    $('.weiter .t-top p').html('立即向售楼人员咨询楼盘周边信息');
                }else if(type=="最新预售许可证"){
                    $('.weiter .t-top h6').html('了解最新预售许可证');
                    $('.weiter .t-top p').html('向售楼人员咨询最新许可证');
                }else if(type=="最新成交价"){
                    $('.weiter .t-top h6').html('获取最新成交价');
                    $('.weiter .t-top p').html('向售楼人员咨询最新成交价');
                }else if(type=="详细楼盘户型"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键咨询，了解楼盘详细户型！');
                }else if(type=="领取免费资料"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键订阅楼盘最新详情，楼盘详情早知道！');
                }else if(type=="免费领取地图"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键免费领取地图，楼盘随心看！');
                }else if(type=="了解详细户型"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键领取高清户型图，真实户型早知道！');
                }else if(type=="获取高清配套图"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键领取高清图，楼盘图片清晰看！');
                }else if(type=="获取详细分析资料"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键获取楼盘对比分析资料，好楼盘早知道！');
                }
                $('.weiter').show();
                $('.m-chang').show();
                
            })

           
            // 接口验证码
            $('.t-b-btn2').on('click',function(){


                var phone=$(this).prev().val();
		        var type=$(this).parent().parent().prev().find('h6').html();
                var building_name=$(this).parent().next().find('#building_name').val();
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
						$('.t-b-scode').html('重新发送' + time + 's');
                        $('.t-b-scode').attr('disabled', true);
					} else {
						clearInterval(interval);
						$('.t-b-scode').html('获取验证码');
						$('.t-b-scode').attr('disabled', false);
					}
				};
				fn();
				var interval = setInterval(fn, 1000);
                var data={'phone':phone,'type':type,'building_name':building_name};
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
                            var sign=parseInt(new Date().getTime()/1000);
                            var project=<?php echo $data['id']; ?>;
                            $.post(
                                "<?php echo url('home/user/email'); ?>",
                                {'sign':sign,'username':'未知','project':project,'source':'线上推广1','remark':'不是留言','cate_id':0,'phone':phone},
                                function(res){
                                    if(res.code){
                                        // alert(res.message)
                                    }else{
                                        // alert(res.message);
                                    }
                                }
                            )
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
                // console.log(data);return
                var that=$(this)
                $.post(
                    "<?php echo url('home/content/port1'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            that.parent().parent().parent().hide();
                            $('.t-b-first').show();
                            $('.t-b-second').hide();
                                $('#o_p').text('已成功订购服务，我们会第一时间通过电话联系您');
                                $('.m-o-succ').show();
                        }
                    },
                    'json'
                )
            })
            $('#w-esc').on('click',function(){
                $('.weiter').hide();
                $('.m-chang').hide();
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

            // 验证码
            $('.m-getcode').on('click',function(){
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
                var type=$(this).next().val();
                var building_name=$(this).next().next().val();
                var data={
                    'phone':tel,
                    'type':type,
                    'building_name':building_name
                }
                $.post(
                    "<?php echo url('home/content/port1'); ?>",
                    data,
                    function(res){
                        
                    },
                    'json'
                )
                var time=3;
                var fn = function () {
					time--;
					if (time > 0) {
						$('.m-getcode').html('重新发送' + time + 's');
                        $('.m-getcode').attr('disabled', true);
					} else {
						clearInterval(interval);
						$('.m-getcode').html('获取验证码');
						$('.m-getcode').attr('disabled', false);
					}
				};
				fn();
				var interval = setInterval(fn, 1000);
                
            })


            $('.m-c-port1').on('click',function(){
                var building_name=$(this).prev().val();
		        var ma=$(this).prev().prev().val();
                var name=$(this).prev().prev().prev().prev().val();
                var tel=$(this).prev().prev().prev().prev().prev().val();
                var type=$(this).prev().prev().prev().val();
                var pattern_tel = /^1[3-9][0-9]{9}$/;
				if (tel == '') {
					$(this).prev().prev().prev().prev().prev().val('')
                    $(this).prev().prev().prev().prev().prev().attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_tel.test(tel)) {
					$(this).prev().prev().prev().prev().prev().val('')
					$(this).prev().prev().prev().prev().prev().attr('placeholder','手机号码不合法');
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

                var that=$(this)
                $.post(
                    "<?php echo url('home/content/port1'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
			
                            that.parent().hide();
                            if(type=='变价通知'){
                                $('#o_p').text('已成功订阅变价通知，我们会第一时间通过短信通知您');
                                $('.m-o-succ').show();
                            }else if(type=='开盘通知'){
                                $('#o_p').text('已成功订阅开盘通知，我们会第一时间通过短信通知您');
                                $('.m-o-succ').show();
                            }else if(type=="预约看房"){
                                $('#o_p').text('已预约成功，我们会第一时间与您联系');
                                $('.m-o-succ').show();
                            }else if(type=="我要优惠"){
                                $('#o_p').text('已成功报名，我们会第一时间把优惠楼盘推送给您');
                                $('.m-o-succ').show();
                            }else if(type=="最新动态"){
                                $('#o_p').text('已成功订阅最新动态，我们会第一时间把楼盘动态推送给您');
                                $('.m-o-succ').show();
                            }else if(type=="获取最低成交价"){
                         		$('#o_p').text('已成功订阅最低成交价，我们会第一时间把最低成交价推送给您');
                        		$('.m-o-succ').show();
                    		}
                        }
                    },
                    'json'
                )
            })
            $('.m-c-port2').on('click',function(){
                var building_name=$(this).prev().val();
                var type=$(this).prev().prev().prev().val();
                var tel=$(this).prev().prev().prev().prev().val();
                var address=$(this).prev().prev().prev().prev().prev().val();
                var name=$(this).prev().prev().prev().prev().prev().prev().val();
		        var ma=$(this).prev().prev().val();
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
                    'address':address,
                    'name':name,
                    'building_name':building_name,
                    'brower':brower,
                    'qu':qu,
                    'ma':ma
                }
                var that=$(this)
                $.post(
                    "<?php echo url('home/content/port2'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
			
                            that.parent().hide();
                            if(type=='领取户型图'){
                                $('#o_p').text('已成功领取，我们会第一时间将资料送给您');
                                $('.m-o-succ').show();
                            }else if(type=='领取免费相册资料'){
                                $('#o_p').text('已成功领取，我们会第一时间将资料送给您');
                                $('.m-o-succ').show();
                            }else if(type=="楼盘周边信息"){
                                $('#o_p').text('已成功获取，我们会第一时间与您沟通');
                                $('.m-o-succ').show();
                            }else if(type=="领取免费资料"){
                                $('#o_p').text('已成功领取，我们会第一时间将资料送给您');
                                $('.m-o-succ').show();
                            }
                        }
                    },
                    'json'
                )
            })
            
            $('#o_btn').on('click',function(){
                $(this).parent().hide();
                $('.m-chang').hide();
            })
            $('.o-esc').on('click',function(){
                $(this).parent().hide();
                $('.m-chang').hide();
            })

//楼盘问答---查看全文
     var  flag=true;
      $('.m-w-all').click(function(){
          if(flag==true){
            $(this).prev().children("i").css({
              "-webkit-line-clamp":"inherit"
            }) 
            $(this).html("点击收起")
            flag=false;
          }else{
            $(this).prev().children("i").css({
              "-webkit-line-clamp":"3"
            }) 
            $(this).html("查看全文")
            flag=true; 
          }
      })
//点击按钮出现hover
      $(function () {
        function changeColor(id,class1,class2) {
            $("#"+id).on("touchstart",function () {
                $(this).attr("class",class1)
            })
            $("#"+id).on("touchend",function () {
                $(this).attr("class",class2)
            })
        }
        changeColor("dingxue","bg_02","bg_01")
    });



        })

	</script>
</body>
</html>