<?php 


$connection = new mysqli('localhost', 'root', '', 'ajax-crud');


$name = $_POST['name'];
$email = $_POST['email'];
$cell = $_POST['cell'];



$photo_name = $_FILES['photo']['name'];
$photo_tmp_name = $_FILES['photo']['tmp_name'];
$unq_name = md5(time().rand().$photo_tmp_name);

move_uploaded_file($photo_tmp_name, 'photos/'.$unq_name);

$sent = $connection -> query("INSERT INTO users (name, email, cell, photo) VALUES ('name', 'email', '$cell', '$unq_name') ");


if($sent){
	echo '<p class="alert alert-success">User added .... <button class="close" data-dismiss="alert"> &times; </button> </p>';
}