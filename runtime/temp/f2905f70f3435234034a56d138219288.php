<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"G:\jiayuan\tp2\public/../application/home\view\search\tuan.html";i:1574413724;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>团购</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/home/css/s-tuan.css">
    <link rel="stylesheet" href="/static/home/css/comm1.css">
    <link rel="stylesheet" href="/static/home/css/com_xun.css">
    <script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script src="https://cdn.bootcss.com/prefixfree/1.0.7/prefixfree.min.js"></script>
    <style>
	
        .m-tuan .m-row .m-text .m-shuoming {
            float: right;
            display: inline-block;
            width: 20%;
            font-size: 12px;
            font-weight: 500;
        }

        .m-tuan .m-row .m-text .m-shuoming img {
            width: 32%;
            margin-right: 3px;
        }

        .m-introduce {
            display: none;
            position: fixed;
            top: 100px;
            width: 74.66667%;
            height: 435px;
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
             margin-left:-608px;
         }
         .top-nav ul{
             margin:0;
         }
         .top-nav ul li{
             float: left;
             margin-right:40px;
         }
         .top-nav ul li a{
             color:#666666;
             font-size: 16px;
             line-height: 80px;
         }
         .top-nav ul li a:hover{
             color:#333333;
             font-size: 16px;
             line-height: 80px;
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
	        cursor:pointer;
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
             padding-left: 20px;
             font-size:16px;
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
             cursor: pointer;
             border:1px solid #1CB64F;
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


         /* 条件栏 */
         .tiao{
             width:100%;
             padding-top:30px;
             height:340px;
             position: relative;
             z-index: 20000;
         }
         .tiao .col span{
             display: inline-block;
             color:#333333;
             font-size: 14px;
             margin-right:48px;
             position: relative;
             top:-10px;
         }
         .tiao .c2 span{
             top:-63px;
         }
	.tiao .c3{
	      margin-top:8px;
	      margin-bottom:0px;
	}
	.tiao .c5{
          /* margin-bottom:8px; */
          margin-top:4px;
    }
    .tiao .c4{
            margin-bottom:8px;
            position:relative;
        }
         
         .tiao .col .ars{
             display: inline-block;
             width:90%;
         }
         .tiao .col .ars ul{
            width: 100%;
            padding-bottom: 10px;
            line-height: 30px;
            border-bottom: 1px solid #EDEDED;
         }
         .tiao .col .ars ul li{
             float: left;
             color:#666666;
             font-size: 14px;
             margin-right:24px;
             cursor: pointer;
         }
         .tiao .col ul li.active{
             color:#2FBF4A;
         }
         .tiao .box .c1 span {
            top: -10px;
        }
         .tiao .col .ars ul li img{
             width:14px;
             margin-left: 4px;
         }
         .tiao .col ul{
            display: inline-block;
            width: 93%;
            margin-bottom: 0;
         }
         .tiao #address1{
             display: none;
         }
         .tiao .col ul li{
             float:left;
             margin-right: 23px;
             font-size: 14px;
             color:#666666;
             cursor: pointer;
             line-height: 30px;
         }
         .tiao .tese ul li {
            line-height: 26px!important;
         }
         .tiao .resou ul li {
            margin-right: 43px!important;  
         }
         .tiao .col ul li a{
             color:#666666;
             font-size: 14px;
             font-weight: bold;
         }
         .tiao .col input{
             border:1px solid #D9D9D9;
             width:52px;
             height:22px;
         }
         .tiao .col p{
             display: inline-block;
             margin-left: -55px;
         }
         .c1{
             height:28px;
             margin-top:7px;
         }
         .zongjia{
              position:relative;
         }
         .zongjia ul{
               width:auto!important;
         }
         .c1 span{
             top:-15px;
         }
         .c1 p{
            position: relative;
            top: -11px;
            left: 80px;
         }
         .c1 button{
             border:0px;
             width:52px;
             height:22px;
             background-color: #1CB64F;
             color:#fff;
             font-size: 14px;
	    border-radius:2px;
         }
         .c1 p i{
             font-style: normal;
         }
         /* .tiao .c4{
             margin-bottom: 8px;
             position:relative;
         } */
         .tiao .c4 #s_list li{
             margin-right: 77px;
         }
         .c4 ul li img{
             width:14px;
             margin-left:4px;
         }
         .c4 .s{
             background-color: #fff;
             padding-left:7%;
             display: none;
         }
         .tiao .box .c4 .s ul{
             width:100%;
         }
         .tiao .box .col .now{
             color:#2FBF4A;
         }
         .tiao .c6{
            height:40px;
            background-color: #F7F7F7;
            border-radius: 2px;
            line-height: 40px;
            position: relative;
        }
        .tiao .c6 img{
            height:22px;
            position: absolute;
            left:23px;
            top:9px;
        }

        .tiao .c6 ul{
            margin-top: 6px;
            margin-left: 63px;
        }
        
        .tiao .c6 ul li.first{
            color:#333333;
            font-weight: bold;
        }
      
       
         .tiao .c4 .dan ol{
               position:absolute;
               width:115px;
               height:auto;
               background:#fff;
               text-align:center;
            z-index:200; 
            top:36px;
            left:45px;
            border-radius: 4px;
            box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.12);
            cursor:pointer;
            line-height: 32px;
         }
         .tiao .dan ol li:hover{
	      background-color:#E6FFEB;
	      color:#2FBF4A;
        }
        .tiao .lei ol li:hover{
	      background-color:#E6FFEB;
	      color:#2FBF4A;
        }
        .tiao .kai ol li:hover{
	      background-color:#E6FFEB;
	      color:#2FBF4A;
	    }
         .tiao .c4 .lei ol{
               position:absolute;
               width:115px;
               height:auto;
               background:#fff;
               text-align:center;
               z-index:200;
               top:36px;
               left:167px;
               border-radius: 4px;
            box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.12);
            cursor:pointer;
            line-height: 32px;
         }
         .tiao .c4 .kai ol{
               position:absolute;
               width:115px;
               height:auto;
               background:#fff;
               text-align:center;
            z-index:200;
            top:36px;
            left:295px;
            border-radius: 4px;
           box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.12);
           cursor:pointer;
           line-height: 32px;
         }




        /* 留言悬浮框 */
 

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
            bottom: 173px;
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
        /* 遮罩 */
        .zhao {
            display: none;
            width: 100%;
            background-color: #000000;
            opacity: 0.4;
            position: fixed;
            top: 0;
            z-index: 20000;
        }


         /* 楼盘列表 */
         .buildings{
             height:4400px;
         }
         .buildings .b-top{
             width:80%;
             border-bottom: 1px solid #EDEDED;
         }
         .buildings .b-top span{
             color: #666666;
             font-size: 16px;
             margin-right:80px;
             display: inline-block;
             position: relative;
             padding-bottom: 8px;
             cursor: pointer;
         }
         .buildings .b-top span.active{
             color:#1CB64F;
             font-weight: bold;
         }
         .buildings .b-top span.active i{
             position: absolute;
             top:30px;
             left:0;
             width:60px;
             height:2px;
             background-color: #1CB64F;
         }
         .buildings .b-top p{
             float:right;
             color:#666666;
             font-size: 16px;
         }
         .buildings .b-top p span{
             color:#FF6666;
             font-size: 16px;
             font-weight: bold;
             margin:0;
         }
         .buildings .row:hover {
            background-color: #FAFAFA;
        }
        .buildings .row:hover img{
            transform: scale(1.1);
            border-radius:4px;
         }

         .buildings .row{
             width:80%;
             padding-top:40px;
             border-bottom: 1px solid #EDEDED;
             position: relative;
         }
         .buildings .row .left{
             width:29%;
             overflow: hidden;
         }
         .buildings .row .right{
             width:71%;
         }
         .buildings .row .left img{
            width:240px;
            height:180px;
            border-radius: 4px;
            transition: all 0.6s;
         }
         .buildings .row .right h5{
            color:#323232;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 22px;
            margin-top:0;
            line-height: 31px;
         }
         .buildings .row .right h5 span{
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
             cursor:default;
         }
         .buildings .row .right p{
             color: #999999;
            font-size: 14px;
            margin-bottom: 10px;
            width: 400px;
            height: 22px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
         }
         .buildings .row .right p button{
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
         .buildings .row .right p button img{
             width:16px;
             margin-right:3px;
         }
         .buildings .row .right p span{
             color:#666666;
             font-size: 12px;
             padding:6px;
             background-color: #F5F5F5;
             margin-right:12px;
         }
         .buildings .row .right p .xiu{
             color:#4393FF;
             background-color: #EAF3FF;
         }
         .buildings .row .fork{
             position: absolute;
             top:40px;
             right:0;
             width:30px;
             cursor: pointer;
         }
         .buildings .row #price{
             position: absolute;
             right:0;
             top:100px;
             color:#FF6666;
             font-size: 16px;
         }
	.buildings .row .right p.tuan{
	    margin-top:18px;
             width:668px;
             background-color: #F7F7F7;
             height:32px;
             line-height:32px;
             margin-bottom: 20px!important;
	    padding-left:10px;
	}
         
         .buildings .row .right .tuan span{
             padding:0;
         }
         .buildings .row .tuan span.t-right{
             float: right;
         }
         .buildings .row #price span{
             font-size: 28px;
         }
         .buildings .row #zong{
             position: absolute;
             right:0;
             top:150px;
             color: #808080;
             font-size: 14px;
         }

         .buildings .page{
            float: left;
            margin-top: 38px;
            display: inline-block;
         }
         .buildings .page li{
            float: left;
            width:36px;
            height:36px;
            text-align: center;
            line-height: 36px;
            border:1px solid #D9D9D9;
            color:#808080;
            font-size: 16px;
            margin-right:10px;
            cursor: pointer;
            border-radius:4px;
         }
         .buildings .page li.active{
             color:#fff;
             background:#3AC869;
         }
         .buildings .page li:hover{
             color:#fff;
             background:#3AC869;
         }

         .buildings .pages span{
            font-size: 16px;
            display: inline-block;
            cursor: pointer;
            color: #808080;
            width: 36px;
            float: left;
            height: 36px;
            border: 1px solid #D9D9D9;
            text-align: center;
            line-height: 36px;
            margin-top: 38px;
            border-radius:4px;
         }
         .buildings #back{
             margin-right: 11px;
         }

         .buildings .fix{
             width:20%;
             position: absolute;
             right:-30px;
             top:0;
         }
         .buildings .fix h5{
             color:#323232;
             font-size: 24px;
             margin-bottom:25px;
         }
         .buildings .fix .lou{
             margin-bottom: 20px;
         }
         .buildings .fix .lou img{
             width:180px;
             height:135px;
             border-radius: 4px;
             margin-bottom: 15px;
         }
         .buildings .fix .lou h6{
             color:#333333;
             font-size: 18px;
             margin-bottom: 13px;
         }
         .buildings .fix .lou p{
             color:#808080;
             font-size: 16px;
             margin-bottom: 6px;
             width:170px;
             overflow:hidden;
            text-overflow:ellipsis;
            white-space:nowrap
         }
         .buildings .fix .lou p.hot-pri{
             color:#FF6666;
         }
         .buildings .fix .lou .hot-pri span{
             font-size: 20px;
         }
         /* footer */
         /* footer{
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
	 */

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
        }

	.cities{
            position: absolute;
            top:73px;
            left:10.8%;
            display: none;
	   z-index:2000000;
	   border-radius:4px;
	   box-shadow:0px 0px 12px 0px rgba(0, 0, 0, 0.12);
        }
        .cities ul{
            background-color: #fff;
            margin-bottom:0;
	     border-radius:4px;
        }
        .cities ul li{
            color:#323232;
            font-size: 16px;
            line-height: 32px;
	   
            width:95px;
            background-color: #fff;
            cursor:pointer;
            text-align: center;
        }
	.cities ul li:hover{
	      background-color:#E6FFEB;
	      color:#2FBF4A;
	}
	.cities ul li:last-child{
	     border-radius:0 0 4px 4px;
	}
	.cities ul li:first-child{
	     border-radius:4px 4px 0 0;
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
        .m-t-right{
            color: #4D4D4D;
    font-size: 12px;
    float: left;
    width: 46%;
    height: 20px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
        }

        /* 友情链接 */
    .hot-tui h4,h5,h6{
        margin:0;
    }
/* .youqing{
    position: relative;
    top: 133px;
    left: 37%;
} */
/* .youqing li{
    float: left;
    color:#fff;
    margin-right:10px;
} */

         .hot-tui h3{
            font-size:18px;
            font-family:'Microsoft YaHei';
            font-weight:bold;
            color:rgba(51,51,51,1);
           line-height: 48px;
        }
        .hot-tui ul li{
               height:134px;
               width:312px;
        }
        .hot-tui ul li .hot-list{
            width:312px;
            height:90px;
        }
        .hot-tui ul li .hot-list .hot-img{
            float:left;
            position: relative;
            height:90px;
            margin-right: 24px;
        }
        .hot-tui ul li .hot-list .hot-img span{
            width:72px;
            height:24px;
            background:linear-gradient(270deg,rgba(255,124,72,1),rgba(255,66,52,1));
            border-radius:6px 0px 6px 0px;
            font-size:14px;
            font-family:'PingFang SC';
            font-weight:500;
            color:rgba(255,255,255,1);
            position: absolute;
            display: block;
            text-align: center;
            line-height: 24px;
            top:0;
        }
        .hot-tui ul li .hot-list .hot-name{
            float:left;
            height:90px;
        }
        .hot-tui ul li .hot-list .hot-img img{
            width:130px;
            height:90px;
            border-radius:8px;
        }
        .hot-tui ul li .hot-list .hot-img i{
            width:130px;
            height:90px;
            background:rgba(0,0,0,1);
            opacity:0.4;
            border-radius:8px;
            position: absolute;
            top:0;
        }
        .hot-tui ul li .hot-list:hover i {
            opacity:0;
        }
        .hot-tui ul li .hot-list .hot-name h4{
            font-size:14px;
            font-family:'Microsoft YaHei';
            font-weight:bold;
            color:rgba(51,51,51,1);
            line-height:20px;
        }
        .hot-tui ul li .hot-list .hot-name h5{
            font-size:14px;
            font-family:'Microsoft YaHei';
            font-weight:400;
            color:rgba(128,128,128,1);
            line-height:26px;
            margin-bottom: 0;
        }
        .hot-tui ul li .hot-list .hot-name h6{
            font-size:14px;
            font-family:'Microsoft YaHei';
            font-weight:400;
            color:rgba(128,128,128,1);
            line-height:26px;
        }
        .hot-tui ul li .hot-list .hot-name span{
            font-size:16px;
            font-family:'Microsoft YaHei';
            font-weight:bold;
            color:rgba(255,106,72,1);
            width:113px;
            top:-38px;
            background-color: #fff;
            /* line-height:48px; */
        }
        .hot-tui ul li p{
            width:312px;
            height:20px;
            background:rgba(250,250,250,1);
            border-radius:2px;
            line-height: 20px;
            margin-top:7px;
            overflow: hidden;
            text-overflow:ellipsis;
            white-space: nowrap;
            color:#999999;
        }

        /* 留言悬浮框 */
        /* .m-xuan{
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
        } */

        
        .m-xuan img{
        /* width:24.8%; */
        height:34px;
        position: fixed;
        right:0px;
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
             left:222px;
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


    </style>
</head>

<body>
    <!-- PC -->
    <div class="container-fluid p">
            <nav class="top-nav visible-md-block visible-lg-block">
                <div class="box">
                    <ul>
                        <li><a href="<?php echo url('home/index/index'); ?>">家园首页</a></li>
                        <li><a href="<?php echo url('home/search/index',['type'=>0]); ?>">楼盘查询</a></li>
                        <li><a href="<?php echo url('home/search/tuan',['type'=>0]); ?>" class="active">团购优惠</a></li>
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
                    <p>购房热线  &nbsp;400-718-6686</p>
                </div>
                
                
            </nav>
            <div class="search visible-md-block visible-lg-block">
                <div class="box">
                    <div class="top">
                        <img src="/static/home/imgs/logo2.png" alt="">
                        <p id="cy"><i><?php if(\think\Cookie::get('cityname')): ?> <?php echo \think\Cookie::get('cityname'); else: ?>杭州<?php endif; ?></i><img src="/static/home/imgs/triangle.png" alt=""></p>
                        <div class="cities">
                                <ul>
                                    <?php foreach($city as $v): ?>
                                    <li data-v="<?php echo $v['id']; ?>"><?php echo $v['area_name']; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                           </div>
                        <form id="bname" style="display: initial" action="<?php echo url('home/search/index',['type'=>0]); ?>" method="post">
                        <input type="text" name="name" placeholder="请输入楼盘名称、地域" class="home_search" autocomplete="off">
                        <ul class="sou_res">
                          
                        </ul>
                        <span id="find"><img src="/static/home/imgs/icon-8.png">我要找房</span>
                        </form>
                        <span id="map"><img src="/static/home/imgs/pcadd.png" alt="">地图找房</span>
                    </div>
                    
                </div>
            </div>
            <div class="tiao visible-md-block visible-lg-block">
                <div class="box">
                    <div class="col c2">
                        <span class="no">位置</span>
                        <div class="ars">
                            <ul class="titl">
                                <li class="now" id="qu" data-v="q">区域<img src="/static/home/imgs/up.png" alt=""></li>
                                <li id="di" data-v="t">地铁<img src="/static/home/imgs/down1.png" alt=""></li>
                            </ul>
                            <ul id="address" style="height:38px;">
                                <li data-v="0" class="active">不限</li>
                                <?php foreach($cates as $v): ?>
                                <li data-v="<?php echo $v['id']; ?>"><?php echo $v['area_name']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <ul id="address1" style="height:38px;">
                                <li data-v="0" class="active">不限</li>
                                <?php foreach($ties as $v): ?>
                                <li data-v="<?php echo $v; ?>"><?php echo $v; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col c1  zongjia">
                        <span>总价</span>
                        <ul>
                            <li data-v="0">不限</li>
                            <li data-v="0-100">100万以下</li>
                            <li data-v="100-150">100-150万</li>
                            <li data-v="150-200">150-200万</li>
                            <li data-v="200-300">200-300万</li>
                            <li data-v="300-500">300-500万</li>
                            <li data-v="500-5000000">500万以上</li>
                        </ul>
                        <p>
                                <input type="text"> — <input type="text">&nbsp;&nbsp;<i>万 </i> &nbsp;&nbsp;&nbsp;<button id="btn">确定</button>
                        </p>
                        
                    </div>
                    <div class="col c3">
                        <span>户型</span>
                        <ul>
                            <li data-v="0">不限</li>
                            <?php foreach($hus as $v): ?>
                            <li data-v="<?php echo $v; ?>"><?php echo $v; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="col c5 tese">
                        <span>特色</span>
                        <ul>
                            <li data-v="0">不限</li>
                            <?php foreach($tes as $v): ?>
                            <li data-v="<?php echo $v; ?>"><?php echo $v; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col c4">
                        <span>筛选</span>
                        <ul id="s_list">
                            <li>单价<img src="/static/home/imgs/down1.png" alt=""></li>
                            <li>类型<img src="/static/home/imgs/down1.png" alt=""></li>
                            <li>开发商<img src="/static/home/imgs/down1.png" alt=""></li>
                        </ul>
                        <div class="s dan">
                        <ol>
                            <li data-v="0" class="active">不限</li>
                            <?php foreach($dans as $v): ?>
                            <li data-v="<?php echo $v; ?>"><?php echo $v; ?></li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                    <div class="s lei">
                        <ol>
                            <li data-v="0" class="active">不限</li>
                            <li data-v="1-10000">一万以下</li>
                            <li data-v="10000-14999">1万-1.5万</li>
                            <li data-v="15000-19999">1.5万-2万</li>
                            <li data-v="20000-29999">2万-3万</li>
                            <li data-v="30000-39999">3万-4万</li>
                            <li data-v="40000-60000">4万-6万</li>
                            <li data-v="60000-50000000000">6万以上</li>
                        </ol>
                    </div>
                    <div class="s kai">
                        <ol>
                            <li data-v="0" class="active">不限</li>
                            <?php foreach($kais as $v): ?>
                            <li data-v="<?php echo $v; ?>"><?php echo $v; ?></li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                    </div>
                    <div class="col c6 resou">
                        <img src="/static/home/imgs/fire.png" alt="">
                        <ul>
                            <li class="first">热搜楼盘</li>
                            <?php foreach($tdengs as $v): ?>
                            <li><a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>"><?php echo $v['building_name']; ?></a></li>
                            <?php endforeach; ?>
                            
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="buildings visible-md-block visible-lg-block">
                <div class="box">
                    <div class="b-top">
                        <span id="mo" class="active">默认排序<i></i></span>
                        <span id="danj">单价排序<i></i></span>
                        <span id="kai">开盘时间<i></i></span>
                        <p>为您找到<span id="allnum"><?php echo $num; ?></span>套楼盘</p>
                    </div>
                    <div id="cont">
                            <?php foreach($data as $v): ?>
                            <div class="row">
                                <a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>">
                                <div class="col-lg-4 left">
                                    <img src="<?php echo $v['building_img']; ?>" alt=""> 
                                </div>
                            </a>
                                <div class="col-lg-8 right">
<a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>">
                                    <h5><?php echo $v['building_name']; ?><span><?php echo $v['building_xiaoshou']; ?></span></h5>
</a>
                                    <p><?php echo $v['city']; ?>  &nbsp;|&nbsp;  <?php echo $v['building_address']; ?></p>
                                    <p><?php echo $v['building_huxing']; ?>&nbsp;&nbsp; |  &nbsp;面积：<?php echo $v['humianji']; ?>m²</p>
                                    <p>金牌置业顾问&nbsp;&nbsp;&nbsp;<button class="zixun" data-v="<?php echo $v['building_name']; ?>"><img src="/static/home/imgs/pc-tel.png">咨询</button></p>
                                    <p><span class="xiu"><?php echo $v['building_zhuangxiu']; ?></span><span><?php echo $v['building_ditie']; ?></span><span><?php echo $v['building_xingshi']; ?></span></p>
                                    <p class="tuan">
                                        <span><?php echo $v['title']; ?></span>
                                        <span class="t-right">活动时间：<?php echo $v['start']; ?>—<?php echo $v['end']; ?></span>
                                    </p>
                                </div>
                                <?php if(in_array($v['id'],\think\Session::get('fork'))): ?>
                            <img class="fork" src="/static/home/imgs/fork2.png" alt="">
                            <?php else: ?>
                            <img class="fork fk" data-v="<?php echo $v['id']; ?>" src="/static/home/imgs/forked.png" alt="">
                            <?php endif; ?>
                                <p id="price"><span><?php echo $v['danjia']; ?></span>元/m²起</p>
                                <p id="zong">参考总价：<span><?php echo $v['zong']; ?></span>万元/套起</p>
                                
                            </div>
                            <?php endforeach; ?>
                    </div>
                    
                <div class="pages">
                    <span id="back"><<</span>
                    <ul class="page">
                        <?php $__FOR_START_1840483317__=0;$__FOR_END_1840483317__=$page;for($i=$__FOR_START_1840483317__;$i < $__FOR_END_1840483317__;$i+=1){ if($i<7): ?>
                        <li <?php if($i==0): ?> class="active" <?php endif; ?> data-v="<?php echo $i; ?>"><?php echo $i+1; ?></li>
                        <?php endif; } ?>
                    </ul>
                    <span id="go">>></span>
                </div>
                    
                    <div class="fix">
                        <h5>热搜楼盘</h5>
                        <div class="hot-tui">
                            <ul>
                                <?php foreach($tdengs as $v): ?>
                                <li>
                                    <a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>">
                                    <div class="hot-list">
                                        <div class="hot-img">
                                            <i></i>
                                            <span>热搜楼盘</span>
                                            <img src="<?php echo $v['building_img']; ?>" alt="">
                                        </div>
            
                                        <div class="hot-name">
                                            <h4><?php echo $v['building_name']; ?></h4>
                                            <h5><?php echo $v['city']; ?>-<?php echo $v['qu']; ?></h5>
                                            <h6>建面：<?php echo $v['humianji']; ?>/m²</h6>
                                            <span><?php echo $v['danjia']; ?>元/m²起</span>
                                        </div>
                                    </div>
                                   <p>最新动态：<?php echo $v['dong']; ?></p>
                                </li>
                            </a>
                                <?php endforeach; ?>
                                
                            </ul>
            
            
                        </div>
                        
                    </div>
                </div>
            </div>
	        <div class="tan visible-md-block visible-lg-block">
                <div class="zhao"></div>
                <!-- 留言悬浮框 -->
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
                    <button class="l-post">立即提交</button>
                </div>
            </div>
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
	       <div class="request ts">
                <div class="t-top">
                    <h6>咨询服务</h6>
                    <p>一键订阅，享受最专业的服务！</p>
                    <img id="w-esc" src="/static/home/imgs/xx.png" alt="">
                </div>
                <div class="t-bottom">
                    <input class="l-p" type="text" placeholder="请输入手机号">
                    <input class="l-c" type="text" placeholder="姓名">
                    <input type="hidden" value="咨询服务">
                    <input type="hidden" name="building_name" value="买房指南">
                    <button class="port1">确定</button>
                </div>
            </div>
            <div class="succ">
                <div class="t-top">
                    <img id="s_esc" src="/static/home/imgs/m-esc.png" alt="">
                    <img class="gou" src="/static/home/imgs/gou.png" alt="">
                </div>
                <div class="t-bottom">
                    <p id="txt">132133</p>
                    <button class="s-btn">确定</button>
                </div>
            </div>
            </div>
            <!-- 侧边悬浮栏 -->
            <div class="fixed-box visible-lg-block ">
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
                    <div class=" kaifa">
                        <img src="/static/home/imgs/waiting_lv.png" alt="">
                    </div>
                    <div class=" kaifazi">
                        <img src="/static/home/imgs/waiting_lv.png" alt="">
                    </div>
                </div>       
            <!-- <footer class="container-fluid visible-md-block visible-lg-block">
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
                   
                    <span>Copyright © 2017 - 2022 杭州亚汉网络有限公司有限公司版权所有 浙ICP备18057005号 </span>
            </footer> -->
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




        </div>    <!-- PC -->


    <!-- 移动 -->
    <div class="container-fluid m">
        <!-- <img class="m-banner visible-xs-block .visible-sm--block" src="/static/home/imgs/banner2.png.png" alt=""> -->
        <div class="m-search visible-xs-block .visible-sm--block">
            <img src="/static/home/imgs/return.png" alt="" onclick="javascript:history.go(-1)">
            <img src="/static/home/imgs/search.png" alt="" class="m-se">
            <input type="text" class="m-int" placeholder="请输入楼盘名称、地域">
            <div class="zhao-ditu">
                    <img class="m-map" src="/static/home/imgs/map2_icon.png.png" alt="">
                    <p>地图找房</p>
            </div>
        </div>

        <div class="m-menu visible-xs-block .visible-sm--block">
            <ul>
                <li class="m-u">
                    <span>区域</span>
                    <img src="/static/home/imgs/triangle.png" alt="">
                </li>
                <li class="m-a">
                    价格
                    <img src="/static/home/imgs/triangle.png" alt="">
                </li>
                <li class="m-h">
                    户型
                    <img src="/static/home/imgs/triangle.png" alt="">
                </li>
                <li class="m-n">
                    筛选
                    <img src="/static/home/imgs/triangle.png" alt="">
                </li>
            </ul>
            <img class="m-sort" src="/static/home/imgs/sort_icon.png.png" alt="">

        </div>
        <div class="visible-xs-block .visible-sm--block m-me">
            <div class="m-qu row">
                <div class="m-one col-xs-4 col-sm-4">
                    <ul>
                        <li class="m-r-active">区域</li>
                        <li>地铁</li>
                    </ul>
                </div>
                <div class="m-two col-xs-8 col-sm-8">
                    <ul id="qu">
                        <li class="m-l-active" data_v="0">不限</li>
                        <?php foreach($cates as $v): ?>
                        <li data_v="<?php echo $v['id']; ?>"><?php echo $v['area_name']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <ul id="tie">
                        <li class="m-l-active" data_v="0">不限</li>
                        <?php foreach($ties as $v): ?>
                        <li data_v="<?php echo $v; ?>"><?php echo $v; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
            <div class="m-jia row">
                <div class="m-one col-xs-4 col-sm-4">
                    <ul>
                        <li class="m-r-active">总价</li>
                        <li>单价</li>
                    </ul>
                </div>
                <div class="m-two col-xs-8 col-sm-8">
                    <ul id="zong">
                        <li class="m-l-active" data-v="0">不限</li>
                        <li data-v="0-100">100万以下</li>
                            <li data-v="100-150">100-150万</li>
                            <li data-v="150-200">150-200万</li>
                            <li data-v="200-300">200-300万</li>
                            <li data-v="300-500">300-500万</li>
                            <li data-v="500-5000000">500万以上</li>
                    </ul>
                    <ul id="dan">
                        <li class="m-l-active" data_v="0">不限</li>
                        <li data-v="10000-14999">1万-1.5万</li>
                            <li data-v="15000-19999">1.5万-2万</li>
                            <li data-v="20000-29999">2万-3万</li>
                            <li data-v="30000-39999">3万-4万</li>
                            <li data-v="40000-60000">4万-6万</li>
                            <li data-v="60000-50000000000">6万以上</li>
                    </ul>
                </div>

            </div>
            <div class="m-hu row">
                <div class="m-one">
                    <ul>
                        <form id="hu" class=" col-xs-12 col-sm-12" onsubmit="return false" action="##" method="POST">
                                <li class=" col-xs-12 col-sm-12">
                                        <span>不限</span>
                                        <input type="checkbox" name="buxian" value="" id="">
                                </li>
                            <?php foreach($hus as $v): ?>
                            <li class=" col-xs-12 col-sm-12">
                                <span><?php echo $v; ?></span>
                                <input type="checkbox" name="hu" value="<?php echo $v; ?>" id="">
                            </li>
                            <?php endforeach; ?>
                        </form>
                    </ul>
                    <div class="m-h-btn">
                        <span class="m-h-l">清空</span>
                        <span class="m-h-r">确定</span>
                    </div>
                </div>
            </div>
            <div class="m-shan row">
                <h4>类型 </h4>
                <div class="m-one" id="m-xing">
                    <?php foreach($xings as $v): ?>
                    <span class=" col-xs-3 col-sm-3"><?php echo $v; ?></span>
                    <?php endforeach; ?>
                </div>
                <h4>开发商</h4>
                <div class="m-one m-two" id="m-shang">
                    <?php foreach($kais as $v): ?>
                   <span class=" col-xs-3 col-sm-3"><?php echo $v; ?></span>
                   <?php endforeach; ?>
                </div>
                <h4>特色 </h4>
                <div class="m-one m-thr" id="m-te">
                    <span class=" col-xs-3 col-sm-3">不限</span>
                    <?php foreach($tes as $v): ?>
                    <span class=" col-xs-3 col-sm-3"><?php echo $v; ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="m-s-btn">
                    <span class="m-h-l">清空</span>
                    <span class="m-h-r">确定</span>
                </div>
            </div>
            <div class="m-pai row">
                <ul>
                    <li class="m-act" data_v="0">默认排序</li>
                    <li data_v="1">单价从低到高</li>
                    <li data_v="2">单价从高到低</li>
                    <li data_v="3">开盘时间从近到远</li>
                    <li data_v="4">开盘时间从远到近</li>
                </ul>
            </div>
            <div class="m-box"></div>
        </div>
        <div class="visible-xs-block .visible-sm--block m-tuan">
            <?php foreach($data as $v): ?>
            <div class="col-xs-12 m-row">
                <a href="<?php echo url('home/content/index',['id'=>$v['id']]); ?>">
                    <div class="col-xs-4 m-img">
                            <span>团购优惠</span>
                             <img src="<?php echo $v['building_img']; ?>" alt=""> 
                            <!-- <img src="https://www.jy1980.com/uploads/20190522/1749a3b2dac7a377ce0ced9917dc184e.jpg" alt=""> -->
                    </div>
                </a>
                <div class="col-xs-8 m-text">
                    <h4 class="m-tit">
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
                        <span class="m-p-2"><?php echo $v['building_xingshi']; ?></span>
                        <span class="m-p-3"><?php echo $v['building_ditie']; ?></span>
                        <!-- <span class="m-p-3">繁华地段</span> -->
                    </p>
                </div>
                <!-- <div class="col-xs-12 m-tu">
                    <p class="m-t-left">
                        <?php echo $v['title']; ?>
                    </p>
                    <p class="m-t-right">
                        活动时间：<?php echo $v['start']; ?>—<?php echo $v['end']; ?>
                    </p>
                </div> -->

            </div>
            <?php endforeach; ?>
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
         <!-- 留言悬浮框 -->
         <div class="m-xuan visible-xs-block .visible-sm-block">
                <img src="/static/home/imgs/new_liu.png" alt="">
        </div>
    </div>


    <script src="/static/home/js/com_liu_you.js"></script>
<script>
            function la(str,ty){
                    $.post(
                        "<?php echo url('home/search/tu'); ?>",
                        {suggest:str,type:ty},
                        function(data){
                            // console.log(data);
                            var html="";
                            if(data.length>1){
                                $.each(data,function(i,v){
                                    html+=`
                                    <div class="row">
                                <a href="/home/content/content/id/${v.id}">
                                <div class="col-lg-4 left">
                                    <img src="${v.building_img}" alt="">
                                </div>
                            </a>
                                <div class="col-lg-8 right">
<a href="/home/content/content/id/${v.id}">
                                    <h5>${v.building_name}<span>${v.building_xiaoshou}</span></h5>
</a>
                                    <p>${v.city}  &nbsp;|&nbsp;  ${v.building_address}</p>
                                    <p>${v.building_huxing}&nbsp;&nbsp; |  &nbsp;面积：${v.humianji}m²</p>
                                    <p>金牌置业顾问&nbsp;&nbsp;&nbsp;<button><img src="/static/home/imgs/phone1.png">咨询</button></p>
                                    <p><span class="xiu">${v.building_zhuangxiu}</span><span>${v.building_ditie}</span><span>${v.building_xingshi}</span></p>
                                    <p class="tuan">
                                        <span>${v.title}</span>
                                        <span class="t-right">活动时间：${v.start}—${v.end}</span>
                                    </p>
                                </div>
                                <img class="fork" src="/static/home/imgs/forked.png" alt="">
                                <p id="price"><span>${v.danjia}</span>元/m²起</p>
                                <p id="zong">参考总价：<span>${v.zong}</span>万元/套起</p>
                                
                            </div>
                                    `;
                                    $('#cont').html(html);
                                })
                                $('.fork').on('click',function(){
                                    var id=$(this).attr('data-v');
                                    $.post(
                                        "<?php echo url('home/content/fork'); ?>",
                                        {'id':id},
                                        function(res){
                                            if(res.code==100){

                                            }else{
                                                alert(res.msg);
                                            }
                                        },
                                        'json'
                                    )
                                })
                                var ps=data[0].page;
                                $('#allnum').html(ps);
                            ps=Math.ceil(ps/15);
                            console.log(ps);
                            var h='';
                            for(var i=0;i<ps;i++){
                                if(i==0){
                                    h+=`<li data-v="${i}" class="active">${i+1}</li>`;
                                }else{
                                    h+=`<li data-v="${i}">${i+1}</li>`;
                                }
                                
                            }
                            $('.page').html(h);
                            }else{
                                $('#allnum').html(0);
                                html=`
                                <div class="visible-xs-block .visible-sm--block m-kong">
                                    <img src="/static/home/imgs/m-search1.png" alt="">
                                    <p>还没有收录该楼盘，快去看看其它楼盘吧~</p>
                                    <a class="m-lian" href="tel:400-718-6686">联系我们</a>
                                    <button class="m-go">去看楼盘</button>
                                </div>
                                `;
                                $('#cont').html(html);
    
                            }
                        },
                        'json'
                    );
                }
                function pa(str,ty){
                    $.post(
                        "<?php echo url('home/search/tu'); ?>",
                        {suggest:str,type:ty},
                        function(data){
                            // console.log(data);
                            var html="";
                            if(data.length>1){
                                $.each(data,function(i,v){
                                    html+=`
                                    <div class="row">
                                <a href="/home/content/content/id/${v.id}">
                                <div class="col-lg-4 left">
                                    <img src="${v.building_img}" alt="">
                                </div>
                            </a>
                                <div class="col-lg-8 right">
                                <a href="/home/content/content/id/${v.id}">
                                    <h5>${v.building_name}<span>${v.building_xiaoshou}</span></h5>
                                </a>
                                    <p>${v.city}  &nbsp;|&nbsp;  ${v.building_address}</p>
                                    <p>${v.building_huxing}&nbsp;&nbsp; |  &nbsp;面积：${v.humianji}m²</p>
                                    <p>金牌置业顾问&nbsp;&nbsp;&nbsp;<button><img src="/static/home/imgs/phone1.png">咨询</button></p>
                                    <p><span class="xiu">${v.building_zhuangxiu}</span><span>${v.building_ditie}</span><span>${v.building_xingshi}</span></p>
                                    <p class="tuan">
                                        <span>${v.title}</span>
                                        <span class="t-right">活动时间：${v.start}—${v.end}</span>
                                    </p>
                                </div>
                                <img class="fork" src="/static/home/imgs/forked.png" alt="">
                                <p id="price"><span>${v.danjia}</span>元/m²起</p>
                                <p id="zong">参考总价：<span>${v.zong}</span>万元/套起</p>
                            </div>
                                    `;
                                    $('#cont').html(html);
                                })
                                $('.fork').on('click',function(){
                                    var id=$(this).attr('data-v');
                                    $.post(
                                        "<?php echo url('home/content/fork'); ?>",
                                        {'id':id},
                                        function(res){
                                            if(res.code==100){

                                            }else{
                                                alert(res.msg);
                                            }
                                        },
                                        'json'
                                    )
                                })
                            }else{
                                html=`
                                <div class="visible-xs-block .visible-sm--block m-kong">
                                    <img src="/static/home/imgs/m-search1.png" alt="">
                                    <p>还没有收录该楼盘，快去看看其它楼盘吧~</p>
                                    <a class="m-lian" href="tel:400-718-6686">联系我们</a>
                                    <button class="m-go">去看楼盘</button>
                                </div>
                                `;
                                $('#cont').html(html);
    
                            }
                        },
                        'json'
                    );
                }
            $(document).ready(function(){
		$('.user').on('click',function(){
                    window.location.href="<?php echo url('home/user/zu'); ?>";
                })
		$('.zixun').on('click',function(){
                $('.zhao').show();
                $('.request').show(150);
                window.bname=$(this).attr('data-v');
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
                            $('.zhao').hide();
                            $('.show-liu').hide();
                        }else{
                            alert(res.msg);
                        }
                    }
                )
                var sign=parseInt(new Date().getTime()/1000);
                var cateid=<?php echo \think\Cookie::get('city'); ?>;
                $.post(
                    "http://api.jy1980.com/index.php/distribute/send",
                    {'sign':sign,'username':'没有','project':'','source':'家园留言','remark':con,'cate_id':cateid,'phone':tel},
                    function(res){
                        if(res.code){
                            alert(res.message)
                        }else{
                            alert(res.message);
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

            $('#w-esc').on('click',function(){
                $('.zhao').hide();
                $('.request').hide();
            })
            $('.port1').on('click',function(){
                var building_name=bname;
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
                var data={
                    'phone':tel,
                    'type':type,
                    'name':name,
                    'building_name':building_name
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
            $('.s-btn').on('click',function(){
                $('.zhao').hide();
                $('.succ').hide();
            })
            $('#s_esc').on('click',function(){
                $('.zhao').hide();
                $('.succ').hide();
            })

$('#cy').on('click',function(){
                $('.cities').slideToggle(150);
            })
            $('.cities li').on('click',function(){
                var id=$(this).attr('data-v');
                var name=$(this).html();
                $.post(
                    "<?php echo url('home/index/city'); ?>",
                    {'id':id,'name':name},
                    function(res){
                        if(res.code==100){
                            $('#cy i').html(name);
                        }
                    },
                    'json'
                )
                $('.cities').slideUp(150);
	       setTimeout(function(){
                location.reload(true);
            },1000);

            })
		$('#l-esc').on('click',function(){
                $('.login').hide();
                $('.zhao').hide();
                })
            $('.zhao').on('click',function(){
                $(this).hide();
                $('.login').hide();
                $('.show-liu').hide();
	       $('.request').hide();
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


                $('.fork').on('click',function(){
                var id=$(this).attr('data-v');
		var that=$(this);
                $.post(
                    "<?php echo url('home/content/fork'); ?>",
                    {'id':id},
                    function(res){
                        if(res.code==100){
			that.attr('src',"/static/home/imgs/fork2.png");
                            that.removeClass('fk');
                        }else{
                            alert(res.msg);
                        }
                    },
                    'json'
                )
            })
            $('#back').on('click',function(){
                var num=$('.page li.active').attr('data-v');
                console.log(num);
                if(num==0){
                    return;
                }
                pa(num-1,0);
                $('.page li.active').prev().addClass('active').siblings('li').removeClass('active');
            })
            $('#go').on('click',function(){
                var num=$('.page li.active').attr('data-v');
                var end=$(this).prev().children('li').last().html();
                console.log(num);
                if(num==(end-1)){
                    return;
                }
                pa(Number(num)+1,0);
                $('.page li.active').next().addClass('active').siblings('li').removeClass('active');
            })
            $('.page').on('click','li',function(){
                var bb=<?php echo $page; ?>;
                var end=$(this).parent().children('li').last().html();
                var start=$(this).parent().children('li:first').html();
                console.log(start);
                var num=$(this).attr('data-v');
                $(this).addClass('active').siblings('li').removeClass('active');
                var that=$(this);
                pa(num,0)
                if((Number(num)+1)==end){
                    var s=end-3;
                    var b=Number(end)+3;
                    b=b>bb?bb:b;
                    s=s>1?s:1;
                    var html='';
                    for(var i=s;i<=b;i++){
                        if(i==end){
                            html+=`<li data-v="${i-1}" class="active">${i}</li>`;
                        }else{
                            html+=`<li data-v="${i-1}">${i}</li>`;
                        }
                    }
                    $('.page').html(html);
                }
                if((Number(num)+1)==start){
                    if(start==1){
                        return
                    }else{
                        var s=start-3;
                        var b=Number(start)+3;
                        var html="";
                        for(var i=s;i<=b;i++){
                            if(i==start){
                                html+=`<li data-v="${i-1}" class="active">${i}</li>`;
                            }else{
                                html+=`<li data-v="${i-1}">${i}</li>`;
                            }
                        }
                        $('.page').html(html);
                    }
                }
            })
            $('#s_list li').on('click',function(){
                var str=$(this).text();
                if(str=='单价'){
                    $('.dan').slideToggle(150);
                    $('.lei').slideUp(150);
                    $('.kai').slideUp(150);
                }else if(str=='类型'){
                    $('.dan').slideUp(150);
                    $('.kai').slideUp(150);
                    $('.lei').slideToggle(150);
                }else if(str=='开发商'){
                    $('.dan').slideUp(150);
                    $('.lei').slideUp(150);
                    $('.kai').slideToggle(150);
                }
                $(this).addClass('active').siblings('li').removeClass('active');
            })
            $('.dan li').on('click',function(){
                var s=$(this).attr('data-v');
                la(s,3);
                $(this).addClass('active').siblings('li').removeClass('active');
	       $('.dan').slideUp(150);

            })
            $('#danj').on('click',function(){
                la(2,7)
                $(this).addClass('active').siblings('span').removeClass('active');
            })
            $('#kai').on('click',function(){
                la(4,7);
                $(this).addClass('active').siblings('span').removeClass('active');
            })
            $('#mo').on('click',function(){
                la(5,7);
                $(this).addClass('active').siblings('span').removeClass('active');
            })
            $('.lei li').on('click',function(){
                var str=$(this).attr('data-v');
                var ss=[];
                ss[0]=str;
                if(str==0){
                    ss[0]='';
                }
                ss[1]='';
                ss[2]='';
                la(ss,6)
                $(this).addClass('active').siblings('li').removeClass('active');
                $('.lei').slideUp(150);
            })
            $('.kai li').on('click',function(){
                var str=$(this).attr('data-v');
                var ss=[];
                ss[2]=str;
                if(str==0){
                    ss[2]='';
                }
                la(ss,6)
                $(this).addClass('active').siblings('li').removeClass('active');
                $('.kai').slideUp(150);
            })
                $('#address li').on('click',function(){
                    var str=$(this).attr('data-v');
                    la(str,1);
                    $(this).addClass('active').siblings('li').removeClass('active');
                })
                $('#address1 li').on('click',function(){
                    var str=$(this).attr('data-v');
                    la(str,2);
                    $(this).addClass('active').siblings('li').removeClass('active');
                })
                $('.c1 li').on('click',function(){
                    var str=$(this).attr('data-v');
                    la(str,4);
                    $(this).addClass('active').siblings('li').removeClass('active');
                })
                $('#btn').on('click',function(){
                    var big=$(this).prev().prev().val();
                    var small=$(this).prev().prev().prev().val();
                    console.log(small+'-'+big)
                    la(small+'-'+big,9)
                    console.log(small);
                })
                $('.c3 li').on('click',function(){
                    var str=$(this).attr('data-v');
                    if(str==0){
                        str='';
                    }
                    la(str,5);
                    $(this).addClass('active').siblings('li').removeClass('active');
                })
                $('.c5 li').on('click',function(){
                    var str=$(this).attr('data-v');
                    var ss=[];
                    ss[1]=str;
                    if(str==0){
                        ss[1]='';
                    }
                    
                    ss[2]='';
                    la(ss,6)
                    $(this).addClass('active').siblings('li').removeClass('active');
                })
                $('.titl li').on('click',function(){
                    $(this).addClass('now').siblings('li').removeClass('now');
                    $(this).children('img').attr('src','/static/home/imgs/up.png');
                    $(this).siblings('li').children('img').attr('src','/static/home/imgs/down1.png')
                    var type=$(this).attr('data-v');
                    if(type=='q'){
                        $('#address').show();
                        $('#address1').hide();
                        $('.no').css('top','-63px');
                    }else{
                        $('#address').hide();
                        $('#address1').css('display','inline-block');
                        $('.no').css('top','-63px');
                    }
                })
                $('#find').on('click',function(){
                    $('#bname').submit();
                })
                $('#map').on('click',function(){
                    window.location.href="<?php echo url('home/index/pmap'); ?>";
                })
            })
        </script>



    <script>
        $(document).ready(function () {
            var s = $('.m-tuan').html();
            if (s.length == 38) {
                var hh = $('.m').html();
                hh += ` <div class="visible-xs-block .visible-sm--block m-kong">
                                <img src="/static/home/imgs/m-search1.png" alt="">
                                <p>还没有收录该楼盘，快去看看其它楼盘吧~</p>
                                <a class="m-lian" href="tel:400-718-6686">联系我们</a>
                                <button class="m-go">去看楼盘</button>
                            </div>`;
                $('.m').html(hh);
            }
            $('.m-go').on('click', function () {
                window.location.href = "<?php echo url('home/search/tuan',['type'=>0]); ?>"
            })
            $('.m-u').on('click', function () {
                $('.m-qu').slideToggle('fast');
                $('.m-jia').hide();
                $('.m-hu').hide();
                $('.m-shan').hide();
                if ($(this).hasClass('m-as')) {
                    $(this).removeClass('m-as');
                    $('.m-box').hide();
                } else {
                    $(this).addClass('m-as');
                    $('.m-box').show();
                }
                $(this).siblings('li').removeClass('m-as');
            })
            $('.m-one ul li').on('click', function () {
                $(this).addClass('m-r-active').siblings('li').removeClass('m-r-active');
            })
            $('.m-qu .m-one ul li').on('click', function () {
                var str = $(this).text();
                if (str == '城区') {
                    $('#qu').show();
                    $('#tie').hide();
                } else {
                    $('#qu').hide();
                    $('#tie').show();
                }
            })
            $('.m-jia .m-one ul li').on('click', function () {
                var str = $(this).text();
                if (str == '总价') {
                    $('#zong').show();
                    $('#dan').hide();
                } else {
                    $('#zong').hide();
                    $('#dan').show();
                }
            })
            $('.m-qu .m-two ul li').on('click', function () {
                $('.m-u span').text($(this).text());
                $('.m-qu').hide(100);
                $(this).addClass('m-l-active').siblings('li').removeClass('m-l-active');
                $('.m-box').hide();
                $('.m-menu ul li').removeClass('m-as');
            })

            function send(str, ty) {
                $.post(
                    "<?php echo url('home/search/tu'); ?>", {
                        suggest: str,
                        type: ty
                    },
                    function (data) {
                        //console.log(data);
                        var html = "";
                        if (data.length > 0) {
                            $.each(data, function (i, v) {
                                html += `
                                <div class="col-xs-12 m-row">
<a href="/home/content/index/id/${v.id}">
                                <div class="col-xs-4 m-img">
                                        <span>团购优惠</span>
                    <img src="${v.building_img}" alt="">
                </div>
</a>
                <div class="col-xs-8 m-text">
                    <h4 class="m-tit">
                        ${v.building_name}
                        <span class="m-p-1"><?php echo $v['building_xiaoshou']; ?></span>
                    </h4>
                    <p class="m-price"><span>${v.danjia}</span>元/m²</p>
                    <p class="m-xiang">
                        <span>${v.city}-${v.qu}</span>
                        <span>建面</span>
                        <span>${v.humianji}m²</span>
                    </p>
                    <p class="m-icon">
                        <span class="m-p-2">${v.building_xiaoshou}</span>
                        <span class="m-p-3">${v.building_xingshi}</span>
                        <span class="m-p-3">${v.building_ditie}</span>
                        
                    </p>
                </div>
             
                </div>
                                `;
                                $('.m-tuan').html(html);
                            })
                        } else {
                            html = `
                            <div class="visible-xs-block .visible-sm--block m-kong">
                                <img src="/static/home/imgs/m-search1.png" alt="">
                                <p>还没有收录该楼盘，快去看看其它楼盘吧~</p>
                                <a class="m-lian" href="tel:400-718-6686">联系我们</a>
                                <button class="m-go">去看楼盘</button>
                            </div>
                            `;
                            $('.m-tuan').html(html);
                        }
                    },
                    'json'
                );
            }
            $('#qu li').on('click', function () {
                var str = $(this).attr('data_v');
                send(str, 1);
            })
            $('#tie li').on('click', function () {
                var str = $(this).attr('data_v');
                send(str, 2);
            })
            $('#dan li').on('click', function () {
                var str = $(this).attr('data_v');
                send(str, 3);
            })
            $('#zong li').on('click', function () {
                var str = $(this).attr('data-v');
                send(str, 4);
            })
            $('.m-pai ul li').on('click', function () {
                $(this).addClass('m-act').siblings('li').removeClass('m-act');
                var str = $(this).attr('data_v');
                send(str, 7);
                $('.m-pai').hide();
            })
            $('.m-shan .m-one span').on('click', function () {
                $(this).parent('div').children('span').removeClass('m-now');
                $(this).addClass('m-now');
            })
            $('.m-shan .m-s-btn .m-h-r').on('click', function () {
                var xing = $('#m-xing .m-now').text();
                var te = $('#m-te .m-now').text();
                var kai=$('#m-shang .m-now').text();
                var str = [];
                str[0] = xing;
                str[1] = te;
                str[2]=kai;
                // console.log(str);
                send(str, 6);
            })
            $('.m-shan .m-s-btn .m-h-l').on('click', function () {
                $('.m-shan span').removeClass('m-now');
            })
            $('.m-jia .m-two ul li').on('click', function () {
                $('.m-jia').hide(100);
                $(this).addClass('m-l-active').siblings('li').removeClass('m-l-active');
                $('.m-box').hide();
                $('.m-menu ul li').removeClass('m-as');
            })
            $('.m-hu .m-one ul li').on('click', function () {
                if ($(this).find('input').prop('checked')) {
                    $(this).find('input').prop('checked', false);
                } else {
                    $(this).find('input').prop('checked', true);
                }
            })
            $('.m-hu .m-one .m-h-r').on('click', function () {
                var str = $('#hu').serialize();
                str = decodeURIComponent(str, true);
                str = str.split('&');
                $.each(str, function (i, v) {
                    str[i] = v.split('=')[1];
                })
                // console.log(str);

                send(str, 5);
            })
            $('.m-h-r').on('click', function () {
                $('.m-hu').slideUp(100);
                $('.m-shan').slideUp(100);
                $('.m-box').hide();
                $('.m-menu ul li').removeClass('m-as');
            })
            $('.m-a').on('click', function () {
                $('.m-jia').slideToggle('fast');
                $('.m-qu').hide();
                $('.m-hu').hide();
                $('.m-box').toggle();
                $('.m-shan').hide();
                if ($(this).hasClass('m-as')) {
                    $(this).removeClass('m-as');
                    $('.m-box').hide();
                } else {
                    $(this).addClass('m-as');
                    $('.m-box').show();
                }
                $(this).siblings('li').removeClass('m-as');
            })
            $('.m-h').on('click', function () {
                $('.m-hu').slideToggle('fast');
                $('.m-jia').hide();
                $('.m-qu').hide();
                $('.m-box').toggle();
                $('.m-shan').hide();
                if ($(this).hasClass('m-as')) {
                    $(this).removeClass('m-as');
                    $('.m-box').hide();
                } else {
                    $(this).addClass('m-as');
                    $('.m-box').show();
                }
                $(this).siblings('li').removeClass('m-as');
            })
            $('.m-n').on('click', function () {
                $('.m-shan').slideToggle('fast');
                $('.m-box').toggle();
                $('.m-jia').hide();
                $('.m-hu').hide();
                $('.m-qu').hide();
                if ($(this).hasClass('m-as')) {
                    $(this).removeClass('m-as');
                    $('.m-box').hide();
                } else {
                    $(this).addClass('m-as');
                    $('.m-box').show();
                }
                $(this).siblings('li').removeClass('m-as');
            })
            $('.m-sort').on('click', function () {
                $('.m-pai').slideToggle('fast');
                $('.m-box').toggle();
                $('.m-jia').hide();
                $('.m-shan').hide();
                $('.m-hu').hide();
                $('.m-qu').hide();
                if ($(this).hasClass('m-as')) {
                    $(this).removeClass('m-as');
                    $('.m-box').hide();
                } else {
                    $(this).addClass('m-as');
                    $('.m-box').show();
                }
                $(this).siblings('li').removeClass('m-as');
            })
            $('.m-h-l').on('click', function () {
                $('.m-hu ul li input:checkbox').attr('checked', false);
            })
            $('.m-int').on('click', function () {
                window.location.href = "<?php echo url('home/search/ss',['end'=>'tuan']); ?>";
            })

            // 留言页跳转
            $('.m-xuan').on('click', function () {
                window.location.href = "<?php echo url('home/index/lius'); ?>";
            })

            function pull(str, ty) {
                $.post(
                    "<?php echo url('home/search/tu'); ?>", {
                        suggest: str,
                        type: ty
                    },
                    function (data) {
                        // console.log(data);
                        var html = $('.m-tuan').html();
                        if (data.length > 1) {
                            $.each(data, function (i, v) {
                                html += `
                                <div class="col-xs-12 m-row">
                                <div class="col-xs-4 m-img">
                                        <span>团购优惠</span>
                    <img src="${v.building_img}" alt="">
                </div>
                <div class="col-xs-8 m-text">
                    <h4 class="m-tit">
                        ${v.building_name}
                        <span class="m-p-1"><?php echo $v['building_xiaoshou']; ?></span>
                    </h4>
                    <p class="m-price"><span>${v.danjia}</span>元/m²</p>
                    <p class="m-xiang">
                        <span>${v.city}-${v.qu}</span>
                        <span>建面</span>
                        <span>${v.humianji}m²</span>
                    </p>
                    <p class="m-icon">
                        <span class="m-p-2">${v.building_xiaoshou}</span>
                        <span class="m-p-3">${v.building_xingshi}</span>
                        
                    </p>
                </div>
             
                </div>
                                `;
                                $('.m-tuan').html(html);
                            })
                        } else {
                            $('.m-tuan').html(html);
                        }
                    },
                    'json'
                );
            }
            var p = 1;
            $(window).scroll(function () {
                var scrollTop = $(this).scrollTop();
                var scrollHeight = $(document).height();
                var windowHeight = $(this).height();
                if (scrollTop + windowHeight >= scrollHeight) {
                    pull(p, 1);
                    p = p + 1;
                }             });
            $('.m-map').on('click', function () {
                window.location.href = "<?php echo url('home/index/map'); ?>"
            })
            $('.m-shuoming').on('click', function () {
                $('.m-introduce').show(300);
                $('.m-chang').show()
            })
            $('.m-chang').on('click', function () {
                $('.m-introduce').hide(300);
                $('.m-chang').hide()
            })
        })

 //搜索列表
        var m_dom="";
    $('.home_search').on('input', function(){
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
                    $(".home_search").val(value);
            })


//顶部悬浮
window.onscroll=function(){
        var top=document.documentElement.scrollTop||document.body.scrollTop;
            if(top>=48){
                // console.log(1);
               $('.m-menu').css({
                   'position':'fixed',
                   "top":"0px"
               })
               $('.m-me').css({
                   "top":"44px"
               })
            }else {
                $('.m-menu').css({
                   'position':'relative',
               })
               $('.m-me').css({
                   'top':'92px',
               })
            }
}

$('.m-box').click(function(){
                  $('.m-qu').hide();
                  $('.m-jia').hide();
                  $('.m-hu').hide();
                  $('.m-shan').hide();
                   $('.m-pai').hide();
                   $(this).hide();
        })
    </script>
</body>

</html>