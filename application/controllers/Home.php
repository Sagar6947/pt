<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{

		$table = "tbl_team";
        $id = 'id';
        $data['favicon'] = base_url() . 'assets/img/favicon.webp';
        $data['blog'] = $this->Dashboard_model->fetchallasc($table, $id);
		
		$this->load->view('home', $data);
	}

	
	public function franchise()
	{	
		$data['title'] = 'Franchise | Purple Turtle';
		$data['state_list'] = $this->CommonModal->getAllRows('tbl_state');

		if (count($_POST) > 0) {
			$post = $this->input->post();
            $insert = $this->CommonModal->insertRowReturnId('tbl_franchise', $post);
            if ($insert) {
				$this->session->set_userdata('msg', '<div class="alert alert-success">Your query is successfully submit. We will contact you as soon as possible.</div>');
            } else {
				$this->session->set_userdata('msg', '<div class="alert alert-danger">We are facing technical error ,please try again later or get in touch with Email ID provided in contact section.</div>');
            }
        } else {
		}
		$this->load->view('franchise', $data);
	}


	public function getcity()
    {
        $state = $this->input->post('state');


        $data['city'] = $this->CommonModal->getRowByIdInOrder('tbl_cities', array('state_id' => $state), 'name', 'asc');
        $this->load->view('dropdown', $data);
    }

	

	public function blog()
	{ 
		$id = $this->uri->segment(2);
		$data['title'] = 'Blogs | Purple Turtle';
		$table = "tbl_team";
		
		$where = array('id' => $id);
		$data['favicon'] = base_url() . 'assets/images/favicon.png';
		$data['details'] = $this->CommonModal->getRowByMoreId($table, $where);
		$data['bloglist'] = $this->CommonModal->getAllRows($table);

		$this->load->view('blog', $data);
	}

	public function about()
	{
		$data['title'] = 'About | Purple Turtle';
		$this->load->view('about', $data);
	}


	public function foundation()
	{
		$data['title'] = 'Foundation | Purple Turtle';
		if (count($_POST) > 0) {
			$post = $this->input->post();
            $insert = $this->CommonModal->insertRowReturnId('tbl_subscribers', $post);
            if ($insert) {
				$this->session->set_userdata('msg', '<div class="alert alert-success">Your query is successfully submit. We will contact you as soon as possible.</div>');
            } else {
				$this->session->set_userdata('msg', '<div class="alert alert-danger">We are facing technical error ,please try again later or get in touch with Email ID provided in contact section.</div>');
            }
        } else {
		}

		
		$this->load->view('foundation', $data);
	}

	public function faqs()
	{
		$data['title'] = 'FAQ | Purple Turtle';
		$data['faq_title'] = $this->CommonModal->getAllRowsInOrder('faq_cat', 'fid', 'asc');
		$this->load->view('faqs', $data);
	}
	
	public function gallery()
	{
		$data['title'] = 'GALLERY | Purple Turtle';
		$this->load->view('gallery', $data);
	}

	public function animated_videos()
	{
		$data['title'] = 'Animated Videos | Purple Turtle';

		$data['cate'] = $this->CommonModal->getAllRows('tbl_category');
		$this->load->view('animated-videos', $data);
	}

	public function all_videos()
	{ 
		$id = $this->uri->segment(3);
		$data['title'] = 'All Videos | Purple Turtle';
		$table = "tbl_videos";
		$where = array('category_id' => $id);
		$data['favicon'] = base_url() . 'assets/images/favicon.png';
		$data['all_vid'] = $this->CommonModal->getRowByMoreId($table, $where);

		$this->load->view('all_videos', $data);
	}
}
