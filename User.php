<?php
class User {
    protected $name;
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
		if($name == "")
		{
			echo 'error bhumika';
		}
		else
		{
			$this->name = $name;
		}
    }
    public function talk() {
        return "Hello world!";
    }
}
?>