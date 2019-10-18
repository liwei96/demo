<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
Route::rule('test','api/test/index');
Route::rule('/','home/index/index');
Route::rule('/buy','home/index/buy');
Route::rule('/jiao','home/index/jiao');
Route::rule('/read/:id','home/index/read');
Route::rule('/map','home/index/map');
Route::rule('/pmap','home/index/pmap');
Route::rule('/city','home/index/city');
Route::rule('/index/:id','home/content/index');
Route::rule('/content/imgs','home/content/imgs');
Route::rule('/content/:id','home/content/content');
Route::rule('/dongs/:id','home/content/dongs');
Route::rule('/look/:id','home/content/look');
Route::rule('/xiang/:id','home/content/xiang');
Route::rule('/fork','home/content/fork');
Route::rule('/port1','home/content/port1');
Route::rule('/port2','home/content/port2');
Route::rule('/user','home/user/index');
Route::rule('/find','home/user/find');
Route::rule('/test','home/user/test');
Route::rule('/shou','home/user/shou');
Route::rule('/yue','home/user/yue');
Route::rule('/login','home/user/login');
Route::rule('/log','home/user/log');
Route::rule('/logout','home/user/logout');
Route::rule('/guan','home/user/guan');
Route::rule('/tou','home/user/tou');
Route::rule('/lian','home/user/lian');
Route::rule('/search/:type','home/search/index');
Route::rule('/shai','home/search/shai');
Route::rule('/tuan/:type','home/search/tuan');
Route::rule('/tu','home/search/tu');
Route::rule('/ss/:end','home/search/ss');
Route::rule('/news','home/news/index');
Route::rule('/article/:id','home/news/article');
Route::rule('/pro/:id','home/news/pro');
Route::rule('/telmsg','home/content/telmsg');
Route::rule('/gui/:type','home/search/gui');
Route::rule('/cheng/:type','home/search/cheng');
Route::rule('/chong/:type','home/search/chong');







Route::rule('/index','home/news/aa');

