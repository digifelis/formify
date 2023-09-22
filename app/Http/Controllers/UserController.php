<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;
class UserController extends Controller
{
    //    
    /**
     * formadd
     *
     * @return void
     */
    public function formadd(){
        return view('user.formadd');
    }
    
    /**
     * add
     *
     * @param  mixed $request
     * @return void
     */
    public function add(Request $request){
        /* check if request is valid */
        $request->validate([
            'name' => 'required',
            'save_data' => 'required',
            'email'=>'required',
            'display_name' => 'required',
        ]);
    
        /* If validation fails, Laravel will automatically redirect back with error messages */
    
        /* If validation passes, proceed with saving the form data */
        $form = new FormData();
        $form->name = $request->name;
        $form->save_data = $request->save_data;
        $form->display_name = $request->display_name;
        $form->user_id = auth()->user()->id;
        $form->email = $request->email;
        $form->idhash = md5($request->name . $request->save_data . $request->display_name . auth()->user()->id);
        $form->save();
    
        $request->session()->flash('message', 'Form has been created successfully!');
        return redirect()->route('dashboard');
    }
    public function editform($id){
        $form = FormData::where('id',$id)
                        ->where('user_id', auth()->user()->id)->first();
        
        if (!$form) {
            return redirect()->route('dashboard')->with('error', 'Form not found.');
        }
        
        return view('user.formedit', ['form' => $form]);
    }
        
    /**
     * edit
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function edit(Request $request, $id){
        $request->validate([
            'name' => 'required',
           
            'display_name' => 'required',
        ]);

        $form = FormData::where('id',$id)
                        ->where('user_id', auth()->user()->id)->first();
        $form->name = $request->name;
        $form->save_data = $request->save_data;
        $form->display_name = $request->display_name;
        $form->email = $request->email;
        $form->save();
        //return view('user.formedit');
        $request->session()->flash('message', 'Form has been updated successfully!');
        return redirect()->route('dashboard');
    }    
    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id){
        $form = FormData::where('id',$id)
                        ->where('user_id', auth()->user()->id)->first();
        $form->delete();
        return redirect()->route('dashboard');
    }    
    /**
     * index
     *
     * @param  mixed $request
     * @return void
     */
    public function index(Request $request)
    {
        $forms = FormData::where('user_id', auth()->user()->id)->get();
        return view('dashboard', ['forms' => $forms]);
    }


}
