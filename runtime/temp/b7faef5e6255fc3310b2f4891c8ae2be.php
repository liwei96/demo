<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpstudy_pro\WWW\tp2\public/../application/home\view\index\chejiaodetail.html";i:1570611996;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/home/css/comm.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1416845_s5ckf94qr0b.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_910507_hzufm6hpwxd.css">
    <link rel="stylesheet" href="/static/home/css/chejiaodetail.css">
    <script src=""></script>
    <title>成交案例</title>
</head>
<body>
    <!-- 头部 -->
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

<div class="cj-list-box">
     <div class="cj-list-cen">
          <!-- 成交案例 -->
         <div class="cj-list">
                <h1>成交案例</h1>
                <ul>
                    <?php foreach($success as $v): ?>
                        <li>
                            <div class="cj-img">
                                <img src="<?php echo $v['img']; ?>" alt="">
                            </div>
                            <div class="cj-content">
                                  <h3><?php echo $v['title']; ?> </h3>
                                  <p>
                                       <?php echo $v['content']; ?>
                                    </p>
                                    <a href="javascript:;" class="zhan" data-id="1">阅读全文</a>
                            </div>
                        </li>
                        <?php endforeach; ?>
                        
                </ul>

         </div>
        <!-- 推荐楼盘 -->
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

<!-- 底部 -->
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
                        <li><a target="_blank" href="http://www.anjutz.com/">台州淘屋网</a></li>
                        <li><a target="_blank" href="http://www.sdguozhijing.com/">医用家具</a></li>
                        <li><a target="_blank" href="http://www.lejunj.com/">南京房产网</a></li>
                        <li><a target="_blank" href="http://www.zxtun.com/">苏州实验室装修</a></li>
                        <li><a target="_blank" href="http://www.0663fcw.com/">揭阳房探网</a></li>
                        <li><a target="_blank" href="http://www.hneke.com/">郑州儿童专科医院哪家好</a></li>
                        <li><a target="_blank" href="http://www.xjjdysy.com/">土工布厂家</a></li>
                        <li><a target="_blank" href="http://www.fangchan0573.com/">嘉兴搜房网</a></li>
                        <li><a target="_blank" href="http://jilin.92zhaofang.com/">吉林房产网</a></li>
                        <li><a target="_blank" href="http://www.0511fangchan.com/">镇江搜房网</a></li>
                        <li><a target="_blank" href="http://rent.jxhn.fccs.com/">海宁租房</a></li>
                        <li><a target="_blank" href="http://www.91napattiga.com/">泰国乳胶枕头</a></li>
                        <li><a target="_blank" href="http://www.51napattiga.com/">乳胶床垫</a></li>
                        <li><a target="_blank" href="http://www.jcqmjmw.com/">集成墙面加盟</a></li>
                        <li><a target="_blank" href="http://second.jxhn.fccs.com/">海宁二手房</a></li>
                        <li><a target="_blank" href="http://xiaoqu.jxhn.fccs.com/">海宁小区</a></li>
                        <li><a target="_blank" href="http://www.bjjsxzs.com/">昌平装修公司</a></li>
                        <li><a target="_blank" href="http://www.heibaimo.com/">复合土工膜</a></li>
                        <li><a target="_blank" href="http://www.cdyzfzs.cn/">成都业之峰装饰</a></li>
                        <li><a target="_blank" href="http://www.fangchan0510.com/">无锡房产网</a></li>
                        <li><a target="_blank" href="http://www.gzhybw.com/">贵州保温材料</a></li>
                        <li><a target="_blank" href="http://www.fc0797.com/">赣州淘屋网</a></li>
                        <li><a target="_blank" href="http://www.wzheasyhouse.com/">工具房</a></li>
                        <li><a target="_blank" href="http://www.qqmcw.cn/">门业</a></li>
                        <li><a target="_blank" href="http://www.danzhoujc.com/">海南定制网</a></li>
                        <li><a target="_blank" href="http://www.gzbaixiang.net/">玻璃贴膜</a></li>
                        <li><a target="_blank" href="http://sjz.3j99.com/">石家庄房产网</a></li>
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

<script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
      window.tap=1;
        $('.zhan').click(function(){
            if( window.tap==1){
                $(this).prev().css({
                        overflow:'visible',
                        "-webkit-line-clamp":'inherit'
                })
                window.tap=2;

                $(this).html('收起');
            } else if( window.tap==2){
                $(this).prev().css({
                        overflow:'hidden',
                        "-webkit-line-clamp":'4'
                })
                window.tap=1;
                $(this).html('阅读全文');
                   
            }
          console.log(window.tap)
       })
       
       
       
  
   


</script>





    
</body>
</html>