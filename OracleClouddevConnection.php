
<?php
/* oci_connect('username','password','//host:port/service_name'); */
$conn = oci_connect('test','test','//93.115.136.18:4024/clouddev.world'); 
if (!$conn) { 
    $e = oci_error(); 
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR); 
}
?>
