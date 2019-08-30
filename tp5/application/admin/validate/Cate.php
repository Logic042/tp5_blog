<?php
namespace app\admin\validate;

use think\Validate;

class Cate extends Validate
{
    protected $rule = [
        'catename|栏目名称' => 'require|max:30|unique:cate',
    ];
    //验证期规则
    
    protected $message = [
        'cate.require' => '链接栏目不能为空',
        'cate.max' => '链接栏目长度不能大于30个字符',
        'cate.unique' => '链接栏目已经存在',
    ];
    //验证期相应提示信息
    
    protected $scene = [
        'edit' => ['catename'],
        'add' => ['catename'],
    ];
}

