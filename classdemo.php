<?php
class User {
		var $first; 
		var $last;
		var $address;

        private function getName(){
		$num = rand(10,586);
		$this->name = "$num".' Secret ';
		return $this->name;
	}

	public function setAddress($address){
		$this->address = $this->getName().$address;
	}
	public function getAddress(){
		return $this->address;
	}

}

?>
<html>
	<form action="class-test.php" method="post">
		<input type="text" name="first"></input>
		<input type="text" name="last"></input>
		<input type="submit" id="submit"></input>
	</form>

        See D3 bar graph in Action <form action="d3demo.php"><input type="submit"></form>
	<br/>
	See D3 Scatterplot in Action <form action="d3scatterplot.php"><input type="submit"></form> 
</html>
<?php

$a = new User();

if (isset($_POST['first']) && isset($_POST['last'])){
	$a->setAddress('Summer St, MA');
	echo $a->getAddress();
}

?>
