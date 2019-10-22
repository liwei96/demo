<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpstudy_pro\WWW\tp2\public/../application/home\view\content\ping.html";i:1564737975;}*/ ?>
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
        
                .m-dian h4{
    font-size: 16px;
    color:#333333;
    margin-left:4%;
    margin-top: 22px;
    font-weight: bold;
    margin-bottom: 20px;
}
.m-dian h4 span{
    float: right;
    font-size: 14px;
    color:#898989;
    font-weight: 500;
}
.m-dian h4 span img{
    width:20%;
    margin-left:4%;
}
.m-dian .m-ping{
    margin-left:4%;
    margin-right:4%;
    margin-top:15px;
    margin-bottom: 15px;
    border-bottom: 0.5px solid #F2F2F2;
}
.m-dian .m-ping .m-p-t{
    position: relative;
}
.m-dian .m-ping .m-p-t .p-t-img{
    width:9.6%;
    margin-right:0.8%;
}
.m-dian .m-ping .m-p-t .p-t-user .t-u-tel{
    color:#333333;
    font-size: 12px;
    font-weight: bold;
}
.m-dian .m-ping .m-p-t .p-t-user{
    display: inline-block;
    position: absolute;
    left:14%;
}
.m-dian .m-ping .m-p-t .p-t-user p{
    margin:0;
}
.m-dian .m-ping .m-p-t .p-t-user .t-u-time{
    color:#999999;
    font-size: 10px;
}
.m-dian .m-ping .m-p-t span{
    float:right;
    font-size: 12px;
    color:#666666;
}
.m-dian .m-ping .m-p-t span img{
    width:32%;
    margin-right:12%;
}
.m-dian .m-ping .m-p-p{
    font-size: 15px;
    color:#999999;
    line-height: 22px;
    padding-left:13%;
}
      



   

    </style>
</head>
<body>
    

    
                            

    <!-- shou    -->
    <div class="container-fluid m">
        <div class="m-title visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>更多评论</h3>
        </div>
        <div class="m-content visible-xs-block .visible-sm-block">
            <div class="m-dian">
                <?php foreach($data as $v): ?>
                <div class="m-ping">
                    <div class="m-p-t">
                        <img class="p-t-img" src="/static/home/imgs/Mine.png" alt="">
                        <div class="p-t-user">
                            <p class="t-u-tel"><?php echo $v['tel']; ?></p>
                            <p class="t-u-time"><?php echo $v['create_time']; ?></p>
                        </div>
                        <span class="cnm"><input type="hidden" value="<?php echo $v['id']; ?>"><img class="p-t-g" data-v="<?php echo $v['num']; ?>" src="/static/home/imgs/good.png" alt=""><i style="font-style:normal"><?php echo $v['num']; ?></i></span>
                    </div>
                    <p class="m-p-p"><?php echo $v['content']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function(){
            var cnm=1;
            $('.p-t-g').on('click',function(){
                var id=$(this).prev().val();
                var num=$(this).attr('data-v');
                num=parseInt(num);
                var that=$(this);
                if(cnm==1){
                    $.post(
                    "<?php echo url('home/content/num'); ?>",
                    {'type':1,'id':id,'num':num},
                    
                    function(res){
                        if(res.code==200){
                            that.attr('src','/static/home/imgs/gooded.png');
                            that.next().html((num+1));
                            that.attr('data-v',(num+1));
                            cnm=0;
                            }
                        }
                    )
                }else if(cnm==0){
                    $.post(
                    "<?php echo url('home/content/num'); ?>",
                    {'type':2,'id':id,'num':num},
                    
                    function(res){
                        if(res.code==200){
                            that.attr('src','/static/home/imgs/good.png');
                            that.next().html((num-1));
                            that.attr('data-v',(num-1));
                            cnm=1;
                            }
                        }
                    )
                }
                
            })
	   
        })
    </script>
</body>
</html>