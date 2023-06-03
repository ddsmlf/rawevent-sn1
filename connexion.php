<?php

try {
		$db = new PDO('mysql:host=localhost;dbname=rawevents;charset=utf8','root','');
		}
		catch (Exception $e) {
		die('erreur : '.$e->getMessage());
	}


