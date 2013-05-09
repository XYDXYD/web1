<?php
class UserAction extends Action {
    public function _initialize(){
        if (!authenticate(0)){
            $this -> error('拒绝操作');
        }
        $this -> classes = array('user' => 'active');
        $this -> privilege = session('privilege');
    }

    public function index(){
        $user = M('User');
        $this -> user = $user -> where(array('privilege' => array('neq', 0))) -> select();
        
        $this -> display();
    }
    
    public function edit($id = 0){
        $user = M('User');
        if (!($this -> user = $user -> find($id))){
            $this -> user = array('privilege' => 2, 'status' => 1);
        }
        $this -> selected = array($this -> user['privilege'] =='1'? 'admin':'user' => 'selected', $this -> user['status'] =='1'? 'allow':'disallow' => 'selected');

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
        $user = M('User');
        
        if (session('privilege') == '0' && $user -> delete($id)){
            $this -> success('删除成功', '__URL__/index');
        }else{
            $this -> error('删除失败', '__URL__/index');
        }
    }
}
