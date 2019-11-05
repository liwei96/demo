<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\php\PHPTutorial\WWW\tp\public/../application/home\view\index\buy.html";i:1562490695;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>楼盘资讯</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
    <link rel="stylesheet" href="/static/home/css/i-buy.css">
    <style>
	
.m-w-list{
            width:100%;
        }
        .swiper-slide a{
            padding:0;
            width:74px;
            height:24px;
            text-align: center;
            line-height: 24px;
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

.m-c-content {
    width: 74.6666667%;
    height: 286px;
    display: none;
    background-color: #fff;
    border-radius: 12px;
    position: fixed;
    top: 0;
    margin-top: 190px;
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
    width: 240px;
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

/* pc */
    .p{
        padding:0;
    }
    /* 顶部导航 */
    .top-nav{
             height:80px;
             width:100%;
             background-color: #fff;
             position: relative;
         }
         .box{
             width:1200px;
             position: absolute;
             left:50%;
             margin-left:-600px;
         }
         .top-nav ul{
             margin:0;
         }
         .top-nav ul li{
             float: left;
             margin-right:40px;
         }
         .top-nav ul li a{
             color:#999999;
             font-size: 18px;
             line-height: 80px;
         }
         .top-nav ul li a.active{
             color:#1CB64F;
             border-bottom: 2px solid #1CB64F;
             padding-bottom: 10px;
         }
         .top-nav p{
             float: right;
             color:#1CB64F;
             font-size: 24px;
             line-height: 80px;
             font-weight: bold;
         }
         .top-nav span{
             color:#9A9A9A;
             font-size: 18px;
             line-height: 80px;
             margin-right:19px;
         }
         .top-nav img{
             width:17px;
             margin-left:90px;
             margin-right: 11px;
             line-height: 80px;
         }
         .top-nav .register{
             margin-right:7px;
         }
	.top-nav img.jk{
             margin-left:33px;
         }
         .top-nav .user{
             color:#2DD264;
         }


         /* 搜索栏 */
         .search{
             width:100%;
             height:160px;
             background-color: #F5F7F6;
         }
         .search .top{
             position: relative;
             padding-top: 30px;
             margin-bottom:26px;
         }
         .search .top img{
             width:100px;
             margin-right:26px;
             display: inline-block;
         }
         .search .top p{
             padding-left:5px;
             display: inline-block;
             border-left:1px solid #999999;
         }
         .search .top p i{
             color:#323232;
             font-size: 18px;
             font-style: normal;
         }
         .search .top p img{
             width:14px;
             margin-left:10px;
         }
         .search .top input{
             width:622px;
             height:60px;
             border:1px solid #2FBF4A;
             padding-left: 44px;
         }
         .search .top input::-webkit-input-placeholder {
            color: #989898;
            font-size: 16px;
         }
         .search .top span{
             display: block;
             position: absolute;
             width:160px;
             height:60px;
             font-size: 16px;
             top:19px;
             line-height: 60px;
             text-align: center;
         }
         .search .top #find{
             background-color: #1CB64F;
             color:#FFFFFF;
             right:193px;
             top:30px;
	    cursor:pointer;
         }
         .search .top #find img{
             width:22px;
             margin-right:10px;
         }
         .search .bottom{
             text-align: center;
         }
         .search .bottom span{
             display: inline-block;
             position: relative;
             margin-right: 150px;
             color:#9A9A9A;
             font-size: 24px;
	    cursor:pointer;
         }
         .search .bottom span.active{
             color:#2FBF4A;
         }
         .search .bottom span.active i{
             width:24px;
             height:2px;
             background-color: #2FBF4A;
             display: block;
             position: absolute;
             bottom:-9px;
             left:12px;
	    cursor:pointer;
         }

         /* question */
         .questions{
             padding-top:58px;
             height:1582px;
         }
         .questions .row{
             border-bottom: 1px solid #ededed;
             margin-bottom: 28px;
         }
         .questions .row h6{
             color:#4D4D4D;
             font-size: 20px;
             margin-bottom: 28px;
         }
         .questions .row h6 img{
             width:21px;
             margin-right: 11px;
         }
         .questions .row p{
             color:#808080;
             font-size: 16px;
             margin-bottom: 28px;
	    text-indent: 28px;
         }
         .questions .peo{
             text-align: center;
             margin-bottom: 48px;
         }
         .questions .peo img{
             width:80px;
             border-radius: 40px;
             margin-bottom:20px;
         }
         .questions .peo h6{
            color:#333333;
            font-size: 20px;
            margin-bottom: 12px;
         }
         .questions .peo p{
             color:#666666;
             font-size: 16px;
             margin-bottom: 8px;
         }
         .questions .peo p span{
             color:#FF5E5E;
         }
         .questions .peo button{
             width:100px;
             height:32px;
             border:1px solid #3AC869;
             color:#3AC869;
             text-align: center;
             line-height: 32px;
             font-size: 16px;
             background-color: #fff;
             border-radius: 4px;
         }
         /* footer */
