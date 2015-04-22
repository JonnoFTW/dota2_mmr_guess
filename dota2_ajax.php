<?php
$id = $_GET['id'];
if(!is_numeric($id)) {
	echo json_encode(['error'=>'Please specify a valid id']);
} else {
	$key = file_get_contents('STEAM_KEY');
	$json = json_decode(file_get_contents("https://api.steampowered.com/IDOTA2Match_570/GetMatchHistory/V001/?format=JSON&key={$key}&account_id={$id}",true));
	// get all those matches listed, should probably put them in a db for caching...
	$mmr = 0;
	$kills =0
	foreach($json['result']['matches'] as $m) {
		$matchId = $m['match_id'];
		$match = json_decode(file_get_contents("https://api.steampowered.com/IDOTA2Match_570/GetMatchDetails/V001/?format=JSON&key={$key}&match_id={$matchId}"));
		// do some analysis
		$match['result']
	}
	echo json_encode(['current-mmr'=>4,'skill-bracket'=>'good','most-matches'=>332,'total-matches'=>430]);
}
