<?php 

class App7 {
	var $url;
	public function setUrl($url) {
		$this->url = $url;
	}
	
	public function printUrl() {
		if(substr($this->url, 1, 4) == 'http') {
			echo $this->url;
		}
	}
	
}

echo $_GET['xss1'];
echo htmlentities($_GET['xss2']);
echo '<a href="'.htmlentities($_GET['xss3']).'">asd</a>';

$ds1 = new App7;
$ds1->setURL($_GET['xss4']);
$ds1->url = 1;
$ds1->printUrl();

$ds2 = new App7;
$ds2->setURL($_GET['xss5']);
$ds2->printUrl();
