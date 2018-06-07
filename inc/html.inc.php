<?php

class htmlObj {
	
	public function headTags() {
		echo '
		<html>
		<head>
		<link rel="stylesheet" href="css.css">';	


		if($_SERVER['REQUEST_METHOD'] == 'POST') {

			$addCategory = new categoryIn();
			$addCategory->catpid   = $_POST['list-opt'];
			$addCategory->catname  = $_POST['cat_name'];
			$addCategory->categoryAdd();
		}
 
		$categoryTree = new catsRecr; //create the object for needed class. Func will take care of the rest.
		$categoryTreeIt = new catsIter; //create the object for needed class. Func will take care of the rest.

		echo '</head><body>';
	}
	
	
	public function footerTags() {
		
		echo '</body>
</html>';
	}
	
	
}