footer{
    width:100%;
    height:260px;
    background-color: #1B1B1B;
    position: relative;
}
.footer-top{
    position: absolute;
    top:38px;
    left:50%;
    margin-left:-600px;
}
.footer-top li{
    color:#FFFFFF;
    float:left;
    font-size: 14px;
    margin-right:18px;
    cursor: pointer;
}
.footer-line{
    width:1200px;
    height:1px;
    background-color: #333333;
    position: absolute;
    top:100px;
    left:50%;
    margin-left:-600px;
}
footer p{
    color:#FFFFFF;
    font-size: 24px;
    position: absolute;
    top:29px;
    left:50%;
    margin-left:300px;
}
.footer-bottom{
    position: absolute;
    top:136px;
    left:50%;
    margin-left:-310px;
}
.footer-bottom li{
    float: left;
    margin-right: 25px;
    color:#fff;
    font-size: 14px;
    cursor: pointer;
}
footer span{
    display: block;
    position: absolute;
    color: #fff;
    font-size: 14px;
    top:180px;
    left:50%;
    margin-left:-300px;
}






	/* 弹框 */
    .tan .zhao{
            display: none;
            width:100%;
            background-color: #000000;
            opacity: 0.4;
            position: fixed;
            top:0;
            z-index: 20000;
         }
         .tan .ts{
            display:none;
            width:500px;
            height:380px;
            border-radius: 20px;
            position: fixed;
            top:150px;
            left:50%;
            margin-left:-250px;
            z-index: 20001;
         }
         .tan .ts .t-top{
             height: 140px;
             background-color: #2DD264;
             text-align: center;
             position: relative;
             border-radius:20px 20px 0px 0px;
         }
         .tan .ts .t-top h6{
             color:#FFFFFF;
             font-size: 20px;
             font-weight: bold;
             position: relative;
             top:28px;
         }
         .tan .ts .t-top p{
             color:#FFFFFF;
             font-size: 18px;
             position: relative;
             top:58px;
         }
         .tan .ts .t-top img{
             width:16px;
             height:16px;
             position: absolute;
             top:28px;
             right:32px;
         }
         .tan .ts .t-bottom{
             height:240px;
             background-color: #fff;
             padding-top:30px;
             position: relative;
             border-radius:0px 0px 20px 20px;
         }
         .tan .ts .t-bottom input{
             width:350px;
             border:0px;
             border-bottom:1px solid #F2F2F2;
             display: block;
             margin-left:75px;
             padding-bottom: 22px;
             margin-bottom: 12px;
             color:#4D4D4D;
             font-size: 24px;
         }
         .tan .ts .t-bottom input::-webkit-input-placeholder { /* WebKit browsers */
            color: #999;
            font-size:18px;
        }

        .tan .ts .t-bottom input::-moz-placeholder { /* Mozilla Firefox 19+ */
            color: #999;
            font-size:18px;
        }

        .tan .ts .t-bottom input:-ms-input-placeholder { /* Internet Explorer 10+ */
            color: #999;
            font-size:18px;
        }   

        .tan .ts .t-bottom span{
            border:1px solid #2DD264;
            color:#2DD264;
            font-size: 16px;
            text-align: center;
            line-height: 22px;
            padding:3px;
            position: absolute;
            top:107px;
            right:77px;
            width:100px;
            border-radius: 5px;
            cursor: pointer;
        }
        .tan .ts .t-bottom button{
            width:300px;
            height:44px;
            margin-left:100px;
            background-color:#F0F5F2;
            font-size: 16px;
            color:#3AC869;
            text-align: center;
            line-height: 44px;
            border:0px;
            border-radius: 6px;
        }
	.d{
            display: none;
        }
        .t{
            display: none;
        }



	.tan .succ{
            display:none;
            width:500px;
            height:380px;
            border-radius: 20px;
            position: fixed;
            top:150px;
            left:50%;
            margin-left:-250px;
            z-index: 20001;
        }
        .tan .succ .t-top{
            height: 140px;
             background-color: #2DD264;
             text-align: center;
             position: relative;
             border-radius:20px 20px 0px 0px;
        }
        .tan .succ .t-top #s_esc{
             width:16px;
             height:16px;
             position: absolute;
             top:28px;
             right:32px;
        }
        .tan .succ .t-top .gou{
            width:140px;
            position: absolute;
            top:71px;
            left:50%;
            margin-left:-70px;
            z-index: 1;
        }
        .tan .succ .t-bottom{
            height:240px;
             background-color: #fff;
             padding-top:30px;
             position: relative;
             border-radius:0px 0px 20px 20px;
        }
        .tan .succ .t-bottom p{
            color:#666666;
            font-size: 18px;
            line-height: 24px;
            margin-top:80px;
            margin-bottom:24px;
            text-align: center;
            width:250px;
            margin-left:125px;
        }
        .tan .succ .t-bottom button{
            width:300px;
            height:44px;
            margin-left:100px;
            background-color:#F0F5F2;
            font-size: 16px;
            color:#3AC869;
            text-align: center;
            line-height: 44px;
            border:0px;
            border-radius: 6px;
        }

    </style>
</head>
<body>

