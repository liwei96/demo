<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"G:\jiayuan\tp2\public/../application/home\view\content\hus.html";i:1574308659;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>更多评论</title>
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
                    margin-left:16.66667%;
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
                /* m-hu */
.m-hu {
    /* padding-bottom: 20px; */
}

.m-hu h3 {
    color: #404040;
    font-size: 16px;
    margin: 25px 0 25px 4%;
    font-weight: bold;
}

.m-hu h3 span{
    color: #898989;
    font-size: 14px;
    float: right;
    margin-right: 3%;
    font-weight: normal;
}
.m-hu h3 span img{
    width:17%;
    margin-left:7%;
}
.m-hu .h-c{
    height: 152px;
    border-bottom: 0.5px solid #F2F2F2;
    padding: 12px 0;
    margin: 0 4%;
}
.m-hu .h-c .h-c-i{
    margin-bottom: 18px;
    padding-left:0;
}
.m-hu .h-c .h-c-i img{
    width:100%;
}
.m-hu .h-c .h-c-c{
    padding-left:0;
    margin-bottom: 20px;
    padding-right:0;
}
.m-hu .h-c .h-c-c .h-t{
    margin-bottom: 20px;
    margin-top:8px;
}
.m-hu .h-c .h-c-c .h-t h4{
    font-size: 15px;
    color:#333333;
    display: inline;
}
.m-hu .h-c .h-c-c .h-t .h-t-z{
    font-size: 12px;
    color:#fff;
    padding:0.5% 3%;
    background-color: #2DC45A;
    margin-left:2%;
}
.m-hu .h-c .h-c-c .h-t .h-t-m{
    font-size: 12px;
    color:#FF7F7F;
    float: right;
    margin-right:4%;
}
.m-hu .h-c .h-c-c .h-t .h-t-m i{
    font-size: 18px;
    font-style:normal;
}
.m-hu .h-c .h-c-c .sp{
    font-size: 12px;
    color:#808080;
    margin-bottom: 12px;
    height: 15px;
    overflow: hidden;
}
.m-hu .h-c .h-c-c .sp-f{
    overflow: hidden;
    text-overflow:ellipsis;
    white-space: nowrap;
}

    /* 页面底部悬浮 */
        /* m-botnav */
        .m-botnav {
            width: 100%;
            height: 60px;
            position: fixed;
            bottom: 0;
            background-color: #fff;
            z-index: 200;
            box-shadow: 0px 0px 9px 1px rgba(6, 0, 1, 0.04);
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
        }

        .m-botnav .m-y {
            background-color: #46CF76;
            color: #fff;
            left: 62%;
        }
        
        /* 弹框 */
        .weiter {
            position: fixed;
            width: 75%;
            top: 190px;
            left: 12.667%;
            z-index: 1001;
            display: none;
        }

        .weiter .t-top {
            width: 100%;
            height: 100px;
            background-color: #2DD264;
            border-radius: 12px 12px 0 0;
            padding-top: 15px;
        }

        .weiter .t-top h6 {
            color: #fff;
            font-size: 18px;
            text-align: center;
            margin-bottom: 12px;
        }

        .weiter .t-top p {
            color: #fff;
            font-size: 13px;
            margin: 0 18px;
            text-indent: 7%;
        }

        .weiter .t-top #w-esc {
            position: absolute;
            right: 5%;
            top: 5%;
        }

        .weiter .t-bottom {
            width: 100%;
            height: 227px;
            background-color: #fff;
            border-radius: 0 0 12px 12px;
        }

        .weiter .t-bottom .t-b-first {
            height: 100%;
            display: block;
        }

        .weiter .t-bottom .t-b-first input {
            width: 85%;
            height: 40px;
            border: 0.5px solid rgba(230, 230, 230, 1);
            margin-top: 40px;
            margin-bottom: 25px;
            margin-left: 7.52%;
            padding-left: 5%;
        }

        .weiter .t-bottom .t-b-first button {
            width: 85%;
            height: 40px;
            border: 0;
            background-color: #F0F5F2;
            color: #3AC869;
            font-size: 16px;
            text-align: center;
            line-height: 40px;
            margin-left: 7.5%;
        }

        .weiter .t-bottom .t-b-first p {
            color: #999999;
            font-size: 12px;
            width: 85%;
            margin-left: 7.5%;
            margin-top: 20px;
            line-height: 18px;
        }

        .weiter .t-bottom .t-b-second {
            height: 100%;
            display: none;
            padding-top: 20px;
        }

        .weiter .t-bottom .t-b-second p {
            color: #808080;
            font-size: 12px;
            width: 85%;
            margin-left: 7.5%;
            margin-bottom: 20px;
        }

        .weiter .t-bottom .t-b-second input {
            width: 85%;
            height: 40px;
            border-radius: 2px;
            border: 0.5px solid rgba(238, 238, 238, 1);
            margin-left: 7.5%;
            margin-bottom: 20px;
        }

        .weiter .t-bottom .t-b-second .port1 {
            width: 85%;
            height: 40px;
            margin-left: 7.5%;
            background-color: #F0F5F2;
            color: #3AC869;
            font-size: 16px;
            text-align: center;
            line-height: 40px;
            border: 0;
            margin-bottom: 20px;
        }

        .weiter .t-bottom .t-b-second .t-b-scode {
            border: 0;
            color: #2DD264;
            font-size: 13px;
            position: absolute;
            right: 10%;
            top: 52%;
            background-color: #fff;
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

        .m-tan #m_ti{
            position: fixed;
            display: none;
            width: 25%;
            height: 32px;
            top: 45%;
            border-radius: 4px;
            line-height: 32px;
            text-align: center;
            left: 50%;
            margin-left: -12.5%;
            background-color: #fff;
            z-index: 10001;
        }
        /* 弹框遮罩 */
        .m-chang {
            width: 100%;
            height: 1000px;
            background-color: black;
            opacity: 0.4;
            position: fixed;
            top: 0;
            display: none;
        }
        .m-xuan img{
                height:34px;
                position: fixed;
                right:0;
                bottom:140px;
                z-index: 10000;
            }
    </style>
