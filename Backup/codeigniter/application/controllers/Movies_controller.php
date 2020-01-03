<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies_controller extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	
	
}
	public function index()
	{	 	
			echo "index";
	}

	public function addMovies(){

           $movieData = $this->fetchFormData();

           print_r($movieData);
            $this->load->model('Admin/Movies_model');

		    if($this->Movies_model->addMovies($movieData)){
		         redirect('Dashboard/movies');
		    }
		    else
		    {
		    	echo "error";
		    }
            
           

	}

   

    public function fetchFormData(){


           $movie_name = $this->input->post('movie_name');
           $format = $this->input->post('format');
           $category = $this->input->post('category');
           $description = $this->input->post('description');
           $movieID = $this->input->post('movieID');

            //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'upload/poster/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $config['upload_path'] . $uploadData['file_name'];
                    echo "success";
                }else{
                    $picture = '';
                    echo $this->upload->display_errors();
                }
            }else{
                $picture = '';
            }


            //Check whether user upload movie
            if(!empty($_FILES['movie']['name'])){
                $config['upload_path'] = 'upload/movies/';
                $config['allowed_types'] = 'mp4|mkv|avi|mov';
                $config['file_name'] = $_FILES['movie']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('movie')){
                    $uploadData = $this->upload->data();
                    $movie_path = $config['upload_path'] . $uploadData['file_name'];
                    echo "success";
                }else{
                    $movie_path = '';
                    echo $this->upload->display_errors();
                }
            }else{
                $movie_path = '';
            }
            
            //Prepare array of user data
            $movieData = array(
                'id' =>$movieID,
                'movie_name' => $movie_name,
                'format' => $format,
                'poster' => $picture,
                'category' => $category,
                'src' => $movie_path,
                'description' => $description
            );

            return $movieData;
    }

    public function updateMovies(){


           $movieData = $this->fetchFormData();

           print_r($movieData);
            $this->load->model('Admin/Movies_model');

            if($this->Movies_model->updateMovies($movieData)){
                 redirect('Dashboard/movies');
            }
            else
            {
                echo "error";
            }
            
    }

    public function deleteMovie(){

         $movie_id = $this->input->post('movie_id');
            $this->load->model('Admin/Movies_model');

            if($this->Movies_model->deleteMovie($movie_id)){
                 redirect('Dashboard/movies');
            }
            else
            {
                echo "error";
            }

    }


    public function movieDashboard(){

        $this->load->model('Admin/Movies_model');
        $data['actionMovies'] = $this->Movies_model->actionMovies();
        $data['comedyMovies'] = $this->Movies_model->comedyMovies();
        $data['thrillerMovies'] = $this->Movies_model->thrillerMovies();

        // echo"<pre>";
        // print_r($data);

        $this->load->view('template/header');
        $this->load->view('movies/movieDashboard',$data);
        $this->load->view('template/footer');
    }

    public function movieDetails(){

        $this->load->model('Admin/Movies_model');
        $data['movieInfo'] = $this->Movies_model->movie_details();

        $this->load->view('template/header');
        $this->load->view('movies/movieDetails',$data);
        $this->load->view('template/footer');
    }


    public function addUserComment(){

        echo $userComment = $this->input->post('userComment');
        echo $user_id = $this->input->post('user_id');
        echo $movieID = $this->input->post('movieID');
        // return true;


    }



}