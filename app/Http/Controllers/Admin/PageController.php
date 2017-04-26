<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Page;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    //List of static pages
    public function listPages()
    {
        $pages = Page::all();
        
        return view('admin.pages.page_list', ['pages' => $pages]);
    }
    
    //Edit single page
    public function editPage($page_name = '')
    {
        if(!empty($page_name))
        {
            $content = File::get(base_path('resources/views/site/pages/' . $page_name . '.blade.php'));
            $slug = $page_name;
        }
        else
        {
            $content = '';
            $slug = '';
        }
        
        $layouts_files = File::files(base_path('resources\views\site\layouts'));
        
        if(!empty($layouts_files))
        {
            foreach ($layouts_files as $filename)
            {
                if(!empty($filename)) $layouts[] = basename($filename, '.blade.php');
            }
        }
        
        $fields = [
            'old_slug' => [
                'type' => 'hidden',
                'value' => $slug
            ],
            
            'slug' => [
                'type' => 'text',
                'label' => 'URL страницы',
                'placeholder' => 'Введите URL страницы',
                'value' => $slug,
                'required' => true
            ],
            
            'layout' => [
                'type' => 'select',
                'label' => 'Шаблон страницы',
                'options' => $layouts,
                'valueid' => false,
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
        
        return view('admin.pages.page_single', ['page' => $slug, 'fields' => $fields]);
    }
    
    //Save single page
    public function savePage(Request $request)
    {
        $this->validate($request, [
            'slug' => 'required',
            'layout' => 'required'
        ]);
        
        if(!empty($request->old_slug))
        {
            if($request->old_slug != $request->slug)
            {
                $this->validate($request, [
                    'slug' => 'unique:pages,slug'
                ]);
                
                $file = File::move(base_path('resources/views/site/pages/' . $request->old_slug . '.blade.php'), base_path('resources/views/site/pages/' . $request->slug . '.blade.php'));
            }
            else $file = File::put(base_path('resources/views/site/pages/' . $request->slug . '.blade.php'), $request->content);
            
            if($file)
            {
                Page::where('slug', $request->old_slug)->update([
                    'slug' => $request->slug,
                    'layout' => $request->layout
                ]);
            }
        }
        else
        {
            $this->validate($request, [
                'slug' => 'unique:pages,slug'
            ]);
            
            $file = File::put(base_path('resources/views/site/pages/' . $request->slug . '.blade.php'), $request->content);
            
            if($file)
            {
                Page::create([
                    'slug' => $request->slug,
                    'layout' => $request->layout
                ]);
            }
        }
        
        return redirect('admin/pages');
    }
}
