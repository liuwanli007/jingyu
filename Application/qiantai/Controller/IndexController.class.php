<?php
namespace qiantai\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
    	 $this->display();
    }

     public function login()
    {
        // 判断提交方式
        if (IS_POST) {
            // 实例化Login对象
            $user = D('user');

            if (!$data = $user->create()) {
                // 防止输出中文乱码
                header("Content-type: text/html; charset=utf-8");
                exit($user->getError());
            }

            $where = array();

            $where['username'] = $data['username'];
            $where['password'] = $data['password'];
            $result = $user->where($where)->field('username,password,email,nickname')->find();
            // 验证用户名 对比 密码
            if ($result && $result['password'] == $where['password']) {

                $User = M("user");
                $data['state']='1';
                $result =$user->where($where)->field('state')->save($data);

                // $this->success('登录成功,正跳转至系统首页...', U('dz/index'),0.1);
                $this->redirect('dz/index');
            } else {
                $this->error('登录失败,用户名或密码不正确!');
            }
        } else {
          $this->error('登录失败,用户名或密码不正确!');
        }
    }

    //注册提交
   	public function insert(){

        $User   =   D('User');
        if($User->create()) {
            $result =   $User->add();

            if($result) {
                $this->success('注册成功！',U('index/index'));
            }else{
                $this->error('数据添加失败！');
	          }
        }else{
            $this->error($User->getError());
        }
    }
    //登录验证
   

}