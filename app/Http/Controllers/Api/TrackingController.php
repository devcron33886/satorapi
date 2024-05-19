<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TrackingResource;
use App\Models\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index()
    {
        return new TrackingResource(Tracking::with(['device'])->paginate(50));
    }
}
