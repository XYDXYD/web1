<?php
class AwardAction extends Action {
    public function _initialize(){
        if (!authenticate(1)){
            $this -> error('拒绝操作');
        }
        $this -> privilege = session('privilege');
        $this -> classes = array('award' => 'active');
    }
    
    public function index($order = 'u_id', $type = 0){
        $award = M('Award');
        $user = M('User');
        $file = M('File');
        $award_type = M('AwardType');
        
        import('ORG.Util.Page');
        
        if ($type == 0){
            $this -> allaward = 'active';
        }else{
            $map = array('at_id' => $type);
        }
        
        
        $count = $award -> where($map) -> count();
        $page = new Page($count, 15);
        $this -> page = $page -> show();
        
        $award_temp = $award -> order($order) -> where($map) -> select();
        
        foreach($award_temp as $key => $value){
            $award_temp[$key]['fullname'] = $user -> find($value['u_id'])['fullname'];
            $award_temp[$key]['type'] = $award_type -> find($value['at_id'])['name'];
            $fileinfo = $file -> find($value['attachment']);
            $award_temp[$key]['filename'] = $fileinfo['name'];
            $award_temp[$key]['filepath'] = $fileinfo['savepath']. $fileinfo['savename'];
        }
        
        $award_type_temp = $award_type -> select();
        
        foreach($award_type_temp as $key => $value){
            $award_type_temp[$key]['active'] = $value['at_id'] == $type?'active':'';
        }
        
        $this -> award = $award_temp;
        $this -> award_type = $award_type_temp;
        $this -> type = $type;
        $this -> order = $order;
        $this -> display();
    }
    
    public function read($id = 0){
        
    }
    
    public function pass($id = 0){
        if (M('Award') -> where(array('aw_id' => $id)) -> setField('status', 1)){
            $this -> success('审核通过成功');
        }else{
            $this -> error('审核通过失败');
        }
    }
    
    public function unpass($id = 0){
        if (M('Award') -> where(array('aw_id' => $id)) -> setField('status', 0)){
            $this -> success('撤回通过成功');
        }else{
            $this -> error('撤回通过失败');
        }
    }
    
    public function delete($id = 0){
        if (M('Award') -> delete($id)){
            $this -> success('删除成功');
        }else{
            $this -> error('删除失败');
        }
    }
    
    public function edit($id = 0){
        $award_type_temp = M('AwardType') -> select();
        
        if ($id == 0){
            $this -> add = 'active';
        }
        
        foreach($award_type_temp as $key => $value){
            if ($value['at_id'] == $id){
                $award_type_temp[$key]['active'] = 'active';
                $this -> award_info = $value;
                break;
            }
        }
        
        $this -> award_type = $award_type_temp;
        $this -> display();
    }
    
    public function update(){
        $award = D('AwardType');
        if ($award -> create()){
            if ($this -> _post()['at_id'] == ''){
                if ($award -> add()){
                    $this -> success('添加成功', '__URL__/edit/id/0');
                }else{
                    $this -> error('添加失败');
                }
            }else{
                if ($award -> save()){
                    $this -> success('修改成功', '__URL__/edit/id/0');
                }else{
                    $this -> error('修改失败');
                }
            }
        }else{
            $this -> error($award -> getError());
        }
    }
    
    public function del($id = 0){
        //删除一个奖项，只能由root管理员操作
        if (!authenticate(0)){
            $this -> error('拒绝操作');
        }
        
        if (M('AwardType') -> delete($id)){
            $this -> success('删除成功', '__URL__/edit/id/0');
        }else{
            $this -> error('删除失败');
        }
    }
}
