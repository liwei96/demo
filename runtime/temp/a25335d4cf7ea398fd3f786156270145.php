<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"G:\jiayuan\tp2\public/../application/home\view\news\index.html";i:1574838904;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, maximum-scale=1.0 , user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">	
	<title>项目资讯-新闻资讯-楼盘资讯</title>
<meta name="keywords" content="项目资讯，新闻资讯，楼盘资讯" />
<meta name="description" content="家园新房具有更多的项目资讯，新闻资讯等你相关楼盘资讯，可以让您更好的了解楼盘" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            <link rel="stylesheet" href="/static/home/css/comm1.css">
            <link rel="stylesheet" href="/static/home/css/com_xun.css">
        <script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        <style>
             * {
                    padding: 0;
                    margin: 0;
		font-family:"Microsoft YaHei";
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
















                /* 头部 */
                .m{
                    padding:0;
                }
                .m-nav{
                    width:100%;
                    height:48px;
                    text-align: center;
                    border-bottom: 1px solid #F2F2F2;
		  background-color:#fff;
                }
                .m-nav img{
                    width: 5%;
                    float:left;
                    margin-top:3.3%;
                    margin-left: 5.33%;
                }
                .m-nav span{
                    color:#999999;
                    display: inline-block;
                    font-size: 14px;
                    height:48px;
                    line-height: 48px;
                    width:30%;
                }
                .m-nav .m-p-news{
                    margin-left:-6%;
                }
                .m-nav span.m-active{
                    color:#333333;
                    font-size: 16px;
                    font-weight: bold;
                    position: relative;
                }
                .m-nav span.m-active i{
                    height: 3px;
                    display: block;
                    width: 33%;
                    background-color: #1CB64F;
                    position: absolute;
                    top: 94%;
                    left: 32%;
                }




                /* 列表 */
                .m-list{
                    width:100%;
                    padding:0;
		  margin-top:60px;
                }
                .m-list .row{
                    height:105px;
                    border-bottom:0.5px solid #EBEBEB;
                    margin-right:-5px;
                }
                .m-list .row .m-title{
                    padding-top: 2%;
                    padding-left: 8%;
                }
                .m-list .row h5{
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
                    font-weight:bold;
                    font-family:"Microsoft YaHei";
                              }
                .m-list .row span{
                    color: #979797;
                    font-size: 10px;
                    margin-right: 5%;
                }
                .m-list .row img{
                    width: 28%;
                    margin-top: 3.5%;
		           height:74px;
                }
                #m-n{
                    display: none;
                }





		/* 土拍 预售*/
                .m-list .m-di{
                    padding:0 4% 0 4%;
                }
                .m-list .m-di h6{
                    color:#333333;
                    font-size: 16px;
                    margin-top:22px;
                    margin-bottom:18px;
                }
                .m-list .m-di ul li:nth-child(2n+1){
                    background-color: #CBF4C4;
                    height:40px;
                }
                .m-list .m-di ul li:nth-child(2n){
                    background-color: #F1FFEC;
                    height:40px;
                }
                .m-list .m-di ul li span.left{
                    float:left;
                    width:50%;
                    text-align: center;
                    color:#4D4D4D;
                    font-size: 14px;
                    line-height: 40px;
                }
                .m-list .m-di ul li span.right{
                    float:right;
                    width:50%;
                    text-align: center;
                    color:#808080;
                    font-size: 14px;
                    line-height: 40px;
                    overflow: hidden;/*超出部分隐藏*/
                    text-overflow:ellipsis;/* 超出部分显示省略号 */
                    white-space: nowrap;/*规定段落中的文本不进行换行 */
                }
                /* 土拍 预售*/
                /* 预售证 */
                #m-t{display:none;}
                .m-list .m-di{
                    padding:0 4% 0 4%;
                }
                .m-list .m-di h6{
                    color:#333333;
                    font-size: 16px;
                    margin-top:22px;
                    margin-bottom:18px;
                }
                .m-list .m-di ul li:nth-child(2n+1){
                    background-color: #CBF4C4;
                    height:40px;
                }
                .m-list .m-di ul li:nth-child(2n){
                    background-color: #F1FFEC;
                    height:40px;
                }
                .m-list .m-di ul li span.left{
                    float:left;
                    width:50%;
                    text-align: center;
                    color:#4D4D4D;
                    font-size: 14px;
                    line-height: 40px;
                }
                .m-list .m-di ul li span.right{
                    float:right;
                    width:50%;
                    text-align: center;
                    color:#808080;
                    font-size: 14px;
                    line-height: 40px;
                    overflow: hidden;/*超出部分隐藏*/
                    text-overflow:ellipsis;/* 超出部分显示省略号 */
                    white-space: nowrap;/*规定段落中的文本不进行换行 */
                }
                /* 预售证 */

                /* 摇号登记 */
                #m-y{display:none;}
                #m-h{display:none;}
                .m-list .m-al{
                    padding:4%;
                }
                .m-list .m-al h6{
                    color:#333333;
                    font-size: 18px;
                    margin-top:12px;
                    margin-bottom:22px;
                }
                .m-list .m-al ul li{
                    margin-bottom: 23px;
                }
                .m-list .m-al ul li span{
                    color:#808080;
                    font-size: 14px;
                }
                .m-list .m-al ul li span.a-area{
                    width:20%;
                    float:left;
                }
                .m-list .m-al ul li span.a-lou{
                    width:50%;
                    color:#4D4D4D;
                    font-weight: bold;
                    display: inline-block;
                }
                .m-list .m-al ul li span.a-time{
                    float:right;
                }
                .m-list .a-line{
                    height:10px;
                    width:100%;
                    background-color: #f7f7f7;
                }
                /* 摇号登记 */




	/* PC */
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
             color:#666;
             font-size: 16px;
             line-height: 80px;
         }
         .top-nav ul li a.active{
             font-weight: bold;
             color:#333333;
             border-bottom: 2px solid #1CB64F;
             padding-bottom: 28px;
         }
         .top-nav ul li a:hover{
            color:#333333;
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
             right:196px;
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
         /* 留言悬浮框 */
    
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

         /* content */
         .content{
             width:100%;
             height:2518px;
             padding-top:38px;
         }
         .content .left{
             padding:0;
         }
         .content .left h5{
             color:#333333;
             font-size: 24px;
             margin-bottom:38px;
             margin-top:0;
             font-weight: bold;
         }
         .content .left .row:hover{
             background-color: #FAFAFA;
         }
         .content .left .row:hover  img{
            transform: scale(1.1);
         }
         .content .left .row .pic-dong{
               overflow: hidden;
               width: 220px;
                height: 165px;
         }
         .content .left .row{
             border-bottom: 1px solid #EBEBEB;
             margin-bottom: 39px;
         }
         .content .left .row img{
             width:220px;
             height:165px;
             border-radius: 4px;
             transition: all 0.6s;
         }
         .content .left .row h6{
             color:#404040;
             font-size: 20px;
             margin-top:0;
             margin-bottom:16px;
             line-height: 38px;
             font-weight: bold;
         }
         .content .left .row .xiang p{
            color:#666666;
            font-size: 16px;
            line-height: 28px;
            height:83.33px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            overflow: hidden;
         }
         .content .left .row .type{
             float:right;
             color:#979797;
             font-size: 16px;
             margin-bottom: 21px;
             padding-right:32px;
         }
         .content .left .row .type  span{
             margin-left:8px;
         }


         .content .page{
            float: left;
            display: inline-block;
         }
         .content .page li{
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
         }
         .content .page li.active{
             color:#3AC869;
             border:1px solid #3AC869;
         }
         .content .pages span{
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
         }
         .content #back{
             margin-right: 11px;
         }

         .content .right{
             padding-left:47px;
         }
         .content .right h6{
             color:#333333;
             font-size: 24px;
             font-weight: 500;
             margin-bottom: 38px;
             font-weight: bold;
         }
         .content .right ul li{
             margin-bottom: 16px;
         }
         .content .right ul li a{
             color: #666666;
             font-size: 16px;
             width:302px;
             display: inline-block;
             height:51.11px;
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
             top: -34px;
            position: relative;
         }
         .content .right ul li span.new{
             background-color: #1CB64F;
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
        }
    /* 友情链接 */
    .hot-tui h4,h5,h6{
        margin:0;
    }
