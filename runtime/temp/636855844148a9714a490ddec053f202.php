<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\phpstudy_pro\WWW\tp2\public/../application/home\view\user\ke.html";i:1572854964;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>关注客服</title>
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
		            font-family:"Microsoft YaHei";
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
                
                p{
                    color:#1CB64F;
                    font-size: 14px;
                    text-align: center;
                    margin-top:38px;
                    margin-bottom: 26px;
                }
                .two{
                    width:44%;
                    margin-left:28%;
                    margin-bottom: 26px;
                }

                button{
                    width:53.33%;
                    height:40px;
                    background-color: #2DC45A;
                    border-radius: 20px;
                    text-align: center;
                    line-height: 40px;
                    color:#fff;
                    border:0;
                    box-shadow:0px 4px 4px 0px rgba(28,182,79,0.1);
                    margin-left:23.33%;
                    margin-bottom:40px;
                }

                .line{
                    width:91.733%;
                    margin-left:4%;
                    border-bottom: 0.5px dashed #B5B5B5;
                }
        </style>
</head>
<body>
    

    <!-- m -->
    <div class="container-fluid m">
        <div class="m-title visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>关注客服</h3>
        </div>
       <p>关注家园新房公众号了解详细楼盘</p>
       <img src="/static/home/imgs/g-icon.png" alt="" class="two">
       <button>保存二维码图片</button>
       <div class="line"></div>
    </div>
    
</body>
</html>