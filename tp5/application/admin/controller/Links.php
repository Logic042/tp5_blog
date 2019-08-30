<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Links as LinksModel;
use think\console\command\make\Model;


/*
 * tableName:tp_links
 * id,title,url,
 * */
class Links extends Controller
{
    public function lst()
    {
        $Links = new LinksModel();
        $list = $Links->all();
        $this->assign('list',$list);
        return $this->fetch();
    }
    
    public function add()
    {
        if(request()->isPost())
        {
            $data = [
                'title' => input('linkstitle'),
                'urls' => input('linksurl'),
                'descr' => input('linksdescr'),
            ];
            
            $validate = \think\Loader::validate('Links');
            if(!$validate->scene('add')->check($data))
            {
                $this->error($validate->getError());
                die;
            }
            //使用验证器进行验证$data是否符合验证期规则，场景限制为add
            
            if(db('links')->insert($data))  //插入$data信息
                return $this->success('添加链接成功');
            else
                return $this->error('添加链接失败');
                    
        }
        return $this->fetch();
    }
    public function delete()
    {
        $id = input('id');
        
            if (Db::Table('tp_links')->delete($id)) //使用类库函数进行删除用户信息
                $this->success('成功删除', 'links/lst');
            else
                $this->error('删除失败', 'links/lst');
        
    }
    public function edit()
    {
        $id = input('id');
        $links = db('links')->find($id);
        $this->assign('links',$links);
        //从数据库中查找需要编辑的用户信息
        
        if(request()->isPost())
        {//检测信息是否传输至服务器
            $data = [
                'id' => input('id'),
                'title' => input('linkstitle'),
                'urls' =>input('linksurl'),
                'descr' => input('linksdescr'),
            ];
            if($data == $links)
            {
                $this->error('请填写需要修改的内容');
            }
            else {
                
                $validate = \think\Loader::validate('Links');
                if(!validate()->scene('edit')->check($data))
                {
                    $this->error($validate->getError());
                    die;
                }
                //是用验证器进行验证
                
                $save = db('links')->update($data); //使用助手函数进行更新
                if($save != false)
                    $this->success('成功修改','Links/lst');
                    else
                        $this->error('修改失败');
                        return ;
            }
             return ;

        }
        return $this->fetch();
    }

}

