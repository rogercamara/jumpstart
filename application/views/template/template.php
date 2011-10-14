<?php 

	/*
    --------------------------------------------------------------------------
	|
	|  This file setups up the basic layout of the pages.
	|
	|  var $main_content => the name of the content view to load
	|
	--------------------------------------------------------------------------- 
	 */
	
	$this->load->view('template/header_data');		// contains the head tag & the opening body tag
	$this->load->view('template/site_header');		// contains the main header of the pages
	$this->load->view($main_content);					// contains the main content of the page (including sidebars)		
	$this->load->view('template/footer');				// contains the visual footer of the pages
	$this->load->view('template/closing');				// contains the closing section of the page (javascript calls, closing body & html tags) 
	
 ?>