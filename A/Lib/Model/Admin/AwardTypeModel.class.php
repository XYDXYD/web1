<?php
class AwardTypeModel extends Model {
    protected $_validate = array(
        array('name', 'require', '名称不能为空', 3)
    );
}
