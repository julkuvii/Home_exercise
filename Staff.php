<?php

/**
 *
 */
class Staff extends Person
{

  private $vacancy;

  function __construct($fn=null, $ln=null, $age=null, $vac=null)
  {
    $this->setFname=$fn;
    $this->setLname=$ln;
    $this->setBirth=$age;
    $this->vacancy=$vac;
  }



  public function getVacancy()
  {
    return $this->vacancy;
  }

  public function setVacancy($vacancies)
  {
    $this->vacancy=$vacancies;
  }
}


 ?>
