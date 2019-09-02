<?php
class Student_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	public function get_student_profile_deatils_by_id($student_id)
    {
        $this->db->select('*');
        $this->db->from('profile_child');        
        $this->db->where('user_id', $student_id);
        $query = $this->db->get();
        return $query->row_array();
    }


     public function update_change_password($data)
    {
        $this->db->set('password', $data['password']);
        $this->db->where('email', $data['email']);
        return $this->db->update('users'); 
    }


    public function update_profile($user_id, $data)
    {
       
        $data_users = array(
                            'name'  => $data['name'],
                            'phone' => $data['phone'],
                            'update_at' => $data['update_at'],
                            );

        $this->db->where('id', $user_id);
        $this->db->update('users', $data_users);

        $this->db->where('user_id', $user_id);
        $this->db->update('profile_child', $data);
        return true;
    }

    public function get_teachers_details()
    {
       $condition = "teacher_status='1' AND calendar_id!='0'";
       $this->db->select('*');
       $this->db->from('profile_teacher');
       $this->db->where($condition);
       $query = $this->db->get();
       return $query->result_array();
    }

    // public function filter_teacher_list_by_ajax($id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('profile_teacher' as 'A');
    // }

    public function filter_teacher_list_by_subject($sub_id)
    {
       $this->db->select('calendar_id');
       $this->db->from('profile_teacher as A');
       $this->db->join('teacher_subject as B', 'A.user_id = B.teacher_id', 'A.teacher_status = 1');
       $condition = "A.teacher_status='1' AND A.calendar_id!='0' AND B.subject_id = ".$sub_id."";
       $this->db->where($condition);
       $query = $this->db->get();
       return $query->result_array();
    }


}?>