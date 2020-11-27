<?php
    if(array_key_exists('p', $_GET) && array_key_exists('t', $_GET)) {
        if('restore' == $_GET['t']) {
            unlink('../chapterfiles/' . $_GET['p'] . '.chapterfile');
        } else {
            $file_handle = fopen('../chapterfiles/' . $_GET['p'] . '.chapterfile', 'w'); 
            fwrite($file_handle, json_encode($_GET['t']));
            fclose($file_handle);
        }
    }
?>
<meta http-equiv="refresh" content="0;url=index.php" />