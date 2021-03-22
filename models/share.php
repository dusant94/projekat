<?php
class ShareModel extends Model{
	public function index(){
		$this->query('SELECT * FROM shares ORDER BY create_date DESC');
		$rows=$this->resultSet();
		 
		return $rows;
	}
	public function add(){
	$post=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
		if($post['submit']){
			if ($post['title']==''||$post['body']==''||$post['link']==''){
			 messages::setMsg('Plese input all fields','error');
				return;
		}
			 $this->query('INSERT INTO shares (title,body,link,user_id) VALUES (:title,:body,:link,:user_id)');
			$this->bind(':title',$_POST['title']);
			$this->bind(':body',$_POST['body']);
			$this->bind(':link',$_POST['link']);
			$this->bind(':user_id',1);
			$this->execute();
			
           if($this->lastInsertId()){
			   header('Location: '.ROOT_URL.'shares');
			   
		   }
			
		}
		return;
	}
}