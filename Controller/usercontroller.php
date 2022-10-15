<?php

include("../Model/CommonModel.php");

class usercontroller extends CommonModel
{
	public function __construct()
	{
		parent::__construct();
		$this->url="http://localhost/php/centralized_forum/";
	}
	function home()
	{
		session_start();
		$tbl="tbl_post";
		$data=$this->select($tbl);
		if(isset($_POST['comment']))
		{
			if(isset($_SESSION['user']))
			{
				$cmt=$_POST['cmt'];
				$uid=$_SESSION['user']['user_id'];
				$postid=$_POST['post_id'];
				$tbl="tbl_comment";
				$dd=array('comment_description'=>$cmt,'comment_userid'=>$uid,'post_id'=>$postid);
				$this->insert_data($dd,$tbl);

			}
			else
			{
				
				header("location:".$this->url);
			}
			
			
		}
		include('../view/home.php');
	}
	
	function register()
	{
		if(isset($_POST['register']))
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$tbl="tbl_user";
			$data=array('user_name'=>$name,'user_email'=>$email,'user_password'=>$password,'user_role'=>'1');
			$this->insert_data($data,$tbl);


		}
		include('../view/register.php');
	}
	function addpost()
	{
		if(isset($_POST['addpost']))
		{

			
			if(isset($_FILES['image']))

			{
				$dir="../Upload/";
				$file=$dir.basename($_FILES['image']['name']);
				move_uploaded_file($_FILES['image']['tmp_name'],$file);
				$image=basename($_FILES['image']['name']);
			}
			$title=$_POST['title'];
			$description=$_POST['description'];
			
			$data=array('post_title'=>$title,'post_description'=>$description,"post_image"=>$image);
			$tbl="tbl_post";
			$this->insert_data($data,$tbl);


		}
		include('../view/addpost.php');
	}
	
	function viewpost()
	{
		
		$tbl="tbl_post";
		$data=$this->select($tbl);
		include('../view/viewpost.php');
	}

	

	function login()
	{
		if(isset($_POST['login']))
		{
			
			$email=$_POST['email'];
			$password=$_POST['password'];
			$data=array('user_email'=>$email,'user_password'=>$password);
			$tbl="tbl_user";
			$result=$this->select_where($data,$tbl);
			if($result)
			{
				session_start();
				if($result['user_role']==1)
				{
					$_SESSION['user']=$result;
				}
				else{
					$_SESSION['admin']=$result;
				}
				header("location:".$this->url);
			}




		}
		include('../view/login.php');
	}
	

	function logout()
	{
		session_start();
		session_unset();

// destroy the session
		session_destroy();
		header("location:".$this->url);

	}

	function contact()
	{
		include('../view/contact.php');

	}

	function about()
	{
		include('../view/about.php');

	}

}

$a= new usercontroller;

if(isset($_SERVER['PATH_INFO']))
{
	$path=$_SERVER['PATH_INFO'];
}
else
{
	$path='/';
}

switch($path)
{
	case('/'):
	$a->home();
	break;
	
	case('/contact'):
	$a->contact();
	break;
	
	case('/register'):
	$a->register();
	break;

	case('/addpost'):
	$a->addpost();
	break;

	case('/viewpost'):
	$a->viewpost();
	break;
	case('/addpost'):
	$a->addpost();
	break;

	case('/login'):
	$a->login();
	break;
	
	case('/about'):
	$a->about();
	break;

	case('/logout'):
	$a->logout();
	break;
	
	default:
	break;
}

?>

