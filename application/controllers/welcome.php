<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->data['hasil'] = $this->model_crud->getUser('user_data');
		$this->load->view('welcome_message',$this->data);
	}
	public function form_input(){
		$this->load->view('form-input');
	}
	public function insert(){
		$isbn = $_POST['isbn'];
		$booktitle = $_POST['booktitle'];
		$author = $_POST['author'];
		$yearpublished = $_POST['yearpublished'];
		$rating = $_POST['rating'];
		$review = $_POST['review'];
		$data = array('isbn'=> $isbn, 'booktitle' => $booktitle, 'author' => $author, 'yearpublished'=> $yearpublished, 'rating'=>$rating, 'review'=>$review);
		$tambah = $this->model_crud->tambahData('user_data',$data);
		if($tambah>0){
			redirect('welcome/');
			}
		else{
				echo 'Failed to save. Please try again.';
			}
	}
	public function delete($id){
		$hapus = $this->model_crud->hapusData('user_data',$id);
		if($hapus>0){
			echo 'Record deleted successfully';
			redirect('welcome/');
		}
			else{
				echo 'Failed to delete.';
			}
	}
	public function form_edit($id){
		$this->data['dataEdit'] = $this->model_crud->dataEdit('user_data',$id);
		$this->load->view('form-edit', $this->data);
	}
	public function update($id){
		$booktitle = $_POST['booktitle'];
		$author = $_POST['author'];
		$yearpublished = $_POST['yearpublished'];
		$rating = $_POST['rating'];
		$review = $_POST['review'];
		$data = array('booktitle' => $booktitle, 'author' => $author, 'yearpublished'=> $yearpublished, 'rating'=>$rating, 'review'=>$review);
		$edit = $this->model_crud->editData('user_data',$data,$id);
		if($edit>0){
			redirect('welcome/');
			}
			else{
				echo 'Failed to save. Please try again.';
			}
	}
}