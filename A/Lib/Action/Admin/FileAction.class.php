<?php
class FileAction extends Action {
    public function _initialize(){
        if (!authenticate(1)){
            $this -> error('拒绝操作');
        }
        $this -> classes = array('file' => 'active');
        $this -> privilege = session('privilege');
    }

    public function index($order = 'date desc'){
        $file = M('File');
        $user = M('User');
        import('ORG.Util.Page');
        $count = $file -> count();
        $page = new Page($count, 15);
        $this -> page = $page -> show();
        $temp = $file -> order($order) -> limit($page->firstRow.','.$page->listRows) -> select();
        foreach($temp as $key => $value){
            $temp[$key]['fullname'] = $user -> find($value['u_id'])['fullname'];
        }
        
        $this -> file = $temp;
        $this -> display();
    }
    
    public function upload(){
        $type = $this -> _get()['dir'];
        $save_path = 'Public/'. $type. '/';
        $result = upload($type, $save_path);
        
        if ($result['success']){
            $return = array('error' => 0, 'url' => __ROOT__. '/'. $save_path. $result['info'][0]['savename']);
            
            $data['date'] = date('Y-m-d');
            $data['savepath'] = $result['info'][0]['savepath'];
            $data['savename'] = $result['info'][0]['savename'];
            $data['name'] = $result['info'][0]['name'];
            $data['type'] = $type;
            $data['size'] = $result['info'][0]['size'];
            
            $file =  M('File');
            $file -> data($data) -> add();
            
        }else{
            $return = array('error' => 1, 'message' => $result['info']);
        }
	    
	    $this -> ajaxReturn($return, 'JSON');
    }
    
    public function manage(){
        $type = $this -> _get()['dir'];
        $order = strtolower($this -> _get()['order']);

        $file = M('File');
        $file_info = $file -> order($order) -> where(array('type' => $type)) -> select();

        foreach($file_info as $i => $info){
            $file_list[$i]['is_photo'] = 'image' == $file_info[$i]['type'];
            $file_list[$i]['datetime'] = $file_info[$i]['date'];
            $file_list[$i]['filename'] = $file_info[$i]['savename'];
            $file_list[$i]['filetype'] = $file_info[$i]['type'];
            $file_list[$i]['filesize'] = $file_info[$i]['size'];
        }
        
        $result['current_url'] = __ROOT__. '/Public/'. $type . '/';
        $result['total_count'] = count($file_list);
        $result['file_list'] = $file_list;

        $this -> ajaxReturn($result, 'JSON');
    }
    
    public function delete($id = 0){
        $file = M('File');
        $file_info = $file -> find($id);
        
        if (isset($file_info)){
            $file_path = APP_PATH. $file_info['savepath']. $file_info['savename'];
            if (file_exists($file_path)){
                if (@unlink($file_path)){
                    $file -> delete($id);
                    $this -> success('删除成功', '__URL__/index');
                }else{
                    $this -> error('删除失败', '__URL__/index');
                }
            }else{
                $this -> error('路径错误', '__URL__/index');
            }
        }else{
            $this -> error('无此文件', '__URL__/index');
        }
    }

}
