<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"G:\jiayuan\tp2\public/../application/home\view\index\index.html";i:1574392997;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
  <title>杭州一手房信息网-杭州新房最新动态-杭州新房信息网-杭州新房房产-家园新房</title>
    <meta name="keywords" content="家园新房 ,杭州一手房信息网,杭州新房动态,杭州新房信息网,杭州新房房产" />
  <meta name="description" content="家园新房属于杭州房产网，杭州新房信息网，主要是为每一位在杭用户提供找房信息，主要包扩新房，公寓，商铺以及杭州房产价格等相关信息" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css">
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_1416845_l80icjbk93.css">
 <link rel="stylesheet" href="https://at.alicdn.com/t/font_910507_hzufm6hpwxd.css">
<link rel="stylesheet" href="https://at.alicdn.com/t/font_1329849_7za7eo8yzvj.css">
<link rel="stylesheet" href="https://at.alicdn.com/t/font_1416845_r9dt4y7kjwo.css">
<link rel="stylesheet" href="https://at.alicdn.com/t/font_1416845_5g55q69hham.css">

    <link rel="stylesheet" href="/static/home/css/i-index.css">
    <link rel="stylesheet" href="/static/home/css/i-index2.css">
    <style>
        * {
            font-family: "Microsoft YaHei";
        }

        .all {
            padding: 0;
        }
	.youqing{
	    /* width:1600px;
	    left:8%; */
	}
        .m-introduce {
            display: none;
            position: fixed;
            top: 100px;
            width: 74.66667%;
            height: 470px;
            background-color: #fff;
            left: 50%;
            margin-left: -37.33333%;
            overflow: hidden;
            border-radius: 12px;
            z-index: 10;
        }

        .m-introduce img {
            width: 100%;
        }

        .m-introduce h5 {
            color: #3AC869;
            font-size: 18px;
            position: absolute;
            top: 32px;
            left: 37.5%;
            font-weight: bold;
        }

        .m-introduce p {
            color: #666666;
            text-indent: 12%;
            font-weight: 500;
            font-size: 15px;
            position: absolute;
            top: 101px;
            width: 85.714%;
            left: 7.1428%;
        }

        .m-chang {
            display: none;
            width: 100%;
            height: 1000px;
            background-color: black;
            opacity: 0.5;
            position: fixed;
            top: 0;
            z-index: 1;
        }


        .my {
            color: #2DD264;
            font-size: 18px;
            position: absolute;
            top: 3px;
            left: 66%;
            cursor: pointer;
        }

        .logout {
            color: #9A9A9A;
            font-size: 18px;
            position: absolute;
            top: 3px;
            left: 71%;
            cursor: pointer;
        }

        /* 弹框 */
        .tan .zhao {
            display: none;
            width: 100%;
            background-color: #000000;
            opacity: 0.4;
            position: fixed;
            top: 0;
            z-index: 20000;
        }

        .tan .ts {
            display: none;
            width: 500px;
            height: 380px;
            border-radius: 20px;
            position: fixed;
            top: 150px;
            left: 50%;
            margin-left: -250px;
            z-index: 20001;
        }

        .tan .ts .t-top {
            height: 140px;
            background-color: #2DD264;
            text-align: center;
            position: relative;
            border-radius: 20px 20px 0px 0px;
        }

        .tan .ts .t-top h6 {
            color: #FFFFFF;
            font-size: 20px;
            font-weight: bold;
            position: relative;
            top: 28px;
        }

        .tan .ts .t-top p {
            color: #FFFFFF;
            font-size: 18px;
            position: relative;
            top: 58px;
        }

        .tan .ts .t-top img {
            width: 16px;
            height: 16px;
            position: absolute;
            top: 28px;
            right: 32px;
        }

        .tan .ts .t-bottom {
            height: 240px;
            background-color: #fff;
            padding-top: 30px;
            position: relative;
            border-radius: 0px 0px 20px 20px;
        }

        .tan .ts .t-bottom input {
            width: 350px;
            border: 0px;
            border-bottom: 1px solid #F2F2F2;
            display: block;
            margin-left: 75px;
            padding-bottom: 22px;
            margin-bottom: 12px;
            color: #4D4D4D;
            font-size: 24px;
        }

        .tan .ts .t-bottom input::-webkit-input-placeholder {
            /* WebKit browsers */
            color: #999;
            font-size: 18px;
        }

        .tan .ts .t-bottom input::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            color: #999;
            font-size: 18px;
        }

        .tan .ts .t-bottom input:-ms-input-placeholder {
            /* Internet Explorer 10+ */
            color: #999;
            font-size: 18px;
        }

        .tan .ts .t-bottom span {
            border: 1px solid #2DD264;
            color: #2DD264;
            font-size: 16px;
            text-align: center;
            line-height: 22px;
            padding: 3px;
            position: absolute;
            top: 107px;
            right: 77px;
            width: 100px;
            border-radius: 5px;
            cursor: pointer;
        }

        .tan .ts .t-bottom button {
            width: 300px;
            height: 44px;
            margin-left: 100px;
            background-color: #F0F5F2;
            font-size: 16px;
            color: #3AC869;
            text-align: center;
            line-height: 44px;
            border: 0px;
            border-radius: 6px;
            margin-top: 0;
        }

        .cities {
            position: absolute;
            top: 62px;
            left: 17.5%;
            width: 113px;
            display: none;
            border-radius: 4px;
            box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.12);
            margin-top: 8px;
        }

        .cities ul {
            background-color: #fff;
            padding-left: 0;
            width: 113px;
            border-radius: 4px;
            margin-bottom: 0;
        }

        .cities ul li {
            color: #323232;
            font-size: 14px;
            line-height: 32px;
            width: 113px;
            background-color: #fff;
            cursor: pointer;
            text-align: center;
        }

        .cities ul li:hover {
            background-color: #E6FFEB;
            color: #2FBF4A;
        }

        .cities ul li:last-child {
            border-radius: 0 0 4px 4px;
        }

        .cities ul li:first-child {
            border-radius: 4px 4px 0 0;
        }

        .all .navbox .na .logo img {
            width: 70px;
        }

        .line {
            left: 19%;
        }

        .city {
            left: 20%;
        }

        .jian {
            left: 22.5%;
        }

        .cities {
            left: 19%;
        }

        .nav-top {
            left: 23.5%;
        }

        .tuan .t-incro {
            left: 9%;
        }

        .tan .incro {
            display: none;
            width: 500px;
            height: 360px;
            position: fixed;
            left: 50%;
            margin-left: -250px;
            top: 300px;
            background-color: #f5f5f5;
            z-index: 20000;
            border-radius: 20px;
        }

        .tan .incro .i-top {
            position: relative;
            width: 500px;
            height: 80px;
            background-color: #1CB64F;
            border-radius: 20px 20px 0 0;
        }

        .tan .incro .i-top img {
            width: 16px;
            height: 16px;
            position: absolute;
            top: 28px;
            right: 32px;
        }

        .tan .incro h6 {
            text-align: center;
            font-size: 20px;
            line-height: 80px;
            margin: 0;
            color: #fff;
            font-weight: bold;
        }

        .tan .incro .i-bottom p {
            font-size: 16px;
            line-height: 24px;
            padding: 20px 40px 0 40px;
        }

        .content .n-incro {
            font-size: 34px;
            color: #fff;
            position: absolute;
            top: 48%;
            left: 39.8%;
            letter-spacing: 5px;
        }



        /* 成功案例 */
        .success {
            height: 773px;
        }

        .success .box {
            width: 1200px;
            position: relative;
            left: 50%;
            margin-left: -600px;
        }

        .success .box h4 {
            font-size: 40px;
            color: #343434;
            margin-bottom: 47px;
        }

        .success .box .s-content {
            height: 628px;
            overflow: hidden;
            position: relative;
        }

        .success .box .s-content .s-c-all {
            position: absolute;
            width: 1200px;
        }

        .success .box .s-content .row {
            margin-bottom: 36px;
        }

        .success .box .s-content .s-c-left img {
            width: 240px;
            height: 180px;
            border-radius: 4px;
        }

        .success .box .s-content .s-c-right h5 {
            font-size: 20px;
            color: #323232;
            margin-bottom: 30px;
            margin-top: 0;
	    font-weight:bold;
        }

        .success .box .s-content .s-c-right p {
            font-size: 18px;
            color: #666666;
            line-height: 36px;
            height: 113px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            overflow: hidden;
	    text-indent:33px;
        }

        /* 新改的新闻 */
        .news .n-nav {
            position: absolute;
            top: 148px;
            width: 1200px;
            left: 9%;
            padding-left: 0;
            border-bottom: 1px solid #EDEDED;
            height: 38px;
        }

        .news .n-nav li {
            font-size: 20px;
            color: #666666;
            margin-right: 60px;
            float: left;
            cursor: pointer;
        }
        .news .n-nav li:hover{
            color:#333;
            font-weight: bold;
        }

        .news .n-nav li.active {
            color: #3AC869;
            border-bottom: 2px solid #3AC869;
            padding-bottom: 8px;
        }

        .news .n-2 {
            position: relative;
            top: 250px;
            height: 460px;
            overflow: scroll;
            left:50%;
            margin-left:-620px;
        }

        .news .n-2::-webkit-scrollbar {
            display: none;
        }

        .news .n-2 table {
            border-top: 1px solid #EDEDED;
            border-left: 1px solid #EDEDED;
            width: 1200px;
            position: absolute;
            top: 0;
            left: 7%;
        }

        .news .n-2 table tr {
            height: 40px;
        }

        .news .n-2 table th {
            border-right: 1px solid #EDEDED;
            border-bottom: 1px solid #EDEDED;
        }

        .news .n-2 table td {
            border-right: 1px solid #EDEDED;
            border-bottom: 1px solid #EDEDED;
        }

        .news .n-2 table tr th {
            font-size: 14px;
            color: #333333;
            font-weight: 400;
            text-align: center;
        }

        .news .n-2 table tr td {
            font-size: 14px;
            color: #333333;
            text-align: center;
        }


        .news .n-3 {
            display: none;
            position: relative;
            top: 250px;
            height: 460px;
            overflow: scroll;
            left:50%;
            margin-left:-620px;
        }

        .news .n-3::-webkit-scrollbar {
            display: none;
        }

        .news .n-3 table {
            border-top: 1px solid #EDEDED;
            border-left: 1px solid #EDEDED;
            width: 1200px;
            position: absolute;
            top: 0;
            left: 7%;
        }

        .news .n-3 table tr {
            height: 40px;
        }

        .news .n-3 table th {
            border-right: 1px solid #EDEDED;
            border-bottom: 1px solid #EDEDED;
        }

        .news .n-3 table td {
            border-right: 1px solid #EDEDED;
            border-bottom: 1px solid #EDEDED;
        }

        .news .n-3 table tr th {
            font-size: 14px;
            color: #333333;
            font-weight: 400;
            text-align: center;
        }

        .news .n-3 table tr td {
            font-size: 14px;
            color: #333333;
            text-align: center;
        }

        .news .n-4 {
            display: none;
            position: relative;
            top: 250px;
            width: 1200px;
            left: 9%;
        }

        .news .n-4 h6 {
            font-size: 20px;
            color: #333333;
            margin-bottom: 46px;
            font-weight: bold;
            text-align: center;
        }

        .news .n-4 ul li {
            margin-bottom: 24px;
        }

        .news .n-4 .n-4-left {
            float: left;
            width: 50%;
            height: 460px;
            overflow: scroll;
        }

        .news .n-4 .n-4-left::-webkit-scrollbar {
            display: none;
        }

        .news .n-4 .dj {
            float: right;
            margin-right: 5px;
        }

        .news .n-4 .n-4-left ul {
            padding-left: 0;
        }

        .news .n-4 .n-4-right {
            float: right;
            width: 50%;
            height: 460px;
            overflow: scroll;
        }

        .news .n-4 .n-4-right::-webkit-scrollbar {
            display: none;
        }

        .news .n-4 ul li span {
            font-size: 16px;
            color: #808080;
        }

        .news .n-4 ul li span.fj {
            margin-right: 60px;
        }

        .news .n-4 ul li span.con {
            color: #333333;
            margin-right: 85px;
        }
     


        /* 移动端 */
        .m-jiao {
            padding: 4%;
        }

        .m-jiao h5 {
            font-size: 16px;
            color: #333333;
            font-weight: bold;
            margin-bottom: 16px;
            margin-top: 0;
        }

        .m-jiao h5 span {
            font-size: 14px;
            color: #898989;
            font-weight: 100;
            float: right;
        }

        .m-jiao h5 span img {
            width: 12%;
        }

        .m-jiao .m-j-con {
            padding: 3%;
            height: 100px;
            border:1px solid rgba(230,230,230,1);
            /* box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.04); */
            border-radius: 6px;
        }

        .m-jiao .m-j-con .j-c-left {
            float: left;
            width: 40%;
        }

        .m-jiao .m-j-con .j-c-left img {
            border-radius: 2px;
            width: 82%;
            height:75px;
        }

        .m-jiao .m-j-con .j-c-right {
            float: right;
            width: 60%;
        }

        .m-jiao .m-j-con .j-c-right h6 {
            font-size: 12px;
            margin-top: 0;
            color: #323232;
            /* margin-bottom: 6px; */
            line-height: 17px;
        }

        .m-jiao .m-j-con .j-c-right p {
            font-size: 14px;
            color: #999999;
            height: 40px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            line-height: 20px;
            text-indent: 14%;
        }

        .n-1 .news-left li i {
            width: 510px;
            display: inherit;
            height: 25px;
            overflow: hidden;
            font-style: normal;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .n-1 .news-right li i {
            width: 510px;
            display: inherit;
            height: 25px;
            overflow: hidden;
            font-style: normal;
            text-overflow: ellipsis;
            white-space: nowrap;

        }

        .dongs .d-list .d-l-row h4 a{
            color:#337ab7;
        }

        .daohang-center .nav-mid ul li a:hover{
            font-weight: bold;
            color:#333;
        }


        /* 留言提问 */
        .show-liu{
            display: none;
            width:480px;
            position: fixed;
            top:350px;
            left:50%;
            margin-left: -240px;
            z-index: 100001;
        }
        .show-liu  .l-top{
            height:120px;
            padding-top:27px;
            background-color: #2DD264;
            border-radius: 16px 16px 0 0;
        }
        .show-liu .l-top h4{
            font-size: 20px;
            color:#fff;
            text-align: center;
            margin-bottom: 20px;
        }
        .show-liu .l-top img{
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .show-liu .l-top p{
            font-size: 18px;
            color:#FFFFFF;
            text-align: center;
            margin-bottom:30px;
        }
        .show-liu .t-bottom{
            height:240px;
            border-radius: 0 0 16px 16px;
            padding-top:12px;
            background-color: #fff;
        }
        .show-liu .t-bottom textarea{
            width:400px;
            height:90px;
            border:1px solid #EEEEEE;
            padding-top:14px;
            padding-left:20px;
            margin-left:40px;
            margin-bottom:12px;
        }
        .show-liu .t-bottom input{
            width:400px;
            height:44px;
            border:1px solid #EEEEEE;
            margin-left:40px;
            margin-bottom:16px;
            line-height: 40px;
            padding-left:20px;            
        }

        .show-liu .t-bottom button{
            width:300px;
            height:44px;
            border-radius: 4px;
            background-color: #F0F5F2;
            text-align: center;
            line-height: 44px;
            color:#3AC869;
            margin-left: 90px;
            border:0;
        }

        .show-liu .l-bottom{
            display: none;
            height:240px;
            border-radius: 0 0 16px 16px;
            padding-top:12px;
            background-color: #fff;
            padding-top:44px;
        }
        .show-liu .l-bottom p{
            color:#808080;
            font-size: 14px;
            margin-left:38px;
            margin-bottom: 16px;
        }
        .show-liu .l-bottom .l-getcode{
            width:100px;
            height:26px;
            border:1px solid #2DD264;
            position: absolute;
            right:40px;
            bottom: 174px;
            text-align: center;
            line-height: 26px;
            color:#2DD264;
            font-size: 14px;
            background-color: #fff;
            border-radius: 2px;
        }
        .show-liu .l-bottom input{
            width:400px;
            height:44px;
            border:1px solid #EEEEEE;
            line-height: 44px;
            padding-left:20px;
            border-radius: 4px;
            margin-bottom: 34px;
            margin-left:40px;
        }
        .show-liu .l-bottom .l-post{
            width:300px;
            height:44px;
            border-radius: 4px;
            background-color: #F0F5F2;
            color:#3AC869;
            font-size: 16px;
            text-align: center;
            line-height: 44px;
            margin-left:90px;
            border:0;
        }
        .show-liu .l-bottom .l-ti{
            position:absolute;
            right:54px;
            bottom:128px;
            font-size: 14px;
            color:#2DD264;
        }
        .swiper-box ,.swiper-box-tui,.swiper-box2,.swiper-box3 {
             height:160px;
        }
    .swiper-box   .swiper-slide{
        width:38.3%!important;
        height:142px!important;
       margin-right:3.2%!important;
       text-align:left!important;
    } 

    .swiper-box-tui   .swiper-slide{
        width:38.3%!important;
        height:142px!important;
       margin-right:3.2%!important;
       text-align:left!important;
    } 
    .swiper-box2   .swiper-slide{
        width:38.3%!important;
        height:142px!important;
       margin-right:3.2%!important;
       text-align:left!important;
    } 
    .swiper-box3   .swiper-slide{
        width:38.3%!important;
        height:142px!important;
       margin-right:3.2%!important;
       text-align:left!important;
    } 

    .swiper-container{
        margin-left: -14px; 
    }      
    
    .m-list:after{
         content:"";
         display:block;  
         clear:both;
    }
    #m-tuans-box:after{
        content:"";
         display:block;  
         clear:both;
    }
    
    /* 列表 */
                .m-listt{
                    width:100%;
                    padding:0;
                }
                .m-listt .row{
                    height:105px;
                    border-bottom:0.5px solid #EBEBEB;
                }
                .m-listt .row .m-titlee{
                    padding-top: 2%;
                    padding-left: 8%;
                    float:left;
                }
                .m-listt .row h5{
                    color: #404040;
                    font-size: 15px;
                    width: 90%;
                    line-height: 20px;
                    margin-bottom: 6%;
                    height: 40px;
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    -webkit-line-clamp: 2;
                    overflow: hidden;
                    text-overflow: ellipsis;      
                          }
                .m-listt .row span{
                    color: #979797;
                    font-size: 10px;
                    margin-right: 5%;
                }
                .m-listt .row img{
                    width: 28%;
                    margin-top: 3.5%;
                    height:74px;
                    border-radius:3px;
                }
                #m-n{
                    display: none;
                }

              .m-listt .m-l  img{
                    padding:0!important;
                    border-radius:4px ;
              }


              .m-xuan img{
                height:34px;
                position: fixed;
                right:0;
                bottom:140px;
                z-index: 10000;
            }

   /*搜索列表*/
   .sou_res{
             width:622px;
             height:400px;
             overflow-y:auto;
             background:#fff;
             border:1px solid #D9D9D9;
             position:relative;
             left:140px;
             top:413px;
             cursor:pointer;
             z-index: 30000;
             display: none;
             border-radius: 0 0 8px 8px;
      }
      .sou_res  li{
            line-height:36px;
            font-size:16px;
            padding-left:20px;  

      }
      .sou_res  li:hover{
            background:rgba(139, 138, 138, 0.1) ;
            color:#52CC7A;
      }
      html,body{
            overflow-x:hidden!important;
      }

    </style>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?f06af4c8b64055e64a1109f6a77eb38c";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>

