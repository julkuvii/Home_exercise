<?php

abstract class Person
{
  private $fname;
  private $lname;
  private $birth;

  public function setFname($value)
    {
      $this->fname=$value;
    }

    public function setLname($value)
      {
        $this->lname=$value;
      }

      public function setBirth($value)
        {
          $this->birth=$value;
        }

  public function getFname()
    {
      return $this->fname;
    }

    public function getLname()
      {
        return $this->lname;
      }

      public function getBirth()
        {
          return $this->birth;
        }
}
 ?>
