<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Cate as CateModel;
/*
 * tableName:tp_links
 * id,title,url,
 * */
class Cate extends Controller
{
    public function lst()
    {
        $Cate = new CateModel();
        $list = $Cate->all();
        $this->assign('list',$list);
        return $this->fetch();
    }
    
    public function add()
    {
        if(request()->isPost())
        {
            $data = [
                'catename' => input('catename'),
            ];
            
            $validate = \think\Loader::validate('Cate');
            if(!$validate->scene('add')->check($data))
            {
                $this->error($validate->getError());
                die;
            }
            //使用验证器进行验证$data是否符合验证期规则，场景限制为add
            //$result = db('cate')->insert($data);
            //dump($result);
            if(Db::table('tp_cate')->insert($data))  //插入$data信息
                return $this->success('添加栏目成功');
            else
                return $this->error('添加栏目失败');
                    
        }
        return $this->fetch();
    }
    public function delete()
    {
        $id = input('id');
         
            if (Db::Table('tp_cate')->delete($id)) //使用类库函数进行删除用户信息
                $this->success('成功删除', 'cate/lst');
            else
                $this->error('删除失败', 'cate/lst');
        
    }
    public function edit()
    {
        $id = input('id');
        $cate = db('cate')->find($id);
        $this->assign('cate',$cate);
        //从数据库中查找需要编辑的用户信息
        
        if(request()->isPost())
        {//检测信息是否传输至服务器
            $data = [
                'id' => input('id'),
                'catename' => input('catename'),
            ];
            if($data == $cate)
            {
                $this->error('请填写需要修改的内容');
            }
            else {
                $validate = \think\Loader::validate('Cate');
                if(!validate()->scene('edit')->check($data))
                {
                    $this->error($validate->getError());
                    die;
                }
                //是用验证器进行验证
                
                $save = db('cate')->update($data); //使用助手函数进行更新
                if($save != false)
                    $this->success('成功修改','Cate/lst');
                    else
                        $this->error('修改失败');
                        return ;
            }
             return ;

        }
        return $this->fetch();
    }

}

