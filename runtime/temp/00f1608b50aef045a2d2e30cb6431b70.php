<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"G:\jiayuan\tp2\public/../application/home\view\index\read.html";i:1573107493;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>楼盘详情</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <link rel="stylesheet" href="/static/home/css/c-xiang.css">
        <style>
            .m{
                padding:0;
            }
            .m-title{
                position: relative;
                width:100%;
                height:44px;
                text-align: center;
                line-height: 44px;
                border-bottom: 0.5px solid #F2F2F2;
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

            .m-content{
                margin-top:15px;
            }
            .m-content .left{
                width:50%;
                float:left;
            }
            .m-content .left img{
                width:85%;
                margin-left: 8%;
                border-radius: 2px;
            }
            .m-content .right{
                width:50%;
                float:right;
                padding-left:2%;
            }
            .m-content .right .ct{
                color:#999999;
                font-size: 12px;
                margin-bottom: 2px;
            }
            .m-content .right .cx{
                color:#323232;
                font-size: 14px;
                margin-bottom:4px;
            }
            .m-content .right .nei{
                color:#323232;
                font-size: 15px;
            }
            
            .m-content .nei{
                margin-top:10px;
                float:left;
                padding:0 4% 0 4%;
                color:#999999;
                font-size: 16px;
                line-height: 28px;
                text-indent: 8%;
                margin-bottom: 70px;
            }

/**底部电话咨询  预约看房*/

 .m-botnav {
    width: 100%;
    height: 60px;
    position: fixed;
    bottom: 0;
    background-color: #fff;
    z-index: 200;
    box-shadow: 0px 0px 9px 1px rgba(6, 0, 1, 0.04);
    padding-left:9%;
}

.m-botnav p {
    display: inline-block;
    margin-top: 11px;
    margin-left: 9.333333%;
    color: #808080;
    font-size: 10px;
    margin-right: 1.86666667%;
}

.m-botnav p img {
    width: 46%;
    display: block;
}

.m-botnav button {
    display: inline-block;
    position: absolute;
    top: 10px;
    width: 33.06667%;
    height: 40px;
    font-size: 15px;
    border-radius: 4px;
    border: 0px;
}

.m-botnav .m-pho {
    background-color: #58BBEC;
    color: #fff;
    width:37.3%;
}

.m-botnav .m-y {
    background-color: #46CF76;
    color: #fff;
    left: 54%;
    width:37.3%;
}


.weiter{
        display: none;
        width:75%;
        position: fixed;
        left:12.667%;
        top:180px;
        border-radius: 12px;
        z-index: 1001;
    }
    .weiter .t-top{
        width:100%;
        height:100px;
        background-color: #2DD264;
        border-radius: 12px 12px 0 0;
        padding-top:15px;
    }
    .weiter .t-top h6{
        color:#fff;
        font-size: 18px;
        text-align: center;
        margin-bottom:12px;
    }
    .weiter .t-top p{
        color:#fff;
        font-size: 13px;
        margin:0 18px;
        text-indent: 7%;
    }
    .weiter .t-top #w-esc{
        position: absolute;
        right:5%;
        top:5%;
    }

    .weiter .t-bottom{
        width:100%;
        height:227px;
        background-color: #fff;
        border-radius: 0 0 12px 12px;
    }
    .weiter .t-bottom .t-b-first{
        height:100%;
        display: block;
    }
    .weiter .t-bottom .t-b-first input{
        width:85%;
        height:40px;
        border:0.5px solid rgba(230,230,230,1);
        margin-top:40px;
        margin-bottom:25px;
        margin-left:7.52%;
        padding-left:5%;
    }
    .weiter .t-bottom .t-b-first button{
        width:85%;
        height:40px;
        border:0;
        background-color: #F0F5F2;
        color:#3AC869;
        font-size: 16px;
        text-align: center;
        line-height: 40px;
        margin-left:7.5%;
    }
    .weiter .t-bottom .t-b-first p{
        color:#999999;
        font-size: 12px;
        width:85%;
        margin-left:7.5%;
        margin-top:20px;
        line-height: 18px;
    }
    .weiter .t-bottom .t-b-second{
        height:100%;
        display: none;
        padding-top:20px;
    }
    .weiter .t-bottom .t-b-second p{
        color:#808080;
        font-size: 12px;
        width:85%;
        margin-left:7.5%;
        margin-bottom:20px;
    }
    .weiter .t-bottom .t-b-second input{
        width:85%;
        height:40px;
        border-radius: 2px;
        border:0.5px solid rgba(238,238,238,1);
        margin-left:7.5%;
        margin-bottom:20px;
    }
    .weiter .t-bottom .t-b-second .port1{
        width:85%;
        height:40px;
        margin-left:7.5%;
        background-color: #F0F5F2;   
        color:#3AC869;
        font-size: 16px;
        text-align: center;
        line-height: 40px;
        border:0;
        margin-bottom:20px;
    }
    .weiter .t-bottom .t-b-second .t-b-scode{
        border:0;
        color:#2DD264;
        font-size: 13px;
        position: absolute;
        right:10%;
        top:52%;
        background-color: #fff;
    }

    .m-chang {
    position: fixed;
    top: 0;
    width: 100%;
    height: 1000px;
    background-color: rgba(0, 0, 0, 0.4);
    z-index: 1000;
    display:none;
}







