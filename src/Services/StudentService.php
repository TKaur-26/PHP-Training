<?php

namespace App\Services;

use App\Repositories\StudentRepository;

class StudentService
{
    public function __construct(
        private StudentRepository $repository
    ) {}

    public function getStudentName(): string
    {
        return $this->repository->getStudent()->getName();
    }
}
