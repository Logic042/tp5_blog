<?php
namespace app\admin\validate;
use think\Validate;

class Admin extends Validate
{
    protected $rule = [
        'username|用户名' => 'require|max:30',
        'password|密码' => 'require',
    ];  
    //验证器规则 'name' => 'rules' require该name为必填选项
    

    protected $message = [
        'name.require' => '用户名不能为空',
        'name.max' => '用户名长度不得大于30个字符',
        'password.require' => '密码不能为空',
    ];
    //验证器属性
    
    protected $scene = [
        'edit1' => ['name' => 'require|max','age'],
        'edit' =>['username','password'],
        'add' => ['username','password'],
    ];
    //定义使用场景，仅在['name' => 'require|max','age']情况下使用验证
    
}

