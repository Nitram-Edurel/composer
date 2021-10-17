<?php

use Hello as GlobalHello;

class Hello
{

    public $talk = "Hello World !";

    public function getTalk()
    {
        return $this->talk;
    }
}
$helloWorld = new Hello();
