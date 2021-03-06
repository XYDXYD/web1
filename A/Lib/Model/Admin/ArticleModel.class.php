<?php
class ArticleModel extends Model {
    protected $_validate = array(
        array('title', 'require', '标题不能为空', 1),
        array('content', 'require', '内容不能为空', 1)
    );
    
    protected $_auto = array(
        array('create_time', 'time', 1, 'function'),
        array('last_time', 'time', 3, 'function'),
        array('u_id', 'getUserId', 1, 'function')
    );
}
