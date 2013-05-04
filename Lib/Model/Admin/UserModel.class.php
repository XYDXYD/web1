<?php
class UserModel extends Model {
    protected $_validate = array(
        array('username', 'require', '用户名不能为空', 1),
        array('username', '', '用户名已经存在', 0, 'unique', 1)
    );
}
