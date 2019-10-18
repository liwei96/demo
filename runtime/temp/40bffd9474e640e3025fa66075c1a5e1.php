<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\php\PHPTutorial\WWW\tp\public/../application/home\view\content\index.html";i:1565067931;}*/ ?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cache.amap.com/lbs/static/main1119.css"/>
    <link rel="stylesheet" href="/static/home/css/c-index.css">
    <!-- 1.2 -->
    <link rel="stylesheet" href="/static/home/css/c-index1.2.css">
    <style>
	*{
	      font-family:"Microsoft YaHei";
	}
        .m-home{
            width: 7.3%;
            position: absolute;
            top: 20px;
            right: 4.6%;
            z-index: 1;
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


        /* 改版1.2css */
        
    </style>
   
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
                        <div class="jSlider" id="slider1" data-navigation="none">
                            <?php foreach($xiaoimgs as $v): ?>
                            <div><img src="<?php echo $v['x_big']; ?>" style="width:100%"></div>
                            <?php endforeach; ?>
                        </div>
                </div>
            </div>

        <div class="m-incro visible-xs-block .visible-sm-block">
            <h3><?php echo $data['building_name']; ?></h3>
            <div class="m-ic-icons">
                <span class="m-zai">在售</span>
                <span class="m-jing"><?php echo $data['building_zhuangxiu']; ?></span>
                <span><?php echo $data['building_ditie']; ?></span>
            </div>
            <ul>
                <li>参考单价&nbsp;&nbsp;&nbsp;&nbsp;<span class="m-pric"><span><?php echo $data['danjia']; ?></span>元/m²起</span></li>
                <li>建筑面积&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['humianji']; ?>m²</span></li>
                <li>楼盘户型&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['building_huxing']; ?>、<?php echo $data['building_xingshi']; ?></span></li>
                <li>开盘时间&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['kaitime']; ?></span></li>
                <li>楼盘地址&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['building_address']; ?></span></li>
            </ul>
            <p id="m_more">更多楼盘信息</p>
            <div class="m-new">
                <a href="#" data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="变价通知"<?php else: ?>class="m-bian"<?php endif; ?>><img src="/static/home/imgs/m-change.png">最新变价通知</a>
                <a href="#" data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="开盘通知"<?php else: ?>class="m-kai"<?php endif; ?>><img src="/static/home/imgs/m-open.png">最新开盘通知</a>
            </div>
        </div>  
        <div class="m-image visible-xs-block .visible-sm-block">
	<?php if(($data['city'] == '贵阳') OR ($data['city'] == '成都') OR ($data['city'] == '重庆')): ?>
            <a data-agl-cvt="2" href="tel:400-718-6686">
               <img src="/static/home/imgs/phone22.png" alt="">
             </a>
	<?php else: ?>
	     <a data-agl-cvt="2" href="tel:0571-82576775">
            <img src="/static/home/imgs/phone.png" alt="">
            </a>
	    
	<?php endif; ?>
        </div>
        <div class="m-dong visible-xs-block .visible-sm-block">
            <h3 id="m_dong">楼盘动态<span>共<?php echo $num; ?>条<img src="/static/home/imgs/m-go.png" alt=""></span></h3>

            <?php foreach($dongs as $v): ?>
            <div class="m-tai m-d">
                <h4><img src="/static/home/imgs/dt.png" alt=""><?php echo $data['building_name']; ?>最新房源动态</h4>
                <p><?php echo $v['introduce']; ?></p>
                <span><?php echo $v['create_time']; ?></span>
            </div>
            <?php endforeach; foreach($jia as $v): ?>
            <div class="m-d-jia m-d">
                <h4><img src="/static/home/imgs/jt.png" alt="">最新加推时间：<?php echo $v['create_time']; ?></h4>
                <p><?php echo $v['introduce']; ?></p>
                <span><?php echo $v['create_time']; ?></span>
            </div>
            <?php endforeach; ?>
            <div class="m-d-jiao m-d">
                <h4><img src="/static/home/imgs/jf.png" alt="">预计交房时间：<?php echo $data['jiaotime']; ?></h4>
            </div>
            <div class="m-d-jiao m-d">
                <h4><img src="/static/home/imgs/sk.png" alt="">首开时间：<?php echo $data['kaitime']; ?></h4>
            </div>
            <div class="m-d-jiao m-d">
                <h4><img src="/static/home/imgs/nd.png" alt="">拿地时间：<?php echo $data['n_time']; ?></h4>
            </div>
            <div class="t-o o1"></div>
            <div class="t-o o2"></div>
            <div class="t-o o3"></div>
            <div class="t-o o4"></div>
            <div class="t-o o5"></div>
            <div class="t-l l1"></div>
            <div class="t-l l2"></div>
            <div class="t-l l3"></div>
            <div class="t-l l4"></div>

            <button data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="最新动态"<?php else: ?>id="m_h_btn"<?php endif; ?> >获取最新动态</button>
            
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-you visible-xs-block .visible-sm-block">
            <h3>购房领优惠</h3>
            <img class="m-y-g" data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="我要优惠"<?php else: ?>id="m_w_btn"<?php endif; ?> src="/static/home/imgs/yh.gif" alt="">
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
            
                <button data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="了解详细户型"<?php else: ?>id="m_h_bt"<?php endif; ?> >了解详细户型</button>
        </div>
        
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-yu visible-xs-block .visible-sm-block">
            <h3>您预约、我接送</h3>
            <img src="/static/home/imgs/yy.png" alt="">
            <button data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="预约看房"<?php else: ?>id="m_look"<?php endif; ?> >我要看房</button>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-fen visible-xs-block .visible-sm-block">
            <h3>对比分析资料</h3>
            <h4>投资分析</h4>

            <p>1、<?php echo $tou['cone']; ?></p>
            <p>2、<?php echo $tou['ctwo']; ?></p>
            <p>3、...</p>
            <h4>投资分析</h4>
            <p>1、<?php echo $yi['cone']; ?></p>
            <p>2、<?php echo $yi['ctwo']; ?></p>
            <p>3、...</p>
            <button data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="预约看房"<?php else: ?>id="m_fen"<?php endif; ?> >获取详细分析资料</button>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-ling visible-xs-block .visible-sm-block">
            <h3>楼盘资料免费领</h3>
            <img src="/static/home/imgs/zi2.png" alt="">
            <p>已有<span>260</span>人领取，包邮哦！</p>
            <button data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="领取免费资料"<?php else: ?>id="m_l_btn"<?php endif; ?> >免费领取</button>
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
                    <td><?php echo $v[2]; ?>万</td>
                </tr>
                <?php endforeach; ?>
                
            </table>
            <div class="m-btns">
                <input type="text" placeholder="请输入接收短信通知的手机号">
                <button data-agl-cvt="5" id="m_want">我要查看</button>
                <input type="hidden" name="type" value="查询最新成交价">
                <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
            </div>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-dai visible-xs-block .visible-sm-block">
            <h3>值班置业顾问</h3>
            <div class="m-d-content">
                <img src="/static/home/imgs/people.png" alt="<?php echo \think\Session::get('user.fork'); ?>">
                <div>
                    <p class="m-d-name">倪丽丽</p>
                    <p class="m-d-ping">评分5.0分,近期带看5次</p>
                    <p class="m-d-text">我带看过本房，清楚本房特色</p>
                </div>
                <button data-agl-cvt="5" class="m-listen">让她联系我</button>
            </div>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-imgs visible-xs-block .visible-sm-block">
            <h3>楼盘相册</h3>
            <ul id="m_ul">
                <li data-v="效果图" class="m-active">效果图<i></i></li>
                <li data-v="实景图">实景图<i></i></li>
                <li data-v="样板图">样板图<i></i></li>
                <li data-v="配套图">配套图<i></i></li>
                <li data-v="交通图">交通图<i></i></li>
            </ul>
            <div class="swiper-container">
                <div class="swiper-wrapper m-lll">
                    <?php foreach($xiaoimgs as $v): ?>
                    <div class="swiper-slide">
                        <img src="<?php echo $v['x_small']; ?>" alt="" class="big" data-v="x">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <button data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="领取免费相册资料"<?php else: ?>id="m_s_btn"<?php endif; ?> >获取高清配套图</button>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        
        <div class="m-zhou visible-xs-block .visible-sm-block">
            <h3>楼盘周边</h3>
            <div class="m-continer" id="m-container">

            </div>
            <div class="m-list">
                <ul id="list">
                    <li class="m-active">生活</li>
                    <li >交通</li>
                    <li>医疗</li>
                    <li>学校</li>
                </ul>
                <div class="m-l-content">
                   
                </div>
            </div>
            <button data-agl-cvt="5" <?php if(\think\Session::get('user')): ?>class="q-bian" data-v="楼盘周边信息"<?php else: ?>id="m_z_btn"<?php endif; ?> >获取楼盘周边信息</button>
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
        
        <div class="m-tui visible-xs-block .visible-sm-block">
            <h3>家园推荐</h3>
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
                                        </h4>
                                        <p class="m-price"><span><?php echo $v['danjia']; ?></span>元/m²</p>
                                        <p class="m-xiang">
                                            <span><?php echo $v['city']; ?>-<?php echo $v['qu']; ?></span>
                                            <span>建面</span>
                                            <span><?php echo $v['jianji']; ?>m²</span>
                                        </p>
                                        <p class="m-icon">
                                            <span class="m-p-1"><?php echo $v['building_xiaoshou']; ?></span>
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
            <a data-agl-cvt="5" href="tel:0571-82576775"><button class="m-pho">电话咨询</button></a>
            <button data-agl-cvt="5" class="m-y">预约看房</button>
        </div>
        <div class="visible-xs-block .visible-sm-block">
            <div id="m_p_box">
                <h4>用户点评<img class="m_p_exc" src="/static/home/imgs/m-esc.png" alt=""></h4>
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
            <div id="m_c_box">
                    <div class="m-c-content">
                        <h5>变价通知</h5>
                        <img id="m_c_esc" src="/static/home/imgs/m-esc.png" alt="">
                        <p>一键订阅最新变价通知，不再错过变价信息哦！</p>
                        <input name="tel" type="text" placeholder="请输入手机号">
                        <input name="tel" type="name" placeholder="请输入姓名">
                        <input type="hidden" name="type" value="变价通知">
                        <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
                        <button class="m-c-port1">确定</button>
                    </div>
                    
            </div>
            <div class="m-chang"></div>
            <div id="m_k_box">
                    <div class="m-c-content">
                        <h5>开盘通知</h5>
                        <img id="m_k_esc" src="/static/home/imgs/m-esc.png" alt="">
                        <p>一键订阅最新变价通知，不再错过变价信息哦！</p>
                            <input type="text" placeholder="请输入手机号">
                            <input type="name" placeholder="请输入姓名">
                            <input type="hidden" name="type" value="开盘通知">
                        <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
                        <button class="m-c-port1">确定</button>
                    </div>
                    
            </div>
            <div id="m_a_box" style="display: none">
                    <div class="m-c-content">
                        <h5>专业服务</h5>
                        <img id="m_a_esc" src="/static/home/imgs/m-esc.png" alt="">
                        <p>一键订阅，享受最专业的服务！</p>
                            <input type="text" placeholder="请输入手机号">
                            <input type="name" placeholder="请输入姓名">
                            <input type="hidden" name="type" value="专业服务">
                        <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
                        <button class="m-c-port1">确定</button>
                    </div>
                    
            </div>
            <div id="m_d_box">
                    <div class="m-c-content">
                        <h5>最新动态</h5>
                        <img id="m_d_esc" src="/static/home/imgs/m-esc.png" alt="">
                        <p>一键获取最新动态，了解最新楼盘动态信息 </p>
                            <input type="text" placeholder="请输入手机号">
                            <input type="name" placeholder="请输入姓名">
                            <input type="hidden" name="type" value="最新动态">
                        <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
                            <button class="m-c-port1">确定</button>
                    </div>
            </div>
            <div id="m_y_box">
                    <div class="m-c-content">
                        <h5>预约看房</h5>
                        <img id="m_y_esc" src="/static/home/imgs/m-esc.png" alt="">
                        <p>一键预约看房免费小车上门接送，可带家人一起参观多个热门楼盘 </p>
                            <input type="text" placeholder="请输入手机号">
                            <input type="name" placeholder="请输入姓名">
                            <input type="hidden" name="type" value="预约看房">
                        <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
                            <button class="m-c-port1">确定</button>
                    </div>
            </div>
            <div id="m_f_box">
                <div class="m-c-content">
                    <h5>获取详细分析资料</h5>
                    <img id="m_f_esc" src="/static/home/imgs/m-esc.png" alt="">
                    <p>一键获取详细分析资料，详细了解楼盘 </p>
                        <input type="text" placeholder="请输入手机号">
                        <input type="name" placeholder="请输入姓名">
                        <input type="hidden" name="type" value="获取详细分析资料">
                    <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
                        <button class="m-c-port1">确定</button>
                </div>
            </div>
            <div id="m_w_box">
                    <div class="m-c-content">
                        <h5>我要优惠</h5>
                        <img id="m_w_esc" src="/static/home/imgs/m-esc.png" alt="">
                        <p>一键报名优惠楼盘，更多优惠楼盘抢先看！ </p>
                            <input type="text" placeholder="请输入手机号">
                            <input type="name" placeholder="请输入姓名">
                            <input type="hidden" name="type" value="我要优惠">
                        <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
                            <button class="m-c-port1">确定</button>
                    </div>
            </div>
            <div id="m_g_box">
                    <div class="m-c-content">
                        <h5>楼盘周边信息</h5>
                        <img id="m_g_esc" src="/static/home/imgs/m-esc.png" alt="">
                            <input type="text" placeholder="收件人姓名">
                            <input type="text" placeholder="收件人地址">
                            <input type="text" placeholder="收件人电话">
                            <input type="hidden" name="type" value="楼盘周边信息">
                        <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
                            <button class="m-c-port2">确定</button>
                    </div>
            </div>
            <div id="m_h_box">
                    <div class="m-c-content">
                        <h5>领取户型图</h5>
                        <img id="m_h_esc" src="/static/home/imgs/m-esc.png" alt="">
                            <input type="text" placeholder="收件人姓名">
                            <input type="text" placeholder="收件人地址">
                            <input type="text" placeholder="收件人电话">
                            <input type="hidden" name="type" value="领取户型图">
                        <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
                            <button class="m-c-port2">确定</button>
                    </div>
            </div>
            <div id="m_l_box">
                    <div class="m-c-content">
                        <h5>领取免费资料</h5>
                        <img id="m_l_esc" src="/static/home/imgs/m-esc.png" alt="">
                            <input type="text" placeholder="收件人姓名">
                            <input type="text" placeholder="收件人地址">
                            <input type="text" placeholder="收件人电话">
                            <input type="hidden" name="type" value="领取免费资料">
                        <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
                            <button class="m-c-port2">确定</button>
                    </div>
            </div>
            <div id="m_z_box">
                    <div class="m-c-content">
                        <h5>领取免费相册资料</h5>
                        <img id="m_z_esc" src="/static/home/imgs/m-esc.png" alt="">
                            <input type="text" placeholder="收件人姓名">
                            <input type="text" placeholder="收件人地址">
                            <input type="text" placeholder="收件人电话">
                            <input type="hidden" name="type" value="领取免费相册资料">
                        <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
                            <button class="m-c-port2">确定</button>
                    </div>
            </div>
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
    <script src="/static/home/js/echarts.min.js"></script>
    <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.14&key=729ac4d779c7e625bc11bd5ba3ff3112"></script>
    <script type="text/javascript" src="https://cache.amap.com/lbs/static/addToolbar.js"></script>
    
    
    
    <script>
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
            slidesPerView: 'auto',
            spaceBetween: 15,
            pagination: {
            el: '.swiper-pagination',
            clickable: true,
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
                var phone=$(this).prev().val();
                var type=$(this).next().val();
                var building_name=$(this).next().next().val();
                var brower=getBrowserInfo();
	            var qu=qudao();
                var data={
                    'phone':tel,
                    'type':type,
                    'building_name':building_name,
                    'name':'自己问',
                    'brower':brower,
                    'qu':qu
                }
                $.post(
                    "<?php echo url('home/content/port1'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
			window._agl && window._agl.push(['track', ['success', {t: 3}]])
                            $('#o_p').text('已成功订阅变价通知，我们会第一时间通过短信通知您');
                            $('.m-o-succ').show();
                            $('.m-chang').show();
                        }
                    },
                    'json'
                )
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
            })
            $('.m-kai').on('click',function(){
                $('.m-chang').show();
                $('#m_k_box').show(150);
            })
            $('#m_d_esc').on('click',function(){
                $('.m-chang').hide();
                $('#m_d_box').hide();
            })
            $('#m_z_btn').on('click',function(){
                $('.m-chang').show();
                $('#m_g_box').show(150)
            })
            $('#m_g_esc').on('click',function(){
                $('.m-chang').hide();
                $('#m_g_box').hide();
            })
            $('#m_y_esc').on('click',function(){
                $('.m-chang').hide();
                $('#m_y_box').hide();
            })
            $('#m_h_btn').on('click',function(){
                $('.m-chang').show();
                $('#m_d_box').show(150);
            })
            $('#m_k_esc').on('click',function(){
                $('.m-chang').hide();
                $('#m_k_box').hide();
            })
            $('#m_h_bt').on('click',function(){
                $('.m-chang').show();
                $('#m_h_box').show(150)
            })
            $('#m_h_esc').on('click',function(){
                $('.m-chang').hide();
                $('#m_h_box').hide();
            })
            
            $('#m_l_btn').on('click',function(){
                $('.m-chang').show();
                $('#m_l_box').show(150);
            })
            $('#m_l_esc').on('click',function(){
                $('.m-chang').hide();
                $('#m_l_box').hide();
            })
            $('#m_w_btn').on('click',function(){
                $('.m-chang').show();
                $('#m_w_box').show(150);
            })
            $('#m_w_esc').on('click',function(){
                $('.m-chang').hide();
                $('#m_w_box').hide();
            })
            $('#m_s_btn').on('click',function(){
                $('.m-chang').show();
                $('#m_z_box').show(150);
            })
            $('#m_z_esc').on('click',function(){
                $('.m-chang').hide();
                $('#m_z_box').hide();
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
                            }
                        }
                    },
                    'json'
                )
            })
            $('.m-c-port2').on('click',function(){
                var building_name=$(this).prev().val();
                var type=$(this).prev().prev().val();
                var tel=$(this).prev().prev().prev().val();
                var address=$(this).prev().prev().prev().prev().val();
                var name=$(this).prev().prev().prev().prev().prev().val();
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
		  'qu':qu
                }
                var that=$(this)
                $.post(
                    "//test.jy1980.com/home/content/port2",
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

            


        })

	</script>
</body>
</html>