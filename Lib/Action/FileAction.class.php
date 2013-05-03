<?php
require_once APP_PATH. '/Common/JSON.php';

class FileAction extends Action {
    public function index(){
    //是否所有人都可以上传材料
    }
    
    public function listAll(){
        $file = M('file');
        
        $this -> file = $file -> select();
        $this -> display();
    }
    
    public function upload(){
        $save_path = 'File/';
        $save_url  = '/File/';
        
        //定义允许上传的文件扩展名
        $ext_arr = array(
	        'image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp'),
	        'flash' => array('swf', 'flv'),
	        'media' => array('swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb'),
	        'file' => array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2'),
        );

        $max_size = 1000000;

        $save_path = realpath($save_path) . '/';

        //PHP上传失败
        if (!empty($_FILES['imgFile']['error'])) {
	        switch($_FILES['imgFile']['error']){
		        case '1':
			        $error = '超过php.ini允许的大小。';
			        break;
		        case '2':
			        $error = '超过表单允许的大小。';
			        break;
		        case '3':
			        $error = '图片只有部分被上传。';
			        break;
		        case '4':
			        $error = '请选择图片。';
			        break;
		        case '6':
			        $error = '找不到临时目录。';
			        break;
		        case '7':
			        $error = '写文件到硬盘出错。';
			        break;
		        case '8':
			        $error = '文件上传意外终止。';
			        break;
		        case '999':
		        default:
			        $error = '发生未知错误。';
	        }
            $this -> error($error, TRUE);
        }

        //有上传文件时
        if (empty($_FILES) === false) {
	        $file_name = $_FILES['imgFile']['name'];
	        $tmp_name = $_FILES['imgFile']['tmp_name'];
	        $file_size = $_FILES['imgFile']['size'];
	        
	        if (!$file_name) {
		        $this -> error('请选择文件。', TRUE);
	        }

	        if (@is_dir($save_path) === false) {
		        $this -> error('上传目录不存在。', TRUE);
	        }

	        if (@is_writable($save_path) === false) {
		        $this -> error('上传目录没有写权限。', TRUE);
	        }

	        if (@is_uploaded_file($tmp_name) === false) {
		        $this -> error('上传失败。', TRUE);
	        }

	        if ($file_size > $max_size) {
		        $this -> error('上传文件大小超过限制。', TRUE);
	        }

	        $dir_name = empty($_GET['dir']) ? 'image' : trim($_GET['dir']);
	        if (empty($ext_arr[$dir_name])) {
		        $this -> error('目录名不正确。', TRUE);
	        }
	        
	        $file_ext = strtolower(trim(array_pop(explode(".", $file_name))));

	        if (in_array($file_ext, $ext_arr[$dir_name]) === false) {
		        $this -> error('上传文件扩展名不允许。', TRUE);
	        }
	        
	        if ($dir_name !== '') {
		        $save_path .= $dir_name . '/';
		        $save_url  .= $dir_name . '/';
		        if (!file_exists($save_path)) {
			        mkdir($save_path);
		        }
	        }
	        
	        $file_number = 0;
	        do{
	            $file_number++;
	            $new_file_name =session('username') . '_' . $file_number . '.' . $file_ext;
	            $file_path = $save_path. $new_file_name;
	        }while(file_exists($file_path));
	        
	        if (move_uploaded_file($tmp_name, $file_path) === false) {
		        $this -> error('上传文件失败。', TRUE);
	        }
	        @chmod($file_path, 0644);
	        
	        //附件信息写入数据库
	        $file = M('File');
	        $data = array('f_id' => '',
	                      'date' => date('Y-m-d'),
	                      'uploader' => session('u_id'),
	                      'path' => $save_url,
	                      'name' => $new_file_name,
	                      'type' => $dir_name,
	                      'size' => $file_size);
	        if (!$file -> add($data)){
	            $this -> error('写入数据失败。', TRUE);
	        }
	        
            //返回数据给上传页面           
            $file_url  = __ROOT__. $save_url. $new_file_name;
	        header('Content-type: text/html; charset=UTF-8');
	        $json = new Services_JSON();
	        echo $json->encode(array('error' => 0, 'url' => $file_url));
        }
    }
    
    public function manage(){
        $type = $this -> _get()['dir'];
        $order = strtolower($this -> _get()['order']);
        
        $file = M('file');
        $file_info = $file -> where("type = '$type'") -> order($order) -> select();
        
        $file_list = array();
        foreach($file_info as $i => $info){
            $file_list[$i]['is_dir'] = false;
            $file_list[$i]['has_file'] = false;
            $file_list[$i]['is_photo'] = 'image' == $file_info[$i]['type'];
            $file_list[$i]['datetime'] = $file_info[$i]['date'];
            $file_list[$i]['filename'] = $file_info[$i]['name'];
            $file_list[$i]['filetype'] = $file_info[$i]['type'];
            $file_list[$i]['filesize'] = $file_info[$i]['size'];
        }
        
        $result['moveup_dir_path'] = '/File/';
        $result['current_dir_path'] = '/File/';
        $result['current_url'] = '/File/'. $type . '/';
        $result['total_count'] = count($file_list);
        $result['file_list'] = $file_list;
        
        header('Content-type: application/json; charset=UTF-8');
        $json = new Services_JSON();
        echo $json->encode($result);
    }

}