<?php

class ActorModel{

	public function init(){
	}
	/**
	 * 注册，返回JSON字符串结果
	 * @return [type] [description]
	 */
	public function getActors($page=0, $per=10){
		$token = $_SESSION['token'];
		$handle_url = C('API_URL')."Method=GetUserList"."&AccessToken=".$token."&page=".$page."&per=".$per;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $handle_url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$res = curl_exec($ch);
		return $res;
	}
	public function getActorById($friendguid='', $page=0, $per=10){
		$token = $_SESSION['token'];
		$handle_url = C('API_URL')."Method=GetDocument"."&AccessToken=".$token."&friendguid=".$friendguid."&page=".$page."&per=".$per;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $handle_url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$res = curl_exec($ch);
		return $res;
	}

}