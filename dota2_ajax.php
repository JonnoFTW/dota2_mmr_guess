<?php
$id = $_GET['id'];
if(!is_numeric($id)) {
	echo json_encode(['error'=>'Please specify a valid steam id 64']);
} else {
	$key = file_get_contents('STEAM_KEY');
	$json = json_decode(file_get_contents("https://api.steampowered.com/IDOTA2Match_570/GetMatchHistory/V001/?format=JSON&key={$key}&account_id={$id}"));
	// get all those matches
	echo json_encode(['current-mmr'=>4,'skill-bracket'=>'good','most-matches'=>332,'total-matches'=>430]);
}
