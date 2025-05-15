<?php
class Hello extends CI_Controller{
public function Hello_word(){
    echo "ini fungsi Hello Word";
}
public function Hello_view(){
    $data['nama'] = "Bintang";
    $this->load->view('view_hello', $data);
}

}
?>