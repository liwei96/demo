<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Yaohao as YaohaoModel;
use app\admin\model\Category;

class Yaohao extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        if(request()->isGet()){
            $data=YaohaoModel::order('id','desc')->paginate(15);
            return view('index',['data'=>$data]);
        }else{
            $d=request()->param()['name'];
            $data=YaohaoModel::where('loupan','like','%'.$d.'%')->paginate(15);
            return view('index',['data'=>$data]);
        }
        
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
        $city=Category::where('pid',0)->select();
        return view('create',['city'=>$city]);
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
        YaohaoModel::create($data);
        $this->redirect('index');
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
        $city=Category::where('pid',0)->select();
        $data=YaohaoModel::where('id',$id)->find();
        return view('edit',['data'=>$data,'city'=>$city]);
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
        $data=$request->param();
        YaohaoModel::update($data,['id'=>$id]);
        $this->redirect('index');
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
        YaohaoModel::destroy($id);
        $this->redirect('index');
    }
}
