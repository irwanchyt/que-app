<?php

namespace App\Http\Controllers;

use App\User;
use App\Counter;
use App\Visitor;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\Eloquent\Builder;

class VisitorController extends Controller
{
    public function index(){

        $visitor = Visitor::whereHas('counter', function(Builder $query) {
                $query->where('user_id', auth()->id());
        })->get();

        // return $visitor;
        return view('pages.admin.visitor.index',['visitor'=>$visitor]);
    }

    public function store(Request $request){

        $this->validate($request,[

            'name'   => 'required',
            'age'    => 'required',
            'gender' => 'required',
            'phone'  => 'required',
            'alamat' => 'required'

        ]);
        try{

            $visitor             = new Visitor;
            $visitor->counter_id = $request->counter_id;
            $visitor->name       = $request->name;
            $visitor->age        = $request->age;
            $visitor->gender     = $request->gender;
            $visitor->phone      = $request->phone;
            $visitor->alamat     = $request->alamat;

            $visitor->save();

        }catch(\Exception $e){


            Alert::error('Gagal Tambah Visitor');
            return redirect()->back();

        }
        Alert::success(' Data Berhasil Di tambah ', 'klik tombol ok');
        return back();
    }

    public function edit($id){

        $visitor = Visitor::findOrFail($id);

        return view('pages.admin.visitor.edit',['visitor'=>$visitor]);

    }

    public function update(Request $request,$id){

        $visitor = Visitor::findOrFail($id);
        $this->validate($request,[

            'name'   => 'required',
            'age'    => 'required',
            'gender' => 'required',
            'phone'  => 'required',
            'alamat' => 'required'

        ]);

        try{

          
            $visitor->name = $request->name;
            $visitor->age = $request->age;
            $visitor->gender = $request->gender;
            $visitor->phone = $request->phone;
            $visitor->alamat = $request->alamat;

            $visitor->update();

        }catch(\Exception $e){


            Alert::error('Gagal Update Visitor');
            return redirect()->back();

        }
        Alert::success(' Data Berhasil Di update ', 'klik tombol ok');
        return redirect()->route('visitor.index');
    }

    public function destroy($id){

        $visitor = Visitor::findOrFail($id);

        try{

            $visitor->delete();

        }catch(\Exception $e){


            Alert::error('Gagal Hapus Visitor');
            return redirect()->back();

        }
        Alert::success(' Data Berhasil Di Hapus ', 'klik tombol ok');
        return redirect()->route('visitor.index');


    }
}
