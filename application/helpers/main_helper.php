<?php

    function get_rolename_by_id($role_id) 
    {
        $ci = & get_instance();
        $ci->load->database();
        $ci->db->select('name');
        $ci->db->where('id',$role_id);
        $row = $ci->db->get('roles')->result();
        if(!empty($row))
        {
            return $row[0]->name;
        }
        else
        {
            return false;
        }
    }

    function get_school_by_id($school_id) 
    {
        $ci = & get_instance();
        $ci->load->database();
        $ci->db->select('name');
        $ci->db->where('id',$school_id);
        $row = $ci->db->get('school_list')->result();
        if(!empty($row))
        {
            return $row[0]->name;
        }
        else
        {
            return false;
        }
    }

    function get_grade_by_id($grade_id) 
    {
        $ci = & get_instance();
        $ci->load->database();
        $ci->db->select('name');
        $ci->db->where('id',$grade_id);
        $row = $ci->db->get('grade_list')->result();
        if(!empty($row))
        {
            return $row[0]->name;
        }
        else
        {
            return false;
        }
    }

    function update_profilepic_by_id($user_id,$pic_name)
    {
        $ci = & get_instance();
        $ci->db->select('image');
        $ci->db->from('users');        
        $ci->db->where('id', $user_id);
        $query = $ci->db->get()->row_array();
        if(!empty($query)) {
            unlink('./assets/upload/user/'.$query['image'].'');
        }
        
        $ci->db->set('image', $pic_name);
        $ci->db->where('id', $user_id);
        return $ci->db->update('users'); 
    }

    function get_details_from_user_table_by_id($student_id)
    {
        $ci = & get_instance();
        $ci->db->select('*');
        $ci->db->from('users');        
        $ci->db->where('id', $student_id);
        $query = $ci->db->get();
        return $query->row_array();
    }

    function get_profile_pic_by_id($user_id)
    {
        $ci = & get_instance();
        $ci->db->select('image');
        $ci->db->where('id',$user_id);
        $row = $ci->db->get('users')->result();
        if(!empty($row[0]->image) || $row[0]->image!="")
        {
            return 'assets/upload/user/'.$row[0]->image;
        }else{
            return 'assets/images/profile_pic.png';
        }
    }

    function get_teachers_details_by_id($calendar_id)
    {
        if (!empty($calendar_id) && $calendar_id!='0') 
        {
            $ci = & get_instance();
            $ci->db->select('*');
            $ci->db->from('profile_teacher');
            $ci->db->where_in('calendar_id', $calendar_id);
            $query = $ci->db->get();
             return $query->result_array();
        }
    }

    function get_subject_list_by_calendar_id($calendar_id)
    {
         $ci = & get_instance();
         $sql = "SELECT sub_id,sub_name FROM `subjects` WHERE sub_id IN (SELECT subject_id FROM `teacher_subject` WHERE teacher_id = (SELECT user_id FROM `profile_teacher` WHERE calendar_id= '".$calendar_id."'))";
         $query = $ci->db->query($sql);
         return $query->result_array();
    }
?>