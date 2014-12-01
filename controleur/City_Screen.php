<?php
/*

	include '../include/connexion_PDO'

	$stockfactory = $connexion ->prepare("SELECT Factory FROM city WHERE City_id = '%city_id%' ");
	$sqlfactory = $stockfactory -> execute ();
	$stockbarracks  = $connexion ->prepare("SELECT Barracks FROM city WHERE City_id = '%city_id%' ");
	$sqlbarracks = $stockbarracks -> execute ();
	$stockwall = $connexion ->prepare("SELECT Wall FROM city WHERE City_id = '%city_id%' ");
	$sqlwall = $stockwall -> execute ();
	$stockspybarracks = $connexion ->prepare("SELECT Spy_Barracks FROM city WHERE City_id = '%city_id%' ");
	$sqlspybarracks = $stockspybarracks -> execute ();
	
	if ($sqlfactory > 0)
	{
		echo "<img src="../image/Factory.jpg"/>"
	}
	
	if ($sqlbarracks > 0)
	{
		echo "<img src="../image/Barracks.jpg"/>"
	}
	
	if ($sqlwall > 0)
	{
		echo "<img src="../image/Wall.jpg"/>"
	}
	
	if ($sqlspybarracks > 0)
	{
		echo "<img src="../image/Spy_Barracks.jpg"/>"
	}
*/
	include '../include/connexion_PDO'
	
	Public $IsFactory = False;
	Public $IsBarracks = False;
	Public $IsWall = False;
	Public $IsSpy_Barracks = False;
	
	function Display_Factory
	{
		$stockfactory = $connexion ->prepare("SELECT Factory FROM city WHERE City_id = '%city_id%' ");
		$sqlfactory = $stockfactory -> execute ();
		
		if ($sqlfactory > 0)
		{
			$IsFactory = True;
		}
	}
	
	function Display_Barracks
	{
		$stockbarracks  = $connexion ->prepare("SELECT Barracks FROM city WHERE City_id = '%city_id%' ");
		$sqlbarracks = $stockbarracks -> execute ();
		if ($sqlbarracks > 0)
		{
			$IsBarracks = True;
		}
	}
	
	function Display_Wall
	{
		$stockwall = $connexion ->prepare("SELECT Wall FROM city WHERE City_id = '%city_id%' ");
		$sqlwall = $stockwall -> execute ();
		if ($sqlwall > 0)
		{
			$IsWall = True;
		}
	}
	
	function Display_Spy_Barracks
	{
		$stockspybarracks = $connexion ->prepare("SELECT Spy_Barracks FROM city WHERE City_id = '%city_id%' ");
		$sqlspybarracks = $stockspybarracks -> execute ();
		if ($sqlspybarracks > 0)
		{
			$IsSpy_Barracks = True;
		}
	}
	
?>