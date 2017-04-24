<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    //List of static pages
    public function listPages()
    {
        $pages = File::allFiles(base_path('resources\views\site\static_pages'));
        
        return view('admin.static_pages.page_list', ['pages' => $pages]);
    }
    
    //Edit single page
    public function editPage($page_name = '')
    {
        if(!empty($page_name))
        {
            $content = File::get(base_path('resources/views/site/static_pages/' . $page_name . '.blade.php'));
            $page = $page_name;
        }
        else
        {
            $content = '';
            $page = '';
        }
        
        $fields = [
            'old_name' => [
                'type' => 'hidden',
                'value' => $page
            ],
            
            'new_name' => [
                'type' => 'text',
                'label' => 'Название страницы',
                'placeholder' => 'Введите название страницы',
                'value' => $page,
                'required' => true
            ],
            
            'content' => [
                'type' => 'textarea',
                'label' => 'Код страницы',
                'placeholder' => 'Введите код страницы',
                'value' => $content,
                'row_count' => 25
            ],
        ];
        
        return view('admin.static_pages.page_single', ['page' => $page, 'fields' => $fields]);
    }
    
    //Save single page
    public function savePage(Request $request)
    {
        $this->validate($request, [
            'new_name' => 'required'
        ]);
        
        if(!empty($request->old_name))
        {
            if($request->old_name != $request->new_name) ;//1;
            else File::put(base_path('resources/views/site/static_pages/' . $request->new_name . '.blade.php'), $request->content);
        }
        
        return redirect('admin/pages');
    }
}
