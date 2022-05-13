<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctors;
use App\DataTables\DoctorsDataTable;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function adddoc(){
        return view('adddoc');
    }
    public function storeStudent(Request $request){
        $name=$request->name;
        $specialist=$request->specialist;
        $image=$request->file('file');
        $imageName=time(). '.' .$image->extension();
        $image->move(public_path('image'),$imageName);
        $d =new Doctors();
        $d->name = $name;
        $d->specialist = $specialist;
        $d->profileimage = $imageName;
        $d->save();
        return back()->with('success_added','Doctors record has been inserted');
    }
    public function doctor(){
        $d=Doctors::all();
        return view('alldoc',compact('d'));
    }
    public function detbyid($id){
        $d=DB::table('doctors')->where('id', $id)->first();
        //$d =Doctors::find('id',$id);
        return view('singledoc', compact('d'));
    }
    public function deleteDoctor($id){
        DB::table('doctors')->where('id', $id)->delete();
        return back()->with('success_delete','Doctors record has been  delete');

    }
    public function edit($id){
        $d = DB::table('doctors')->where('id', $id)->first();
        return view('editdoc', compact('d'));
    }
    public function updatedoc(Request $request){
        // DB::table('doctors')->where('id', $request->id)->update([
        //     'name'=>$request->name,
        //     'profileimage'=>$request->profileimage,
        //     'specialist'=>$request->specialist,
        // ]);
        // $name=$request->name;
        // $specialist	=$request->specialist	;
        // $image=$request->file('profileimage');
        // $imageName=time(). '.' .$image->extension();
        // $image->move(public_path('images'),$imageName);
        // $d = Doctors::find($request->id);
        // $d->name = $name;
        // $d->profileimage = $image;
        // $d->specialist	 = $specialist	;
        // $d->save();

        //  return back()->with('success_update','Doctor record has been  updated');
        $name=$request->name;
        $specialist=$request->specialist;
        $image=$request->file('file');
        $imageName=time(). '.' .$image->extension();
        $image->move(public_path('image'),$imageName);
        $d = Doctors::find($request->id);
        $d->name = $name;
        $d->specialist = $specialist;
        $d->profileimage = $imageName;
        $d->save();
        return back()->with('success_update','Doctor record has been  updated');


    }

    public function gallery(){
        return view('gallary');
    }

}
