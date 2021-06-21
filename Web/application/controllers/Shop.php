<?php
  class Shop extends CI_Controller {
  	
		public function index(){
			
			$this->load->view('shop/layout/header.html');
	    $this->load->view('shop/layout/top.html');
			
			$this->load->view('shop/index.html');
			
			$this->load->view('shop/layout/footer.html');
		}
		
  }
?>