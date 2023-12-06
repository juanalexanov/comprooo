<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Carousel;
use App\Models\Contact;
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

    public function getPhotoCard($id)
    {
        $data = Card::where('id',$id)->first();
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
        $datacard = Card::get();
        foreach ($datacard as $key) {
            $key->url_image = env('APP_URL').'/carousel/'.$key->id;
        }
        return view('admin_utility_card',compact('datacard'));
    }

    public function createCard(Request $request){
        $input = $request->all();
        $count = Card::max('id')+1;
        if($request->hasFile('imagefile')){
            $saveFile = 'card_'.$count.'.jpg';
            $path = $request->file('imagefile')->storeAs('/public/Card', $saveFile);
        }
        Card::create([
            'url_image' => $path,
            'title' => $request->titlecard,
            'description' => $request->desccard,
        ]);
        return redirect()->back();
    }

    public function updateCard(Request $request, $id){
        // dd($request->hasFile('imagefilemodal'));
        $data = Card::find($id);
        if($request->hasFile('imagefilemodal')){
            $saveFile = 'card_'.$id.'.jpg';
            $path = $request->file('imagefilemodal')->storeAs('/public/Card', $saveFile);
            $data->url_image = $path;
        }
        $data->title = $request->titlecardmodal;
        $data->description = $request->desccardmodal;
        $data->save();
        return redirect()->back()->with('success','Data berhasil diubah');
    }

    public function deleteCard($id){
        $data = Card::find($id);
        if(Storage::exists($data->url_image)){
            Storage::delete($data->url_image);
            $data->delete();
        }else{
            dd('File does not exists.');
        }
        Card::destroy($id);
        return redirect()->back()->with('success','Data berhasil dihapus');
    }

    public function showContact(){
        $datacontact = Contact::get();
        foreach ($datacontact as $key) {
            $key->url_image = env('APP_URL').'/carousel/'.$key->id;
        }
        return view('admin_utility_contact',compact('datacontact'));
    }

    public function createContact(Request $request){
        $input = $request->all();

        Contact::create([
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);
        return redirect()->back();
    }

    public function updateContact(Request $request, $id){
        // dd($request->hasFile('imagefilemodal'));
        $data = Contact::find($id);
        $data->email = $request->emailmodal;
        $data->address = $request->addressmodal;
        $data->phone = $request->phonemodal;
        $data->save();
        return redirect()->back()->with('success','Data berhasil diubah');
    }

    public function deleteContact($id){
        Contact::destroy($id);
        return redirect()->back()->with('success','Data berhasil dihapus');
    }
}
