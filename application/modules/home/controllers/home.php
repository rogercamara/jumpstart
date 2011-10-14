<?php

class Home extends MX_Controller {
	
	function index()
	{
		// Check to see if the form has been submitted
		if ($this->session->userdata('msg'))
		{
			if ($this->session->userdata('err_msg')) 
			{
				$data['error_message'] = $this->session->userdata('err_msg');
				$clear = array('msg'=>'', 'err_msg'=>'');	
			} 
			elseif ($this->session->userdata('succ_msg')) 
			{
				$data['success_message'] = $this->session->userdata('succ_msg');
				$clear = array('msg'=>'', 'succ_msg'=>'');
			}			
			$this->session->unset_userdata($clear);
		}
		// end of form check block		
								
		$data['main_content'] = 'home';
		$this->load->view('template/template', $data);		
	}
	
}
/* End of file home.php */
/* Location: ./system/application/controllers/home.php */  