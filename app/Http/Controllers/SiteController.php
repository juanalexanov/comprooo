<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\UsersLumina;
use Illuminate\Http\Request;

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
        // $username = $request->input('username');
        // $password = $request->input('password');
        // if($username == 'admin' && $password == 'admin'){
        //     return redirect('/admin');
        // }else{
        //     return redirect('/login');
        // }
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
        $datacarousel = Carousel::all();
        foreach ($datacarousel as $key) {
            $key->url_image = env('APP_URL').'/carousel/'.$key->id;
        }
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
        ]);
        return redirect()->back();
    }

    public function updateCarousel(Request $request){
        $input = $request->all();
        $count = Carousel::max('id')+1;
        if($request->hasFile('imagefile')){
            $saveFile = 'carousel_'.$count.'.jpg';
            $path = $request->file('imagefile')->storeAs('/public/Carousel', $saveFile);
        }
        Carousel::create([
            'url_image' => $path,
        ]);
        return redirect()->back();
    }
}
