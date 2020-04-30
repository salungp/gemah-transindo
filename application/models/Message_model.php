<?php class Message_model extends CI_Model
{
  public function alert($type, $message)
  {
    $icon = $type == 'success' ? 'check' : 'ban';
    $opening = '<div class="alert alert-'.$type.' alert-dismissible">';
    $title = '<h4><i class="icon fa fa-'.$icon.'"></i>'.ucfirst($type).'!</h4>';
    $button_close = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    $ending = '</div>';

    $this->session->set_flashdata('message', $opening.$button_close.$title.$message.$ending);
  }
}