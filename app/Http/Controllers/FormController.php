<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
Use Redirect;
use Illuminate\Support\Facades\Validator;





class FormController extends Controller
{
    public function index(){
        //listar registros

        $registros = Form::paginate(2);

        return view('form.index', compact('registros'));
    }

    public function create(Form $form){

        
        

        return view('form.create', compact('form'));
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'surname' => 'required|max:255',
            'document_type' => 'required|unique_with:forms,document_number',
            'document_number' => 'required|min:6,max:15',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('form.create')
                        ->withErrors($validator)
                        ->withInput();
        }
    
        


        $user = new User();
        $user->name = $request->first_name .' '. $request->second_name;
        $user->email = $request->email;
        $user->email_verified_at = now();
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(10);
        $user->save();


        $latestUser = User::latest('id')->first();
        $user_id = $latestUser->id;
        
        

        $form = new Form();
        $form->second_name = $request->second_name;
        $form->surname = $request->surname;
        $form->second_surname = $request->second_surname;
        $form->document_type = $request->document_type;
        $form->document_number = $request->document_number;
        $form->user_id = $user_id;

        $form->save();
        
        

        return redirect()->route('form.index')->with('info', 'Registro creado con exito, *' . $user->name .' '.$user->form->surname.' - '.$user->form->document_type.': '.$user->form->document_number );
        
    
    }
}

