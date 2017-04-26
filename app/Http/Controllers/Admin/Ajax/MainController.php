<?php

namespace App\Http\Controllers\Admin\Ajax;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Http\Controllers\Controller;
use App\Page;

class MainController extends Controller
{
    public function deleteObject(Request $request)
    {
        if(!empty($request->object_alias) && !empty($request->object_id))
        {
            if($request->object_alias == 'page')
            {
                $page = Page::find($request->object_id);
                $file = File::delete(base_path('resources/views/site/pages/' . $page->slug . '.blade.php'));
                
                if($file) $page->delete();
            }
        }
        
        return 'success';
    }
}
