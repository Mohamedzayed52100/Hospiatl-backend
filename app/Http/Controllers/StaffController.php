<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public static function getall(){
        $all=Staff::all();

        return view('allstaff', compact('all'));
    }
    public function insertsatff(){
        return view('addstaff');
    }
    public function storeStaff(Request $request){
        $name=$request->name;
        $kind=$request->kind;
        $image=$request->file('file');
        $imageName=time(). '.' .$image->extension();
        $image->move(public_path('image'),$imageName);
        $d =new Staff();
        $d->name = $name;
        $d->kind = $kind;
        $d->profileimage = $imageName;
        $d->save();
        return back()->with('success_added','Staff record has been inserted');
    }

    public function kind($kind){
        $all=DB::table('staff')->where('kind',$kind)->get();
        return view('allstaff', compact('all'));


    }

}
