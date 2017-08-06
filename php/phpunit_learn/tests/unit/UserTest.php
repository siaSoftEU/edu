<?php

class UserTest extends \PHPUnit_Framework_TestCase
{
    protected $user;
    public function setUp() {
        parent::setUp();
        $this->user=new \App\Models\Users();
    }

    /** @test */
  public function ThatweCanGetFirstName(){
      $this->user=new \App\Models\Users();
      $this->user->setFirstName("Iulian");
      $this->assertEquals($this->user->getFirstName(),"Iulian");
  }
/** @test */
   public function ThatweCanGetLastName(){
      $this->user=new \App\Models\Users();
      $this->user->setLastName("sterea");
      $this->assertEquals($this->user->getLastName(),"sterea");
      
  }
/** @test */
  public function FullNameIsreturned(){
         $this->user=new \App\Models\Users();
      $this->user->setLastName("Sterea");
      $this->user->setFirstName("Iulian");
      $this->assertEquals($this->user->getFullName(),"Iulian Sterea");
  }
/** @test */  
  public function FistNameAndLastNameAreTrimmed(){
         $this->user=new \App\Models\Users();
      $this->user->setLastName("  Sterea  ");
      $this->user->setFirstName("  Iulian   ");
      $this->assertEquals($this->user->getFirstName(),"Iulian");
      $this->assertEquals($this->user->getLastName(),"Sterea");
  }
/** @test */
  public function EmailCanBeSet(){
     $this->user=new \App\Models\Users();
     $this->user->setEmail("test@test.com");
     $this->assertEquals($this->user->getEmail(),"test@test.com");
  }
/* @test */
  public function testEmailVariablesContainCorrectValues()
  {
    $this->user=new \App\Models\Users();
    $this->user->setLastName("  Sterea  ");
    $this->user->setFirstName("  Iulian   ");
     $this->user->setEmail("test@test.com");
     $emaiVariables=$this->user->getEmailVariables();
     $this->assertArrayHasKey('email', $emaiVariables);
     

  }
}
