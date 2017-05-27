<?
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
$myRandom = generateRandomString(6);
$myFile = "Data.csv";
$myData = $myRandom.";".$_POST['myInformation']."\r\n";
$myFileOpen = fopen($myFile, "a");
$write = fwrite($myFileOpen, $myData);
if($write){
echo "&Check=Success&Random=".$myRandom;
}else{
echo "&Check=Fail&Random=0";
}
fclose($myFileOpen);
?>
