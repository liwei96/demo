<?php

namespace app\home\controller;

use think\Controller;
use think\Request;
use think\Cookie;
use think\Session;
use app\admin\model\Goods;
use app\admin\model\Category;
use app\admin\model\Attribute;
use app\admin\model\Tuan;
use app\admin\model\Text;
use app\admin\model\You;

class Search extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($type,Request $request)
    {
        if(!Session::has('fork')){
            Session::set('fork',[]);
        }
        //
        if(!Cookie::has('where')){
            Cookie::set('where',[]);
        }else{
            Cookie::delete('where');
        }
        if(Cookie::has('city')){
            $qus=Category::where('pid',Cookie::get('city'))->column('id');
            $where['cate_id']=['in',$qus];
        }else{
            $qus=Category::where('pid',1)->column('id');
            Cookie::set('city',1);
            $where['cate_id']=['in',$qus];
        }
        
        if(request()->isGet()){
            if($type=='0'){
                $data=Goods::order('id','desc')->where($where)->paginate(15);
            }else{
                $where['building_tese']=['like',$type];
                $data=Goods::order('id','desc')->where($where)->paginate(15);
            }
	        $num=Goods::count('id');
	        $page=Goods::where($where)->count('id');
            $page=ceil($page/15);
        }else{
            $name=$request->only('name');
            $where['building_name']=['like','%'.$name['name'].'%'];
            $page=Goods::where($where)->count('id');
            if($page!=0){
                $page=ceil($page/15);
                $data=Goods::order('id','desc')->where($where)->limit(0,15)->select();
                $num=Goods::where($where)->count('id');
            }else{
                $page=Goods::where('building_name','like','%'.$name['name'].'%')->count('id');
                $data=Goods::order('id','desc')->where('building_name','like','%'.$name['name'].'%')->limit(0,15)->select();
                $num=Goods::where('building_name','like','%'.$name['name'].'%')->count('id');
                if($num){
                    $nc=$data[0]['cate_id'];
                    $nc=Category::where('id','eq',$nc)->column('pid')[0];
                    $nn=Category::where('id','eq',$nc)->column('area_name')[0];
                    Cookie::set('city',$nc);
                    Cookie::set('cityname',$nn);
                }
                
                // dump($nc);die();
            }
            
        }
        
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
        // $w=[];
        // $w['cate_id']=['in',$qus];
        // $w['building_tejia']=['eq','是'];
        // $hots=Goods::where($w)->paginate(13);
        // foreach($hots as $v){
        //     $n=Category::where('id',$v['cate_id'])->column('pid')[0];
        //     $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
        //     $v['city']=Category::where('id',$n)->column('area_name')[0];
        // }
        foreach($data as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        $qus=Category::where('pid',Cookie::get('city'))->column('id');
        $tdengs=Goods::where('cate_id','in',$qus)->where('tdeng','eq','一级')->limit(0,6)->select();
        foreach($tdengs as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
            $v['dong']=Text::order('id','desc')->where('bid','eq',$v['id'])->limit(0,1)->column('introduce')[0];
        }
        $yous=You::select();
        return view('search',['data'=>$data,'cates'=>$cates,'ties'=>$ties,'dans'=>$dans,'hus'=>$hus,'city'=>$city,'tdengs'=>$tdengs,
                                'xings'=>$xings,'tes'=>$tes,'zongs'=>$zongs,'kais'=>$kais,'num'=>$num,'page'=>$page,'yous'=>$yous]);
    }

    // 贵阳
    public function gui($type,Request $request)
    {
        if(!Session::has('fork')){
            Session::set('fork',[]);
        }
        //
        if(!Cookie::has('where')){
            Cookie::set('where',[]);
        }else{
            Cookie::delete('where');
        }
        if(Cookie::has('city')){
            $qus=Category::where('pid',Cookie::get('city'))->column('id');
            $where['cate_id']=['in',$qus];
        }else{
            $qus=Category::where('pid',3)->column('id');
            $where['cate_id']=['in',$qus];
        }
        
        if(request()->isGet()){
            if($type=='0'){
                $data=Goods::order('id','desc')->where($where)->paginate(15);
            }else{
                $where['building_tese']=['like',$type];
                $data=Goods::order('id','desc')->where($where)->paginate(15);
            }
	   $num=Goods::count('id');
	   $page=Goods::where($where)->count('id');
            $page=ceil($page/15);
        }else{
            $name=$request->only('name');
	   
            $where['building_name']=['like','%'.$name['name'].'%'];
	   $page=Goods::where($where)->count('id');
            $page=ceil($page/15);
            $data=Goods::order('id','desc')->where($where)->limit(0,15)->select();
	    $num=Goods::where($where)->count('id');
        }
        
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
        $w=[];
        $w['cate_id']=['in',$qus];
        $w['building_tejia']=['eq','是'];
        $hots=Goods::where($w)->paginate(13);
        foreach($hots as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        foreach($data as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        $tdengs=Goods::where('cate_id','in',$qus)->where('tdeng','eq','一级')->limit(0,6)->select();
        foreach($tdengs as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        return view('search',['data'=>$data,'cates'=>$cates,'ties'=>$ties,'dans'=>$dans,'hus'=>$hus,'city'=>$city,'tdengs'=>$tdengs,
                                'xings'=>$xings,'tes'=>$tes,'zongs'=>$zongs,'kais'=>$kais,'num'=>$num,'hots'=>$hots,'page'=>$page]);
    }

    // 成都
    public function cheng($type,Request $request)
    {
        if(!Session::has('fork')){
            Session::set('fork',[]);
        }
        //
        if(!Cookie::has('where')){
            Cookie::set('where',[]);
        }else{
            Cookie::delete('where');
        }
        if(Cookie::has('city')){
            $qus=Category::where('pid',Cookie::get('city'))->column('id');
            $where['cate_id']=['in',$qus];
        }else{
            $qus=Category::where('pid',47)->column('id');
            $where['cate_id']=['in',$qus];
        }
        
        if(request()->isGet()){
            if($type=='0'){
                $data=Goods::order('id','desc')->where($where)->paginate(15);
            }else{
                $where['building_tese']=['like',$type];
                $data=Goods::order('id','desc')->where($where)->paginate(15);
            }
	   $num=Goods::count('id');
	   $page=Goods::where($where)->count('id');
            $page=ceil($page/15);
        }else{
            $name=$request->only('name');
	   
            $where['building_name']=['like','%'.$name['name'].'%'];
	   $page=Goods::where($where)->count('id');
            $page=ceil($page/15);
            $data=Goods::order('id','desc')->where($where)->limit(0,15)->select();
	    $num=Goods::where($where)->count('id');
        }
        
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
        $w=[];
        $w['cate_id']=['in',$qus];
        $w['building_tejia']=['eq','是'];
        $hots=Goods::where($w)->paginate(13);
        foreach($hots as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        foreach($data as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        $tdengs=Goods::where('cate_id','in',$qus)->where('tdeng','eq','一级')->limit(0,6)->select();
        foreach($tdengs as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        return view('search',['data'=>$data,'cates'=>$cates,'ties'=>$ties,'dans'=>$dans,'hus'=>$hus,'city'=>$city,'tdengs'=>$tdengs,
                                'xings'=>$xings,'tes'=>$tes,'zongs'=>$zongs,'kais'=>$kais,'num'=>$num,'hots'=>$hots,'page'=>$page]);
    }

    // 重庆
    public function chong($type,Request $request)
    {
        if(!Session::has('fork')){
            Session::set('fork',[]);
        }
        //
        if(!Cookie::has('where')){
            Cookie::set('where',[]);
        }else{
            Cookie::delete('where');
        }
        if(Cookie::has('city')){
            $qus=Category::where('pid',Cookie::get('city'))->column('id');
            $where['cate_id']=['in',$qus];
        }else{
            $qus=Category::where('pid',41)->column('id');
            $where['cate_id']=['in',$qus];
        }
        
        if(request()->isGet()){
            if($type=='0'){
                $data=Goods::order('id','desc')->where($where)->paginate(15);
            }else{
                $where['building_tese']=['like',$type];
                $data=Goods::order('id','desc')->where($where)->paginate(15);
            }
	   $num=Goods::count('id');
	   $page=Goods::where($where)->count('id');
            $page=ceil($page/15);
        }else{
            $name=$request->only('name');
	   
            $where['building_name']=['like','%'.$name['name'].'%'];
	   $page=Goods::where($where)->count('id');
            $page=ceil($page/15);
            $data=Goods::order('id','desc')->where($where)->limit(0,15)->select();
	    $num=Goods::where($where)->count('id');
        }
        
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
        $w=[];
        $w['cate_id']=['in',$qus];
        $w['building_tejia']=['eq','是'];
        $hots=Goods::where($w)->paginate(13);
        foreach($hots as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        foreach($data as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        $tdengs=Goods::where('cate_id','in',$qus)->where('tdeng','eq','一级')->limit(0,6)->select();
        foreach($tdengs as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        return view('search',['data'=>$data,'cates'=>$cates,'ties'=>$ties,'dans'=>$dans,'hus'=>$hus,'city'=>$city,'tdengs'=>$tdengs,
                                'xings'=>$xings,'tes'=>$tes,'zongs'=>$zongs,'kais'=>$kais,'num'=>$num,'hots'=>$hots,'page'=>$page]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
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

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function shai(Request $request)
    {
        //
        
        $s=Category::where('pid',1)->column('id');
        if(Cookie::has('city')){
            $s=Category::where('pid',Cookie::get('city'))->column('id');
        }
        $data=$request->param();
        $qus=Goods::order('id','desc');
        if(!Cookie::has('where')){
            Cookie::set('where',[]);
        }
        $where=Cookie::get('where');
        $where['cate_id']=['in',$s];
        if($data['type']==1){
            $qu=$data['suggest'];
            if($qu=="0"){
                $where['cate_id']=['in',$s];
            }else{
                $where['cate_id']=['eq',$qu];
            }
        }else if($data['type']==2){
            $qu=$data['suggest'];
            if($qu=="0"){
                unset($where['building_ditie']);
            }else{
                $where['building_ditie']=['like','%'.$qu.'%'];
            }
        }else if($data['type']==3){
            $qu=$data['suggest'];
            if($qu==0){
                unset($where['building_jiage']);
            }else{
                $where['building_jiage']=['eq',$qu];
            }
        }else if($data['type']==4){
            $qu=$data['suggest'];
            if($qu=="0"){
                unset($where['zongjia']);
            }else{
                $where['zongjia']=['eq',$qu];
            }
        }else if($data['type']==5){
            if(array_key_exists('suggest',$data)){
                $qu=$data['suggest'];
                $m='';
                if(is_array($qu)){
                    foreach($qu as $v){
                        $m.="%$v%";
                    }
                    $where['building_huxing']=['like',$m];
                }else{
                    $m=$qu;
                    if($m==''){
                        unset($where['building_huxing']);
                    }else{
                        $where['building_huxing']=['like',$m];
                    }
                    
                }
                
                
            }else{
                unset($where['building_huxing']);
            }
        }else if($data['type']==6){
            if(array_key_exists('suggest',$data)){
                $qu=$data['suggest'];
                if($qu[0]){
                    if($qu[0]===0){
                        unset($where['building_tese']);
                    }else{
                        unset($where['building_xingshi']);
                    }
                    $where['building_xingshi']=['like','%'.$qu[0].'%'];
                }else{
                    unset($where['building_xingshi']);
                }
                if($qu[1]){
                    if($qu[1]===0){
                        unset($where['building_tese']);
                    }else{
                        $where['building_tese']=['like','%'.$qu[1].'%'];
                    }
                }else{
                    unset($where['building_tese']);
                }
                if($qu[2]){
                    $where['kaifa']=['eq',$qu[2]];
                }else{
                    unset($where['kaifa']);
                }
            }else{
                
                
            }
        }else if($data['type']==7){
            $qu=$data['suggest'];
            if($qu=='1'){
                $qus=Goods::order('danjia','aesc');
            }else if($qu=='2'){
                $qus=Goods::order('danjia','desc');
            }else if($qu=='3'){
                $qus=Goods::order('kaitime','aesc');
            }else if($qu=='4'){
                $qus=Goods::order('kaitime','desc');
            }else if($qu=='5'){
                $qus=Goods::order('id','desc');
            }
        }else if($data['type']==9){
            $qu=$data['suggest'];
            $s=explode('-',$qu)[0];
            $b=explode('-',$qu)[1];
            $where['zong']=['between',"$s,$b"];
        }
        
        Cookie::set('where',$where);
        if($data['type']==0){
            $qus=$qus->where($where)->limit($data['suggest']*15,15)->select();
        }else{
            $qus=$qus->where($where)->limit(0,15)->select();
        }
        $page=Goods::where($where)->count('id');
        foreach($qus as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        $qus[0]['page']=$page;
        return $qus;
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function tuan($type,Request $request)
    {
        //
        if(!Session::has('fork')){
            Session::set('fork',[]);
        }
        if(Cookie::has('where')){
            Cookie::clear('where');
        }
        $tuans=Tuan::order('id','desc')->select();
        if(Cookie::has('city')){
            $qus=Category::where('pid',Cookie::get('city'))->column('id');
            $where['cate_id']=['in',$qus];
        }else{
            $qus=Category::where('pid',1)->column('id');
            $where['cate_id']=['in',$qus];
            Cookie::set('city',1);
        }
        if(request()->isGet()){
            foreach($tuans as $v){
                $ids[]=$v['bid'];
            }
            if($type=='0'){
                $where['id']=['in',$ids];
            }else{
                $where['id']=['in',$ids];
                $where['building_tese']=['eq',$type];
            }
            $data=Goods::order('id','desc')->where($where)->select();
        }else{
            $name=$request->only('name');
            foreach($tuans as $v){
                $ids[]=$v['bid'];
            }
            $where=[
                'id'=>['in',$ids],
                'building_name'=>['like','%'.$name['name'].'%']
            ];
            
            $data=Goods::order('id','desc')->where($where)->select();
            
        }
        $page=Goods::where($where)->count('id');
        $page=ceil($page/15);
        $ties=Attribute::where('id',6)->column('attr_values')[0];
        $ties=explode(',',$ties);
        $dans=Attribute::where('id',3)->column('attr_values')[0];
        $dans=explode(',',$dans);
        $hus=Attribute::where('id',7)->column('attr_values')[0];
        $hus=explode(',',$hus);
        $xings=Attribute::where('id',8)->column('attr_values')[0];
        $xings=explode(',',$xings);
        $zongs=Attribute::where('id',12)->column('attr_values')[0];
        $zongs=explode(',',$zongs);
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
        $num=Goods::where($where)->count('id');
        $hots=Goods::where('building_tejia','是')->paginate(13);
        foreach($hots as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
        }
        foreach($data as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
            $v['title']=Tuan::where('bid',$v['id'])->column('title')[0];
            $v['end']=Tuan::where('bid',$v['id'])->column('end')[0];
            $v['end']=explode('-',$v['end']); 
            $v['end']=$v['end'][1].'.'.$v['end'][2];
            $v['start']=Tuan::where('bid',$v['id'])->column('start')[0];
            $v['start']=explode('-',$v['start']);
            $v['start']=$v['start'][1].'.'.$v['start'][2];
        }
        // dump($where);die();
        $qus=Category::where('pid',Cookie::get('city'))->column('id');
        $tdengs=Goods::where('cate_id','in',$qus)->where('tdeng','eq','一级')->limit(0,6)->select();
        foreach($tdengs as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
            $v['dong']=Text::order('id','desc')->where('bid','eq',$v['id'])->limit(0,1)->column('introduce')[0];
        }
        $yous=You::select();
        return view('tuan',['data'=>$data,'cates'=>$cates,'ties'=>$ties,'dans'=>$dans,'hus'=>$hus,'city'=>$city,'tdengs'=>$tdengs,
                                'xings'=>$xings,'tes'=>$tes,'zongs'=>$zongs,'kais'=>$kais,'num'=>$num,'hots'=>$hots,'page'=>$page,'yous'=>$yous]);
    }



    public function tu(){
        if(Cookie::has('city')){
            $s=Category::where('pid',Cookie::get('city'))->column('id');
        }
        $s=Category::where('pid',1)->column('id');
        $tuans=Tuan::order('id','desc')->select();
        $data=request()->param();
        
        $qus=Goods::order('id','desc');
        if(!Cookie::has('where')){
            Cookie::set('where',[]);
        }
        $where=Cookie::get('where');
        $where['cate_id']=['in',$s];
       
        if($data['type']==1){
            $qu=$data['suggest'];
            if($qu=="0"){
                $where['cate_id']=['in',$s];
            }else{
                $where['cate_id']=['eq',$qu];
            }
        }else if($data['type']==2){
            $qu=$data['suggest'];
            if($qu=="0"){
                unset($where['building_ditie']);
            }else{
                $where['building_ditie']=['like','%'.$qu.'%'];
            }
        }else if($data['type']==3){
            $qu=$data['suggest'];
            if($qu=="0"){
                unset($where['building_jiage']);
            }else{
                $where['building_jiage']=['eq',$qu];
            }
        }else if($data['type']==4){
            $qu=$data['suggest'];
            if($qu=="0"){
                unset($where['zongjia']);
            }else{
                $where['zongjia']=['eq',$qu];
            }
        }else if($data['type']==5){
            if(array_key_exists('suggest',$data)){
                $qu=$data['suggest'];
                $where['building_huxing']=['like',$qu];
            }else{
                unset($where['building_huxing']);
            }
        }else if($data['type']==6){
            $qu=$data['suggest'];
            if($qu[0]){
                $where['building_xingshi']=['like','%'.$qu[0].'%'];
            }else{
                unset($where['building_xiangshi']);
            }
            if($qu[1]){
                $where['building_tese']=['like','%'.$qu[1].'%'];
            }else{
                unset($where['building_tese']);
            }
            if($qu[2]){
                $where['kaifa']=['like','%'.$qu[2].'%'];
            }else{
                unset($where['kaifa']);
            }
        }else if($data['type']==7){
            $qu=$data['suggest'];
            if($qu=='1'){
                $qus=Goods::order('danjia','aesc');
            }else if($qu=='2'){
                $qus=Goods::order('danjia','desc');
            }else if($qu=='3'){
                $qus=Goods::order('kaitime','aesc');
            }else if($qu=='4'){
                $qus=Goods::order('kaitime','desc');
            }else{
                
            }
        }else if($data['type']==9){
            $qu=$data['suggest'];
            $s=explode('-',$qu)[0];
            $b=explode('-',$qu)[1];
            $where['zong']=['between',"$s,$b"];
        }
        foreach($tuans as $v){
            $ids[]=$v['bid'];
        }
        $where['id']=['in',$ids];
        Cookie::set('where',$where);
        // return $where;

        if($data['type']==0){
            $qus=$qus->where($where)->limit($data['suggest']*15,15)->select();
        }else{
            $qus=$qus->where($where)->limit(0,15)->select();
        }
        // dump($where);die();
        $page=Goods::where($where)->count('id');
        foreach($qus as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
            $v['end']=Tuan::where('bid',$v['id'])->column('end')[0];
            $v['title']=Tuan::where('bid',$v['id'])->column('title')[0];
            $v['end']=explode('-',$v['end']);
            $v['end']=$v['end'][1].'.'.$v['end'][2];
            $v['start']=Tuan::where('bid',$v['id'])->column('start')[0];
            $v['start']=explode('-',$v['start']);
            $v['start']=$v['start'][1].'.'.$v['start'][2];
        }
        $qus[0]['page']=ceil($page/15);
        return $qus;
    }

 
    public function ss($end){
        $data=Goods::where('building_tejia','是')->paginate(3);
        return view('sou',['end'=>$end,'data'=>$data]);
    }

    
    
}
