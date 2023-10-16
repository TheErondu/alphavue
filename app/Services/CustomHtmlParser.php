<?php

namespace App\Services;

use App\Models\Page;
use DOMDocument;

class CustomHtmlParser
{

    public static function getPageSections(string $pageName, string $view): array
    {
        // Read the Blade view and capture the HTML content
        $dbData = Page::where('name', $pageName)->first();
        if ($dbData) {
            $pageData = json_decode($dbData->content);
            $htmlContent = view($view)->with('pageData', $pageData)->render();
        } else {
            $htmlContent = view($view)->render();
        }
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

        return $sections;

    }

}
