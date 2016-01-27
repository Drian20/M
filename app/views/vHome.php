<?php

	class vHome extends View {

		function __construct() {
			parent::__construct();
			//echo 'Hello vista';
			$this->tpl = Template::load('home');
		}
	}
?>