<body>
    <div class="all container-fluid visible-md-block visible-lg-block">
        
        <!-- 头部导航 -->
    <div class="daohang">
        <div class="daohang-center">
            <div class="nav-left">
                <img src="/static/home/imgs/logo.png" alt="" class="logopic">
                <div class="select">
                    <h4><?php if(\think\Cookie::get('cityname')): ?> <?php echo \think\Cookie::get('cityname'); else: ?>杭州<?php endif; ?></h4>
                    <span class="iconfont iconxiajiantoushixinxiao"></span>
                    <!-- <img src="./img/sel.png" alt="" class="xuanze"> -->
                </div>
                <ul class="select-box">
                        <?php foreach($city as $v): ?> 
                        <li data-v="<?php echo $v['id']; ?>"><?php echo $v['area_name']; ?></li>
                      <?php endforeach; ?> 
                    
                </ul>
               
               
            </div>
            <div class="nav-mid">
                    <ul>
                        <li><a class="active" href="<?php echo url('home/index/index'); ?>">首页</a></li>
                        <li><a href="<?php echo url('home/search/index',['type'=>0]); ?>">楼盘查询</a></li>
                        <li><a href="<?php echo url('home/search/tuan',['type'=>0]); ?>">团购优惠</a></li>
                        <li><a href="<?php echo url('home/index/buy'); ?>">买房指南</a></li>
                        <li><a href="<?php echo url('home/news/index'); ?>">楼盘资讯</a></li>
                        <li><a href="<?php echo url('home/user/guan'); ?>">关于我们</a></li>
                    </ul>
            </div>
            <div class="nav-rig">
                <div class="login-box" <?php if(\think\Session::get('user')): else: ?>id="login-bbs"<?php endif; ?>><span class="iconfont icon-wode2"></span>注册/登录</div>
                <h4>购房热线:400-718-6686</h4>
            </div>
            
        </div>
    </div>



        <div class="content visible-md-block visible-lg-block">
            <div class="container">
                <img class="b-img" src="/static/home/imgs/i-long.png" alt="家园新房">
                <p class="n-incro">家园已累积销售<span></span>套</p>
                <script>
                    var i = 1;
                    var time = setInterval(function () {
                        if (i > <?php echo $sum; ?>) {
                            clearInterval(time);
                        }
                        i = i + 4;
                        $('.n-incro span').html(i);
                    }, 10);
                </script>
                <form id="bname" style="display: initial" action="<?php echo url('home/search/index',['type'=>0]); ?>"
                    method="post">
                    <input type="text" name="name" class="img-text" placeholder="请输入楼盘名称、地域" list="sou_list" autocomplete="off">
                    <ul class="sou_res">
                          
                    </ul>
                </form>
                <div id="find" class="img-btn"><img src="/static/home/imgs/icon-8.png">我要找房</div>
                <div id="map" class="img-btn2"><a href="<?php echo url('home/index/pmap'); ?>"><img
                            src="/static/home/imgs/icon-11.png">地图找房</a></div>
            </div>

        </div>

       

          <div class="iconmain">
                <div class="icon-center">
                    <h3><span class="iconfont iconlaba"></span>杭州在售新房<?php echo $num; ?>个</h3>
                    <ul><li><img src="/static/home/imgs/icon1.png" alt=""></li></ul>
                    <ul><li><img src="/static/home/imgs/icon2.png" alt=""></li></ul>
                    <ul><li><img src="/static/home/imgs/icon3.png" alt=""></li></ul>
                    <ul><li><img src="/static/home/imgs/icon4.png" alt=""></li></ul>
                </div>
          </div>




        <div class="dongs container-fluid visible-md-block visible-lg-block">
            <h3>楼盘动态 <span class="d-more">查看更多</span></h3>
            <?php foreach($dons as $v): ?>
            <div class="d-list">
                <div class="d-l-row"> 
                    <h4><img src="/static/home/imgs/dt.png">&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo url('home/content/content',['id'=>$v['bid']]); ?>"><?php echo $v['name']; ?></a>最新房源动态 <span><?php echo $v['create_time']; ?></span></h4>
                    <p><?php echo $v['introduce']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
            
            <div class="d-line l1"></div>
            <div class="d-line l2"></div>
            <div class="d-o o1"></div>
            <div class="d-o o2"></div>
            <div class="d-o o3"></div>
        </div>

         <div class="new container-fluid visible-md-block visible-lg-block">
         <div class="new-box">
            <h3>家园严选</h3>
            <p>好的新房，没那么贵</p>
            <ul>
                <?php foreach($list as $v): ?>
                <li>
                    <a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>">
                        <img src="<?php echo $v['building_img']; ?>" alt="">
                        <div  class="bg"></div>
                        <h1><?php echo $v['building_name']; ?></h1>
                        <div class="yan-bot-box">
                                <span class="new-name"><?php echo $v['city']; ?></span>
                                <span class="new-jia">建面：<?php echo $v['humianji']; ?>/m²</span>
                                <span class="new-ji"><?php echo $v['danjia']; ?>元/m²起</span>
                        </div>
                    </a>
                </li>
                
                <?php endforeach; ?>
            </ul>
        </div>
        </div>
