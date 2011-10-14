<?php

class Contact_us extends MX_Controller {
	
	function __construct()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this; // Needs to be set for validation to work with MX
		$this->form_validation->set_error_delimiters('', '<br />');
    }
    
    function index()
	{
		$data['form_open'] = array('id' => 'contact-form');	
		// Setup the input attributes for each field
		$data['name_attr'] = array('name'=>'name', 'value'=>'Enter your full name here');
		$data['email_attr'] = array('name'=>'email', 'value'=>'Enter your email address here');
		$data['message_attr'] = array('name'=>'message', 'value'=>'Enter your message or question here');
		$data['submit_attr'] = array('name'=>'submit', 'value'=>'Submit');
		
		$data['main_content'] = 'contact_us_form';
		$this->load->view('template/template', $data);		
	}
	
	function process_form()
	{		
		// Setup form validation rules
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('message', 'Message', 'required');
		
		$uri = $this->input->post('uri');
		$msg['msg'] = TRUE;
		
		if ($this->form_validation->run() == FALSE)
		{
			$msg['err_msg'] = validation_errors();
			$this->session->set_userdata($msg);	
			redirect($uri);
		}  
		else
		{
			// Process the form data here
			
			// end process form data
			$msg['succ_msg'] = 'Thank you for your inquiry.<br />We will get back to you as soon as possible.';
			$this->session->set_userdata($msg);	
			redirect($uri);
		}
	}
	
}
/* End of file contact_us.php */
/* Location: ./system/application/modules/contact/controllers/contact_us.php */  