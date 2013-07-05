<?php
function checkjson() {
    foreach (glob("*.json") as $filename) {
        echo $filename;
    }
checkjson();
?>
