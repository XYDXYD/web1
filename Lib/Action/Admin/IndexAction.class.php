<?php
class IndexAction extends Action {
    public function index(){
	    if (!isLogon()){
	        $this -> error('请登录', '__GROUP__/Index/login');
	    }
	    
	    $this -> display();
    }
    
    public function login(){
        if (isLogon()){
            $this -> error('您已登录', '__URL__/index');
        }
        $this -> display();
    }
    
    public function authenticate(){
        $username = $this -> _post()['username'];
        $password = md5('.xiang.'. $this -> _post()['password']. ',ren,');

        $user = M('User');
        $userinfo = $user -> where(array('username' => $username)) -> select()[0];
        
        if (count($userinfo) == 0){
            $this -> error('用户不存在。');
        }
        
        if ($userinfo['password'] == $password){
            session('id', $userinfo['id']);
            session('group', $userinfo['group']);
            session('time', time());
            
            $this -> success('登录成功', '__URL__/index');
        }else{
            $this -> error('登录失败', '__URL__/login');
        }
    }
    
    public function logout(){
        session(null);
        $this -> redirect('/');
    }
}
