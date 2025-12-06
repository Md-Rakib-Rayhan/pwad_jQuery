<?php


$id = $_POST['id'];
$districts = array(1=>["Sirajganj", "Bogura"], 2=>["Narayanganj", "Gazipur"], 3=>["Rangamati", "cox's bazar"], 4=>["barisal"]);

$list = $districts[$id];
foreach($list as $datas){
    echo "<option>$datas</option>";
}

?>