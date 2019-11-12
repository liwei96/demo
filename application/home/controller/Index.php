<?php

namespace app\home\controller;

use think\Controller;
use think\Request;
use think\Cookie;
use app\admin\model\Goods;
use app\admin\model\Category;
use app\admin\model\Project;
use app\admin\model\News;
use app\admin\model\Tuan;
use app\home\model\Time;
use app\admin\model\Text;
use app\admin\model\Success;
use app\admin\model\Tupai;
use app\admin\model\Yushou;
use app\admin\model\Yaohao;
use app\admin\model\You;
use app\home\model\Wen;
use app\admin\model\Attribute;

class Index extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
	    $date = time();
        $day = date('z',$date); 
        $sum=Time::where('id',1)->column('num')[0];
        $d=Time::where('id',1)->column('day')[0];
        if($day-$d==1 || $day==1){
            $sum=$sum+4;
            $d=$day;
        }
        $l=[];
        $l['day']=$d;
        $l['num']=$sum;
        Time::update($l,['id'=>1]);
        
        $city=Category::where('pid',0)->select();
        if(Cookie::has('city')){
            $qus=Category::where('pid',Cookie::get('city'))->column('id');
            $list=Goods::order('id','desc')->where('cate_id','in',$qus)->where('tdeng','eq','一级')->paginate(3);
        }else{
            $qus=Category::where('pid',1)->column('id');
            $list=Goods::order('id','desc')->where('cate_id','in',$qus)->where('tdeng','eq','一级')->paginate(3);
            Cookie::set('city',1,3600);
        }
         
        foreach($list as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        
        if(Cookie::has('city')){
            $ts=Category::where('pid',Cookie::get('city'))->column('id');
        }else{
            $ts=Category::where('pid',1)->column('id');
        }
        $ts=Goods::where('cate_id','in',$ts)->column('id');
        $projects=Project::where('bid','in',$ts)->order('id','desc')->paginate(3);
        foreach($projects as $v){
            $v['img']=Goods::where('id',$v['bid'])->column('building_img')[0];
            // return var_dump($v['img']);
            $v['content']=htmlspecialchars_decode($v['content']);
            $v['content']=str_replace("&nbsp;","",$v['content']);
            $v['content']=strip_tags($v['content']);
            $v['content']=mb_substr($v['content'], 0, 100,"utf-8");
        }
        
        if(Cookie::has('city')){
            $news1=News::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->paginate(10);
            $news2=News::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->limit(10,10)->select();
        }else{
            $news1=News::where('cate_id','eq',1)->order('id','desc')->paginate(10);
            $news2=News::where('cate_id','eq',1)->order('id','desc')->limit(10,10)->select();
        }

        
        
       
        $tuan=Tuan::order('id','desc')->where('bid','in',$ts)->paginate(4);
        foreach($tuan as $v){
            $v['name']=Goods::where('id',$v['bid'])->column('building_name')[0];
            $v['src']=Goods::where('id',$v['bid'])->column('building_img')[0];
            $v['price']=Goods::where('id',$v['bid'])->column('danjia')[0];
            $cate_id=Goods::where('id',$v['bid'])->column('cate_id')[0];
            $n=Category::where('id',$cate_id)->column('pid')[0];
            $v['qu']=Category::where('id',$cate_id)->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
            $v['jianmian']=Goods::where('id',$v['bid'])->column('jianji')[0];
            $v['humianji']=Goods::where('id',$v['bid'])->column('humianji')[0];
            $v['zhuangxiu']=Goods::where('id',$v['bid'])->column('building_zhuangxiu')[0];
            $v['xiaoshou']=Goods::where('id',$v['bid'])->column('building_xiaoshou')[0];
            $v['ditie']=Goods::where('id',$v['bid'])->column('building_ditie')[0];
            $v['start_m']=explode('-',$v['start'])[1];
            $v['start_d']=explode('-',$v['start'])[2];
            $v['end_m']=explode('-',$v['end'])[1];
            $v['end_d']=explode('-',$v['end'])[2];
        }
        
        $where=[];
        if(Cookie::has('city')){
            $qus=Category::where('pid',Cookie::get('city'))->column('id');
            $where['cate_id']=['in',$qus];
        }else{
            $qus=Category::where('pid',1)->column('id');
            $where['cate_id']=['in',$qus];
        }
        $num=Goods::where($where)->count('id');
        
        if(Cookie::has('city')){
            $success=Success::where('cate_id','eq',Cookie::get('city'))->select();
            $jiao=Success::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->limit(0,1)->select();
            if($jiao){
                $jiao=$jiao[0];
                $jiao['content']=htmlspecialchars_decode($jiao['content']);
                $jiao['content']=str_replace("&nbsp;","",$jiao['content']);
                $jiao['content']=strip_tags($jiao['content']);
                $jiao['content']=mb_substr($jiao['content'], 0, 100,"utf-8");
            }
            if($success){
                foreach($success as $v){
                    $v['content']=htmlspecialchars_decode($v['content']);
                    $v['content']=str_replace("&nbsp;","",$v['content']);
                    $v['content']=strip_tags($v['content']);
                    $v['content']=mb_substr($v['content'], 0, 150,"utf-8");
                }
            }
            $sd=Success::where('cate_id','eq',Cookie::get('city'))->count();
        }else{
            
            $success=Success::where('cate_id','eq',1)->select();
            $jiao=Success::where('cate_id','eq',1)->order('id','desc')->limit(0,1)->select();
            if($jiao){
                $jiao=$jiao[0];
                $jiao['content']=htmlspecialchars_decode($jiao['content']);
            $jiao['content']=str_replace("&nbsp;","",$jiao['content']);
            $jiao['content']=strip_tags($jiao['content']);
            $jiao['content']=mb_substr($jiao['content'], 0, 100,"utf-8");
            }
            if($success){
                foreach($success as $v){
                    $v['content']=htmlspecialchars_decode($v['content']);
                    $v['content']=str_replace("&nbsp;","",$v['content']);
                    $v['content']=strip_tags($v['content']);
                    $v['content']=mb_substr($v['content'], 0, 150,"utf-8");
                }
            }
            $sd=Success::where('cate_id','eq',1)->count();
        }
        
        
        
        
        
        if(Cookie::has('city')){
            $tuis=Tupai::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->select();
        }else{
            $tuis=Tupai::where('cate_id','eq',1)->order('id','desc')->select();
        }
        if(Cookie::has('city')){
            $yus=Yushou::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->select();
        }else{
            $yus=Yushou::where('cate_id','eq',1)->order('id','desc')->select();
        }
        if(Cookie::has('city')){
            $dengs=Yaohao::order('id','desc')->where('type','登记')->where('cate_id','eq',Cookie::get('city'))->select();
        }else{
            $dengs=Yaohao::order('id','desc')->where('type','登记')->where('cate_id','eq',1)->select();
        }
        if(Cookie::has('city')){
            $haos=Yaohao::order('id','desc')->where('type','摇号')->where('cate_id','eq',Cookie::get('city'))->select();
        }else{
            $haos=Yaohao::order('id','desc')->where('type','摇号')->where('cate_id','eq',1)->select();
        }

        $dongs=Text::order('id','desc')->where('bid','in',$ts)->paginate(2);
        $dons=Text::order('id','desc')->where('bid','in',$ts)->paginate(3);
        foreach($dons as $v){
            $v['name']=Goods::where('id','eq',$v['bid'])->column('building_name')[0];
        }
        foreach($dongs as $v){
            $v['name']=Goods::where('id','eq',$v['bid'])->column('building_name')[0];
        }
        $dnum=Text::where('bid','in',$ts)->count('id');
        $qus=Category::where('pid',Cookie::get('city'))->column('id');
        $tdengs=Goods::where('cate_id','in',$qus)->where('tdeng','eq','一级')->paginate(4); 
        $yous=You::select();
        return view('index',['list'=>$list,'sum'=>$sum,'projects'=>$projects,'news1'=>$news1,'tuan'=>$tuan,'num'=>$num,'city'=>$city,'news2'=>$news2,'dons'=>$dons,'ps'=>[],
        'n'=>$sd,'success'=>$success,'tuis'=>$tuis,'yus'=>$yus,'dengs'=>$dengs,'haos'=>$haos,'jiao'=>$jiao,'dongs'=>$dongs,'dnum'=>$dnum,'tdengs'=>$tdengs,'yous'=>$yous]);
    }

    // 贵阳主页
    public function indexg()
    {
	$date = time();
        $day = date('z',$date); 
        $sum=Time::where('id',1)->column('num')[0];
        $d=Time::where('id',1)->column('day')[0];
        if($day-$d==1 || $day==1){
            $sum=$sum+4;
            $d=$day;
        }
        $l=[];
        $l['day']=$d;
        $l['num']=$sum;
        Time::update($l,['id'=>1]);
        
        $city=Category::where('pid',0)->select();
        if(Cookie::has('city')){
            $qus=Category::where('pid',Cookie::get('city'))->column('id');
            $list=Goods::order('id','desc')->where('cate_id','in',$qus)->paginate(3);
        }else{
            $qus=Category::where('pid',3)->column('id');
            $list=Goods::order('id','desc')->where('cate_id','in',$qus)->paginate(3);
            Cookie::set('city',3,3600);
        }
         
        foreach($list as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        
        if(Cookie::has('city')){
            $ts=Category::where('pid',Cookie::get('city'))->column('id');
        }else{
            $ts=Category::where('pid',3)->column('id');
        }
        $ts=Goods::where('cate_id','in',$ts)->column('id');
        
        $projects=Project::where('bid','in',$ts)->order('id','desc')->paginate(4);
        foreach($projects as $v){
            $v['img']=Goods::where('id',$v['bid'])->column('building_img')[0];
            // return var_dump($v['img']);
            $v['content']=htmlspecialchars_decode($v['content']);
            $v['content']=str_replace("&nbsp;","",$v['content']);
            $v['content']=strip_tags($v['content']);
            $v['content']=mb_substr($v['content'], 0, 100,"utf-8");
        }
        
        if(Cookie::has('city')){
            $news1=News::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->paginate(10);
            $news2=News::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->limit(10,10)->select();
        }else{
            $news1=News::where('cate_id','eq',3)->order('id','desc')->paginate(10);
            $news2=News::where('cate_id','eq',3)->order('id','desc')->limit(10,10)->select();
        }

        
        
       
        $tuan=Tuan::order('id','desc')->where('bid','in',$ts)->paginate(4);
        foreach($tuan as $v){
            $v['name']=Goods::where('id',$v['bid'])->column('building_name')[0];
            $v['src']=Goods::where('id',$v['bid'])->column('building_img')[0];
            $v['price']=Goods::where('id',$v['bid'])->column('building_jiage')[0];
            $cate_id=Goods::where('id',$v['bid'])->column('cate_id')[0];
            $n=Category::where('id',$cate_id)->column('pid')[0];
            $v['qu']=Category::where('id',$cate_id)->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
            $v['jianmian']=Goods::where('id',$v['bid'])->column('jianji')[0];
            $v['zhuangxiu']=Goods::where('id',$v['bid'])->column('building_zhuangxiu')[0];
            $v['xiaoshou']=Goods::where('id',$v['bid'])->column('building_xiaoshou')[0];
            $v['ditie']=Goods::where('id',$v['bid'])->column('building_ditie')[0];
            $v['start_m']=explode('-',$v['start'])[1];
            $v['start_d']=explode('-',$v['start'])[2];
            $v['end_m']=explode('-',$v['end'])[1];
            $v['end_d']=explode('-',$v['end'])[2];
        }
        
        $where=[];
        if(Cookie::has('city')){
            $qus=Category::where('pid',Cookie::get('city'))->column('id');
            $where['cate_id']=['in',$qus];
        }else{
            $qus=Category::where('pid',3)->column('id');
            $where['cate_id']=['in',$qus];
        }
        $num=Goods::where($where)->count('id');
        
        if(Cookie::has('city')){
            $success=Success::where('cate_id','eq',Cookie::get('city'))->select();
            $jiao=Success::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->limit(0,1)->select();
            if($jiao){
                $jiao=$jiao[0];
                $jiao['content']=htmlspecialchars_decode($jiao['content']);
                $jiao['content']=str_replace("&nbsp;","",$jiao['content']);
                $jiao['content']=strip_tags($jiao['content']);
                $jiao['content']=mb_substr($jiao['content'], 0, 100,"utf-8");
            }
            if($success){
                foreach($success as $v){
                    $v['content']=htmlspecialchars_decode($v['content']);
                    $v['content']=str_replace("&nbsp;","",$v['content']);
                    $v['content']=strip_tags($v['content']);
                    $v['content']=mb_substr($v['content'], 0, 150,"utf-8");
                }
            }
            $sd=Success::where('cate_id','eq',Cookie::get('city'))->count();
        }else{

            $success=Success::where('cate_id','eq',3)->select();
            $jiao=Success::where('cate_id','eq',3)->order('id','desc')->limit(0,1)->select();
            if($jiao){
                $jiao=$jiao[0];
                $jiao['content']=htmlspecialchars_decode($jiao['content']);
            $jiao['content']=str_replace("&nbsp;","",$jiao['content']);
            $jiao['content']=strip_tags($jiao['content']);
            $jiao['content']=mb_substr($jiao['content'], 0, 100,"utf-8");
            }
            if($success){
                foreach($success as $v){
                    $v['content']=htmlspecialchars_decode($v['content']);
                    $v['content']=str_replace("&nbsp;","",$v['content']);
                    $v['content']=strip_tags($v['content']);
                    $v['content']=mb_substr($v['content'], 0, 150,"utf-8");
                }
            }
            $sd=Success::where('cate_id','eq',3)->count();
        }
        
        
            
        

        if(Cookie::has('city')){
            $tuis=Tupai::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->select();
        }else{
            $tuis=Tupai::where('cate_id','eq',3)->order('id','desc')->select();
        }
        if(Cookie::has('city')){
            $yus=Yushou::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->select();
        }else{
            $yus=Yushou::where('cate_id','eq',3)->order('id','desc')->select();
        }
        if(Cookie::has('city')){
            $dengs=Yaohao::order('id','desc')->where('type','登记')->where('cate_id','eq',Cookie::get('city'))->select();
        }else{
            $dengs=Yaohao::order('id','desc')->where('type','登记')->where('cate_id','eq',3)->select();
        }
        if(Cookie::has('city')){
            $haos=Yaohao::order('id','desc')->where('type','摇号')->where('cate_id','eq',Cookie::get('city'))->select();
        }else{
            $haos=Yaohao::order('id','desc')->where('type','摇号')->where('cate_id','eq',3)->select();
        }

        $dongs=Text::order('id','desc')->where('bid','in',$ts)->paginate(2);
        $dons=Text::order('id','desc')->where('bid','in',$ts)->paginate(3);
        foreach($dons as $v){
            $v['name']=Goods::where('id','eq',$v['bid'])->column('building_name')[0];
        }
        foreach($dongs as $v){
            $v['name']=Goods::where('id','eq',$v['bid'])->column('building_name')[0];
        }
        $dnum=Text::where('bid','in',$ts)->count('id');
        return view('indexg',['list'=>$list,'sum'=>$sum,'projects'=>$projects,'news1'=>$news1,'tuan'=>$tuan,'num'=>$num,'city'=>$city,'news2'=>$news2,'dons'=>$dons,
        'n'=>$sd,'success'=>$success,'tuis'=>$tuis,'yus'=>$yus,'dengs'=>$dengs,'haos'=>$haos,'jiao'=>$jiao,'dongs'=>$dongs,'dnum'=>$dnum]);
    }

    // 成都主页
    public function indexc()
    {
	$date = time();
        $day = date('z',$date); 
        $sum=Time::where('id',1)->column('num')[0];
        $d=Time::where('id',1)->column('day')[0];
        if($day-$d==1 || $day==1){
            $sum=$sum+4;
            $d=$day;
        }
        $l=[];
        $l['day']=$d;
        $l['num']=$sum;
        Time::update($l,['id'=>1]);
        
        $city=Category::where('pid',0)->select();
        if(Cookie::has('city')){
            $qus=Category::where('pid',Cookie::get('city'))->column('id');
            $list=Goods::order('id','desc')->where('cate_id','in',$qus)->paginate(3);
        }else{
            $qus=Category::where('pid',47)->column('id');
            $list=Goods::order('id','desc')->where('cate_id','in',$qus)->paginate(3);
            Cookie::set('city',47,3600);
        }
         
        foreach($list as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        
        if(Cookie::has('city')){
            $ts=Category::where('pid',Cookie::get('city'))->column('id');
        }else{
            $ts=Category::where('pid',47)->column('id');
        }
        $ts=Goods::where('cate_id','in',$ts)->column('id');
        
        $projects=Project::where('bid','in',$ts)->order('id','desc')->paginate(4);
        foreach($projects as $v){
            $v['img']=Goods::where('id',$v['bid'])->column('building_img')[0];
            // return var_dump($v['img']);
            $v['content']=htmlspecialchars_decode($v['content']);
            $v['content']=str_replace("&nbsp;","",$v['content']);
            $v['content']=strip_tags($v['content']);
            $v['content']=mb_substr($v['content'], 0, 100,"utf-8");
        }
        
        if(Cookie::has('city')){
            $news1=News::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->paginate(10);
            $news2=News::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->limit(10,10)->select();
        }else{
            $news1=News::where('cate_id','eq',47)->order('id','desc')->paginate(10);
            $news2=News::where('cate_id','eq',47)->order('id','desc')->limit(10,10)->select();
        }

        
        
       
        $tuan=Tuan::order('id','desc')->where('bid','in',$ts)->paginate(4);
        foreach($tuan as $v){
            $v['name']=Goods::where('id',$v['bid'])->column('building_name')[0];
            $v['src']=Goods::where('id',$v['bid'])->column('building_img')[0];
            $v['price']=Goods::where('id',$v['bid'])->column('building_jiage')[0];
            $cate_id=Goods::where('id',$v['bid'])->column('cate_id')[0];
            $n=Category::where('id',$cate_id)->column('pid')[0];
            $v['qu']=Category::where('id',$cate_id)->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
            $v['jianmian']=Goods::where('id',$v['bid'])->column('jianji')[0];
            $v['zhuangxiu']=Goods::where('id',$v['bid'])->column('building_zhuangxiu')[0];
            $v['xiaoshou']=Goods::where('id',$v['bid'])->column('building_xiaoshou')[0];
            $v['ditie']=Goods::where('id',$v['bid'])->column('building_ditie')[0];
            $v['start_m']=explode('-',$v['start'])[1];
            $v['start_d']=explode('-',$v['start'])[2];
            $v['end_m']=explode('-',$v['end'])[1];
            $v['end_d']=explode('-',$v['end'])[2];
        }
        
        $where=[];
        if(Cookie::has('city')){
            $qus=Category::where('pid',Cookie::get('city'))->column('id');
            $where['cate_id']=['in',$qus];
        }else{
            $qus=Category::where('pid',47)->column('id');
            $where['cate_id']=['in',$qus];
        }
        $num=Goods::where($where)->count('id');
        
        if(Cookie::has('city')){
            $success=Success::where('cate_id','eq',Cookie::get('city'))->select();
            $jiao=Success::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->limit(0,1)->select();
            if($jiao){
                $jiao=$jiao[0];
                $jiao['content']=htmlspecialchars_decode($jiao['content']);
                $jiao['content']=str_replace("&nbsp;","",$jiao['content']);
                $jiao['content']=strip_tags($jiao['content']);
                $jiao['content']=mb_substr($jiao['content'], 0, 100,"utf-8");
            }
            if($success){
                foreach($success as $v){
                    $v['content']=htmlspecialchars_decode($v['content']);
                    $v['content']=str_replace("&nbsp;","",$v['content']);
                    $v['content']=strip_tags($v['content']);
                    $v['content']=mb_substr($v['content'], 0, 150,"utf-8");
                }
            }
            $sd=Success::where('cate_id','eq',Cookie::get('city'))->count();
        }else{

            $success=Success::where('cate_id','eq',47)->select();
            $jiao=Success::where('cate_id','eq',47)->order('id','desc')->limit(0,1)->select();
            if($jiao){
                $jiao=$jiao[0];
                $jiao['content']=htmlspecialchars_decode($jiao['content']);
            $jiao['content']=str_replace("&nbsp;","",$jiao['content']);
            $jiao['content']=strip_tags($jiao['content']);
            $jiao['content']=mb_substr($jiao['content'], 0, 100,"utf-8");
            }
            if($success){
                foreach($success as $v){
                    $v['content']=htmlspecialchars_decode($v['content']);
                    $v['content']=str_replace("&nbsp;","",$v['content']);
                    $v['content']=strip_tags($v['content']);
                    $v['content']=mb_substr($v['content'], 0, 150,"utf-8");
                }
            }
            $sd=Success::where('cate_id','eq',47)->count();
        }
        
        
            
        

        if(Cookie::has('city')){
            $tuis=Tupai::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->select();
        }else{
            $tuis=Tupai::where('cate_id','eq',47)->order('id','desc')->select();
        }
        if(Cookie::has('city')){
            $yus=Yushou::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->select();
        }else{
            $yus=Yushou::where('cate_id','eq',47)->order('id','desc')->select();
        }
        if(Cookie::has('city')){
            $dengs=Yaohao::order('id','desc')->where('type','登记')->where('cate_id','eq',Cookie::get('city'))->select();
        }else{
            $dengs=Yaohao::order('id','desc')->where('type','登记')->where('cate_id','eq',47)->select();
        }
        if(Cookie::has('city')){
            $haos=Yaohao::order('id','desc')->where('type','摇号')->where('cate_id','eq',Cookie::get('city'))->select();
        }else{
            $haos=Yaohao::order('id','desc')->where('type','摇号')->where('cate_id','eq',47)->select();
        }

        $dongs=Text::order('id','desc')->where('bid','in',$ts)->paginate(2);
        $dons=Text::order('id','desc')->where('bid','in',$ts)->paginate(3);
        foreach($dons as $v){
            $v['name']=Goods::where('id','eq',$v['bid'])->column('building_name')[0];
        }
        foreach($dongs as $v){
            $v['name']=Goods::where('id','eq',$v['bid'])->column('building_name')[0];
        }
        $dnum=Text::where('bid','in',$ts)->count('id');
        return view('indexc',['list'=>$list,'sum'=>$sum,'projects'=>$projects,'news1'=>$news1,'tuan'=>$tuan,'num'=>$num,'city'=>$city,'news2'=>$news2,'dons'=>$dons,
        'n'=>$sd,'success'=>$success,'tuis'=>$tuis,'yus'=>$yus,'dengs'=>$dengs,'haos'=>$haos,'jiao'=>$jiao,'dongs'=>$dongs,'dnum'=>$dnum]);
    }

    // 重庆主页
    public function indexq()
    {
	$date = time();
        $day = date('z',$date); 
        $sum=Time::where('id',1)->column('num')[0];
        $d=Time::where('id',1)->column('day')[0];
        if($day-$d==1 || $day==1){
            $sum=$sum+4;
            $d=$day;
        }
        $l=[];
        $l['day']=$d;
        $l['num']=$sum;
        Time::update($l,['id'=>1]);
        
        $city=Category::where('pid',0)->select();
        if(Cookie::has('city')){
            $qus=Category::where('pid',Cookie::get('city'))->column('id');
            $list=Goods::order('id','desc')->where('cate_id','in',$qus)->paginate(3);
        }else{
            $qus=Category::where('pid',41)->column('id');
            $list=Goods::order('id','desc')->where('cate_id','in',$qus)->paginate(3);
            Cookie::set('city',41,3600);
        }
         
        foreach($list as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        
        if(Cookie::has('city')){
            $ts=Category::where('pid',Cookie::get('city'))->column('id');
        }else{
            $ts=Category::where('pid',41)->column('id');
        }
        $ts=Goods::where('cate_id','in',$ts)->column('id');
        
        $projects=Project::where('bid','in',$ts)->order('id','desc')->paginate(4);
        foreach($projects as $v){
            $v['img']=Goods::where('id',$v['bid'])->column('building_img')[0];
            // return var_dump($v['img']);
            $v['content']=htmlspecialchars_decode($v['content']);
            $v['content']=str_replace("&nbsp;","",$v['content']);
            $v['content']=strip_tags($v['content']);
            $v['content']=mb_substr($v['content'], 0, 100,"utf-8");
        }
        
        if(Cookie::has('city')){
            $news1=News::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->paginate(10);
            $news2=News::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->limit(10,10)->select();
        }else{
            $news1=News::where('cate_id','eq',41)->order('id','desc')->paginate(10);
            $news2=News::where('cate_id','eq',41)->order('id','desc')->limit(10,10)->select();
        }

        
        
       
        $tuan=Tuan::order('id','desc')->where('bid','in',$ts)->paginate(4);
        foreach($tuan as $v){
            $v['name']=Goods::where('id',$v['bid'])->column('building_name')[0];
            $v['src']=Goods::where('id',$v['bid'])->column('building_img')[0];
            $v['price']=Goods::where('id',$v['bid'])->column('building_jiage')[0];
            $cate_id=Goods::where('id',$v['bid'])->column('cate_id')[0];
            $n=Category::where('id',$cate_id)->column('pid')[0];
            $v['qu']=Category::where('id',$cate_id)->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
            $v['jianmian']=Goods::where('id',$v['bid'])->column('jianji')[0];
            $v['zhuangxiu']=Goods::where('id',$v['bid'])->column('building_zhuangxiu')[0];
            $v['xiaoshou']=Goods::where('id',$v['bid'])->column('building_xiaoshou')[0];
            $v['ditie']=Goods::where('id',$v['bid'])->column('building_ditie')[0];
            $v['start_m']=explode('-',$v['start'])[1];
            $v['start_d']=explode('-',$v['start'])[2];
            $v['end_m']=explode('-',$v['end'])[1];
            $v['end_d']=explode('-',$v['end'])[2];
        }
        
        $where=[];
        if(Cookie::has('city')){
            $qus=Category::where('pid',Cookie::get('city'))->column('id');
            $where['cate_id']=['in',$qus];
        }else{
            $qus=Category::where('pid',41)->column('id');
            $where['cate_id']=['in',$qus];
        }
        $num=Goods::where($where)->count('id');
        
        if(Cookie::has('city')){
            $success=Success::where('cate_id','eq',Cookie::get('city'))->select();
            $jiao=Success::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->limit(0,1)->select();
            if($jiao){
                $jiao=$jiao[0];
                $jiao['content']=htmlspecialchars_decode($jiao['content']);
                $jiao['content']=str_replace("&nbsp;","",$jiao['content']);
                $jiao['content']=strip_tags($jiao['content']);
                $jiao['content']=mb_substr($jiao['content'], 0, 100,"utf-8");
            }
            if($success){
                foreach($success as $v){
                    $v['content']=htmlspecialchars_decode($v['content']);
                    $v['content']=str_replace("&nbsp;","",$v['content']);
                    $v['content']=strip_tags($v['content']);
                    $v['content']=mb_substr($v['content'], 0, 150,"utf-8");
                }
            }
            $sd=Success::where('cate_id','eq',Cookie::get('city'))->count();
        }else{

            $success=Success::where('cate_id','eq',41)->select();
            $jiao=Success::where('cate_id','eq',41)->order('id','desc')->limit(0,1)->select();
            if($jiao){
                $jiao=$jiao[0];
                $jiao['content']=htmlspecialchars_decode($jiao['content']);
            $jiao['content']=str_replace("&nbsp;","",$jiao['content']);
            $jiao['content']=strip_tags($jiao['content']);
            $jiao['content']=mb_substr($jiao['content'], 0, 100,"utf-8");
            }
            if($success){
                foreach($success as $v){
                    $v['content']=htmlspecialchars_decode($v['content']);
                    $v['content']=str_replace("&nbsp;","",$v['content']);
                    $v['content']=strip_tags($v['content']);
                    $v['content']=mb_substr($v['content'], 0, 150,"utf-8");
                }
            }
            $sd=Success::where('cate_id','eq',3)->count();
        }
        
        
            
        

        if(Cookie::has('city')){
            $tuis=Tupai::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->select();
        }else{
            $tuis=Tupai::where('cate_id','eq',41)->order('id','desc')->select();
        }
        if(Cookie::has('city')){
            $yus=Yushou::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->select();
        }else{
            $yus=Yushou::where('cate_id','eq',41)->order('id','desc')->select();
        }
        if(Cookie::has('city')){
            $dengs=Yaohao::order('id','desc')->where('type','登记')->where('cate_id','eq',Cookie::get('city'))->select();
        }else{
            $dengs=Yaohao::order('id','desc')->where('type','登记')->where('cate_id','eq',41)->select();
        }
        if(Cookie::has('city')){
            $haos=Yaohao::order('id','desc')->where('type','摇号')->where('cate_id','eq',Cookie::get('city'))->select();
        }else{
            $haos=Yaohao::order('id','desc')->where('type','摇号')->where('cate_id','eq',41)->select();
        }

        $dongs=Text::order('id','desc')->where('bid','in',$ts)->paginate(2);
        $dons=Text::order('id','desc')->where('bid','in',$ts)->paginate(3);
        foreach($dons as $v){
            $v['name']=Goods::where('id','eq',$v['bid'])->column('building_name')[0];
        }
        foreach($dongs as $v){
            $v['name']=Goods::where('id','eq',$v['bid'])->column('building_name')[0];
        }
        $dnum=Text::where('bid','in',$ts)->count('id');
        return view('indexq',['list'=>$list,'sum'=>$sum,'projects'=>$projects,'news1'=>$news1,'tuan'=>$tuan,'num'=>$num,'city'=>$city,'news2'=>$news2,'dons'=>$dons,
        'n'=>$sd,'success'=>$success,'tuis'=>$tuis,'yus'=>$yus,'dengs'=>$dengs,'haos'=>$haos,'jiao'=>$jiao,'dongs'=>$dongs,'dnum'=>$dnum]);
    }

    public function more(){

    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function buy()
    {
        //

        $qus=Category::where('pid',Cookie::get('city'))->column('id');
        $tdengs=Goods::where('cate_id','in',$qus)->where('tdeng','eq','一级')->limit(0,3)->select();
        foreach($tdengs as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
            $v['dong']=Text::order('id','desc')->where('bid','eq',$v['id'])->limit(0,1)->column('introduce')[0];
        }
        $city=Category::where('pid',0)->select();
        $yous=You::select();
        return view('buy',['tdengs'=>$tdengs,'city'=>$city,'yous'=>$yous]);
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function jiao()
    {
        //
        $data=Success::select();
        foreach($data as $v){
            $v['content']=htmlspecialchars_decode($v['content']);
            $v['content']=str_replace("&nbsp;","",$v['content']);
            $v['content']=strip_tags($v['content']);
            $v['content']=mb_substr($v['content'], 0, 100,"utf-8");
        }
        return view('jiao',['data'=>$data]);
    }
    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }
	
	public function read($id)
    {
        //
        $data=Success::where('id',$id)->find();
        $data['content']=htmlspecialchars_decode($data['content']);
            $data['content']=str_replace("&nbsp;","",$data['content']);
            $data['content']=strip_tags($data['content']);
            $data['content']=mb_substr($data['content'], 0, 800,"utf-8");
        return view('read',['data'=>$data]);
    }
    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function map()
    {
        //
        $data=Goods::select();
        $ties=Attribute::where('id',6)->column('attr_values')[0];
        $ties=explode(',',$ties);
        $dans=Attribute::where('id',3)->column('attr_values')[0];
        $dans=explode(',',$dans);
        $zongs=Attribute::where('id',12)->column('attr_values')[0];
        $zongs=explode(',',$zongs);
        $hus=Attribute::where('id',7)->column('attr_values')[0];
        $hus=explode(',',$hus);
        $xings=Attribute::where('id',8)->column('attr_values')[0];
        $xings=explode(',',$xings);
        $tes=Attribute::where('id',9)->column('attr_values')[0];
        $tes=explode(',',$tes);
        if(Cookie::has('city')){
            $cates=Category::where('pid',Cookie::get('city'))->select();
        }else{
            $cates=Category::where('pid',1)->select();
        }
        $city=Category::where('pid',0)->select();
        $kais=Attribute::where('id',13)->column('attr_values')[0];
        $kais=explode(',',$kais);
        return view('map',['data'=>$data,'cates'=>$cates,'ties'=>$ties,'dans'=>$dans,'hus'=>$hus,'city'=>$city,
        'xings'=>$xings,'tes'=>$tes,'zongs'=>$zongs,'kais'=>$kais]);
    }
    public function pmap()
    {
        $data=Goods::select();
        return view('pmap',['data'=>$data]);
    }
    

    public function city(){
        $id=request()->param()['id'];
        $name=request()->param()['name'];
        Cookie::set('city',$id,3600);
        Cookie::set('cityname',$name,3600);
        $res=['code'=>100];
        return json($res);
    }    
    public function dongs(){
	$ids=Category::where('pid','eq',Cookie::get('city'))->column('id');
	$ids=Goods::where('cate_id','in',$ids)->column('id');
        $ds=Text::where('bid','in',$ids)->order('id','desc')->select();
        $dongs=Text::where('bid','in',$ids)->order('id','desc')->paginate(15);
	foreach($dongs as $v){
	     $v['name']=Goods::where('id','eq',$v['bid'])->column('building_name');
	     if($v['name']){
			$v['name']=$v['name'][0];
		}
    }
    foreach($ds as $v){
        $v['name']=Goods::where('id','eq',$v['bid'])->column('building_name');
        if($v['name']){
           $v['name']=$v['name'][0];
       }
   }
        return view('dongs',['ds'=>$ds,'dongs'=>$dongs]);
    }
    public function liu($id){
        return view('liu',['id'=>$id]);
    }
    public function lius(){
        return view();
    }
    // 邮件
    function email($sk){
        $url = 'http://api.jy1980.com/index.php/distribute/send';
        $ch = curl_init();//初始化curl
        curl_setopt($ch, CURLOPT_URL,$url);//抓取指定网页
        curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $sk);
        $data = curl_exec($ch);//运行curl
        curl_close($ch);
    }
    public function liuget(){
        $data=request()->param();
        $phone=$data['tel'];
        if (!preg_match('/^1[3-9]\d{9}$/', $phone)) {
            $res = [
                'code' => 10001,
                'msg' => '手机号格式错误',
            ];
            return json($res);
        }
        $list=[];
        $list['phone']=$data['tel'];
        $list['sign']=time();
        $list['username']='没有';
        
        $list['source']='留言';
        $list['remark']=$data['con'];
        
        if(!array_key_exists('name',$data)){
            if(!$data['index']){
                $data['name']='不在落地页';
                Wen::create($data);
                $list['project']='';
                $list['cate_id']=cookie('city');
                $this->email($list);
            }else{
                $id=Goods::where('building_name','eq',$data['name'])->column('id')[0];
                $list['project']=$id;
                $list['cate_id']=0;
                $this->email($list);
                Wen::create($data);
            }
            
            //  sc_send('留言','留言号码是：'.$phone.';留言内容是：'.$data['content']);
        }else{
            $list['project']='';
            $list['cate_id']=cookie('city');
            $this->email($list);
            //  sc_send('留言','留言号码是：'.$phone.';留言内容是：'.$data['content'].'；留言楼盘是：'.$data['name']);
            Wen::create($data);
        }
        
        return json(['code'=>200]);
    }
    public function citys(){
        $city=Category::where('pid',0)->select();
        return view('city',['city'=>$city]);
    }

    public function chengjiaodetail(){
        $success=Success::where('cate_id','eq',Cookie::get('city'))->select();
        foreach($success as $v){
            $v['content']=htmlspecialchars_decode($v['content']);
            $v['content']=str_replace("&nbsp;","",$v['content']);
            $v['content']=strip_tags($v['content']);
            $v['content']=mb_substr($v['content'], 0, 1550,"utf-8");
        }
        $city=Category::where('pid',0)->select();
        $qus=Category::where('pid',Cookie::get('city'))->column('id');
        $tdengs=Goods::where('cate_id','in',$qus)->where('tdeng','eq','一级')->limit(0,3)->select();
        foreach($tdengs as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
            $v['dong']=Text::order('id','desc')->where('bid','eq',$v['id'])->limit(0,1)->column('introduce')[0];
        }
        return view('chejiaodetail',['city'=>$city,'success'=>$success,'tdengs'=>$tdengs]);
    }

    public function tupai(){
        $type=request()->param('type');
        $tuis=Tupai::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->select();
        $yus=Yushou::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->select();
        $haos=Yaohao::where('cate_id','eq',Cookie::get('city'))->where('type','摇号')->select();
        $dengs=Yaohao::where('cate_id','eq',Cookie::get('city'))->where('type','登记')->select();
        $qus=Category::where('pid',Cookie::get('city'))->column('id');
        $tdengs=Goods::where('cate_id','in',$qus)->where('tdeng','eq','一级')->limit(0,6)->select();
        return view('tupai',['tuis'=>$tuis,'yus'=>$yus,'haos'=>$haos,'dengs'=>$dengs,'tdengs'=>$tdengs,'type'=>$type]);
    }
}
