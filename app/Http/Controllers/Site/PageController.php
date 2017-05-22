<?php

namespace App\Http\Controllers\Site;

use App\Http\Models\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function showPage($slug = '')
    {
        if(empty($slug)) $slug = \Config::get('constants.MAIN_PAGE');
        $page = Page::where('slug', $slug)->first();
        
        if(!empty($page))
        {
            $data['content'] = view('site.pages.' . $slug)->render();
            $data['layout'] = $page->layout;

            return view('site.page_render', $data);
        }
        else return abort(404);
    }
}
