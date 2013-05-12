<?php
class AwardAction extends Action {
    public function _initialize(){
        $this -> classes = array('award' => 'active');
    }
    
    public function index(){
        $this -> display();
    }
}
