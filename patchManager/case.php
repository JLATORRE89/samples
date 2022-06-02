<?php
        $i = $_POST['item'];
        switch ($i) {
                case 0:
                        echo "i equals 0";
                        break;
                case 1:
                        echo "i equals 1";
                        break;
                case 2:
                        echo "i equals 2";
                        $command = escapeshellcmd('sh ./yum.sh');
                        $output = shell_exec($command);
                        // Output will not be shown until the script completes execution.
                        // TODO: HTTP/2 HTML5 server side handles.
                        echo $output;
                        break;
        }
?>