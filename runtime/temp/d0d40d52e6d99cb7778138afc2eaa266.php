<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"D:\Program Files\WWW\hospital-tp5\public/../application/index\view\index\index.html";i:1504524855;s:85:"D:\Program Files\WWW\hospital-tp5\public/../application/index\view\common\header.html";i:1504525709;s:85:"D:\Program Files\WWW\hospital-tp5\public/../application/index\view\common\footer.html";i:1504524907;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>全球首家主播现场</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="__PUBLIC__/single/css/style.css" rel="stylesheet">
    <link href="__PUBLIC__/single/css/animate.css" rel="stylesheet">
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="__PUBLIC__/single/js/froogaloop2.min.js"></script>
    <script src="__PUBLIC__/single/js/hm.js"></script>
    <script src="__PUBLIC__/single/js/html5shiv.min.js"></script>
    <script src="__PUBLIC__/single/js/mobileswipe.js"></script>
    <script src="__PUBLIC__/single/js/respond.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/single/js/jquery.js"></script>
    <script type="text/javascript" src="__PUBLIC__/single/js/html5lightbox.js"></script>
    <link rel="stylesheet" href="__PUBLIC__/single/css/liMarquee.css">
    <script>
      var _hmt = _hmt || [];
      (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?c03ebe54f99c109b22a375a3c65da505";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();

      $(function() {
        $('a[href*="#titlepanel"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });

      $(document).ready(function(){
        $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
          } else {
            $('#back-to-top').fadeOut();
          }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
          $('#back-to-top').tooltip('hide');
          $('body,html').animate({
            scrollTop: 0
          }, 800);
          return false;
        });

        $('#back-to-top').tooltip('show');

      });

      $(function() {
        $('a[href*="#howtoinstall"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });

      $(document).ready(function() {
        $('#myCarousel').carousel({
          interval: 10000
        })
      });
    </script>


    <style>
      .wow:first-child {
        visibility: hidden;
      }
    </style>

    <script>
      $(document).ready(function() {
        $(".row-eq-height").each(function() {
          var heights = $(this).find(".col-eq-height").map(function() {
            return $(this).outerHeight();
          }).get(), maxHeight = Math.max.apply(null, heights);

          $(this).find(".col-eq-height").outerHeight(maxHeight).css("position","relative");

        });
      });
    </script>
  </head>
  <body>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 header">
            <!--button-->
            <div id="sidebutton" class="hidden-xs">
              <div>
                <a href="__PUBLIC__/single/img/wechatpopup.jpg" class="html5lightbox" data-group="wechatpopup">
                <img src="__PUBLIC__/single/img/button_wechat.png"></a>
              </div>
              <div style="padding-top:5px;">
                <a href="https://www.eu1818.com">
                  <img src="__PUBLIC__/single/img/button_back.png">
                </a>
              </div>
            </div>
            <div id="sidebutton2" class="hidden-lg hidden-md hidden-sm">
              <div style="float:left;"><a href="__PUBLIC__/single/img/wechatpopup.jpg" class="html5lightbox" data-group="wechatpopup"> <img src="__PUBLIC__/single/img/button_wechat2.png" height="45" width="62"></a></div>
              <div style="padding-left:10px; float:left;"><a href="http://www.jblbrand.com/"><img src="__PUBLIC__/single/img/button_back2.png" height="45" width"62"=""></a></div>
            </div>
            <!--button-->

            <!-- 节目表
            <div id="timelinebutton" class="wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
              <div style="padding-top:5px;" class="hidden-xs"><a href="#" class="tablelink" data-toggle="modal"> <img src="__PUBLIC__/single/img/button_timeline.png"></a></div>
              <div style="padding-top:5px;" class="hidden-lg hidden-md hidden-sm"><a href="#" class="tablelink" data-toggle="modal"> <img src="__PUBLIC__/single/img/button_timeline.png" width="90"></a></div>
            </div>
          -->
          </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <!--spromo-->
            <div id="spromo">
                <div class="container">
                    <div class="row">
                            <div class="col-md-2"></div>
                        <!-- 中间start-->
                            <div class="wow fadeInRight col-md-4 spromoicon"
                                 data-wow-delay="0.1s"
                                 style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                                <div class="spromoimg">
                                    <a href="" data-toogle="modal"  data-target="#spromo01">
                                        <img src="__PUBLIC__/single/img/spromo01.png" class="img-responsive center-block">
                                    </a>
                                </div>
                                <!--
                                <div class="spromobutton">
                                    <a href="#/#spromo01" class="tablelink" data-toggle="modal">
                                    <img src="__PUBLIC__/single/img/button-more.png" class="img-responsive center-block">
                                    </a>
                                    <a href="#/#spromo01r" class="tablelink" data-toggle="modal">
                                        <img src="__PUBLIC__/single/img/button-result.png" class="img-responsive center-block">
                                    </a>
                                </div>
                                -->
                            </div>


                            <div class="wow fadeInRight col-md-4 spromoicon" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                                <div class="spromoimg">
                                    <img src="__PUBLIC__/single/img/spromo03.png" class="img-responsive center-block">
                                </div>
                                <div class="spromobutton">
                                    <!--<a href="#/#spromo02" class="tablelink" data-toggle="modal">-->
                                        <!--<img src="__PUBLIC__/single/img/button-more.png" class="img-responsive center-block"></a>-->
                                    <!--<a href="#/#spromo02r" class="tablelink" data-toggle="modal">-->
                                        <!--<img src="__PUBLIC__/single/img/button-result.png" class="img-responsive center-block">-->
                                    <!--</a>-->
                                </div>

                            </div>
                        <!-- 中间end-->
                        <div class="col-md-2"></div>
                       </div>
                </div>
            </div>
            <!--spromoend-->
            <!-- button 注册 start-->
                <div class="row">
                    <div class="col-lg-4 col-xs-4"></div>
                    <div class="col-lg-4 col-xs-4">
                            官方指定网址,点击注册->>><a href="https://www.eu1818.com/#register" class="btn btn-primary">注册</a>
                    </div>
                    <div class="col-lg-4 col-xs-4"></div>
                </div>
            <!-- button 注册 end -->
            <!--livestreaminggirlsinfo-->
            <div id="livestreaminggirlsinfopanel">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <!--
                    <div class="wow fadeInLeft col-sm-2 col-xs-6" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <div class="innerpanel" onclick="void(0)">
                            <div class="girlpic">
                                <div id="overlay">
                                    <span id="plus">
                                        <div class="boxtitle">星座</div>
                                        <div>天秤座</div>
                                        <div class="boxtitle">兴趣</div>
                                        <div>跳舞、畫畫</div>
                                        <div class="boxtitle">喜欢的异性类型</div>
                                        <div>運動陽光型</div>
                                    </span>
                                </div>
                                <img src="__PUBLIC__/single/img/girl01.jpg" class="img-responsive center-block">
                            </div>
                            <div class="girlinfo"><img src="__PUBLIC__/single/img/love01.png" class="img-responsive center-block"></div>
                        </div>
                    </div>


                    <div class="wow fadeInLeft col-sm-2 col-xs-6" style="visibility: visible; animation-name: fadeInLeft;">
                        <div class="innerpanel" onclick="void(0)">
                            <div class="girlpic">
                                <div id="overlay">
                                    <span id="plus">
                                        <div class="boxtitle">星座</div>
                                        <div>摩羯座</div>
                                        <div class="boxtitle">兴趣</div>
                                        <div>跳舞</div>
                                        <div class="boxtitle">喜欢的异性类型</div>
                                        <div>感觉对了就跟你走</div>
                                     </span>
                                </div>
                                <img src="__PUBLIC__/single/img/girl03.jpg" class="img-responsive center-block">
                            </div>
                            <div class="girlinfo"><img src="__PUBLIC__/single/img/love03.png" class="img-responsive center-block"></div>
                        </div>
                    </div>


                    <div class="wow fadeInRight col-sm-2 col-xs-6" style="visibility: visible; animation-name: fadeInRight;">

                        <div class="innerpanel" onclick="void(0)">
                            <div class="girlpic">
                                <div id="overlay">
                                    <span id="plus">
                                        <div class="boxtitle">星座</div>
                                        <div>牡羊</div>
                                        <div class="boxtitle">兴趣</div>
                                        <div>唱歌、跳舞</div>
                                        <div class="boxtitle">喜欢的异性类型</div>
                                        <div>幽默大方、有理想</div>
                                    </span>
                                </div>
                                <img src="__PUBLIC__/single/img/girl09.jpg" class="img-responsive center-block">
                            </div>
                            <div class="girlinfo"><img src="__PUBLIC__/single/img/love09.png" class="img-responsive center-block"></div>
                        </div>
                    </div>

                    <div class="wow fadeInRight col-sm-2 col-xs-6" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">

                        <div class="innerpanel">
                            <div class="girlpic">
                                <div id="overlay">
                    	<span id="plus">
                        	<div class="boxtitle">星座</div>
                            <div>雙子</div>
							<div class="boxtitle">兴趣</div>
                            <div>唱歌、跳舞</div>
							<div class="boxtitle">喜欢的异性类型</div>
                            <div>歡幽默搞笑說話直接</div>
                                                     </span>
                                </div>
                                <img src="__PUBLIC__/single/img/girl10.jpg" class="img-responsive center-block">
                            </div>
                            <div class="girlinfo"><img src="__PUBLIC__/single/img/love10.png" class="img-responsive center-block"></div>
                        </div>
                    </div>


                    <div class="wow fadeInRight col-sm-2 col-xs-6" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <div class="innerpanel" onclick="void(0)">
                            <div class="girlpic">
                                <div id="overlay">
                    	<span id="plus">
                        	<div class="boxtitle">星座</div>
                            <div>處女座</div>
							<div class="boxtitle">兴趣</div>
                            <div>唱歌、跳舞、看電影、美食</div>
							<div class="boxtitle">喜欢的异性类型</div>
                            <div>陽光幽默有魅力</div>

                         </span>
                                </div>
                                <img src="__PUBLIC__/single/img/girl07.jpg" class="img-responsive center-block">
                            </div>
                            <div class="girlinfo"><img src="__PUBLIC__/single/img/love07.png" class="img-responsive center-block"></div>
                        </div>
                    </div>

                    <div class="wow fadeInRight col-sm-2 col-xs-6" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                        <div class="innerpanel" onclick="void(0)">
                            <div class="girlpic">
                                <div id="overlay">
                    	<span id="plus">
                        	<div class="boxtitle">星座</div>
                            <div>巨蟹座</div>
							<div class="boxtitle">兴趣</div>
                            <div>唱歌、看電影</div>
							<div class="boxtitle">喜欢的异性类型</div>
                            <div>穩重、誠實、貼心</div>

                         </span>
                                </div>
                                <img src="__PUBLIC__/single/img/girl06.jpg" class="img-responsive center-block">
                            </div>
                            <div class="girlinfo"><img src="__PUBLIC__/single/img/love06.png" class="img-responsive center-block"></div>
                        </div>
                    </div>


                </div>
                <div class="col-sm-1"></div>
            </div>
            -->
            <!--livestreaminggirlsinfoend-->

            <!--videosreplay-->
            <div id="videopanel">
                <div class="container">
                    <div class="video-title">
                        <img src="__PUBLIC__/single/img/title-replay.png" class="img-responsive center-block">
                    </div>
                    <div class="videoinner">
                        <div class="wow fadeInUp col-sm-4 col-xs-6 videoin" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <a href="http://www.jblgo.com/live/qiubao002.mp4" data-webm="http://www.jblgo.com/live/qiubao002.mp4" class="html5lightbox" data-group="videos">
                                <img src="__PUBLIC__/single/img/qiubao002.jpg" class="img-responsive center-block" style="border:2px solid #f21d59; border-radius:15px;"></a>
                        </div>
                        <div class="wow fadeInUp col-sm-4 col-xs-6 videoin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <a href="http://www.jblgo.com/live/mengmeng001.mp4" data-webm="http://www.jblgo.com/live/mengmeng001.mp4" class="html5lightbox" data-group="videos">
                                <img src="__PUBLIC__/single/img/mengmeng001.jpg" class="img-responsive center-block" style="border:2px solid #f21d59; border-radius:15px;"></a></div>
                        <div class="wow fadeInUp col-sm-4 col-xs-6 videoin" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <a href="http://www.jblgo.com/live/aini001.mp4" data-webm="http://www.jblgo.com/live/aini001.mp4" class="html5lightbox" data-group="videos">
                                <img src="__PUBLIC__/single/img/aini001.jpg" class="img-responsive center-block" style="border:2px solid #f21d59; border-radius:15px;"></a>
                        </div>
                        <div class="wow fadeInUp col-sm-4 col-xs-6 videoin" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <a href="http://www.jblgo.com/live/qbnwn.mp4" data-webm="http://www.jblgo.com/live/qbnwn.mp4" class="html5lightbox" data-group="videos">
                                <img src="__PUBLIC__/single/img/11.jpg" class="img-responsive center-block" style="border:2px solid #f21d59; border-radius:15px;"></a></div>
                        <div class="wow fadeInUp col-sm-4 col-xs-6 videoin" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                            <a href="http://www.jblgo.com/live/1weekscene.mp4" data-webm="http://www.jblgo.com/live/1weekscene.mp4" class="html5lightbox" data-group="videos">
                                <img src="__PUBLIC__/single/img/1weekscene.jpg" class="img-responsive center-block" style="border:2px solid #f21d59; border-radius:15px;"></a>
                        </div>
                        <div class="wow fadeInUp col-sm-4 col-xs-6 videoin" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                            <a href="http://www.jblgo.com/live/814818.mp4" data-webm="http://www.jblgo.com/live/814818.mp4" class="html5lightbox" data-group="videos">
                                <img src="__PUBLIC__/single/img/814818.jpg" class="img-responsive center-block" style="border:2px solid #f21d59; border-radius:15px;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--videosreplay-->

            <!--promo01-->
            <div class="modal fade" id="spromo01">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <!--needt-modify-->
                            <div class="modal-title">秒杀礼包双响炮 抢完卡片再兑奖</div><!--needt-modify-->
                        </div>

                        <div class="modal-body" id="spromoframe">

                            <div><img src="__PUBLIC__/single/img/spromo01.png" class="img-responsive center-block"></div>
                            <div class="spromotime">2017/08/14 - 09/25<br>(<span style="color:#FF0;font-weight:bold;">每周一</span>晚间开奖）</div>
                            <div class="spromoinfo">
                                <ul type="1">
                                    <li>每周一将释出（特殊纸牌点数）礼包<br>
                                        <img src="__PUBLIC__/single/img/promo1cards.jpg" class="img-responsive center-block hidden-xs">
                                        <img src="__PUBLIC__/single/img/promo1cardsb.jpg" class="img-responsive center-block hidden-md hidden-sm hidden-lg">
                                    </li>
                                    <li>抢购并付款成功的礼包卡均可在当晚怡红院直播中进行2次对奖。</li>
                                    <li>若您当日抢购的礼包与主播现场抽出的（牌：花色+点数一致）即可获得（小米手环）</li>
                                    <li>幸运中奖会员，请在48小时内联系客服人员提供收货人姓名、地址,逾期视同放弃。</li>

                                </ul>
                                <div style="font-size:0.85em; color:#666;"> ** 赠送的奖品（小米手环）是以小米手环2为标准，但将视当下小米官方网站的现货情况所更改。</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--promo01end-->

            <!--promo02-->
            <div class="modal fade" id="spromo02">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <!--needt-modify-->
                            <div class="modal-title">优惠代码兑万金 奖品奖金对对送</div><!--needt-modify-->
                        </div>

                        <div class="modal-body" id="spromoframe">

                            <div><img src="__PUBLIC__/single/img/spromo03.png" class="img-responsive center-block"></div>
                            <div class="spromotime">2017/07/28 - 09/29<br>(<span style="color:#FF0; font-weight:bold;">每周五</span>晚间开奖）</div>

                            <div id="steppanel">
                                <div class="row">
                                    <div class="col-sm-2 col-xs-6 nopadding"> <img src="__PUBLIC__/single/img/step01.png" class="img-responsive center-block"></div>
                                    <div class="col-sm-2 col-xs-6 nopadding"> <img src="__PUBLIC__/single/img/step02.png" class="img-responsive center-block"></div>
                                    <div class="col-sm-2 col-xs-6 nopadding"> <img src="__PUBLIC__/single/img/step03.png" class="img-responsive center-block"></div>
                                    <div class="col-sm-2 col-xs-6 nopadding"> <img src="__PUBLIC__/single/img/step04.png" class="img-responsive center-block"></div>
                                    <div class="col-sm-2 col-xs-6 nopadding"> <img src="__PUBLIC__/single/img/step05.png" class="img-responsive center-block"></div>
                                    <div class="col-sm-2 col-xs-6 nopadding"> <img src="__PUBLIC__/single/img/step06.png" class="img-responsive center-block"></div>
                                </div>
                            </div>


                            <!--对奖时间-->
                            <div class="eventsubtitle">对奖时间</div>
                            <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#a5a9a9" style="font-size:0.85em; text-align:center;">
                                <tbody><tr style="color:#ffffff;height:45px;">

                                    <td bgcolor="#db063b">优惠代码（领取）累计时间</td>
                                    <td bgcolor="#db063b">对奖时间</td>

                                </tr>

                                <tr style="color:#151515;height:30px;">
                                    <td style="padding:5px 3px 5px 3px">每周五（晚间）20:00:00 - 次周五（晚间）19:59:59</td>
                                    <td style="padding:5px 3px 5px 3px">每周五（晚间21:00 - 22:00）开奖</td>
                                </tr>


                                </tbody></table>
                            <div style="padding-top:10px; padding-bottom:30px; text-align:left;font-size:0.9em; color:#666;">*只有（使用过）的优惠代码才可在当期对奖！</div>
                            <!--对奖时间-->
                            <!--对奖规则-->
                            <div class="eventsubtitle">对奖规则</div>
                            <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#a5a9a9" style="font-size:0.85em; text-align:center;">


                                <tbody><tr style="color:#ffffff;height:45px;">
                                    <td bgcolor="#db063b">优惠代码</td>
                                    <td bgcolor="#db063b">主播开奖结果</td>
                                    <td bgcolor="#db063b">是否中奖</td>
                                    <td bgcolor="#db063b">奖品</td>
                                    <td bgcolor="#db063b">奖金赠送比例</td>
                                    <td bgcolor="#db063b">最高可享</td>
                                </tr>

                                <tr style="color:#151515;height:30px;">
                                    <td style="padding:5px 3px 5px 3px">1234（4码全中）</td>
                                    <td style="padding:5px 3px 5px 3px" rowspan="4">1234<br>(中獎位置需一致)</td>
                                    <td style="padding:5px 3px 5px 3px">头奖</td>
                                    <td style="padding:5px 3px 5px 3px">小米air笔记本 + 奖金</td>
                                    <td style="padding:5px 3px 5px 3px">100％</td>
                                    <td style="padding:5px 3px 5px 3px">2288元</td>
                                </tr>
                                <tr style="color:#151515;height:30px;">
                                    <td style="padding:5px 3px 5px 3px">2234（中後3码）</td>
                                    <td style="padding:5px 3px 5px 3px">二奖</td>
                                    <td style="padding:5px 3px 5px 3px">奖金</td>
                                    <td style="padding:5px 3px 5px 3px">50％</td>
                                    <td style="padding:5px 3px 5px 3px">888元</td>
                                </tr>
                                <tr style="color:#151515;height:30px;">
                                    <td style="padding:5px 3px 5px 3px">3334（中後2码）</td>
                                    <td style="padding:5px 3px 5px 3px">入围奖</td>
                                    <td style="padding:5px 3px 5px 3px">奖金</td>
                                    <td style="padding:5px 3px 5px 3px">20%</td>
                                    <td style="padding:5px 3px 5px 3px">88元</td>
                                </tr>
                                <tr style="color:#151515;height:30px;">
                                    <td style="padding:5px 3px 5px 3px">2314（中後1码）</td>
                                    <td style="padding:5px 3px 5px 3px">X</td>
                                    <td style="padding:5px 3px 5px 3px">X</td>
                                    <td style="padding:5px 3px 5px 3px">X</td>
                                    <td style="padding:5px 3px 5px 3px">X</td>
                                </tr>

                                </tbody></table>
                            <div style="padding-top:10px; padding-bottom:30px; text-align:left; font-size:0.9em; color:#666;">奖金赠送留意：<br>
                                1）存送优惠代码奖金 = 根据该（中奖优惠代码的存款金额）X（奖金赠送比率）
                                <br>
                                2）免费优惠代码奖金 = 根据（免费优惠金额）X（奖金赠送比率）
                                <br>
                                *免费优惠代码/ 或低于300元存款的代码-无法参与（奖品）赠送。</div>
                            <!--对奖规则-->

                            <div class="spromoinfo">
                                <div class="eventsubtitle">活动条款</div>
                                <ul type="1">
                                    <li>所有没有领取的优惠代码均无法参与对奖。</li>
                                    <li>如（对奖当日）主播无法顺利演出或现场开奖，则对奖期号将顺延至下一个开奖日。</li>
                                    <li>无论什么时候收到优惠代码，只要在当周（累计时间内）进行存款/ 免费的优惠代码，均可在（当周）周五晚间进行（一次）对奖。
                                        <br> 举例：2017/ 08/ 04 晚间 20:00:00 - 2017/ 08/ 11 晚间19:59:59期间，只要有进行存款领取/ 免费增送的优惠代码，均可在（2017/07/21）晚间进行对奖。 </li>
                                    <li>免费优惠代码/ 或低于300元存款的代码-无法参与（奖品）赠送。</li>
                                    <li>每个会员账号（每期开奖）只能领取（一个）最高奖项。</li>
                                    <li>幸运中头奖的金百利会员们，请在（48小时内）主动联系金百利客服人员进行登记，并提供收货人姓名、地址。</li>
                                    <li>若超过（48小时）尚未联系客服登记，将视为自动放弃享受优惠。</li>
                                    <li>所获加奖彩金，可在（任意厅）达到（3倍）流水即可申请提款。</li>
                                    <li>奖品无法兑换等值现金。</li>
                                    <li>赠送的奖品（小米AIR笔记本）是以 12.5"英寸（128GB）为标准，但将视当下小米官方网站的现货情况所更改。</li>
                                    <li>奖品实际到货日将是快递作业时间而定。</li>
                                    <li>如经系统检测以任何方式、行为骗取此优惠奖金将无条件取消参与资格。</li>
                                </ul>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
            <!--promo02end-->



            <!--promo03-->
            <div class="modal fade" id="spromo03">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <!--needt-modify-->
                            <div class="modal-title">美女主播大胆玩 ＄888 吉利红包天天发</div><!--needt-modify-->
                        </div>

                        <div class="modal-body" id="spromoframe">
                            <div><img src="__PUBLIC__/single/img/spromo04.png" class="img-responsive center-block"></div>
                            <div class="spromotime">直播时间：请参照<a href="#/#modal-1" class="tablelink" data-toggle="modal">节目表</a>,每次直播皆有红包赠送 </div>
                            <div class="spromoinfo">
                                <ul type="1">
                                    <li>于直播当日有一笔以上存款即可参与。</li>
                                    <li>于每次直播期间皆有美女主播与您互动游戏（比手画脚、听前奏猜歌、终极密码、屁股写字、天黑请闭眼…）</li>
                                    <li>玩赢游戏后请添加金大大微信kingballyeg提供游戏帐号。</li>
                                    <li>红包将于隔日下午16：00前添加到游戏帐号。</li>
                                    <li>添加后需达三倍流水便可提款 。</li>
                                    <li>每次直播每位会员皆有一次领红包机会,敬请把握。</li>
                                    <li>红包金额8-888元,系统随机派发。</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!--promo03end-->

            <!--promo01list-->
            <div class="modal fade" id="spromo01r">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <!--needt-modify-->
                            <div class="modal-title">秒杀礼包中奖名单</div><!--needt-modify-->
                        </div>

                        <div class="modal-body" id="spromoframe">

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="eventsubtitle"><!--中奖结果-->08/28-上周一现场结果</div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div style="margin-bottom:20px;border:1px solid #977964; background:#000000;"><img src="__PUBLIC__/single/img/cardresult.jpg" class="img-responsive center-block"></div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>

                                <div class="col-md-12">
                                    <div class="finalinfopanel">
                                        <div class="eventsubtitle"><!--中奖名单--></div>
                                        <!--result-->
                                        <div class="panelbox" style="margin-bottom:30px;border: 2px dotted #ffffff;padding: 3px;">

                                            <div style="font-size:0.85em;color:#ffffff;">
                                                <div style="width:100%;padding-top:5px; background:#db063b; overflow-y:auto; border:1px solid #977964; padding-bottom:5px;">
                                                    <div style="float:left; width:100%; text-align:center; font-weight:bold; font-size:1.5em; color:#FF0;">
                                                        <!--中奖名单-->期号：09/04中奖名单（周日公布)
                                                    </div>
                                                </div>
                                                <div style="width:100%;height:50px; padding-top:5px; background:#db063b; border:1px solid #977964;">
                                                    <div style="float:left; width:30%; text-align:center; font-weight:bold;">日期：
                                                        <br>
                                                        <span style="font-size:1.1em; color:#FF0;">09/04</span>
                                                    </div>
                                                    <div style="float:left;width:35%;text-align:center;font-weight:bold;">期号：
                                                    <br>
                                                        <span style="font-size:1.1em; color:#FF0;">09/04-004</span>
                                                </div>
                                                    <div style="float:left;width:35%;font-weight:bold;text-align:center;">开奖结果:
                                                    <br><span style="font-size:1.1em; color:#FF0;">-</span>
                                                    </div>
                                                </div>
                                                <div style="width:100%;height:30px; padding-top:5px; background:#db063b; border:1px solid #977964; border-top:none;"><div style="float:left; width:50%; text-align:center;">会员账号</div><div style="float:left;width:50%;text-align:center;">奖品/ 奖金</div></div>

                                                <div class="str1 str_wrap" style="font-size:0.8em; color:#ffffff;">

                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none">
                                                        <div style="float:left; width:50%; text-align:center; ">-</div>
                                                        <div style="float:left;width:50%;text-align:center;">-</div>
                                                    </div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none">
                                                        <div style="float:left; width:50%; text-align:center; ">-</div>
                                                        <div style="float:left;width:50%;text-align:center;">-</div>
                                                    </div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none">
                                                        <div style="float:left; width:50%; text-align:center; ">-</div>
                                                        <div style="float:left;width:50%;text-align:center;">-</div>
                                                    </div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none">
                                                        <div style="float:left; width:50%; text-align:center; ">-</div>
                                                        <div style="float:left;width:50%;text-align:center;">-</div>
                                                    </div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none">
                                                        <div style="float:left; width:50%; text-align:center; ">-</div>
                                                        <div style="float:left;width:50%;text-align:center;">-</div>
                                                    </div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:50%; text-align:center; ">-</div><div style="float:left;width:50%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:50%; text-align:center; ">-</div><div style="float:left;width:50%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:50%; text-align:center; ">-</div><div style="float:left;width:50%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:50%; text-align:center; ">-</div><div style="float:left;width:50%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:50%; text-align:center; ">-</div><div style="float:left;width:50%;text-align:center;">-</div></div>


                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>

            <!--promo01listend-->
            <!--promo02list-->
            <div class="modal fade" id="spromo02r">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <!--needt-modify-->
                            <div class="modal-title">优惠代码中奖名单</div><!--needt-modify-->
                        </div>

                        <div class="modal-body" id="spromoframe">

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="eventsubtitle"><!--中奖结果-->08/25-上周五现场结果</div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div style="margin-bottom:20px;border:1px solid #977964; background:#000000;"><img src="__PUBLIC__/single/img/girlresult.jpg" class="img-responsive center-block"></div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>

                                <div class="col-md-12">
                                    <div class="finalinfopanel">

                                        <!--result-->
                                        <div class="panelbox" style="margin-bottom:30px;border: 2px dotted #ffffff;padding: 3px;">

                                            <div style="font-size:0.85em;color:#ffffff;">
                                                <div style="width:100%;padding-top:5px; background:#db063b; overflow-y:auto; border:1px solid #977964; padding-bottom:5px;">
                                                    <div style="float:left; width:100%; text-align:center; font-weight:bold; font-size:1.5em; color:#FF0;"><!--中奖名单-->期号：09/01中奖名单（周日公布) </div></div>
                                                <div style="width:100%;overflow-y:auto; padding-top:5px; padding-bottom:5px; background:#db063b; border:1px solid #977964;">
                                                    <div style="float:left; width:30%; text-align:center; font-weight:bold;">日期： <br>
                                                        <span style="font-size:1.1em; color:#FF0;">9/01（周五）</span></div>
                                                    <div style="float:left;width:35%;text-align:center;font-weight:bold;">期号： <br>
                                                        <span style="font-size:1.1em; color:#FF0;">0901-22</span></div>
                                                    <div style="float:left;width:35%;font-weight:bold;text-align:center;">开奖结果: <br>
                                                        <span style="font-size:1.1em; color:#FF0;">-</span>
                                                    </div>
                                                </div>
                                                <div style="width:100%;overflow-y:auto; padding-top:5px; padding-bottom:5px; background:#db063b; border:1px solid #977964; border-top:none;"><div style="float:left; width:30%; text-align:center;">会员账号</div><div style="float:left;width:30%;text-align:center;">优惠代码</div>
                                                    <div style="float:left;width:40%;text-align:center;">奖品/ 奖金</div>
                                                </div>
                                                <div class="str2 str_wrap" style="font-size:0.8em; color:#ffffff;">
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none">
                                                        <div style="float:left; width:30%; text-align:center; ">-</div>
                                                        <div style="float:left;width:30%;text-align:center;">-</div>
                                                        <div style="float:left;width:40%;text-align:center;">-</div>
                                                    </div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none">
                                                        <div style="float:left; width:30%; text-align:center; ">-</div>
                                                        <div style="float:left;width:30%;text-align:center;">-</div>
                                                        <div style="float:left;width:40%;text-align:center;">-</div>
                                                    </div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none">
                                                        <div style="float:left; width:30%; text-align:center; ">-</div>
                                                        <div style="float:left;width:30%;text-align:center;">-</div>
                                                        <div style="float:left;width:40%;text-align:center;">-</div>
                                                    </div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none">
                                                        <div style="float:left; width:30%; text-align:center; ">-</div>
                                                        <div style="float:left;width:30%;text-align:center;">-</div>
                                                        <div style="float:left;width:40%;text-align:center;">-</div>
                                                    </div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none">
                                                        <div style="float:left; width:30%; text-align:center; ">-</div>
                                                        <div style="float:left;width:30%;text-align:center;">-</div>
                                                        <div style="float:left;width:40%;text-align:center;">-</div>
                                                    </div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none">
                                                        <div style="float:left; width:30%; text-align:center; ">-</div>
                                                        <div style="float:left;width:30%;text-align:center;">-</div>
                                                        <div style="float:left;width:40%;text-align:center;">-</div>
                                                    </div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none">
                                                        <div style="float:left; width:30%; text-align:center; ">-</div>
                                                        <div style="float:left;width:30%;text-align:center;">-</div>
                                                        <div style="float:left;width:40%;text-align:center;">-</div>
                                                    </div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none">
                                                        <div style="float:left; width:30%; text-align:center; ">-</div>
                                                        <div style="float:left;width:30%;text-align:center;">-</div>
                                                        <div style="float:left;width:40%;text-align:center;">-</div>
                                                    </div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none">
                                                        <div style="float:left; width:30%; text-align:center; ">-</div>
                                                        <div style="float:left;width:30%;text-align:center;">-</div>
                                                        <div style="float:left;width:40%;text-align:center;">-</div>
                                                    </div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">--</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:30%; text-align:center; ">-</div><div style="float:left;width:30%;text-align:center;">-</div><div style="float:left;width:40%;text-align:center;">-</div></div>

                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </div>

            <!--promo02listend-->
            <!--promo03list-->
            <div class="modal fade" id="spromo03r">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <!--needt-modify-->
                            <div class="modal-title">红包中奖名单</div><!--needt-modify-->
                        </div>

                        <div class="modal-body" id="spromoframe">

                            <div class="row">

                                <div class="col-md-12">


                                    <div class="col-md-12">
                                        <div style=""><img src="__PUBLIC__/single/img/redpackresult.png" class="img-responsive center-block"></div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="finalinfopanel">

                                        <!--result-->
                                        <div class="panelbox" style="margin-bottom:30px;border: 2px dotted #ffffff;padding: 3px;">

                                            <div style="font-size:0.85em;color:#ffffff;">
                                                <div style="width:100%;padding-top:5px; background:#db063b; overflow-y:auto; border:1px solid #977964; padding-bottom:5px;"><div style="float:left; width:100%; text-align:center; font-weight:bold; font-size:1.5em; color:#FF0;">玩游戏送红包得奖名单 </div></div>
                                                <div style="width:100%;overflow-y:auto; padding-top:5px; padding-bottom:5px; background:#db063b; border:1px solid #977964;"><div style="float:left; width:100%; text-align:center; font-weight:bold;">日期： <span style="font-size:1.1em; color:#FF0;">-</span></div></div>
                                                <div style="width:100%;overflow-y:auto; padding-top:5px; padding-bottom:5px; background:#db063b; border:1px solid #977964; border-top:none;"><div style="float:left; width:100%; text-align:center;">会员账号</div></div>
                                                <div class="str3 str_wrap" style="font-size:0.8em; color:#ffffff;">

                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:100%; text-align:center; ">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:100%; text-align:center; ">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:100%; text-align:center; ">-</div></div>
                                                    <div style="width:100%;height:30px; padding-top:5px; background:#333333; border:1px solid #977964; border-top:none"><div style="float:left; width:100%; text-align:center; ">-</div></div>


                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </div>

            <!--promo03listend-->




            <!--Timetable-->
            <div class="modal fade" id="modal-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <!--needt-modify-->
                            <div class="modal-title"></div><!--needt-modify-->
                        </div>

                        <div class="modal-body" id="tableframe">






                            <!--normal-->
                            <table style="text-align:center; border:1px solid #999; width:100%;">

                                <tbody><tr>
                                    <th width="15%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>8/21<br>星期一</span><span style="font-size:0.8em; color:#FF0;"> 洒红包<img src="__PUBLIC__/single/img/angpow.png" width="22"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">8/22<br>星期二</th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>8/23<br>星期三</span><span style="font-size:0.8em; color:#FF0;"> 洒红包<img src="__PUBLIC__/single/img/angpow.png" width="22"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">8/24<br>星期四</th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>8/25<br>星期五</span><span style="font-size:0.8em; color:#FF0;"> 开奖<img src="__PUBLIC__/single/img/diamond.png" width="30"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">8/26<br>星期六</th>
                                    <th width="15%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">8/27<br>星期日</th>
                                </tr>
                                <tr valign="top">
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">双主播：小五妞+小艾妞</span><br>七夕翘臀织女<br><span style="font-size:0.75em;color:white;font-weight:bold;background:red; padding:2px;">秒杀礼包二次对奖</span></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：45 - 22：45<br><span style="font-weight:bold;color:#f21d59">薛小凉</span><br>角色扮演幻想之夜</td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">啾宝</span><br>限量100名！<br>打飞机特辑！鼻血直流露点秀！<br><span style="font-size:0.75em;color:white;font-weight:bold;background:red; padding:2px;">游戏送红包</span></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                </tr>
                                </tbody></table>
                            <!--normalend-->
                            <!--normal-->
                            <table style="text-align:center; border:1px solid #999; width:100%;">

                                <tbody><tr>
                                    <th width="15%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>8/28<br>星期一</span><span style="font-size:0.8em; color:#FF0;"> 洒红包<img src="__PUBLIC__/single/img/angpow.png" width="22"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">8/29<br>星期二</th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>8/30<br>星期三</span><span style="font-size:0.8em; color:#FF0;"> 洒红包<img src="__PUBLIC__/single/img/angpow.png" width="22"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">8/31<br>星期四</th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>9/01<br>星期五</span><span style="font-size:0.8em; color:#FF0;"> 开奖<img src="__PUBLIC__/single/img/diamond.png" width="30"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/02<br>星期六</th>
                                    <th width="15%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/03<br>星期日</th>
                                </tr>
                                <tr valign="top">
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">萌萌</span><br> 七夕特辑<br>徵求一夜情人<br><span style="font-size:0.75em;color:white;font-weight:bold;background:red; padding:2px;">秒杀礼包二次对奖</span></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：45 - 22：45<br><span style="font-weight:bold;color:#f21d59">薛小凉</span><br>粉色系少女<br>高中时隔壁教室的双马尾女孩</td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">娣奇</span><br>9月的第一天<br>女子学园开学啦！<br><span style="font-size:0.75em;color:white;font-weight:bold;background:red; padding:2px;">游戏送红包</span></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                </tr>
                                </tbody></table>
                            <!--normalend-->
                            <!--normal-->
                            <table style="text-align:center; border:1px solid #999; width:100%;">

                                <tbody><tr>
                                    <th width="15%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>9/04<br>星期一</span><span style="font-size:0.8em; color:#FF0;"> 洒红包<img src="__PUBLIC__/single/img/angpow.png" width="22"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/05<br>星期二</th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>9/06<br>星期三</span><span style="font-size:0.8em; color:#FF0;"> 洒红包<img src="__PUBLIC__/single/img/angpow.png" width="22"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/07<br>星期四</th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>9/08<br>星期五</span><span style="font-size:0.8em; color:#FF0;"> 开奖<img src="__PUBLIC__/single/img/diamond.png" width="30"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/09<br>星期六</th>
                                    <th width="15%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/10<br>星期日</th>
                                </tr>
                                <tr valign="top">
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">薛小凉</span><br>神秘企划<br><span style="font-size:0.75em;color:white;font-weight:bold;background:red; padding:2px;">秒杀礼包二次对奖</span></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">柠檬</span><br>酸甜系女孩<br>高中那会儿隔壁班的女同学</td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">啾宝</span><br>女体探索影集I<br>精淫島的冒险 挖''宝''大赛<br><span style="font-size:0.75em;color:white;font-weight:bold;background:red; padding:2px;">游戏送红包</span></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                </tr>
                                </tbody></table>
                            <!--normalend-->
                            <!--normal-->
                            <table style="text-align:center; border:1px solid #999; width:100%;">

                                <tbody><tr>
                                    <th width="15%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>9/11<br>星期一</span><span style="font-size:0.8em; color:#FF0;"> 洒红包<img src="__PUBLIC__/single/img/angpow.png" width="22"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/12<br>星期二</th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>9/13<br>星期三</span><span style="font-size:0.8em; color:#FF0;"> 洒红包<img src="__PUBLIC__/single/img/angpow.png" width="22"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/14<br>星期四</th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>9/15<br>星期五</span><span style="font-size:0.8em; color:#FF0;"> 开奖<img src="__PUBLIC__/single/img/diamond.png" width="30"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/16<br>星期六</th>
                                    <th width="15%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/17<br>星期日</th>
                                </tr>
                                <tr valign="top">
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">小五妞＆小艾妞</span><br>性感小野猫<br>到你梦里喵喵叫<br><span style="font-size:0.75em;color:white;font-weight:bold;background:red; padding:2px;">秒杀礼包二次对奖</span></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">艾霓</span><br>越难得到就越想要！<br>难以抗拒的坏女孩！</td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">啾宝</span><br>女体探索影集II<br>难忘的茎验分享七次怪談之複抽之路<br><span style="font-size:0.75em;color:white;font-weight:bold;background:red; padding:2px;">游戏送红包</span></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                </tr>
                                </tbody></table>
                            <!--normalend-->
                            <!--normal-->
                            <table style="text-align:center; border:1px solid #999; width:100%;">

                                <tbody><tr>
                                    <th width="15%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>9/18<br>星期一</span><span style="font-size:0.8em; color:#FF0;"> 洒红包<img src="__PUBLIC__/single/img/angpow.png" width="22"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/19<br>星期二</th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>9/20<br>星期三</span><span style="font-size:0.8em; color:#FF0;"> 洒红包<img src="__PUBLIC__/single/img/angpow.png" width="22"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/21<br>星期四</th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>9/22<br>星期五</span><span style="font-size:0.8em; color:#FF0;"> 开奖<img src="__PUBLIC__/single/img/diamond.png" width="30"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/23<br>星期六</th>
                                    <th width="15%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/24<br>星期日</th>
                                </tr>
                                <tr valign="top">
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">薛小凉</span><br>神秘企划<br><span style="font-size:0.75em;color:white;font-weight:bold;background:red; padding:2px;">秒杀礼包二次对奖</span></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">艾霓</span><br>到学妹作客<br>居然只穿内衣迎接我</td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">啾宝</span><br>限量100名！<br>打飞机特辑！鼻血直流露点秀！<br><span style="font-size:0.75em;color:white;font-weight:bold;background:red; padding:2px;">游戏送红包</span></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                </tr>
                                </tbody></table>
                            <!--normalend-->
                            <!--normal-->
                            <table style="text-align:center; border:1px solid #999; width:100%;">

                                <tbody><tr>
                                    <th width="15%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>9/25<br>星期一</span><span style="font-size:0.8em; color:#FF0;"> 洒红包<img src="__PUBLIC__/single/img/angpow.png" width="22"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/26<br>星期二</th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>9/27<br>星期三</span><span style="font-size:0.8em; color:#FF0;"> 洒红包<img src="__PUBLIC__/single/img/angpow.png" width="22"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/28<br>星期四</th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;"><span>9/29<br>星期五</span><span style="font-size:0.8em; color:#FF0;"> 开奖<img src="__PUBLIC__/single/img/diamond.png" width="30"></span></th>
                                    <th width="14%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">9/30<br>星期六</th>
                                    <th width="15%" style="text-align:center;border:1px solid #999;background-color:#f21d59;color:#ffffff;">10/01<br>星期日</th>
                                </tr>
                                <tr valign="top">
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">小五妞＆小艾妞</span><br>皇上吉祥<br>为您献上性感小骚包<br><span style="font-size:0.75em;color:white;font-weight:bold;background:red; padding:2px;">秒杀礼包二次对奖</span></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">柠檬</span><br>抓住夏天的尾巴<br>初秋的黄色泳衣</td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;">21：00 - 22：30<br><span style="font-weight:bold;color:#f21d59">萌萌</span><br>紫醉金迷夜上海<br>性感旗袍女郎<br><span style="font-size:0.75em;color:white;font-weight:bold;background:red; padding:2px;">游戏送红包</span></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                    <td style="text-align:center;border:1px solid #999;background-color:#ecebeb;"></td>
                                </tr>
                                </tbody></table>
                            <!--normalend-->

                        </div>

                    </div>
                </div>
                <!--PTimetableend-->



                <script src="__PUBLIC__/single/img/bootstrap.min.js"></script>
                <script src="__PUBLIC__/single/img/css3-animate-it.js"></script>
                <script src="__PUBLIC__/single/img/wow.js"></script>
                <script type="text/javascript">
                    var html5lightbox_options = {
                        watermark: "http://html5box.com//resources/views/home/live/first/images/html5boxlogo.png",
                        watermarklink: ""
                    };
                </script>


                <script>
                    wow = new WOW(
                            {
                                animateClass: 'animated',
                                offset:       100,
                                callback:     function(box) {
                                    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                                }
                            }
                    );
                    wow.init();
                    document.getElementById('moar').onclick = function() {
                        var section = document.createElement('section');
                        section.className = 'section--purple wow fadeInDown';
                        this.parentNode.insertBefore(section, this);
                    };
                </script>
                <script src="__PUBLIC__/single/img/jquery.liMarquee.js"></script>
                <script>
                    $(window).load(function(){
                        $('.str1').liMarquee({
                            direction: 'up'
                        });
                        $('.str2').liMarquee({
                            direction: 'up'
                        });
                        $('.str3').liMarquee({
                            direction: 'up'
                        });
                    });

                </script>


            </div>


        </div>
    </div>
</div>
<footer style="bottom: 0;width: 100%; font-size:2.5ex">
    Copyright@2010-2020 易游网络 官方QQ:800805656
</footer>
</div>
</body>
</html>
