<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"G:\jiayuan\tp2\public/../application/home\view\content\lpic.html";i:1574218158;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>楼盘相册</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css">
  <link rel="stylesheet" href="/static/home/css/lun_style.css">
  <link rel="stylesheet" href="https://at.alicdn.com/t/font_1416845_uzlayfb9sys.css">

</head>
<body>
  <!-- 头部导航 -->
  <div class="title">
         <span class="iconfont iconjiantouzuo" id="fanhui"></span>
         <i>楼盘相册</i>
          
  </div>
  
<!-- 头部选择导航 -->
<div id="top">
  <div class="swiper-container" id="nav">
    <div class="swiper-wrapper ">
      <div class="swiper-slide">
        <span class="active">效果图(<?php echo $xs; ?>)</span>
      </div>
      <div class="swiper-slide">
        <span>实景图(<?php echo $ss; ?>)</span>
      </div>
      <div class="swiper-slide">
        <span>样板图(<?php echo $ys; ?>)</span>
      </div>
      <div class="swiper-slide">
        <span>交通图(<?php echo $js; ?>)</span>
      </div>
      <div class="swiper-slide">
        <span>户型图(<?php echo $hs; ?>)</span>
      </div>
      <!-- <div class="bar">
        <div class="color"></div>
      </div> -->
    </div>
  </div>
</div>
<!-- 滑动主页 -->
<div class="swiper-container" id="page">
    <div class="swiper-wrapper">
      <!-- 第一页 -->
      <div class="swiper-slide slidepage">
        <div class="swiper-container scroll">
          <div class="swiper-wrapper">
            <div class="swiper-slide slidescroll">

              <div class="swiper-container banner">
                <div class="swiper-wrapper">
                    <?php foreach($ximgs as $v): ?>
                  <div class="swiper-slide">
                    <img src="<?php echo $v['x_big']; ?>">
                  </div>
                  <?php endforeach; ?>
                 
                </div>
                <div class="swiper-pagination page1"></div>
              </div>
              
             <!-- 底部咨询-->
             
             
            </div>
          </div>
        </div>
      </div>
       <!-- 第二页 -->
      <div class="swiper-slide slidepage">
        <div class="swiper-container scroll">
          <div class="swiper-wrapper">
            <div class="swiper-slide slidescroll">
              <div class="swiper-container banner">
                <div class="swiper-wrapper">
                  <?php foreach($simgs as $v): ?>
                  <div class="swiper-slide">
                    <img src="<?php echo $v['s_big']; ?>">
                  </div>
                  <?php endforeach; ?>
                  
                </div>
                <div class="swiper-pagination page2"></div>
              </div>
            
             
           
            </div>
          </div>
        </div>
      </div>
        <!-- 第三页 -->
      <div class="swiper-slide slidepage">
        <div class="swiper-container scroll">
          <div class="swiper-wrapper">
            <div class="swiper-slide slidescroll">

                <div class="swiper-container banner">
                    <div class="swiper-wrapper">
                      <?php foreach($yimgs as $v): ?>
                      <div class="swiper-slide">
                        <img src="<?php echo $v['y_big']; ?>">
                      </div>
                      <?php endforeach; ?>
                      
    
                    </div>
                    <div class="swiper-pagination page3"></div>
                  </div>
                


            </div></div>
        </div>
      </div>
       <!-- 第四页 -->
      <div class="swiper-slide slidepage">
        <div class="swiper-container scroll">
          <div class="swiper-wrapper">
            <div class="swiper-slide slidescroll">

                <div class="swiper-container banner">
                    <div class="swiper-wrapper">

                      <?php foreach($jimgs as $v): ?>
                      <div class="swiper-slide">
                        <img src="<?php echo $v['j_big']; ?>">
                      </div>
                      <?php endforeach; ?>
                      
                    
    
    
                    </div>
                    <div class="swiper-pagination page4"></div>
                </div>

            </div></div>
        </div>
      </div>
        <!-- 第五页 -->
      <div class="swiper-slide slidepage">
        <div class="swiper-container scroll">
          <div class="swiper-wrapper">
            <div class="swiper-slide slidescroll">

                <div class="swiper-container banner">
                    <div class="swiper-wrapper">

                      <?php foreach($himgs as $v): ?>
                    <div class="swiper-slide">
                        <img src="<?php echo $v['h_big']; ?>">
                      </div>
                      <?php endforeach; ?>
                      
    
    
                    </div>
                    <div class="swiper-pagination page5"></div>
                </div>

            </div></div>
        </div>
      </div>



    </div>
  </div>
  <!-- 弹出框 -->
  <div class="visible-xs-block .visible-sm-block">

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


      <div class="m-chang"></div>
      
      <div class="m-o-succ">
          <img class="o-esc" src="/static/home/imgs/m-esc.png" alt="">
          <img src="/static/home/imgs/m-success.png" alt="" class="o-success">
          <p id="o_p">已成功订阅最新动态，我们会第一时间通过短信通知您！</p>
          <button id="o_btn">确定</button>
      </div>
      
      <div id="m_ti">

      </div>
      <div class="m-bigimgs">
          <img class="m_bigimgs" src="" alt="">
      </div>
  </div>
