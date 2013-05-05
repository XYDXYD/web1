<?php
class UserAction extends Action {
    public function _initialize(){
        if (!authenticate(0)){
            $this -> error('拒绝操作');
        }
    }

    public function index(){
        $user = M('User');
        $this -> user = $user -> select();
        
        $this -> display();
    }
    
    public function edit($id = 0){
        $user = M('User');
        $this -> user = $user -> find($id);
        $this -> selected = array($this -> user['group'] => 'selected');
        
        $this -> display();
    }
    
    public function update(){
        $data = $this -> _post();
        $user = D('User');

        if ($data['u_id'] == ''){
            $data['password'] = md5('.xiang.'. $data['password']. ',ren,');
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
            if ($data['password'] !== ''){
                $data['password'] = md5('.xiang.'. $data['password']. ',ren,');
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
        
        if ($user -> delete($id)){
            $this -> success('删除成功', '__URL__/index');
        }else{
            $this -> error('删除失败', '__URL__/index');
        }
    }
}
