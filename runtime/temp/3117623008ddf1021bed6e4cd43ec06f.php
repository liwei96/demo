<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpstudy_pro\WWW\tp2\public/../application/home\view\content\zg.html";i:1573284269;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>周边详情</title>
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
                
                .m-continer{
                    height:300px;
                }

                /* tab栏 */
                #list {
                    text-align: center;
                    position: relative;
                    left: 50%;
                    margin-left: -30%;
                    height: 30px;
                    margin-top:20px;
                    margin-bottom: 0;
                }
                
                #list li {
                    float: left;
                    color: #999999;
                    font-size: 14px;
                    margin-right: 6%;
                }
                #list li.m-active {
                    color: #333333;
                    font-size: 16px;
                    position: relative;
                }
                #list li.m-active::after {
                    content: '';
                    position: absolute;
                    top: 26px;
                    left: 12.5%;
                    background-color: #1CB64F;
                    height: 3px;
                    width: 25px;
                }

                /* 详细信息 */
                .m-l-content {
                    height: 346px;
                    overflow: scroll;
                    margin-bottom: 25px;
                }
                .m-l-content .m-type {
                    position: relative;
                    color: #999999;
                    font-size: 15px;
                    margin-bottom: 15px;
                    margin-left: 4%;
                    margin-top: 16px;
                }
                .m-l-content .m-te {
                    position: relative;
                    padding: 0 4%;
                }
                .m-l-content .m-te .m-name {
                    font-size: 15px;
                    color: #333333;
                    font-weight: 500;
                    margin-bottom: 8px;
                    width: 80%;
                }
                .m-l-content .m-te .m-area {
                    font-size: 12px;
                    color: #808080;
                }
                .m-l-content .m-te .m-ju {
                    position: absolute;
                    right: 1%;
                    top: -3px;
                    font-size: 15px;
                    color: #808080;
                }
                .m-l-content .m-te .m-ju img {
                    width: 22%;
                    margin-right: 10%;
                    margin-top: -1px;
                }
                /* 最下面的 */
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
                .m-botnav .m-y {
                    background-color: #46CF76;
                    color: #fff;
                    left: 62%;
                }
                .m-botnav .m-pho {
                    background-color: #58BBEC;
                    color: #fff;
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

    /* 报名成功 */
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

    /* 留言 */
    .m-xuan img{
        width:24.8%;
        height:34px;
        position: fixed;
        right:0;
        bottom:140px;
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
    .m-chang {
        display: none;
        position: fixed;
        top: 0;
        width: 100%;
        height: 1000px;
        background-color: rgba(0, 0, 0, 0.4);
        z-index: 1000;
    }

    #m_ti {
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
    </style>
</head>
<body>
    

    
                            

    <!-- shou    -->
    <div class="container-fluid m">
        <div class="m-title visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>周边详情</h3>
        </div>
        <div class="m-continer" id="m-container">

        </div>
        <ul id="list">
           <li class="m-active">生活</li>
           <li >交通</li>
           <li>医疗</li>
           <li>学校</li>
        </ul>
        <div id="panel" style="display: none;">

        </div>
        <div class="m-l-content">

        </div>
        <div class="visible-xs-block .visible-sm-block">
            




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
            <div id="m_ti">

            </div>


            
            <div class="m-o-succ">
                <img class="o-esc" src="/static/home/imgs/m-esc.png" alt="">
                <img src="/static/home/imgs/m-success.png" alt="" class="o-success">
                <p id="o_p">已成功订阅最新动态，我们会第一时间通过短信通知您！</p>
                <button id="o_btn">确定</button>
            </div>
            <div id="m_ti">

            </div>
            <div class="m-bigimgs">
                <img class="m_bigimgs" src="" alt="">
            </div>
        </div>
        <!-- 留言 -->
        <div class="m-xuan visible-xs-block .visible-sm-block" data-v="<?php echo $data['building_name']; ?>">
            <img src="/static/home/imgs/m-liu.png" alt="">
        </div>
    </div>
    <div class="m-botnav visible-xs-block .visible-sm-block">
        <p data-agl-cvt="5" id="m_shou" data_v="<?php echo $data['id']; ?>"><?php if(in_array($data['id'],\think\Session::get('fork'))): ?><img style="margin-left:17%" src="/static/home/imgs/fork2.png" alt="">已收藏<?php else: ?><img src="/static/home/imgs/forked.png" alt="">收藏<?php endif; ?></p>
        <a data-agl-cvt="5" href="tel:400-718-6686"><button class="m-pho">电话咨询</button></a>
        <button data-agl-cvt="5" class="m-y p1" data-v="预约看房">预约看房</button>
    </div>
    <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.14&key=729ac4d779c7e625bc11bd5ba3ff3112"></script>
    <script type="text/javascript" src="https://cache.amap.com/lbs/static/addToolbar.js"></script>
    <script>
            var map = new AMap.Map("m-container", {
                resizeEnable: true,
                zoom:13
            });
        function addMarker() {
            marker = new AMap.Marker({
                icon: "https://a.amap.com/jsapi_demos/static/demo-center/icons/poi-marker-default.png",
                position: [<?php echo $data['mapx']; ?>,<?php echo $data['mapy']; ?>],
                offset: new AMap.Pixel(-13, -30)
            });
            marker.setMap(map);
        }
        addMarker();

        map.add(marker);
        
        AMap.service(["AMap.PlaceSearch"], function() {
            //构造地点查询类
            var placeSearch = new AMap.PlaceSearch({ 
                pageSize: 10, // 单页显示结果条数
                pageIndex: 1, // 页码
                city: "", // 兴趣点城市
                citylimit: false,  //是否强制限制在设置的城市内搜索
                map: map, // 展现结果的地图实例
                panel: "panel", // 结果列表将在此容器中进行展示。
                autoFitView: true // 是否自动调整地图视野使绘制的 Marker点都处于视口的可见范围
            });
            
            var cpoint = [<?php echo $data['mapx']; ?>,<?php echo $data['mapy']; ?>]; //中心点坐标
            var p2=[120.144496,30.318836];
            var s=AMap.GeometryUtil.distance(cpoint, p2);
            placeSearch.searchNearBy('公交', cpoint, 2000, function(status, result) {
                console.log(result);
            });
            $(document).ready(function(){
                // 生活的周边查询
        function moren(){
                placeSearch.searchNearBy('购物', cpoint, 2000, function(status, result) {
                var ht='<p class="m-type">购物</p>';
                // console.log(ht)
                $.each(result.poiList.pois,function(i,e){
                    // console.log(e);
                    var p2=[e.location.lng,e.location.lat];
                    var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                    s=s.toFixed(1);
                    ht+=`
                    <div class="m-te">
                        <h5 class="m-name">${e.name}</h5>
                        <p class="m-ju"><img src="/static/home/imgs/path.png" alt="">${s}km</p>
                    </div>
                    `;
                })
                $('.m-l-content').html(ht);
            });
            placeSearch.searchNearBy('美食', cpoint, 2000, function(status, result) {
                var html=$('.m-l-content').html();
                var ht='<p class="m-type">美食</p>';
                $.each(result.poiList.pois,function(i,e){
                    // console.log(e);
                    var p2=[e.location.lng,e.location.lat];
                    var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                    s=s.toFixed(1);
                    ht+=`
                    <div class="m-te">
                        <h5 class="m-name">${e.name}</h5>
                        <p class="m-ju"><img src="/static/home/imgs/path.png" alt="">${s}km</p>
                    </div>
                    `;
                })
                html+=ht;
                $('.m-l-content').html(html);
            });
            placeSearch.searchNearBy('超市', cpoint, 2000, function(status, result) {
                var html=$('.m-l-content').html();
                var ht='<p class="m-type">超市</p>';
                $.each(result.poiList.pois,function(i,e){
                    // console.log(e);
                    var p2=[e.location.lng,e.location.lat];
                    var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                    s=s.toFixed(1);
                    ht+=`
                    <div class="m-te">
                        <h5 class="m-name">${e.name}</h5>
                        <p class="m-ju"><img src="/static/home/imgs/path.png" alt="">${s}km</p>
                    </div>
                    `;
                })
                html+=ht;
                $('.m-l-content').html(html);
            });
            }
            moren();
            $('#list li').on('click',function(){
            $(this).addClass('m-active').siblings('li').removeClass('m-active');
            if($(this).text()=='生活'){
                moren();
            }else if($(this).text()=="交通"){
                
                placeSearch.searchNearBy('地铁', cpoint, 2000, function(status, result) {
                    var html="";
                    var ht='<p class="m-type">地铁</p>';
                    $.each(result.poiList.pois,function(i,e){
                        var p2=[e.location.lng,e.location.lat];
                        var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                        s=s.toFixed(1);
                        console.log(e);
                        ht+=`
                        <div class="m-te">
                            <h5 class="m-name">${e.name}</h5>
                            <p class="m-area">${e.address}</p>
                            <p class="m-ju"><img src="/static/home/imgs/path.png" alt="">${s}km</p>
                        </div>
                        `;
                    })
                    html+=ht;
                    console.log(html)
                    $('.m-l-content').html(html);
                });
                placeSearch.searchNearBy('公交', cpoint, 2000, function(status, result) {
                    var html=$('.m-l-content').html();
                    var ht='<p class="m-type">公交</p>';
                    $.each(result.poiList.pois,function(i,e){
                        var p2=[e.location.lng,e.location.lat];
                        var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                        s=s.toFixed(1);
                        ht+=`
                        <div class="m-te">
                            <h5 class="m-name">${e.name}</h5>
                            <p class="m-area">${e.address}</p>
                            <p class="m-ju"><img src="/static/home/imgs/path.png" alt="">${s}km</p>
                        </div>
                        `;
                    })
                    html+=ht;
                    $('.m-l-content').html(html);
                });
            }else if($(this).text()=='医疗'){
                placeSearch.searchNearBy('医院', cpoint, 2000, function(status, result) {
                    var ht='<p class="m-type">医院</p>';
                    $.each(result.poiList.pois,function(i,e){
                        var p2=[e.location.lng,e.location.lat];
                        var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                        s=s.toFixed(1);
                        ht+=`
                        <div class="m-te">
                            <h5 class="m-name">${e.name}</h5>
                            <p class="m-ju"><img src="/static/home/imgs/path.png" alt="">${s}km</p>
                        </div>
                        `;
                    })
                    $('.m-l-content').html(ht);
                });
            }else if($(this).text()=='学校'){
                placeSearch.searchNearBy('学校', cpoint, 2000, function(status, result) {
                    var ht='<p class="m-type">学校</p>';
                    $.each(result.poiList.pois,function(i,e){
                        var p2=[e.location.lng,e.location.lat];
                        var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                        s=s.toFixed(1);
                        ht+=`
                        <div class="m-te">
                            <h5 class="m-name">${e.name}</h5>
                            <p class="m-ju"><img src="/static/home/imgs/path.png" alt="">${s}km</p>
                        </div>
                        `;
                    })
                    $('.m-l-content').html(ht);
                });
            }
           
        });

        
            })
        });
        


            $('.m-c-port1').on('click',function(){
                var building_name=$(this).prev().val();
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
                    'building_name':building_name,
		  
                }

                var that=$(this)
                $.post(
                    "<?php echo url('home/content/port1'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
			
                            that.parent().hide();
                            if(type=='变价通知'){
                                $('#o_p').text('已成功订阅变价通知，我们会第一时间通过短信通知您');
                                $('.m-o-succ').show();
                            }else if(type=='开盘通知'){
                                $('#o_p').text('已成功订阅开盘通知，我们会第一时间通过短信通知您');
                                $('.m-o-succ').show();
                            }else if(type=="预约看房"){
                                $('#o_p').text('已预约成功，我们会第一时间与您联系');
                                $('.m-o-succ').show();
                            }else if(type=="我要优惠"){
                                $('#o_p').text('已成功报名，我们会第一时间把优惠楼盘推送给您');
                                $('.m-o-succ').show();
                            }else if(type=="最新动态"){
                                $('#o_p').text('已成功订阅最新动态，我们会第一时间把楼盘动态推送给您');
                                $('.m-o-succ').show();
                            }
                        }
                    },
                    'json'
                )
            })

            $('.m-xuan').on('click', function () {
		        var id=$(this).attr('data-v');
                window.location.href = "<?php echo url('home/index/liu',['id'=>$data['building_name']]); ?>";
            })
        
            $('.p1').on('click',function(){
                window.type=$(this).attr('data-v');
                if(type=="预约看房"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键预约看房免费小车上门接送，可带家人一起参观多个热门楼盘 ');
                }
                $('.weiter').show();
                $('.m-chang').show();
                
            })

            function send(type,data){
                $.post(
                    "<?php echo url('home/content/port1'); ?>",
                    data,
                    function(){
                            if(type=="预约看房"){
                                $('#o_p').text('已预约成功，我们会第一时间与您联系');
                                $('.m-o-succ').show();
                                $('.m-chang').show();
                            }
                    },
                    'json'
                )
            }

            $('#w-esc').on('click',function(){
                $('.weiter').hide();
                $('.m-chang').hide();
            })
            $('.m-chang').on('click',function(){
                $('.weiter').hide();
                $('.m-chang').hide();
            })
            $('#m_ti').on('click',function(){
                window.location.href="<?php echo url('home/user/login'); ?>";
            })
            $('#o_btn').on('click',function(){
                $('.m-chang').hide();
                $('.m-o-succ').hide();
            })
            $('.o-esc').on('click',function(){
                $('.m-chang').hide();
                $('.m-o-succ').hide();
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
                                {'sign':sign,'username':'没有','project':project,'source':'线上推广1','remark':'不是留言','cate_id':0,'phone':phone},
                                function(res){
                                    if(res.code==200){
					                    console.log(res.msg)
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
    </script>
</body>
</html>