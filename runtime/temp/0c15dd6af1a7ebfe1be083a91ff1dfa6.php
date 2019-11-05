<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpstudy_pro\WWW\tp2\public/../application/home\view\user\yue.html";i:1572849548;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>预约看房</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link rel="stylesheet" href="/static/home/css/style.css">
            <link rel="stylesheet" href="/static/home/css/index.css?rev=ac6ed5b7b7b35822066a7c1ff4367280">
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
                .m-img{
                    width:100%;
                }
                /* m-content */
                .m-content{
                    width:100%;
                    padding-top:24px;
                }
                .m-content .m-ti{
                    color:#333333;
                    font-size: 16px;
                    margin-left:18.66667%;
                    margin-bottom: 37px;
                }
                .m-content .m-form{
                    width:100%;
                    padding:0 4%;
                    position: relative;
                }
                .m-content .m-form .m-t{
                    font-size: 13px;
                    color:#666666;
                    margin-bottom: 2px;
                }
                .m-content .m-form input{
                    margin-right:5.33333333%;
                    margin-left:0;
                }
                .m-content .m-form .m-in{
                    margin-right:24%;
                }
                .m-content .m-form span{
                    color:#323232;
                    font-size: 16px;
                    margin-right:34px;
                    position: absolute;
                    top:11%;
                }
                .m-content .m-form .m-sp1{
                    left:14%;
                }
                
                .m-content .m-form .m-t1{
                    margin-top:25px;
                    margin-bottom:20px;
                }
                .m-content .m-form .kinerDatePickerInput{
                    width:100%;
                    height: 40px;
                    border-radius: 4px;
                    background:rgba(245,255,248,1);
                    border:1px solid rgba(130,233,164,1);
                    color:#2DC45A;
                    font-size: 15px;
                    line-height: 40px;
                    padding-left:5%;
                }
                .m-content .m-form .m-go{
                    position: absolute;
                    top: 50%;
                    right: 8%;
                    width: 5.5%;
                }
                .m-content .m-form button{
                    width: 100%;
                    height:40px;
                    background-color: #F2F2F2;
                    color:#2DC45A;
                    font-size: 15px;
                    margin-top:75px;
                    border:0px;
                    border-radius: 4px;
                }
                .kinerDatePicker-container .kdp-box .kdp-content-container:after{
                    border-top: 0.015625rem solid #3ac869;
                    border-bottom: 0.015625rem solid #3ac869;
                    background-color: rgba(197, 240, 211, 0.2);
                }
                .kinerDatePicker-container .kdp-box .kdp-header-container .kdp-ok-btn{
                    color:#3ac869;
                }
                .kinerDatePicker-container .kdp-box .kdp-content-container .year-container .year-swiper-container .swiper-slide.swiper-slide-active, .kinerDatePicker-container .kdp-box .kdp-content-container .year-container .month-swiper-container .swiper-slide.swiper-slide-active, .kinerDatePicker-container .kdp-box .kdp-content-container .year-container .date-swiper-container .swiper-slide.swiper-slide-active, .kinerDatePicker-container .kdp-box .kdp-content-container .month-container .year-swiper-container .swiper-slide.swiper-slide-active, .kinerDatePicker-container .kdp-box .kdp-content-container .month-container .month-swiper-container .swiper-slide.swiper-slide-active, .kinerDatePicker-container .kdp-box .kdp-content-container .month-container .date-swiper-container .swiper-slide.swiper-slide-active, .kinerDatePicker-container .kdp-box .kdp-content-container .date-container .year-swiper-container .swiper-slide.swiper-slide-active, .kinerDatePicker-container .kdp-box .kdp-content-container .date-container .month-swiper-container .swiper-slide.swiper-slide-active, .kinerDatePicker-container .kdp-box .kdp-content-container .date-container .date-swiper-container .swiper-slide.swiper-slide-active{
                    color:#3ac869;
                }
        </style>
        <script src="/static/home/js/libs/jquery.min.js"></script>
        <script src="/static/home/js/libs/flexible.debug.js"></script>
        <script src="/static/home/js/libs/flexible_css.debug.js"></script>
        <script src="/static/home/js/libs/mobileFix.js"></script>
        <script src="/static/home/js/libs/swiper.min.js"></script>
        <script src="/static/home/js/libs/kinerDatePicker.js"></script>
</head>
<body>
    <!-- PC -->
    <!-- PC -->


    <!-- m -->
    <div class="container-fluid m">
        <div class="m-title visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>预约看房</h3>
        </div>
        <img class="m-img visible-xs-block .visible-sm-block" src="/static/home/imgs/yue.jpg" alt="">
        <div class="m-content visible-xs-block .visible-sm-block">
            <p class="m-ti">已有281人成功预约免费专车看房</p>
            <div class="m-form">
                    <p class="m-t">您的称呼:</p>
                    <input class="m-in" type="radio" name="group1" checked value="先生"><span class="m-sp1">先生</span>
                    <input type="radio" name="group1" value="女士"><span class="m-sp2">女士</span>
                    <p class="m-t m-t1">预约看房时间:</p>
                    <div class="kinerDatePickerInput" id="kinerDatePickerInput1" title="请选择您要预约的看房时间" startYear="2019" default-val="2019-5-5">请选择您要预约的看房时间</div>
                    <img class="m-go" src="/static/home/imgs/ygo.png" alt="">
                    <button id="m_btn">确定</button>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#kinerDatePickerInput1').kinerDatePicker({
                clickMaskHide: true,
            });
            $('#m_btn').on('click',function(){
                var data={
                    'sex':$('input:checked').val(),
                    'time':$('#kinerDatePickerInput1').text(),
                    'u_id':<?php echo \think\Session::get('user.id'); ?>
                }
                console.log(data);
                $.post(
                    "<?php echo url('home/user/yue'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            window.location.href="<?php echo url('home/user/index'); ?>";
                        }else{

                        }
                    },
                    'json'
                );
            })
      
      
        })
    </script>
</body>
</html>