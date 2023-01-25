<?php
/**
 * user models
 */
class User extends Model
{
	public $errors = [];
	protected $table = 'users'; 	

    protected $allowedinsert = [
        'fullname',
        'username',
        'email',
        'password',
        'date',
        'role',
    ];

	function validate($data)
	{
		$this->errors = [];
        // $data = [];

		// validation for fullname
		if(empty($data['fullname'])) 
		{
			$this->errors['fullname'] = " fullname is required";
		}elseif(!preg_match("/^[a-zA-Z ]*$/",$data['fullname']))
		{
			$this->errors['fullname'] = "only letters and spaces are allowed in Fullname";
		}

		// validation for username 
		if(empty($data['username'])) 
		{
			$this->errors['username'] = "username is required";

		}elseif(!preg_match("/^[a-zA-Z0-9]*$/",$data['username']))
		{
			$this->errors['username'] = "only letters and number are allowed in username";
		}elseif ($this->where(['username' => $data['username']])) {
			$this->errors['username'] = 'username already taken';
		}
		
		// validation for email
		if (empty($data['email'])) {

			$this->errors['email'] = " enter email";

		}elseif(!filter_var($data['email'], FILTER_SANITIZE_EMAIL)) 
		{
			$this->errors['email'] = " email is required";

		}elseif($this->where(['email' => $data['email']])) 
		{
			$this->errors['email'] = 'email already taken';
		}

		// validation for password
		if(empty($data['password'])) 
		{
            $this->errors['password'] = "password is required";
			
		}elseif(strlen($data['password'])  <= 5 ) {

			$this->errors['password'] = "password should not be less than 6 characters ";

		}elseif($data['password'] !== $data['retypepassword'])
        {
            $this->errors['retypepassword'] = "passwords do not match";
        }

		// validation for radio
		if(empty($data['box'])) 
		{
			$this->errors['box'] = "please accept our terms and conditions";
		}

		// errors
		if (empty($this->errors)) {

			
			return true;
	
		}
		return false;
	}

}