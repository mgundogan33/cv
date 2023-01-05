<?php

namespace App\Http\Controllers\Admin;

use App\Models\Information;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    public function index()
    {
        $information = Information::select(
            'id',
            'name',
            'email',
            'phone',
            'address',
            'birthday',
            'image'
        )->get();
        return view('admin.information.index', compact('information'));
    }
    public function create()
    {
        return view('admin.information.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'birthday' => 'required',
            'image' => 'required'
        ], [
            'name.required' => 'İsim Alanı Zorunludur.',
            'email.required' => 'Email Alanı Zorunludur.',
            'phone.required' => 'Telefon Alanı Zorunludur.',
            'address.required' => 'Adres Alanı Zorunludur.',
            'birthday.required' => 'Doğum Tarihi Alanı Zorunludur.',
            'image.required' => 'Resim Alanı Zorunludur.'
        ]);

        $image = date('d-m-Y-h-i-s') . '-' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images'), $image);

        Information::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'birthday' => $request->birthday,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'github' => $request->github,
            'linkedin' => $request->linkedin,
            'image' => $image
        ]);

        Toastr::success('İşleminiz Başarıyla Gerçekleşti', 'Başarılı');
        return redirect()->route('admin_information.index');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $information = Information::find($id);
        return view('admin.information.edit', compact('information'));
    }
    public function update(Request $request, $id)
    {
        $information = Information::where('id', $id)->first();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'birthday' => 'required',
            'image' => 'required'
        ], [
            'name.required' => 'İsim Alanı Zorunludur.',
            'email.required' => 'Email Alanı Zorunludur.',
            'phone.required' => 'Telefon Alanı Zorunludur.',
            'address.required' => 'Adres Alanı Zorunludur.',
            'birthday.required' => 'Doğum Tarihi Alanı Zorunludur.',
            'image.required' => 'Resim Alanı Zorunludur.'
        ]);
        if ($request->has('image')) {
            if (file_exists(public_path('images/' . $information->image))) {
                unlink(public_path('images/' . $information->image));
            }

            $image = date('d-m-Y-h-i-s') . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $image);
        }
        
        $information->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'birthday' => $request->birthday,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'github' => $request->github,
            'linkedin' => $request->linkedin,
            // 'image' => $image
            'image' => (isset($image) ? $image : $information->image)
        ]);

        Toastr::success('İşleminiz Başarıyla Gerçekleşti', 'Başarılı');
        return redirect()->route('admin_information.index');
    }
    public function destroy($id)
    {
        $information = Information::find($id);
        $information->delete();

        Toastr::success('Silme İşlemi Gerçekleşti', 'Başarılı');
        return redirect()->route('admin_information.index');
    }
}
