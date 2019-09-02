<?php

function hash_password($password)
	{
	   return password_hash($password, PASSWORD_BCRYPT);
	}

function chk_password($login_password,$hash_password)
	{
		if (password_verify($login_password, $hash_password)) 
		{
		    return true;
		} else {
		    return false;
		}
	}

function generate_random()
    {
        // Character List to Pick from
        $chrList = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Minimum/Maximum times to repeat character List to seed from
        $chrRepeatMin = 1; // Minimum times to repeat the seed string
        $chrRepeatMax = 10; // Maximum times to repeat the seed string

        // Length of Random String returned
        $chrRandomLength = mt_rand(8, 25);

        // The ONE LINE random command with the above variables.
        return substr(str_shuffle(str_repeat($chrList, mt_rand($chrRepeatMin,$chrRepeatMax))),1,$chrRandomLength);
    }

    function check_user_sess()
    {
        $ci_obj = &get_instance();
        if ($ci_obj->session->userdata('logged_in')) {
            return true;
        }
        else
        {
            $ci_obj->session->set_flashdata('failure', 'Login Required');
            redirect('login');
        }
    }

    function check_teacher_sess()
    {
        $ci_obj = &get_instance();
        if ($ci_obj->session->userdata('teacher_logged_in')) {
            return true;
        }
        else
        {
            $ci_obj->session->set_flashdata('failure', 'Login Required');
            redirect('login');
        }
    }

    function check_parent_sess()
    {
        $ci_obj = &get_instance();
        if ($ci_obj->session->userdata('parent_logged_in')) {
            return true;
        }
        else
        {
            $ci_obj->session->set_flashdata('failure', 'Login Required');
            redirect('login');
        }
    }

?>