/* .youqing{
    position: relative;
    top: 133px;
    left: 37%;
}
.youqing li{
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
        .m-l  .col-xs-4{
                padding:0 !important;
                border-radius:4px ;
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
                <p>购房热线  &nbsp;400-718-6686</p>
            </div>
            
            
        </nav>
        <div class="search visible-lg-block">
            <div class="box">
                <div class="top">
                    <img src="/static/home/imgs/logo2.png" alt="">
                    <p><i><?php if(\think\Cookie::get('cityname')): ?> <?php echo \think\Cookie::get('cityname'); else: ?>杭州<?php endif; ?></i><img src="/static/home/imgs/triangle.png" alt=""></p>
                    <form id="bname" style="display: initial" action="<?php echo url('home/search/index',['type'=>0]); ?>" method="post">
                    <input type="text" name="name" placeholder="请输入楼盘名称、地域" autocomplete="off" class="home_search">
                    <ul class="sou_res">
                          
                    </ul>
                    <span id="find"><img src="/static/home/imgs/icon-8.png">我要找房</span>
                    </form>
                    <span id="map"><img src="/static/home/imgs/pcadd.png" alt="">地图找房</span>
                </div>
            </div>
        </div>
    <div class="content visible-lg-block">
        <div class="box">
            <div class="left col-lg-8">
                <h5>项目资讯</h5>
                 <div id="cox">
                     <?php foreach($ps as $v): ?>
                     <div class="row">
                         <a href="<?php echo url('home/news/pro',['id'=>$v['id']]); ?>">
                         <div class="col-lg-4  pic-dong">
                             <img src="<?php echo $v['img']; ?>" alt="">
                         </div>
                         <div class="col-lg-8 xiang">
                             <h6><?php echo $v['title']; ?></h6>
                             <p><?php echo $v['content']; ?>
                                </p>
                            
                         </div>
                         <p class="type">
                             <span>项目资讯</span>
                             <span><?php echo $v['create_time']; ?></span>
                         </p>
                        </a>
                     </div>
                     <?php endforeach; ?>
                     
                 </div>
                 <div class="pages">
                        <span id="back"><<</span>
                        <ul class="page">
                            <?php $__FOR_START_540291717__=0;$__FOR_END_540291717__=$page;for($i=$__FOR_START_540291717__;$i < $__FOR_END_540291717__;$i+=1){ if($i<7): ?>
                            <li <?php if($i==0): ?> class="active" <?php endif; ?> data-v="<?php echo $i; ?>"><?php echo $i+1; ?></li>
                            <?php endif; } ?>
                        </ul>
                        <span id="go">>></span>
                    </div>
            </div>
            <div class="col-lg-4 right">
                <h6>推荐楼盘</h6>
                <div class="hot-tui">
                        <ul>
                            <?php foreach($tdengs as $v): ?>
                            <a href="<?php echo url('home/content/content',['id'=>$v['id']]); ?>">
                            <li>
                                
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
                               <p>最新动态：<?php echo $v['dong']; ?></p>
                            
                            </li>
                        </a>
                            <?php endforeach; ?>
                            
                        </ul>
        
        
                    </div>

                <h6>新闻资讯</h6>
                <ul>
                    <?php foreach($ns as $k=>$v): ?>
                    <li><span <?php if(($k+1)<4): ?>class="new"<?php endif; ?>><?php echo $k+1; ?></span><a href="<?php echo url('home/news/article',['id'=>$v['id']]); ?>"><?php echo $v['title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
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
        <div class="kaifa">
            <img src="/static/home/imgs/waiting_lv.png" alt="">
        </div>
        <div class="kaifazi">
            <img src="/static/home/imgs/waiting_lv.png" alt="">
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












    <!-- PC -->


    <!-- 移动 -->
    <div class="container-fluid m">
        <div class="m-nav visible-xs-block .visible-sm-block navbar navbar-default navbar-fixed-top">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <span class="m-p-news m-active">项目资讯<i></i></span>
            <span class="m-n-news">新闻资讯<i></i></span>
        </div>
        <div class="m-list visible-xs-block .visible-sm-block">
            <div id="m-p">
                    <?php foreach($ps as $v): ?>
                    <a href="<?php echo url('home/news/pro',['id'=>$v['id']]); ?>">
                    <div class="row m-l">
                        <div class="col-xs-8 m-title">
                            <h5><?php echo $v['title']; ?></h5>
                            <div>
                                <span>项目资讯</span>
                                <span><?php echo $v['create_time']; ?></span>
                            </div>
                        </div>
                        <img class="col-xs-4" src="<?php echo $v['img']; ?>" alt=""> 
                        <!-- <img class="col-xs-4" src="http://localhost:8080/img/three.e5c4764d.png" alt=""> -->
                    </div>
                    </a>
                    <?php endforeach; ?>
                    
                      
            </div>
            <div id="m-n">
                    <?php foreach($ns as $v): ?>
                    <a href="<?php echo url('home/news/pro',['id'=>$v['id']]); ?>">
                    <div class="row m-l">
                        <div class="col-xs-8 m-title">
                            <h5><?php echo $v['title']; ?></h5>
                            <div>
                                <span>新闻资讯</span>
                                <span><?php echo $v['create_time']; ?></span>
                            </div>
                        </div>
                        <img class="col-xs-4" src="<?php echo $v['img']; ?>" alt=""> 
                        <!-- <img class="col-xs-4" src="http://localhost:8080/img/three.e5c4764d.png" alt=""> -->
                    </div>
                    </a>
                    <?php endforeach; ?>
            </div>
        
         
                 
        </div>
         <!-- 留言悬浮框 -->
         <div class="m-xuan visible-xs-block .visible-sm-block">
                <img src="/static/home/imgs/new_liu.png" alt="">
        </div>
    </div>

<script src="/static/home/js/com_liu_you.js"></script>
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
                $('.show-liu').hide();
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


            // 留言页跳转
            $('.m-xuan').on('click', function () {
                window.location.href = "<?php echo url('home/index/lius'); ?>";
            })


            function pa(str){
                $.post(
                    "/home/news/project",
                    {suggest:str},
                    function(data){
                        var html='';
                        if(data.length>0){
                            $.each(data,function(i,v){
                                html+=`
                                <div class="row">
                         <a href="/pro/${v.id}">
                         <div class="col-lg-4">
                             <img src="${v.img}" alt="">
                         </div>
                         <div class="col-lg-8 xiang">
                             <h6>${v.title}</h6>
                             <p>${v.content}
                                </p>
                            
                         </div>
                         <p class="type">
                             <span>项目资讯</span>
                             <span>${v.create_time}</span>
                         </p>
                        </a>
                     </div>
                                `;
                            });
                            $('#cox').html(html);
                        }else{
                            $('#cox').html(html);
                        }
                    },
                    'json'
                );
            }
            $('#find').on('click',function(){
                $('#bname').submit();
            })
            $('#map').on('click',function(){
                window.location.href="<?php echo url('home/index/pmap'); ?>";
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
        })




        $(document).ready(function(){
            $('.m-nav span').on('click',function(){
                $(this).siblings('span').removeClass('m-active');
                $(this).addClass('m-active');
            })
             $('.m-p-news').on('click',function(){
                $('#m-p').show();
                $('#m-n').hide();
                $('#m-t').hide();
                $('#m-y').hide();
                $('#m-h').hide();
            })            
            $('.m').on('scroll',function(){
                var h=$(this).height();
                console.log(h);
            })
            function send(path,str,name,type,to){
                $.post(
                    "/home/news/"+path,
                    {suggest:str},
                    function(data){
                        var html=$(name).html();
                        if(data.length>0){
                            $.each(data,function(i,v){
                                html+=`
                                <a href="/${to}/${v.id}">
                                <div class="row m-l">
                        <div class="col-xs-8 m-title">
                            <h5>${v.title}</h5>
                            <div>
                                <span>${type}</span>
                                <span>${v.create_time}</span>
                            </div>
                        </div>
                        <img class="col-xs-4" src="${v.img}" alt="">
                    </div>
                    </a>
                                `;
                            });
                            $(name).html(html);
                        }else{
                            $(name).html(html);
                        }
                    },
                    'json'
                );
            }
            function pull(path,str,name,type,to){
                var html=$(name).html();
               
                if(html.length==0){
                    $.post(
                    "/home/news/"+path,
                    {suggest:str},
                    function(data){
                        var html=$(name).html();
                        if(data.length>0){
                            $.each(data,function(i,v){
                                html+=`
                                <a href="/${to}/${v.id}">
                                <div class="row m-l">
                        <div class="col-xs-8 m-title">
                            <h5>${v.title}</h5>
                            <div>
                                <span>${type}</span>
                                <span>${v.create_time}</span>
                            </div>
                        </div>
                        <img class="col-xs-4" src="${v.img}" alt="">
                    </div>
                    </a>
                                `;
                            });
                            $(name).html(html);
                        }else{
                            $(name).html(html);
                        }
                    },
                    'json'
                );
                }else{
                    return;
                }
                
            }
            $('.m-n-news').on('click',function(){
                $('#m-p').hide();
                $('#m-n').show();
                $('#m-t').hide();
                $('#m-y').hide();
                $('#m-h').hide();
                pull('xin',0,'#m-n','楼盘资讯','article');
            })
	   $('.m-t-news').on('click',function(){
                $('#m-p').hide();
                $('#m-n').hide();
                $('#m-t').show();
                $('#m-y').hide();
                $('#m-h').hide();
            })
            $('.m-y-news').on('click',function(){
                $('#m-p').hide();
                $('#m-n').hide();
                $('#m-t').hide();
                $('#m-y').show();
                $('#m-h').hide();
            })
            $('.m-h-news').on('click',function(){
                $('#m-p').hide();
                $('#m-n').hide();
                $('#m-t').hide();
                $('#m-y').hide();
                $('#m-h').show();
            })
            var p=1;
            var n=1;
            $(window).scroll(function(){
                var scrollTop = $(this).scrollTop();               
                var scrollHeight = $(document).height();                   
                var windowHeight = $(this).height();                   
                if(scrollTop + windowHeight >= scrollHeight){       
                    if($('#m-p').css('display')=='block'){
                        send('project',p,'#m-p','项目资讯','pro');
                        p=p+1;
                    }else if($('#m-n').css('display')=='block'){
                        send('xin',n,'#m-n','楼盘资讯','article');
                        n=n+1;
                    }
                    
                }            });



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


        })
    </script>
</body>
</html>