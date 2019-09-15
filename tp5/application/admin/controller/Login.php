<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Loader;
use think\Validate;
use think\Session;
use app\admin\model\Admin as ModelAdmin;

class Login extends Controller
{
    public function login()
    {
        if(request()->isPost())
        {
            $username = input('username');
            $password = md5(input('password'));
            
            $data = input('post.');
            
            /*$data = [
                'username' => $username,
                'password' => $password,
            ];
            */

            $login = new ModelAdmin();
            $flag = $login->Login($data);
            
            switch ($flag)
            {
                case -2:
                    return $this->error('验证码错误');
                case -1:
                    return $this->error('用户不存在');
                case 1:
                    return $this->fetch('index/index');
                case 0:
                    return $this->error('密码或用户名错误');
                default:
                    return $this->error('密码或用户名错误');
            }
                    
            
            /*
            $username = input('username');
            $password = md5(input('password'));
            
            
            $data=[
                'username' => $username,
                'password' => $password,
            ];
            
            
            
            $validate = \think\Loader::validate('Login');
            if($validate -> scene('login') -> check($data) === false)
            {
                $this->error($validate->getError());
                die;
            }
            
            $login = Db::table('tp_admin')
            ->where('username',$username)
            ->field('password')
            ->find();
            //dump($password,$username);
            //echo "<br/>";
            //dump($login);
            //die;
            
            if($login['password'] === $data['password'])
                return $this->fetch("index/index");
            else 
                return $this->error('密码或用户名错误');
                */
        }
        return $this->fetch();
    }


}