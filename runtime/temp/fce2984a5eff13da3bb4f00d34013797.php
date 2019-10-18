<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpstudy_pro\WWW\tp2\public/../application/home\view\user\home.html";i:1570523449;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>我的主页</title>
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
            .m-top{
                width:100%;
                height:276px;
                position: relative;
                text-align: center;
            }
            .m-top .m-banner{
                width: 100%;
                position: absolute;
                left: 0;
                top: 0;
                z-index: -1;
            }
            .m-top .m-re{
                position: absolute;
                top: 5%;
                left: 4%;
                width: 5%;
            }
            .m-top .m-lo{
                width: 16%;
                padding-top: 12%;
            }
            .m-top h5{
                color:#FFFFFF;
                font-size: 18px;
                margin:0;
                padding-top:4.6%;
            }
            .m-top .m-nav{
                width:92%;
                height:100px;
                background-color: #fff;
                border-radius: 8px;
                position: absolute;
                left:50%;
                margin-top:3.5%;
                box-shadow:0px 0px 14px 6px rgba(6,0,1,0.05);
                margin-left:-46%;
            }
            .m-top .m-nav .row{
                margin:0;
            }
            .m-top .m-nav ul li a{
                text-align: center;
            }
            .m-top .m-nav ul li a img{
                width: 63%;
                margin-top: 32%;
                margin-bottom:16%;
            }
            .m-top .m-nav ul li a p{
                color:#333333;
                font-size: 12px;
                margin-top:1%;
            }

            /* m-list */
            .m-list{
                padding:0 4%;
            }
            .m-list ul{
                margin-bottom: 40px;
            }
            .m-list ul li{
                display: block;
                height:45px;
                border-bottom:1px solid #F2F2F2;
                color:#333333;
                font-size: 16px;
                font-weight: 500;
                line-height: 45px;
            }
            .m-list ul li a{
                color:#333;
            }
            .m-list ul li img{
                width: 6%;
                margin-right: 3.5%;
            }
            .m-list ul li .m-sd{
                width: 5%;
                margin-left: 60%;
                margin-right: 0;
            }
            .m-list button{
                width:100%;
                height:44px;
                background-color: #F0F5F2;
                color:#1CB64F;
                font-size: 15px;
                border:0px;
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
    <!-- pc -->
    <!-- pc -->



    <!-- yidong -->
    <div class="container-fluid m">
        <div class="m-top visible-xs-block .visible-sm-block">
            <img class="m-banner" src="/static/home/imgs/banner.png" alt="">
            <img class="m-re" src="/static/home/imgs/return1.png" alt="" onClick="javascript:history.go(-1)">
            <img class="m-lo" src="/static/home/imgs/head_icon.png.png">
            <?php if(\think\Session::get('user')): ?>
            <h5><?php echo \think\Session::get('user.phone'); ?></h5>
            <?php else: ?>
            <h5 id="m_login">注册/登录</h5>
            <?php endif; ?>
            <div class="m-nav">
                <ul class="row">
                    <li class="col-xs-3 col-sm-3">
                        <a href="<?php echo url('home/user/zu'); ?>">
                            <img src="/static/home/imgs/browse_icon.png" alt="">
                            <p>浏览足迹</p>
                        </a>
                    </li>
                    <li class="col-xs-3 col-sm-3">
                        <a href="<?php echo url('home/user/shou'); ?>">
                            <img src="/static/home/imgs/collect_icon.png" alt="">
                            <p>我的收藏</p>
                        </a>
                    </li>
                    <li class="col-xs-3 col-sm-3">
                        <a href="<?php echo url('home/user/find'); ?>">
                            <img src="/static/home/imgs/room_icon.png.png" alt="">
                            <p>帮我找房</p>
                        </a>
                    </li>
                    <li class="col-xs-3 col-sm-3">
                        <a href="<?php echo url('home/user/yue'); ?>">
                            <img src="/static/home/imgs/order_icon.png.png" alt="">
                            <p>预约看房</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="m-list visible-xs-block .visible-sm-block">
            <ul>
                <li id="m_map">
                    <img src="/static/home/imgs/address_icon.png.png" alt="">
                    地图看房
                    <img src="/static/home/imgs/m-go.png" alt="" class="m-sd">
                </li>
                <li id="m_guan">
                    <img src="/static/home/imgs/home_icon.png.png" alt="">
                    关于家园
                    <img src="/static/home/imgs/m-go.png" alt="" class="m-sd">
                </li>
                <li><a href="tel:400-718-6686">
                    <img src="/static/home/imgs/telephone_icon.png.png" alt="">
                    联系我们</a>
                    <img src="/static/home/imgs/m-go.png" alt="" class="m-sd">
                </li>
            </ul>
            <?php if(\think\Session::get('user')): ?>
            <button id="m_logout">退出</button>
            <?php endif; ?>
        </div>
        <!-- 留言悬浮框 -->
        <div class="m-xuan visible-xs-block .visible-sm-block">
            留言
        </div>
    </div>
    <script>
        $(document).ready(function(){
            // 留言页跳转
            $('.m-xuan').on('click', function () {
                window.location.href = "<?php echo url('home/index/lius'); ?>";
            })
            $('#m_login').on('click',function(){
                window.location.href="<?php echo url('home/user/login'); ?>";
            })
            $('#m_logout').on('click',function(){
                window.location.href="<?php echo url('home/user/logout'); ?>";
            })
            $('#m_guan').on('click',function(){
                window.location.href="<?php echo url('home/user/guan'); ?>";
            })
            $('#m_map').on('click',function(){
                window.location.href="<?php echo url('home/index/map'); ?>"
            })
        })
    </script>
</body>
</html>