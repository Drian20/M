<?php

	spl_autoload_register(null, false);
	spl_autoload_register('MAutoload::SysLoader');
	spl_autoload_register('MAutoload::ContLoader');
	spl_autoload_register('MAutoload::ModLoader');
	spl_autoload_register('MAutoload::ViewLoader');
	spl_autoload_register('MAutoload::TempLoader');

	class MAutoload {

		static function SysLoader($class) {

			$filename = strtolower($class).'.php';
			$file = ROOT.'sys'.DS.$filename;
			if (!file_exists($file)) {
				return false;
			}
			require $file;
		}
		
		static function ContLoader($class) {

			$filename = strtolower($class).'.php';
			$file = APP.'controllers'.DS.$filename;
			if (!file_exists($file)) {
				return false;
			}
			require $file;
		}
		
		static function ModLoader($class) {

			$filename = strtolower($class).'.php';
			$file = APP.'models'.DS.$filename;
			if (!file_exists($file)) {
				return false;
			}
			require $file;
		}
		
		static function ViewLoader($class) {

			$filename = strtolower($class).'.php';
			$file = APP.'views'.DS.$filename;
			if (!file_exists($file)) {
				return false;
			}
			require $file;
		}

		static function TempLoader($class) {

			$filename = strtolower($class).'.php';
			$file = APP.'views'.DS.$filename;
			if (!file_exists($file)) {
				return false;
			}
			require $file;
		}
	}

	/**
	*
	* Coder
	* makes var_dump easy
	* @author drian
	*
	*/
	class Coder {

		static function code($var) {

			echo '<pre>'.$var.'</pre>';
		}
		static function codear($var) {

			echo '<pre>'.var_dump($var).'</pre>';
		}
	}
?>