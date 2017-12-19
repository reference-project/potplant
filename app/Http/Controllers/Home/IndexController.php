<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Plant;
use App\PlantTab;
use App\Operate;
use IQuery;
use Session;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     * 获取盆栽数据信息
     * @return \Illuminate\Http\Response
     */
    public function getPlant(Request $request)
    {
        $id = IQuery::cleanInput($request->id);
        $plant = Plant::find($id);
        $plantTab = PlantTab::where('plant_id',$id)->get();
        return response()->json([
                'plant' => $plant,
                'plantTab' => $plantTab
            ]
        );
    }

    /**
     * Display a listing of the resource.
     * 获取操作数据信息
     * @return \Illuminate\Http\Response
     */
    public function getOperate(Request $request)
    {
        $plant_id = IQuery::cleanInput($request->id);
        $type = IQuery::cleanInput($request->type);
        $operate = Operate::where('plant_id', $plant_id)->where('type',$type)->get();
        return response()->json($operate);
    }
    public function aaa() {
        Session::put('st1','7657464');
    }
    public function test() {
        $st = Session::get('st1');
        return $st.'7777';
    }
}
