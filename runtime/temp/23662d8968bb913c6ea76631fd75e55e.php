<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"G:\jiayuan\tp2\public/../application/home\view\user\find.html";i:1574405667;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>帮我找房</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link href="https://cdn.bootcss.com/bootstrap-slider/10.6.1/css/bootstrap-slider.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        <script src="https://cdn.bootcss.com/bootstrap-slider/10.6.1/bootstrap-slider.min.js"></script>
        <style>
             * {
                    padding: 0;
                    margin: 0;
                }
                html,body{overflow-x: hidden;}
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
            .m-top{
                width:100%;
                height:44px;
                border-bottom:1px solid #F2F2F2;
                text-align: center;
                position: relative;
            }
            .m-top img{
                position: absolute;
                left: 4%;
                top: 25%;
                width: 6%
            }
            .m-top h4{
                line-height: 44px;
                margin: 0;
                color:#333333;
                font-size: 18px;
                letter-spacing: 2px;
            }

            .m-me .m-shan{
            
        }
        .m-me .m-shan .m-jia{
            padding-bottom:3%;
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
            height:54px;
            overflow: scroll;
            text-align: center;
        }
        .m-me .m-shan .m-huxing{
            height: 66px;
        }
        .m-me .m-shan .m-one span.m-active{
            background:rgba(242,255,246,1);
            border:1px solid rgba(119,212,150,1);
            color:#77D496;
        }
        .m-me .m-shan .m-one p{
            color:#696969;
            display: inline-block;
            font-size: 14px;
        }
        .m-me .m-shan .m-one .slider .slider-handle{
            width:20px;
            height:20px;
            background-color: #fff;
            border: 1px solid #3AC869;
            background-image: none;
        }
        .slider.slider-horizontal .slider-track{
            margin-top:-1px;
        }
        .slider.slider-horizontal{
            width:100%;
        }
        .m-me .m-shan .m-one .slider .slider-track{
            height:2px;
            background-color: #F3F3F3;
        }
        .m-me .m-shan .m-one .slider .slider-track .slider-selection{
            background-color: #3AC869;
            background-image: none;
        }
        .m-me .m-shan .m-one .slider .tooltip-main{
            display: none;
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
            height:127px;
            background: #fff;
        }
        .m-me .m-shan .m-thr{
            height:auto;
        }
        .m-me .m-shan .m-s-btn{
            background-color: #3AC869;
            width: 86%;
            height: 40px;
            text-align: center;
            color: #fff;
            line-height: 40px;
            position: relative;
            left: 50%;
            margin-left: -43%;
            border-radius: 4px;
        }
        .m-me .m-shan .m-one .m-btn{
            width:98%;
            border:1px solid #77D496;
            background-color: rgba(242,255,246,1);
            border-radius: 4px;
            height:32px;
            padding:0 5%;
        }
        .m-me .m-shan .m-one .m-btn p{
            color:#77D496;
            line-height: 32px;
            float: left;
        }
        .m-me .m-shan .m-one .m-btn img{
            width: 6%;
            float: right;
            margin-top: 2%;
        }
        .m-me .m-shan .m-lian{
            height:83px;
        }
        .m-me .m-shan .m-lian .m-in{
            width:98%;
            padding:0 5%;
            border-radius: 4px;
            height:32px;
            border:1px solid #D9D9D9;
            background:rgba(242,242,242,1);
            color:#9C9C9C;
            border:1px solid #D9D9D9;
        }


        .m-qu{
            width:100%;
            height: 100%;
            background:rgba(0,0,0,0.4);
            position: fixed;
            display: none;
            top:0;
        }
        .m-qu .m-bottom{
            position: fixed;
            width:100%;
            bottom: 0;
            z-index: 10;
        }
        .m-qu .m-bottom .m-b-top{
            width:100%;
            height:50px;
            background-color: #FAFAFA;
            padding:4% 5%;
        }
        .m-qu .m-bottom .m-b-top .m-t-left{
            color:#7F7F7F;
            font-size: 16px;
            float: left;
        }
        .m-qu .m-bottom .m-b-top .m-t-right{
            color:#3AC869;
            font-size: 16px;
            float: right;
        }
        .m-qu .m-bottom .m-b-bottom{
            width:100%;
            height:227px;
            background-color: #fff;
            margin:0;
            padding:5% 3%;
        }
        .m-qu .m-bottom .m-b-bottom span{
            background-color: #F5F5F5;
            color:#808080;
            font-size: 13px;
            text-align: center;
            padding: 0;
            height: 24px;
            margin-right: 5%;
            width:20%;
            margin-bottom:8%;
            line-height: 24px;
        }
        .m-qu .m-bottom .m-b-bottom span.m-active{
            background:rgba(242,255,246,1);
            border:1px solid rgba(119,212,150,1);
            color:#77D496;
        }

        .m-s-btn:active { background-color: red;}
        </style>
