<?php
class UserModel extends Model {
    protected $_validate = array(
        array('username', 'require', '用户名不能为空', 3),
        array('username', '', '用户名已经存在', 0, 'unique', 3),
        array('address', 'require', '联系地址不能为空', 3),
        array('postcode', 'require', '邮政编码不能为空', 3),
        array('postcode', 'number', '邮政编码必须是数字', 3)
    );
}
