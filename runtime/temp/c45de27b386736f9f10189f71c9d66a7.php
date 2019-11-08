<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"G:\jiayuan\tp2\public/../application/home\view\index\tupai.html";i:1573201827;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>城市选择</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style>
        .m {
            padding: 0;
        } 
        * {
                    padding: 0;
                    margin: 0;
		            font-family:"Microsoft YaHei";
                }
                html,body{overflow-x:hidden;}
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
        
                /* 头部 */
                .m{
                    padding:0;
                }
                .m-nav{
                    width:100%;
                    height:48px;
                    text-align: center;
                    border-bottom: 1px solid #F2F2F2;
		           background-color:#fff;
                }
                .m-nav img{
                    width: 5%;
                    float:left;
                    margin-top:3.3%;
                    margin-left: 5.33%;
                }
                .m-nav span{
                    color:#999999;
                    display: inline-block;
                    font-size: 14px;
                    height:48px;
                    line-height: 48px;
                    width:24%;
                }
                .m-nav .m-p-news{
                    margin-left:-6%;
                }
                .m-nav span.m-active{
                    color:#333333;
                    font-size: 16px;
                    font-weight: bold;
                    position: relative;
                }
                .m-nav span.m-active i{
                    height: 3px;
                    display: block;
                    width: 35%;
                    background-color: #1CB64F;
                    position: absolute;
                    top: 81%;
                    left: 35%;
                }


    /* 土拍 预售*/
    #m-t,#m-y{
          margin-top:70px;
    }
    #m-h{
          margin-top:58px;
    }
    .m-list .m-di{
                    padding:0 4% 0 4%;
                }
                .m-list .m-di h6{
                    color:#333333;
                    font-size: 16px;
                    margin-top:22px;
                    margin-bottom:18px;
                    font-weight:bold;
                }
                .m-list .m-di ul li:nth-child(2n+1){
                    background-color: #F2F2F2;
                    height:40px;
                }
                .m-list .m-di ul li:nth-child(2n){
                    background-color:#FAFAFA;
                    height:40px;
                }
                .m-list .m-di ul li span.left{
                    float:left;
                    width:50%;
                    text-align: center;
                    color:#4D4D4D;
                    font-size: 14px;
                    line-height: 40px;
                    font-weight:400;
                }
                .m-list .m-di ul li span.right{
                    float:right;
                    width:50%;
                    text-align: center;
                    color:#808080;
                    font-size: 14px;
                    line-height: 40px;
                    overflow: hidden;/*超出部分隐藏*/
                    text-overflow:ellipsis;/* 超出部分显示省略号 */
                    white-space: nowrap;/*规定段落中的文本不进行换行 */
                }
        
   /* 摇号登记 */
   #m-y{display:none;}
                #m-h{display:none;}
                .m-list .m-al{
                    padding:4%;
                }
                .m-list .m-al h6{
                    color:#333333;
                    font-size: 18px;
                    margin-top:12px;
                    margin-bottom:22px;
                    font-weight:bold;
                }
                .m-list .m-al ul li{
                    margin-bottom: 23px;
                }
                .m-list .m-al ul li span{
                    color:#808080;
                    font-size: 14px;
                }
                .m-list .m-al ul li span.a-area{
                    width:20%;
                    float:left;
                }
                .m-list .m-al ul li span.a-lou{
                    width:50%;
                    color:#4D4D4D;
                    font-weight: bold;
                    display: inline-block;
                }
                .m-list .m-al ul li span.a-time{
                    float:right;
                }
                .m-list .a-line{
                    height:10px;
                    width:100%;
                    background-color: #f7f7f7;
                }
        
    </style>
</head>

