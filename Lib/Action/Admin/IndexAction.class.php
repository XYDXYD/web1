<?php
class IndexAction extends Action {
    public function index(){
        if (!authenticate(1)){
            $this -> redirect('Index/login');
        }
        $this -> u_id = session('u_id');
        
	    $this -> display();
    }
    
    public function overview(){
        $this -> display();
    }
    
    public function header(){
        $this -> display();
    }
    
    public function navigation(){
        $this -> display();
    }
    
    public function login(){
        if (authenticate(1)){
            $this -> redirect('Index/index');
        }else{
            $this -> display();
        }
    }
    
    public function authenticate(){
        $username = $this -> _post()['username'];
        $password = md5('.xiang.'. $this -> _post()['password']. ',ren,');

        $user = M('User');
        $userinfo = $user -> where(array('username' => $username)) -> select()[0];
        
        if (count($userinfo) == 0){
            $this -> error('用户名错误');
        }
        
        if ($userinfo['password'] == $password){
            session('u_id', $userinfo['u_id']);
            session('privilege', $userinfo['privilege']);
            session('time', time());
            
            $this -> redirect('Index/index');
        }else{
            $this -> error('密码错误', '__URL__/login');
        }
    }
    
    public function logout(){
        session(null);
        $this -> redirect('Index/login');
    }
}