<!-- 团购新房 -->
    <div class="tuan container-fluid visible-md-block visible-lg-block">
        <div class="tuan-center">
                    <h3>团购新房</h3>
                   
                    <p>团购新房，一个更省钱的家</p>
                    <ul>
                        <?php foreach($tuan as $v): ?>
                        
                        <li>
                                <a href="<?php echo url('home/content/content',['id'=>$v['bid']]); ?>">
                                    <div class="tuan_shang_box">
                                        <i></i>
                                        <span class="biao">团购优惠</span>
                                        <img src="<?php echo $v['src']; ?>" alt=""> 
                                        <!-- <img src="https://www.jy1980.com/uploads/20190510/thumb_800_0d3df05ddc8e13520cb76ce6df597f4f.jpg" alt=""> -->
                                   </div>

                                    <div class="tuan-bottom">
                                        <h3><?php echo $v['name']; ?></h3>
                                        <h4><?php echo $v['city']; ?></h4>
                                        <p>建面：<?php echo $v['humianji']; ?>/m²<span><?php echo $v['price']; ?>元/m²起</span></p>
                                    </div>
                                
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
        </div>
    </div>
  <!-- 楼市动态 -->  
  <div class="news-box">
    <div class="news container-fluid visible-md-block visible-lg-block">
            <h3>楼市动态</h3>
            <ul class="n-nav">
                <li class="active">土拍信息</li>
                <li>预售证公示</li>
                <li>摇号</li>
            </ul>
            
            <div class="n-2">
                <table>
                    <tr>
                        <th>地块</th>
                        <th>地块编号</th>
                        <th>出让面积(m²)</th>
                        <th>用途</th>
                        <th>容积率</th>
                        <th>建筑面积(m²)</th>
                        <th>起价(万元)</th>
                        <th>楼面起价(元²)</th>
                        <th>成交价(万元)</th>
                        <th>楼面价(元/²)</th>
                        <th>溢价率</th>
                        <th>竞得单位</th>
                    </tr>
                    <?php foreach($tuis as $v): ?>
                    <tr>
                        <td><?php echo $v['name']; ?></td>
                        <td><?php echo $v['code']; ?></td>
                        <td><?php echo $v['area']; ?></td>
                        <td><?php echo $v['for']; ?></td>
                        <td><?php echo $v['rong']; ?></td>
                        <td><?php echo $v['jianmian']; ?></td>
                        <td><?php echo $v['qijia']; ?></td>
                        <td><?php echo $v['loumian']; ?></td>
                        <td><?php echo $v['chengjiao']; ?></td>
                        <td><?php echo $v['loujia']; ?></td>
                        <td><?php echo $v['yijia']; ?></td>
                        <td><?php echo $v['unit']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="n-3">
                <table>
                    <tr>
                        <th>楼盘名</th>
                        <th>预售证号</th>
                        <th>核发日期</th>
                        <th>幢号</th>
                        <th>可售套数</th>
                        <th>户型面积</th>
                        <th>楼盘类型</th>
                        <th>均价</th>
                        <th>楼盘地址</th>
                    </tr>
                    <?php foreach($yus as $v): ?>
                    <tr>
                        <td><?php echo $v['name']; ?></td>
                        <td><?php echo $v['code']; ?></td>
                        <td><?php echo $v['time']; ?></td>
                        <td><?php echo $v['zhuanghao']; ?></td>
                        <td><?php echo $v['taoshu']; ?></td>
                        <td><?php echo $v['humianji']; ?></td>
                        <td><?php echo $v['type']; ?></td>
                        <td><?php echo $v['junjia']; ?></td>
                        <td><?php echo $v['address']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="n-4">
                <div class="n-4-left">
                    <h6>今日可登记楼盘</h6>
                    <ul>
                        <?php foreach($dengs as $v): ?>
                        <li>
                            <span class="fj"><?php echo $v['area']; ?></span>
                            <span class="con"><?php echo $v['loupan']; ?></span>
                            <span class="dj"><?php echo $v['time']; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="n-4-right">
                    <h6>今日摇号楼盘</h6>
                    <ul>
                        <?php foreach($haos as $v): ?>
                        <li>
                            <span class="fj"><?php echo $v['area']; ?></span>
                            <span class="con"><?php echo $v['loupan']; ?></span>
                            <span class="dj"><?php echo $v['time']; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
    </div>
