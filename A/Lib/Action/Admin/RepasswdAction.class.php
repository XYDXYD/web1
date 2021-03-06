<?php
class RepasswdAction extends Action {
    public function _initialize(){
        if (!authenticate(2)){
            $this -> error('拒绝访问', __ROOT__. '/');
        }
        $this -> classes = array('repasswd' => 'active');
        $this -> privilege = session('privilege');
    }
    
    public function index(){
        $this -> display();
    }
    
    public function rePasswd(){
        $post = $this -> _post();
        $u_id = session('u_id');
        $password = md5('.xiang.'. $post['password']. ',ren,');
        
        $user = M('User');
        $userinfo = $user -> find($u_id);
        
        if ($userinfo['password'] == $password){
            if ($post['passwordA'] == $post['passwordB']){
                if ($user -> where(array('u_id' => $u_id)) -> setField('password', md5('.xiang.'. $post['passwordA']. ',ren,'))){
                    $this -> success('密码修改成功，请重新登录', '__GROUP__/Index/logout');
                }else{
                    $this -> error('密码修改失败');
                }
            }else{
                $this -> error('密码不一致');
            }
        }else{
            $this -> error('原密码错误');
        }
    }
}
