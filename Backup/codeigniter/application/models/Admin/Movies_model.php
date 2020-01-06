<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies_model extends CI_Model{

	public function __construct()
{
	parent::__construct();
	
	
}
	public function index()
	{	 	
			echo "index";
	}

	public function addMovies($data){

		  if($this->db->insert('mv_movies',$data))
			return true;
		else
			return false;

	}

	public function fetch_movies(){
			$query = $this->db->get('mv_movies');
		    $list = $query->result_array();

		return $list;
	}


	public function updateMovies($data){

		$query = $this->db->where('id',$data['id'])
				->update('mv_movies', $data);

				if($query)
					return true;
				else
					return false;

	}

	public function deleteMovie($movie_id){

		$query = $this->db->where('id', $movie_id)
					      ->delete('mv_movies');


				if($query)
					return true;
				else
					return false;
	}

	public function actionMovies(){

		$query = $this->db->where('category','action')
						  ->get('mv_movies');
		$list = $query->result_array();

		return $list;

	}

	public function comedyMovies(){

		$query = $this->db->where('category','comedy')
						  ->get('mv_movies');
		$list = $query->result_array();

		return $list;

	}

	public function thrillerMovies(){

		$query = $this->db->where('category','thriller')
						  ->get('mv_movies');
		$list = $query->result_array();

		return $list;

	}

	public function movie_details(){

		$movieID= $this->input->get('id');

		$query = $this->db->where('id',$movieID)
						  ->get('mv_movies');
		$list = $query->result_array();



		return $list;

	

	}

	public function getUser(){

		$query = $this->db->where('id','24')
						  ->get('users');

		$list = $query->result_array();

		// print_r($list[0]['id']);
		// die();
		

		return $list;


	}



}