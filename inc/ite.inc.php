<?php
	class catsIter extends dbconn_e {

		public function buildTree($items) {

			$childs = array();
			foreach($items as &$item) {
				$childs[$item['parent']][] = &$item;
				unset($item);
			}
			foreach($items as &$item) {
				if (isset($childs[$item['id']])) {
					$item['childs'] = $childs[$item['id']];
				}
			}
			return $childs[0];
		}
		
		function parse($array) {
			foreach ($array as $value) {
				
				echo '<li>'.$value['name']; 

					 if (!empty($value['childs'])) { 
						echo '<ul>';
							 $this->parse($value['childs']);
						echo '</ul>';
					 }
				echo '</li>';
			}
		}
		
		public function getCatsIter() {
					
			$parr = $this->getCatArray();
			$tree = $this->buildTree($parr);	
			echo '<h1>Print tree using recursion.</h1>';
			echo $this->parse($tree); 
			
			echo '<h1>Print tree array that I created iterative way.</h1>';
			
			echo '<pre>'; print_r($tree); echo '</pre>';
			return;
		}
	}
 ?>