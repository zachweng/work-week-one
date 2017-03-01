<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		echo "Hello Home";

		//this->load->view('welcome_message');
	}
	
	

	/*
	public function example($id="str")
	{
		echo "example id=" . $id;

		//this->load->view('welcome_message');
	}
	*/

	/*
	public function example()
	{
		$data['title'] = 'post_title';
		$data['body'] = 'post_body';
		$this->load->view('post',$data);
	}
	*/

	public function getdata()
	{
		$this->load->models('member');
		$rows = $this->member->getAll();

		foreach ($rows as $row)
			{
	        echo $row->title;
	        echo $row->name;
	        echo $row->email;
	        echo '<br>';
			}

		$this->load->view('post',$data);

	}
}
