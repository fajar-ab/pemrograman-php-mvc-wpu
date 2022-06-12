<?php 

class About
{
    public function index($nama = "fajar", $pekerjaan = "ngangur")
    {
        echo "Hello nama saya $nama dan pekerjaan saya $pekerjaan";
    }

    public function page()
    {
        echo "About/page";
    }
}