<?php

namespace Helious\SeatBusaOnboarding\Http\Controllers;

use Illuminate\Http\Request;
use Seat\Web\Http\Controllers\Controller;
use Helious\SeatBusaOnboarding\Models\Onboarding;

/**
 * Class OnboardingController.
 *
 * Handles onboarding operations such as displaying and editing onboarding content.
 *
 * @package Helious\SeatBusaOnboarding\Http\Controllers
 */
class OnboardingController extends Controller
{
    /**
     * Display the onboarding index view.
     *
     * @return \Illuminate\View\View
     */
    public function index() 
    {
        $content = Onboarding::where('id', 1)->first() ?? '';
        return view('seat-busa-onboarding::index', compact('content'));
    }
    
    /**
     * Display the edit view for onboarding.
     *
     * @return \Illuminate\View\View
     */
    public function edit() 
    {
        $content = Onboarding::where('id', 1)->first() ?? 'Write your markdown content here...';
        return view('seat-busa-onboarding::edit', compact('content'));
    }

    /**
     * Store or update the onboarding content.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeEdit(Request $request)
    {
        // Validate the input
        $request->validate([
            'content' => 'required|string'
        ]);

        // Store the input
        Onboarding::updateOrCreate(
            ['id' => 1], // Assume a single record to update or create
            [
                'last_update_by' => auth()->id(), // Use shorthand for auth user ID
                'content' => $request->content
            ]
        );

        // Redirect back with a success message
        return redirect()
            ->route('seat-busa-onboarding::edit')
            ->with('success', 'Updated successfully');
    }
}
