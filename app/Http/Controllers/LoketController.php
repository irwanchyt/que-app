<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Counter;
use App\Category;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;

class LoketController extends Controller
{

    public function index(){

        $counter = Counter::all();
        $category= Category::all();
        $users = User::where('role','Admin')->get();

        return view('pages.loket.add',['counter'=>$counter,'category'=>$category,'users'=>$users]);
    }

    public function store(Request $request){

        $this->validate($request,[

            'name' => 'required|unique:counters,name,except,id',
            'category_id' => 'required',
        ]);

        try{

            $counter = new Counter;

            $counter->name = $request->name;
            $counter->category_id = $request->category_id;
            $counter->user_id = $request->user_id;

            $counter->save();


        }catch(\Exception $e){

            Alert::error('Gagal Tambah Loket');
            return redirect()->back();

        }

        Alert::success(' Data Berhasil Di tambah ', 'klik tombol ok');
        return redirect()->route('loket.index');

    }

    public function edit($id){

        $counter = Counter::findOrFail($id);
        $category = Category::all();
        $users = User::where('role','Admin')->get();

        return view('pages.loket.edit',['counter'=>$counter,'category'=>$category,'users'=>$users]);
    }

    public function update(Request $request,$id){

        $counter = Counter::findOrFail($id);
        $this->validate($request,[

            'name'        => 'required',
            'category_id' => 'required',
            'user_id'    => 'required',
        ]);

        try{

            $counter->name = $request->name;
            $counter->category_id = $request->category_id;
            $counter->user_id = $request->user_id;

            $counter->update();


        }catch(\Exception $e){

            Alert::error('Gagal Update Loket');
            return redirect()->back();

        }

        Alert::success(' Data Berhasil Di Update ', 'klik tombol ok');
        return redirect()->route('loket.index');

    }


    public function destroy($id){

        $counter = Counter::findOrFail($id);

        try{

            $counter->delete();

        }catch(\Exception $e){

            Alert::error('Gagal Hapus Loket');
            return redirect()->back();

        }

        Alert::success(' Data Berhasil Di Hapus ', 'klik tombol ok');
        return back();

    }



}
