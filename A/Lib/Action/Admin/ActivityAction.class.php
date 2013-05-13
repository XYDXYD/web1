<?php
class ActivityAction extends Action {
    public function _initialize(){
        if (authenticate(0)){
        
        }elseif (authenticate(1)){
            $id = $this -> _get('id');
            if ($id != ''){
                $article = M('Activity');
                $u_id = $article -> find($id)['u_id'];
                if ($u_id != session('u_id')){
                    $this -> error('拒绝操作');
                }
            }
        }else{
            $this -> error('拒绝操作');
        }
        $this -> classes = array('activity' => 'active');
        $this -> privilege = session('privilege');
    }

    public function index($order = 'pub_time desc'){
        $data = M('Activity');
        import('ORG.Util.Page');
        if (session('privilege') == 0){
            $count = $data -> count();
            $page = new Page($count, 15);
            $this -> page = $page -> show();
            $this -> activity = $data -> order($order) -> limit($page->firstRow.','.$page->listRows) -> select();
        }else{
            $count = $data -> where(array('u_id' => session('u_id'))) -> count();
            $page = new Page($count, 15);
            $this -> page = $page -> show();
            $this -> activity = $data -> order($order) -> where(array('u_id' => session('u_id'))) -> limit($page->firstRow.','.$page->listRows) -> select();
        }
        $this -> display();
    }
    
    public function read($id = 0){
        $activities = M('Activities') -> order('u_id') -> where(array('ac_id' => $id)) -> select();
        $user = M('User');
        foreach($activities as $key => $value){
            $activities[$key]['fullname'] = $user -> where(array('u_id' => $activities[$key]['u_id'])) -> getField('fullname');
        }
        
        $this -> activities = $activities;
        $this -> display();
    }
    
    public function publish($id = 0){
        $data = array('status' => 1, 'pub_time' => time());
        if (M('Activity') -> data($data) -> where(array('ac_id' => $id)) -> save()){
            $this -> success('发布成功', '__URL__/index');
        }else{
            $this -> error('发布失败', '__URL__/index');
        }
    }

    public function unpublish($id = 0){
        $data = array('status' => 0, 'pub_time' => NULL);
        if (M('Activity') -> data($data) -> where(array('ac_id' => $id)) -> save()){
            $this -> success('撤回成功', '__URL__/index');
        }else{
            $this -> error('撤回失败', '__URL__/index');
        }
    }
    
    public function edit($id = 0){
        $this -> activity = M('Activity') -> find($id);

        $this -> display();
    }
    
    public function delete($id = 0){
        if (M('Activity') -> delete($id)){
            $this -> success('删除成功');
        }else{
            $this -> error('删除失败');
        }
    }
    
    public function update(){
        $activity = D('Activity');
        $data = $this -> _post();
        
        if ($data['ac_id'] != '' && session('privilege') != 0 && $activity -> find($data['ac_id'])['u_id'] != session('u_id')){
            $this -> error('拒绝操作');
        }
        
        if (!($data['deadline'] = strtotime($data['deadline']))){
            $this -> error('截至日期格式错误');
        }
        
        if ($activity -> create($data)){
            if ($data['ac_id'] == ''){
                if ($activity -> add()){
                    $this -> success('添加成功', '__URL__/index');
                }else{
                    $this -> error('添加失败', '__URL__/index');
                }
            }else{
                if ($activity -> save()){
                    $this -> success('修改成功', '__URL__/index');
                }else{
                    $this -> error('修改失败', '__URL__/index');
                }
            }
        }else{
            $this -> error($activity -> getError());
        }
    }
}
