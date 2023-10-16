<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contact()
    {
        //
    }

    /**
     * Show the WhoWeArePage.
     */
    public function ShowWhoWeArePage()
    {
        return view('about.who_are_we');
    }

    /**
     * Show the DueDiligencePage
     */
    public function ShowDueDiligencePage()
    {
        return view('about.due_dilligence');
    }

    /**
     * Display the FAQs page
     */
    public function showFaqsPage()
    {
        return view('about.faqs');
    }

    /**
     * Display the ContactUs page
     */
    public function showContactUsPage()
    {
        return view('contact.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
