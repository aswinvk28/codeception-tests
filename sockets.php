<div id="sockets" style="width:200px; height: 200px;">
    
</div>

<script type="text/javascript">

    var websocket = new Websocket("http://codeception.php.com");
    
    websocket.onmessage(function(event) {
        console.log(event);
    });
    
    document.getElementById('sockets').innerHtml = data;

</script>

<?php
//
//$context = stream_context_create(array(
//   'http'=>array(
//    'method'=>"GET",
//    'header'=>"Accept-language: en\r\n"
//  )
//));



$socket = stream_socket_server("tcp://localhost:23", $errno, $errstr, STREAM_SERVER_LISTEN);

//$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
//
//socket_bind($socket, "127.0.0.1");

//$request = 'GET / HTTP/1.1' . "\r\n" .
//           'Host: 127.0.0.1' . "\r\n\r\n";
//socket_write($socket, $request);
//
//socket_close($socket);

if(!$socket) {
    echo $errno . "\n" . $errstr;
} else {
    $connection = stream_socket_accept($socket);
    
    fwrite($connection, "Data is sent");
    
    fclose($connection);
    
    echo "\nClosed\n";
}