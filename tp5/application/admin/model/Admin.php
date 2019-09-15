<?php
namespace app\admin\model;
use think\Model;
use think\Db;
use think\Session;

class Admin extends Model
{
    public function Login($data)
    {
        
        
        $user = Db::name('admin')  //效果与Db::table('tp_admin')相同
                 ->where('username',$data['username'])
                 ->find();

        if (!captcha_check($data['code']))
            return -2;              //验证码错误    
        if ($user === null)
            return -1;              //用户名错误 
            elseif ($user['password'] === md5($data['password']))
        {
            Session::set('username',$user['username']);     //将用户名及id写入session中
            Session::set('uid',$user['id']);
            return 1;
        }
        else 
            return 0;               //密码错误
    }

}

