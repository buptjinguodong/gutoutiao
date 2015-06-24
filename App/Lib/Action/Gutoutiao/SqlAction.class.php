<?php

/**
 * 用于创建系统使用的数据库
 */
class SqlAction extends Action {

    public function index()
    {
        $sql_res = M('news');
        p($sql_res);
    }

    public function create()
    {
    	
    }

}