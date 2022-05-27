<?php
class PersonalData
{
    private $id=null;
    private $name = null;
    private $age = null;
    private $category = null;
    private $birthday = null;
    private $birthplace = null;
    private $bloodtype = null;
    private $height = null;
    private $notices=null;
    private $picdata0=null;
    private $picdata1=null;
    private $picdata2=null;


    public function save()
    {
        $queryPersonalData = new QueryPersonalData();
        $queryPersonalData->setPersonalData($this);
        $queryPersonalData->save();
    }


    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function getBirthplace()
    {
        return $this->birthplace;
    }

    public function getBloodtype()
    {
        return $this->bloodtype;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getNotices()
    {
        return $this->notices;
    }

    public function getPicdata0()
    {
        return $this->picdata0;
    }

    public function getPicdata1()
    {
        return $this->picdata1;
    }

    public function getPicdata2()
    {
        return $this->picdata2;
    }



    public function setId($id)
    {
        $this->id=$id;
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function setAge($age)
    {
        $this->age=$age;
    }

    public function setCategory($category)
    {
        $this->category=$category;
    }

    public function setBirthday($birthday)
    {
        $this->birthday=$birthday;
    }

    public function setBirthplace($birthplace)
    {
        $this->birthplace=$birthplace;
    }

    public function setBloodtype($bloodtype)
    {
        $this->bloodtype=$bloodtype;
    }

    public function setHeight($height)
    {
        $this->height=$height;
    }

    public function setNotices($notices)
    {
        $this->notices=$notices;
    }

    public function setPicdata0($picdata0)
    {
        $this->picdata0=$picdata0;
    }

    public function setPicdata1($picdata1)
    {
        $this->picdata1=$picdata1;
    }

    public function setPicdata2($picdata2)
    {
        $this->picdata2=$picdata2;
    }
    
}