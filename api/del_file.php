<?php

include_once '../db.php';

$id=$_GET['id'];
$file=find('file',$id)['name'];

del('files',$id);

unlink('../imgs/'.$file);


 header('location:../manage.php');