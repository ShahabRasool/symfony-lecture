<?php

namespace App\Repository;

class StudentRepository{
    private array $student = [
        "1"=> "shahab",
        "2" => "ali",
        "3" => "reza",
        
    ];
    public function getStudent(){
        return $this->student;
    }

    public function getStudentId($id){
    return ['id' => $id, 'name' => $this->student[$id] ?? 'Not Found'];
    }
}