<body>
        <div class="container-fluid m">
                <div class="m-nav visible-xs-block .visible-sm-block navbar navbar-default navbar-fixed-top">
                    <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
                    <span class="m-t-news m-active" >土拍<i></i></span>
                    <span class="m-y-news">预售证<i></i></span>
                    <span class="m-h-news">摇号<i></i></span>
                </div>
                <div class="m-list visible-xs-block .visible-sm-block">
                   <div id="m-t">
                        <?php foreach($tuis as $v): ?>
                        <div class="m-di">
                                <h6><?php echo $v['name']; ?></h6>
                                <ul>
                                    <li>
                                        <span class="left">地块编号</span>
                                        <span class="right"><?php echo $v['code']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">出让面积(m²)</span>
                                         <span class="right"><?php echo $v['area']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">用途</span>
                                         <span class="right"><?php echo $v['for']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">容积率</span>
                                         <span class="right"><?php echo $v['rong']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">建筑面积(m²)</span>  
                                         <span class="right"><?php echo $v['jianmian']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">楼面起价(元²)</span>
                                         <span class="right"><?php echo $v['loumian']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">成交价(万元)</span>
                                         <span class="right"><?php echo $v['chengjiao']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">楼面价(元/²)</span>
                                         <span class="right"><?php echo $v['loujia']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">溢价率</span>
                                         <span class="right"><?php echo $v['yijia']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">竞得单位 </span>
                                         <span class="right"><?php echo $v['unit']; ?></span>
                                     </li>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                       
                   </div>
                   <div id="m-y">
                       <?php foreach($yus as $v): ?>
                        <div class="m-di">
                                <h6><?php echo $v['name']; ?></h6>
                                <ul>
                                    <li>
                                        <span class="left">预售证号</span>
                                        <span class="right"><?php echo $v['code']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">核发日期</span>
                                         <span class="right"><?php echo $v['time']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">幢号</span>
                                         <span class="right"><?php echo $v['zhuanghao']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">可售套数</span>
                                         <span class="right"><?php echo $v['taoshu']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">户型面积</span>  
                                         <span class="right"><?php echo $v['humianji']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">类型</span>
                                         <span class="right"><?php echo $v['type']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">均价</span>
                                         <span class="right"><?php echo $v['junjia']; ?></span>
                                     </li>
                                     <li>
                                         <span class="left">楼盘地址</span>
                                         <span class="right"><?php echo $v['address']; ?></span>
                                     </li>
                                </ul>
                            </div>
                            <?php endforeach; ?>
                   </div>
                   <div id="m-h">
                       <div class="m-al">
                            <h6>今日可登记楼盘</h6>
                            <ul>
                                    <?php foreach($dengs as $v): ?>
                                <li>
                                    <span class="a-area"><?php echo $v['area']; ?>：</span>
                                    <span class="a-lou"><?php echo $v['loupan']; ?></span>
                                    <span class="a-time"><?php echo $v['time']; ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                       </div>
                       <div class="a-line"></div>
                       <div class="m-al">
                            <h6>今日可摇号楼盘</h6>
                            <ul>
                                <?php foreach($haos as $v): ?>
                                <li>
                                    <span class="a-area"><?php echo $v['area']; ?>：</span>
                                    <span class="a-lou"><?php echo $v['loupan']; ?></span>
                                    <span class="a-time"><?php echo $v['time']; ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                       </div>
                   </div>           
                </div>
                 <!-- 留言悬浮框 -->
                 <div class="m-xuan visible-xs-block .visible-sm-block">
                    留言
                </div>
            </div>
     
</body>
<script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.m-nav span').on('click',function(){
                $(this).siblings('span').removeClass('m-active');
                $(this).addClass('m-active');
            })
             $('.m-t-news').on('click',function(){
                $('#m-t').show();
                $('#m-y').hide();
                $('#m-h').hide();
            })        
             $('.m-y-news').on('click',function(){
                $('#m-t').hide();
                $('#m-y').show();
                $('#m-h').hide();
            })
            $('.m-h-news').on('click',function(){
                $('#m-t').hide();
                $('#m-y').hide();
                $('#m-h').show();
            }) 
    })
        

    
</script>


</html>