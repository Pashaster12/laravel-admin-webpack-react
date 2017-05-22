<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Models\User;
use Illuminate\Validation\Rule;

use App\FormBuilder\Elements\TextElement;
use App\FormBuilder\Elements\EmailElement;

class AdminController extends Controller
{
    //Change admin account's information
    public function infoAdmin()
    {     
        $fields = [
            new TextElement('login', 'Логин', auth()->user()->login, 'Введите имя учётной записи администратора', true),
            new EmailElement('email', 'Email', auth()->user()->email, 'Введите email администратора', true)
        ];
        
        return view('admin.account', ['fields' => $fields]);
    }
    
    //Save admin's information
    public function saveAdmin(Request $request)
    {
        if(!empty($request))
        {
            $user_id = auth()->user()->id;
            
            if(!empty($request->password))
            {
                $cur_password = auth()->user()->password;
                
                $this->validate($request, [
                    'login' => 'required|max:255|unique:users,id,' . $user_id,
                    'email' => 'required|email|max:255',
                    'password' => 'min:3|max:255',
                    'current_password' => 'min:3|max:255|check_password:' . $cur_password
                ]);
                
                User::first()->update([
                    'login' => $request->login,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                ]);
            }
            else
            {
                $this->validate($request, [
                    'login' => 'required|max:255|unique:users,id,' . $user_id,
                    'email' => 'required|email|max:255'
                ]);
                
                User::first()->update([
                    'login' => $request->login,
                    'email' => $request->email
                ]);
            }
            
            return redirect()->back()->with('success', 'Данные успешно обновлены');
        }
    }
}
