<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use App\Models\Card;
use App\Models\Carousel;
use App\Models\Contact;
use App\Models\Ourservices;
use App\Models\Ourworks;
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

    public function getPhotoAboutus($id)
    {
        $data = Aboutus::where('id',$id)->first();
        return response()->file(storage_path('/app/'.$data->url_image));
    }

    public function getPhotoServices($id)
    {
        $data = Ourservices::where('id',$id)->first();
        return response()->file(storage_path('/app/'.$data->url_image));
    }

    public function index(){
        $datacarousel = Carousel::all();
        $dataaboutus = Aboutus::all();
        $datacard = Card::all();
        $dataourservices = Ourservices::all();
        $dataourwork = Ourworks::all();
        $datacontact = Contact::all();

        foreach ($datacarousel as $key) {
            $key->url_image = env('APP_URL').'/carousel/'.$key->id;
        }

        foreach ($dataaboutus as $key) {
            $key->url_image = env('APP_URL').'/aboutus/'.$key->id;
        }

        foreach ($datacard as $key) {
            $key->url_image = env('APP_URL').'/card/'.$key->id;
        }

        foreach ($dataourservices as $key) {
            $key->url_image = env('APP_URL').'/ourservices/'.$key->id;
        }

        return view('index',compact('datacarousel','datacontact','dataourwork','dataourservices','datacard','dataaboutus'));
    }

    public function form_login(Request $request){
        $input = $request->all();
        $datausers = UsersLumina::all();
        $request->session()->get('data');
        foreach($datausers as $e){
            if($e->username == $input['username'] && $e->password == $input['password']){
                $request->session()->put('adminLogin',$e);
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
            $key->url_image = env('APP_URL').'/card/'.$key->id;
        }
        return view('admin_utility_card',compact('datacard'));
    }

    public function createCard(Request $request){
        $input = $request->all();
        $count = Card::max('id')+1;
        if($request->hasFile('imagefile')){
            // $saveFile = 'card_'.$count.'.jpg';
            $saveFile = 'card_'.$count.'.'.$request->file('imagefile')->getClientOriginalExtension();
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





    public function showAboutus(){
        $dataaboutus = Aboutus::get();
        foreach ($dataaboutus as $key) {
            $key->url_image = env('APP_URL').'/aboutus/'.$key->id;
        }

        return view('admin_utility_aboutus',compact('dataaboutus'));
    }

    public function createAboutus(Request $request){
        $input = $request->all();
        $count = Aboutus::max('id')+1;
        if($request->hasFile('imagefile')){
            // $saveFile = 'aboutus_'.$count.'.jpg';
            $saveFile = 'aboutus_'.$count.'.'.$request->file('imagefile')->getClientOriginalExtension();
            $path = $request->file('imagefile')->storeAs('/public/Aboutus', $saveFile);
        }
        Aboutus::create([
            'url_image' => $path,
            'title' => $request->title,
            'description1' => $request->desc1,
            'description2' => $request->desc2,
            'section1' => $request->sec1,
            'section2' => $request->sec2,
            'section3' => $request->sec3,
        ]);
        return redirect()->back();
    }

    public function updateAboutus(Request $request, $id){
        $data = Aboutus::find($id);
        // dd($request->hasFile('imagefilemodal'));
        if($request->hasFile('imagefilemodal')){
            $saveFile = 'aboutus_'.$id.'.jpg';
            $path = $request->file('imagefilemodal')->storeAs('/public/Aboutus', $saveFile);
            $data->url_image = $path;
        }

        $data->title = $request->titlemodal;
        $data->description1 = $request->desc1modal;
        $data->description2 = $request->desc2modal;
        $data->section1 = $request->sec1modal;
        $data->section2 = $request->sec2modal;
        $data->section3 = $request->sec3modal;
        $data->save();
        return redirect()->back()->with('success','Data berhasil diubah');
    }

    public function deleteAboutus($id){
        Aboutus::destroy($id);
        return redirect()->back()->with('success','Data berhasil dihapus');
    }

    public function showOurwork(){
        $dataourwork = Ourworks::get();
        foreach ($dataourwork as $key) {
            $key->url_image = env('APP_URL').'/carousel/'.$key->id;
        }
        return view('admin_utility_ourwork',compact('dataourwork'));
    }

    public function createOurwork(Request $request){
        $input = $request->all();

        Ourworks::create([
            'title' => $request->title,
            'titledescription' => $request->description,
            'section1title' => $request->sec1title,
            'section1description' => $request->sec1description,
            'section2title' => $request->sec2title,
            'section2description' => $request->sec2description,
            'section3title' => $request->sec3title,
            'section3description' => $request->sec3description,
            'section4title' => $request->sec4title,
            'section4description' => $request->sec4description,
        ]);
        return redirect()->back();
    }

    public function updateOurwork(Request $request, $id){
        // dd($request->hasFile('imagefilemodal'));
        $data = Ourworks::find($id);
        $data->title = $request->titlemodal;
        $data->titledescription = $request->descriptionmodal;
        $data->section1title = $request->sec1titlemodal;
        $data->section1description = $request->sec1descriptionmodal;
        $data->section2title = $request->sec2titlemodal;
        $data->section2description = $request->sec2descriptionmodal;
        $data->section3title = $request->sec3titlemodal;
        $data->section3description = $request->sec3descriptionmodal;
        $data->section4title = $request->sec4titlemodal;
        $data->section4description = $request->sec4descriptionmodal;

        $data->save();
        return redirect()->back()->with('success','Data berhasil diubah');
    }

    public function deleteOurwork($id){
        Ourworks::destroy($id);
        return redirect()->back()->with('success','Data berhasil dihapus');
    }

    public function showOurservices(){
        $dataourservices = Ourservices::get();
        foreach ($dataourservices as $key) {
            $key->url_image = env('APP_URL').'/ourservices/'.$key->id;
        }
        return view('admin_utility_ourservices',compact('dataourservices'));
    }

    public function createOurservices(Request $request){
        $input = $request->all();
        $count = Ourservices::max('id')+1;
        if($request->hasFile('imagefile')){
            $saveFile = 'services_'.$count.'.jpg';
            $path = $request->file('imagefile')->storeAs('/public/Ourservices', $saveFile);
        }

        Ourservices::create([
            'url_image' => $path,
            'title' => $request->title,
            'section1title' => $request->sec1title,
            'section1description' => $request->sec1description,
            'section2title' => $request->sec2title,
            'section2description' => $request->sec2description,
            'section3title' => $request->sec3title,
            'section3description' => $request->sec3description,
            'section4title' => $request->sec4title,
            'section4description' => $request->sec4description,
        ]);
        return redirect()->back();
    }

    public function updateOurservices(Request $request, $id){
        $data = Ourservices::find($id);
        if($request->hasFile('imagefilemodal')){
            $saveFile = 'aboutus_'.$id.'.jpg';
            $path = $request->file('imagefilemodal')->storeAs('/public/Aboutus', $saveFile);
            $data->url_image = $path;
        }
        $data->title = $request->titlemodal;
        $data->section1title = $request->sec1titlemodal;
        $data->section1description = $request->sec1descriptionmodal;
        $data->section2title = $request->sec2titlemodal;
        $data->section2description = $request->sec2descriptionmodal;
        $data->section3title = $request->sec3titlemodal;
        $data->section3description = $request->sec3descriptionmodal;
        $data->section4title = $request->sec4titlemodal;
        $data->section4description = $request->sec4descriptionmodal;

        $data->save();
        return redirect()->back()->with('success','Data berhasil diubah');
    }

    public function deleteOurservices($id){
        Ourservices::destroy($id);
        return redirect()->back()->with('success','Data berhasil dihapus');
    }

}
