<?php
namespace app\index\controller;
use think\Controller;

/**
 * 文章页
 * @author 王龙
 * 2019年8月16日
 */
class Article extends Controller
{
    public function index()
    {
        return $this->fetch('article');
    }
}
