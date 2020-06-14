<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost:3308;dbname=pos",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}