<?php

class LoginModel{
	private $uname;
	private $upassword;

	/**
	 * 模型初始化
	 * @param  array $data
	 * @return null       [description]
	 */
	public function init($data){
		$this->uname = (null !== ($data['uname'])) ? $data['uname'] : '';
		$this->upassword = (null !==($data['upassword'])) ? $data['upassword'] : '';
	}
	/**
	 * 检查用户输入
	 * @return [type] [description]
	 */
	public function check(){
		if(!$this->uname or !$this->upassword){
			return false;
		}
		return true;
	}
	/**
	 * 注册，返回JSON字符串结果
	 * @return [type] [description]
	 */
	public function login(){
		$handle_url = C('API_URL')."Method=Login&loginname=".$this->uname."&password="."$this->upassword"."&AccessToken=";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $handle_url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$res = curl_exec($ch);
		return $res;
	}

}