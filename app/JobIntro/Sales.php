<?php

namespace App\JobIntro;

class Sales implements JobIntro
{
    private $url;

    public function __construct($url){
        $this->url = $url;
    }

    public function showIntro(){
        return '<center>
            <h1>WELCOME TO THE SALES DEPARTMENT</h1>
            <img src="'. $this->url . '" width="30%">
        </center>';
    }
}
