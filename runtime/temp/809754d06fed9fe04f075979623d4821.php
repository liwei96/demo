<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpstudy_pro\WWW\tp2\public/../application/home\view\index\pmap.html";i:1562490741;}*/ ?>
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

        .m-top h3 {
            color: #333333;
            font-size: 18px;
            margin: 0;
            height: 100%;
            line-height: 43px;
            font-weight: bold;
        }
        .m-top .m-home{
            right:5%;
        }
    </style>
</head>
<body>
<div id="container" class="map" tabindex="0"></div>
<div class="container-fluid m">
    <div class="visible-xs-block .visible-sm-block m-top">
        <img class="m-go" src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
        <h3>地图找房</h3>
        <img class="m-home" src="/static/home/imgs/m-home.png" alt="">
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
        window.location.href=`//test.jy1980.com/home/content/content/id/${id}.html`;
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