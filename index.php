<html>
<head>
<link rel="stylesheet" href="css.css">	
<?php
		include_once 'inc/db.inc.php';
		include_once 'inc/ite.inc.php';
		include_once 'inc/rec.inc.php';
		
		if($_SERVER['REQUEST_METHOD'] == 'POST') {

			$addCategory = new categoryIn();
			$addCategory->catpid   = $_POST['list-opt'];
			$addCategory->catname  = $_POST['cat_name'];
			$addCategory->categoryAdd();
		}
 
		$categoryTree = new catsRecr; //create the object for needed class. Func will take care of the rest.
		$categoryTreeIt = new catsIter; //create the object for needed class. Func will take care of the rest.
?>
</head><body>

<h1>Form that calls out recursive on itself aswell.</h1>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="cat_add_form">
	<h2>Insert categories.</h2>	
	<div class="wrapp_top">	<?php echo $categoryTree->getCatsRecursive(0, 1); ?></div>
	<input type="text" name='cat_name' placeholder="Category name" id="cat_name" />
	<input type="submit" value="Insert" id="insert_cat" name='insert_cat' />
</form>
<?php echo $categoryTreeIt->getCatsIter(0); ?>
</body>
</html>