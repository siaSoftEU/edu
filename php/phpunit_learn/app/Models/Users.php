<?php
namespace App\Models;
class Users
{
    protected $first_name;
    protected $last_name;
    protected $email;
    public function setFirstName($firstname)
    {
        $this->first_name=trim($firstname);
    }
    public function getFirstName()
    {
        return $this->first_name;
    }

     public function setLastName($lastname)
    {
        $this->last_name=trim($lastname);
    }
    public function getLastName()
    {
        return $this->last_name;
    }

     public function getFullName()
    {
        return $this->first_name. " " . $this->last_name;
    }

    public function setEmail($email)
   {
       $this->email=trim($email);
   }
   public function getEmail()
   {
       return $this->email;
   }
   public function getEmailVariables(){
       return [
           'email' => $this->getEmail(),
           'full_name'=> $this->getFullName()
       ];
   }

}
