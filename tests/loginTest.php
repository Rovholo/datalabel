<?php
/**
 * @coversDefaultClass \Rovholo\datalabel\login
 */
class loginTest extends PHPUnit_Framework_TestCase{
  protected $result;
  
  public function setUp(){//this part of the code initiates the hello variable
    $this->result = new \Rovholo\datalabel\login();
    $link = mysqli_connect("localhost","user","password","database1");
    mysqli_query($link,"CREATE TABLE users (user_id int,user_name varchar(255),password varchar(255));");
  }
  /**
   * @covers ::login
   */
  public function testinit(){//this part of the code checks if the value returned by the world() method is equal to word
    $result = $this->result->login("user");
    $password = "name";
    $this->assertTrue(json_decode($result)[0]->password == $password);
  }
  
  public function testinit2(){//this part of the code checks if the value returned by the world() method is equal to word
    $result = $this->result->login("");
    $this->assertTrue(json_decode($result) == "error" || count(json_decode($result)) == 0);
  }
}
?>
