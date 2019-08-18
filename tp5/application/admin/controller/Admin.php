<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Admin extends Controller
{
    public function lst()
    {
        return $this->fetch();
    }
    public function add()
    {
        if(request()->isPost())
        {
            $data = [
                'username' => input('username'),
                'password' => md5(input('password')),
            ];
            if(db('admin')->insert($data))
            {
                return $this->success('添加管理员成功');
                //return "<script type='text/javascript'>alert('添加管理员成功！')</script>";
            }
            else
                return $this->error('添加管理员失败');
                //return "<script type='text/javascript'>alert('添加管理员失败！')</script>";
        }
        return $this->fetch();
    }
}