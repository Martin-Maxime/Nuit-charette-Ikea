<?php 
    try{
        $db = new mysqli( 'localhost' , 'root' , '' , 'game' );
    }catch (mysqli_sql_exception $e){
        die('probleme de connection');
	}