<!-- pc -->
    <div class="p container-fluid">
        <nav class="top-nav visible-md-block visible-lg-block">
            <div class="box">
                <ul>
                    <li><a href="<?php echo url('home/index/index'); ?>">家园首页</a></li>
                    <li><a href="<?php echo url('home/search/index',['type'=>0]); ?>">楼盘查询</a></li>
                    <li><a href="<?php echo url('home/search/tuan',['type'=>0]); ?>">团购优惠</a></li>
                    <li><a href="<?php echo url('home/index/buy'); ?>" class="active">买房指南</a></li>
                    <li><a href="<?php echo url('home/news/index'); ?>">楼盘资讯</a></li>
                    <li><a href="<?php echo url('home/user/guan'); ?>">关于家园</a></li>
                </ul>
                <?php if(\think\Session::get('user')): ?>
                    <img class="jk" src="/static/home/imgs/icon-5.png" alt="">
                    <span class="user"><?php echo \think\Session::get('user.p'); ?></span>
                    <span class="logout">退出</span>
                    <?php else: ?>
                    <img src="/static/home/imgs/icon-5.png" alt="">
                    <span class="register">注册/登录</span>
                    <?php endif; ?>
                <p>购房热线  &nbsp;0571-82576775</p>
            </div>
            
            
        </nav>
        <div class="search visible-md-block visible-lg-block">
                <div class="box">
                    <div class="top">
                        <img src="/static/home/imgs/logo2.png" alt="">
                        <p><i><?php if(\think\Cookie::get('cityname')): ?> <?php echo \think\Cookie::get('cityname'); else: ?>杭州<?php endif; ?></i><img src="/static/home/imgs/triangle.png" alt=""></p>
                         <form id="bname" style="display: initial" action="<?php echo url('home/search/index',['type'=>0]); ?>" method="post">
                        <input type="text" name="name" placeholder="请输入楼盘名称、地域">
                        <span id="find"><img src="/static/home/imgs/icon-8.png">我要找房</span>
                        </form>
                    </div>
                    <div class="bottom">
                        <span class="active" data-v="m">买房<i></i></span>
                        <span data-v="t">投资<i></i></span>
                        <span data-v="d">贷款<i></i></span>
                    </div>
                </div>
        </div>
        <div class="questions visible-md-block visible-lg-block">
            <div class="box">
                <div class="col-lg-10">
                   <div class="m">
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">买新房什么时候网签?</h6>
                            <p>新房网签的时间节点，是在购房者做完购房资格核验之后，到售楼处完成网签。购房资格核验通过的，才能进行网签，核验没有通过的，无法进行网签。购房资格核验结果的有效期为30天，决定哪天网签，要看认购书中约定的最终签约日期，在最终签约日期之前进行网签即可。</p>
                        </div>
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">网签时注意事项有哪些?</h6>
                            <p>1、网签时一定要审查开发商是否具有商品房预售许可证，有了预售证，则通常开发商也具有了土地使用证、规划许可证、建设工程许可证等。这是买房能否办房产证的关键。2、网签时一定要采用房地产管理部门统一印制的标准房屋买卖合同文本，并按照文本中所列条款逐条逐项填写，千万不能马虎。3、网签时一定要注意合同条款中双方所填写的内容中权利与义务是否对等。4、面积确认及面积差异处理。如果选择按套内建筑面积为依据进行面积确认及面积差异处理时，应当在“面积差异处理”条款中明确面积发生误差时的处理方式。5、网签时一定要认准交房日期是否确定。资金不足而延期交房是常有的事，开发商在预售合同上往往大做文章，如只注明竣工日期，而不注明交付使用日期；运用“水电气安装后、质量验收合格后、小区配套完成后”等一些模糊语言。对此，购房者在签订网签合同时，一定要将交房日期明白无误地规定为“某年某月某日”，并注明开发商不能按时交房所需承担的责任。</p>
                        </div>
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">顶楼的房屋有哪些优点?</h6>
                            <p>（1）采光好，通风好。居住在顶楼，很少受到周围建筑物遮挡，光线充足，即使是阴雨天气家里也很亮堂，且通风效果好，夏天开窗即可享受凉爽穿堂风。（2）视野开阔。居住在顶楼，享有最广阔的视野，一览众山小，心情也会随之变好。（3）安静，私密性好。居住在顶楼，没有楼上住户的干扰，也不会有上下楼居民的穿行，安静且私密性好，楼道卫生也容易保持。（4）安全系数高。居住顶楼不易遭受盗窃，相对安全。（5）价格低。同楼座同户型的房屋，顶楼的价格要低一些，满足了一部分资金紧张的购房者的需求。</p>
                        </div>
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">底楼有哪些优点?</h6>
                            <p>（1）出入方便。一楼的房子接地气，出入方便，尤其适合老人或有孩子的家庭，无需担心爬楼的劳累，遇到特殊情况也更加方便逃生。（2）水压稳定。住在底楼不会出现供水不足水流过小的问题，只要不是集中供水停止，家庭用水都会保持顺畅。（3）部分底楼带院子。部分小区规划时在底楼设计了院落，这使得底楼的房屋获得了一个得天独厚的优势条件，在喧嚣繁忙的城市中拥有一处可供自己分配的小院，多了很多生活乐趣。</p>
                        </div>
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">公摊系数怎么看?</h6>
                            <p> 一般情况下，开发商不会直接公示公摊系数，购房者需要自己根据公摊面积及套内建筑面积进行计算。获得公摊面积的方法有两种，一是直接询问销售人员，二是在北京市住房和城乡建设委员会的网站上，查询下面具体信息。第二种方法的可信度较高，但需要注意的是，期房楼盘与现房楼盘的数据准确度相比，期房数据与后期收房时数据或有所出入。公摊面积=建筑面积-套内建筑面积，由这两个数值计算得出公摊面积。</p>
                        </div>
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">公摊系数怎么算?</h6>
                            <p>每一栋楼的公摊系数数值都不同，但同一栋楼中每户的公摊系数相同。公摊面积、套内建筑面积对公摊系数都有影响。计算公摊系数需要用的两个公式：公摊面积=建筑面积-套内建筑面积 公摊系数=公摊面积/套内建筑面积;举例：一栋建筑面积211.89㎡，套内建筑面积176.65㎡的房子，公摊系数是多少？公摊面积=211.89㎡-176.65㎡=35.24㎡，公摊系数=35.24㎡/176.65㎡=19.9%</p>
                        </div>
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">公摊系数对我有什么影响?</h6>
                            <p> 公摊系数是衡量舒适度的参考指标之一，如果公摊系数越大，则套内建筑面积越小，房屋购买价值越低。公摊系数过小，则会影响购房者的居住舒适度。在一栋楼总建筑面积一定的情况下，开发商增加套内建筑面积，势必要压缩公摊面积，如果公摊面积过小，则公摊系数越小，则公共空间例如楼梯、电梯、大堂等公共面积也会变小，居住的舒适度会打折扣。若公摊系数越大，公摊面积大，套内建筑面积越小，可供购房者实际使用的面积缩小，居住舒适度同样会被打折。</p>
                        </div>
                    </div>
                    <div class="t">
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">买卖二手住宅要交哪些税？</h6>
                            <p>根据当地税务部门的规定，每套房子的面积、“是否首套”、产权取得的时间、房屋权属等不同，要交的税又不尽相同。因此，一定要弄清楚如下4件事，它们会大大影响购房者要交的税额。一、到底按照什么缴税？不一定是成交价，而是“成交价”或者是杭州农税征收管理局的“核定价”。二、所有的住宅出售都需要缴增值税？以房屋契税缴纳时间为起始，满2年免缴，未满2年全额征收。三、所有的住宅出售都需要缴“个税”？一套二手房出售时，为家庭 “满五年且唯一住房”时，免征个税。四、所有性质的住宅都可以出售？不是，如未取得完整产权的经济适用房、查封冻结的房屋不能出售。</p>
                        </div>
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">房子贷款未还清 要上市交易怎么办？</h6>
                            <p>从原则上来讲，有贷款房子还处于抵押状态，是不能上市进行交易的。但是，从实际操作中来说，我们可以通过一些方法来实现有贷款的房子的出售。一、所剩贷款金额不高这种情况，卖家可以用买方的首付款来付清剩余贷款。一般二手房交易房子的首付可以在房产总成交额的30%至40%这个范围，那么在贷款金额所剩不多的情况下，卖家可以充分的利用买方的首付款来将剩余的房贷还清，然后到银行等相关部门撤销房产的抵押登记，从而进行下一步的买卖交易。这是最常见、最方便，同时也是最安全的交易办法。二、所剩贷款金额较多 转按揭是指在借款人出售作为抵押物的房屋，经贷款银行同意，由房屋的购买人继续偿还出售人未到期的贷款。也就是说出售若想有贷款的房子，需要将房子的按揭转给买方，让买方继续偿还卖方的按揭贷款。二手房市场存在同行转按揭和跨行转按揭两种情况。由于买方的资信状况贷款意愿、月供能力、购房资金安排不尽相同，在转按揭的同时，买方可以根据自身需求申请不同的贷款期限、贷款金额和还款方式。但是这种方法在使用中会受到限制，很多银行的政策对于转按揭办理不尽相同，实际操作中也会少有银行能够办理转按揭业务，因此，这种方法能够使用的人很少。2. 向银行申请抵押贷款来还清剩余房贷 简单来说，就是通过银行贷款来缴清剩余的房贷。卖家可以根据自己的实际情况，用名下的其他抵押物向银行申请抵押贷款，从而结清房子的按揭贷款。等买家支付放款后再来将银行的抵押贷款还清。这种方法操作起来会有些麻烦，但是对于想要出售有贷款房子的卖家来说，也是可行的方法。</p>
                        </div>
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">怎么给未成年子女房产办理过户？</h6>
                            <p>法律并没有规定拥有房产证的年龄，因此，未成年人是可以作为房屋产权人的，并且可以登记在不动产簿上。那有哪些办法过户呢？如果说家长不采取过户的形式，而是用赠与的方式把房子赠送给自己的子女。虽然是可以免交一些税费的，但是以后如果这套房子要转让的话，它原始取得价会是零，在办理过户时，会以房子当时的市值来征收相应的税费，比起过户费来要高出很多。未成年人能够作为产权人购买房产，但是购房整个过程中需要办理的手续应当有法定代理人代为办理，在未成年人不够18周岁之前是不能单独处置该房产的，若未成年人出现房屋转让、出租和抵押等行为，应在法定代理人的同意下，代为行使。未成年人满18周岁后，即可单独使用房产的相关权利。</p>
                        </div>
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">为防过不了户，买房前应做些什么准备？</h6>
                            <p>◐ 在签订二手房买卖合同并向房地产交易登记管理部门申请过户登记前，购房者应亲自或委托房产中介机构到房屋所在地的公安机关进行核实。◐ 有的出售方承诺没有户口，但仍应到公安机关核实。这样做除了核实出售方承诺的真实性以外，还可以防止有其他人的户口仍未迁走，比如出售方以前购房时的上家户口等。◐ 委托中介代为核实的，如核实结果表明有户口的，应在房屋买卖合同中设定户口迁移条款以及违约责任条款和司法救济条款。◐ 如上家有户口在所出售的房屋当中，约定户口迁移条款应注意三方面：首要，应要求出售方在申请过户登记前的特定期限内将户口迁出，而不能约定在申请过户登记之后。其次，，应约定具体的违约责任。比如，每逾期一天的罚金；在逾期多少时间后，可以解除合同以及合同解除的赔偿金等。再次，，如出售方提出在交易完成后的一定期限内将户口迁出的话，购买方要审慎决定是否要接受这样的交易条件。二手房户口迁移问题虽可协商解决，但买家仍需留心眼。在购买二手房时应在派出所落实好户口信息后，再签合同。如果买家希望卖家将户口迁走，可在购房时，制定完备的户口迁移条款，并预留购房尾款，以确保户口按期迁出。</p>
                        </div>
                    </div>
                    <div class="d">
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">在杭州公积金贷款面签买方需要带哪些材料?</h6>
                            <p>杭州市公积金（简称“市公”）：未婚：身份证、户口本、本人填写《单身具结书》、查档证明（开具公积金缴存地和购房所在地的查档证明）、与公积金缴存单位一致的收入证明、银行流水、首付款凭证、申请银行的银行卡。已婚：夫妻双方身份证、结婚证、家庭户口本（包括未成年子女）、查档证明（开具公积金缴存地和购房所在地的查档证明）、与公积金缴存单位一致的收入证明、银行流水、首付款凭证、申请银行的银行卡。浙江省公积金（简称“省公”）：未婚：身份证、户口本、本人填写《单身具结书》、查档证明（开具公积金缴存地和大杭州范围的查档证明）、与公积金缴存单位一致的收入证明、银行流水、首付款凭证、申请银行的银行卡。已婚：夫妻双方身份证、结婚证、家庭户口本（包括未成年子女）、查档证明（开具公积金缴存地和大杭州范围的查档证明）、与公积金缴存单位一致的收入证明、银行流水、首付款凭证、申请银行的银行卡。</p>
                        </div>
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">什么时候能拿到购房发票?</h6>
                            <p>在付完首付款之后，开发商都会给购房者开一个首付款收据。等购房者从银行办理完购房贷款之后，开发商会给购房者开一个全款发票，也称不动产发票。购房发票的专业解释是专门用于销售房屋、建筑物这些业务使用的，新房由开发商开具，二手房是由房地产交易中心开具的地税部门发票，即不动产发票。</p>
                        </div>
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">弄丢购房发票会有什么影响?</h6>
                            <p>在付完首付款之后，开发商都会给购房者开一个首付款收据。等购房者从银行办理完购房贷款之后，开发商会给购房者开一个全款发票，也称不动产发票。购房发票的专业解释是专门用于销售房屋、建筑物这些业务使用的，新房由开发商开具，二手房是由房地产交易中心开具的地税部门发票，即不动产发票。</p>
                        </div>
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">遇到开发商不开发票怎么办?</h6>
                            <p>购房发票是很重要，但是有些开发商为了逃税避税就不给购房者开发票。如果遇到开发商迟迟不开购房发票，购房者可以向他们索要 ，因为有法律支持。依据《中华人民共和国发票管理办法》规定，所有单位和从事生产、经营活动的个人在购买商品、接受服务以及从事其他经营活动支付款项，应当向收款方取得发票。如果开发商没有如实开具发票，购房者可带上购房合同、银行按揭合同（如有贷款）、开发商收款收据或首付款发票到当地主管税务机关举报。《中华人民共和国发票管理办法》规定，开发商未按规定开具发票的，可由税务机关责令改正并对其给予10000元以下的处罚。资料来源：《中华人民共和国发票管理办法》</p>
                        </div>
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">二手房房贷没有办下来 能解除合同吗？</h6>
                            <p>首先需要看一下《购房合同》中，是否有关于贷款的明确规定，“因乙方自身原因未获得银行或公积金管理中心批准的，双方同意合同终止，乙方支付的定金和房价款如数返还，双方互不承担违约责任，申办贷款过程中发生的各项费用由乙方承担。”若有此条文，可以找到卖房人要求终止合同，退还定金和房款；若无此条文，可按照合同条款，确定是否构成违约，违约责任是什么。</p>
                        </div>
                        <div class="row">
                            <h6><img src="/static/home/imgs/wen.png">组合贷款的流程是什么？</h6>
                            <p>借款申请人需分别向住房公积金管理中心和银行提出书面贷款申请，并提交有关资料。借款申请人获得公积金个人住房贷款额度之后，持公积金管理部门出具的《公积金个人住房贷款委托通知单》，向贷款银行申请组合贷款（公积金个人住房贷款和自营性个人住房贷款）。客户在接到银行同意贷款的通知后，需与贷款银行就公积金个人住房贷款和自营性个人住房贷款分别签订借款合同和担保合同。签订合同后，应根据国家和当地的法律法规，办理抵押登记、保险及其他必须的手续，抵押登记与保险费用由借款人负担，抵押期间保险单正本由贷款银行保管。选用委托扣除款方式还款的客户在贷款银行开立还款专用的储蓄存折账户或储蓄卡、信用卡账户。同时，售房人要在贷款银行开立存款专户。借款人在银行营业会计前台，分别填制公积金个人住房贷款和自营性个人住房贷款的"贷转存凭证"，贷款银行按照借款合同约定，将贷款直接转入借款人在贷款银行开立的存款账户内，或将贷款一次或分次划入售房人在贷款银行开立的存款账户内。借款人按借款合同约定的还款计划和还款方式，按期归还公积金个人住房贷款和银行自营性个人住房贷款。目前还款方式有委托银行扣款和柜面还款两种。</p>
                        </div>
                        
                    </div>                    
                </div>
                <div class="col-lg-2">
                    <div class="peo">
                        <img src="/static/home/imgs/people.png" alt="">
                        <h6>张甜馨</h6>
                        <p>职业顾问</p>
                        <p>咨询人数：<span>301</span></p>
                        <button class="req">向他咨询</button>
                    </div>
                    <div class="peo">
                        <img src="/static/home/imgs/r1.png" alt="">
                        <h6>李盛斌</h6>
                        <p>职业顾问</p>
                        <p>咨询人数：<span>266</span></p>
                        <button class="req">向他咨询</button>
                    </div>
                    <div class="peo">
                        <img src="/static/home/imgs/r2.png" alt="">
                        <h6>赵凯</h6>
                        <p>职业顾问</p>
                        <p>咨询人数：<span>411</span></p>
                        <button class="req">向他咨询</button>
                    </div>
                </div>
            </div>
        </div>
	<div class="tan visible-md-block visible-lg-block">
            <div class="zhao"></div>
            <div class="login ts">
                <div class="t-top">
                    <h6>登录/注册</h6>
                    <p>若是没有注册过，首次将自动注册登录</p>
                    <img id="l-esc" src="/static/home/imgs/xx.png" alt="">
                </div>
                <div class="t-bottom">
                    <input class="l-p" type="text" placeholder="请输入手机号">
                    <input class="l-c" type="text" placeholder="请输入验证码">
                    <span class="m-get">获取验证码</span>
                    <button class="m-btn">确定</button>
                </div>
            </div>
	   <div class="weiter ts">
                <div class="t-top">
                    <h6>专业服务</h6>
                    <p>一键订阅，享受最专业的服务！</p>
                    <img id="w-esc" src="/static/home/imgs/xx.png" alt="">
                </div>
                <div class="t-bottom">
                    <input class="l-p" type="text" placeholder="请输入手机号">
                    <input class="l-c" type="text" placeholder="姓名">
                    <input type="hidden" value="专业服务">
                    <input type="hidden" name="building_name" value="买房指南">
                    <button class="port1">确定</button>
                </div>
            </div>
            <div class="succ">
                <div class="t-top">
                    <img id="s_esc" src="/static/home/imgs/m-esc.png" alt="">
                    <img class="gou" src="/static/home/imgs/gou.png" alt="">
                </div>
                <div class="t-bottom">
                    <p id="txt">132133</p>
                    <button class="s-btn">确定</button>
                </div>
            </div>
        </div>
        <footer class="container-fluid visible-md-block visible-lg-block">
            <ul class="footer-top">                                  
                <a href="<?php echo url('home/user/lian'); ?>"><li>联系我们</li></a>
                <a href="<?php echo url('home/user/guan'); ?>"><li>关于家园</li></a>
                <a href="<?php echo url('home/news/index'); ?>"><li>楼盘资讯</li></a>
                <a href="<?php echo url('home/search/index',['type'=>0]); ?>"><li>楼盘查询</li></a>
                <a href="<?php echo url('home/index/buy'); ?>"><li>买房指南</li></a>
                <a href="<?php echo url('home/search/tuan',['type'=>0]); ?>"><li>团购优惠</li></a>
            </ul>
                <div class="footer-line"></div>
                <p>购房热线  &nbsp;0571-82576775</p>
                
                <span>Copyright © 2017 - 2022 杭州亚汉网络有限公司有限公司版权所有 浙ICP备18057005号 </span>
        </footer>
    </div>


    <!-- yidong -->
    <div class="container-fluid m">
        <div class="visible-xs-block .visible-sm-block m-top">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>买房指南</h3>
        </div>
        <div class="m-content visible-xs-block .visible-sm-block">
            <h4>金牌置业顾问</h4>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/static/home/imgs/people.png" alt="家园新房">
                        <p class="m-one">张甜馨</p>
                        <p class="m-two">置业顾问</p>
                        <p class="m-three">139****3671</p>
                        <a class="m-wen" href="#">向他咨询</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="/static/home/imgs/r1.png" alt="家园新房">
                        <p class="m-one">李盛斌</p>
                        <p class="m-two">置业顾问</p>
                        <p class="m-three">139****3671</p>
                        <a class="m-wen" href="#">向他咨询</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="/static/home/imgs/r2.png" alt="家园新房">
                        <p class="m-one">赵凯</p>
                        <p class="m-two">置业顾问</p>
                        <p class="m-three">139****3671</p>
                        <a class="m-wen" href="#">向他咨询</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="/static/home/imgs/r3.png" alt="家园新房">
                        <p class="m-one">叶佳美</p>
                        <p class="m-two">置业顾问</p>
                        <p class="m-three">139****3671</p>
                        <a class="m-wen" href="#">向他咨询</a>
                    </div>
                </div>
            </div>
            <div class="m-wen">
                <div class="m-w-top">
                    <span class="m-active">买房</span>
                    <span>投资</span>
                    <span>贷款</span>
                </div>
            </div>
        </div>
        <div class="m-list visible-xs-block .visible-sm-block">
            <div class="m-l">
                <h5><img src="/static/home/imgs/wen.png">现在外地人在杭州买房需要什么条件?</h5>
                <p>
                        纳税或社保连年，需要连续足额缴存24个月，纳税或社保连年，需要连续足额缴存24个月
                </p>
            </div>
            <div class="m-l">
                <h5><img src="/static/home/imgs/wen.png">我和男朋友还没领证，买房可以写两个人名字吗？</h5>
                <p>
                        可以写两个人的名字前提是你们两个人都有购房资质，如果是已经结婚领了证那么就是以家庭为单位只要家庭中有一人有购房资质就是可以买房且可以写两个人的名字的。因为两个人没有领证所以要求两个人都要满足杭州市购房要求才可以写两个人的名字。                </p>
            </div>
            <div class="m-l">
                <h5><img src="/static/home/imgs/wen.png">你好，已经交了定金，觉得房子不好了，还可以退吗？</h5>
                <p>
                        一般情况下，交付定金方违约的，无权要求对方返还定金，但有例外情况。

