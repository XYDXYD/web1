<?php
class UserAction extends Action {
    public function _initialize(){
        if (!authenticate(1)){
            $this -> error('拒绝操作');
        }
        $this -> classes = array('user' => 'active');
    }

    public function index(){
        $data = M('user');
        import('ORG.Util.Page');
        $count = $data -> where(array('privilege' => array('gt', session('privilege')))) -> count();
        $page = new Page($count, 15);
        $this -> page = $page -> show();
        
        $user = $data -> order('u_id') -> where(array('privilege' => array('gt', session('privilege')))) -> limit($page->firstRow.','.$page->listRows) -> select();
        foreach($user as $key => $value){
            $user[$key]['office_number'] = M('Users') -> find($value['us_id'])['office_number'];
        }
        
        $this -> user = $user;
        $this -> display();
    }
    
    public function info($id = 0){
        if ($id == 0){
            $users = M('Users') -> select();
        }else{
            $users = M('Users') -> where(array('u_id' => $id)) -> select();
        }
        
        foreach($users as $key => $value){
            $users[$key]['unit'] = M('User') -> find($value['u_id'])['fullname'];
        }
        
        $this -> users = $users;
        $this -> display();
    }
    
    public function edit($id = 0){
        if (!($this -> user = M('User') -> find($id))){
            $this -> user = array('privilege' => session('privilege')+1, 'status' => 1);
        }
        $this -> selected = array($this -> user['is_director'] =='1'? 'is_director':'not_director' => 'selected', $this -> user['status'] =='1'? 'allow':'disallow' => 'selected');
        $this -> display();
    }
    
    public function update(){
        $data = $this -> _post();
        if ($data['passwordA'] == $data['passwordB']){
            $password = $data['passwordA'];
        }else{
            $this -> error('密码不一致');
        }
        $user = D('User');

        if ($data['u_id'] == ''){
            if ($password != ''){
                $data['password'] = md5('.xiang.'. $password. ',ren,');
            }else{
                $this -> error('密码不能为空');
            }
            
            if ($user -> create($data)){
                if ($user -> add()){
                    $this -> success('添加成功', '__URL__/index');
                }else{
                    $this -> success('添加失败', '__URL__/index');
                }
            }else{
                $this -> error($user -> getError());
            }
        }else{
            if ($password != ''){
                $data['password'] = md5('.xiang.'. $password. ',ren,');
            }

            if ($user -> create($data)){
                if ($user -> save()){
                    $this -> success('修改成功', '__URL__/index');
                }else{
                    $this -> success('修改失败', '__URL__/index');
                }
            }else{
                $this -> error($user -> getError());
            }
        }
    }
    
    public function delete($id = 0){
        if (session('privilege') == '0' && M('User') -> delete($id)){
            $this -> success('删除成功', '__URL__/index');
        }else{
            $this -> error('删除失败', '__URL__/index');
        }
    }
}