</div>
<!-- 推荐楼盘 -->
<div class="tuan container-fluid visible-md-block visible-lg-block">
        <div class="tuan-center">
                    <h3>推荐楼盘</h3>
                    
                    <p>推荐好盘让你选房更轻松</p>
                    <ul>
                        <?php foreach($tdengs as $v): ?>
                        <li>
                            <a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>">
                                <i></i>
                                <span class="biao">楼盘推荐</span>
                                <img src="<?php echo $v['building_img']; ?>" alt=""> 
                                <div class="tuan-bottom">
                                    <h3><?php echo $v['building_name']; ?></h3>
                                    <h4><?php echo \think\Cookie::get('cityname'); ?></h4>
                                    <p>建面：<?php echo $v['humianji']; ?>/m²<span><?php echo $v['danjia']; ?>元/m²起</span></p>
                                </div>
                            
                            </a>
                        </li>
                        
                        <?php endforeach; ?>
                    </ul>
        </div>
</div>
<!-- 成交案例 -->
<div class="chengjiao">
        <div class="chengjiao-cen">
          <h1>成交案例</h1>
          <div class="like-pic">
                <div class="boutique-ul3">
                    <ul class="ul3-long">
                        <?php foreach($success as $v): ?>
                            <li>
                                <a href="<?php echo url('home/index/chengjiaodetail'); ?>">
                                <div class="house-pic"> </div>
                                   <img src="<?php echo $v['img']; ?>"/> 
                                <div class="name">
                                     <h3><?php echo $v['title']; ?></h3>
                                     <p><?php echo $v['content']; ?> </p>
                                </div>
                             </a>
                            </li>
                            <?php endforeach; ?>
                            
                          
                   </ul>
                   
               </div>
               
         </div>
         <button class="leftBtn3"  > <span class=" iconfont iconjiantouzuo"></span> </button>
         <button class="rightBtn3" > <span class="iconfont iconjiantouyou"></span></button>

        </div>
</div>
<!-- 楼市动态 -->



<!-- 项目资讯 -->

<div class="pro-zi">
      <div class="pro-zi-center">
            <div class="xiang-left">
                   <h1>项目资讯</h1>
                   <p class="title-p">了解项目资讯，楼盘动态早知道</p>
                   <ul>
                       <?php foreach($projects as $v): ?>
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
            </div>
            <div class="xiang-rig">
                <h3>新闻资讯</h3>
                <ul>
                    <?php foreach($news1 as $k=>$v): ?>
                    <li><a href="<?php echo url('home/news/article',['id'=>$v['id']]); ?>"><span><?php echo $k+1; ?></span><i><?php echo $v['title']; ?></i></a></li>
                    <?php endforeach; ?>
                    
                </ul>

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
        <div class="incro">
            <div class="i-top">
                <h6>活动说明</h6>
                <img id="i-esc" src="/static/home/imgs/xx.png" alt="">
            </div>
            <div class="i-bottom">
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;所有团购项目均为“家园新房“网站与开发商的深度合作项目，”家园新房“会给予一部分购房补贴，具体金额看项目情况。<br>
                    “已售：3套“：表示该项目从家园新房成交已达3套<br>
                    “累计：8套“：表示在改项目成交8套即所有在”家园新房“网成交的该项目客户均可以获得相应金额的补贴。<br>
                    “优惠5000“：表示可以获得5000的购房补贴<br>
                    注：1：该活动仅限开发商判定该客户是从“家园新房“网报名认购的客户。具体详情电话咨询-400-718-6686<br>
                    2：最终解释权归“家园新房“所有。

                </p>
            </div>
        </div>
    </div>
   
   
