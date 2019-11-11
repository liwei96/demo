<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpstudy_pro\WWW\tp2\public/../application/home\view\content\lpic.html";i:1573197966;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>楼盘相册</title>
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
                body{
                    background-color: #000;
                }





        /* m */
        .m{
                    padding:0;
                }
                .m-title{
                    position: relative;
                    width:100%;
                    height:44px;
                    text-align: right;
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
                    color:#fff;
                    font-size: 18px;
                    margin:0;
                    font-weight: bold;
                    line-height: 44px;
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
        
    </div>


    <script>
        $(document).ready(function(){
            
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
                    'building_name':building_name,
		  
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