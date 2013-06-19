<?php
namespace Codeception\Module;

// here you can define custom functions for WebGuy 

class WebHelper extends \Codeception\Module
{
	// HOOK: on every Guy class initialization
	public function _cleanup() {

		putenv( 'MYSQL_PWD=' . $this->config['password'] );

		$command = sprintf(
			"mysql -u %s %s < tests/_data/dump.sql",
			$this->config['username'],
			$this->config['database']
		);
		exec( $command );
	}

	// HOOK: used after configuration is loaded
    public function _initialize() {
    	exec( 'gunzip -c ' . $this->config['file'] . ' > tests/_data/dump.sql' );
    }
}
