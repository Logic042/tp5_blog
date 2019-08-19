<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Admin as AdminModel;

class Admin extends Controller
{
    public function lst()
    {
        $model = new AdminModel();
        $list = $model->all();
        $this->assign('list',$list);
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
            $validate = \think\Loader::validate('Admin');
            if(!$validate->check($data))
            {
                $this->error($validate->getError());
                die;
            }
            
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