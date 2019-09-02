<?php
class Teacher_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	public function get_teacher_profile_deatils_by_id($teacher_id)
    {
        $this->db->select('*');
        $this->db->from('profile_teacher');        
        $this->db->where('user_id', $teacher_id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_subject_name_list_by_id($teacher_id)
    {
        $this->db->select('subjects.sub_name');
        $this->db->from('subjects');        
        $this->db->join('teacher_subject', 'subjects.sub_id = teacher_subject.subject_id');     
        $this->db->where('teacher_subject.teacher_id', $teacher_id);
        $query = $this->db->get();
        $new = '';
        foreach($query->result_array()as $row)  //convert array into string
                {
                    $new .= $row['sub_name'].','; 
                }
                $abc = substr($new,0,-1);     //for split , in the last 
                return $abc;
    }

    public function update_profile($teacher_id, $data)
    {
       
        $data_users = array(
                            'name'  => $data['fname'],
                            'phone' => $data['phone'],
                            'update_at' => $data['update_at'],
                            );

        $this->db->where('id', $teacher_id);
        $this->db->update('users', $data_users);

        $this->db->where('user_id', $teacher_id);
        $this->db->update('profile_teacher', $data);
        return true;
    }

     public function update_change_password($data)
    {
        $this->db->set('password', $data['password']);
        $this->db->where('email', $data['email']);
        return $this->db->update('users'); 
    }

}?>