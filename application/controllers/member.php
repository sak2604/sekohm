<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class member extends CI_Controller {

	
	public function index()
	{
	   $this->load->view('tmp/index');
	}
	public function index1()
	{
	    $this->load->view('tmp1/index1');
	}
	
	
	
	
	public function test()
	{
	    $this->load->view('tmp1/head1');
	    $this->load->view('tmp/menu');
	    $this->load->view('tmp/conten');
	
	 
	}
	public function test1()
	{
	    $this->load->model('fauli_models');
	    $re= $this->fauli_models->get_category();
	    $da['fau_res']=$re;
	    
	    
	    
	    
	    $this->load->model('fauli_models');
	    $rei= $this->fauli_models->get_base();
	    $dad['faui_res']=$rei;
	    
	    
	    
	   
	    
	    
	    $this->load->view('tmp1/head1');
	    $this->load->view('tmp1/from2');
	   //$this->load->view('tmp/menu');
	    $this->load->view('category',$da);
	    
	    
	    
	    $this->load->view('base',$dad);
	    
	    
	    
	    $this->load->view('tmp1/from1');
	  
	    
	    
	}
	
	
	
	
	
	
	
	public function fauli()
	{
	    $this->load->model('fauli_models');
	    $res= $this->fauli_models->get_fauli();
	   $data['fauli_res']=$res;
	   
	   $this->load->view('tmp1/head1');
	  // $this->load->view('tmp1/menu1');
	   $this->load->view('fauli_list',$data);

	 

	   
	}

	
	

	public function chart()
	{
	    $this->load->model('fauli_models');
	    $res1= $this->fauli_models->get_fa();
	    $data1['fauli1_res']=$res1;
	    
	    $this->load->view('tmp1/head1');
	 // $this->load->view('tmp/menu');
	    $this->load->view('chart',$data1);
	    
	    
	}
	
	public function category()
	{
	   
	    
	    $this->load->view('tmp1/head1');
	    // $this->load->view('tmp/menu');
	    
	    
	    
	}
	public function base()
	{
	   
	    
	    
	}
}

