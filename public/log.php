<?php

class log
{

	public $filename = '';


	
	public function logMessage($logLevel, $message)
	{	
		$date=date('Y-m-d');
		$time=date('G:i:s');
    	$this->filename = 'LOG:'.$date.'.log';
    	$handle = fopen($this->filename, 'a');
    	$formattedMSG = $date.$time.$logLevel.$message.PHP_EOL;
    	fwrite($handle, $formattedMSG);

    	fclose($handle);

    
	}

	public function logInfo($message){
	
		$this->logMessage('INFO',$message);
	}
	public function logError($message)
	{
		$this->logMessage('ERROR',$message);
	}



}