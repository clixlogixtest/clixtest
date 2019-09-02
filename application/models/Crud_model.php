<?php

class Crud_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	public function student_registration_into_user_db($data)
	{
		$this->db->insert('users',$data);
		$insertid = $this->db->insert_id();
            return $insertid;
	}

	public function student_registration_into_profile_db($data)
    {
        $this->db->insert('profile_child',$data);
    }

    public function parent_registration_into_profile_db($data)
	{
		$this->db->insert('profile_parent',$data);
        $insertid = $this->db->insert_id();
            return $insertid;
	}

    public function teacher_registration_into_user_db($data)
    {
        $this->db->insert('users',$data);
        $insertid = $this->db->insert_id();
            return $insertid;
    }

    public function teacher_registration_into_profile_db($data)
    {
        $this->db->insert('profile_teacher',$data);
    }

    public function insert_subject_list($data)
    {
        foreach ($data as $value) 
        {
            $temp['sub_id'] = $value['id'];
            $temp['sub_name'] = $value['name'];
            $temp['duration'] = $value['duration'];
            $this->db->insert('subjects',$temp);
        }
       
    }

	public function get_user_details_by_randomstring($random_string)
    {
        $this->db->select('*');
        $this->db->from('users');        
        $this->db->where('user_activation_link', $random_string);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update_active_user($random_string)
    {
        $this->db->set('status', '1');
        $this->db->set('user_activation_link', '');
        $this->db->where('user_activation_link', $random_string);
        return $this->db->update('users'); 
    }

     public function authenticate($email, $password)
    {
        $this->db->select('*');
        $this->db->from('users');        
        $this->db->where('LOWER(email)', $email);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
           $user = $query->row();
           if($user->status == 1)
           {
               if(chk_password($password,$user->password))
                {
                    //store user data into session
                    $sess_array = array(
                        'user_id'   => $user->id,
                        'name'     	=> $user->name,                        
                        'email'     => $user->email,
                        'role'      => $user->role,
                        'login_type'=> $user->login_type,
                        'image_url' => $user->image
                    );
                    // code for reminder me start
                    if(!empty($this->input->post('remember')))
                    {
	                    $reminderdata=$sess_array;
	                    $Token=$this->generateToken();
	                    $key=$this->generateKey();
	                    $reminderdata['token']=$Token;
	                    $reminderdata['key']=$key;
	                    $this->deleteReminderMe($user->id);
	                    $this->updateReminderMe($reminderdata);
	                    
	                    // Store key in cookie
	                    setcookie("rm_cookie","$Token|$key",time() + (3600 * 1),"/");
                    }
                    //code for reminder me end
                    if ($user->role=='1' || $user->role=='2') {
                       $this->session->set_userdata('logged_in',$sess_array);
                    }
                     elseif ($user->role=='3') {
                       $this->session->set_userdata('parent_logged_in',$sess_array);
                    } 
                    elseif ($user->role=='4') {
                       $this->session->set_userdata('teacher_logged_in',$sess_array);
                    }              
                    return $user->role;                    
                }
                else
                {
                    $this->session->set_flashdata('failure','Incorrect password.');
                    return false;
                }
            }
            else
            {
                $this->session->set_flashdata('failure','Inactive user login');
                return false;
            }
        }
        else
        {
            $this->session->set_flashdata('failure','Invalid Email.');
            return false;
        } 
    }

      /*
     * Generate Token.
     */
    public function generateToken() 
    {        
	     // get the largest 999999999 we can rand to.

	     $max = (int)str_pad('', strlen(mt_getrandmax()) - 1, 9);
	     $min = (int)str_pad('1', strlen($max), 0, STR_PAD_RIGHT);
	     $key = '';
	     while (strlen($key) < 4) {
	      $key .= mt_rand($min, $max);
	     }
       	return substr($key, 0, 4);
    }

    /*
     * Generate key.
     */

     public function generateKey() 
     {        
	     // get the largest 999999999 we can rand to.
	     $max = (int)str_pad('', strlen(mt_getrandmax()) - 1, 9);
	     $min = (int)str_pad('1', strlen($max), 0, STR_PAD_RIGHT);
	     $key = '';

	     while(strlen($key) < 39) {
	      $key .= mt_rand($min, $max);
	      }
	      return substr($key, 0, 39);
  	}

  /*
   * updateReminderMe data.
   */
	public function updateReminderMe($userdata)
	{
    $this->db->insert('user_sessions', $userdata); 
    $insertid = $this->db->insert_id();
    return $insertid;
	}

  /*
   * delete Reminder Me data.
   */
  	public function deleteReminderMe($user_id)
  	{
  	      $this->db->where('user_id',$user_id);
  	      $this->db->delete('user_sessions'); 
  	}

    public function check_email_exist_by_email($email)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function get_user_details_by_email($email)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update_forget_password_random_string($data)
    {
        $this->db->set('forget_password_random_string', $data['forget_password_random_string']);
        $this->db->where('email', $data['email']);
        return $this->db->update('users'); 
    }

    public function get_user_details_reset_password($random_string)
    {
        $this->db->select('*');
        $this->db->from('users');        
        $this->db->where('forget_password_random_string', $random_string);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function match_old_password($password, $email)
    {
        $this->db->select('password');
        $this->db->where('email',$email);
        $query  = $this->db->get('users');
        $result  = $query->result();
        if(chk_password($password,$result[0]->password))
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function update_password($data)
    {
        $this->db->set('password', $data['password']);
        $this->db->where('forget_password_random_string', $data['reset_password_link']);
        $this->db->where('email', $data['email']);
        return $this->db->update('users'); 
    }

    public function update_reset_link($email)
    {
        $this->db->set('forget_password_random_string', ' ');
        $this->db->where('email', $email);
        return $this->db->update('users'); 
    }

    /*
    *   Check for google_id whether exist or not.
    */
    public function check_googleId_exist($google_id)
    {
        $this->db->select('id');
        $this->db->from('users');
        $this->db->where('google_id', $google_id);
        $query = $this->db->get();
        if($query->num_rows()>0){
          $result=$query->result();
          return $result[0]->id;
        }else{
          return 0;
        }
    }

    /*
    *   Get the user details using user id.
    */
    public function getUserDetailsByID($user_id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function update_user($userdata)
    {
        $this->db->insert('users', $userdata); 
        $insertid = $this->db->insert_id();
        return $insertid;
    }

    public function get_subject_list()
    {
       $this->db->select('*');
       $this->db->from('subjects');
       $query = $this->db->get();
       return $query->result_array();
    }

    public function get_school_list()
    {
       $this->db->select('*');
       $this->db->from('school_list');
       $query = $this->db->get();
       return $query->result_array();
    }

    public function get_grade_list()
    {
       $this->db->select('*');
       $this->db->from('grade_list');
       $query = $this->db->get();
       return $query->result_array();
    }

    public function assign_subject_into_teacher_subject($data)
    {
      $this->db->insert('teacher_subject',$data);
    }
}
	?>