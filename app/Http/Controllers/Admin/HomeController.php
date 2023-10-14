<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DOMDocument;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\View\View as ViewContract;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index(Request $request): ViewContract
    {
        // Read the Blade view and capture the HTML content
        $htmlContent = view('welcome')->render();

        // Parse the HTML content to extract marked sections
        $sections = [];
        $doc = new DOMDocument;
        dd($htmlContent);
        $doc->loadHTML($htmlContent);
        $sectionsElements = $doc->getElementsByTagName('div'); // Use the custom element, e.g., 'div'
        foreach ($sectionsElements as $element) {
            $sectionIdentifier = $element->getAttribute('data-section');
            $sectionContent = $doc->saveHTML($element);
            $sections[$sectionIdentifier] = $sectionContent;
        }

        // Pass the sections to the view
        return view('admin.html_editor', ['sections' => $sections]);
    }

}
