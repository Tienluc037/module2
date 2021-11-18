<?php
//$arr = [
//    ["name" => "a", "age" => 18, "address" => "hn"],
//    ["name" => "b", "age" => 17, "address" => "hn"],
//    ["name" => "c", "age" => 16, "address" => "hn"],
//    ["name" => "d", "age" => 19, "address" => "hn"],
//];

function saveData($data){
    $dataJson = json_encode($data); //chuyển về dạng json
    file_put_contents("data.json",$dataJson); //pus vào file data.json
}
function loadData() {
      $dataJson = file_get_contents("data.json"); //lấy dữ liệu từ file ra cho vào bien
    $data = json_decode($dataJson,true); //decode datajson về dạng mảng và return $data
    return $data;
}
 function addNewArr($request) {
    $arr = loadData();
    $arr1 = array(
        "name" => $request["name"],
        "age" => $request["age"],
        "address" => $request["address"]
    );
    array_push($arr,$arr1);
    saveData($arr);
 }
 function deleteArr($index) {
    $arr = loadData();
     array_splice($arr,$index,1);
     saveData($arr);
 }
