<?php	
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{

		$data['title'] = 'Home | Times To Job';

		$this->load->view('index', $data);
	}

	public function about()
	{

		$data['title'] = 'About | Times To Job';

		$this->load->view('about', $data);
	}


	public function contactus()
	{

		$data['title'] = 'Contact us | Times To Job';

		$this->load->view('contact-us', $data);
	}

	public function recovery_id()
	{

		$data['title'] = 'Recovery id | Times To Job';

		$this->load->view('recovery-id', $data);
	}

	public function cover_letter()
	{

		$data['title'] = 'Cover Letter | Times To Job';

		$this->load->view('cover-letter', $data);
	}

	public function relationship_manager()
	{

		$data['title'] = 'Relationship Manager | Times To Job';

		$this->load->view('relationship-manager', $data);
	}

	public function linkedin_profile()
	{

		$data['title'] = 'Linkedin Profile | Times To Job';

		$this->load->view('linkedin-profile', $data);
	}

	public function interview_counseling()
	{

		$data['title'] = 'Interview Counseling | Times To Job';

		$this->load->view('interview-counseling', $data);
	}

	public function profile_verification()
	{

		$data['title'] = 'Interview Counseling | Times To Job';

		$this->load->view('profile-verification', $data);
	}

	public function job_shift_planner()
	{

		$data['title'] = 'Job Shift Planner	| Times To Job';

		$this->load->view('job-shift-planner', $data);
	}

	public function drop_profile()
	{

		$data['title'] = 'Job Shift Planner	| Times To Job';

		$this->load->view('drop-profile', $data);
	}

	public function technical_round()
	{

		$data['title'] = 'Technical Round | Times To Job';

		$this->load->view('technical-round', $data);
	}

	public function cv_explode()
	{

		$data['title'] = 'C V Explode | Times To Job';

		$this->load->view('cv-explode', $data);
	}

	public function professional_website()
	{

		$data['title'] = 'Professional website | Times To Job';

		$this->load->view('professional-website', $data);
	}

	public function salary_increment()
	{

		$data['title'] = 'Salary Increment | Times To Job';

		$this->load->view('salary-increment', $data);
	}

	public function vision_supervision()
	{

		$data['title'] = 'Vision Supervision | Times To Job';

		$this->load->view('vision-supervision', $data);
	}

	public function cart()
	{

		$data['title'] = 'Cart | Times To Job';

		$this->load->view('cart', $data);
	}
	
}
