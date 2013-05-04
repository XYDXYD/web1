<?php
define('EXPIRE', 300);
function isLogon(){
    if (session('group') == 'admin'){
        if (time() - session('time') < EXPIRE){
            session('time', time());
            return true;
        }else{
            session(null);
            return false;
        }
    }else{
        return false;
    }
}

