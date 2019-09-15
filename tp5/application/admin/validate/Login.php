<?php
namespace app\admin\validate;
use think\Validate;

class Login extends Validate
{
    protected $rule = [
        'username|用户名' => 'require|max:30|unique:admin',
        'password|密码' => 'require',
        'captcha|验证码'=>'require|captcha'
    ];  
    //验证器规则 'name' => 'rules' require该name为必填选项
    

    protected $message = [
        'name.require' => '用户名不能为空',
        'name.max' => '用户名长度不得大于30个字符',
        'name.unique' => '用户名已经存在',
        'password.require' => '密码不能为空',
    ];
    //验证器属性
    
    protected $scene = [
        'login' =>['username' => 'require|max:30'],
    ];
    
}

