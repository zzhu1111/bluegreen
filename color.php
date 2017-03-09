<?php
$deployment = getenv("COLOR");
$data = [ 'color' => $deployment ];
echo json_encode( $data );
http_response_code(200);
?>