</head>
<body>
    

    
                            

    <!-- shou    -->
    <div class="container-fluid m">
        <div class="m-title visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>更多户型</h3>
        </div>
        <div class="m-hu visible-xs-block .visible-sm-block">
            <?php foreach($hus as $v): ?>
            <div class="h-c">
                    <a href="<?php echo url('home/content/hu',['id'=>$v['id'],'bid'=>$id]); ?>">
                <div class="col-xs-4 h-c-i">
                    
                        <img src="<?php echo $v['h_small']; ?>" alt="">
                    
                </div>
                <div class="col-xs-8 h-c-c">
                    <div class="h-t">
                        <h4><?php echo $v['content']; ?></h4>
                        <span class="h-t-z">在售</span>
                        <span class="h-t-m"><i><?php echo $v['jia']; ?></i>万起</span>
                    </div>
                    <div class="sp">特点：<?php echo $v['te']; ?></div>
                    <div class="sp">类型：<?php echo $v['lei']; ?></div>
                    <div class="sp sp-f">户型分析：<?php echo $v['fen']; ?></div>
                </div>
            </a>
            </div>
            <?php endforeach; ?>
            
        </div>
        <div class="m-botnav visible-xs-block .visible-sm-block">
            <p data-agl-cvt="5" id="m_shou" data_v="<?php echo $id; ?>"><?php if(in_array($id,\think\Session::get('fork'))): ?><img
                    style="margin-left:17%" src="/static/home/imgs/fork2.png" alt="">已收藏<?php else: ?><img
                    src="/static/home/imgs/forked.png" alt="">收藏<?php endif; ?></p>
            <a data-agl-cvt="5" href="tel:400-718-6686"><button class="m-pho">电话咨询</button></a>
            <button data-agl-cvt="5" class="m-y p1" data-v="预约看房">预约看房</button>
        </div>
        <div class="m-tan visible-xs-block .visible-sm-block">
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
                        <input type="hidden" value="<?php echo $data['building_name']; ?>">
                        <input type="hidden" value="">
                        <button class="t-b-scode">获取验证码</button>
                        <p class="tishi">
                            家园新房一对一专业服务，家园承诺保护您的隐私安全
                        </p>
                    </div>
                </div>
            </div>
            <div class="m-chang"></div>
            <div class="m-o-succ">
                <img class="o-esc" src="/static/home/imgs/m-esc.png" alt="">
                <img src="/static/home/imgs/m-success.png" alt="" class="o-success">
                <p id="o_p">已成功订阅最新动态，我们会第一时间通过短信通知您！</p>
                <button id="o_btn">确定</button>
            </div>
            <div id="m_ti"></div>
             <!-- 留言悬浮框 -->
          <div class="m-xuan visible-xs-block .visible-sm-block">
                <img src="/static/home/imgs/new_liu.png" alt="">
           </div>
        </div>
        
    </div>


    <script>
        $(document).ready(function(){
            var h=$('.h-c-c').height();
            $('.h-c-i img').css('height',h+"px");

            function getBrowserInfo() {
            var ua = navigator.userAgent.toLocaleLowerCase();
            var browserType = '谷歌';
            if (ua.match(/msie/) != null || ua.match(/trident/) != null) {
                browserType = "IE";
                browserVersion = ua.match(/msie ([\d.]+)/) != null ? ua.match(/msie ([\d.]+)/)[1] : ua.match(
                    /rv:([\d.]+)/)[1];
            } else if (ua.match(/firefox/) != null) {
                browserType = "火狐";
            } else if (ua.match(/ubrowser/) != null) {
                browserType = "UC";
            } else if (ua.match(/opera/) != null) {
                browserType = "欧朋";
            } else if (ua.match(/bidubrowser/) != null) {
                browserType = "百度";
            } else if (ua.match(/metasr/) != null) {
                browserType = "搜狗";
            } else if (ua.match(/tencenttraveler/) != null || ua.match(/qqbrowse/) != null) {
                browserType = "QQ";
            } else if (ua.match(/maxthon/) != null) {
                browserType = "遨游";
            } else if (ua.match(/safari/) != null) {
                browserType = "Safari";
            }
            return browserType;
        }

        function qudao() {
            var qu = '自然进客';
            var ua = navigator.userAgent.toLocaleLowerCase();
            if (document.referrer.indexOf("baidu") != -1) {
                var qu = '百度';
            } else if (ua.match(/safari/) != null) {
                qu = "UC";
            }

            return qu;
        }
        $('.p1').on('click', function () {
            window.type = $(this).attr('data-v');
            if (type == "预约看房") {
                $('.weiter .t-top h6').html(type);
                $('.weiter .t-top p').html('一键预约看房免费小车上门接送，可带家人一起参观多个热门楼盘');
            }
            $('.weiter').show();
            $('.m-chang').show();
        })
        // 接口验证码
        $('.t-b-btn2').on('click', function () {
            var phone = $(this).prev().val();
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
            var data = {
                'phone': phone
            };
            var tel = phone.substr(0, 3) + '****' + phone.substr(7, 11);
            var that = $(this);
            $.post(
                "<?php echo url('home/user/login'); ?>",
                data,
                function (res) {
                    if (res.code == 100) {
                        that.parent().hide();
                        that.parent().next().show();
                        $('.t-b-first').hide();
                        $('.t-b-second').show();
                        that.parent().next().children('input').eq(2).val(phone);
                        // console.log(l);
                        that.parent().next().find('p').find('span').html(tel);
                        // $('.t-b-second p span').html(tel);
                    } else {
                        alert(res.msg);
                    }
                },
                'json'
            )
        })
        $('.port1').on('click', function () {
            var building_name = $(this).next().val();
            var ma = $(this).prev().val();
            var tel = $(this).next().next().val();
            var name = '要自己问了';
            var pattern_tel = /^1[3-9][0-9]{9}$/;
            var type = $(this).parent().parent().prev().find('h6').html();
            if (tel == '') {
                $(this).prev().prev().prev().val('')
                $(this).prev().prev().prev().attr('placeholder', '手机号码不能为空');
                return;
            } else if (!pattern_tel.test(tel)) {
                $(this).prev().prev().prev().val('')
                $(this).prev().prev().prev().attr('placeholder', '手机号码不合法');
                return;
            }
            var brower = getBrowserInfo();
            var qu = qudao();
            var data = {
                'phone': tel,
                'type': type,
                'name': name,
                'building_name': building_name,
                'brower': brower,
                'qu': qu,
                'ma': ma
            }
            // console.log(data);return
            var that = $(this)
            $.post(
                "<?php echo url('home/content/port1'); ?>",
                data,
                function (res) {
                    if (res.code == 100) {
                        that.parent().parent().parent().hide();
                        $('.t-b-first').show();
                        $('.t-b-second').hide();
                        $('#txt').text('已成功订购服务，我们会第一时间通过电话联系您');
                        $('.m-o-succ').show();
                    }
                },
                'json'
            )
        })
        $('.t-b-scode').on('click', function () {
            var phone = $(this).prev().val();
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
                    $('.t-b-scode').html('重发' + time + 's');
                    $('.t-b-scode').attr('disabled', true);
                } else {
                    clearInterval(interval);
                    $('.t-b-scode').html('获取验证码');
                    $('.t-b-scode').attr('disabled', false);
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
                        alert('发送成功');
                    } else {
                        alert(res.msg);
                    }
                },
                'json'
            )
        })
        $('#w-esc').on('click', function () {
            $('.weiter').hide();
            $('.m-chang').hide();
        })
        $('.m-chang').on('click', function () {
            $('.m-chang').hide();
            $('.weiter').hide();
            $('#m_ti').hide();
        })
        $('#m_ti').on('click',function(){
            $('.m-chang').hide();
            $('#m_ti').hide();
        })
        // 收藏
        $('#m_shou').on('click',function(){
            var txt=$(this).text();
            
            if(txt=='收藏'){
                var id=$(this).attr('data_v');
                var that=$(this);
                $.post(
                    "<?php echo url('home/content/fork'); ?>",
                    {"id":id},
                    function(res){
                        if(res.code==100){
                           $('.m-fork').attr('src',res.ss);
                           $('.m-fork').attr('alt','已收藏');
                            var html=`
                            <img style="margin-left:17%" src="${res.msg}" alt="">已收藏
                                    `;
                            that.html(html)
                            
                        }else{
                            $('.m-chang').show();
                            $('#m_ti').html(res.msg);
                            $('#m_ti').show();
                        }
                    },
                    'json'
                )
            }else{
                return;
            }
            
        })


        $('.m-xuan').on('click', function () {
                window.location.href = "<?php echo url('home/index/lius'); ?>";
            })
    })
    </script>
</body>
</html>