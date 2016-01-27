<?php
	class Template {
		static function load($contents,$data = null) {
			if(is_array($data)) {
				extract($data);
			}
			include APP.'templates'.DS.'head.php';
			include APP.'templates'.DS.$contents.'.php';
			include APP.'templates'.DS.'footer.php';
		}
	}
?>