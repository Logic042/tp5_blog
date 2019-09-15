<?php
namespace app\admin\validate;

use think\Validate;

class Links extends Validate
{
    protected $rule = [
        'title|链接标题' => 'require|max:30|unique:links',
        'urls|链接url' => 'require|max:60|unique:links',
        'descr|链接备注' => 'require|max:255',
    ];
    //验证期规则
    
    protected $message = [
        'title.require' => '链接标题不能为空',
        'title.max' => '链接标题长度不能大于30个字符',
        'title.unique' => '链接标题已经存在',
        'urls.require' => '链接url不能为空',
        'urls.max' => ' 链接url长度不能大于60个字符',
        'url.unique' => '链接url已经存在',
        'descr.require' => '链接备注必须填写',
        'descr.max' => '链接备注长度不能超过255个字符',
    ];
    //验证期相应提示信息
    
    protected $scene = [
        'edit' => ['title' => 'max:30|unique:links','urls' => 'max:60|unique:links','descr' => 'max:255'],
        'add' => ['title','urls','descr'],
    ];
}

