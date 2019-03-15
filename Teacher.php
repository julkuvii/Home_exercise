<?php

/**
 *
 */
class Teacher extends Person
{
  private $subject=array();
  private $department;

  function __construct($fn=null, $ln=null, $age=null, $sub=null, $dep=null)
  {
    $this->setFname=$fn;
    $this->setLname=$ln;
    $this->setBirth=$age;
    $this->subject=$sub;
    $this->department=$dep;
  }


  public function getDepartment()
  {
    return $this->department;
  }

    public function getSubject()
    {
      return $this->subject;
    }

  public function setDepartment($dprtmnt)
  {
    $this->department=$dprtmnt;
  }

    public function setSubject($subjects)
    {
      array_push($this->subject, $subjects);
    }
}


 ?>
