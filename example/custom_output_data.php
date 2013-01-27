<?php
	ini_set('display_errors', '1');
			
    require( dirname(__FILE__) . '/../src/php_error.php' );
    
    $handler = new \php_error\ErrorHandler( $options );
    $handler->turnOn();
    $handler->addOutputArray('custom_output', array('debug_key' => 'some data',
    												'more_date' => 0.983620));

	function a() {
		b( 1, 2 );
	}

	function b( $a, $b, $c, $d=null ) {
	}

	a( "<script>alert('blah')</script>");
