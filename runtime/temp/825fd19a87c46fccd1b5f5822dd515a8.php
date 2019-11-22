<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"G:\jiayuan\tp2\public/../application/home\view\content\xiang.html";i:1574405507;}*/ ?>
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
    <!-- PC -->
    <!-- PC -->

    <!-- m -->
    <div class="container-fluid m">
        <div class="m-title visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>楼盘详情</h3>
        </div>
        <div class="m-incro visible-xs-block .visible-sm-block">
            <h3><?php echo $data['building_name']; ?></h3>
            <div class="m-ic-icons">
                <span class="m-zai"><?php echo $data['building_xiaoshou']; ?></span>
                <span class="m-jing"><?php echo $data['building_zhuangxiu']; ?></span>
                <?php foreach($data['building_ditie'] as $v): ?>
                <span><?php echo $v; ?></span>
                <?php endforeach; foreach($data['building_xingshi'] as $v): ?>
                <span><?php echo $v; ?></span>
                <?php endforeach; foreach($data['building_tese'] as $v): ?>
                <span><?php echo $v; ?></span>
                <?php endforeach; ?>
            </div>
            <ul>
                <li>参考单价&nbsp;&nbsp;&nbsp;&nbsp;<span class="m-pric"><span><?php echo $data['danjia']; ?></span>元/m²起</span></li>
                <li>建筑面积&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['jianji']; ?>m²</span></li>
                <li>楼盘户型&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['building_huxing']; ?>、<?php foreach($data['building_xingshi'] as $v): ?><?php echo $v; endforeach; ?></span></li>
                <li>开盘时间&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['kaitime']; ?></span></li>
                <li>楼盘地址&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['building_address']; ?></span></li>
            </ul>
            
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-bot visible-xs-block .visible-sm-block">
            <ul>
                <li>楼盘类型&nbsp;&nbsp;&nbsp;&nbsp;<span><?php foreach($data['building_xingshi'] as $v): ?><?php echo $v; endforeach; ?></span></li>
                <li>开 发  商&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['kaifa']; ?></span></li>
                <li>楼盘地址&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['building_address']; ?></span></li>
                <li>楼盘面积&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['jianji']; ?>方</span></li>
                <li>装修状况&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['building_zhuangxiu']; ?></span></li>
                <li>产权年限&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['channian']; ?>年</span></li>
                <li>开盘时间&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['kaitime']; ?></span></li>
                <li>交房时间&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['jiaotime']; ?></span></li>
                <li><p class="m-sl">公交路线</p>&nbsp;&nbsp;&nbsp;&nbsp;<span class="m-gong"><?php echo $data['traffic']; ?></span></li>
                <li>绿 化 率&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['lvhua']; ?>%</span></li>
                <li>容 积 率&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $data['rongji']; ?></span></li>
            </ul>
        </div>
        <div class="m-botnav visible-xs-block .visible-sm-block">
            <p id="m_shou" data_v="<?php echo $data['id']; ?>"><?php if(in_array($data['id'],\think\Session::get('fork'))): ?><img style="margin-left:17%" src="/static/home/imgs/fork2.png" alt="">已收藏<?php else: ?><img src="/static/home/imgs/forked.png" alt="">收藏<?php endif; ?></p>
            <a href="tel:400-718-6686"><button class="m-pho" href="tel:400-718-6686">电话咨询</button></a>
            <button class="m-yu p1" data-v="预约看房">预约看房</button>
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
                    <button class="t-b-btn t-b-btn2 bg_01" id="dingxue">立即订阅</button>
                    <p>
                        家园新房一对一专业服务，家园承诺保护您的隐私安全
                    </p>
                </div>
                <div class="t-b-second">
                    <p>验证码已发送到<span>187****4376</span>，请注意查看</p>
                    <input type="text" placeholder="请输入验证码">
                    <button class="port1">确定</button>
                    <input type="hidden" id="building_name" value="<?php echo $data['building_name']; ?>">
                    <input type="hidden" value="">
                    <button class="t-b-scode">获取验证码</button>
                    <p class="tishi">
                        家园新房一对一专业服务，家园承诺保护您的隐私安全
                    </p>
                </div>
            </div>
        </div>
        <div class="m-chang"></div>
          <!-- 留言悬浮框 -->
          <div class="m-xuan visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/new_liu.png" alt="">
         </div>
    </div>
    <script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
    <script>
        $(document).ready(function(){
            // $('.m-yu').on('click',function(){
            //     window.location.href="<?php echo url('home/user/yue'); ?>";
            // })
       

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
                           window.location.href="<?php echo url('home/user/login'); ?>";
                        }
                    },
                    'json'
                )
            }else{
                return;
            }
            
        })
        $('.p1').on('click',function(){
                window.type=$(this).attr('data-v');
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
         // 接口验证码
         $('.t-b-btn2').on('click',function(){
                var phone=$(this).prev().val();
		        var type=$(this).parent().parent().prev().find('h6').html();
                var building_name=$(this).parent().next().find('#building_name').val();
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
                var data={'phone':phone,'type':type,'building_name':building_name};
                var tel=phone.substr(0,3)+'****'+phone.substr(7,11);
                var that=$(this);
                $.post(
                    "<?php echo url('home/user/login'); ?>",
                    data,
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
                            var sign=parseInt(new Date().getTime()/1000);
                            var project=<?php echo $data['id']; ?>;
                            $.post(
                                "<?php echo url('home/user/email'); ?>",
                                {'sign':sign,'username':'未知','project':project,'source':'线上推广1','remark':'不是留言','cate_id':0,'phone':phone},
                                function(res){
                                    if(res.code){
                                        // alert(res.message)
                                    }else{
                                        // alert(res.message);
                                    }
                                }
                            )
                        }else{
                            alert(res.msg);
                        }
                    },
                    'json'
                ) 
            })

            $('#w-esc').on('click',function(){
                $('.weiter').hide();
                $('.m-chang').hide();
            })
            $('.t-b-scode').on('click',function(){
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
                var data={'phone':phone};
                $.post(
                    "<?php echo url('home/user/login'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            alert('发送成功');
                        }else{
                            alert(res.msg);
                        }
                    },
                    'json'
                ) 
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
            $('.m-xuan').on('click', function () {
                window.location.href = "<?php echo url('home/index/lius'); ?>";
            })



        //点击按钮出现hover
        $(function () {
        function changeColor(id,class1,class2) {
            $("#"+id).on("touchstart",function () {
                $(this).attr("class",class1)
            })
            $("#"+id).on("touchend",function () {
                $(this).attr("class",class2)
            })
        }
        changeColor("dingxue","bg_02","bg_01")
    });


        })

    </script>
</body>
</html>