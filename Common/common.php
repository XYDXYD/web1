<?php
define('EXPIRE', 300);
function authenticate($privilege){
    $user_id = session('u_id');
    if (isset($user_id)){
        if (time() - session('time') < EXPIRE){
            session('time', time());
            return !($privilege < session('privilege'));
        }else{
            session(null);
            return false;
        }
    }else{
        return false;
    }
}

function upload($type, $savePath){
    import('ORG.Net.UploadFile');
    $upload = new UploadFile();
    
    $ext = array(
	        'image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp'),
	        'flash' => array('swf', 'flv'),
	        'media' => array('swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb'),
	        'file' => array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2'),
    );
    
    $upload -> maxSize = 10000000;
    $upload -> allowExts = $ext[$type];
    $upload -> savePath = $savePath;
    
    if ($upload -> upload()){
        return array('success' => true, 'info' => $upload -> getUploadfileInfo());
    }else{
        return array('success' => false, 'info' => $upload -> getErrorMsg());
    }
}

