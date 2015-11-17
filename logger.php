<?php

function logMessage($logLevel, $message)
{	
	$date=date('Y-m-d');
	$time=date('G:i:s');
    $filename = 'LOG:'.$date.'.log';
    $handle = fopen($filename, 'a');
    $formattedMSG= $date.$time.$logLevel.$message.PHP_EOL;
    	fwrite($handle, $formattedMSG);
   

    

    fclose($handle);

    // todo - complete this function
}

function logInfo($message){
	
	logMessage('INFO',$message);
}
function logError($message){
	logMessage('ERROR',$message);
}

logInfo("This is an info message.");
logError("This is an info message.");
