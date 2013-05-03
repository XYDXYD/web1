<?php
require_once APP_PATH. '/Common/function.php';

class AdminAction extends Action {
    public function index(){
        if (isLogin()){
            $this -> display();
        }else{
            $this -> error('请登录', '__URL__/login');
        }
    }

    public function login(){
        if (isLogin()){
            $this -> success('您已登录。', '__URL__/index');
        }else{
            $this -> display();
        }
    }

    public function check(){
        $username = $this -> _post()['username'];
        $password = md5($this -> _post()['password']);

        $user = M('User');
        $userinfo = $user -> where("username = '$username'") -> select()[0];
        
        if (count($userinfo) == 0){
            $this -> error('用户不存在。');
        }
        
        if ($userinfo['passwd'] == $password){
        
            session('u_id', $userinfo['u_id']);
            session('username', $userinfo['username']);
            session('last_time', time());
            
            $this -> success('登录成功。', '__URL__/index');
        }else{
            $this -> error('登录失败。');
        }
    }
    
    public function logout(){
        session(null);
        $this -> redirect(__ROOT__.'/');
    }
    
    public function adduser(){
    
    }
    
    public function deluser(){
    
    }
}
