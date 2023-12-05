<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\UsersLumina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    public function getPhotoCarousel($id)
    {
        $data = Carousel::where('id',$id)->first();
        return response()->file(storage_path('/app/'.$data->url_image));
    }

    public function index(){
        $datacarousel = Carousel::all();
        foreach ($datacarousel as $key) {
            $key->url_image = env('APP_URL').'/carousel/'.$key->id;
        }
        return view('index',compact('datacarousel'));
    }

    public function form_login(Request $request){
        $input = $request->all();
        $datausers = UsersLumina::all();
        foreach($datausers as $e){
            if($e->username == $input['username'] && $e->password == $input['password']){
                $request->session()->put('userLogin',$e);
                return redirect('/admin');
            }else{
                return redirect('/login');
            }
        }
    }

    public function showCarousel(){
        $datacarousel = Carousel::get();
        foreach ($datacarousel as $key) {
            $key->url_image = env('APP_URL').'/carousel/'.$key->id;
        }
        return view('admin_utility_carousel',compact('datacarousel'));
    }

    public function createCarousel(Request $request){
        $input = $request->all();
        $count = Carousel::max('id')+1;
        if($request->hasFile('imagefile')){
            $saveFile = 'carousel_'.$count.'.jpg';
            $path = $request->file('imagefile')->storeAs('/public/Carousel', $saveFile);
        }
        Carousel::create([
            'url_image' => $path,
            'title' => $request->titlecarousel,
            'description' => $request->desccarousel,
        ]);
        return redirect()->back();
    }

    public function updateCarousel(Request $request, $id){
        // dd($request->hasFile('imagefilemodal'));
        $data = Carousel::find($id);
        if($request->hasFile('imagefilemodal')){
            $saveFile = 'carousel_'.$id.'.jpg';
            $path = $request->file('imagefilemodal')->storeAs('/public/Carousel', $saveFile);
            $data->url_image = $path;
        }
        $data->title = $request->titlecarouselmodal;
        $data->description = $request->desccarouselmodal;
        $data->save();
        return redirect()->back()->with('success','Data berhasil diubah');
    }

    public function deleteCarousel($id){
        $data = Carousel::find($id);
        if(Storage::exists($data->url_image)){
            Storage::delete($data->url_image);
            $data->delete();
        }else{
            dd('File does not exists.');
        }
        Carousel::destroy($id);
        return redirect()->back()->with('success','Data berhasil dihapus');
    }


    public function showCard(){
        $datacard = Carousel::get();
        foreach ($datacard as $key) {
            $key->url_image = env('APP_URL').'/carousel/'.$key->id;
        }
        return view('admin_utility_card',compact('datacard'));
    }
}
