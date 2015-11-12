<?php
function formatNumber($newNumber){
    return substr($newNumber,0,3).'-'.substr($newNumber,3,3).'-'.substr($newNumber, 6);
}
function parseContacts($filename)
{
    $filename = 'contacts.txt';
    $handle = fopen($filename,'r');
    $contents= fread($handle, filesize($filename));
    //$keys = array('name','number');
    $trimContent=trim($contents);
    $contacts = array();
    $formatArray=[];
    $contactsArray= explode("\n",$trimContent);
    //$contacts=explode('|',$contents);
      fclose($handle);
    foreach($contactsArray as $value){
        $personInfoArray= explode('|', $value);
        $personInfoArray[1]=formatNumber($personInfoArray[1]);
        $formatArray[]=[
            'name'=> $personInfoArray[0],
            'number'=>$personInfoArray[1]
            ];
        }
    
  
    // todo - read file and parse contacts

    return $formatArray;
}

var_dump(parseContacts('contacts.txt'));
