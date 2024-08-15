<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Exception;

class TourDestroyController extends Controller
{
    public function __invoke(Tour $tour)
    {
        try {
            $tour->delete();
            return redirect('/')->with('status', 'Tour deleted!');
            
        } catch (Exception $e) {
            return back()->with('message', $e->getMessage().' !');
        }
    }
}
