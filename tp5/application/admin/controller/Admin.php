<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\admin\model\Admin as AdminModel;

class Admin extends Controller
{
    /*
     * 显示用户列表
     * */
    public function lst()
    {
        $model = new AdminModel();
        $list = $model->all();
        //调用model，
        $this->assign('list',$list);    //将$list数组传给模板
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
            if($validate->scene('add')->check($data) === false)
            {
                $this->error($validate->getError());
                die;
            }
            //使用验证器进行验证$data是否符合验证期规则，场景限制为add
            
            if(db('admin')->insert($data))  //插入$data信息
                return $this->success('添加管理员成功');
                //return "<script type='text/javascript'>alert('添加管理员成功！')</script>";
            else
                return $this->error('添加管理员失败');
                //return "<script type='text/javascript'>alert('添加管理员失败！')</script>";
                
        }
        return $this->fetch();
    }
    
    /*
     *删除用户
     * */
    public function delete()
    {
        $id = input('id');
        if ($id != 1) 
        {
            if (Db::Table('tp_admin')->delete($id) != false) //使用类库函数进行删除用户信息
                $this->success('成功删除', 'admin/lst');
            else
                $this->error('删除失败', 'admin/lst');
        }
        else 
            $this->error('超管不能删除!!!','admin/lst');
    }
    
    /*
     * 编辑用户信息
     * */
    public function edit()
    {
        $id = input('id');
        $admins = db('admin')->find($id);
        $this->assign('admins',$admins);
        //从数据库中查找需要编辑的用户信息
        
        if(request()->isPost())
        {//检测信息是否传输至服务器
            $data = [
              'id' => input('id'), 
               'username' => input('username'),
            ];
            if(input('password'))
                $data['password'] = md5(input('password'));
            else 
                $data['password'] = $admins['password'];
            
            $validate = \think\Loader::validate('Admin');
            if($validate->scene('edit')->check($data) === false)
            {
                $this->error($validate->getError());
                die;
            }
            //使用验证器进行验证$data数据是否符合验证期规则，场景限制为edit
            
            $save = db('admin')->update($data); //使用助手函数进行更新
            if($save !== false)
                $this->success('成功修改','Admin/lst');
            else 
                $this->error('修改失败');
            return ;
        }
        return $this->fetch();
    }
    
    /*
     * 退出登录,并清除数据
     * */
    public function logout()
    {
        Session::delete('username');
        Session::delete('uid');
        return $this->success('退出成功','Login/login');
    }
}