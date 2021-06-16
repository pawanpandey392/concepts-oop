<?php
if (!is_dir('examples')) {
    mkdir('examples');

	// current directory
	echo getcwd() . "<br>";

	chdir('examples');

	// current directory
	echo getcwd() . "<br>";


}

rmdir('examples');
?>