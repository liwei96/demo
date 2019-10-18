<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\php\PHPTutorial\WWW\tp\public/../application/home\view\content\hu.html";i:1564903305;}*/ ?>
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


        .m-line{
            width:100%;
            height:10px;
            background-color: #F7F7F7;
        }
        .m-c-top{
            width:100%;
            height:210px;
        }
        .m-c-cont{
            padding:0px 0 18px 4%;
            height: 168px;
        }
        .m-c-cont h3{
            font-size: 20px;
            color:#333333;
            font-weight: bold;
            margin-top:20px;
        }
        .m-c-cont h3 span{
            margin-left:12px;
            background-color: #2DC45A;
            color:#fff;
            font-size: 12px;
            padding:1px 2%;
        }
        .m-c-cont .ll{
            padding:0;
        }
        .m-c-cont p{
            margin-bottom: 14px;
        }
        .m-c-cont p .c-title{
            color:#808080;
            font-size: 14px;
        }
        .m-c-cont p .c-mon{
            color:#FF6666;
            font-size: 14px;
        }
        .m-c-cont p .c-con{
            color:#404040;
            font-size: 14px;
        }
/* m-dai */
.m-dai h3 {
    color: #404040;
    font-size: 16px;
    margin: 25px 0 25px 4%;
    font-weight: bold;
}

.m-dai .m-d-content {
    padding: 0 4%;
    margin-bottom: 20px;
    position: relative;
}

.m-dai .m-d-content img {
    width: 17.5%;
    display: inline-block;
    margin-right: 4.7%;
    margin-top: -59px;
}

.m-dai .m-d-content div {
    display: inline-block;
    margin-right: 10%;
}

.m-dai .m-d-content .m-d-name {
    color: #343434;
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 3px;
}

.m-dai .m-d-content .m-d-ping {
    color: #343434;
    font-size: 12px;
    font-weight: 500;
    margin-bottom: 10px;
}

.m-dai .m-d-content .m-d-text {
    color: #999999;
    font-size: 12px;
    margin: 0;
}

.m-dai .m-d-content button {
    display: inline-block;
    width: 23%;
    height: 28px;
    background:linear-gradient(-90deg,rgba(40,194,91,1),rgba(94,215,85,1));
    color: #fff;
    font-size: 12px;
    border-radius: 4px;
    border: 0px;
    text-align: center;
    line-height: 28px;
    position: absolute;
    top: 16px;
    right: 4%;
    border-radius: 4px;
}
               
.m-fen{
    height:240px;
}
.m-fen h3{
    font-size: 16px;
    color: #333333;
    margin:12px 0 15px 4%;
    font-weight: bold;
}
.m-fen p{
    color:#666666;
    font-size: 15px;
    padding:0 4%;
    line-height: 26px;
}


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

.m-chang {
    position: fixed;
    top: 0;
    width: 100%;
    height: 1000px;
    background-color: rgba(0, 0, 0, 0.4);
    z-index: 1000;
}

.m-c-content {
    width: 74.6666667%;
    height: 292px;
    background-color: #fff;
    border-radius: 12px;
    position: fixed;
    top: 0;
    margin-top: 170px;
    left: 50%;
    margin-left: -37.333333%;
    text-align: center;
    padding: 0 5%;
    z-index: 1001;
}

.m-c-content h5 {
    color: #3AC869;
    font-size: 18px;
    margin: 0;
    margin-top: 25px;
    font-weight: bold;
    margin-bottom: 25px;
}

.m-c-content img {
    position: absolute;
    width: 8.6%;
    top: 3.1%;
    right: 3.5%;
}

.m-c-content p {
    color: #999999;
    font-size: 16px;
    text-align: initial;
}

.m-c-content input {
    width: 100%;
    height: 44px;
    border: 0px;
    border-bottom: 0.5px solid #F2F2F2;
    margin-bottom: 10px;
    color: #4D4D4D;
    font-size: 18px;
}

.m-c-content input::-webkit-input-placeholder {
    font-size: 15px;
    color: #999999;
}

.m-c-content button {
    display: block;
    width: 100%;
    height: 40px;
    background-color: #F0F5F2;
    border-radius: 4px;
    color: #3AC869;
    font-size: 16px;
    text-align: center;
    line-height: 40px;
    margin-top: 10px;
    border: 0px;
}

.m-c-content span {
    display: block;
    text-align: center;
    line-height: 26px;
    border: 0.5px solid #3AC869;
    color: #3AC869;
    font-size: 12px;
    width: 29%;
    height: 26px;
    background-color: #fff;
    border-radius: 4px;
    position: absolute;
    top: 41%;
    right: 7%;
}

#m_y_box{
    display: none;
}
#m_f_box{
    display:none;
}
.m-chang{
    display:none;
}


   

    </style>