重要参考依据：合同法 第一百一十五条 当事人可以依照《中华人民共和国担保法》约定一方向对方给付定金作为债权的担保。债务人履行债务后，定金应当抵作价款或者收回。给付定金的一方不履行约定的债务的，无权要求返还定金；收受定金的一方不履行约定的债务的，应当双倍返还定金。　　第一百一十六条 当事人既约定违约金，又约定定金的，一方违约时，对方可以选择适用违约金或者定金条款。　　第一百一十七条 因不可抗力不能履行合同的，根据不可抗力的影响，部分或者全部免除责任，但法律另有规定的除外。当事人迟延履行后发生不可抗力的，不能免除责任。　　本法所称不可抗力，是指不能预见、不能避免并不能克服的客观情况。　　第一百一十八条 当事人一方因不可抗力不能履行合同的，应当及时通知对方，以减轻可能给对方造成的损失，并应当在合理期限内提供证明。　　第一百一十九条 当事人一方违约后，对方应当采取适当措施防止损失的扩大；没有采取适当措施致使损失扩大的，不得就扩大的损失要求赔偿。　　当事人因防止损失扩大而支出的合理费用，由违约方承担。                </p>
            </div>
            <div class="m-l">
                <h5><img src="/static/home/imgs/wen.png">房子产权到期了怎么办？</h5>
                <p>
                        按照新颁布的《物权法》一百四十九条规定：“住宅建设用地使用权期限届满的，自动续期。”《城市房地产管理法》第二十一条规定：“土地使用权出让合同约定的使用年限届满，土地使用者需要继续使用土地的，应当于届满前一年申请续期，除根据社会公共利益需要收回该幅土地的，应当予以批准。经批准予以续期的，应当重新签订合同，并交付土地使用权出让金。土地使用权出让合同约定的使用年限届满，土地使用者未申请续期或者虽申请续期但依照前款规定未获批准的，土地使用权由国家无偿收回。”                </p>
            </div>
            <div class="m-l">
                <h5><img src="/static/home/imgs/wen.png">公积金贷款买房，夫妻能不能以个人名义按揭购买？
