<?php
include_once "people.php";
    function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents("data.json", $dataJson);
    }

    function loadData()
    {
        $dataJson = file_get_contents("data.json");
        $data = json_decode($dataJson, true);
        return $data;
    }
    function addNewPeople($request)
    {
        $people = loadData();
        $peoples = array(
            "name" => $request["name"],
            "age" => $request["age"],
        );
        array_push($people, $peoples);
        saveData($people);
    }

    function deletePeople($index)
    {
        $people = loadData();
        array_splice($people, $index, 1);
        saveData($people);
    }

//    function sort()
//    {
//        $people = loadData();
//        usort($people, function ($a, $b) {
//            return $a->getAge() > $b->getAge();
//        });
//        $this->saveData($people);
//    }

    function searchName($name)
    {
        foreach ($this->name as $people) {
            if ($people->getName() == $name) {
                echo 'Tên: ' . $people->getName() . " - " . 'Tuổi: ' . $people->getAge();
                return true;
            }
        }
        echo "Không tìm thấy.";
    }
