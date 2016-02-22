<?php

    $filename = '../responses.txt';
    $responses = file($filename, FILE_IGNORE_NEW_LINES);
    //print_r($responses);


    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
    <Message><?php echo $responses[array_rand($responses)]; ?></Message>
</Response>