<?php 
/**
* Category Class
*/
class CategoryController extends BaseController{
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = array();
		$table = 'category';
		$category = $this->load->model('Category');
		$data['categories'] = $category->all($table);
		return $this->load->view('category.category', $data);
	}

	public function show(){
		$data = array();
		$table = 'category'; 
		$id = 3;
		$category = $this->load->model('Category');
		$data['catById'] = $category->show($table, $id);
		return $this->load->view('category.categoryDetails', $data);
	}

	public function store(){
		$table = 'category';

		if(isset($_POST['submit'])){
			$name = $_POST['name'];
		}
		
		$data = array(
			'name'=>$name
		);

		$catModel = $this->load->model('Category');
		$result = $catModel->insert($table, $data);

		$message = array();

		if($result == 1){
			$name = '';
			$message['success'] = "Category added success..";
		}else{
			$message['error'] = "Category not added";
		}
		return $this->load->view('category.storeCategory', $message);
	}


	public function create(){
		return $this->load->view('category.storeCategory');
	}

	public function edit(){
		$table = 'category';
		$id = 1;
		$catModel = $this->load->model('Category');
		$data = $catModel->show($table, $id);
		return $this->load->view('category.editCategory', $data);
	}

	public function update(){
		$table = 'category';
		if(isset($_POST['submit'])){
			$data = array(
				'name'=>$_POST['name']
			);
			$category_id = $_POST['category_id'];
			$condition = "id = $category_id";
		}
		$catModel = $this->load->model('Category');
		$result = $catModel->update($table, $data, $condition);

		$message = array();

		if($result == 1){
			$message['success'] = "Category updated success..";
		}else{
			$message['error'] = "Category not updated";
		}
		return $this->load->view('category.editCategory', $message);
	}

	public function destroy(){
		$table = 'category';
		$condition = "id=13";
		$catModel = $this->load->model('Category');
		$catModel->destroy($table, $condition);
	}


}