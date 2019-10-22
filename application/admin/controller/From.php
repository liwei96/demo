<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\model\From as FromModel;
use app\admin\model\Goods;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;


class From extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        $data=FromModel::paginate(15);
        return view('index',['data'=>$data]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
        return view();
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
        foreach($data['key'] as $k=>$v){
            $dd=[];
            $dd['key']=$v;
            $dd['kid']=$data['kid'][$k];
            FromModel::create($dd);
        }
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
        $data=FromModel::where('id','eq',$id)->find();
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
        $data=$request->param();
        FromModel::where('id','eq',$id)->update($data);
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
        FromModel::destroy($id);
        $this->redirect('index');
    }

    public function in(){
        $file=request()->file('text');
        $info=$file->move(ROOT_PATH.'public'.DS.'excel');
        $path='.'.DS.'excel'.DS.$info->getSaveName();
        $spreadsheet=new Spreadsheet();
        $objRead     = IOFactory::load($path);
        $sheet         = $objRead->getSheet(0); // 读取第一個工作表
        $sheetdata  =   $sheet->toArray();
        // dump($sheetdata);die();
        $data=[];
        foreach($sheetdata as $k=>$v){
            if($k>0&&$k<1000){
                $l['key']=$v[0];
                $l['kid']=$v[1];
                $data[]=$l;
            }
        }
        // dump($data);die();
        FromModel::insertAll($data);
        $this->redirect('index');
    }

    public function test(){
        $shu=Db::connect('mysql://root:BmaGRa6mBNdbKTNw@47.92.241.83:3306/tpshop#utf8')->table('tpshop_goods')->alias('b')->join('tpshop_category c','b.cate_id=c.id')->column('b.id,b.building_name,c.area_name,b.building_xingshi');
        // dump($shu);die();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        //设置sheet的名字  两种方法
        $sheet->setTitle('楼盘编号');
        //设置第一行小标题
        $k = 1;
        $sheet->setCellValue('a'.$k, '楼盘编号');
        $sheet->setCellValue('b'.$k, '楼盘名');
        $sheet->setCellValue('c'.$k, '区域');
        $sheet->setCellValue('d'.$k, '建筑形式');
        $row=2;
        foreach($shu as $k=>$v){
            $column=1;
            foreach($v as $l=>$n){
                $sheet->setCellValueByColumnAndRow($column,$row,$n);
                $column++;
            }
            $row++;
        }
        $file_name = date('Y-m-d', time()).rand(1000, 9999);
        //第一种保存方式
        $writer = new Xlsx($spreadsheet);
        // 保存的路径可自行设置
        $file_name = './'.$file_name . ".xlsx";
        $writer->save($file_name);
    }
}
