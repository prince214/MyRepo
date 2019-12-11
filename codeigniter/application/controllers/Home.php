<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

	public function __construct(){
 
        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('User_model');
        	$this->load->library('session');
        	$this->load->library('form_validation');
        	$this->load->library('pagination');
 
	}

	public function index()
	{
		$this->load->view('home');
	}
	public function course(){
		$course = $this->db->get("course");
		$data['records'] = $course->result_array();
		$this->load->view("course/course",$data);
	}
	public function course_add_view(){
		$this->load->view("course/course_add");
	}
	public function course_edit_view(){
		$id = $this->uri->segment('3');
		$this->db->where('id',$id);
		$course = $this->db->get("course");
		$data['records'] = $course->result_array();
		$this->load->view("course/course_edit",$data);
	}
	public function course_delete(){
		$id = $this->uri->segment('3');
		$this->load->model("course");
		$check = $this->course->delete($id);
		/*print_r('$check'); die(here);*/
		if($check){
			redirect("home/course");
		}else
		{
			echo "Record Failed";
		}
	}
	public function course_add(){
		$data = $this->input->post();
		unset($data['submit']);
		$this->load->model("course");
		$check = $this->course->insert($data);
		if($check){
			redirect("home/course");
		}else
		{
			echo "Record Failed";
		}
	}
	public function course_edit(){
		$data = $this->input->post();
		$id = $this->input->post('id');
		unset($data['submit']);
		$this->load->model("course");
		$check = $this->course->update($data,$id);
		if($check){
			redirect("home/course");
		}else
		{
			echo "Record Failed";
		}
	}

	public function course_paging()
	{
		$config=[
				'base_url' => base_rul('home/course'),
				'pre_page' => 3,
				'total_rows'=> $this->courses->num_rows(),
			];
		$this->pagination->initialize($config);
		$course = $this->course->course_list($config ['per_page'],$this->uri->segment(3));

		$this->load->view('course/course',['course'=>$course]);
	}

	// Function strart for students Records 

		public function student_edit(){
			$data = $this->input->post();
			$id = $this->input->post('id');
			unset($data['submit']);
			$this->load->mode("student");
			$check = $this->student->update($this,$id);
			if($check){
				redirect("home/student");
			}else{
				echo "Record Failed";
			}
		}

		public function student(){
			$a=$this->db->select("student.id,student.name,student.surname,student.gender,student.city,student.course-id,student.bdate");
			var_dump($a); die('sdf');
			$this->db->from('student');
			$this->db->join('course',);
				$data['records'] = $course->result_array();
				$this->load->view("student/student",$data);
		}

		/*function getEmployees(){
		  $this->db->select("trn_employee.EMPLOYEE_ID,trn_employee.FIRST_NAME,trn_employee.LAST_NAME,trn_employee.EMAIL,trn_address.ADDRESS_LINE,trn_address.CITY");
		  $this->db->from('trn_employee');
		  $this->db->join('trn_address', 'trn_address.employee_id = trn_employee.employee_id');
		  $query = $this->db->get();
		  return $query->result();*/

		public function student_add_view(){
		$this->db->select('id,fname');
		$course = $this->db->get("course");
		$data['records'] = $course->result_array();
		$this->load->view("student/student_add",$data);
	}
	   
	   public function student_add(){
		$data = $this->input->post();
		unset($data['submit']);
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		$this->load->model("student");
		$check = $this->student->insert($data);
		if($check){
			redirect("home/student");
		}else
		{
			echo "Record Failed";
		}
	} 

	public function student_edit_view(){
		$id = $this->uri->segment('3');
		$this->db->where('id',$id);
		$student = $this->db->get("student");
		$data['records'] = $student->result_array();

		$this->db->select('id,fname');
		$course = $this->db->get("course");
		$data['courses'] = $course->result_array();
		$this->load->view("student/student_edit",$data);
	}   
}

?>



