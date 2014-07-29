<?php
require_once "User.php";
class UserTest extends PHPUnit_Framework_TestCase
{
    protected $user;
	
	protected function setUp() {
        $this->user = new User();
        $this->user->setName("");
    }
	
	protected function tearDown() {
        unset($this->user);
    }
	
	public function testTalk() {
        $user = new User();
        $expected = "Hello world!";
        $actual = $user->talk();
        $this->assertEquals($expected, $actual);
    }
}
?>