</h5>
                <p>
                        您好，根据您所述的情况这是不可以的。若是公积金贷款买房，需要夫妻双方两个人的名义去公积金中心或公积金委贷银行签署借款合同，房屋买卖合同也须是夫妻双方的名义。                </p>
            </div>
            <div class="m-c-content">
                <h5>专业服务</h5>
                <img id="m_esc" src="/static/home/imgs/m-esc.png" alt="">
                <p>一键订阅，享受最专业的服务！</p>
                    <input type="text" placeholder="请输入手机号">
                    <input type="name" placeholder="请输入姓名">
                    <input type="hidden" name="type" value="专业服务">
                <input type="hidden" name="building_name" value="买房指南">
                <button class="m-c-port1">确定</button>
            </div>
            <div class="m-chang"></div>
            <div class="m-o-succ">
                <img class="o-esc" src="/static/home/imgs/m-esc.png" alt="">
                <img src="/static/home/imgs/m-success.png" alt="" class="o-success">
                <p id="o_p">已成功订阅最新动态，我们会第一时间通过短信通知您！</p>
                <button id="o_btn">确定</button>
            </div>
        </div>
    </div>

    <script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script>
    <script>
$('#find').on('click',function(){
                $('#bname').submit();
            })
            
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 20,
            centeredSlides: true,
            pagination: {
                clickable: true,
            },
        });
        $(document).ready(function(){
	$('.user').on('click',function(){
                    window.location.href="<?php echo url('home/user/zu'); ?>";
                })
	$('.req').on('click',function(){
                $('.weiter').show(150);
                $('.zhao').show();
            })
            $('#w-esc').on('click',function(){
                $('.weiter').hide();
                $('.zhao').hide();
            })
            $('#s_esc').on('click',function(){
                $('.succ').hide();
                $('.zhao').hide();
            })
            $('.s-btn').on('click',function(){
                $('.succ').hide();
                $('.zhao').hide();
            })
            $('.port1').on('click',function(){
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
                    'building_name':building_name
                }
                var that=$(this)
                $.post(
                    "<?php echo url('home/content/port1'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            that.parent().parent().hide();
                                $('#txt').text('已成功订购服务，我们会第一时间通过电话联系您');
                                $('.succ').show();
                        }
                    },
                    'json'
                )
            })
	$('.bottom span').on('click',function(){
                var type=$(this).attr('data-v');
                if(type=='m'){
                    $('.m').show();
                    $('.d').hide();
                    $('.t').hide();
                }else if(type=="d"){
                    $('.d').show();
                    $('.m').hide();
                    $('.t').hide();
                }else if(type=="t"){
                    $('.t').show();
                    $('.d').hide();
                    $('.m').hide();
                }
                $(this).addClass('active').siblings('span').removeClass('active');
            })
	$('#l-esc').on('click',function(){
                $('.login').hide();
                $('.zhao').hide();
                })
            $('.zhao').on('click',function(){
                $(this).hide();
                $('.login').hide();
	       $('.weiter').hide();
            })
            $('.register').on('click',function(){
                $('.zhao').show();
                $('.login').show(150);
            })
            $('.m-get').on('click',function(){
                var phone=$(this).prev().prev().val();
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
						$('.m-get').html('重新发送' + time + 's');
                        $('.m-get').attr('disabled', true);
					} else {
						clearInterval(interval);
						$('.m-get').html('获取验证码');
						$('.m-get').attr('disabled', false);
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
                            
                        }else{
                            alert(res.msg);
                        }
                    },
                    'json'
                )
            })
            $('.m-btn').on('click',function(){
                var phone=$(this).prev().prev().prev().val();
                var code=$(this).prev().prev().val();
                var data={'phone':phone,'code':code};
                $.post(
                    "<?php echo url('home/user/log'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            window.location.href="<?php echo url('home/index/index'); ?>";
                        }else{
                            alert(res.msg);
                        }
                    }
                )
            })
            $('.logout').on('click',function(){
                window.location.href="<?php echo url('home/user/logout'); ?>";
            })
            var h=$(document).height();
            $('.zhao').css('height',h);



            $('.o-esc').on('click',function(){
                $('.m-o-succ').hide();
                $('.m-chang').hide();
            })
            $('#o_btn').on('click',function(){
                $('.m-o-succ').hide();
                $('.m-chang').hide();
            })
            $('.m-w-top span').on('click',function(){
                $(this).addClass('m-active').siblings('span').removeClass('m-active');
            })
            $('.m-wen').on('click',function(){
                $('.m-chang').show();
                $('.m-c-content').show(200);
            })
            $('.m-chang').on('click',function(){
                $(this).hide();
                $('.m-c-content').hide();
            })
            $('#m_esc').on('click',function(){
                $('.m-c-content').hide();
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
                var data={
                    'phone':tel,
                    'type':type,
                    'name':name,
                    'building_name':building_name
                }
                var that=$(this)
                $.post(
                    "<?php echo url('home/content/port1'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            that.parent().hide();
                                $('#o_p').text('已成功订购服务，我们会第一时间通过电话联系您');
                                $('.m-o-succ').show();
                        }
                    },
                    'json'
                )
            })
        })
    </script>
</body>
</html>