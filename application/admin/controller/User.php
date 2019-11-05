<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\home\model\Request as RequestModel;
use app\home\model\Yue as YueModel;
use app\home\model\User as UserModel;
use app\home\model\Port1;
use app\home\model\Port2;

class User extends Base
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
            $data=RequestModel::order('id','desc')->paginate(15);
        }else{
            $res=request()->param();
            // dump($where);die();
            $where=[];
            if($res['jiage']){
                $where['jiage']=$res['jiage'];
            }
            if($res['area']){
                $where['area']=$res['area'];
            }
            if($res['tese']){
                $where['tese']=$res['tese'];
            }
            if($res['phone']){
                $where['phone']=$res['phone'];
            }
            if($res['huxing']){
                $where['huxing']=$res['huxing'];
            }
            // dump($where);die();
            $data=RequestModel::order('id','desc')->where($where)->paginate(15);
        }
        
        return view('index',['data'=>$data]);
    }
    // 改变找房资源状态
    public function r(){
        $str=request()->param()['str'];
        $id=request()->param()['id'];
        if($str=="未解决"){
            $s=RequestModel::where('id',$id)->update(['is_over'=>1]);
            if($s){
                $res=[
                    'code'=>100,
                    'msg'=>'已解决'
                ];
                return json($res);
            }
        }
    }

    
    /**
     * 显示预约看房列表
     *
     * @return \think\Response
     */
    public function yue()
    {
        //
        if(request()->isGet()){
            $data=YueModel::order('id','desc')->paginate(15);
        }else{
            $res=request()->param();
            $where=[];
            if($res['time']){
                $where['time']=$res['time'];
            }
            if($res['sex']){
                $where['sex']=$res['sex'];
            }
            
            $data=YueModel::order('id','desc')->where($where)->paginate(15);
        }
        
        foreach($data as $v){
            $v['phone']=UserModel::where('id',$v['u_id'])->column('phone')[0];
        }
        return view('yue',['data'=>$data]);
    }
    // 改变预约看房状态
    public function y(){
        $str=request()->param()['str'];
        $id=request()->param()['id'];
        if($str=="未解决"){
            $s=YueModel::where('id',$id)->update(['is_over'=>1]);
            if($s){
                $res=[
                    'code'=>100,
                    'msg'=>'已解决'
                ];
                return json($res);
            }
        }
    }
    // 改变报名用户的联系状态
    public function b(){
        $str=request()->param()['str'];
        $id=request()->param()['id'];
        if($str=="未联系"){
            $s=Port1::where('id',$id)->update(['is_over'=>1]);
            if($s){
                $res=[
                    'code'=>100,
                    'msg'=>'已联系'
                ];
                return json($res);
            }
        }
    }
    // 改变报名收件的联系状态
    public function s(){
        $str=request()->param()['str'];
        $id=request()->param()['id'];
        if($str=="未联系"){
            $s=Port2::where('id',$id)->update(['is_over'=>1]);
            if($s){
                $res=[
                    'code'=>100,
                    'msg'=>'已联系'
                ];
                return json($res);
            }
        }
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
     * 删除看房请求
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
        RequestModel::destroy($id);
        $this->redirect('index');
    }

    // 删除预约看房
    public function del($id){
        YueModel::destroy($id);
        $this->redirect('yue');
    }

    // 删除报名1
    public function de($id){
        Port1::destroy($id);
        $this->redirect('bao');
    }

    // 删除报名2
    public function d($id){
        Port2::destroy($id);
        $this->redirect('shou');
    }


    // 报名入口1
    public function bao(){
        if(request()->isGet()){
            $data=Port1::order('id','desc')->paginate(15);
        }else{
            $res=request()->param();
            $where=[];
            if($res['building_name']){
                $where['building_name']=$res['building_name'];
            }
            if($res['type']){
                $where['type']=$res['type'];
            }
            if($res['phone']){
                $where['phone']=$res['phone'];
            }
            
            $data=Port1::order('id','desc')->where($where)->paginate(15);
        }
        
        return view('bao',['data'=>$data]);
    }
    // 报名入口2
    public function shou(){
        if(request()->isGet()){
            $data=Port2::order('id','desc')->paginate(15);
        }else{
            $res=request()->param();
            $where=[];
            if($res['building_name']){
                $where['building_name']=$res['building_name'];
            }
            if($res['type']){
                $where['type']=$res['type'];
            }
            if($res['phone']){
                $where['phone']=$res['phone'];
            }
            
            $data=Port2::order('id','desc')->where($where)->paginate(15);
        }
        
        return view('shou',['data'=>$data]);
    }

    // 会员列表
    public function users(){
        $data=UserModel::order('id','desc')->paginate(15);
        return view('users',['data'=>$data]);
    }

    // 会员删除
    public function udel($id){
        UserModel::destroy($id);
        $this->redirect('users');
    }
}