</head>
<body>
    <!-- PC -->
    <!-- PC -->


    <!-- shou -->
    <div class="container-fluid m">
        <div class="m-top visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h4>帮我找房</h4>
        </div>
        <div class="m-me visible-xs-block .visible-sm-block">
            <div class="m-shan row">
                <h4 class="m-jia">价格区间</h4>
                <div class="m-one">
                    <p class="m-start">200</p>w - <p class="m-end">800</p>w
                    <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="10" data-slider-value="[200,800]"/> 
                   
                </div>
                <h4 class="">选择区域</h4>
                <div class="m-one">
                   <button class="m-btn">
                    <p>不限</p>
                    <img src="/static/home/imgs/go.png" alt="">
                   </button>
                </div>
                <h4>选择户型</h4>
                <div class="m-one m-huxing">
                   <?php foreach($hus as $v): ?>
                   <span class=" col-xs-3 col-sm-3"><?php echo $v; ?></span>
                   <?php endforeach; ?>
                </div>
                <h4>楼盘特色  </h4>
                <div class="m-one m-thr">
                   <span class=" col-xs-3 col-sm-3">不限</span>
                   <?php foreach($tes as $v): ?>
                   <span class=" col-xs-3 col-sm-3"><?php echo $v; ?></span>
                   <?php endforeach; ?>
                </div>
                <h4 class="">联系方式</h4>
                <div class="m-one m-lian">
                   <input type="text" value="<?php echo \think\Session::get('user.phone'); ?>" class="m-in" placeholder="请输入您的手机号">
                </div>
               <div class="m-s-btn">
                    确定
               </div>
            </div>
        </div>
        <div class="m-qu visible-xs-block .visible-sm-block">
            <div class="m-bottom">
                <div class="m-b-top">
                    <p class="m-t-left">取消</p>
                    <p class="m-t-right">确定</p>
                </div>
                <div class="m-b-bottom row">
                    <span class=" col-xs-3 col-sm-3 m-active">钱塘新区</span>
                    <?php foreach($areas as $v): ?>
                    <span class=" col-xs-3 col-sm-3"><?php echo $v['area_name']; ?></span>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- shou -->



    <script>
        $(document).ready(function(){
            var height=window.screen.height;
            $('.m-qu').css('height',height);
            console.log(height);
            var slider = new Slider('#ex2', {});
            $('#ex2').on('slide',function(){
                var start=$('.min-slider-handle').attr('aria-valuenow');
                var end=$('.max-slider-handle').attr('aria-valuenow');
                $('.m-start').text(start);
                $('.m-end').text(end);
                console.log(start);
                console.log(end);
            })
            $('.m-one span').on('click',function(){
                $(this).addClass('m-active').siblings('span').removeClass('m-active');
            })
            $('.m-b-bottom span').on('click',function(){
                $(this).addClass('m-active').siblings('span').removeClass('m-active');
            })
            $('.m-qu').removeClass('visible-xs-block').hide();
            $('.m-t-left').on('click',function(){
                $('.m-qu').removeClass('visible-xs-block').hide();
            })
            $('.m-btn').on('click',function(){
                $('.m-qu').addClass('visible-xs-block').show();
            })
            $('.m-t-right').on('click',function(){
                $('.m-qu').removeClass('visible-xs-block').hide();
                var str=$('.m-b-bottom .m-active').text();
                $('.m-btn p').text(str);
            })



            $('.m-s-btn').on('click',function(){
                var start=$('.min-slider-handle').attr('aria-valuenow');
                var end=$('.max-slider-handle').attr('aria-valuenow');
               
                var data={
                    'jiage':start+'W——'+end+'W',
                    'area':$('.m-btn p').text(),
                    'huxing':$('.m-huxing .m-active').text(),
                    'tese':$('.m-thr .m-active').text(),
                    'phone':$('.m-in').val(),
                }
                $.post( 
                    "<?php echo url('home/user/test'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            window.location.href="<?php echo url('home/user/index'); ?>";
                        }else{
                            console.log(res.msg);
                        }
                    },
                    'json'
                );
            })
       




       



})
    </script>
</body>
</html>