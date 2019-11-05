<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\model\Text;

class News extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($id)
    {
        //
        $data=Text::where('bid',$id)->paginate(15);
        return view('content',['data'=>$data,'bid'=>$id]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create($id)
    {
        //
	return view('index',['id'=>$id]);
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
        $data=$request->param();
	$bid=$request->param('bid');
        Text::create($data);
        $this->redirect("/admin/news/index/id/$bid");
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
	$data=Text::where('id',$id)->find();
	return view('edit',['data'=>$data]);
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
	$ss=$request->param();
	
	$bid=$request->param('bid');

	Text::update($ss,['id'=>$id]);
	$this->redirect("/admin/news/index/id/$bid");
    }
	public function test(){
	$data=Db::connect('mysql://root:BmaGRa6mBNdbKTNw@127.0.0.1:3306/erp#utf8')->table('erp_record')->select();
        dump($data);
}
    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delet($id,$bid)
    {
        //
	Text::destroy($id);
	$this->redirect("/admin/news/index/id/$bid");
    }

    
}
