<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pation;
use Illuminate\Support\Facades\DB;
use App\DataTables\StudentDataTable;
use Illuminate\Support\Facades\App;


class PationController extends Controller
{
    public function loginsubmit(Request $request)
    {
        $p = DB::table('pation')->where('password', $request->password)->first();
        if ($p == null) {
            return back()->with('notfound', 'this pation not found');
        } else
            return view('home');
    }
    public function enarr($lang)
    {
        App::setLocale($lang);
        return view('home');
    }

    public function dorpzone()
    {
        return view('addphoto');
    }
    public function dorpzoneSubmit(Request $request)
    {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('img'), $imageName);
        return response()->json(['success' => $imageName]);
    }
    public function addpation()
    {
        return view('pationview');
    }
    public function storepation(Request $request)
    {
        $name = $request->name;
        $password = $request->password;
        $phone = $request->phone;
        $address = $request->address;
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);
        // $p =new pation();
        // $p->name = $name;
        // $p->password = $password;
        // $p->phone = $phone;
        // $p->address = $address;
        // $p->image = $imageName;
        // $p->save();
        DB::table('pation')->insert([
            'name' => $name,
            'password' => $password,
            'phone' => $phone,
            'phone' => $address,
            'image' => $image,
        ]);

        return back()->with('success_added', 'Student record has been inserted');
    }

    public function pationall()
    {
        $pations = DB::table('pation')->get();
        return view('allpation', compact('pations'));
    }
    public function editStudent($id)
    {
        $student = pation::find($id);
        return view('edtipation', compact('student'));
    }
    public function updateStudent(Request $request)
    {
        $name = $request->name;
        $password = $request->password;
        $phone = $request->phone;
        $address = $request->address;
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);
        DB::table('pation')->where('id', $request->id)->update([
            'name' => $name,
            'password' => $password,
            'phone' => $phone,
            'phone' => $address,
            'image' => $image,

        ]);



        // $student = pation::find($request->id);
        // $student->name = $name;
        // $student->image = $imageName;
        // $student->save();
        return back()->with('success_update', 'Pation record has been  updated');
    }

    public function deleteStudent($id)
    {
        $p = pation::find($id);
        // unlink(public_path('images').'/'.$p->profileimage );
        $p->delete();
        return back()->with('success_delete', 'Pation record has been  delete');
    }
    public function singlepation(Request $request)
    {
        $p = DB::table('pation')->where('id', $request->id)->first();
        return view('singlepation', compact('p'));
    }
}
