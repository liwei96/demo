<?php

namespace app\home\controller;

use app\admin\model\Category;
use app\admin\model\Recording;
use app\admin\model\Goods;
use app\admin\model\Huimgs;
use app\admin\model\Jiaoimgs;
use app\admin\model\Peiimgs;
use app\admin\model\Shiimgs;
use app\admin\model\Text;
use app\admin\model\From;
use app\admin\model\Xiaoimgs;
use app\admin\model\Yangimgs;
use app\admin\model\You;
use app\home\model\Port1;
use app\home\model\Port2;
use app\home\model\User;
use app\home\model\Ping;
use app\home\model\Tw;
use app\home\model\Fen;
use app\home\model\Tell;
use think\Controller;
use think\Cookie;
use think\Request;
use think\Session;
use think\Cache;
use function Qiniu\json_decode;
use function GuzzleHttp\json_encode;
use function GuzzleHttp\json_decode as GuzzleHttpJson_decode;

class Content extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($id)
    {
        //
        if(!Session::has('fork')){
            Session::set('fork',[]);
        }
        if (Cookie::has('ids')) {
            $ids = Cookie::get('ids');
            $ids = explode('-', $ids);
            if (in_array($id, $ids)) {
                $ids = implode('-', $ids);
            } else {
                $ids[] = $id;
                $ids = implode('-', $ids);
            }
        } else {
            $ids = $id; 
        }
        Cookie::set('ids', $ids, '36000');
        $xiaoimgs = Xiaoimgs::where('bid', $id)->select();
        $huimgs = Huimgs::where('bid', $id)->paginate(2);
        $data = Goods::where('id', $id)->find();
	    $n = Category::where('id', $data['cate_id'])->column('pid')[0];
            
        // 楼盘相册有多少张图片
        $pics=Huimgs::where('bid','eq',$id)->count('*');
        $pics=$pics+Xiaoimgs::where('bid',$id)->count('*');
        $pics=$pics+Yangimgs::where('bid',$id)->count('*');
        $pics=$pics+Jiaoimgs::where('bid',$id)->count('*');
        $pics=$pics+Peiimgs::where('bid',$id)->count('*');
        $pics=$pics+Shiimgs::where('bid',$id)->count('*');
        $data['city'] = Category::where('id', $n)->column('area_name')[0];
        $dongs = Text::where('bid', $id)->order('id', 'desc')->paginate(1);
        //$xs = $data['xiangsi'];
        //$xs = explode(',', $xs);
        //$xiangs = Goods::where('id', 'in', $xs)->select();
	    $where=[];
        $where['cate_id']=['eq',$data['cate_id']];
        $where['building_xingshi']=['eq',$data['building_xingshi']];
        $where['building_jiage']=['eq',$data['building_jiage']];
        $xiang=Goods::where($where)->column('id');
        $key = array_search($id, $xiang);
        if ($key !== false)
        array_splice($xiang, $key, 1);

        if($xiang){
            $xiangs = Goods::where('id', 'in', $xiang)->select();
        }else{
            $top=Category::where('id','eq',$data['cate_id'])->column('pid')[0];
            $tops=Category::where('pid','eq',$top)->column('id');
            unset($where['cate_id']);
            $where['cate_id']=['in',$tops];
            $xiang=Goods::where($where)->column('id');
            $key = array_search($id, $xiang);
            if ($key !== false)
            array_splice($xiang, $key, 1);
            if($xiang){
                $xiangs = Goods::where('id', 'in', $xiang)->select();
            }else{
                unset($where['building_jiage']);
                $xiang=Goods::where($where)->column('id');
                $key = array_search($id, $xiang);
                if ($key !== false)
                array_splice($xiang, $key, 1);
                if($xiang){
                    $xiangs = Goods::where('id', 'in', $xiang)->select();
                }else{
                    unset($where['building_xingshi']);
                    $xiang=Goods::where($where)->column('id');
                    $key = array_search($id, $xiang);
                    if ($key !== false)
                    array_splice($xiang, $key, 1);
                    $xiangs = Goods::where('id', 'in', $xiang)->select();
                }
            }
        }
        
        $num = Text::where('bid', $id)->count('id');
        $recording=Recording::where('bid',$id)->find();
	        foreach ($xiangs as $v) {
            $n = Category::where('id', $v['cate_id'])->column('pid')[0];
            $v['qu'] = Category::where('id', $v['cate_id'])->column('area_name')[0];
            $v['city'] = Category::where('id', $n)->column('area_name')[0];
        }
        $really=[];
        $reallt=[];
        $all=[];
        for($x=0;$x<7;$x++){
            $t=mt_rand(1,5);
            $d=date('z',time());
            if($d % 2 ==1){
                $p=$data['danjia']-800;
                // $p=10000;
            }else{
                $p=$data['danjia']+800;
                // $p=11000;
            }
            // $m=$huimgs;
            // if($m){
            //     $m=[0]['mian'];
            //     $m=(int)$m;
            // }
            $m=35;
            $z=$m*$p*$t;
            $z=$z/10000;
            $really[]=$z;
            $reallt[] = date('m/d' ,strtotime( '+' . $x-7 .' days', time()));
            $all[$x][]=date('m/d' ,strtotime( '+' . $x-7 .' days', time()));
            $all[$x][]=$t;
            $all[$x][]=$z;
        }
        $pings=Ping::where('bid','eq',$id)->paginate(2);
        foreach($pings as $v){
            $tt=User::where('id','eq',$v['u_id'])->column('phone');
            if($tt){
                $tt=$tt[0];
            }else{
                $tt='******';
            }
            $v['tel']=$tt;
            $v['tel']=substr($v['tel'],0,3).'****'.substr($v['tel'],7);
        }
        $jia=Text::where('bid', $id)->where('type','eq','是')->limit(0,1)->select();
        if($jia){
            $jia=$jia[0];
        }else{
            $jia=[];
            $ja['introduce']='';
            $ja['create_time']='暂无';
            $jia[]=$ja;
        }
        $tou=Fen::where('bid','eq',$id)->where('type','eq',1)->find();
        $yi=Fen::where('bid','eq',$id)->where('type','eq',2)->find();
        $yous=You::select();
        // 判断来源与关键字
        $from=request()->param();
        if(array_key_exists('kid',$from)){
            $key=From::where('kid','eq',$from['kid'])->column('key');
            if($key){
                $key=$key[0];
            }else{
                $key=$from['kid'];
            }
            
            $keys=[];
            $keys['key']=$key;
            $keys['other']=$from['other'];
            Cookie::set('from',$keys,1800);
        }
        return view('index', ['data' => $data, 'recording'=>$recording, 'huimgs' => $huimgs, 'xiaoimgs' => $xiaoimgs, 'dongs' => $dongs, 'tou'=>$tou,'yi'=>$yi,'pics'=>$pics,
        'xiangs' => $xiangs, 'num' => $num, 'id' => $id,'really'=>$really,'reallt'=>$reallt,'all'=>$all,'pings'=>$pings,'jia'=>$jia,'yous'=>$yous]);
    }
    public function imgs()
    {
        $type = request()->param()['type'];
        $id = request()->param()['id'];
        if ($type == '交通图') {
            $data = Jiaoimgs::where('bid', $id)->select();
            $s = 'j_small';
        } else if ($type == "配套图") {
            $data = Peiimgs::where('bid', $id)->select();
            $s = 'p_small';
        } else if ($type == '样板图') {
            $data = Yangimgs::where('bid', $id)->select();
            $s = 'y_small';
        } else if ($type == '实景图') {
            $data = Shiimgs::where('bid', $id)->select();
            $s = 's_small';
        } else if ($type == '效果图') {
            $data = Xiaoimgs::where('bid', $id)->select();
            $s = 'x_small';
        }
        $res = [
            'code' => 100,
            'data' => $data,
            's' => $s,
        ];
        return json($res);
    }


    public function content($id){
        //
        if(!Session::has('fork')){
            Session::set('fork',[]);
        }
        if (Cookie::has('ids')) {
            $ids = Cookie::get('ids');
            $ids = explode('-', $ids);
            if (in_array($id, $ids)) {
                $ids = implode('-', $ids);
            } else {
                $ids[] = $id;
                $ids = implode('-', $ids);
            }
        } else {
            $ids = $id;
        }
        Cookie::set('ids', $ids, '36000');
        $xiaoimgs = Xiaoimgs::where('bid', $id)->select();
        $huimgs = Huimgs::where('bid', $id)->select();
	    $hus=Huimgs::where('bid', $id)->count('id');
        $data = Goods::where('id', $id)->find();
	    $n = Category::where('id', $data['cate_id'])->column('pid')[0];
            
        $data['city'] = Category::where('id', $n)->column('area_name')[0]; 
        $peiimgs=Peiimgs::where('bid', $id)->select();
        $shiimgs=Shiimgs::where('bid', $id)->select();
        $yangimgs=Yangimgs::where('bid', $id)->select();
	    $jiaoimgs=Jiaoimgs::where('bid',$id)->select();
        $dongs = Text::where('bid', $id)->order('id', 'desc')->paginate(1);
	    $data['building_tese']=explode(',',$data['building_tese']);
        $xs = $data['xiangsi'];
        $recording=Recording::where('bid',$id)->find();
        //$xs = explode(',', $xs);
        //$xiangs = Goods::where('id', 'in', $xs)->select();
	    $where=[];
        $where['cate_id']=['eq',$data['cate_id']];
        $where['building_xingshi']=['eq',$data['building_xingshi']];
        $where['building_jiage']=['eq',$data['building_jiage']];
        $xiang=Goods::where($where)->column('id');
        $key = array_search($id, $xiang);
        if ($key !== false)
        array_splice($xiang, $key, 1);
        if($xiang){
            $xiangs = Goods::where('id', 'in', $xiang)->select();
        }else{
            $top=Category::where('id','eq',$data['cate_id'])->column('pid')[0];
            $tops=Category::where('pid','eq',$top)->column('id');
            unset($where['cate_id']);
            $where['cate_id']=['in',$tops];
            $xiang=Goods::where($where)->column('id');
            $key = array_search($id, $xiang);
            if ($key !== false)
            array_splice($xiang, $key, 1);
            if($xiang){
                $xiangs = Goods::where('id', 'in', $xiang)->select();
            }else{
                unset($where['building_jiage']);
                $xiang=Goods::where($where)->column('id');
                $key = array_search($id, $xiang);
                if ($key !== false)
                array_splice($xiang, $key, 1);
                if($xiang){
                    $xiangs = Goods::where('id', 'in', $xiang)->select();
                }else{
                    unset($where['building_xingshi']);
                    $xiang=Goods::where($where)->column('id');
                    $key = array_search($id, $xiang);
                    if ($key !== false)
                    array_splice($xiang, $key, 1);
                    $xiangs = Goods::where('id', 'in', $xiang)->select();
                }
            }
        }

        $num = Text::where('bid', $id)->count('id');
	    $cids=Category::where('pid','eq',Cookie::get('city'))->column('id');
        $hots=Goods::where('building_tejia','eq','是')->where('cate_id','in',$cids)->paginate(8);
        $data['introduce']=htmlspecialchars_decode($data['introduce']);
            $data['introduce']=str_replace("&nbsp;","",$data['introduce']);
            $data['introduce']=strip_tags($data['introduce']);
            $data['introduce']=mb_substr($data['introduce'], 0, 400,"utf-8");
        foreach ($xiangs as $v) {
            $n = Category::where('id', $v['cate_id'])->column('pid')[0];
            $v['qu'] = Category::where('id', $v['cate_id'])->column('area_name')[0];
            $v['city'] = Category::where('id', $n)->column('area_name')[0];
        }
        $city=Category::where('pid',0)->select();
        $really=[];
        $reallt=[];
        $all=[];
        for($x=0;$x<7;$x++){
            $t=mt_rand(1,5);
            $d=date('z',time());
            if($d % 2 ==1){
                $p=$data['danjia']-800;
                // $p=10000;
            }else{
                $p=$data['danjia']+800;
                // $p=11000;
            }
            // $m=$huimgs;
            // if($m){
            //     $m=[0]['mian'];
            //     $m=(int)$m;
            // }
            $m=35;
            $z=$m*$p*$t;
            $z=$z/10000;
            $really[]=$z;
            $reallt[] = date('m/d' ,strtotime( '+' . $x-7 .' days', time()));
            $all[$x][]=date('m/d' ,strtotime( '+' . $x-7 .' days', time()));
            $all[$x][]=$t;
            $all[$x][]=$z;
        }

        $pings=Ping::where('bid','eq',$id)->paginate(3);
        foreach($pings as $v){
            $tt=User::where('id','eq',$v['u_id'])->column('phone');
            if($tt){
                $tt=$tt[0];
            }else{
                $tt='******';
            }
            $v['tel']=$tt;
            $v['tel']=substr($v['tel'],0,3).'****'.substr($v['tel'],7);
            if($v['pid']){
                $v['con']=Ping::where('pid','eq',$v['id'])->paginate(2);
                foreach($v['con'] as $j){
                    $ll=User::where('id','eq',$j['u_id'])->column('phone');
                    $j['tel']=$ll?$ll[0]:'*******';
                    $j['tel']=substr($j['tel'],0,3).'****'.substr($j['tel'],7);
                }
            }else{
                $v['con']=[];
            }
        }
        $jia=Text::where('bid', $id)->where('type','eq','是')->limit(0,1)->select();
        if($jia){
            $jia=$jia[0];
        }else{
            $jia=[];
            $jia['introduce']='';
            $jia['create_time']='暂无';
        }
        // if(!$jia){
        //     $jia=[];
        // }
        $tou=Fen::where('bid','eq',$id)->where('type','eq',1)->find();
        $yi=Fen::where('bid','eq',$id)->where('type','eq',2)->find();
        if(!Cookie::has('city')){
            $kk=Category::where('id','eq',$data['cate_id'])->column('pid')[0];
            Cookie::set('city',$kk);
        }
        $qus=Category::where('pid',Cookie::get('city'))->column('id');
        $tdengs=Goods::where('cate_id','in',$qus)->where('tdeng','eq','一级')->limit(0,4)->select();
        foreach($tdengs as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
            $v['dong']=Text::order('id','desc')->where('bid','eq',$v['id'])->limit(0,1)->column('introduce')[0];
        }
        $yous=You::select();

        // 判断来源与关键字
        $from=request()->param();
        if(array_key_exists('kid',$from)){
            $key=From::where('kid','eq',$from['kid'])->column('key');
            if($key){
                $key=$key[0];
            }else{
                $key=$from['kid'];
            }
            $keys=[];
            $keys['key']=$key;
            $keys['other']=$from['other'];
            Cookie::set('from',$keys,1800);
        }
        return view('content', ['data' => $data,'jiaoimgs'=>$jiaoimgs,'recording'=>$recording,'city'=>$city,'peiimgs'=>$peiimgs,'yangimgs'=>$yangimgs,'shiimgs'=>$shiimgs, 'jia'=>$jia,'tou'=>$tou,'yi'=>$yi,'hus'=>$hus,'yous'=>$yous,
        'huimgs' => $huimgs, 'xiaoimgs' => $xiaoimgs, 'dongs' => $dongs, 'xiangs' => $xiangs, 'num' => $num, 'id' => $id,'hots'=>$hots,'really'=>$really,'reallt'=>$reallt,'all'=>$all,'pings'=>$pings,'tdengs'=>$tdengs]);
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

    public function dongs($id)
    {
        $name = Goods::where('id', $id)->column('building_name')[0];
        $dongs = Text::where('bid', $id)->order('id', 'desc')->select();
        return view('dong', ['dongs' => $dongs, 'name' => $name]);
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
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }

    public function look($id)
    {
        return view('look', ['bid' => $id]);
    }
    public function xiang($id)
    {
        $data = Goods::where('id', $id)->find();
        $data['building_ditie'] = explode(',', $data['building_ditie']);
        $data['building_xingshi'] = explode(',', $data['building_xingshi']);
        $data['building_tese'] = explode(',', $data['building_tese']);
        return view('xiang', ['data' => $data]);
    }
    public function fork()
    {
        if (Session::has('user')) {
            $id = request()->param()['id'];
            $ids = User::where('id', Session::get('user')['id'])->column('fork')[0];
            $ids = $ids . ',' . $id;
            $re = User::where('id', Session::get('user')['id'])->update(['fork' => $ids]);
            $data = User::where('id', Session::get('user')['id'])->find();
            $fork=explode(',',$data['fork']);
            Session::set('fork', $fork);
            if ($re) {
                $res = [
                    'code' => 100,
                    'msg' => '/static/home/imgs/fork2.png',
                    'ss' => '/static/home/imgs/fork1.png',
                ];
                return json($res);
            }
        } else {
            $res = [
                'code' => 200,
                'msg' => '请先登录',
            ];
            return json($res);
        }

    }

    public function yz(){
        $data=request()->param();
        $phone=$data['phone'];
	    $ma = mt_rand(1000, 9999);
        $register_time = cache($phone . 'time') ?: 0;
            if (time() - $register_time < 60) {
                $res = [
                    'code' => 10003,
                    'msg' => '发送太频繁，稍后再试',
                ];
                return json($res);
            }
            $result=sendmsg($phone,$ma);
            
            if ($result) {
                cache($phone, $ma, 300);
                cache($phone . 'time', time());
                $res = [
                    'code' => 100,
                    
                ];
                return json($res);
            } else {
                $res = [
                    'code' => 200,
                    'msg' => '发送失败',
                ];
                return json($res);
            }
    }

    public function port1()
    {
        $data = request()->param();
        $num = count($data);
        $type = $data['type'];
        $phone = $data['phone'];
        $ph=substr($phone,0,6);
	    $ma=$data['ma'];
        if(Cache::has($ph)){
            if(Cache::get($ph)>18){
                return json(['code'=>300]);
            }else{
                $l=Cache::get($ph);
                $l=$l+1;
                Cache::set($ph,$l);
            }
        }else{
            Cache::set($ph,1,6*3600);
        }
        $building_name = $data['building_name'];
        $name = $data['name'];
        $IP = $_SERVER['REMOTE_ADDR'];
	    $brower=$data['brower'];
	    $qu=$data['qu'];
	    if(Cache::get($IP)){
            if(Cache::get($IP)>18){
                return json(['code'=>300]);
            }else{
                $l=Cache::get($IP);
                $l=$l+1;
                Cache::set($IP,$l);
            }
        }else{
            Cache::set($IP,1,3*3600);
        }
        if($ma!=cache($phone)){
	    return json(['code'=>10002]);
    }
        
	    // unset($data['ma']);
        // sc_send('客户想要获取' . $building_name . '的' . $type, '客户的号码是:' . $phone . ';' . '客户的姓名是' . $name . ';' . 'IP是' . $IP.'；浏览器是'.$brower.'；渠道是：'.$qu.';推广一');

        
        $ma = mt_rand(1000, 9999);
        if (!preg_match('/^1[3-9]\d{9}$/', $phone)) {
            $res = [
                'code' => 10001,
                'msg' => '手机号格式错误',
                'df' => $phone,
            ];
            return json($res);
        }
        if ($num == 4) {
            
        } else {
           
            $res=Port1::where('building_name','eq',$building_name)->where('phone','eq',$phone)->update(['is_toke'=>1]);
            if ($res) {
                $f = [
                    'code' => 100,
                ];
                return json($f);
            } else {
                $f = [
                    'code' => 200,
                    'msg' => '提交失败',
                ];
                return json($f);
            }
            

        }
    }

    public function port2()
    {
        $data = request()->param();
        
        $phone = $data['phone'];
        $ph=substr($phone,0,6);
        if(Cache::has($ph)){
            if(Cache::get($ph)>3){
                return json(['code'=>300]);
            }else{
                $l=Cache::get($ph);
                $l=$l+1;
                Cache::set($ph,$l);
            }
        }else{
            Cache::set($ph,1,12*3600);
        }
        $address = $data['address'];
        $name = $data['name'];
        $type = $data['type'];
        $building_name = $data['building_name'];
        $IP = $_SERVER['REMOTE_ADDR'];
	$brower=$data['brower'];
	$qu=$data['qu'];
	if(Cache::get($IP)){
            if(Cache::get($IP)>5){
                return json(['code'=>300]);
            }else{
                $l=Cache::get($IP);
                $l=$l+1;
                Cache::set($IP,$l);
            }
        }else{
            Cache::set($IP,1,12*3600);
        }
	$ma=$data['ma'];
        if($ma!=cache($phone)){
	    return json(['code'=>10002]);
	}
	unset($data['ma']);
    sc_send('客户想要获取' . $building_name . '的' . $type, '客户的号码是:' . $phone . ';' . '客户的姓名是' . $name . ';' .'客户的地址是：'.$address.'；'. 'IP是' . $IP.'；浏览器是'.$brower.'；渠道是：'.$qu.';推广一');
    // sc_send('客户想要获取' . $building_name . '的' . $type, '客户的号码是:' . $phone . ';' . '客户的姓名是' . $name . ';' .'客户的地址是：'.$address.'；'. 'IP是' . $IP.'；浏览器是'.$brower.'；渠道是：'.$qu.';推广一');
    
        

        $d = [];
        $d['phone'] = $phone;
        $d['type'] = $data['type'];
        $d['name'] = $data['name'];
        $d['address'] = $data['address'];
        $d['building_name'] = $data['building_name'];
        cache($phone, null);

        $res = Port2::create($data);
        if ($res) {
            
            $f = [ 
                'code' => 100,
            ];
            return json($f);
        } else {
            $f = [
                'code' => 200,
                'msg' => '提交失败',
            ];
            return json($f);
        }

    }

    public function telmsg(){
        $data=request()->param();
        $data=$data['data'];
	    $data = html_entity_decode($data); 
        $data= stripslashes($data);
        $data=htmlspecialchars_decode($data);
        $data=\json_decode($data,true);
        
        $phone=$data['phone'];
        $name=$data['ivrKey'];
        $name=Tell::where('transfer','eq',$data['ivrKey'])->find();
        if($name){
            $name=$name['name'];
        }else{
            $name="没定义";
        }
        $path='没有';
        sc_send('400转接','来电区域是：'.$path.';来电号码是：'.$phone.';来电项目是：'.$name.';ikey:'.$data['ivrKey']);
	    if($data['ivrKey']>1401 && $data['ivrKey'] < 1600){
            sc_send('400转接','来电区域是：'.$path.';来电号码是：'.$phone.';来电项目是：'.$name,'SCU57569T4d9188e8acb84f5d4776352a85e3b8d85d551bdc7f2a5');
        }
        if($data['ivrKey']>1201 && $data['ivrKey'] < 1400){
            sc_send('400转接','来电区域是：'.$path.';来电号码是：'.$phone.';来电项目是：'.$name,'SCU57617T3c25b41bf53fdd4d14b93b3a01a1e42b5d564d44ac950');
        }
        if($data['ivrKey']>2801 && $data['ivrKey'] < 3000){
            sc_send('400转接','来电区域是：'.$path.';来电号码是：'.$phone.';来电项目是：'.$name,'SCU57619T80e01c567e085e086e00fbfa4efa17e95d564e67af7ee');
        }
        if($data['ivrKey']>4001 && $data['ivrKey'] < 4200){
            sc_send('400转接','来电区域是：'.$path.';来电号码是：'.$phone.';来电项目是：'.$name,'SCU57620T12c162ac2684ffc3eff9a52d1550be2a5d564fad78198');
        }
        if($data['ivrKey']>3401 && $data['ivrKey'] < 3600){
            sc_send('400转接','来电区域是：'.$path.';来电号码是：'.$phone.';来电项目是：'.$name,'SCU57622T7eaa0803881bf4910e6c105b2b8472575d56508dbc666');
        }
        if($data['ivrKey']>1001 && $data['ivrKey'] < 1200){
            sc_send('400转接','来电区域是：'.$path.';来电号码是：'.$phone.';来电项目是：'.$name,'SCU57624Tebc230fae511f786bdfc8791edf26ec75d56518ddcb9c');
        }
        if($data['ivrKey']>1001 && $data['ivrKey'] < 1200){
            sc_send('400转接','来电区域是：'.$path.';来电号码是：'.$phone.';来电项目是：'.$name,'SCU57625T4a530a000c0807e5598e628e61cf35c55d56526f470e2');
        }
        
        return json(['code'=>200]);
    }


	public function liao(){
        $really=[];
        $reallt=[];
        $all=[];
        for($x=0;$x<7;$x++){
            $t=mt_rand(1,5);
            $d=date('z',time());
            if($d % 2 ==1){
                // $p=$data['danjia']-800;
                $p=10000;
            }else{
                // $p=$data['danjia']+800;
                $p=11000;
            }
            // $m=$huimgs[0]['mian'];
            $m=35;
            $z=$m*$p*$t;
            $z=$z/10000;
            $really[]=$z;
            $reallt[] = date('m/d' ,strtotime( '+' . $x-7 .' days', time()));
            $all[$x][]=date('m/d' ,strtotime( '+' . $x-7 .' days', time()));
            $all[$x][]=$t;
            $all[$x][]=$z;
        }
        dump($reallt);
    }


    public function ping(){
        $data=request()->param();
        if(Session::has('user')){
            $data['u_id']=Session::get('user.id');
            Ping::create($data);
            return json(['code'=>200]);
        }
        else
        {
            return json(['code'=>300]);
        }
    }
    public function num($id){
        $type=request()->param()['type'];
        $num=(int)request()->param()['num'];
        if($type==1){
            $num=$num+1;
        }else{
            $num=$num-1;
        }
        Ping::where('id',$id)->update(['num'=>$num]);
        return json(['code'=>200]);
    }
    public function pings($id){
        $data=Ping::where('bid','eq',$id)->select();
        foreach($data as $v){
            $v['tel']=User::where('id','eq',$v['u_id'])->column('phone')[0];
            $v['tel']=substr($v['tel'],0,3).'****'.substr($v['tel'],7);
            if($v['pid']){
                $v['con']=Ping::where('pid','eq',$v['id'])->select();
                foreach($v['con'] as $j){
                    $v['tel']=User::where('id','eq',$v['u_id'])->column('phone')[0];
                    $v['tel']=substr($v['tel'],0,3).'****'.substr($v['tel'],7);
                }
            }else{
                $v['con']=[];
            }
        }
        return view('ping',['data'=>$data]);
    }
    public function hu($id){
        $hu=Huimgs::where('id','eq',$id)->find();
        $bid=request()->param()['bid'];
        $data=Goods::where('id','eq',$bid)->find();
        return view('hu',['hu'=>$hu,'data'=>$data]);
    }
    public function hus($id){
        $hus=Huimgs::where('bid','eq',$id)->select();
        $data=Goods::where('id','eq',$id)->field('building_name')->find();
        return view('hus',['hus'=>$hus,'id'=>$id,'data'=>$data]);
    }

    public function saveping(){
        $data=request()->param();
        Comment::create($data);
        return json(['code'=>200]);
    }
    public function delping($id){
        Comment::destroy($id);
        return json(['code'=>200]);
    }
    
    // 首页跟落地页的留言提问
    public function tw(){
        $data=request()->param();
        dump($data);die();
        $ma=$data['ma'];
        $phone=$data['tel'];
        if($ma==cache($phone)){
            unset($data['ma']);
            tw::create($data);
            return json(['code'=>200]);
        }else{
            return json(['code'=>300,'msg'=>'验证码错误']);
        }
    }

    

    // PC的楼盘详情
    public function detail($id){
        $type=request()->param('type');
        $data=Goods::where('id','eq',$id)->find();
        $city=Category::where('pid',0)->select();
        $huimgs = Huimgs::where('bid', $id)->select();
        $hus=Huimgs::where('bid', $id)->count('id');
        $dong=Text::order('id','desc')->where('bid','eq',$id)->limit(1)->select();
        $dongs=Text::order('id','desc')->where('bid','eq',$id)->limit(10)->select();
        $huimgs=Huimgs::where('bid','eq',$id)->select();
        $ximgs=Xiaoimgs::where('bid','eq',$id)->select();
        $simgs=Shiimgs::where('bid','eq',$id)->select();
        $yimgs=Yangimgs::where('bid','eq',$id)->select();
        $pimgs=Peiimgs::where('bid','eq',$id)->select();
        $jimgs=Jiaoimgs::where('bid','eq',$id)->select();
        $cate=Category::where('id','eq',$data['cate_id'])->column('pid')[0];
        $qus=Category::where('pid',$cate)->column('id');
        $tdengs=Goods::where('cate_id','in',$qus)->where('tdeng','eq','一级')->limit(0,6)->select();
        foreach($tdengs as $v){
            $n=Category::where('id',$v['cate_id'])->column('pid')[0];
            $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
            $v['city']=Category::where('id',$n)->column('area_name')[0];
            $v['dong']=Text::where('bid','eq',$v['id'])->limit(0,1)->find()['introduce'];
        }
        $yous=You::select();
        return view('detail',['city'=>$city,'hus'=>$hus,'huimgs'=>$huimgs,'data'=>$data,'dong'=>$dong,'dongs'=>$dongs,'huimgs'=>$huimgs,'ximgs'=>$ximgs,'simgs'=>$simgs,'yimgs'=>$yimgs,'pimgs'=>$pimgs,'jimgs'=>$jimgs,'tdengs'=>$tdengs,'type'=>$type,'yous'=>$yous]);
    }

    public function depth($id){
        $data=Goods::where('id','eq',$id)->find();
        $tou=Fen::where('bid','eq',$id)->where('type','eq',1)->find();
        $yi=Fen::where('bid','eq',$id)->where('type','eq',2)->find();
        return view('depth',['data'=>$data,'tou'=>$tou,'yi'=>$yi]);
    }

    // 项目子页面的相册页
    public function lpic($id){
        $data=Goods::where('id','eq',$id)->find();
        $himgs=Huimgs::where('bid','eq',$id)->select();
        $hs=Huimgs::where('bid','eq',$id)->count('*');
        $ximgs=Xiaoimgs::where('bid','eq',$id)->select();
        $xs=Xiaoimgs::where('bid','eq',$id)->count('*');
        $pimgs=Peiimgs::where('bid','eq',$id)->select();
        $ps=Peiimgs::where('bid','eq',$id)->count('*');
        $simgs=Shiimgs::where('bid','eq',$id)->select();
        $ss=Shiimgs::where('bid','eq',$id)->count('*');
        $yimgs=Yangimgs::where('bid','eq',$id)->select();
        $ys=Yangimgs::where('bid','eq',$id)->count('*');
        $jimgs=Jiaoimgs::where('bid','eq',$id)->select();
        $js=Jiaoimgs::where('bid','eq',$id)->count('*');
        return view('lpic',['himgs'=>$himgs,'hs'=>$hs,'ximgs'=>$ximgs,'data'=>$data,'xs'=>$xs,'pimgs'=>$pimgs,'ps'=>$ps,'simgs'=>$simgs,'ss'=>$ss,'yimgs'=>$yimgs,'ys'=>$ys,'jimgs'=>$jimgs,'js'=>$js,'id'=>$id]);
    }

    // 周边规划跳转
    public function zg($id){
        $data=Goods::where('id','eq',$id)->find();
        return view('zg',['data'=>$data]);
    }
}
