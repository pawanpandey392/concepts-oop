<?php

class fakeString
{
    private $str;
    function __construct()
    {
        $this->str = "";
    }

    function addA()
    {
        $this->str .= "pawan";
        return $this;
    }

    function addB()
    {
        $this->str .= " pandey";
        return $this;
    }

    function getStr()
    {
        return $this->str;
    }
}


$a = new fakeString();


echo $a->addA()->addB()->getStr();