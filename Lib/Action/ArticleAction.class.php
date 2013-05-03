<?php
require_once APP_PATH. '/Common/function.php';

class ArticleAction extends Action {

    public function index(){
        if (!isLogin()){
            $this -> error('请登录', '__APP__/Admin/login');
        }
        
        $article = M('Article');
        $user    = M('User');
        
        $data  = $article -> order('date desc') -> select();

        $types = array('news' => '新闻', 'notice' => '通知');
        foreach ($data as $key => $value){
            $data[$key]['type'] = $types[$data[$key]['type']];
            $data[$key]['author'] = $user -> find($data[$key]['author'])['fullname'];
        }
        $this -> article = $data;
        $this -> display();
    }

    public function edit($id = 0){
        if (!isLogin()){
            $this -> error('请登录', '__APP__/Admin/login');
        }
        
        $article = M('Article');
        
        $this -> article = $article -> find($id);
        $this -> selected = array($this -> article['type'] => 'selected');
        $this -> display();
    }

    public function update(){
        if (!isLogin()){
            $this -> error('请登录', '__APP__/Admin/login');
        }
        
        $article = D('Article');
        $data = $this -> _post();
        if ($data['a_id'] == ''){
            $data['author'] = session('u_id');
            $data['date']   = date('Y-m-d');
            if ($article -> create($data)){
                if ($article -> add($data)){
                    $this -> success('添加成功，返回列表', '__URL__/index');
                }else{
                    $this -> error('添加失败，返回列表', '__URL__/index');
                }
            }else{
                $this -> error($this -> getError());
            }
        }else{
            if ($article -> create($data)){
                if ($article -> save()){
                    $this -> success('修改成功，返回列表', '__URL__/index');
                }else{
                    $this -> error('修改失败，返回列表', '__URL__/index');
                }
            }else{
                $this -> error($this -> getError());
            }
        }
                 
    }

    public function read($id = 0){
    
        $article = M('Article');

        $this -> article = $article -> find($id);
        $this -> display();
    }

    public function delete($id = 0){
        if (!isLogin()){
            $this -> error('请登录', '__APP__/Admin/login');
        }

        $article = M('Article');

        if ($article -> delete($id)){
            $this -> success('删除成功', '__URL__/index');
        }else{    
            $this -> error('删除失败', '__URL__/index');
        }
    }
    
}