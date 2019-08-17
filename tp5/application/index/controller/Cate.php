<?php
namespace app\index\controller;
use think\Controller;

/**
 * 美食页
 * @author 王龙
 * 2019年8月16日
 */
class Cate extends Controller
{

    public function index()
    {
        return $this->fetch('cate');
    }
}

