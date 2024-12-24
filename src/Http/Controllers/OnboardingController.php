<?php

namespace Helious\SeatBusaOnboarding\Http\Controllers;

use Seat\Web\Http\Controllers\Controller;

use Helious\SeatBusaOnboarding\Models\FATFleets;

/**
 * Class HomeController.
 *
 * @package Author\Seat\YourPackage\Http\Controllers
 */
class OnboardingController extends Controller
{
    
    public function index() 
    {
        return view('seat-busa-onboarding::index');
    }
    
    public function edit() 
    {
        return view('seat-busa-onboarding::edit');
    }

}