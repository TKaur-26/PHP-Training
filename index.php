<?php

require __DIR__ . '/vendor/autoload.php';

use App\Services\StudentService;

$service = new StudentService(
    new \App\Repositories\StudentRepository()
);

echo $service->getStudentName();
