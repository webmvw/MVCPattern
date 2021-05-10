<?php 
/**
* Controller Class
*/
class Controller extends BaseController{
	
	public function __construct(){
		parent::__construct();
	}

	public function home(){
		$postTable = 'post';
		$categoryTable = 'category';
		$postModel = $this->load->model('Post');
		$data['posts'] = $postModel->allPost($postTable, $categoryTable);
		return $this->load->view('home', $data);
	}

	public function postDetails($id){
		$postTable = 'post';
		$categoryTable = 'category';
		$postModel = $this->load->model('Post');
		$data['postDetails'] = $postModel->postDetails($postTable, $categoryTable, $id);
		return $this->load->view('post.post-details', $data);
	}

	public function postByCategory($id){
		$postTable = 'post';
		$categoryTable = 'category';
		$postModel = $this->load->model('Post');
		$data['postByCategory'] = $postModel->postByCategory($postTable, $categoryTable, $id);
		return $this->load->view('post.postByCategory', $data);
	}

}