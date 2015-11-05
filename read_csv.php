<?php

echo "what file should i read?";
echo "\$argc:\n";
if($argc<2){
	die("Incorrect number of arguments passed");

}


$filename= $argv[1];
echo "reading csv: $filename\n";
dump_file($argv);