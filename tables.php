<?php
    $csvFile = file('/soccertables/testgames1.cvs');
    $data = [];
    foreach ($csvFile as $line) {
        $data[] = str_getcsv($line);
    }
?>
