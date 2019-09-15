<?php
namespace app\admin\validate;

use think\Validate;

class Validate extends Validate
{
    protected $rule = [
        'title' => 'require|max:60',
        'descr' => 'max:255',
        'keyword' => 'max:255',
        'content' => 'require',
        'author' => 'require|max:30',
        'time' => '',
        'cateid' => '',
        'click' =>'',
    ];
    //验证期规则
    
    protected $message = [
        'title.require' => '标题不能为空',
        'title.max' => '标题最大长度不能超过60个字符',
        'descr.max' => '文章简介最大长度不能超过255个字符',
        'keyword.max' => '文章关键字最大长度不能超过255个字符',
        'content.require' => '文章内容不能为空',
        'author.require' => '文章作者不能为空',
        'author.max' => '文章作者昵称的最大长度不能超过30个字符',
    ];
    //验证期相应提示信息
    
    protected $scene = [
        'add' => ['title','descr','keyword','content','author',],
        'eidt' => ['title','descr','keyword','content','author',],
    ];
}

