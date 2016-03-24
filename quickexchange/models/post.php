<?php
class ShareModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM textbook ORDER BY post_date DESC');
		$rows = $this->resultSet();
		return $rows;
	}

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			// Insert into MySQL
			$this->query('INSERT INTO textbook (isbn, title, description, author, price, course, college, contactphone, contactemail) VALUES(:isbn, :title, :description, :author, :price, :course, :college, :contactphone, :contactemail)');
			$this->bind(':isbn', $post['isbn']);
			$this->bind(':title', $post['title']);
			$this->bind(':description', $post['description']);
			$this->bind(':author', $post['author']);
			$this->bind(':price', $post['price']);
			$this->bind(':course', $post['course']);
			$this->bind(':college', $post['college']);
			$this->bind(':contactphone', $post['contactphone']);
			$this->bind(':contactemail', $post['contactemail']);
			$this->execute();
			// redirect
			header('Location: '.ROOT_PATH.'posts');
		}
		return;
	}
}