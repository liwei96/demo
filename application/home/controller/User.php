<?php

namespace app\home\controller;

use think\Controller;
use think\Request;
use think\Cookie;
use think\Cache;
use think\Db;
use think\Session;
use app\home\model\Request as RequestModel;
use app\home\model\User as UserModel;
use app\admin\model\Attribute;
use app\admin\model\Category;
use app\home\model\Port1;
use app\home\model\Yue;
use app\home\model\Jian;
use app\admin\model\Goods;
use app\admin\model\You;

class User extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        return view('home');
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

    public function find(){
        if(Session::has('user')){
            $hus=Attribute::where('id',7)->column('attr_values')[0];
            $hus=explode(',',$hus);
            $tes=Attribute::where('id',9)->column('attr_values')[0];
            $tes=explode(',',$tes);
            $areas=Category::where('pid',1)->select();
            return view('find',['hus'=>$hus,'tes'=>$tes,'areas'=>$areas]);
        }else{
            $this->redirect('home/user/login',['type'=>'帮我找房']);
        }
    }


    public function test(){
        $re=request()->param();
        $jiage=$re['jiage'];
        $area=$re['area'];
        $huxing=$re['huxing'];
        $tese=$re['tese'];
        $phone=$re['phone'];
        $IP = $_SERVER['REMOTE_ADDR'];
            sc_send('客户想拜托找房，户型是' . $huxing . '；楼盘特色是' . $tese, '区域是:' . $area . ';' . '客户的电话是' . $phone . ';价格区间'.$jiage.';' . 'IP是' . $IP.';推广一');
        $s=RequestModel::create($re);
        if($s){
            $res=[
                'code'=>100,
                'msg'=>$s
            ];
        }else{
            $res=[
                'code'=>200,
                'msg'=>'添加失败'
            ];
        }
        return json($res);
    }
    public function shou(){
        $hots=Goods::where('building_tejia','是')->select();
        if(Session::has('user')){
            if(Session::get('user')['fork']){
                $ids=explode(',',Session::get('user')['fork']);
                $data=Goods::where('id','in',$ids)->paginate(5);
                foreach($data as $v){
                    $n=Category::where('id',$v['cate_id'])->column('pid')[0];
                    $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
                    $v['city']=Category::where('id',$n)->column('area_name')[0];
                }
                return view('shous',['data'=>$data,'hots'=>$hots]);
            }else{
                return view('shou',['hots'=>$hots]);
            }
        }else{
            $this->redirect('home/user/login',['type'=>'查看收藏']);
        }
    }
    public function zu(){
	if(!Session::has('fork')){
            Session::set('fork',[]);
        }
        $hots=Goods::where('building_tejia','是')->select();
        if(Cookie::has('ids')){
            $ids=Cookie::get('ids');
            $ids=explode('-',$ids);
            $data=Goods::where('id','in',$ids)->paginate(4);
            foreach($data as $v){
                $n=Category::where('id',$v['cate_id'])->column('pid')[0];
                $v['qu']=Category::where('id',$v['cate_id'])->column('area_name')[0];
                $v['city']=Category::where('id',$n)->column('area_name')[0];
            }
            return view('ji',['data'=>$data,'hots'=>$hots]);
        }else{
            return view('jilu',['hots'=>$hots]);
        }
    }
    public function yue(){
        if(request()->isGet()){
            if(Session::has('user')){
                return view();
            }else{
                $this->redirect('home/user/login',['type'=>'预约看房']);
            }
        }else{
            $data=request()->param();
            $sex=$data['sex'];
            $time=$data['time'];
            $phone=UserModel::where('id',$data['u_id'])->column('phone')[0];
            $IP = $_SERVER['REMOTE_ADDR'];
            sc_send('一个'.$sex.'想看房，看房时间是' . $time . '；电话号是' . $phone, 'IP是' . $IP.'；推广一');
            $s=Yue::create($data);
            if($s){
                $res=[
                    'code'=>100
                ];
                return json($res);
            }else{
                $res=['code'=>200];
                return json($res);
            }
        }
    }
    function juhecurl($url,$params=false,$ispost=0){
        $httpInfo = array();
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1 );
        curl_setopt( $ch, CURLOPT_USERAGENT , 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22' );
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT , 30 );
        curl_setopt( $ch, CURLOPT_TIMEOUT , 30);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER , true );
        if( $ispost )
        {
            curl_setopt( $ch , CURLOPT_POST , true );
            curl_setopt( $ch , CURLOPT_POSTFIELDS , $params );
            curl_setopt( $ch , CURLOPT_URL , $url );
        }
        else
        {
            if($params){
                curl_setopt( $ch , CURLOPT_URL , $url.'?'.$params );
            }else{
                curl_setopt( $ch , CURLOPT_URL , $url);
            }
        }
        $response = curl_exec( $ch );
        if ($response === FALSE) {
            //echo "cURL Error: " . curl_error($ch);
            return false;
        }
        $httpCode = curl_getinfo( $ch , CURLINFO_HTTP_CODE );
        $httpInfo = array_merge( $httpInfo , curl_getinfo( $ch ) );
        curl_close( $ch );
        return $response;
    }
    public function sendmsg($phone,$msg){
        $sendUrl = 'http://v.juhe.cn/sms/send'; //短信接口的URL
  
        $smsConf = array(
            'key'   => 'a7289630cca0320602d260376d297abd', //您申请的APPKEY
            'mobile'    => $phone, //接受短信的用户手机号码
            'tpl_id'    => '156429', //您申请的短信模板ID，根据实际情况修改
            'tpl_value' =>"#code#=$msg" //您设置的模板变量，根据实际情况修改
        );
        $content = $this->juhecurl($sendUrl,$smsConf,1); //请求发送短信
 
        if($content){
            $result = json_decode($content,true);
            $error_code = $result['error_code'];
            if($error_code == 0){
                //状态为0，说明短信发送成功
                return true;
            }else{
                //状态非0，说明失败
               return false;
            }
        }else{
            //返回内容异常，以下可根据业务逻辑自行修改
            echo "请求发送短信失败";
        }

    }



    public function login(){ 
        if(request()->isGet()){
            $type=request()->param('type');
            return view('login',['type'=>$type]);
        }else if(request()->isPost()){
            $data=request()->param();
            $phone=$data['phone'];
            $building_name=$data['building_name'];
            $type=$data['type'];
            // $building_name=$data['building_name'];
            // $type=$data['type'];
            $ma=mt_rand(1000,9999);
            if (!preg_match('/^1[3-9]\d{9}$/', $phone)) {
                $res = [
                    'code' => 10001,
                    'msg' => '手机号格式错误',
                ];
                return json($res);
            }
            $ph=substr($phone,0,7);
            
                // if(Cache::has($ph)){
                //     if(Cache::get($ph)>5){
                //         return json(['code'=>300]);
                //     }else{
                //         $l=Cache::get($ph);
                //         $l=$l+1;
                //         Cache::set($ph,$l);
                //     }
                // }else{
                //     Cache::set($ph,1,12*3600);
                // }
            $register_time = cache($phone.'time') ? : 0;
            if (time() - $register_time < 60) {
                $res = [
                    'code' => 10003,
                    'msg' => '发送太频繁，稍后再试',
                ];
                return json($res);
            }
             sc_send('未输入验证码的客户','客户想要获取' . $building_name . '的' . $type.';号码是'.$phone.';推广一');
            //  sc_send('未输入验证码的客户','客户想要获取' . $building_name . '的' . $type.';号码是'.$phone.';推广一');
            if(Cookie::has('from')){
                $data['key']=Cookie::get('from')['key'];
                $data['other']=Cookie::get('from')['other'];
            }
            Port1::create($data);
            $result=$this->sendmsg($phone,$ma);
            
            if($result){
                cache($phone,$ma,300);
                cache($phone.'time',time());
                $res=[
                    'code' => 100,
                ];
                return json($res);
            }else{
                $res=[
                    'code' => 200,
                    'msg' => '发送失败'
                ];
                return json($res);
            }
        }
    }


    

   public function log(){
        $data=request()->param();
        $phone=$data['phone'];
        $ma=$data['code'];
        if (!preg_match('/^1[3-9]\d{9}$/', $phone)) {
            $res = [
                'code' => 10001,
                'msg' => '手机号格式错误',
            ];
            return json($res);
        }
        if($ma==''){
            $res = [
                'code' => 10002,
                'msg' => '验证码不能为空',
            ];
            return json($res);
        }
        if($ma==cache($phone)){
            cache($phone,null);
            $s=UserModel::where('phone',$phone)->find();
            
            if($s){
                Session::set('user',$s);
            }else{
                unset($data['code']);
                UserModel::create($data);
                $s=UserModel::where('phone',$phone)->find();
                Session::set('user',$s);
            }
            $s['p']=substr($s['phone'],0,3).'*'.substr($s['phone'],9,2);
            $res=[
                'code'=>100
            ];
            return json($res);
        }else{
            $res = [
                'code' => 10003,
                'msg' => '验证码错误',
            ];
            return json($res);
        }
    }
    public function logout(){
        Session::delete('user');
	    Session::delete('fork');
        $this->redirect('home/index/index');
    }

    public function guan(){
        $hots=Goods::where('building_tejia','是')->select();
        return view('guan',['hots'=>$hots]);
    }

    public function tou(){
        return view();
    }

    public function liu(){
        return view();
    }

    public function lian(){
        $hots=Goods::where('building_tejia','是')->select();
        return view('lian',['hots'=>$hots]);
    }

    public function jian(){
        if(request()->isGet()){
            $hots=Goods::where('building_tejia','是')->select();
            return view('jian',['hots'=>$hots]);
        }else{
            $data=request()->param();
            if($data['con']){
                Jian::create($data);
                return json(['code'=>200]);
            }else{
                return json(['code'=>300]);
            }
        }
    }

    // 帮我找房
    public function help(){
        $yous=You::select();
        return view('help',['yous'=>$yous]);
    }
    // 公众号
    public function gong(){
        return view();
    }
    // 客服
    public function ke(){
        return view();
    }

    // 邮件
    public function email(){
        $curlPost=request()->param();
        $id=$curlPost['project'];
        $name=Goods::where('id','eq',$id)->column('building_name')[0];
        $curlPost['project']=Db::connect('mysql://erp:ZkMFXYZ2H7MBtW4i@39.98.227.114:3306/erp#utf8')->table('erp_building')->where('building_name','eq',$name)->column('id')[0];
        $url = 'http://api.jy1980.com/index.php/distribute/send';
        $ch = curl_init();//初始化curl
        curl_setopt($ch, CURLOPT_URL,$url);//抓取指定网页
        curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
        $data = curl_exec($ch);//运行curl
        curl_close($ch);
        return json(['code'=>200]);
    }
}
