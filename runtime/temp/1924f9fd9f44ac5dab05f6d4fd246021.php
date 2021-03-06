<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"G:\jiayuan\tp2\public/../application/home\view\content\daimore.html";i:1574131475;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>更多问答</title>
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
            height:600px;
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
            font-weight: bold;
        }
        .m-c-cont p .c-con{
            color:#404040;
            font-size: 14px;
            font-weight: bold;
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

    /* 留言 */
    .m-xuan img{
        height:34px;
        position: fixed;
        right:0;
        bottom:140px;
    }
     /* 问答样式 */
     .wen-list{
        padding-bottom:50px;
      }
     .wen-list:after{
             
             content:""; 
             display: block; 
             clear:both; 
     }
    .wen-list .m-d-content {
    /* padding: 0 4%; */
    margin-bottom: 20px;
    position: relative;
    top:6px;
    border-bottom:1px solid #FFF2F2F2;
    padding-bottom:20px;
    width:92%;
    margin-left:4%;
}

.wen-list .m-d-content img {
    width: 17.5%;
    display: inline-block;
    margin-right: 4.7%;
    margin-top: -55px;
}

.wen-list .m-d-content div {
    display: inline-block;
}

.wen-list .m-d-content .m-d-name {
    color: #343434;
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 3px;
}
.wen-list .m-d-content .m-d-name span{
    color:#fff;
    font-size: 10px;
    padding:3px 6px;
    background:linear-gradient(-45deg,rgba(243,214,152,1),rgba(247,200,100,1));
    border-radius: 12px;
    font-weight: normal;
    margin-left:9px;
}

.wen-list .m-d-content .m-d-fen{
    color:#343434;
    font-size: 12px;
}

.wen-list .m-d-content .m-d-ping {
    color: #999999;
    font-size: 12px;
    font-weight: 500;
    margin-bottom: 10px;
}

.wen-list .m-d-content .m-d-text {
    color: #999999;
    font-size: 12px;
    margin: 0;
}

.wen-list .m-d-content button {
    display: inline-block;
    width: 23%;
    height: 28px;
    background-color: #fff;
    color: #1CB64F;
    font-size: 12px;
    border-radius: 4px;
    border: 0px;
    text-align: center;
    line-height: 28px;
    position: absolute;
    top: 16px;
    right: 4%;
    border-radius: 4px;
    border:1px solid #82E9A4;
}

.wen-list .m-d-content .m-w-content h4{
    color:#333333;
    font-size: 15px;
    margin-bottom: 13px;
}
.wen-list .m-d-content .m-w-content h4 span,
.wen-list .m-d-content .m-w-content p span{
    width:16px;
    height:16px;
    background:linear-gradient(-45deg,rgba(255,191,52,1),rgba(255,144,63,1));
    border-radius:5px 0px 5px 0px;
    font-size: 12px;
    color:#fff;
    margin-right:12px;
    display: inline-block;
    text-align: center;
    line-height: 16px;
}
.wen-list .m-d-content .m-w-content p span{
    background:linear-gradient(-45deg,rgba(71,149,255,1),rgba(102,214,255,1));
    float: left;
}
.wen-list .m-d-content .m-w-content p{
    color:#999999;
    font-size: 14px;
    margin-bottom: 10px;
}
.wen-list .m-d-content .m-w-content p i{
    /* display: inline-block; */
    font-style: normal;
    float: left;
    width: 91%;
    margin-bottom: 10px;
    display:-webkit-box;
    -webkit-box-orient:vertical;
    -webkit-line-clamp:3;
    overflow:hidden;


}
.wen-list .m-d-content .m-w-content .m-w-all{
    color:#4F84FE;
    font-size: 12px;
    float:right;
    margin-right:4%;
    cursor: pointer;
}
/*咨询弹框*/


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

    </style>
</head>
<body>
    

    
                            

    <!-- shou    -->
    <div class="container-fluid m">
        <div class="m-title visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>楼盘问答</h3>
        </div>
        <div class="m-line visible-xs-block .visible-sm-block"></div>
          <!-- shou    -->
        <div class="wen-list">
                <div class="m-d-content">
                        <img src="/static/home/imgs/people.png" alt="<?php echo \think\Session::get('user.fork'); ?>">
                        <div>
                            <p class="m-d-name">倪丽丽<span>金牌置业顾问</span></p>
                            <p class="m-d-fen">评分5.0分</p>
                            <p class="m-d-ping">最了解该楼盘，熟悉本房周边信息</p>
                            
                        </div>
                        <button data-agl-cvt="5" class="p1" data-v="咨询服务">我要咨询</button>
                        <div class="m-w-content">
                            <h4><span>问</span>现在外地人在杭州买房需要什么条件?</h4>
                            <p>
                                <span>答</span><i>纳税或社保连年，需要连续足额缴存24个月，需要连续足额缴存24个月，需要连续足额缴存24个月，需要连续足额缴存24个月，需要连续足额缴存24个月，需要连续足额缴存24个月，纳税或社保连...</i>
                            </p>
                            <span class="m-w-all">查看全文</span>
                        </div>
                </div>
                <div class="m-d-content">
                        <img src="/static/home/imgs/people.png" alt="<?php echo \think\Session::get('user.fork'); ?>">
                        <div>
                            <p class="m-d-name">倪丽丽<span>金牌置业顾问</span></p>
                            <p class="m-d-fen">评分5.0分</p>
                            <p class="m-d-ping">最了解该楼盘，熟悉本房周边信息</p>
                            
                        </div>
                        <button data-agl-cvt="5" class="p1" data-v="咨询服务">我要咨询</button>
                        <div class="m-w-content">
                            <h4><span>问</span>现在外地人在杭州买房需要什么条件?</h4>
                            <p>
                                <span>答</span><i>纳税或社保连年，需要连续足额缴存24个月，需要连续足额缴存24个月，，需要连续足额缴存24个月，需要连续足额缴存24个月，纳税或社保连...</i>
                            </p>
                            <span class="m-w-all">查看全文</span>
                        </div>
                </div>
                <div class="m-d-content">
                        <img src="/static/home/imgs/people.png" alt="<?php echo \think\Session::get('user.fork'); ?>">
                        <div>
                            <p class="m-d-name">倪丽丽<span>金牌置业顾问</span></p>
                            <p class="m-d-fen">评分5.0分</p>
                            <p class="m-d-ping">最了解该楼盘，熟悉本房周边信息</p>
                            
                        </div>
                        <button data-agl-cvt="5" class="p1" data-v="咨询服务">我要咨询</button>
                        <div class="m-w-content">
                            <h4><span>问</span>现在外地人在杭州买房需要什么条件?</h4>
                            <p>
                                <span>答</span><i>纳税或社保连年，需要连续足额缴存24个月，需要连续足额缴存24个月，，需要连续足额缴存24个月，需要连续足额缴存24个月，纳税或社保连...</i>
                            </p>
                            <span class="m-w-all">查看全文</span>
                        </div>
                </div>
                <div class="m-d-content">
                        <img src="/static/home/imgs/people.png" alt="<?php echo \think\Session::get('user.fork'); ?>">
                        <div>
                            <p class="m-d-name">倪丽丽<span>金牌置业顾问</span></p>
                            <p class="m-d-fen">评分5.0分</p>
                            <p class="m-d-ping">最了解该楼盘，熟悉本房周边信息</p>
                            
                        </div>
                        <button data-agl-cvt="5" class="p1" data-v="咨询服务">我要咨询</button>
                        <div class="m-w-content">
                            <h4><span>问</span>现在外地人在杭州买房需要什么条件?</h4>
                            <p>
                                <span>答</span><i>纳税或社保连年，需要连续足额缴存24个月，需要连续足额缴存24个月，需要连续足额缴存24个月，纳税或社保连...</i>
                            </p>
                            <span class="m-w-all">查看全文</span>
                        </div>
                </div>

        </div>
 




        <!-- 底部咨询框   -->
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
        <!-- 留言 -->
        <div class="m-xuan visible-xs-block .visible-sm-block" data-v="<?php echo $data['building_name']; ?>">
            <img src="/static/home/imgs/new_liu.png" alt="">
        </div>
    </div>
      <!-- 咨询弹框 -->
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

            $('.m-xuan').on('click', function () {
		        var id=$(this).attr('data-v');
                window.location.href = "<?php echo url('home/index/liu',['id'=>$data['building_name']]); ?>";
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

            $('#w-esc').on('click',function(){
                $('.weiter').hide();
                $('.m-chang').hide();
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
                                {'sign':sign,'username':'没有','project':project,'source':'家园'+type,'remark':'不是留言','cate_id':0,'phone':phone},
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

//楼盘问答---查看全文
var  flag=true;
      $('.m-w-all').click(function(){
          if(flag==true){
            $(this).prev().children("i").css({
              "-webkit-line-clamp":"inherit"
            }) 
            $(this).html("点击收起")
            flag=false;
          }else{
            $(this).prev().children("i").css({
              "-webkit-line-clamp":"3"
            }) 
            $(this).html("查看全文")
            flag=true; 
          }
      })




        })

        
    </script>
</body>
</html>