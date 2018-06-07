<?php 

	class catsRecr extends dbconn_e {
			
		public function getCatsRecursive($parent, $type)
		{
			$parr = $this->getCatArray();
			echo '<ul class="rec_list">';
			foreach($parr as $val => $el) {
				if($parent == $el['parent']) {
					
					if($type == 0)
						echo '<li>'.$el['name'].'</li>';
					else
						echo '<li><input type="radio" id="list-opt" name="list-opt" value="'.$el['id'].'"><label for="list-opt">'.$el['name'].'</label></li>';
					
					echo $this->getCatsRecursive($el['id'], $type);
				}
			}
			echo '</ul>';
			return;
		}
	}
	
?>