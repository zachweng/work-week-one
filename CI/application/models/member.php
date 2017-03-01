<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Model {

	public function getall()
	{
		$query = $this->db->query('SELECT name, title, email FROM user');

		return $query->result();
		/*
		foreach ($query->result() as $row)
		{
		    echo $row->title;
		    echo $row->name;
		    echo $row->email;
		}

		echo 'Total Results: ' . $query->num_rows();
		}
		*/

	
}