<!-- 右侧悬浮按钮 -->
    <div class="fixed-box">
        <dl class="xiao">
            <dt><img src="/static/home/imgs/xiao_h.png" alt=""></dt>
            <dd>小程序</dd>
        </dl>
        <dl class="get-liu">
            <dt><img src="/static/home/imgs/liu_h.png" alt=""></dt>
            <dd>留言</dd>
        </dl>
        <dl class="sao_ma">
            <dt><img src="/static/home/imgs/sao_h.png" alt=""></dt>
            <dd>扫码拨号</dd>
        </dl>
        <dl class="zi_xun">
            <dt><img src="/static/home/imgs/ke_h.png" alt=""></dt>
            <dd>咨询</dd>
        </dl>
        <dl class="up-btn">
            <dt><img src="/static/home/imgs/back_h.png" alt=""></dt>
            <dd>回顶部</dd>
        </dl>


        <div class="saoma_box bohao">
            <img src="http://test.edefang.net/index/weichat/code" alt="" class="erma">
            <span>微信扫码拨号</span>
        </div>
        <div class="kaifa">
             <img src="/static/home/imgs/waiting_lv.png" alt="">
        </div>
        <div class="kaifazi">
            <img src="/static/home/imgs/waiting_lv.png" alt="">
        </div>
    </div>


    <div class="show-liu">
        <div class="l-top">
            <h4>留言提问</h4>
            <p>20分内回应一对一专业服务，了解更多有关房源信息</p>
            <img id="l-xx" src="/static/home/imgs/xx.png" alt="">
        </div>
        <div class="t-bottom">
            <textarea name="" id="" cols="30" rows="10" placeholder="在这里输入您的留言"></textarea>
            <input type="text" placeholder="输入您手机号码">
            <button id="l_btn">提交</button>
        </div>
        <div class="l-bottom">
            <p>验证码已发送到<span>187****4376</span>，请注意查看</p>
            <button class="l-getcode">获取验证码</button>
            <input type="text" placeholder="输入验证码">
            <span class="l-ti">57秒后重发</span>
            <input type="hidden" class="l-tel">
            <input type="hidden" class="l-con">
            <button class="l-post">立即领取</button>
        </div>
    </div>



    </div>
    
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


       



    </div>






