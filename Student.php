<?php

/**
 *
 */
class Student extends Person
{
  private $courses=array();
  private $credit;
  
  function __construct($fn=null, $ln=null, $age=null, $crs=null, $crdt=null)
  {
    $this->setFname=$fn;
    $this->setLname=$ln;
    $this->setBirth=$age;
    $this->courses=$crs;
    $this->credit=$crdt;
  }



  public function getCredit()
  {
    return $this->credit;
  }

    public function getCourses()
    {
      return $this->courses;
    }

  public function setCredit($credits)
  {
    $this->credit=$credits;
  }

    public function setCourses($param)
    {
      array_push($this->courses, $param );
    }
}


 ?>
