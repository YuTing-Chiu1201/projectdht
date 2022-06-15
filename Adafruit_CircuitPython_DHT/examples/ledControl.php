<?php 

    $command = escapeshellcmd('/usr/bin/python3 ./ledLight.py 1');
    $output = shell_exec($command);
    echo $output;

?>