<!-- 手机端 -->


    <div class="container-fluid visible-xs-block" style="padding:0;margin: 0">
        <header class="m-nav visible-xs-block .visible-sm--block">
            <div class="m-address"><?php if(\think\Cookie::get('cityname')): ?> <?php echo \think\Cookie::get('cityname'); else: ?>杭州<?php endif; ?>  <span class="iconfont iconchangyongtubiao-xianxingdaochu-zhuanqu-"></span></div>

            <img style="width:100%" src="/static/home/imgs/banner1.png.png" alt="">
            <img src="/static/home/imgs/Mine.png" alt="" class="m-user">
            <form>
                <input type="text" class="m-sou" placeholder="请输入楼盘名称、地域">
            </form>
            <img src="/static/home/imgs/search.png" alt="" class="m-search">
        </header>
        <nav class="visible-xs-block .visible-sm--block m-na">
            <ul>
                <li><a href="<?php echo url('home/search/index',['type'=>'0']); ?>">
                        <img src="/static/home/imgs/estate_icon.png.png" alt="楼盘查询">
                        <p>楼盘查询</p>
                    </a>
                </li>
                <li><a href="<?php echo url('home/search/tuan',['type'=>'0']); ?>">
                        <img src="/static/home/imgs/group_icon.png.png" alt="团购优惠">
                        <p>团购优惠</p>
                    </a>
                </li>
                <li><a href="<?php echo url('home/index/buy'); ?>">
                        <img src="/static/home/imgs/guide_icon.png.png" alt="买房指南">
                        <p>买房指南</p>
                    </a>
                </li>
                <li><a href="<?php echo url('home/news/index'); ?>">
                        <img src="/static/home/imgs/Information_icon.png.png" alt="楼盘资讯">
                        <p>楼盘资讯</p>
                    </a>
                </li>
                <li><a href="<?php echo url('home/index/map'); ?>">
                        <img src="/static/home/imgs/map_icon.png.png" alt="地图找房">
                        <p>地图找房</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="visible-xs-block .visible-sm--block m-jian"></div>
        <div class="visible-xs-block .visible-sm--block m-jia">
            <h3>家园服务</h3>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="/static/home/imgs/jyxf.png" alt="家园新房"></div>
                    <div class="swiper-slide"><img src="/static/home/imgs/mfzc.png" alt="专车看房"></div>
                    <div class="swiper-slide"><img src="/static/home/imgs/zyfw.png" alt="专业服务"></div>
                    <div class="swiper-slide"><img src="/static/home/imgs/tgfx.png" alt="团购优惠"></div>
                </div>
            </div>
        </div>
        <div class="visible-xs-block .visible-sm--block m-jian"></div>
        <div class="m-dong visible-xs-block .visible-sm--block">
            <h3>楼盘动态<span class="m-d-more">共<i><?php echo $dnum; ?></i>条<img src="/static/home/imgs/m-go.png" alt=""></span></h3>
           
            <ul class="dong-t">
                <?php foreach($dongs as $v): ?>
                <li>
                    <h1><?php echo $v['name']; ?>最新房源动态</h1>
                    <p><?php echo $v['introduce']; ?></p>
                    <h5><?php echo $v['update_time']; ?></h5>
                </li>
                <?php endforeach; ?>
            </ul>
            <div id="box">
                <ul id="menu">
                    <li class="active">热门房源</li>
                    <li>推荐房源</li>
                    <li>新上房源</li>
                    <li>团购优惠</li>
                </ul>
                <div id="panel">
                    <div class="panel active">
                            <div class="swiper-box">
                                    <div class="swiper-wrapper hot-fang">
                                        <?php foreach($hots as $v): ?>
                                        <div class="swiper-slide"> 
                                            <a href="<?php echo url('home/content/index',['id'=>$v['id']]); ?>">
                                            <div class="hua">
                                                <div class="hf-pic"><img src="<?php echo $v['building_img']; ?>" alt=""><span>在售</span></div>
                                                <div class="hf-con">
                                                    <h1><?php echo $v['building_name']; ?></h1>
                                                    <p><?php echo $v['qu']; ?>建面<?php echo $v['humianji']; ?>/m²</p>
                                                    <h6><?php echo $v['danjia']; ?>元/m²起</h6>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <?php endforeach; ?>
                                        
                                    </div>
                            </div> 
                    </div>
                    <div class="panel">
                            <div class="swiper-box-tui">
                                    <div class="swiper-wrapper hot-fang">
                                        <?php foreach($jians as $v): ?>
                                        <div class="swiper-slide"> 
                                                <a href="<?php echo url('home/content/index',['id'=>$v['id']]); ?>">
                                                <div class="hua">
                                                    <div class="hf-pic"><img src="<?php echo $v['building_img']; ?>" alt=""><span>在售</span></div>
                                                    <div class="hf-con">
                                                        <h1><?php echo $v['building_name']; ?></h1>
                                                        <p><?php echo $v['qu']; ?>建面<?php echo $v['humianji']; ?>/m²</p>
                                                        <h6><?php echo $v['danjia']; ?>元/m²起</h6>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                            </div> 
                    
                   </div>
                    <div class="panel">
                             <div class="swiper-box2">
                                    <div class="swiper-wrapper hot-fang">
                                        <?php foreach($news as $v): ?>
                                        <div class="swiper-slide"> 
                                                <a href="<?php echo url('home/content/index',['id'=>$v['id']]); ?>">
                                                <div class="hua">
                                                    <div class="hf-pic"><img src="<?php echo $v['building_img']; ?>" alt=""><span>在售</span></div>
                                                    <div class="hf-con">
                                                        <h1><?php echo $v['building_name']; ?></h1>
                                                        <p><?php echo $v['qu']; ?>建面<?php echo $v['humianji']; ?>/m²</p>
                                                        <h6><?php echo $v['danjia']; ?>元/m²起</h6>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                            </div> 
                  </div> 
                    <div class="panel">
                             <div class="swiper-box3">
                                    <div class="swiper-wrapper hot-fang">
                                        <?php foreach($tuan as $v): ?>
                                        <div class="swiper-slide"> 
                                                <a href="<?php echo url('home/content/index',['id'=>$v['id']]); ?>">
                                                <div class="hua">
                                                    <div class="hf-pic"><img src="<?php echo $v['src']; ?>" alt=""><span>在售</span></div>
                                                    <div class="hf-con">
                                                        <h1><?php echo $v['name']; ?></h1>
                                                        <p><?php echo $v['qu']; ?>建面<?php echo $v['humianji']; ?>/m²</p>
                                                        <h6><?php echo $v['price']; ?>元/m²起</h6>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                            </div> 
                    </div>
              </div>
            
            </div>




        </div>
        <!-- 如何找房 -->
        <div class="find-house">
            <div class="fh-big-box">
                <img src="https://www.jy1980.com/static/home/imgs/car.png" alt="">
                <div class="fh-mid">
                    <h1>如何找房</h1>
                    <p>专家教你如何选择房子</p>
                </div>
                <button id="help">帮我找房</button>
            </div>

        </div>
        <div class="visible-xs-block .visible-sm--block m-jian"></div>



       
        <div class="m-jiao visible-xs-block .visible-sm--block">
            <h5>成交案例<span>更多成交案例 <img src="/static/home/imgs/m-go.png" alt=""></span></h5>
            <div class="m-j-con">
                <a href="<?php echo url('home/index/read',['id'=>$jiao['id']]); ?>">
                    <div class="j-c-left">
                        <img src="http://api.jy1980.com/uploads/20191030/thumb_800_bc6kinvg.jpeg" alt="">
                        <!-- <img src="<?php echo $jiao['img']; ?>" alt=""> -->
                    </div>
                    <div class="j-c-right">
                        <h6><?php echo $jiao['title']; ?></h6>
                        <p><?php echo $jiao['content']; ?></p>
                    </div>
                </a>
            </div>
        </div>

        <!-- 楼市动态 -->
        <div class="lou_dong">
                <div class="lou_dong_cen">
                        <h1>楼市动态</h1>
                    <div class="lou_dong_box">
                        <div class="lou_dong_left">
                            <h2>土拍信息</h2>
                            <p>最新土拍成交资讯，地块成交情况...</p>
                        </div>
                        <div class="lou_dong_right">
                            <div class="yu_shou">
                                <h2>预售证公示</h2>
                                <p>最新预售项目，正在公示...</p>
                            </div>
                            <div class="yao_hao">
                                <h2>即将摇号</h2>
                                <p>最新摇号楼盘，即将摇号...</p>
                            </div>
                        </div>
                    </div>
            </div>
            </div>




        <!-- <div class="visible-xs-block .visible-sm--block m-jian"></div> -->
        <div class="visible-xs-block .visible-sm--block m-title">
             <div class="left-box">  
                <span class="m-yan h-active">家园严选</span>
                <!-- <div class="m-y-line"></div> -->
                <i class="m-tuan">团购新房</i>
                <!-- <div class="m-t-line"></div> -->
           </div> 

            <p class="m-zong">
                <img src="/static/home/imgs/icon-9.png" alt="">
                <?php if(\think\Cookie::get('cityname')): ?> <?php echo \think\Cookie::get('cityname'); else: ?>杭州<?php endif; ?>在售新房<?php echo $num; ?>个
            </p>
        </div>
        <div class="visible-xs-block .visible-sm--block m-list">
            <div id="m-list-box">
                <?php foreach($list as $v): ?>
                <div class="col-xs-12 m-row">
                    <a href="<?php echo url('home/content/index',['id'=>$v['id']]); ?>">
                        <div class="col-xs-4 m-img">
                            <img src="<?php echo $v['building_img']; ?>" alt="">
                        </div>
                        <div class="col-xs-8 m-text">
                            <h4><?php echo $v['building_name']; ?> <span class="m-p-1"><?php echo $v['building_xiaoshou']; ?></span></h4>
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
                <div class="col-xs-12 m-btn">
                    <a href="<?php echo url('home/search/index',['type'=>'0']); ?>">查看更多房源</a>
                </div>
            </div>
        </div>
      



        <div class="visible-xs-block .visible-sm--block m-tuans">
            <div id="m-tuans-box">
                <?php foreach($tuan as $v): ?>
                <div class="col-xs-12 m-row">
                    <a href="<?php echo url('home/content/index',['id'=>$v['bid']]); ?>">

                        <div class="col-xs-4 m-img">
                            <img src="<?php echo $v['src']; ?>" alt="">
                        </div>
                    </a>
                    <div class="col-xs-8 m-text">
                        <h4>
                            <?php echo $v['name']; ?>
                            <span class="m-p-1"><?php echo $v['xiaoshou']; ?></span>
                        </h4>
                        <p class="m-price"><span><?php echo $v['price']; ?></span>元/m²</p>
                        <p class="m-xiang">
                            <span><?php echo $v['city']; ?>-<?php echo $v['qu']; ?></span>
                            <span>建面</span>
                            <span><?php echo $v['humianji']; ?>m²</span>
                        </p>
                        <p class="m-icon">
                            <span class="m-p-2"><?php echo $v['zhuangxiu']; ?></span>
                            <span class="m-p-3"><?php echo $v['ditie']; ?></span>
                            <!-- <span class="m-p-3"><?php echo $v['xiaoshou']; ?></span> -->
                        </p>
                    </div>
                    <!-- <div class="col-xs-12 m-tu">
                        <p class="m-t-left">
                            <?php echo $v['title']; ?>
                        </p>
                        <p class="m-t-right">
                            活动时间：<?php echo $v['start_m']; ?>.<?php echo $v['start_d']; ?>—<?php echo $v['end_m']; ?>.<?php echo $v['end_d']; ?>
                        </p>
                    </div> -->
                </div>
                <?php endforeach; ?>
                <div class="col-xs-12 m-btn">
                    <a href="<?php echo url('home/search/tuan',['type'=>0]); ?>">查看更多房源</a>
                </div>
            </div>
            <div class="m-introduce">
                <img src="/static/home/imgs/m-shuo.png" alt="">
                <h5>活动说明</h5>
                <p>所有团购项目均为“家园新房“网站与开发商的深度合作项目，”家园新房“会给予一部分购房补贴，具体金额看项目情况。
                    “已售：3套“：表示该项目从家园新房成交已达3套；
                    “累计：8套“：表示在改项目成交8套即所有在”家园新房“网成交的该项目客户均可以获得相应金额的补贴；
                    “优惠5000“：表示可以获得5000的购房补贴；<br>
                    注：1：该活动仅限开发商判定该客户是从“家园新房“网报名认购的客户。具体详情电话咨询-400-718-6686<br>
                    2：最终解释权归“家园新房“所有。

                </p>
            </div>
            <div class="m-chang"></div> 
        </div>
         <!-- 项目资讯 -->
        <div class="visible-xs-block .visible-sm--block m-jian"></div> 
        <div class="zixun-list">
            <div class="title">
                    <h1>项目资讯</h1>
                    <div id="more_news">
                        <span>更多资讯</span>
                        <i class="iconfont iconjiantou"></i>
                    </div>
            </div>
            <?php foreach($projects as $v): ?>
            <div class="m-listt">
                    <div id="m-p">
                        <a href="<?php echo url('home/news/pro',['id'=>$v['id']]); ?>">
                        <div class="row m-l">
                            <div class="col-xs-8 m-titlee">
                                <h5><?php echo $v['title']; ?></h5>
                                <div>
                                    <span>项目资讯</span>
                                    <span><?php echo $v['create_time']; ?></span>
                                </div>
                            </div>
                            <img class="col-xs-4" src="<?php echo $v['img']; ?>" alt=""> 
                        </div>
                        </a>
                  </div>
           </div>
           <?php endforeach; ?>
           




            
        </div>

        <!-- 留言悬浮框 -->
        <div class="m-xuan visible-xs-block .visible-sm-block">
                <img src="/static/home/imgs/new_liu.png" alt="">
        </div>
    </div>
    <script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script type="text/javascript" charset="utf-8" src="__STATIC__/ueditor/ueditor.parse.js"></script>
    <script src="https://cdn.bootcss.com/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?171a773ef710b61efe46582847fd6f7c";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
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
    <script>
             var swiper01 = new Swiper('.swiper-box', {
                slidesPerView: 2.4,
                spaceBetween: 12,
                observer:true,
                observeParents:true,
             });
                var swiper02 = new Swiper('.swiper-box-tui', {
                slidesPerView: 2.4,
                spaceBetween: 12,
                observer:true,
                observeParents:true,
                });
                
                var swiper03 = new Swiper('.swiper-box2', {
                slidesPerView: 2.4,
                spaceBetween: 12,
                observer:true,
                observeParents:true,
                });
                var swiper04 = new Swiper('.swiper-box3', {
                slidesPerView: 2.4,
                spaceBetween: 12,
                observer:true,
                observeParents:true,
                });


        var swiper05 = new Swiper('.swiper-container', {
             slidesPerView: 6.5,
            spaceBetween: 14,
             centeredSlides: true,
            // pagination: {
            //     clickable: true,
            // },
        });

        
        $(document).ready(function () {
            // 更多资讯
            $('#more_news').on('click',function(){
                window.location.href="<?php echo url('home/news/index'); ?>";
            })
            //首页土拍跳转
            $('.lou_dong_left').on('click',function(){
                window.location.href="<?php echo url('home/index/tupai',['type'=>0]); ?>";
            })
            // 预售证
            $('.yu_shou').on('click',function(){
                window.location.href="<?php echo url('home/index/tupai',['type'=>1]); ?>";
            })
            // 摇号
            $('.yao_hao').on('click',function(){
                window.location.href="<?php echo url('home/index/tupai',['type'=>2]); ?>";
            })
            // 帮我找房
            $('#help').on('click',function(){
                window.location.href="<?php echo url('home/user/find'); ?>"
            })
            // 留言提交
            $('#l_btn').on('click',function(){
                var tel=$(this).prev().val();
                var pattern_phone = /^1[3-9][0-9]{9}$/;
                if (tel == '') {
                    $(this).prev().attr('placeholder', '手机号不能为空');
                    return;
                } else if (!pattern_phone.test(tel)) {
                    $(this).prev().val('');
                    $(this).prev().attr('placeholder', '手机号码不合法');
                    return;
                }
                var con=$(this).prev().prev().val();
                $.post(
                    "<?php echo url('home/user/login'); ?>",
                    {'phone':tel},
                    function(res){
                        if(res.code==100){
                            $('.t-bottom').hide();
                            $('.l-bottom').show();
                            $('.l-tel').val(tel);
                            $('.l-con').val(con);
                            var time = 60;
                            var fn = function () {
                                time--;
                                if (time > 0) {
                                    $('.l-ti').html('重新发送' + time + 's');
                                    $('.l-ti').attr('disabled', true);
                                } else {
                                    clearInterval(interval);
                                    $('.l-ti').html('获取验证码');
                                    $('.l-ti').attr('disabled', false);
                                }
                            };
                            fn();
                            var interval = setInterval(fn, 1000);
                            var te=tel.substr(0,3)+'****'+tel.substr(7);
                            $('.l-bottom').find('p').find('span').html(te);
                            $('.l-getcode').attr('data-v',tel);

                        }
                    }
                )
            })

            $('.l-post').on('click',function(){
                var con=$(this).prev().val();
                var ma=$(this).prev().prev().prev().prev().val();
                var tel=$(this).prev().prev().val();   
                if(ma==''){
                    alert('验证码不能为空');
                }    
                $.post(
                    "<?php echo url('home/content/tw'); ?>",
                    {'ma':ma,'tel':tel,'con':con},
                    function(res){
                        if(res.code==200){
                            $('.show-liu').hide();
                        }else{
                            alert(res.msg);
                        }
                    }
                )         
            })

            $('.l-getcode').on('click',function(){
                var tel=$(this).attr('data-v');
                console.log(tel);
                $.post(
                    "<?php echo url('home/user/login'); ?>",
                    {'phone':tel},
                    function(res){
                        if(res.code==100){
                            var time = 60;
                            var fn = function () {
                                time--;
                                if (time > 0) {
                                    $('.l-ti').html('重新发送' + time + 's');
                                    $('.l-ti').attr('disabled', true);
                                } else {
                                    clearInterval(interval);
                                    $('.l-ti').html('获取验证码');
                                    $('.l-ti').attr('disabled', false);
                                }
                            };
                            fn();
                            var interval = setInterval(fn, 1000);
                        }else{
                            alert('不要捣乱');
                        }
                    }
                )
            })

            // 留言框显示
            $('.get-liu').on('click',function(){
                $('.show-liu').show();
                $('.zhao').show();
            })
            // 留言框隐藏
            $('#l-xx').on('click',function(){
                $('.show-liu').hide();
                $('.zhao').hide();
            })


	        var gui = document.documentElement.clientWidth || document.body.clientWidth;
            $('.gui-line').width(gui);
	        $('.gui-con').css({left:'-'+gui+'px'});
            $('.gui-btn').on('click',function(){
                var tel=$('.gui-input').val();
                var content=$('.gui-text').val();
                $.post(
                    "<?php echo url('home/index/liuget'); ?>",
                    {
                        'tel':tel,
                        'content':content
                    },
                    function(res){
                        if(res.code==200){
                            $('.gui-tou').animate({left:0},'1800');
                            $('.gui-con').animate({left:-gui},'1800');
                        }else{
                            $('.gui-input').val('');
                            $('.gui-input').attr('placeholder',res.msg)
                        }
                    }
                )
            })
            $('.gui-tou').on('click',function(){
                $('.gui-tou').animate({left:gui},'1800');
                $('.gui-con').animate({left:0},'1800');
            })
            $('.xx').on('click',function(){
                $('.gui-tou').animate({left:0},'1800');
                $('.gui-con').animate({left:-gui},'1800');
            })
            $('.d-more').on('click',function(){
                window.location.href="<?php echo url('home/index/dongs'); ?>"
            })
            $('.m-xuan').on('click', function () {
                window.location.href = "<?php echo url('home/index/lius'); ?>";
            })
            $('.m-d-more').on('click', function () {
                window.location.href = "<?php echo url('home/index/dongs'); ?>";
            })
            // 移动端、
            $('.m-jiao h5 span').on('click', function () {
                window.location.href = "<?php echo url('home/index/jiao'); ?>"
            })
            // 新闻资讯修改
            $('.n-nav li').on('click', function () {
                $(this).addClass('active').siblings('li').removeClass('active');
                var s = $(this).html();
                if (s == '行业新闻') {
                    $('.n-1').show();
                    $('.n-2').hide();
                    $('.n-3').hide();
                    $('.n-4').hide();
                } else if (s == '土拍信息') {
                    $('.n-1').hide();
                    $('.n-2').show();
                    $('.n-3').hide();
                    $('.n-4').hide();
                } else if (s == '预售证公示') {
                    $('.n-1').hide();
                    $('.n-2').hide();
                    $('.n-3').show();
                    $('.n-4').hide();
                } else if (s == '摇号') {
                    $('.n-1').hide();
                    $('.n-2').hide();
                    $('.n-3').hide();
                    $('.n-4').show();
                }
            })
            // 成交案例
            var timer = setInterval(up, 1500);
            var n = <?php echo $n; ?>;
            var s = 0;

            function up() {
                var df = s * 216;
                if (s > n) {
                    s = 1;
                    $('.s-c-all').css('top', 0);
                } else {
                    $('.s-c-all').animate({
                        top: `-${df}px`
                    }, 'fast');
                    s = s + 1;
                }
            }

            $('.s-c-all').on('mouseenter', function () {
                clearInterval(timer);
            })
            $('.s-c-all').on('mouseleave', function () {
                timer = setInterval(up, 1500);
            })

            $('#i-esc').on('click', function () {
                $('.incro').hide();
                $('.zhao').hide();
            })
            $('.tuan-advisory').on('click', function () {
                $('.t-tel').toggle(150);
            })
            $('.tuan-description').on('click', function () {
                $('.incro').show(150);
                $('.zhao').show();
            })
            $('#map').on('click', function () {
                window.location.href = "<?php echo url('home/index/pmap'); ?>"
            })
            $('.my').on('click', function () {
                window.location.href = "<?php echo url('home/user/zu'); ?>";
            })
            $('.city').on('click', function () {
                $('.cities').slideToggle(200);
            })
            $('.select-box li').on('click', function () {
                var city = $(this).attr('data-v');
                var name = $(this).html();
                $.post(
                    "<?php echo url('home/index/city'); ?>", {
                        'id': city,
                        'name': name
                    },
                    function (res) {
                        if (res.code == 100) {
                            $('.city').html(name);
                        }
                    },
                    'json'
                )
                $('.select-box').slideUp(150);
                setTimeout(function () {
                    location.reload(true);
                }, 1000);
            })
            $('#find').on('click', function () {
                $('#bname').submit();
            })
            $('#l-esc').on('click', function () {
                $('.login').hide();
                $('.zhao').hide();
            })
            $('.zhao').on('click', function () {
                $(this).hide();
                $('.login').hide();
                $('.incro').hide();
                $('.show-liu').hide();
            })
            $('.register').on('click', function () {
                $('.zhao').show();
                $('.login').show(150);
            })
            $('.m-get').on('click', function () {
                var phone = $(this).prev().prev().val();
                var pattern_phone = /^1[3-9][0-9]{9}$/;
                if (phone == '') {
                    $('.l-p').attr('placeholder', '手机号不能为空');
                    return;
                } else if (!pattern_phone.test(phone)) {
                    $('.l-p').val('');
                    $('.l-p').attr('placeholder', '手机号码不合法');
                    return;
                }

                var time = 60;
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
                var data = {
                    'phone': phone
                };
                $.post(
                    "<?php echo url('home/user/login'); ?>",
                    data,
                    function (res) {
                        if (res.code == 100) {

                        } else {
                            alert(res.msg);
                        }
                    },
                    'json'
                )
            })
            $('.m-btn').on('click', function () {
                var phone = $(this).prev().prev().prev().val();
                var code = $(this).prev().prev().val();
                var data = {
                    'phone': phone,
                    'code': code
                };
                if (phone == '') {
                    return
                }
                if (code == '') {
                    return
                }
                $.post(
                    "<?php echo url('home/user/log'); ?>",
                    data,
                    function (res) {
                        if (res.code == 100) {
                            window.location.href = "<?php echo url('home/index/index'); ?>";
                        } else {
                            alert(res.msg);
                        }
                    }
                )
            })
            $('.logout').on('click', function () {
                window.location.href = "<?php echo url('home/user/logout'); ?>";
            })
            var h = $(document).height();
            $('.zhao').css('height', h);

            // 显示登陆框
            $('#login-bbs').on('click',function(){
                $('.login').show(150);
                $('.zhao').show(150)
            })


            $('.m-xiangq').on('click', function () {
                $('.m-introduce').show(300);
                $('.m-chang').show();
            })
            $('.m-chang').on('click', function () {
                $(this).hide();
                $('.m-introduce').hide();
            })
            $('.m-yan').on('click', function () {
                $('.m-yan').addClass('h-active');
                $('.m-tuan').removeClass('h-active');
                $('.m-y-line').show();
                $('.m-t-line').hide();
                $('#m-list-box').show();
                $('#m-tuans-box').hide();
            })
            $('.m-tuan').on('click', function () {
                $('.m-tuan').addClass('h-active');
                $('.m-yan').removeClass('h-active');
                $('.m-t-line').show();
                $('.m-y-line').hide();
                $('#m-list-box').hide();
                $('#m-tuans-box').show();
            })
            $('.m-user').on('click', function () {
                window.location.href = "<?php echo url('home/user/index'); ?>";
            })
            $('.m-sou').on('click', function () {
                window.location.href = "<?php echo url('home/search/ss',['end'=>'index']); ?>";
            })
            $('.m-address').on('click', function () {
                window.location.href = "<?php echo url('home/index/citys'); ?>";
            })
            $('#m_xia span').on('click', function () {
                var id = $(this).attr('data-v');
                var name = $(this).attr('data-name');
                $.post(
                    "<?php echo url('home/index/city'); ?>", {
                        'id': id,
                        'name': name
                    },
                    function (res) {
                        if (res.code == 100) {
                            window.location.reload()
                        }
                    },
                    'json'
                )
            })
        })

        // 点击右侧留言
        $('.get-liu').on('click',function(){
            $('.show-liu').show(150);
        })


          //轮播切换

       $('.rightBtn3').eq(0).click(function(){
            var speed=305;
        if(
            parseInt($('.ul3-long').eq(0).css("left"))  <=  -1220
         ){
            $('.rightBtn3').children().css({
                  color:'rgba(153,153,153,1)'
            })
            speed=0 
         }
         $('.leftBtn3').children().css({
                color:"#000"
            })
          console.log($('.ul3-long').eq(0));
         $('.ul3-long').eq(0).animate({
           left:parseInt( $('.ul3-long').eq(0).css("left"))-speed+'px'
         },200)
        
           console.log( $('.ul3-long').eq(0).css("left"));
     })


     $('.leftBtn3').eq(0).click(function(){
        var speed=305;
        if(
            parseInt($('.ul3-long').eq(0).css("left"))>=-1
         ){
            $('.leftBtn3').children().css({
                color:'rgba(153,153,153,1)'
            })
            speed=0 
         }
        //  console.log(speed);
        $('.rightBtn3').children().css({
                  color:"#000"
            })
         $('.ul3-long').eq(0).animate({
           left:parseInt( $('.ul3-long').eq(0).css("left"))+speed+'px'
         },200)
        
        //   console.log( $('.gongyingshang').eq(0).css("left"));
     })

     //区域选择
      window.flag=false;
  
        $('.select').click(function(){
            if( window.flag==false){
                $('.select-box').slideDown("slow");
               window.flag=true;
            }else if( window.flag==true){
                $('.select-box').slideUp("slow");
               window.flag=false;
            }
       }) 
     //回到顶部
    $('.up-btn').click(function(){
        $('html , body').animate({scrollTop: 0},'slow');  
    })
     //选项卡
    $('#menu li').click(function(){
            console.log(this);
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            
            $('.panel').siblings().removeClass('active');
            console.log($(this).index());
             $('.panel').eq($(this).index()).addClass('active');
            
    })
    $('header ul li').click(function(){
      console.log($(this));
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
  })





