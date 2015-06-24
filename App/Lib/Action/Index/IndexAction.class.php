<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {

    public function _before_index(){
        cookie('rootPath', __ROOT__);
        cookie('urlPath', __URL__);
        cookie('imgPath', C('IMG_URL'));
    }
    /**
     * 首页内容
     */
    public function index()
    {
        $is_login = $this->checkLogin();
        if($is_login){
            $uname = $_SESSION['uname'];
            $data = array(
                'uname' => $uname,
                'login' => true,
                );
            $this->assign('data', $data);
            $report_model = D('Report');
            // 获取page=0的通告，每页设置为10个
            $reports = $report_model->getReports(0, 10);
            $reports = json_decode($reports);
            // p($reports);
            $this->assign('reports', $reports);

            // 获取通告信息
            $this->assign("debug", $_SESSION['token']);

            $this->assign('tag', 'main');
            $this->display('main');
        }else{
            $this->login();
        }
    }

    public function signup(){
        $this->display();
    }
    public function logout(){
        $_SESSION['token'] = null;
        cookie('token', null); // 删除cookie;
        $this->login();
    }
    /**
     * 用户登录
     * @return [type] [description]
     */
    public function login(){
        if(IS_GET){
            session_start();
            if((isset( $_COOKIE['token'] )) and $_SESSION['token'] == $_COOKIE['token']){
                redirect('index', 2, '你己登录...');
            }else{
                $this->display('login');
            }
        }else
        {
            $uname = I('post.uname', '', 'htmlspecialchars');
            $upassword = I('post.upassword', '', 'htmlspecialchars');
            $data = array('uname' => $uname, 'upassword' => $upassword);

            $login_model = D('Login');
            $login_model->init($data);

            $res = array();
            // 检测用户输入
            if($login_model->check()){
                $jsonstr = $login_model->login();
                $json = json_decode($jsonstr);
                $res = $json;
                if(isset($json->Result) && $json->Result==1){
                    // 处理用户登录状态。
                    $token = $json->AccessToken;
                    session_start();
                    $_SESSION['token'] = $token;
                    $_SESSION['uname'] = $uname;
                    cookie('token', $token, 3600);
                    redirect('index', 2, '登录成功...');
                }else{
                    // 用户名密码错误
                    redirect('login', 2, '用户名或密码错误...');
                }
            }
            else{
                $res_error = array('Result'=>'0','Message'=>'用户名密码输入有误');
                redirect('login', 2, '用户名密码输入有误...');
            }
        }
    }
    /**
     * 娱乐新闻模块
     * @return [type] [description]
     */
    public function entertainment(){
        $is_login = $this->checkLogin();
        if($is_login){
            $uname = $_SESSION['uname'];
            $data = array(
                'uname' => $uname,
                'login' => true,
                );
            $news_model = D('News');
            $news = $news_model->getNews(0, 10);
            $news = json_decode($news);
            $this->assign('news', $news);
            $this->assign('data', $data);
            $this->assign('tag', 'entertainment');
            $this->display();
        }else{
            $this->login();
        }
    }

    public function crew(){
        $is_login = $this->checkLogin();
        if($is_login){
            $uname = $_SESSION['uname'];
            $data = array(
                'uname' => $uname,
                'login' => true,
                );
            $this->assign('data', $data);
        }
        $this->assign('tag', 'crew');
        $this->display();
    }

    public function institution(){
        $is_login = $this->checkLogin();
        if($is_login){
            $uname = $_SESSION['uname'];
            $data = array(
                'uname' => $uname,
                'login' => true,
                );
            $this->assign('data', $data);
        }
        $this->assign('tag', 'institution');
        $this->display();
    }

    public function actor(){
        $is_login = $this->checkLogin();
        if($is_login){
            $uname = $_SESSION['uname'];
            $data = array(
                'uname' => $uname,
                'login' => true,
                );
            $actor_model = D('Actor');
            $actors = $actor_model->getActors(0, 10);
            $actors = json_decode($actors);
            $this->assign('actors', $actors);
            $this->assign('data', $data);
        }
        $this->assign('tag', 'actor');
        $this->display();
    }

    public function actorInfo(){
        $is_login = $this->checkLogin();
        if($is_login){
            $uname = $_SESSION['uname'];
            $data = array(
                'uname' => $uname,
                'login' => true,
                );
            $userguid = I("get.userguid");
            $actor_model = D('Actor');
            $actor_info = $actor_model->getActorById($userguid);
            $actor_info = json_decode($actor_info);
            $this->assign('actor_info', $actor_info);
            $this->assign('userguid', $userguid);
            $this->assign('data', $data);
        }
        $this->assign('tag', 'actorInfo');
        $this->display();
    }

    public function about(){
        $is_login = $this->checkLogin();
        if($is_login){
            $uname = $_SESSION['uname'];
            $data = array(
                'uname' => $uname,
                'login' => true,
                );
            $this->assign('data', $data);
        }
        $this->assign('tag', 'about');
        $this->display();
    }

    public function selfInfo(){
        $is_login = $this->checkLogin();
        if($is_login){
            if(IS_GET){
                $uname = $_SESSION['uname'];
                $data = array(
                    'uname' => $uname,
                    'login' => true,
                    );
                $this->assign('data', $data);
                $this->assign('tag', 'selfInfo');
                $this->display();
            }else{
                // p(I('post.')); 处理用户修改信息
                $this->redirect('Index/Index/selfInfo');
            }
        }else{
            redirect('Index/Index/login', 2, '你还没有登录...');
        }
    }

    public function api(){
        // p(I('get.'));
        $page = intval(I('get.page', '', 'htmlspecialchars'));
        $per = intval(I('get.per', '', 'htmlspecialchars'));
        $method = I('get.method', '', 'htmlspecialchars');
        $data = array("page"=>$page, "per"=>$per, "method"=>$method);
        $res = array("state"=>"error", "message"=>"no method match");
        switch($method){
            case 'getReports':
                $report_model = D('Report');
                $reports = $report_model->getReports($data['page'], $data['per']);
                // $reports = json_decode($reports);
                echo $reports;
                break;
            default:

        }
    }

    // 内部功能函数
    private function checkLogin(){
        session_start();
        if(isset($_COOKIE['token']) and isset($_SESSION['token']) and $_COOKIE['token']==$_SESSION['token']){
            return true;
        }else{
            return false;
        }
    }
}