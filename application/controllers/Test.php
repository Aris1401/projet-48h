<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Test
 *
 * @author aris
 */
class Test extends CI_Controller{
    public function Index() {
        $this->load->view("test");
    }
}
