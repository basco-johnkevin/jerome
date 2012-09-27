<?php

return array(

	'docs' => array('handles' => 'docs'),
        'bootstrapper' => array('auto' => true),
        'composer' => array('auto' => true),

        // aware bundle
        'aware' => array(
		  'autoloads' => array(
		    'map' => array(
		      'Aware' => '(:bundle)/model.php'
		    ),
		  )
		),
        
);