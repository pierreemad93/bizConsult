<?php

namespace App\Services;

use App\Models\Feature;

class FeaturesService
{
    protected $feature;
    public function __construct(Feature $feature)
    {
        $this->feature = $feature;
    }
    public function count()
    {
        return $this->feature->count();
    }
}
