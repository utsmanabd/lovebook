<?php
class Landing extends CI_Controller{

    public function index(){
        $data['title'] = 'Lovebook - Beli buku bekas berkualitas';

        $this->load->view('pages/landing/index');
    }
}
?>