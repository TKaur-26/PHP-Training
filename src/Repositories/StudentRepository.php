<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository
{
    public function getStudent(): Student
    {
        return new Student(1, "Tav");
    }
}