.m-o-succ {
    display: none;
    position: fixed;
    top: 190px;
    left: 50%;
    margin-left: -37.33333%;
    width: 74.666667%;
    background-color: #fff;
    z-index: 10001;
    padding: 0 5%;
    border-radius: 12px;
    height: 325px;
    text-align: center;
}

.m-o-succ .o-esc {
    position: absolute;
    width: 8.6%;
    top: 3.1%;
    right: 3.5%;
}

.m-o-succ .o-success {
    width: 41%;
    margin-top: 45px;
    margin-bottom: 33px;
}

.m-o-succ p {
    color: #666666;
    font-size: 16px;
    line-height: 23px;
    font-weight: 500;
    margin-bottom: 32px;
}

.m-o-succ button {
    width: 100%;
    height: 40px;
    background-color: #3AC869;
    color: #fff;
    font-size: 16px;
    text-align: center;
    line-height: 40px;
    border: 0px;
    border-radius: 4px;
}





        </style>
</head>
<body>
    <!-- PC -->
    <!-- PC -->

    <!-- m -->
    <div class="container-fluid m">
        <div class="m-title visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>成交案例</h3>
        </div>
        <div class="m-content">
            <div class="left">
                <img src="<?php echo $data['img']; ?>" alt="">
            </div>
            <div class="right">
                <p class="ct">成交用户</p>
                <p class="cx"><?php echo $data['name']; ?></p>
                <p class="ct">成交时间</p>
                <p class="cx"><?php echo $data['time']; ?></p>
                <p class="ct">成交楼盘</p>
                <p class="cv"><?php echo $data['lou']; ?></p>
            </div>
            <p class="nei">
                <?php echo $data['content']; ?>
            </p>
        </div>


         <!-- 底部电话咨询  ，预约看房-->
        <div class="m-botnav visible-xs-block .visible-sm-block">
                <a data-agl-cvt="5" href="tel:400-718-6686"><button class="m-pho">电话咨询</button></a>
                <button data-agl-cvt="5" class="m-y p1" data-v="预约看房">预约看房</button>
      </div>

      <div class="weiter ts">
            <div class="t-top">
                <h6>变价通知</h6>
                <p>一键订阅最新变价通知，楼盘变价我们第一时间 通知您，帮您找准买房好时机</p>
                <img id="w-esc" src="/static/home/imgs/xx.png" alt="">
            </div>
            <div class="t-bottom">
                <div class="t-b-first">
                    <input class="l-p" type="text" placeholder="请输入手机号">
                    <button class="t-b-btn t-b-btn2">立即订阅</button>
                    <p>
                        家园新房一对一专业服务，家园承诺保护您的隐私安全
                    </p>
                </div>
                <div class="t-b-second">
                    <p>验证码已发送到<span>187****4376</span>，请注意查看</p>
                    <input type="text" placeholder="请输入验证码">
                    <button class="port1">确定</button>
                    <input type="hidden" value="<?php echo $data['lou']; ?>">
                    <input type="hidden" value="">
                    <button class="t-b-scode">获取验证码</button>
                    <p class="tishi">
                        家园新房一对一专业服务，家园承诺保护您的隐私安全
                    </p>
                </div>
            </div>
        </div>

         <div class="m-o-succ">
                <img class="o-esc" src="/static/home/imgs/m-esc.png" alt="">
                <img src="/static/home/imgs/m-success.png" alt="" class="o-success">
                <p id="o_p">已成功订阅最新动态，我们会第一时间通过短信通知您！</p>
                <button id="o_btn">确定</button>
            </div>

        <div class="m-chang"></div>

    </div>
    
  



    <script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
    <script>
          function getBrowserInfo(){
                var ua = navigator.userAgent.toLocaleLowerCase();
                var browserType='谷歌';
                if (ua.match(/msie/) != null || ua.match(/trident/) != null) {
                    browserType = "IE";
                    browserVersion = ua.match(/msie ([\d.]+)/) != null ? ua.match(/msie ([\d.]+)/)[1] : ua.match(/rv:([\d.]+)/)[1];
                } else if (ua.match(/firefox/) != null) {
                    browserType = "火狐";
                }else if (ua.match(/ubrowser/) != null) {
                    browserType = "UC";
                }else if (ua.match(/opera/) != null) {
                    browserType = "欧朋";
                } else if (ua.match(/bidubrowser/) != null) {
                    browserType = "百度";
                }else if (ua.match(/metasr/) != null) {
                    browserType = "搜狗";
                }else if (ua.match(/tencenttraveler/) != null || ua.match(/qqbrowse/) != null) {
                    browserType = "QQ";
                }else if (ua.match(/maxthon/) != null) {
                    browserType = "遨游";
                }else if (ua.match(/safari/) != null) {
                    browserType = "Safari";
                }
                return browserType;
        }
        $(document).ready(function(){
          



            $('.p1').on('click',function(){
              
                window.type=$(this).attr('data-v');
                console.log(type);
                if(type=="变价通知"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键订阅最新变价通知，不再错过变价信息哦！');
                }else if(type=="开盘通知"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键订阅最新开盘通知,不再错过开盘信息哦！');
                }else if(type=="预约看房"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键预约看房免费小车上门接送，可带家人一起参观多个热门楼盘 ');
                }else if(type=="我要优惠"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键领取，享受超额优惠!');
                }else if(type=="咨询服务"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('立即报名，专业人员为你解惑!');
                }else if(type=="最新动态"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键订阅楼盘动态,最新动态抢先知！');
                }else if(type=="楼盘周边信息"){
                    $('.weiter .t-top h6').html('获取楼盘周边信息');
                    $('.weiter .t-top p').html('立即向售楼人员咨询楼盘周边信息');
                }else if(type=="最新预售许可证"){
                    $('.weiter .t-top h6').html('了解最新预售许可证');
                    $('.weiter .t-top p').html('向售楼人员咨询最新许可证');
                }else if(type=="最新成交价"){
                    $('.weiter .t-top h6').html('获取最新成交价');
                    $('.weiter .t-top p').html('向售楼人员咨询最新成交价');
                }else if(type=="详细楼盘户型"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键咨询，了解楼盘详细户型！');
                }else if(type=="领取免费资料"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键订阅楼盘最新详情，楼盘详情早知道！');
                }else if(type=="免费领取地图"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键免费领取地图，楼盘随心看！');
                }else if(type=="了解详细户型"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键领取高清户型图，真实户型早知道！');
                }else if(type=="获取高清配套图"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键领取高清图，楼盘图片清晰看！');
                }else if(type=="获取详细分析资料"){
                    $('.weiter .t-top h6').html(type);
		            $('.weiter .t-top p').html('一键获取楼盘对比分析资料，好楼盘早知道！');
                }
                $('.weiter').show();
                $('.m-chang').show();
                
            })

        })

        $('#w-esc').on('click',function(){
                $('.weiter').hide();
                $('.m-chang').hide();
            })


            $('.port1').on('click',function(){
                var building_name=$(this).next().val();
                var ma=$(this).prev().val();
                var tel=$(this).next().next().val();
                var name='要自己问了';
                var pattern_tel = /^1[3-9][0-9]{9}$/;
                var type=$(this).parent().parent().prev().find('h6').html();
				if (tel == '') {
					$(this).prev().prev().prev().val('')
                    $(this).prev().prev().prev().attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_tel.test(tel)) {
					$(this).prev().prev().prev().val('')
					$(this).prev().prev().prev().attr('placeholder','手机号码不合法');
					return;
				} 
		        var brower=getBrowserInfo();
		        var qu=qudao();
                var data={
                    'phone':tel,
                    'type':type,
                    'name':name,
                    'building_name':building_name,
                    'brower':brower,
                    'qu':qu,
                    'ma':ma
                }
                // console.log(data);return
                var that=$(this)
                $.post(
                    "<?php echo url('home/content/port1'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            that.parent().parent().parent().hide();
                            $('.t-b-first').show();
                            $('.t-b-second').hide();
                                $('#o_p').text('已成功订购服务，我们会第一时间通过电话联系您');
                                $('.m-o-succ').show();
                        }
                    },
                    'json'
                )
            })
              // 接口验证码
              $('.t-b-btn2').on('click',function(){
                var phone=$(this).prev().val();
               
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
						$('.t-b-scode').html('重新发送' + time + 's');
                        $('.t-b-scode').attr('disabled', true);
					} else {
						clearInterval(interval);
						$('.t-b-scode').html('获取验证码');
						$('.t-b-scode').attr('disabled', false);
					}
				};
				fn();
				var interval = setInterval(fn, 1000);
                var data={'phone':phone};
                var tel=phone.substr(0,3)+'****'+phone.substr(7,11);
                var that=$(this);
                var projectName=$('.cv').html();
               var  proType= $('.weiter .t-top h6').html();
               console.log(projectName,proType);
                $.post(
                    "<?php echo url('home/user/login'); ?>",
                    {
                         phone:phone,
                         building_name:projectName,
                         type:proType
                    },
                    function(res){
                        if(res.code==100){
                            that.parent().hide();
                            that.parent().next().show();
                            $('.t-b-first').hide();
                            $('.t-b-second').show();
                            that.parent().next().children('input').eq(2).val(phone);
                            // console.log(l);
                            that.parent().next().find('p').find('span').html(tel);
                            // $('.t-b-second p span').html(tel);
                        }else{
                            alert(res.msg);
                        }
                    },
                    'json'
                ) 
            })

            $('.o-esc').on('click',function(){
                $(this).parent().hide();
                $('.m-chang').hide();
            })

    </script>
</body>
</html>