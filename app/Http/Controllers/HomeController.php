<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Services\FeaturesService;
use App\Services\ServicesService;
use App\Services\SubscribersService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ServicesService $service, FeaturesService $feature, SubscribersService $subscriber ,Request $request)
    {
        //
        $countService = $service->count();
        $countFeature = $feature->count();
        $countSubscriber = $subscriber->count();
        return view('admin.index', get_defined_vars());
    }
}
