<?php
class ActivityModel extends Model {
    protected $_validate = array(
        array('name', 'require', '名称不能为空', 1),
        array('address', 'require', '活动地点不能为空', 1),
        array('start_time', 'require', '开始时间不能为空', 1),
        array('end_time', 'require', '结束时间不能为空', 1),
        array('deadline', 'require','报名截至时间不能为空' , 1),
        array('host', 'require', '主办方不能为空', 1),
    );
    
    protected $_auto = array(
        array('u_id', 'getUserId', 1, 'function')
    );
}
