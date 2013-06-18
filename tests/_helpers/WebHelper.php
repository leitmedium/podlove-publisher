<?php
namespace Codeception\Module;

// here you can define custom functions for WebGuy 

class WebHelper extends \Codeception\Module
{
	// HOOK: on every Guy class initialization
	public function _cleanup() {

		putenv( 'MYSQL_PWD=' . $this->config['password'] );

		$command = sprintf(
			"gzcat %s | mysql -u %s %s",
			$this->config['file'],
			$this->config['username'],
			$this->config['database']
		);
		exec( $command );
	}
}
