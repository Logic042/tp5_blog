<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Article as ArticleModel;
use think\Request;
use think\Validate;
/*
 * tableName:tp_article
 * id,title,descr,keywords,content,author,time,click,pic,state,cateid
 * */

class Article extends Controller
{
    public function lst()
    {
        //$Article = new ArticleModel();
        //$list = $Article->all();
        /*$list = Db::table('tp_article')
                ->join('tp_cate','tp_article.cateid=tp_cate.id')
                ->field('tp_article.id,cateid,tp_cate.catename,title,descr,keywords,content,author,time,click,pic,state')
                ->select();*/
        //使用数据库链式操作在两个表中进行联合查询，意为在tp_article和tp_cate表里进行联合查找，查找articel.cateid=cate.id的a.id,a.cateid,a.title,c.catename等属性内容
        
        $Artcile = new ArticleModel();
        $list = $Artcile->all();
        $this->assign('list',$list);
        /*dump($list);
        die;*/
        return  $this->fetch();
    }
    
    public function addpic()
    {
        $file = request()->file('articlepic');

        if(request()->isPost())
        {
        if($file)
        {
            $info = $file->move(ROOT_PATH.'public'.DS.'static/uploads');
            echo $info->getExtension();
            echo $info->getSavename();
            echo $info->getFilename();
        }
        else 
        {
            echo "上传失败";
            //echo $file->getError();
        }
    }
        return $this->fetch();
    } 

    public function add()
    {
        $cate = db('cate')->select();
        $this->assign('cate',$cate);
       
        if(request()->isPost())
        {
            
           
            
            $data = [
                'title' => input('articletitle'),
                'descr' =>input('articledescr'),
                'keywords' => input('articlekeyword'),
                'content' =>input('articlecontent'),
                'author' => input('articleauthor'),
                'time' => time(),
                'cateid' => input('articlecateid'),
            ];

            if(input('articlestate') == 'on')
            {
                $data['state'] = 1;
            }
            
            //if($_FILES['articlepic']['tmp_name']){
              /*  $file = request()->file('articlepic');
                if ($file)
                {
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                    $data['pic']='/uploads/'.$info->getSaveName();
                }*/
            //}
            
            
            $pic = request()->file('articlepic');
            if($pic)
            {
                $info = $pic->move(ROOT_PATH.'public'.DS.'static/uploads');
                if($info)
                {
                    $data['pic'] = 'uploads/'.$info->getSaveName();
                    //$this->success('成功插入图片');
                }
            }
            
            
            if(db('article')->insert($data))
            {
                $this->success('文章添加成功','Article/lst');
            }
            else 
                $this->error('文章添加失败');
            
                $validate = \think\Loader::validate('Article');
                if($validate->scene('add')->check($data) === false)
                {
                    $this->error($validate->getError());
                    die;
                }
            
            /*if(db('Article')->insert($data))
            {
                $this->success('文章添加成功','Article/lst');
            }
            else
                $this->error('添加失败','Article/add');
        }
        */
        
        /*
        if(request()->isPost())
        {
            $data = [
                'title' => 'articletitle',
                'descr' => 'articledescr',
            ];
            
            $validate = \think\Loader::validate('Article');
            if($validate->scene('add')->check($data) === false)
            {
                $this->error($validate->getError());
                die;
            }
            //使用验证器进行验证$data是否符合验证期规则，场景限制为add
            //$result = db('Article')->insert($data);
            //dump($result);
            if(Db::table('tp_Article')->insert($data))  //插入$data信息
                return $this->success('添加栏目成功');
            else
                return $this->error('添加栏目失败');*/
                    
        }
        return $this->fetch();
    }
    public function delete()
    {
        $id = input('id');
         
            if (Db::Table('tp_Article')->delete($id)) //使用类库函数进行删除用户信息
                $this->success('成功删除', 'Article/lst');
            else
                $this->error('删除失败', 'Article/lst');
        
    }
    public function edit()
    {
        $cate = db('cate')->select();
        $this->assign('cate',$cate);
        
        $id = input('id');
        $Article = db('Article')->find($id);
        $this->assign('Article',$Article);


        if(request()->isPost())
        {
            $data = [
                'id' => input('id'),
                'title' => input('articletitle'),
                'descr' =>input('articledescr'),
                'keywords' => input('articlekeyword'),
                'content' =>input('articlecontent'),
                'author' => input('articleauthor'),
                'time' => time(),
                'cateid' => input('articlecateid'),
            ];
            if(input('articlestate') == 'on')
            {
                $data['state'] = 1;
            }
            else $data['state'] = 0;
            
            //if($_FILES['articlepic']['tmp_name']){
            /*$file = request()->file('articlepic');
            if ($file)
            {

                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['pic']='/uploads/'.$info->getSaveName();
            }*/
            $pic = request()->file('articlepic');
            //dump($pic);die;
            if($pic)
            {
                
                $remove = ROOT_PATH.'public'.DS.'static\\'.$Article['pic'];
                //unlink($remove);
                //删除文件报错，没有权限，部署时仅需要将文件夹权限开放即可
                
                $info = $pic->move(ROOT_PATH.'public'.DS.'static/uploads');
                if($info)
                {
                    $data['pic'] = 'uploads/'.$info->getSaveName();
                    //$this->success('成功插入图片');
                }
            }
            
            
            $save = db('article')->update($data); //使用助手函数进行更新
            
            if($save !== false)
                $this->success('成功修改','Article/lst');
                else
                    $this->error('修改失败');
                    return ;
            
            
            /*if(db('article')->update($data))
            {
                $this->success('文章修改成功','Article/lst');
            }
            else
                $this->error('文章修改失败');
                
                $validate = \think\Loader::validate('Article');
                if($validate->scene('add')->check($data) === false)
                {
                    $this->error($validate->getError());
                    die;
                }*/
         }
        
        /*
        $id = input('id');
        $Article = db('Article')->find($id);
        $this->assign('Article',$Article);
        //从数据库中查找需要编辑的用户信息
        
        if(request()->isPost())
        {//检测信息是否传输至服务器
            $data = [
                'id' => input('id'),
                'Articlename' => input('Articlename'),
            ];
            if($data == $Article)
            {
                $this->error('请填写需要修改的内容');
            }
            else {

                //是用验证器进行验证
                $validate = \think\Loader::validate('Article');
                if($validate->scene('edit')->check($data) === false)
                {
                    $this->error($validate->getError());
                    die;
                }
                
                
                $save = db('Article')->update($data); //使用助手函数进行更新
                if($save != false)
                    $this->success('成功修改','Article/lst');
                    else
                        $this->error('修改失败');
                        return ;
            }
             return ;

        }*/
        return $this->fetch();
    }

}

