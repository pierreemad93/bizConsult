<?php

namespace App\Services;

use App\Models\Service;

class ServicesService
{
    protected $service ;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
    public function count()
    {
       return $this->service->count();
    }
}
