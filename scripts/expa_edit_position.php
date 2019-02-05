<?php

require_once ("../include/config.php");

for ($i = 0; i < count($in_position); $i++) {
    $rez = $client->isSetPosition($in_id_position[$i], $in_position[$i]);
}
//$i=0;
//$rez = $client->updatePosition($in_id_position[$i], $in_position[$i]);

echo json_encode($rez);
