<?php

require_once('connect.php');

$result = $_POST['step'] + $_POST['i'];

$sql = "UPDATE
					`userdata`
				SET
					`step` = '". $db->real_escape_string( $result ) ."'
				WHERE
					`nom` = '". $_POST['name'] ."';";



if ( !( $db->query( $sql ) ) ) {
    die( 'echec' );
}


echo json_encode( $result );

