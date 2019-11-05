<?php

namespace app\home\controller;

use think\Controller;
use think\Request;
use think\Cookie;
use app\admin\model\Project;
use app\admin\model\News as NewsModel;
use app\admin\model\Goods;
use app\admin\model\Tupai;
use app\admin\model\Yushou;
use app\admin\model\Yaohao;
use app\admin\model\Category;
use app\admin\model\Text;
use app\admin\model\You;

class News extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        if(!Cookie::has('city')){
            Cookie::set('city',1,1200);
        }
        $ids=Category::where('pid','eq',Cookie::get('city'))->column('id');
        $ids=Goods::where('cate_id','in',$ids)->column('id');

        $ps=Project::order('id','desc')->where('bid','in',$ids)->paginate(10);
        foreach($ps as $v){
            $v['img']=Goods::where('id',$v['bid'])->column('building_img')[0];
            $v['content']=htmlspecialchars_decode($v['content']);
            $v['content']=str_replace("&nbsp;","",$v['content']);
            $v['content']=strip_tags($v['content']);
            $v['content']=mb_substr($v['content'], 0, 100,"utf-8");
        }
        $page=Project::where('bid','in',$ids)->count('id');
        $page=ceil($page/10);
        $ns=NewsModel::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->paginate(10);
	    $tuis=Tupai::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->select();
        $yus=Yushou::where('cate_id','eq',Cookie::get('city'))->order('id','desc')->select();
        $haos=Yaohao::where('cate_id','eq',Cookie::get('city'))->where('type','摇号')->select();
        $dengs=Yaohao::where('cate_id','eq',Cookie::get('city'))->where('type','登记')->select();
        $qus=Category::where('pid',Cookie::get('city'))->column('id');
        $tdengs=Goods::where('cate_id','in',$qus)->where('tdeng','eq','一级')->limit(0,6)->select();
        foreach($tdengs as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
            $v['dong']=Text::order('id','desc')->where('bid','eq',$v['id'])->limit(0,1)->column('introduce')[0];
        }
        $yous=You::select();
        return view('index',['ps'=>$ps,'ns'=>$ns,'page'=>$page,'tuis'=>$tuis,'yus'=>$yus,'haos'=>$haos,'dengs'=>$dengs,'tdengs'=>$tdengs,'yous'=>$yous]);
    }
    public function aa(){
        return view();
    }
    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function article($id)
    {
        //
        $data=NewsModel::where('id',$id)->find();
        $ns=NewsModel::order('id','desc')->paginate(5);
        $ps=Project::order('id','desc')->paginate(2);
        foreach($ps as $v){
            $v['img']=Goods::where('id',$v['bid'])->column('building_img')[0];
            $v['content']=htmlspecialchars_decode($v['content']);
            $v['content']=str_replace("&nbsp;","",$v['content']);
            $v['content']=strip_tags($v['content']);
            $v['content']=mb_substr($v['content'], 0, 100,"utf-8");
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
        return view('article',['data'=>$data,'ns'=>$ns,'ps'=>$ps,'tdengs'=>$tdengs,'yous'=>$yous]);
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function pro($id)
    {
        //
        $data=Project::where('id',$id)->find();
        $ns=NewsModel::order('id','desc')->paginate(5);
        $ps=Project::order('id','desc')->paginate(2);
        foreach($ps as $v){
            $v['img']=Goods::where('id',$v['bid'])->column('building_img')[0];
            $v['content']=htmlspecialchars_decode($v['content']);
            $v['content']=str_replace("&nbsp;","",$v['content']);
            $v['content']=strip_tags($v['content']);
            $v['content']=mb_substr($v['content'], 0, 100,"utf-8");
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
        return view('project',['data'=>$data,'ns'=>$ns,'ps'=>$ps,'tdengs'=>$tdengs,'yous'=>$yous]);
    }

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
    public function delete($id)
    {
        //
    }


 
    public function project(){
        $num=request()->param()['suggest'];
        $ps=Project::order('id','desc')->limit($num*10,10)->select();
        foreach($ps as $v){
            $v['img']=Goods::where('id',$v['bid'])->column('building_img')[0];
            $v['content']=htmlspecialchars_decode($v['content']);
            $v['content']=str_replace("&nbsp;","",$v['content']);
            $v['content']=strip_tags($v['content']);
            $v['content']=mb_substr($v['content'], 0, 100,"utf-8");
        }
        return $ps;
    }
    public function xin(){
        $num=request()->param()['suggest'];
        $ps=NewsModel::order('id','desc')->limit($num*8,8)->select();
        return $ps;
    }
}
