<?php
$inputJSON = file_get_contents('php://input');
$data = json_decode($inputJSON, True);

$connect = new PDO('mysql:host=localhost;dbname=bookconstr_db;charset=utf8', 'root', 'Hesaga0808!');

$textur = $connect->query('SELECT textur_name FROM texturs WHERE color_id=' . $data['color_id'] . ' AND type=' . $data['type_id'])->fetchall();

echo json_encode($textur);
