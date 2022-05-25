<?php
class Authenicate extends CI_model
{
    public function getdata()
    {
        return ['ABC' => 'ABC Value', 'XYZ' => 'XYZ Value'];
    }

    public function getUserData()
    {
        $this->load->database();
        $q=$this->db->query("Select * from users");
        print_r($q);
    }
}
