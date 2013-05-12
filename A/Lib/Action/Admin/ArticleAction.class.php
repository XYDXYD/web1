<?php
class ArticleAction extends Action {
    public function _initialize(){
        if (authenticate(0)){
        
        }elseif (authenticate(1)){
            $id = $this -> _get('id');
            if ($id != ''){
                $article = M('Article');
                $u_id = $article -> find($id)['u_id'];
                if ($u_id != session('u_id')){
                    $this -> error('拒绝操作');
                }
            }
        }else{
            $this -> error('拒绝操作');
        }
        $this -> classes = array('article' => 'active');
        $this -> privilege = session('privilege');
    }

    public function index($order = 'last_time desc'){
        $article = M('Article');
        $user = M('User');
        import('ORG.Util.Page');
        if (session('privilege') == 0){
            $count = $article -> count();
            $page = new Page($count, 15);
            $this -> page = $page -> show();
            $temp = $article -> order($order) -> limit($page->firstRow.','.$page->listRows) -> select();
        }else{
            $count = $article -> where(array('u_id' => session('u_id'))) -> count();
            $page = new Page($count, 15);
            $this -> page = $page -> show();
            $temp = $article -> order($order) -> where(array('u_id' => session('u_id'))) -> limit($page->firstRow.','.$page->listRows) -> select();
        }
        
        foreach($temp as $key => $value){
            $temp[$key]['fullname'] = $user -> find($value['u_id'])['fullname'];
        }
        
        $this -> article = $temp;
        $this -> display();
    }

    public function edit($id = 0){
        $this -> article = M('Article') -> find($id);
        
        $checked = explode(',', $this -> article['type']);
        foreach(M('ArticleType') -> select() as $key => $value){
            $type[count($type)+1] = array('at_id' => $value['at_id'], 'name' => $value['name'], 'checked' => in_array($value['at_id'], $checked)?'checked':'');
        }
        foreach(M('AwardType') -> select() as $key => $value){
            $type[count($type)+1] = array('at_id' => $value['at_id'], 'name' => $value['name'], 'checked' => in_array($value['at_id'], $checked)?'checked':'');
        }
        
        $this -> type = $type;
        
        $this -> display();
    }

    public function update(){
        $article = D('Article');
        $data = $this -> _post();
        
        if ($data['a_id'] != '' && $article -> find($data['a_id'])['u_id'] != session('u_id')){
            $this -> error('拒绝操作');
        }
        
        foreach($data['type'] as $key => $value){
            $type .= $data['type'][$key]. ',';
        }
        $type = substr($type, 0, strlen($type) - 1);
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
        $this -> article = M('Article') -> find($id);
        $this -> display();
    }

    public function publish($id = 0){
        if (M('Article') -> where(array('a_id' => $id)) -> setField('status', 1)){
            $this -> success('发布成功', '__URL__/index');
        }else{
            $this -> error('发布失败', '__URL__/index');
        }
    }

    public function unpublish($id = 0){
        if (M('Article') -> where(array('a_id' => $id)) -> setField('status', 0)){
            $this -> success('撤回成功', '__URL__/index');
        }else{
            $this -> error('撤回失败', '__URL__/index');
        }
    }

    public function delete($id = 0){
    if (M('Article') -> delete($id)){
            $this -> success('删除成功', '__URL__/index');
        }else{    
            $this -> error('删除失败', '__URL__/index');
        }
    }
    
}
