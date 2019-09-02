<?php
function message_template($template_config)
{
    $result = array();

    $msg_config = $template_config;
    
    if($msg_config['type']=='send_activation_link')
    {
        $result['message'] = '<p>Hello &nbsp;&nbsp;'.$msg_config['name'].'</p>';
        $result['message'] .= '<p>Your activation link as below. Please click this link to activate your account.</p>';
        $result['message'] .= '<p><a href="'.$msg_config['user_activation_link'].'" target="_blank">Activation Link</a></p>';
    }
    else if($msg_config['type']=='forget_password')
    {
        $result['message'] = '<p>Hello &nbsp;&nbsp;'.$msg_config['name'].'</p>';
        $result['message'] .= '<p>Your password reset link as below. Please click this link to reset your account password.</p>';
        $result['message'] .= '<p><a href="'.$msg_config['reset_password_link'].'" target="_blank">Reset Password Link</a></p>';
    }
    return $result;
}

    function send_email($email_data)
    {
        $CI = & get_instance();
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'sachingupta.clix@gmail.com',
            'smtp_pass' => 'SaGupta@042',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );

        $CI->load->library('email', $config);
        $CI->email->initialize($config);
        $CI->email->set_mailtype("html");
        $CI->email->set_newline("\r\n");


        $CI->email->to($email_data['to']);
        $CI->email->bcc('sachingupta.clix@gmail.com');
        $CI->email->from('sachingupta.clix@gmail.com','Easy Tutor');
        $CI->email->subject($email_data['subject']);

        $body = $CI->load->view('email_template',$email_data,TRUE); 
        $CI->email->message($body);
 
        if($CI->email->send())
        {
            return "email sent!";
        }
        else 
        {
            return "failed";
            // echo $CI->email->print_debugger();
            // show_error($CI->email->print_debugger());
            // echo "failed";
            // die();
        }
    }
    // function message_template($template_config)
    // {
    //     $result = array();

    //     $msg_config = $template_config;
        
    //     if($msg_config['type']=='send_activation_link')
    //     {
    //         $template=get_emailTemplate('send_activation_link');
    //         foreach($msg_config as $key => $value)
    //         {
    //          $template = str_replace('{{'.$key.'}}', $value, $template);
    //         }
    //     }
    //     else if($msg_config['type']=='forget_password')
    //     {
    //         $template=get_emailTemplate('forget_password');
    //         foreach($msg_config as $key => $value)
    //         {
    //          $template = str_replace('{{'.$key.'}}', $value, $template);
    //         }
    //     }
    //     else if($msg_config['type']=='send_message_seller')
    //     {
    //         $template=get_emailTemplate('send_message_seller');
    //         foreach($msg_config as $key => $value)
    //         {
    //          $template = str_replace('{{'.$key.'}}', $value, $template);
    //         }
    //     }
    //     else if($msg_config['type']=='send_message_admin')
    //     {
    //         $template=get_emailTemplate('send_message_admin');
    //         foreach($msg_config as $key => $value)
    //         {
    //             $template = str_replace('{{'.$key.'}}', $value, $template);
    //         }
    //     }
    //     else if($msg_config['type']=='carrier_query')
    //     {
    //         $template=get_emailTemplate('carrier_query');
    //         foreach($msg_config as $key => $value)
    //         {
    //             $template = str_replace('{{'.$key.'}}', $value, $template);
    //         }
    //     }
    //     else if($msg_config['type']=='seller_query')
    //     {
    //         $template=get_emailTemplate('seller_query');
    //         foreach($msg_config as $key => $value)
    //         {
    //             $template = str_replace('{{'.$key.'}}', $value, $template);
    //         }
    //     }
    //      else if($msg_config['type']=='send_escrow_mail')
    //     {
    //         $template=get_emailTemplate('send_escrow_mail');
    //         foreach($msg_config as $key => $value)
    //         {
    //          $template = str_replace('{{'.$key.'}}', $value, $template);
    //         }
    //     }
    //     return $template;
    // }

      /** Function to get email template **/
    // if (!function_exists('get_emailTemplate')) 
    // {
    //    function get_emailTemplate($type) 
    //    {
    //         $ci = & get_instance();
    //         $ci->load->database();
    //         $ci->db->select('message');
    //         $ci->db->where('type',$type);
    //         $row = $ci->db->get('email_template')->result();
    //         if(!empty($row))
    //         {
    //             return $row[0]->message;
    //         }
    //         else
    //         {
    //             return false;
    //         }
    //     }
    // }
?>