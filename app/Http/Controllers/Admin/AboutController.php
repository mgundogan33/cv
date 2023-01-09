<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::select(
            'id',
            'title',
            'description',
            'cv',
            'tags',
            'askerlik',
            'dil',
            'ehliyet'
        )->get();
        return view('admin.about.index', compact('about'));
    }
    public function create()
    {
        return view('admin.about.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'askerlik' => 'required',
            'dil' => 'required',
            'ehliyet' => 'required'
        ], [
            'title.required' => 'Başlık Alanı Zorunludur.',
            'description.required' => 'Açıklama Alanı Zorunludur.',
            'tags.required' => 'Tag Alanı Zorunludur.',
            'askerlik.required' => 'Askerlik Alanı Zorunludur.',
            'dil.required' => 'Dil Tarihi Alanı Zorunludur.',
            'ehliyet.required' => 'Ehliyet Alanı Zorunludur.'
        ]);


        // $about['tags'] =json_encode ($request->tags);
        // $about = About::create($about);

        About::create([
            'title' => $request->title,
            'description' => $request->description,
            'tags' => json_encode($request->tags),
            'askerlik' => $request->askerlik,
            'dil' => $request->dil,
            'ehliyet' => $request->ehliyet,
            'cv' => $request->cv
        ]);

        Toastr::success('İşleminiz Başarıyla Gerçekleşti', 'Başarılı');
        return redirect()->route('admin_about.index');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.about.edit', compact('about'));
    }
    public function update(Request $request, $id)
    {
        $about = About::where('id', $id)->first();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'askerlik' => 'required',
            'dil' => 'required',
            'ehliyet' => 'required'
        ], [
            'title.required' => 'Başlık Alanı Zorunludur.',
            'description.required' => 'Açıklama Alanı Zorunludur.',
            'tags.required' => 'Tag Alanı Zorunludur.',
            'askerlik.required' => 'Askerlik Alanı Zorunludur.',
            'dil.required' => 'Dil Tarihi Alanı Zorunludur.',
            'ehliyet.required' => 'Ehliyet Alanı Zorunludur.'
        ]);
        
        // if(!isset($tags)){
           
        // }

        $about->update([
            'title' => $request->title,
            'description' => $request->description,
            'tags' => $request->tags,
            'askerlik' => $request->askerlik,
            'dil' => $request->dil,
            'ehliyet' => $request->ehliyet,
            'cv' => $request->cv
        ]);

        Toastr::success('Güncelleme İşleminiz Başarıyla Gerçekleşti', 'Başarılı');
        return redirect()->route('admin_about.index');

    }
    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();

        Toastr::success('Silme İşlemi Gerçekleşti', 'Başarılı');
        return redirect()->route('admin_about.index');
    }
}
