<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>速示</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="/css/app.css">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="app2">
            <header>
                <div class="logo"></div>
                <div></div>
            </header>
            <div class="block video">
                <div class="container">
                    <div class="tit-name">
                        <span>正在播放:</span>
                        <h1 id="tittext">感谢您使用速示视频解析服务！</h1>
                    </div>
                    <iframe id="palybox" src="http://api.greatchina56.com/?url=" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen="true"></iframe>
                    <div class="url-box">
                        <div class="form-row col-md-12">
                            <input type="text" id="url" class="form-control url-text col-md-8" aria-label="Text input with segmented button dropdown" placeholder="请粘贴视频网址" title="请复制你想要看的视频网址，粘贴到此处点击播放即可！">
                            <div class="form-group fg-addon col-md-2">
                                <select class="url-c url-text custom-select" title="如发现视频无法正常播放请尝试更换视频线路！" id="jk">

                                    <option value="http://hhh.qqplayer.cn/beac.php?url=" selected="">
                                        推荐线路								</option>
                                    <option value="http://api.greatchina56.com/?url=">
                                        线路一								</option>
                                    <option value="http://17kyun.com/api.php?url=">
                                        线路二								</option>
                                    <option value="http://www.ibb6.com/playm3u8/?url=">
                                        线路三								</option>
                                    <option value="http://jx.618g.com/?url=">
                                        线路四								</option>
                                    <option value="http://at520.cn/jx/?url=">
                                        线路五								</option>
                                    <option value="http://jx.fuliz.cn/?url=">
                                        线路六								</option>
                                    <option value="https://api.pangujiexi.com/player.php?url=">
                                        线路七								</option>
                                    <option value="http://jx.ejiafarm.com/x/jiexi.php?url=">
                                        线路八								</option>
                                    <option value="http://api.bbbbbb.me/jx/?url=">
                                        线路九								</option>
                                </select>
                            </div>
                            <div class="form-group fg-btn col-md-2">
                                <button type="button" class="btn btn-play btn-info" title="点击开始解析并开始播放" onclick="play()">解析播放</button>
                            </div>
                        </div>
                    </div>
                    <div class="tit-gg">
                        <span>若视频播放异常，尝试刷新或更换线路即可解决！</span>
                    </div>
                </div>
            </div>
            <div class="block content">
                <div  class="support">
                    <h5>
                        支持以下网站视频
                    </h5>
                    <span class="support-more">使用方法：进入各大视频网站，找到想要观看的VIP视频，然后复制链接（浏览器上的视频地址），粘贴到视频的输入框，并点击“解析播放”即可</span>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-4">
                            <div class="logo-lie">
                                <a href="http://vip.iqiyi.com/" target="_blank" title="爱奇艺会员">
                                    <img class="img-responsive" src="img/iqiyilogo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="logo-lie">
                                <a href="http://film.qq.com/" target="_blank" title="腾讯会员中心">
                                    <img class="img-responsive" src="img/qqlogo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="logo-lie">
                                <a href="http://vip.youku.com/" target="_blank" title="优酷会员中心">
                                    <img class="img-responsive" src="img/youkulogo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="logo-lie">
                                <a href="http://www.mgtv.com/vip/" target="_blank" title="芒果会员中心">
                                    <img class="img-responsive" src="img/hunantvlogo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="logo-lie">
                                <a href="http://yuanxian.le.com/" target="_blank" title="乐视会员中心">
                                    <img class="img-responsive" src="img/letvlogo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="logo-lie">
                                <a href="http://vip.tudou.com" target="_blank" title="土豆会员中心">
                                    <img class="img-responsive" src="img/tudoulogo.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-sm-4">
                            <div class="logo-lie">
                                <a href="http://www.baofeng.com/" target="_blank" title="暴风会员">
                                    <img class="img-responsive" src="img/baofeng.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 ">
                            <div class="logo-lie">
                                <a href="http://vip.1905.com/" target="_blank" title="1905电影网视频">
                                    <img class="img-responsive" src="img/1905logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 ">
                            <div class="logo-lie">
                                <a href="http://vip.kankan.com/" target="_blank" title="天天看看">
                                    <img class="img-responsive" src="img/kankan.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 ">
                            <div class="logo-lie">
                                <a href="http://www.pptv.com/" target="_blank" title="PPTV聚力">
                                    <img class="img-responsive" src="img/pptv.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="logo-lie">
                                <a href="http://www.yinyuetai.com/" target="_blank" title="音悦台MV">
                                    <img class="img-responsive" src="img/yinyuetailogo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="logo-lie">
                                <a href="http://www.56.com/" target="_blank" title="56视频">
                                    <img class="img-responsive" src="img/56logo.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-2 col-sm-4">
                            <div class="logo-lie">
                                <a href="http://www.fun.vip" target="_blank" title="风行视频">
                                    <img class="img-responsive" src="img/fengxing.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 ">
                            <div class="logo-lie">
                                <a href="http://movie.ku6.com/" target="_blank" title="酷6视频">
                                    <img class="img-responsive" src="img/ku6logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 ">
                            <div class="logo-lie">
                                <a href="http://vip.wasu.cn/" target="_blank" title="WASU华数视频">
                                    <img class="img-responsive" src="img/wasulogo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 ">
                            <div class="logo-lie">
                                <a href="http://video.sina.com.cn/" target="_blank" title="新浪视频">
                                    <img class="img-responsive" src="img/sinalogo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="logo-lie">
                                <a href="https://film.sohu.com/" target="_blank" title="搜狐视频">
                                    <img class="img-responsive" src="img/sohulogo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="logo-lie">
                                <a href="http://www.baomihua.com/" target="_blank" title="爆米花">
                                    <img class="img-responsive" src="img/baomihualogo.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script src="/js/app.js"></script>
<script>
    const app2 = new Vue({
        el: '#app2'
    });
    function fuckyou() {
        window.close(); //关闭当前窗口(防抽)
        window.location = "about:blank"; //将当前窗口跳转置空白页
    }

    function ck() {
        console.profile();
        console.profileEnd();
        //我们判断一下profiles里面有没有东西，如果有，肯定有人按F12了，没错！！
        if(console.clear) {
            console.clear()
        };
        if(typeof console.profiles == "object") {
            return console.profiles.length > 0;
        }
    }

    function hehe() {
        if((window.console && (console.firebug || console.table && /firebug/i.test(console.table()))) || (typeof opera == 'object' && typeof opera.postError == 'function' && console.profile.length > 0)) {
            fuckyou();
        }
        if(typeof console.profiles == "object" && console.profiles.length > 0) {
            fuckyou();
        }
    }
    hehe();
    window.onresize = function() {
        if((window.outerHeight - window.innerHeight) > 200)
        //判断当前窗口内页高度和窗口高度，如果差值大于200，那么呵呵
            fuckyou();
    }
    function play(){
        let url = $("#url").val();
        let ifram_video = $("#palybox");
        let selected_road = $("#jk").val();
        let real_url = selected_road+url;
        ifram_video.attr('src',real_url );

    }
</script>
</html>
