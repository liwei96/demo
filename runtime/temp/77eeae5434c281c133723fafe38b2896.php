<<<<<<< HEAD
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpstudy_pro\WWW\tp2\public/../application/home\view\index\map.html";i:1571908968;}*/ ?>
=======
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpstudy_pro\WWW\tp2\public/../application/home\view\index\map.html";i:1573443393;}*/ ?>
>>>>>>> 5d2e6a0b6f03b55d2fbd6762b8d37630a57141e1
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>地图找房</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
    <link rel="stylesheet" href="https://a.amap.com/jsapi_demos/static/demo-center/css/demo-center.css"/>
    <style>
        html, body, #container {
            height: 100%;
            width: 100%;
        }

        .input-card {
            width: 25rem;
        }

        .input-card .btn {
            width: 7rem;
            margin-right: .7rem;
        }

        .input-card .btn:last-child {
            margin-right: 0;
        }
        .m {
            padding: 0;
        }

        .m-top {
            width: 100%;
            position: fixed;
            top:0;
            z-index: 100;
            text-align: center;
            background-color: #fff;
            height: 44px;
            border-bottom: 0.5px solid #F2F2F2;
        }

        .m-top img {
            position: absolute;
            top: 25%;
            width: 6%;
        }

        .m-top .m-go{
            left:5%;
        }

<<<<<<< HEAD
        .m-top h3 {
            color: #333333;
            font-size: 18px;
            margin: 0;
            height: 100%;
            line-height: 43px;
            font-weight: bold;
=======
        .m-top input {
            width:69.33333%;
            height:28px;
            border-radius: 4px;
            background-color: #F2F2F2;
            margin-left:-1%;
            border:0px;
            margin-top:7px;
>>>>>>> 5d2e6a0b6f03b55d2fbd6762b8d37630a57141e1
        }
        .m-top .m-home{
            right:5%;
        }
<<<<<<< HEAD
=======


        /* 下拉菜单 */
.m-menu{
    width:100%;
    height:44px;
}
.m-menu ul{
    margin: 0;
}
.m-menu ul li{
    float:left;
    margin-top:2.93%;
    margin-left:6.67%;
    color:#414141;
    font-size: 14px;
}
.m-menu ul li img{
    width:22%;
    margin-top:-3px;
}
.m-menu ul li.m-as img{
    transform: rotateX(180deg);
}
.m-menu>img{
    width:5.9%;
    margin-top:2.93%;
    margin-right: 7%;
    float:right;
}
/* 下拉菜单 */

/* 真下拉 */
::-webkit-scrollbar {
    width: 0px;
}

::-webkit-scrollbar {
    display: none;
}
.m-me{
    width:100%;
    z-index: 2;
    position: absolute;
}
.m-me .row{
    height:250px;
    display: none;
}
.m-me .row ul{
    text-align: center;
}
.m-me .row .m-one{
    height: 100%;
    color:#666666;
    padding:0;
    font-size: 16px;
    overflow: auto;
    background-color: #fff;
}
.m-me .row .m-one ul li{
    margin:15% 0;
}
#tie{
    display: none;
}
.m-me .row .m-one ul .m-r-active{
    color: #1CB64F;
}
.m-me .row .m-two{
    height:100%;
    background-color: #F0F2F5;
    overflow: auto;
}
.m-me .row .m-two ul li{
    color:#666666;
    font-size: 16px;
    padding:6% 0;
}
.m-me .row .m-two ul .m-l-active{
    color: #1CB64F;
}
.m-me .m-hu .m-one{
    overflow: hidden;
}
.m-me .m-hu .m-one ul{
    margin:0;
    margin-left:7%;
    margin-right:4%;
    margin-top:2%;
    height: 190px;
    overflow: auto;
}
.m-me .m-hu .m-one ul li{
    height:47px;
    line-height: 47px;
    padding-right:10%;
    margin:0;
    border-bottom: 0.5px solid #F7F7F7;
}
.m-me .m-hu .m-one ul li span{
    float: left;
}
.m-me .m-hu .m-one ul li input{
    float:right;
    width:15px;
    height:15px;
    margin-top:5%;
    -webkit-appearance:none;
    border: 0.5px solid #999999;
    outline: none;
}
#dan{
    display: none;
}
.m-me .m-hu .m-one ul li input[type=checkbox]:checked{
    background: url("/static/home/imgs/checkbox_icon.png")no-repeat center;
    background-size: 90%;
}
.m-me .m-hu .m-one .m-h-btn{
    width:100%;
    height: 60px;
    border-top:1px solid #EDEDED;
    text-align: center;
    line-height: 54px;
}
.m-me .m-hu .m-one .m-h-btn span{
    display: inline-block;
    width:37.1%;
    height:40px;
    font-size: 15px;
    text-align: center;
    line-height: 40px;
    border-radius: 4px;
}
.m-me .m-hu .m-one .m-h-btn .m-h-l{
    border:0.5px solid #D9D9D9;
    color:#9B9B9B;
    margin-right:5%;
}
.m-me .m-hu .m-one .m-h-btn .m-h-r{
    background-color: #3AC869;
    color:#fff;
}
.m-me .m-shan{
    height:462px;
    background-color: #fff;
}
.m-me .m-shan h4{
    color:#333333;
    padding:4% 0 6% 8%;
    margin: 0;
    background-color: #fff;
    font-size: 16px;
}
.m-me .m-shan h4 span{
    color:#999999;
    font-size: 12px;
    font-weight: normal;
    margin-left:2%;
}
.m-me .m-shan .m-one{
    padding:0 8%;
    height:42px;
}
.m-me .m-shan .m-one span{
    background-color: #F5F5F5;
    text-align: center;
    padding: 0;
    height: 24px;
    margin-right: 5%;
    font-size: 14px;
    color: #999999;
    width:20%;
    margin-bottom:5%;
    line-height: 24px;
}
.m-me .m-shan .m-two{
    height:40px;
    background: #fff;
}
.m-me .m-shan .m-thr{
    height:152px;
}
.m-me .m-shan .m-s-btn{
    background-color: #fff;
    width:100%;
    height: 60px;
    border-top:1px solid #EDEDED;
    text-align: center;
    line-height: 54px;
}
.m-me .m-shan .m-s-btn span{
    display: inline-block;
    width:37.1%;
    height:40px;
    font-size: 15px;
    text-align: center;
    line-height: 40px;
    border-radius: 4px;
}
.m-me .m-shan .m-s-btn .m-h-l{
    border:0.5px solid #D9D9D9;
    color:#9B9B9B;
    margin-right:5%;
}
.m-me .m-shan .m-s-btn .m-h-r{
    background-color: #3AC869;
    color:#fff;
}
.m-me .m-shan span.m-now{
    background-color:#3AC869;
    color:#fff;
}
.m-me .m-pai{
    height:238px;
    background-color: #fff;
}
.m-me .m-pai ul{
    margin:0;
}
.m-me .m-pai ul li{
    height:47px;
    border-bottom:0.5px solid #F7F7F7;
    line-height: 47px;
    color:#999999;
    font-size: 16px;
    text-align:left;
    padding-left:12%;
}
.m-me .m-pai ul li.m-act{
    color:#1CB64F;
}

