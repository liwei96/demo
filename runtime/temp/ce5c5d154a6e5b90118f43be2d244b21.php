<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpstudy_pro\WWW\tp2\public/../application/home\view\index\liu.html";i:1566373798;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言提问</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style>
        .m {
            padding: 0;
        }

        .m-top {
            width: 100%;
            position: fixed;
            top: 0;
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

        .m-top .m-go {
            left: 5%;
        }

        .m-top h3 {
            color: #333333;
            font-size: 18px;
            margin: 0;
            height: 100%;
            line-height: 43px;
            font-weight: bold;
        }

        .m-liu img{
            width:100%;
            margin-bottom: 10px;
            margin-top:44px;
        }
        .m-liu h5{
            color:#333333;
            font-size: 15px;
            margin-top:30px;
            margin-bottom: 10px;
            left:4%;
            margin-left:4%;
        }
        .m-liu input{
            margin:0 4%;
            background-color: #F7F7F7;
            height: 39px;
            padding:12px;
            width:92%;
            border: 0;
        }
        .m-liu textarea{
            background-color: #F7F7F7;
            margin:0 4%;
            padding:12px;
            height:150px;
            width:92%;
            border: 0;
        }
        .m-liu button{
            margin-top:39px;
            margin-left:4%;
            width:92%;
            height:40px;
            border-radius: 3px;
            color:#fff;
            text-align: center;
            line-height: 40px;
            border:0;
            background-color: #2DC45A;
        }

        ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
            color:    #999999;
            font-size: 15px;
        }
        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
        color:    #999999;
        font-size: 15px;
        }
        ::-moz-placeholder { /* Mozilla Firefox 19+ */
        color:    #999999;
        font-size: 15px;
        }
        :-ms-input-placeholder { /* Internet Explorer 10-11 */
        color:    #999999;
        font-size: 15px;
        }
        
        

        .m-chang{
            display: none;
            position: fixed;
            top: 0;
            width: 100%;
            height: 1000px;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1000;
        }
        .m-success{
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
    margin-top:0;
    margin-left:0;
}


    </style>
</head>

<body>




    <div class="container-fluid m">
        <div class="visible-xs-block .visible-sm-block m-top">
            <img class="m-go" src="/static/home/imgs/return.png" alt="" onClick="javascript:history.go(-1)">
            <h3>留言提问</h3>
        </div>
        <div class="m-liu visible-xs-block .visible-sm-block">
            <img src="/static/home/imgs/lt.png" alt="">
            <h5>电话</h5>
           <input class="tel" type="text" placeholder="输入您的手机号码">
           <h5>留言</h5>
           <textarea name="" id="" cols="30" rows="10" placeholder="输入您的问题"></textarea>
           <button id="btn" data-v="<?php echo $id; ?>">提交</button>
        </div>
        <div class="m-liu visible-xs-block .visible-sm-block">
            <div class="m-chang"></div>
            <div class="m-o-succ">
                <img class="o-esc" src="/static/home/imgs/m-esc.png" alt="">
                <img src="/static/home/imgs/m-success.png" alt="" class="o-success">
                <p id="o_p">已成功提交问题，我们会第一时间完善改进！</p>
                <button id="o_btn">确定</button>
            </div>
        </div>
    </div>
</body>

</html>
<script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#btn').on('click',function(){
            var input=$('input').val();
	    var name=$(this).attr('data-v');
            var text=$('textarea').val();
            $.post(
                "<?php echo url('home/index/liuget'); ?>",
                {'tel':input,'content':text,'name':name},
                function(res){
                    if(res.code==200){
                        $('.m-chang').show();
                        $('.m-o-succ').show(300);
                    }else if(res.code==10001){
                        $('input').val('');
                        $('input').attr('placeholder',res.msg);
                        $('.tel').val();
                    }
                }
            )
        })
        $('.m-chang').on('click',function(){
            $('.m-chang').hide();
            $('.m-o-succ').hide();
        })
        $('.o-esc').on('click',function(){
            $('.m-chang').hide();
            $('.m-o-succ').hide();
        })
        $('#o_btn').on('click',function(){
            $('.m-chang').hide();
            $('.m-o-succ').hide();
        })
    })
</script>