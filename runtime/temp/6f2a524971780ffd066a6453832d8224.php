<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpstudy_pro\WWW\tp2\public/../application/home\view\user\guan.html";i:1570772881;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>关于家园</title>
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
		
                }

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





        /* m */
        .m{
                    padding:0;
                }
                .m-title{
                    position: relative;
                    width:100%;
                    height:44px;
                    text-align: center;
                    line-height: 44px;
                    border-bottom: 1px solid #F2F2F2;
                }
                .m-title img{
                    position: absolute;
                    width:5%;
                    margin-top:14px;
                    left:5.3333%;
                }
                .m-title h3{
                    color:#333333;
                    font-size: 18px;
                    margin:0;
                    font-weight: bold;
                    line-height: 44px;
                }
                .m-bgc{
                    width:53%;
                    margin-top:90px;
                    margin-left:23.33333%;
                    margin-bottom: 18px;
                }
                .m-txt{
                    color:#666666;
                    font-size: 16px;
                    font-weight: 500;
                    margin-left:16.66667%;
                }
                .m-btn{
                    width:53.3333%;
                    height: 40px;
                    border:0px;
                    border-radius: 4px;
                    background-color: #3AC869;
                    color:#fff;
                    font-size: 16px;
                    text-align: center;
                    line-height: 40px;
                    margin-left:23.33333%;
                    margin-top:37px;
                }
        

                /* pc */
        /* m-content */
        .m-content .m-logo{
            width:24%;
            margin-left:38%;
        }
        .m-content h4{
            color:#333333;
            font-size: 18px;
            margin:0;
            margin-left:40.53333%;
            margin-bottom:25px;
            font-weight: bold;
        }
        .m-content .m-p{
            color:#595959;
            font-size: 16px;
            margin:0;
            margin-left:4%;
            margin-right:4%;
            line-height: 27px;
            text-indent: 9%;
            letter-spacing: 1.5px;
        }
        .m-content .m-list{
            padding:0 4%;
            height: 50px;
            border-bottom: 1px solid #F0F0F0;
            line-height: 50px;
        }
        .m-content .m-1{
            margin-top:38px;
        }
        .m-content .m-list  span{
            float: left;
            color:#333333;
            font-size: 16px;
        }
        .m-content .m-list a{
            float: right;
            color: #3AC869;
            font-size: 18px;
        }
        .m-content .m-list .m-time{
            color:#4D4D4D;
            font-size: 18px;
            float: right;
        }
        .m-content .m-list img{
            float:right;
            width: 5%;
            margin-top:14px;
        }


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
         .top-nav ul li a:hover{
             color:#333;
             font-weight: bold;
         }
         .top-nav ul li a.active{
             color:#333333;
             border-bottom: 2px solid #1CB64F;
             padding-bottom: 30px;
             font-weight: bold;
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
             cursor: pointer;
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
             font-size: 16px;
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
             right:198px;
             border-radius: 0 4px 4px 0;
         }
         .search .top #find img{
             width:22px;
             margin-right:10px;
         }
         .search .top #map{
             border:1px solid #1CB64F;
             cursor: pointer;
             color:#1CB64F;
             top:30px;
             right:0;
             border-radius: 4px;
         }
         .search .top #map img{
             width:22px;
             margin-right:10px;
         }
         .search .bottom ul{
             width:1200px;
             height:26px;
             overflow: hidden;
         }
         .search .bottom ul li{
             float: left;
             margin-right:40px;
         }
         .search .bottom ul li a{
             color:#666666;
             font-size: 18px;
         }


         /* content */
         .content{
             height:836px;
         }
         .content .left{
             padding-top:50px;
             padding-left:0;
             /* width:24.33333%; */
         }
         .content .left p{
             width:240px;
             height:48px;
             background-color: #ECECEC;
             text-align: center;
             line-height: 48px;
             margin-bottom: 2px;
             color:#999999;
             font-size: 18px;
             cursor: pointer;
         }
         .content .left .guan{
             background-color: #3AC869;
             color:#fff;
         }

         .content .right h5{
             color:#333333;
             font-size: 24px;
             margin-top:24px;
             margin-bottom: 17px;
             width:800px;
             text-align: center;
         }
         .content .right img{
             width:800px;
             height:500px;
             margin-bottom: 38px;
         }
         .content .right p{
             color:#595959;
             font-size: 18px;
             margin-bottom:18px;
             width:800px;
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

         /* 留言悬浮框 */
    .m-xuan{
            width:50px;
            height:50px;
            background-color: #19A8EB;
            border-radius: 50%;
            position: fixed;
            right:6.667%;
            bottom: 130px;
            color:#FFFFFF;
            font-size: 15px;
            line-height: 50px;
            text-align: center;
            opacity:0.8;
            z-index:10;
        }
    </style>
</head>
<body>
    <!-- PC -->
    <div class="container-fluid p">
        <nav class="top-nav visible-lg-block">
            <div class="box">
                <ul>
                    <li><a href="<?php echo url('home/index/index'); ?>">家园首页</a></li>
                    <li><a href="<?php echo url('home/search/index',['type'=>0]); ?>">楼盘查询</a></li>
                    <li><a href="<?php echo url('home/search/tuan',['type'=>0]); ?>">团购优惠</a></li>
                    <li><a href="<?php echo url('home/index/buy'); ?>">买房指南</a></li>
                    <li><a href="<?php echo url('home/news/index'); ?>">楼盘资讯</a></li>
                    <li><a href="<?php echo url('home/user/guan'); ?>" class="active">关于家园</a></li>
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
                <div class="col-lg-3 left">
                    <p class="guan">关于家园</p>
                    <p class="lian">联系我们</p>
                    <p class="help">帮我找房</p>
                    <p class="jian">投诉建议</p>
                </div>
                <div class="col-lg-9 right">
                    <h5>关于家园</h5>
                    <img src="/static/home/imgs/head.png" alt="">
                    <p>JIA.家园隶属杭州亚汉网络科技有限公司，我们是一家线上销售模式的房地产公司。</p>
                    <p>公司主营业务为：房地产信息咨询，房地产营销策划，室内外装修工程设计，施工以及物业管理，以及企业的营销策划，国内广告制作设计，代理会展服务。</p>
                    <p>公司位于：杭州市江干区九环路。专注为客户朋友提供一手楼盘新资讯。</p>
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
        <footer class="container-fluid visible-lg-block">
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
                
                <span>Copyright © 2017 - 2022 杭州亚汉网络科技有限公司版权所有 浙ICP备18057005号 </span>
        </footer>
    </div>
    <!-- PC -->

    
                            

    <!-- shou    -->
    <div class="container-fluid m">
        <div class="m-title visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>关于家园</h3>
        </div>
        <div class="m-content visible-xs-block .visible-sm-block">
            <img class="m-logo" src="/static/home/imgs/logo1.png" alt="">
            <h4>公司简介</h4>
            <p class="m-p">家园新房隶属杭州亚汉网络科技有限公司，我们是一家线上销售模式的房地产公司。</p>
            <p class="m-p">公司主营业务为：房地产信息咨询，房产中介服务，房地产营销策划，室内外装修工程设计，施工以及物业管理，以及企业的营销策划，国内广告制作设计，代理会展服务。</p>
            <p class="m-p">公司位于：杭州市江干区九环路。专注为客户朋友提供一手楼盘新资讯。</p>
            <div class="m-list m-1"><span>联系电话</span><a href="tel:400-718-6686">400-718-6686</a></div>
            <div class="m-list"><span>工作日</span><span class="m-time">9:00-21:00</span></div>
            <div class="m-list" id="m_tou"><span>投诉建议</span><img src="/static/home/imgs/m-go.png" alt=""></div>
        </div>
        <!-- 留言悬浮框 -->
        <div class="m-xuan visible-xs-block .visible-sm-block">
            留言
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
            $('.jian').on('click',function(){
                window.location.href="<?php echo url('home/user/jian'); ?>"
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



            $('.help').on('click',function(){
                window.location.href="<?php echo url('home/user/help'); ?>";
            })

            $('.lian').on('click',function(){
                window.location.href="<?php echo url('home/user/lian'); ?>"
            })
            $('#m_tou').on('click',function(){
                window.location.href="<?php echo url('home/user/tou'); ?>"
            })
            $('#find').on('click',function(){
                $('#bname').submit();
            })
            $('#map').on('click',function(){
                window.location.href="<?php echo url('home/index/pmap'); ?>"
            })
            // 留言页跳转
            $('.m-xuan').on('click', function () {
                window.location.href = "<?php echo url('home/index/lius'); ?>";
            })
        })
    </script>
</body>
</html>