//右侧悬浮按钮
  $('.xiao').hover(function(){
         $('.xiao dt img').attr('src','/static/home/imgs/xiao_b.png');
         $('.kaifa').show()
  },function(){
         $('.xiao dt img').attr('src','/static/home/imgs/xiao_h.png');
         $('.kaifa').hide()
  })


  $('.get-liu').hover(function(){
         $('.get-liu dt img').attr('src','/static/home/imgs/liu_b.png');
  },function(){
         $('.get-liu dt img').attr('src','/static/home/imgs/liu_h.png');
  })

  $('.sao_ma').hover(function(){
         $('.sao_ma dt img').attr('src','/static/home/imgs/sao_b.png');
         $('.bohao').show();
  },function(){
        $('.sao_ma dt img').attr('src','/static/home/imgs/sao_h.png');
        $('.bohao').hide();
  })

  $('.zi_xun').hover(function(){
         $('.zi_xun dt img').attr('src','/static/home/imgs/ke_b.png');
         $('.kaifazi').show();
  },function(){
         $('.zi_xun dt img').attr('src','/static/home/imgs/ke_h.png');
         $('.kaifazi').hide();
  })

  $('.up-btn').hover(function(){
         $('.up-btn dt img').attr('src','/static/home/imgs/back_b.png');
  },function(){
         $('.up-btn dt img').attr('src','/static/home/imgs/back_h.png');
  })
    //回到顶部
    $('.up-btn').click(function(){
        $('html , body').animate({scrollTop: 0},'slow');  
    })


