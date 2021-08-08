<?php

class Profil
{
    public $id = null;
    public $Name;
    public $PWD;

    function _construct($id = null , $Name , $PWD)
    {
        $this->$id = $id;
        $this->$Name = $Name;
        $this->PWD = $PWD;
    }

    public function getid()
    {
        return $this->id;
    }
    public function setid(string $id)
    {
        return $this->id = $id;
    }

    public function getName()
    {
        return $this->Name;
    } 
    public function setName(string $Name)
    {
        return $this->$Name = $Name;
    }

    public function getPWD()
    {
        return $this->PWD;
    } 
    public function setPWD(string $PWD)
    {
        return $this->PWD = $PWD;
    }
}