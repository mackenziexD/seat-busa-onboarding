<?php

namespace Helious\SeatBusaOnboarding\Http\Controllers;

use Seat\Web\Http\Controllers\Controller;
use Helious\SeatBusaOnboarding\Models\Onboarding;
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

    public function storeEdit(){
        // validate the input

        // store the input

        // return to seat-busa-onboarding::edit with success message
    }

}