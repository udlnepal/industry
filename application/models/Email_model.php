<?php
class Email_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }

/*    function sendMail()
{
    $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 587,
  'smtp_user' => 'bergesalison4@gmail.com', // change it to yours
  'smtp_pass' => 'herewego2018', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);

        $message = ' hello there mate!';
        $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('bergesalison4@gmail.com'); // change it to yours
      $this->email->to('timusumit@gmail.com');// change it to yours
      $this->email->subject('Resume from JobsBuddy for your Job posting');
      $this->email->message($message);
      if($this->email->send())
     {
      echo 'Email sent.';
     }
     else
    {
     show_error($this->email->print_debugger());
    }

}
*/

}