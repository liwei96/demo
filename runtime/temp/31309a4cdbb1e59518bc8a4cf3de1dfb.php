<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"G:\jiayuan\tp2\public/../application/home\view\search\sou.html";i:1574303369;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>搜索</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            <link rel="stylesheet" href="//at.alicdn.com/t/font_1416845_l80icjbk93.css">
            <link rel="stylesheet" href="//at.alicdn.com/t/font_1416845_olgiihzyg8c.css">
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
            
            .all{
                padding:0;
            }
            .m-search{
                width:100%;
                height:48px;
                position: relative;
            }
            .m-search img{
                width:5%;
                margin-left: 3%;
            }
            .m-search .m-int{
                width:69.87%;
                height:30px;
                background-color: #F7F7F7;
                border-radius: 4px;
                margin-left:2%;
                margin-top:3%;
                padding-left:10%;
                border:0px;
                margin-right:2%;
            }
            .m-search .m-se{
                width:4%;
                position: absolute;
                top:38%;
                left:12%;
            }
            .m-search #s-btn{
                background:linear-gradient(270deg,rgba(28,182,79,1),rgba(104,217,122,1));
                width:13%;
                border:0;
                color:#fff;
                height:26px;
                border-radius: 13px;
            }

            .hot{
                width:100%;
                padding-top:5%;
                padding-right:0;
            }
            .hot h4{
                color:#333333;
                font-size: 14px;
                margin-bottom:6%;
            }
            .hot h4 span{
                    color:#FF5454;
                    font-size: 17px;
            }
            .hot h4 i{
                        color:#333333;
                        font-size: 16px;
                       font-style:normal;
            }


            .hot .m-list{
                margin-bottom:6%;
                position:relative;
            }
            .hot .m-list p.title{
                color: #1CB64F;
                font-size: 14px;
                display: inline-block;
                margin-right:6%;
                position:relative;
                top:-40px;
            }
            .hot .m-list p.y{
                color:#FEC64E;
            }
            .hot .m-list div{
                display:inline-block;
                width:81%;
            }
            .hot .m-list div span{
                color:#666666;
                font-size: 14px;
                display: inline-block;
                padding:5px 12px;
                border:0.5px solid #DADADA;
                border-radius: 3px;
                margin-right:3%;
                margin-bottom: 3%;
            }
            
        </style>
</head>
<body>
    <div class="container-fluid all">   
        <form class="m-search visible-xs-block .visible-sm-block" action="<?php echo url('home/search/'.$end,['type'=>'0']); ?>" method="POST">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <img src="/static/home/imgs/search.png" alt="" class="m-se">
            <input type="text" class="m-int" name="name" placeholder="请输入楼盘名称">
            <button type="submit" id="s-btn">搜索</button>
        </form>
    </div>
    <div class="container-fluid hot">
        <h4 class="visible-xs-block">
            <span class="iconfont iconhuo"><span>
            <i>热门搜索</i>
        </h4>
        <div class="visible-xs-block m-list">
            <p class="title">楼盘</p>
            <div>
                    <?php foreach($data as $v): ?>
                    <a href="<?php echo url('home/content/index',['id'=>$v['id']]); ?>"><span><?php echo $v['building_name']; ?></span></a>
                    <?php endforeach; ?>
                
            </div>
            
        </div>
        <div class="visible-xs-block m-list">
            <p class="title y">特色</p>
            <div id="ys">
                
                <span>地铁楼盘</span>
                <span>繁华街道</span>
                <span>学区房产</span>
                <span>品牌地产</span>
                <span>大型社区</span>
                <span>团购优惠</span>
            </div>
            
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#ys span').on('click',function(){
                console.log($(this).text())
                var s=$(this).text();
                if('<?php echo $end; ?>'=='index' || '<?php echo $end; ?>'=='search'){
                    // window.location.href="/home/search/index/type/"+0;
                    window.location.href="<?php echo url('home/search/index',['type'=>0]); ?>";

                }else if('<?php echo $end; ?>'=='tuan'){
                    // window.location.href="/index.php/tuan/"+s;
                    window.location.href="<?php echo url('home/search/tuan',['type'=>0]); ?>";
                }
            })
        })
        
    </script>
</body>
</html>