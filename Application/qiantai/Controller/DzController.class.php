<?php
namespace qiantai\Controller;
use Think\Controller;
class DzController extends Controller {

    
    public function index(){
    	// $works = M('works');
    
    	// $data = M('user  as  a')->join('works  as  b  on b.userid = a.userid ')->select();
    	// $this->assign('works',$data);

    	$User = M('User');
		$list = $User->where('state=1')->select();
		$this->assign('list',$list);
		//获取段子
		$works = M('works');
    	$text = M('user  as  a')->join('works  as  b  on b.userid = a.userid and type=1 and  good>=100')->select();
    	$this->assign('text',$text);
    	//获取视频
    	$vids = M('works');
    	$vid = M('user  as  a')->join('works  as  b  on b.userid = a.userid and type=3 and good>=100')->select();
    	$this->assign('vid',$vid);
		//获取图片
    	$imgs = M('works');
    	$img = M('user  as  a')->join('works  as  b  on b.userid = a.userid and type=2 and good>=100')->select();
    	$this->assign('img',$img);

    	$this->display();
    }
    public function back(){
        $user = M("user");
        $data['state']='0';
        

        $result =$user->where('state=1')->field('state')->save($data);
        if($result ) {
                 $this->redirect('index/index');
            }else{
                  $this->redirect('dz/index');
              }
    }
     public function index2(){
     	$User = M('User');
		$list = $User->where('state=1')->select();
		$this->assign('list',$list);

    	$works = M('works');
    	// $data = $works->select();
    	// $this->assign('works',$data);
    	$data = M('user  as  a')->join('works  as  b  on b.userid = a.userid and type=1')->select();
    	$this->assign('works',$data);
    	$this->display();
    }

    public function index3(){
    	$User = M('User');
		$list = $User->where('state=1')->select();
		$this->assign('list',$list);

    	$works = M('works');
    	// $data = $works->select();
    	// $this->assign('works',$data);
    	$data = M('user  as  a')->join('works  as  b  on b.userid = a.userid and type=3')->select();
    	$this->assign('works',$data);
    	$this->display();
    }
    public function index4(){
    	$User = M('User');
		$list = $User->where('state=1')->select();
		$this->assign('list',$list);
		

    	$works = M('works');
    	// $data = $works->select();
    	// $this->assign('works',$data);
    	$data = M('user  as  a')->join('works  as  b  on b.userid = a.userid and type=2')->select();
    	$this->assign('works',$data);
    	$this->display();
    }
    public function index13(){
    	$User = M('User');
		$list = $User->where('state=1')->select();
		$this->assign('list',$list);
		//获取段子
		$works = M('works');
    	$text = M('user  as  a')->join('works  as  b  on b.userid = a.userid and type=1 and a.state=1')->select();
    	$this->assign('text',$text);
    	//获取视频
    	$vids = M('works');
    	$vid = M('user  as  a')->join('works  as  b  on b.userid = a.userid and type=3 and a.state=1')->select();
    	$this->assign('vid',$vid);
		//获取图片
    	$imgs = M('works');
    	$img = M('user  as  a')->join('works  as  b  on b.userid = a.userid and type=2 and a.state=1')->select();
    	$this->assign('img',$img);
		
    	$this->display();
    }
    public function addgood(){
        $id = $_POST['id'];
        $obj = M("works");
        if(1){
            $obj->where("id = '$id'")->setInc('good',1);
            $this->ajaxReturn($id);
             
            exit();
        }else{
            $this->ajaxReturn($id);
            exit();
        }
	}
	public function addbad(){
        $id = $_POST['id'];
        $obj = M("works");
        if(1){
           	$obj->where("id = '$id'")->setInc('bad',1);
            $this->ajaxReturn($id);
             
            exit();
        }else{
           
            $this->ajaxReturn($id);
            exit();
        }
        
	}
	public function index6(){
		$User = M('User');
		$list = $User->where('state=1')->select();
		$this->assign('list',$list);

		$works = M('trends');
    	$text = M('user  as  a')->join('trends  as  b  on b.userid = a.userid')->select();
    	$this->assign('text',$text);

		$this->display();
	}
	public function index7(){
		$User = M('User');
		$list = $User->where('state=1')->select();
		$this->assign('list',$list);

		
		$works = M('trends');
    	$text = M('user  as  a')->join('trends  as  b  on b.userid = a.userid')->join('focuslist as c on c.BeFollowed_ID = b.id')->select();
    	$this->assign('text',$text);
		
		$this->display();
	}
	public function index8(){
		$User = M('User');
		$list = $User->where('state=1')->select();
		$this->assign('list',$list);
		
		$works = M('works');
    	$text = M('user  as  a')->join('trends  as  b  on b.userid = a.userid and a.state=1')->select();
    	$this->assign('text',$text);

		$this->display();
	}
    public function PersonalData(){

        $user = M('user');
        $data = $user->where('state=1')->select();
        $this->assign('list',$data);

        $this->display();
    }
    public function updata(){
         $user = D('user');
         $data = $user->create();
         $result=$user->where('state=1')->save($data);
         if($result) {
                $this->success('退出中！',U('dz/index'));
            }else{
                $this->error('数据添加失败！');
              }
    }
    public function others(){
        // $this->display();
        //echo $_GET['uid'];
        $User = M('User');
        $id = $_GET['uid'];
        $list = $User->where("userid = '$id'")->select();
        $this->assign('list',$list);
        //获取段子
        $texts = M('works');
        $text = $texts->where("userid = '$id' and type=1")->select();
        $this->assign('text',$text);
        //获取视频
        $vids = M('works');
        $vid = $vids->where("userid = '$id' and type=3")->select();
        $this->assign('vid',$vid);
        //获取图片
        $imgs = M('works');
        $img = $imgs->where("userid = '$id' and type=2")->select();
        $this->assign('img',$img);

        $this->display();
        
    }
    public function guanzhu(){
        $bfid = $_POST['id'];
        $user=M("user");
        $fid=$user->where("state=1")->getField('userid');
        $obj = M("focuslist");
        $data['Follower_ID'] = "$fid";
        $data['BeFollowed_ID'] = "$bfid";
        $obj->add($data);
        exit();
    }
    public function quguan(){
        $bfid = $_POST['id'];
        $user=M("user");
        $fl=$user->where("state=1")->select();
        $fid=$fl[userid];
        $obj = M("focuslist");
        $obj->where("Follower_ID = '$fid' and BeFollowed_ID = '$bfid'")->delete();
        // $data['Folllower_ID'] = '$fid';
        // $data['BeFollowed_ID'] = '$bfid';
        // $obj->add($data);
        exit();
        }
}
?>

$data['name'] = 'ThinkPHP';
$data['email'] = 'ThinkPHP@gmail.com';
$User->add($data);