<?php

/**
Class model untuk login
**/

class Login_Baru extends CI_Model
{
	
	/**
	Function untuk menentukan format tampilan form
	modifier 			: public
	parameter			: none
	return type		: assoc array untuk format tampilan form
	**/
	
	public function formUser()
	{
		$data['aksi'] = 'c_login/tampilForm';
			$nim = array('name' => 'nim',
			       'class' => 'form-control',
			       'id' => 'nim',
			      	'placeholder' => 'Masukan NIM',
			      	'value' => $this->input->post('nim')
			      );
			$password = array( 'name' => 'password','class' => 'form-control',
			       'id' => 'password',
			       'placeholder' => 'Masukan kata sandi',
			       'value' => $this->input->post('password')
			      );
			    
			    $auser = array();
			    $auser['nim']= $nim;
			    $auser['password'] = $password;
			    
			    return $auser;
	}
	
}