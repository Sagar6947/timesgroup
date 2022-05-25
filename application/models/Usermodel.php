<?php
class Usermodel extends CI_Model
{
    public function getUserData()
    {
        return [
            ['Username' => 'Sagar', 'Password' => 'Sagar@123'],
            ['Username' => 'Thakur', 'Password' => 'Thakur@123'],
        ];
    }
}
?>