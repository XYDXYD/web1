<?php
function isLogin(){
    $userid = session('u_id');
    if (isset($userid)){
        $last_time = session('last_time');
        if (time() - $last_time > EXPIRE){
            session(null);
            return false;
        }else{
            session('last_time', time());
            return true;
        }
    }else{
        return false;
    }    
}

