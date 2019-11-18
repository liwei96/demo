<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"G:\jiayuan\tp2\public/../application/home\view\user\login.html";i:1574065670;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>登录</title>
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
                    width:100%;
                }

                /* m-post */
                .m-post{
                    width:89.3%;
                    height:335px;
                    position: relative;
                    background:#fff;
                    box-shadow:0px 5px 20px 0px rgba(223,223,223,0.91);
                    border-radius:15px;
                    margin-left:5.3%;
                    top:-100px;
                    padding-top:45px;
                }
                .m-post .user,   .m-post .mima{
                       width:85%;
                       height:44px;
                       background:#F5F5F5;
                       display:flex;
                       margin-left:7.4%;
                        border-radius:5px;
                      
                }
                .m-post .user input, .m-post .mima input{
                      width:100%;
                      height:44px;
                      background:#F5F5F5;
                      border:0;
                      font-size:15px;
                        font-weight:500;
                        color:rgba(179,179,179,1);
                        line-height:44px;
                        border-radius:5px;
                }
                .m-post .user img,.m-post .mima img{
                         height:20px;
                         width:7%;
                         margin-top:13px;
                         margin-left:12px;
                         margin-right:12px;
                }
                .m-post .user{
                      margin-bottom:20px;
                      position:relative;
                }
                .m-post .user .m-get{
                      position:absolute;
                      right:0;
                    font-size:15px;
                    font-weight:500;
                    color:rgba(58,200,105,1);
                    line-height: 44px;
                    margin-right:3.6%;
                }


             
                .m-post .m-phone{
                    /* color:#4D4D4D;
                    font-size: 18px;                     */
                }
               
                .m-post .m-yan::-webkit-input-placeholder {
                    color: #999999;
                    font-size: 15px;
                }
                .m-post  .m-btn{
                    width:85%;
                    margin-left:7.4%;
                    height:44px;
                    background-color: #3AC869;
                    border-radius: 22px;
                    font-size: 16px;
                    text-align: center;
                    line-height: 45px;
                    color:#fff;
                    border:0px;
                    margin-top:63px;
                }
                .bg_img_box {
                       width:100%;
                       height:auto;
                       position:relative;
                }
                .login_logo{
                    position: absolute;
                    top:50%;
                    left:50%;
                    width:37.67%;
                    height:74px;
                    transform: translate(-50%,-98%);
                }


               
        </style>
</head>
<body>
    <!-- PC -->
    <!-- PC -->


    <!-- yidog -->
    <div class="container-fluid m">
        <div class="m-title visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>手机快捷登录</h3>
        </div>
        <div class="bg_img_box">
                <img class="m-bgc visible-xs-block .visible-sm-block" src="/static/home/imgs/login_bg.png" alt="">
                <img src="/static/home/imgs/login_logo.png" alt="" class="login_logo">
        </div>
        


        
        <div class="m-post visible-xs-block .visible-sm-block">
             <div class="user" > <img src="/static/home/imgs/login_user.png" alt=""><input type="text" class="m-phone" value="" placeholder="请输入手机号"> <span class="m-get">获取验证码</span></div>
           
            <div class="mima" > <img src="/static/home/imgs/login_mi.png" alt=""><input type="text" class="m-yan" placeholder="请输入验证码"></div>
            <button class="m-btn visible-xs-block .visible-sm-block" data-v="<?php echo $type; ?>">登录</button>
        </div>

       
    </div>


    <script>
        $(document).ready(function(){
            $('.m-get').on('click',function(){
                var phone=$('.m-phone').val();
                var pattern_phone = /^1[3-9][0-9]{9}$/;
				if (phone == '') {
					$('.m-phone').next().html('手机号码不能为空');
					return;
				} else if (!pattern_phone.test(phone)) {
					$('.m-phone').next().html('手机号码不合法');
					return;
				} else {
					$('.m-phone').next().html('');
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
                var phone=$('.m-phone').val();
                var code=$('.m-yan').val();
                var type=$(this).attr('data-v');
                var data={'phone':phone,'code':code,'type':type};
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
        })
    </script>
</body>
</html>