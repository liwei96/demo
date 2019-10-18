<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\php\PHPTutorial\WWW\tp\public/../application/home\view\content\hus.html";i:1564976755;}*/ ?>
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
                /* m-hu */
.m-hu {
    /* padding-bottom: 20px; */
}

.m-hu h3 {
    color: #404040;
    font-size: 16px;
    margin: 25px 0 25px 4%;
    font-weight: bold;
}

.m-hu h3 span{
    color: #898989;
    font-size: 14px;
    float: right;
    margin-right: 3%;
    font-weight: normal;
}
.m-hu h3 span img{
    width:17%;
    margin-left:7%;
}
.m-hu .h-c{
    height: 152px;
    border-bottom: 0.5px solid #F2F2F2;
    padding: 12px 0;
    margin: 0 4%;
}
.m-hu .h-c .h-c-i{
    margin-bottom: 18px;
    padding-left:0;
}
.m-hu .h-c .h-c-i img{
    width:100%;
}
.m-hu .h-c .h-c-c{
    padding-left:0;
    margin-bottom: 20px;
    padding-right:0;
}
.m-hu .h-c .h-c-c .h-t{
    margin-bottom: 20px;
    margin-top:8px;
}
.m-hu .h-c .h-c-c .h-t h4{
    font-size: 15px;
    color:#333333;
    display: inline;
}
.m-hu .h-c .h-c-c .h-t .h-t-z{
    font-size: 12px;
    color:#fff;
    padding:0.5% 3%;
    background-color: #2DC45A;
    margin-left:2%;
}
.m-hu .h-c .h-c-c .h-t .h-t-m{
    font-size: 12px;
    color:#FF7F7F;
    float: right;
    margin-right:4%;
}
.m-hu .h-c .h-c-c .h-t .h-t-m i{
    font-size: 18px;
    font-style:normal;
}
.m-hu .h-c .h-c-c .sp{
    font-size: 12px;
    color:#808080;
    margin-bottom: 12px;
    height: 15px;
    overflow: hidden;
}
.m-hu .h-c .h-c-c .sp-f{
    overflow: hidden;
    text-overflow:ellipsis;
    white-space: nowrap;
}


        

   

    </style>
</head>
<body>
    

    
                            

    <!-- shou    -->
    <div class="container-fluid m">
        <div class="m-title visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>更多户型</h3>
        </div>
        <div class="m-hu visible-xs-block .visible-sm-block">
            <?php foreach($hus as $v): ?>
            <div class="h-c">
                    <a href="<?php echo url('home/content/hu',['id'=>$v['id'],'bid'=>$id]); ?>">
                <div class="col-xs-4 h-c-i">
                    
                        <img src="<?php echo $v['h_small']; ?>" alt="">
                    
                </div>
                <div class="col-xs-8 h-c-c">
                    <div class="h-t">
                        <h4><?php echo $v['content']; ?></h4>
                        <span class="h-t-z">在售</span>
                        <span class="h-t-m"><i><?php echo $v['jia']; ?></i>万起</span>
                    </div>
                    <div class="sp">特点：<?php echo $v['te']; ?></div>
                    <div class="sp">类型：<?php echo $v['lei']; ?></div>
                    <div class="sp sp-f">户型分析：<?php echo $v['fen']; ?></div>
                </div>
            </a>
            </div>
            <?php endforeach; ?>
            
        </div>
        
    </div>


    <script>
        $(document).ready(function(){
            var h=$('.h-c-c').height();
            $('.h-c-i img').css('height',h+"px");
        })
    </script>
</body>
</html>