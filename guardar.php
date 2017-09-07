<?php


$fi=fopen("c:/archivo.txt", "a")
or die ("error");

fwrite($fi, "datos:");
fwrite($fi, $_POST['nombre']);
fwrite($fi, "\n");
fwrite($fi, $_POST['comentario']);
fwrite($fi, "\n");
fwrite($fi, "------------------- \n");
fclose($fi);

echo "se mando la informacion";

?>
