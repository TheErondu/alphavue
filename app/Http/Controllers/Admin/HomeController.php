<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use DOMDocument;
use Illuminate\Http\Request;
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
        libxml_use_internal_errors(true);
        // Parse the HTML content to extract marked sections
        $sections = [];
        $doc = new DOMDocument;
        //dd($htmlContent);
        $doc->loadHTML($htmlContent);
        $sectionsElements = $doc->getElementsByTagName('div'); // Use the custom element, e.g., 'div'
        foreach ($sectionsElements as $element) {
            $sectionIdentifier = $element->getAttribute('data-section');
            $sectionContent = $doc->saveHTML($element);
            $sections[$sectionIdentifier] = $sectionContent;
        }

        // Pass the sections to the view
        return view('admin.homepage.edit', ['sections' => $sections]);
    }

    public function updateSections(Request $request)
{
    // Validate the incoming data if needed
    $validatedData = $request->validate([
        'section_identifiers' => 'array',
        'section_contents' => 'array',
    ]);

    // Get the submitted section identifiers and contents
    $sectionIdentifiers = $request->input('section_identifiers', []);
    $sectionContents = $request->input('section_contents', []);

    // Get the page_id from the request
    $pageName = "Home";

    // Use firstOrCreate to find or create the page based on page_name
    $page = Page::firstOrCreate(['name' => $pageName], ['content' => json_encode([])]);

    // Get the existing content as a JSON object
    $content = json_decode($page->content, true) ?: [];

    // Update the sections in the content JSON object
    foreach ($sectionIdentifiers as $index => $identifier) {
        $content[$identifier] = $sectionContents[$index];
    }

    // Save the updated content back to the page
    $page->name = $pageName;
    $page->content = json_encode($content);
    $page->save();

    // Redirect back or to a specific page after saving
    return redirect()->back()->with('success', 'Sections updated successfully');
}
}
