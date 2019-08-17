<?php 
namespace app\admin\controller;
use think\Controller;

/**
 * 管理主页
 * @author 王龙
 * 2019年8月16日
 */
class Index extends Controller
{
    public function Index()
    {
        return $this->fetch();
    }
}