<!-- 底部悬浮按钮 -->
<div class="m-botnav visible-xs-block .visible-sm-block">
    <p data-agl-cvt="5" id="m_shou" data_v="<?php echo $data['id']; ?>"><?php if(in_array($data['id'],\think\Session::get('fork'))): ?><img style="margin-left:17%" src="/static/home/imgs/fork2.png" alt="">已收藏<?php else: ?><img src="/static/home/imgs/forked.png" alt="">收藏<?php endif; ?></p>
    <a data-agl-cvt="5" href="tel:400-718-6686"><button class="m-pho">电话咨询
        <h6>保护您的号码安全</h6>
    </button></a>
    <button data-agl-cvt="5" class="m-y p1" data-v="预约看房">预约看房  <h6>置业顾问一对一服务</h6></button>
</div>
  <script src="//libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script>
  <script>
  //暂时设计每个slide大小需要一致
  barwidth = 36 //导航粉色条的长度px
  tSpeed = 300 //切换速度300ms
  var navSwiper = new Swiper('#nav', {
  	slidesPerView: 6,
  	freeMode: true,
  	on: {
  		init: function() {
        navSlideWidth = this.slides.eq(0).css('width'); //导航字数需要统一,每个导航宽度一致
        // console.log(navSlideWidth);
        // console.log(this.slides);
  			bar = this.$el.find('.bar')
  			bar.css('width', navSlideWidth)
  			bar.transition(tSpeed)
  			navSum = this.slides[this.slides.length - 1].offsetLeft //最后一个slide的位置

        clientWidth = parseInt(this.$wrapperEl.css('width')) //Nav的可视宽度
        // console.log(clientWidth);
  			navWidth = 0
  			for (i = 0; i < this.slides.length; i++) {
  				navWidth += parseInt(this.slides.eq(i).css('width'))
  			}

  			topBar = this.$el.parents('body').find('#top') //页头
        // console.log(topBar);

  		},

  	},
  });

  var pageSwiper = new Swiper('#page', {
  	watchSlidesProgress: true,
  	resistanceRatio: 0,
  	on: {
  		touchMove: function() {
  			progress = this.progress;
        // console.log(progress);
  			bar.transition(0)
  			bar.transform('translateX(' + navSum * progress + 'px)')
  			//粉色49,49,54灰色157,157,164
  			for (i = 0; i < this.slides.length; i++) {
  				slideProgress = this.slides[i].progress
  				if (Math.abs(slideProgress) < 1) {
  					r = Math.floor((49 - 157) * (1 - Math.pow(Math.abs(slideProgress), 2)) + 51)
  					g = Math.floor((49 -157) * (1 - Math.pow(Math.abs(slideProgress), 2)) + 51)
  					b = Math.floor((54 - 164) * (1 - Math.pow(Math.abs(slideProgress), 2)) + 51)
  					// navSwiper.slides.eq(i).find('span').css('color', 'rgba(' + r + ',' + g + ',' + b + ',1)')
  				}
  			}
  		},
  		transitionStart: function() {
  			activeIndex = this.activeIndex
        // console.log(activeIndex);
  			activeSlidePosition = navSwiper.slides[activeIndex].offsetLeft
  			//释放时导航粉色条移动过渡
  			bar.transition(tSpeed)
  			bar.transform('translateX(' + activeSlidePosition + 'px)')
  			//释放时文字变色过渡
  			navSwiper.slides.eq(activeIndex).find('span').transition(tSpeed)
  			navSwiper.slides.eq(activeIndex).find('span').addClass('active') //黑色
  			if (activeIndex > 0) {
  				navSwiper.slides.eq(activeIndex - 1).find('span').transition(tSpeed)
  				navSwiper.slides.eq(activeIndex - 1).find('span').removeClass("active")  //灰色
  			}
  			if (activeIndex < this.slides.length) {
  				navSwiper.slides.eq(activeIndex + 1).find('span').transition(tSpeed)
  				navSwiper.slides.eq(activeIndex + 1).find('span').removeClass("active")   //灰色
  			}


  			//导航居中
  			navActiveSlideLeft = navSwiper.slides[activeIndex].offsetLeft //activeSlide距左边的距离
        // console.log(navActiveSlideLeft, parseInt(navSlideWidth));
  			// navSwiper.setTransition(tSpeed)
  			// if (navActiveSlideLeft < (clientWidth - parseInt(navSlideWidth)) / 2) {
  			// 	navSwiper.setTranslate(0)
  			// } else if (navActiveSlideLeft > navWidth - (parseInt(navSlideWidth) + clientWidth) / 2) {
  			// 	navSwiper.setTranslate(clientWidth - navWidth)
  			// } else {
  			// 	navSwiper.setTranslate((clientWidth - parseInt(navSlideWidth)) / 2 - navActiveSlideLeft)
  			// }

  		},
  	}
  });

  navSwiper.$el.on('touchstart', function(e) {
  	e.preventDefault() //去掉按压阴影
  })
   navSwiper.on('tap', function(e) {

  	clickIndex = this.clickedIndex;
    // console.log(clickIndex);

  	clickSlide = this.slides.eq(clickIndex)
  	pageSwiper.slideTo(clickIndex, 0);
  	this.slides.find('span').removeClass('active')
  	clickSlide.find('span').addClass('active')
  })

  //内容滚动			
  var scrollSwiper = new Swiper('.scroll', {
  	//65是头部的高
  	//36是top地址和搜索的高

  	slidesOffsetBefore: 72,
  	direction: 'vertical',
  	freeMode: true,
  	slidesPerView: 'auto',

  	mousewheel: {
  		releaseOnEdges: true,
  	},
  	on: {
  		touchMove: function() {
            // console.log(topBar);
  			if (this.translate > 72 - 36 && this.translate < 72) {
  				topBar.transform('translateY(' + (this.translate - 72) + 'px)');
  			}
          // console.log(this.$el.parent().attr('page-id'));
          // console.log(this);
  		},
  		touchStart: function() {
  			startPosition = this.translate
  		},
  		touchEnd: function() {
  			topBar.transition(tSpeed)
  			if (this.translate > 36 && this.translate < 72 && this.translate < startPosition) {
  				// topBar.transform('translateY(-36px)');
  				for (sc = 0; sc < scrollSwiper.length; sc++) {
  					if (scrollSwiper[sc].translate > 36) {
  						scrollSwiper[sc].setTransition(tSpeed);
  						scrollSwiper[sc].setTranslate(36)
  					}
  				}
  			}
  			if (this.translate > 36 && this.translate < 72 && this.translate > startPosition) {
  				topBar.transform('translateY(0px)');
  				for (sc = 0; sc < scrollSwiper.length; sc++) {
  					if (scrollSwiper[sc].translate < 72 && scrollSwiper[sc].translate > 0) {
  						scrollSwiper[sc].setTransition(tSpeed);
  						scrollSwiper[sc].setTranslate(72)
  					}
  				}
  			}
  		},

  		transitionStart: function() {

  			topBar.transition(tSpeed)
  			if (this.translate < 72 - 36) {
  				// topBar.transform('translateY(-36px)');
  				if (scrollSwiper) {
  					for (sc = 0; sc < scrollSwiper.length; sc++) {
  						if (scrollSwiper[sc].translate > 36) {
  							scrollSwiper[sc].setTransition(tSpeed);
  							scrollSwiper[sc].setTranslate(36)
  						}
  					}
  				}

  			} else {
  				topBar.transform('translateY(0px)');

  				if (scrollSwiper) {
  					for (sc = 0; sc < scrollSwiper.length; sc++) {
  						if (scrollSwiper[sc].translate < 72 && scrollSwiper[sc].translate > 0) {
  							scrollSwiper[sc].setTransition(tSpeed);
  							scrollSwiper[sc].setTranslate(72)
  						}
  					}
  				}
  			}
  		},
  	}

  })


  // 登录页跳转
  $('#m_ti').on('click',function(){
    window.location.href="<?php echo url('home/user/login'); ?>";
  })

  //热卖		
  var bannerSwiper = new Swiper('.banner', {
  	loop: false,
  	pagination: {
  		el: '.swiper-pagination',
  		type: 'fraction',
  		renderFraction: function(currentClass, totalClass) {
  			return '<span class="' + currentClass + '"></span>' + '/' + '<span class="' + totalClass + '"></span>';
  		},
  	},
  });

            //   报名
            $('.p1').on('click',function(){
                window.type=$(this).attr('data-v');
                if(type=="预约看房"){
                    $('.weiter .t-top h6').html(type);
                    $('.weiter .t-top p').html('一键预约看房免费小车上门接送，可带家人一起参观多个热门楼盘');
                }
                $('.weiter').show();
                $('.m-chang').show();
                
            })
            // 关闭
            $('#w-esc').on('click',function(){
              $('.weiter').hide();
              $('.m-chang').hide();
            })
            $('.m-chang').on('click',function(){
              console.log(1);
              $('.weiter').hide();
              $('.m-chang').hide();
              $('#m_ti').hide();
            })
            // 返回上一级
            $('#fanhui').on('click',function(){
              window.location.href=document.referrer;
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
                                {'sign':sign,'username':'没有','project':project,'source':'线上推广1','remark':'不是留言','cate_id':0,'phone':phone},
                                function(res){
                                    if(res.code==200){
					                    console.log(res.msg)
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

            $('.t-b-scode').on('click',function(){
                var phone=$(this).prev().val();
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
						$('.t-b-scode').html('重发' + time + 's');
                        $('.t-b-scode').attr('disabled', true);
					} else {
						clearInterval(interval);
						$('.t-b-scode').html('获取验证码');
						$('.t-b-scode').attr('disabled', false);
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
                            alert('发送成功');
                        }else{
                            alert(res.msg);
                        }
                    },
                    'json'
                ) 
            })

            $('.port1').on('click',function(){
                var building_name=$(this).next().val();
                var ma=$(this).prev().val();
                var tel=$(this).next().next().val();
                var name='要自己问了';
                var pattern_tel = /^1[3-9][0-9]{9}$/;
                var type=$(this).parent().parent().prev().find('h6').html();
				if (tel == '') {
					$(this).prev().prev().prev().val('')
                    $(this).prev().prev().prev().attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_tel.test(tel)) {
					$(this).prev().prev().prev().val('')
					$(this).prev().prev().prev().attr('placeholder','手机号码不合法');
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
                    'qu':qu,
                    'ma':ma
                }
                // console.log(data);return
                var that=$(this)
                $.post(
                    "<?php echo url('home/content/port1'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                            that.parent().parent().parent().hide();
				            $('.t-b-first').show();
                            $('.t-b-second').hide();
                            $('#o_p').text('已成功订购服务，我们会第一时间通过电话联系您');
                            $('.m-o-succ').show();
                            
                        }
                    },
                    'json'
                )
		
            })

            // 收藏
            $('#m_shou').on('click',function(){
            var txt=$(this).text();
            if(txt=='收藏'){
                var id=$(this).attr('data_v');
                var that=$(this);
                $.post(
                    "<?php echo url('home/content/fork'); ?>",
                    {"id":id},
                    function(res){
                        if(res.code==100){
                           $('.m-fork').attr('src',res.ss);
                           $('.m-fork').attr('alt','已收藏');
                            var html=`
                            <img style="margin-left:17%" src="${res.msg}" alt="">已收藏
                                    `;
                            that.html(html)
                            
                        }else{
                            $('.m-chang').show();
                            $('#m_ti').html(res.msg);
                            $('#m_ti').show();
                        }
                    },
                    'json'
                )
            }else{
                return;
            }
            
        })
  </script> 
</body>
</html>