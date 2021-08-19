<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Alert;

class AdminController extends Controller
{
    
    public function add(){

        $users = User::where('role','Admin')->paginate(4);

        return view('pages.akun.add',['users'=>$users]);
    }

    public function store(Request $request){
        
        $this->validate($request, [
            'name' => 'required|string|max:200',
            'email' => 'required|string|email|max:100',
            'phone' => 'required|string|max:100',
           
        ]);

        try {
            $user= new User;

            $user->name     = strtoupper($request->name);
            $user->email    = ucwords($request->email);
            $user->phone    =  $request->phone;
             $user->password = bcrypt($request->password);
            $user->role = 'Admin';

            $user->save();
        } catch (\Exception $e) {

            Alert::error('Gagal Tambah Admin');
            return redirect()->back();
        }
        Alert::success(' Data Berhasil Di tambah ', 'klik tombol ok');
        return back();
    
    }

    public function edit($id){
        
        $users = User::findOrFail($id); 

        return view('pages.akun.edit',['users'=>$users]);
    }

    public function update(Request $request,$id){

        $user = User::findOrFail($id); 

        $this->validate($request, [
            'name' => 'required|string|max:200',
            'email' => 'required|string|email|max:100',
            'phone' => 'required|string|max:100',
        
        ]);

        try {
          

            $user->name     = strtoupper($request->name);
            $user->email    = ucwords($request->email);
            $user->phone    =  $request->phone;
            $user->role     = 'Admin';

            $user->update();
        } catch (\Exception $e) {

            Alert::error('Gagal Update Admin');
            return redirect()->back();
        }
        Alert::success(' Data Berhasil Di Update ', 'klik tombol ok');
        return redirect()->route('admin.add');
    }

    public function destroy($id){

        $users = User::findOrFail($id); 

        try {
           

            $users->delete();
        } catch (\Exception $e) {

            Alert::error('Gagal Hapus Admin');
            return redirect()->back();
        }
        Alert::success(' Data Berhasil Di Hapus ', 'klik tombol ok');
        return back();

    }
}
