<?php
require_once 'config/db.php';



function getAllBook() 
{
	global $db;
	$data = $db->prepare('SELECT * FROM livre');
	$data->execute();
	$result = $data->fetchAll();
	return $result;

}



function getBook(int $id)
{
	global $db;
	$data = $db->prepare('SELECT * FROM livre where id=?');
	$data->execute([$id]);
	$result = $data->fetch();
	return $result;
}



function getAuthor(int $id)
{
	global $db;
	$data = $db->prepare('SELECT * FROM author WHERE id = ?');
	$data->execute([$id]);
	$result = $data->fetch();
	return $result;
}