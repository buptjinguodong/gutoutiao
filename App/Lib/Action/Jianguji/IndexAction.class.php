<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {

    public function index()
    {
        $this->display('index');
    }

    public function jiangu(){
    	$this->assign('tag', 'jiangu');
    	$this->display('jiangu');
    }
}