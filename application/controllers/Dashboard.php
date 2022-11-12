<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
		$role = $this->session->userdata('role');
		if ($role != 'admin') {
			redirect(base_url('/'));
			return;
		}
	}

    public function index()
	{
        $data['title'] = "Dashboard";

		$this->load->view('pages/dashboard/header', $data);
        $this->load->view('pages/dashboard/index');
        $this->load->view('pages/dashboard/footer');
	}

	public function product()
	{
        $data['title'] = "Dashboard - Produk";

		$this->load->view('pages/dashboard/header', $data);
        $this->load->view('pages/dashboard/product');
        $this->load->view('pages/dashboard/footer');
	}

	public function orders()
	{
        $data['title'] = "Dashboard - Produk";

		$this->load->view('pages/dashboard/header', $data);
        $this->load->view('pages/dashboard/orders');
        $this->load->view('pages/dashboard/footer');
	}

	public function users()
	{
        $data['title'] = "Dashboard - Produk";

		$this->load->view('pages/dashboard/header', $data);
        $this->load->view('pages/dashboard/users');
        $this->load->view('pages/dashboard/footer');
	}
	
	public function reports()
	{
        $data['title'] = "Dashboard - Produk";

		$this->load->view('pages/dashboard/header', $data);
        $this->load->view('pages/dashboard/reports');
        $this->load->view('pages/dashboard/footer');
	}
}
