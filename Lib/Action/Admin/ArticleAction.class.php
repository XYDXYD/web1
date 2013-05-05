<?php
class ArticleAction extends Action {
    public function _initialize(){
        if (!authenticate(1)){
            $this -> error('拒绝操作');
        }
    }

    public function index(){
        $article = M('Article');
        $this -> article = $article -> order('last_time desc') -> select();
        
        $this -> display();
    }

    public function edit($id = 0){
        $article = M('Article');
        $this -> article = $article -> find($id);
        
        foreach(explode(',', $this -> article['type']) as $value){
            $checked[$value] = 'checked';
        }
        
        $this -> checked = $checked;
        
        $this -> display();
    }

    public function update(){
        $article = D('Article');
        $data = $this -> _post();
        
        foreach($data['type'] as $key => $value){
            $type .= $data['type'][$key]. ',';
        }
        $type = substr($type, 0, strlen($type) - 1);
        $data['author'] = session('u_id');//可能会出现的情况：修改别人的文章后变成了自己，前提是大家都是管理员
        $data['type'] = $type;

        if ($article -> create($data)){
            if ($data['a_id'] == ''){
                if ($article -> add()){
                    $this -> success('添加成功，返回列表', '__URL__/index');
                }else{
                    $this -> error('添加失败，返回列表', '__URL__/index');
                }
            }else{
                if ($article -> save()){
                    $this -> success('修改成功，返回列表', '__URL__/index');
                }else{
                    $this -> error('修改失败，返回列表', '__URL__/index');
                }
            }
        }else{
            $this -> error($article -> getError());
        }          
    }

    public function read($id = 0){
        $article = M('Article');

        $this -> article = $article -> find($id);
        $this -> display();
    }

    public function delete($id = 0){
        $article = M('Article');

        if ($article -> delete($id)){
            $this -> success('删除成功', '__URL__/index');
        }else{    
            $this -> error('删除失败', '__URL__/index');
        }
    }
    
}
