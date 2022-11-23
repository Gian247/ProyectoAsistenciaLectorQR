<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=lectorqr",
			            "root",
			            "1234");

		$link->exec("set names utf8");

		return $link;

	}

}