<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\php\PHPTutorial\WWW\tp\public/../application/home\view\news\project.html";i:1558863418;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>楼盘资讯</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        <style>
            * {
                    padding: 0;
                    margin: 0;
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
             margin-left:100px;
             margin-right: 11px;
             line-height: 80px;
         }
         .top-nav .register{
             margin-right:7px;
         }
         .top-nav img.jk{
             margin-left:60px;
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
         }
         .content .left .type{
             margin-bottom: 39px;
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
         .content .right h6{
             color:#333333;
             font-size: 24px;
             font-weight: 500;
             margin-bottom: 38px;
             margin-top:0;
         }
         .content .right .pro{
             margin-top:7px;
             position: relative;
         }
         .content .right .pro p{
             width:170px;
             height:202px;
             display: inline-block;
             margin-right:18px;
             border:1px solid #EDEDED;
             margin-bottom: 38px;
         }
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
         .content .right ul li{
             
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
             top: -26px;
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
            margin-top:0;
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
                <p>购房热线  &nbsp;0571-666688866</p>
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
            </div>
            <div class="col-lg-4 right">
                <h6>项目资讯</h6>
                <div class="pro">
                    <?php foreach($ps as $k=>$v): ?>
                    <p <?php if($k==1): ?>class="ss"<?php endif; ?>>
                        <a href="/index.php/home/news/pro/id/<?php echo $v['id']; ?>">
                        <img src="<?php echo $v['img']; ?>" alt="">
                        <span><?php echo $v['title']; ?></span>
                        </a>
                    </p>
                    <?php endforeach; ?>
                    
                <h6>新闻资讯</h6>
                <ul>
                    <?php foreach($ns as $k=>$v): ?>
                    <li><span <?php if(($k+1)<4): ?>class="new"<?php endif; ?>><?php echo $k+1; ?></span><a href="/index.php/home/news/article/id/<?php echo $v['id']; ?>"><?php echo $v['title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
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
            <p>购房热线   0571-666688866</p>
            <ul class="footer-bottom">                                    
                <li>区域导航</li>
                <li>杭州城东楼盘</li>
                <li>杭州城西楼盘</li>
                <li>嘉兴楼盘</li>
                <li>绍兴楼盘</li>
                <li>萧山区</li>
            </ul>
            <span>Copyright © 2017 - 2022 杭州坤山科技网络有限公司有限公司版权所有 杭ICP备14021288号-1 </span>
    </footer>
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


    <!-- pc -->
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




            $(window).scroll(function(){
                var t = $(this).scrollTop();
                var h=$('.right').height();
                var hs = $(document).height();
                var b=$('footer').height();
                var sk=hs-b-h;
                if(t>=230){
                    $('.right').css({'position':'fixed','right':'50%','top':'20px','margin-right':'-600px'});
                }
                if(t<230){
                    $('.right').css('position','initial');
                }
                if((t+h)>=(hs-b)){
                    let l=t;
                    $('.right').css({'position':'absolute','top':sk-220,'right':0,'margin':0})
                }
            })
            function set(){
                var h=$('.content .box').height();
                if(h<1000){
                    $('.content').height(1000);
                }else{
                    $('.content').height(h);
                }
            }
            setTimeout(set,2000);
            var h=$('.content .box').height();
            if(h<1000){
                $('.content').height(1000);
            }else{
                $('.content').height(h);
            }
            console.log(h);
            $('#find').on('click',function(){
                $('#bname').submit();
            })
            $('#map').on('click',function(){
                window.location.href="<?php echo url('home/index/map'); ?>";
            })
        })
    </script>
</body>
</html>