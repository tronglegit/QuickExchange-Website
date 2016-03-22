<?php 
class UserModel extends Model{
	public function register(){
	$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$password = md5($post['password']);
		  if($post['submit']){

		  	if($post['firstname'] == '' || $post['lastname'] == '' || $post['phone'] == '' || $post['college'] == '' || $post['email'] == ''
		  		|| $post['password'] == ''){
		  		Messages::setMsg('Please fill in all fields','error');
		  		return;
		  	}
		  	// insert into mysql
		  	$this->query('INSERT INTO user (firstname, lastname, email, password, phone, college) VALUES(:firstname, :lastname, :email,:password,:phone, :college)');
		  	$this->bind(':firstname',$post['firstname']);
		  	$this->bind(':lastname',$post['lastname']);
		  	$this->bind(':email',$post['email']);
		  	$this->bind(':password',$password);
		  	$this->bind(':phone',$post['phone']);
		  	$this->bind(':college',$post['college']);
		  
		  	$this->execute();
		  	if($this->lastInsertId()){
		  		//redirect
		  		header('Location: '.ROOT_PATH.'users/login');
		  	}
		  }
		  return ;
	}
	public function login(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$password = md5($post['password']);
		  if($post['submit']){
		  	// insert into mysql
		  	$this->query('SELECT * FROM user WHERE email = :email AND password = :password');
		  	$this->bind(':email',$post['email']);
		  	$this->bind(':password',$password);
			$row = $this->single();
			if($row){
			      $_SESSION['is_logged_in'] = true;
			      $_SESSION['user_data']  = array( 

			      	"id" => $row['id'],
			      	"firstname" => $row['firstname'],
			      	"email" => $row['email']

			      	);
			      header('Location: '.ROOT_PATH.'posts');
			}else{
				Messages::setMsg('Incorrect Login', 'error');
			}
		  }
		return;
	}
}
 ?>