div{
    display: normal;
}
.m-box{
    width:100%;
    display: none;
    height:1000px;
    background-color: #000000;
    opacity: 0.4;
}
/* 真下拉 */
>>>>>>> 5d2e6a0b6f03b55d2fbd6762b8d37630a57141e1
    </style>
</head>
<body>
<div id="container" class="map" tabindex="0"></div>
<div class="container-fluid m">
    <div class="visible-xs-block .visible-sm-block m-top">
        <img class="m-go" src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
<<<<<<< HEAD
        <h3>地图找房</h3>
        <img class="m-home" src="/static/home/imgs/m-home.png" alt="">
=======
        <input type="text" placeholder="楼盘搜索" >
        <img class="m-home" src="/static/home/imgs/m-home.png" alt="">
        
>>>>>>> 5d2e6a0b6f03b55d2fbd6762b8d37630a57141e1
    </div>
</div>
<script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
<script src="https://a.amap.com/jsapi_demos/static/china.js"></script>
<script type="text/javascript"
        src="https://webapi.amap.com/maps?v=1.4.14&key=您申请的key值&plugin=AMap.MarkerClusterer"></script>
<script type="text/javascript">
    var cluster, markers = [];
    document.getElementsByClassName('m-home')[0].onclick=function(){
        window.location.href="<?php echo url('home/index/index'); ?>"
    }
    var map = new AMap.Map("container", {
        resizeEnable: true,
        center: [120.192024, 30.231115],
        zoom: 10
    });
    function ss(id){
        window.location.href=`//www.jy1980.com/index/${id}.html`;
    }
        <?php foreach($data as $v): ?>
        markers.push(new AMap.Marker({
            position: [<?php echo $v['mapx']; ?>,<?php echo $v['mapy']; ?>],
            content: '<div style="background-color: #3AC869; height: 22px; width: 100px; text-align:center;line-height:22px; color:#fff; border-radius: 12px; box-shadow: hsl(180, 100%, 50%) 0px 0px 1px;" onclick="ss(<?php echo $v['id']; ?>)"><?php echo $v['building_name']; ?></div>',
            offset: new AMap.Pixel(-15, -15)
        }))
        <?php endforeach; ?>
    

    addCluster(1);

    function addCluster(tag) {
        if (cluster) {
            cluster.setMap(null);
        }
        if (tag == 2) {
            cluster = new AMap.MarkerClusterer(map, markers, {
                gridSize: 80,
                renderClusterMarker: _renderClusterMarker
            });
        } else if (tag == 1) {
            var sts = [{
                url: "/static/home/imgs/32.png",
                size: new AMap.Size(32, 32),
                offset: new AMap.Pixel(-16, -16)
            }, {
                url: "/static/home/imgs/32.png",
                size: new AMap.Size(32, 32),
                offset: new AMap.Pixel(-16, -16)
            }, {
                url: "/static/home/imgs/36.png",
                size: new AMap.Size(36, 36),
                offset: new AMap.Pixel(-18, -18)
            }, {
                url: "/static/home/imgs/48.png",
                size: new AMap.Size(48, 48),
                offset: new AMap.Pixel(-24, -24)
            }, {
                url: "/static/home/imgs/48.png",
                size: new AMap.Size(48, 48),
                offset: new AMap.Pixel(-24, -24)
            }];
            cluster = new AMap.MarkerClusterer(map, markers, {
                styles: sts,
                gridSize: 80
            });
        } else {
            cluster = new AMap.MarkerClusterer(map, markers, {gridSize: 80});
        }
    }
</script>
</body>
</html>