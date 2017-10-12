<?php
//lay ten tinh trong database
/**idMien :
*0: xo so mien bac
*1: so xo violet
*2: xo so mien nam
*3: xo so mien trung
*/
global $dbc;
function tentinh($mienTinh) {
  $q = "
  SELECT * tinh
  ";
  $result = mysqli_query($dbc,$q);
  return $result;
}

?>