//搜索列表
var m_dom="";
    $('.img-text').on('input', function(){
        $(".sou_res").show();
        var   name=$(this).val();
        if(name!==""){
           
        $.ajax({
                url: "<?php echo url('home/search/time'); ?>",
                type: 'post',
                data: {  
                     'name':name
                 },
                dataType: 'json',
                success: function (res) {
                    if(res.code==200){
                        var arr=res.data;
                        console.log(arr);
                        if(arr.length>0){
                            m_dom=""
                            $.each(arr,function(m,n){
                                    m_dom+=`<li id="${m}">${n.building_name}</li> `
                                $(".sou_res").html(m_dom);
                            })
                        }else{
                            $(".sou_res").html("暂无数据...");
                        }  
                    }else{
                    }
             },
            error: function (xhr) {
            console.log('error', xhr)
          },
            })

        }else{
            $(".sou_res").hide(); 

        }
      


    })

            $(".sou_res").click(function(e){
                    var value=e.target.innerHTML;
                    $(".img-text").val(value);
            })




// //定义阻止事件传递
// function eventStop (event){  
// 　　event.preventDefault();  
// }
 
 
// //隐藏弹层，设置页面可滑动
// $("body").css("overflow", "auto");
// document.body.removeEventListener('touchmove',eventStop,false);  
 
// //显示弹层，设置页面不可滑动	




      
    </script>
</body>

</html>