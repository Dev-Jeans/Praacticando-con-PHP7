<?php
// var_dump($_FILES["archivo"]["tmp_name"]);
// if(isset($_FILES['archivo'])) {
//   foreach($_FILES['archivo']['name'] as $k => $archivo) {
//       if(!empty($archivo)) {
//           move_uploaded_file(
//               $_FILES['archivo']['tmp_name'][$k],
//               'uploads/' . $archivo
//           );
//       }
//   }
// }

$uploads_dir = 'uploads/';
if (isset($_FILES["archivo"])) {
  foreach ($_FILES["archivo"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["archivo"]["tmp_name"][$key];
        // basename() puede evitar ataques de denegación de sistema de ficheros;
        // podría ser apropiada más validación/saneamiento del nombre del fichero
        $name = basename($_FILES["archivo"]["name"][$key]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
}
}