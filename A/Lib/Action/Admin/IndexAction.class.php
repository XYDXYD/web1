<?php
class IndexAction extends Action {
    public function _initialize(){      
        $this -> privilege = session('privilege');
    }

    public function index(){
        if (!authenticate(1)){
            $this -> redirect('Index/login');
        }else{
            $this -> classes = array('index' => 'active');
            $this -> display();
        }
    }

    public function header(){
        //$this -> display();
    }
    
    public function about(){
        $this -> classes = array('about' => 'active');
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
        if (session('verify') != md5($this -> _post('verify'))){
            $this -> error('验证码错误', '__URL__/Index/login');
        }
        
        $username = $this -> _post()['username'];
        $password = md5('.xiang.'. $this -> _post()['password']. ',ren,');

        $user = M('User');
        $userinfo = $user -> where(array('username' => $username)) -> select()[0];
        
        if (count($userinfo) == 0){
            $this -> error('用户名错误');
        }
        
        if ($userinfo['password'] == $password && $userinfo['status'] != '0'){
            $user -> where(array('username' => $username)) -> setField('last_login', time());
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
