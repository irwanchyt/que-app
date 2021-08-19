<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use \RealRashid\SweetAlert\Facades\Alert;


class CategoryController extends Controller
{

    public function index(){

        $category = Category::all();

        return view('pages.category.add',['category'=>$category]);
    }

    public function store(Request $request){

        $this->validate($request,[

            'name'=>'required|string|max:200',
            'initial'=>'required|string|max:2',

        ]);

        try{

            $category = new Category;

            $category->name = $request->name;
            $category->initial = $request->initial;

            $category->save();


        }catch(\Exception $e){

            Alert::error('Gagal Tambah Admin');
            return redirect()->back();

        }

        Alert::success(' Data Berhasil Di tambah ', 'klik tombol ok');
        return back();

    }

    public function edit($id){

        $category = Category::findOrFail($id);

        return view('pages.category.edit',['category'=>$category]);

    }

    public function update(Request $request,$id){

        $category = Category::findOrFail($id);

        $this->validate($request,[

            'name'=>'required|string|max:200',
            'initial'=>'required|string|max:2',

        ]);

        try{



            $category->name = $request->name;
            $category->initial = $request->initial;

            $category->update();


        }catch(\Exception $e){

            Alert::error('Gagal Tambah Admin');
            return redirect()->back();

        }

        Alert::success(' Data Berhasil Di Update ', 'klik tombol ok');
        return redirect()->route('category.index');


    }

    public function destroy($id){

        $category = Category::findOrFail($id);

        try{


            $category->delete();


        }catch(\Exception $e){

            Alert::error('Gagal Dihapus Admin');
            return redirect()->back();

        }

        Alert::success(' Data Berhasil Di Hapus ', 'klik tombol ok');
        return redirect()->route('category.add');

    }



}
