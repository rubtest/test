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

$passedUrl = $_GET['url'];
$ds1 = new App7;
$ds1->setURL($passedUrl);
$ds1->url = 1;
$ds1->printUrl();

$ds2 = new App7;
$ds2->setURL($passedUrl);
$ds2->printUrl();