</head>
<body>
    

    
                            

    <!-- shou    -->
    <div class="container-fluid m">
        <div class="m-title visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>户型分析</h3>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-content visible-xs-block .visible-sm-block">
            <img class="m-c-top" src="<?php echo $hu['h_big']; ?>" alt="">
            <div class="m-c-cont">
                <h3><?php echo $hu['content']; ?><span>在售</span></h3>
                <div class="col-xs-6 ll">
                    <p>
                        <span class="c-title">单价</span>
                        <span class="c-mon"><?php echo $data['danjia']; ?>元/m²起</span>
                    </p>
                    <p>
                        <span class="c-title">建面</span>
                        <span class="c-con"><?php echo $hu['mian']; ?>m</span>
                    </p>
                    <p>
                        <span class="c-title">特点</span>
                        <span class="c-con"><?php echo $hu['te']; ?></span>
                    </p>
                </div>
                <div class="col-xs-6 ll">
                    <p>
                        <span class="c-title">总价</span>
                        <span class="c-mon"><?php echo $hu['jia']; ?>万</span>
                    </p>
                    <p>
                        <span class="c-title">层高</span>
                        <span class="c-con"><?php echo $data['cenggao']; ?>米</span>
                    </p>
                    <p>
                        <span class="c-title">类型</span>
                        <span class="c-con"><?php echo $hu['lei']; ?></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-dai visible-xs-block .visible-sm-block">
            <h3>值班置业顾问</h3>
            <div class="m-d-content">
                <img src="/static/home/imgs/people.png" alt="<?php echo \think\Session::get('user.fork'); ?>">
                <div>
                    <p class="m-d-name">倪丽丽</p>
                    <p class="m-d-ping">评分5.0分</p>
                    <p class="m-d-text">向她咨询更多详细户型信息</p>
                </div>
                <button data-agl-cvt="5" class="m-listen">我要咨询</button>
            </div>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
        <div class="m-fen visible-xs-block .visible-sm-block">
            <h3>户型分析</h3>
            <p>
                1.<?php echo $hu['fen']; ?>
            </p>
            <p>
                
                2.....
            </p>
            <p>
                3.....
            </p>
        </div>
        <div class="m-botnav visible-xs-block .visible-sm-block">
            <p data-agl-cvt="5" id="m_shou" data_v=""><img src="/static/home/imgs/forked.png" alt="">收藏</p>
            <a data-agl-cvt="5" href="tel:0571-82576775"><button class="m-pho">电话咨询</button></a>
            <button data-agl-cvt="5" class="m-y">预约看房</button>
        </div>
        <div class="visible-xs-block .visible-sm-block">
            <div id="m_y_box">
                <div class="m-c-content">
                    <h5>预约看房</h5>
                    <img id="m_y_esc" src="/static/home/imgs/m-esc.png" alt="">
                    <p>一键预约看房,免费小车上门接送</p>
                        <input type="text" placeholder="请输入手机号">
                        <input type="name" placeholder="请输入姓名">
                        <input type="hidden" name="type" value="预约看房">
                    <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
                        <button class="m-c-port1">确定</button>
                </div>
            </div>
            <div id="m_f_box">
                <div class="m-c-content">
                    <h5>获取详细分析资料</h5>
                    <img id="m_f_esc" src="/static/home/imgs/m-esc.png" alt="">
                    <p>一键获取详细分析资料，详细了解楼盘 </p>
                        <input type="text" placeholder="请输入手机号">
                        <input type="name" placeholder="请输入姓名">
                        <input type="hidden" name="type" value="获取详细分析资料">
                    <input type="hidden" name="building_name" value="<?php echo $data['building_name']; ?>">
                        <button class="m-c-port1">确定</button>
                </div>
            </div>
            <div class="m-chang"></div>
        </div>
    </div>


    <script>
        $(document).ready(function(){
            $('.m-listen').on('click',function(){
                $('#m_f_box').show(300);
                $('.m-chang').show();
            })
            $('.m-y').on('click',function(){
                $('#m_y_box').show(300);
                $('.m-chang').show();
            })
            $('.m-chang').on('click',function(){
                $('#m_f_box').hide();
                $('#m_y_box').hide();
                $('.m-chang').hide();
            })
            $('#m_f_esc').on('click',function(){
                $('#m_f_box').hide();
                $('.m-chang').hide();
            })
            $('#m_y_esc').on('click',function(){
                $('#m_y_box').hide();
                $('.m-chang').hide();
            })
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
             
	       var brower=getBrowserInfo();
	       var qu=qudao();
	       

                var data={
                    'phone':tel,
                    'type':type,
                    'name':name,
                    'building_name':building_name,
		  'brower':brower,
		  'qu':qu
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
        })
    </script>
</body>
</html>