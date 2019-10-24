<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpstudy_pro\WWW\tp2\public/../application/home\view\user\login.html";i:1571905070;}*/ ?>
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
                    width:100%;
                    position: relative;
                    padding:0 10%;
                    margin-top:-20%;
                }
                .m-post input{
                    width:100%;
                    border:1px solid #fff;
                    border-bottom: 1px solid #F2F2F2;
                    margin-bottom: 30px;
                    padding-bottom:10px;
                    background:rbga(255,255,255,0.01);
                }
                .m-post .m-phone{
                    color:#4D4D4D;
                    font-size: 18px;                    
                }
                .m-post .m-get{
                    display: block;
                    position: absolute;
                    border:1px solid #3AC869;
                    background-color: #fff;
                    width:21.333333%;
                    height:26px;
                    border-radius: 4px;
                    right:10%;
                    top:1%;
                    font-size: 12px;
                    color:#3AC869;
                    line-height: 26px;
                    text-align: center;
                }
                .m-post .m-yan::-webkit-input-placeholder {
                    color: #999999;
                    font-size: 15px;
                }
                .m-btn{
                    width:80%;
                    height:45px;
                    margin-left:10%;
                    background-color: #3AC869;
                    border-radius: 4px;
                    font-size: 16px;
                    text-align: center;
                    line-height: 45px;
                    color:#fff;
                    border:0px;
                    margin-top:66px;
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
        <img class="m-bgc visible-xs-block .visible-sm-block" src="/static/home/imgs/bgc.png" alt="">
        <div class="m-post visible-xs-block .visible-sm-block">
            <input type="text" class="m-phone" value="" placeholder="请输入手机号"><p></p>
            <button class="m-get">获取验证码</button>
            <input type="text" class="m-yan" placeholder="请输入验证码">
        </div>
        <button class="m-btn visible-xs-block .visible-sm-block" data-v="<?php echo $type; ?>">确认登录</button>
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