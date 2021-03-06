<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\php\PHPTutorial\WWW\tp\public/../application/home\view\user\shous.html";i:1558340656;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>收藏</title>
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
                    margin-left:24.8%;
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


                /* 楼盘列表 */
         .m-list {
            width: 100%;
        }

        .m-list .m-row {
            height: 120px;
            border-bottom: 1px solid #F0EDED;
            padding-left:3%;
        }

        .m-list .m-row .m-img {
            line-height: 112px;
            padding-left: 0;
            width:37.5%;
        }

        .m-list .m-row .m-img img {
            width: 102%;
            border-radius: 2px;
        }

        .m-list .m-row .m-text {
            padding-left: 0;
            padding-right: 0;
            width:62.5%;
        }

        .m-list .m-row .m-text h4 {
            color: #404040;
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 6px;
            margin-top:14px;
        }
       
        .m-list .m-row .m-text .m-price {
            color: #FF6666;
            margin-bottom: 1px;
            font-size: 12px;
        }

        .m-list .m-row .m-text .m-price span {
            font-size: 15px;
        }

        .m-list .m-row .m-text .m-xiang {
            margin-bottom: 3px;
        }

        .m-list .m-row .m-text .m-xiang span {
            color: #4C4C4C;
            font-size: 12px;
        }

        .m-list .m-row .m-text .m-icon {
            margin-bottom: 6px;
            width:220px;
        }

        .m-list .m-row .m-text .m-icon span {
            display: inline-block;
            padding: 2px 7.5px;
        }

        .m-list .m-row .m-text .m-icon .m-p-1 {
            background-color: #EDFFEF;
            color: #1CB64F;
            font-size: 10px;
        }

        .m-list .m-row .m-text .m-icon .m-p-2 {
            background-color: #EAF3FF;
            color: #4393FF;
            font-size: 10px;
        }

        .m-list .m-row .m-text .m-icon .m-p-3 {
            background-color: #F6F6F6;
            color: #818181;
            font-size: 10px;
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
             margin-left:103px;
             margin-right: 11px;
             line-height: 80px;
         }
         .top-nav .register{
             margin-right:7px;
             margin-left: 54px;
             color: #3AC869;
         }


         /* 搜索栏 */
         .search{
             width:100%;
             height:160px;
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
             background-color: #1CB64F;
             cursor: pointer;
             color:#FFFFFF;
             top:30px;
             right:193px;
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
             height:996px;
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
         .content .left .lian{
             background-color: #3AC869;
             color:#fff;
         }
         .content .right h5{
             color:#333333;
             font-size: 24px;
             font-weight: bold;
             margin-top:24px;
             margin-left:43%;
         }
         .content .row{
             padding:40px 0;
             border-bottom: 1px solid #EDEDED;
             position: relative;
         }
         .content .row .left{
             width:29%;
             padding-top:0;
         }
         .content .row .right{
             width:71%;
         }
         .content .row .left img{
            width:240px;
            height:180px;
            border-radius: 4px;
         }
         .content .row .right h5{
            margin-left: 0;
            color:#323232;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 22px;
            margin-top:0;
            line-height: 31px;
         }
         .content .row .right h5 span{
             display: inline-block;
             text-align: center;
             line-height: 24px;
             width:50px;
             height:24px;
             background-color: #E6F7E8;
             font-weight: normal;
             color:#1CB64F;
             font-size: 14px;
             margin-left:18px;
             border-radius: 3px;
         }
         .content .row .right p{
             color:#808080;
             font-size: 16px;
             margin-bottom: 10px;
         }
         .content .row .right p button{
             color:#4393FF;
             font-size: 14px;
             background-color: #EAF3FF;
             border:0px;
             width:60px;
             height:20px;
             text-align: center;
             line-height: 20px;
             border-radius: 2px;
         }
         .content .row .right p button img{
             width:16px;
             margin-right:3px;
         }
         .content .row .right p span{
             color:#666666;
             font-size: 14px;
             padding:6px;
             background-color: #F5F5F5;
             margin-right:12px;
         }
         .content .row .right p .xiu{
             color:#4393FF;
             background-color: #EAF3FF;
         }
         .content .row .forked{
             position: absolute;
             top:40px;
             right:0;
             width:30px;
             cursor: pointer;
         }
         .content .row #price{
             position: absolute;
             right:0;
             top:100px;
             color:#FF6666;
             font-size: 24px;
             font-weight: bold;
         }
         .content .row #price span{
             font-size: 30px;
         }
         .content .row #zong{
             position: absolute;
             right:0;
             top:150px;
             color: #808080;
             font-size: 16px;
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
                    <li><a href="<?php echo url('home/user/guan'); ?>">关于家园</a></li>
                </ul>
                <span class="register">187****4565</span>
                <span class="login">退出</span>
                <p>购房热线  &nbsp;0571-666688866</p>
            </div>
        </nav>
        <div class="search visible-lg-block">
            <div class="box">
                <div class="top">
                    <img src="/static/home/imgs/logo2.png" alt="">
                    <p><i>杭州</i><img src="/static/home/imgs/triangle.png" alt=""></p>
                    <form id="bname" style="display: initial" action="<?php echo url('home/search/index',['type'=>0]); ?>" method="post">
                    <input type="text" name="name" placeholder="请输入楼盘名称、地域">
                    <span id="find"><img src="/static/home/imgs/icon-8.png">我要找房</span>
                    </form>
                    <span id="map"><img src="/static/home/imgs/icon-11.png" alt="">地图找房</span>
                </div>
                <div class="bottom">
                    <ul>
                        <?php foreach($hots as $v): ?>
                        <li><a href="<?php echo url('home/content/index',['id'=>$v['id']]); ?>"><?php echo $v['building_name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content visible-lg-block">
            <div class="box">
                <div class="col-lg-3 left">
                    <p class="guan">浏览足迹</p>
                    <p class="lian">我的收藏</p>
                </div>
                <div class="col-lg-9 right">
                    <h5>我的收藏</h5>
                    <?php foreach($data as $v): ?>
                        <div class="row">
                            <a href="<?php echo url('home/content/index',['id'=>$v['id']]); ?>">
                            <div class="col-lg-4 left">
                                <img src="<?php echo $v['building_img']; ?>" alt="">
                            </div>
                        </a>
                            <div class="col-lg-8 right">
                                <h5><?php echo $v['building_name']; ?><span><?php echo $v['building_xiaoshou']; ?></span></h5>
                                <p><?php echo $v['city']; ?>  &nbsp;|&nbsp;  <?php echo $v['building_address']; ?></p>
                                <p><?php echo $v['building_huxing']; ?>&nbsp;&nbsp;<?php echo $v['building_xingshi']; ?>&nbsp; |  &nbsp;面积：<?php echo $v['humianji']; ?>m²</p>
                                <p>金牌职业顾问&nbsp;&nbsp;&nbsp;<button><img src="/static/home/imgs/phone1.png">咨询</button></p>
                                <p><span class="xiu"><?php echo $v['building_zhuangxiu']; ?></span><span><?php echo $v['building_ditie']; ?></span></p>
                            </div>
                            <img class="forked" data-v="<?php echo $v['id']; ?>" src="/static/home/imgs/forked.png" alt="">
                            <p id="price"><span><?php echo $v['danjia']; ?></span>元/m²起</p>
                            <p id="zong">参考总价：<span><?php echo $v['zong']; ?></span>万元/套起</p>
                            
                        </div>
                        <?php endforeach; ?>
                </div>
                <div class="pagination">
                        <?php echo $data->render(); ?>
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
                <span>Copyright © 2017 - 2022 杭州坤山科技网络有限公司有限公司版权所有 杭ICP备14021288号-1 </span>
        </footer>
    </div>
    <!-- PC -->

    <!-- m -->
    <div class="container-fluid m">
        <div class="m-title visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>我的收藏</h3>
        </div>
        <div class="visible-xs-block .visible-sm--block m-list">
            <?php foreach($data as $v): ?>
        <div class="col-xs-12 m-row">
            <a href="<?php echo url('home/content/index',['id'=>$v['id']]); ?>">
            <div class="col-xs-4 m-img">
                <img src="<?php echo $v['building_img']; ?>" alt="">
            </div>
            <div class="col-xs-8 m-text">
                <h4>
                    <?php echo $v['building_name']; ?>
                </h4>
                <p class="m-price"><span><?php echo $v['building_jiage']; ?></span>元/m²</p>
                <p class="m-xiang">
                    <span><?php echo $v['city']; ?>-<?php echo $v['qu']; ?></span>
                    <span>建面</span>
                    <span><?php echo $v['jianji']; ?>m²</span>
                </p>
                <p class="m-icon">
                    <span class="m-p-1"><?php echo $v['building_xiaoshou']; ?></span>
                    <span class="m-p-2"><?php echo $v['building_zhuangxiu']; ?></span>
                    <span class="m-p-3"><?php echo $v['building_ditie']; ?></span>
                    <span class="m-p-3">繁华地段</span>
                </p>
            </div>
            </a>
        </div>
        <?php endforeach; ?>
        </div>
    </div>
    <script>
            $(document).ready(function(){
                $('#find').on('click',function(){
                    $('#bname').submit();
                })
                $('#map').on('click',function(){
                    window.location.href="<?php echo url('home/index/map'); ?>";
                })
                $('.guan').on('click',function(){
                    window.location.href="<?php echo url('home/user/zu'); ?>"
                })
            })
        </script>
</body>
</html>