<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use App\Models\Als;
use App\Models\Card;
use App\Models\Carousel;
use App\Models\Collaboration;
use App\Models\Contact;
use App\Models\JudulAboutus;
use App\Models\Judulcard;
use App\Models\JudulOurService;
use App\Models\JudulOurWork;
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
    public function getPhotoAls($id)
    {
        $data = Als::where('id',$id)->first();
        return response()->file(storage_path('/app/'.$data->url_image));
    }

    public function getPhotoCollaboration($id)
    {
        $data = Collaboration::where('id',$id)->first();
        return response()->file(storage_path('/app/'.$data->url_image));
    }

    public function index(){
        $datacarousel = Carousel::all();
        $dataaboutus = Aboutus::all();
        $datacard = Card::all();
        $dataourservices = Ourservices::all();
        $dataourwork = Ourworks::all();
        $datacontact = Contact::all();
        $datacardjudul = Judulcard::all();
        $dataaboutusjudul = JudulAboutus::all();
        $dataourworkjudul = JudulOurWork::all();
        $datacollaboration = Collaboration::all();
        $dataourservicesjudul = JudulOurService::all();
        $dataals = Als::all();

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

        foreach ($dataals as $key) {
            $key->url_image = env('APP_URL').'/als/'.$key->id;
        }

        foreach ($datacollaboration as $key) {
            $key->url_image = env('APP_URL').'/ourcollaboration/'.$key->id;
        }

        return view('index',compact('datacarousel','datacontact','dataourwork','dataourservices','datacard','dataaboutus','datacardjudul',
        'dataaboutusjudul','dataourworkjudul','dataourservicesjudul','datacollaboration','dataals'));
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


    public function createCardJudul(Request $request){
        $input = $request->all();
        Judulcard::create([
            'judul' => $request->judul,
            'description' => $request->deskripsi_title,
        ]);
        return redirect()->back();
    }

    // public function updateCardJudul(Request $request, $id){
    //     // dd($request->hasFile('imagefilemodal'));
    //     $data = Judulcard::find($id);
    //     $data->title = $request->judulmodal;
    //     $data->description = $request->deskripsi_titlemodal;
    //     $data->save();
    //     return redirect()->back()->with('success','Data berhasil diubah');
    // }

    public function updateCardJudul(Request $request, $id){
        // Attempt to find the Judulcard with the given ID
        $data = Judulcard::find($id);

        // Check if a Judulcard was found
        if ($data) {
            // The Judulcard was found, proceed with update
            $data->title = $request->judulmodal; // Here was the mistake, it should be `judul` not `title`.
            $data->description = $request->deskripsi_titlemodal;
            $data->save();
            return redirect()->back()->with('success', 'Data berhasil diubah');
        } else {
            // No Judulcard was found with the given ID, handle the error
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }

    public function showAls(){
        $dataals = Als::get();
        foreach ($dataals as $key) {
            $key->url_image = env('APP_URL').'/als/'.$key->id;
        }
        return view('admin_utility_als',compact('dataals'));
    }

    public function createAls(Request $request){
        $input = $request->all();
        $count = Als::max('id')+1;
        if($request->hasFile('imagefile')){
            // $saveFile = 'als_'.$count.'.jpg';
            $saveFile = 'als'.$count.'.'.$request->file('imagefile')->getClientOriginalExtension();
            $path = $request->file('imagefile')->storeAs('/public/Als', $saveFile);
        }
        Als::create([
            'url_image' => $path,
        ]);
        return redirect()->back();
    }

    public function updateAls(Request $request, $id){
        // dd($request->hasFile('imagefilemodal'));
        $data = Als::find($id);
        if($request->hasFile('imagefilemodal')){
            // $saveFile = 'als'.$count.'.'.$request->file('imagefile')->getClientOriginalExtension();
            $saveFile = 'als'.$id.'.'.$request->file('imagefilemodal')->getClientOriginalExtension();
            $path = $request->file('imagefilemodal')->storeAs('/public/Als', $saveFile);
            $data->url_image = $path;
        }
        $data->save();
        return redirect()->back()->with('success','Data berhasil diubah');
    }

    public function deleteAls($id){
        $data = Als::find($id);
        if(Storage::exists($data->url_image)){
            Storage::delete($data->url_image);
            $data->delete();
        }else{
            dd('File does not exists.');
        }
        Als::destroy($id);
        return redirect()->back()->with('success','Data berhasil dihapus');
    }


    public function showCard(){
        $datacard = Card::get();
        $datacardjudul = Judulcard::get();
        foreach ($datacard as $key) {
            $key->url_image = env('APP_URL').'/card/'.$key->id;
        }
        return view('admin_utility_card',compact('datacard','datacardjudul'));
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
            'judul' => $request->judul,
            'description_judul' => $request->deskripsi_title,
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
        $data->judul = $request->judulmodal;
        $data->description_judul = $request->deskripsi_titlemodal;
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

    public function createAboutusJudul(Request $request){
        $input = $request->all();
        JudulAboutus::create([
            'title' => $request->judul,
        ]);
        return redirect()->back();
    }

    public function updateAboutusJudul(Request $request, $id){
        // Attempt to find the Judulcard with the given ID
        $data = JudulAboutus::find($id);

        if ($data) {
            $data->title = $request->judulmodal;
            $data->save();
            return redirect()->back()->with('success', 'Data berhasil diubah');
        } else {
            // No Judulcard was found with the given ID, handle the error
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }

    public function showAboutus(){
        $dataaboutus = Aboutus::get();
        $dataaboutusjudul = JudulAboutus::get();
        foreach ($dataaboutus as $key) {
            $key->url_image = env('APP_URL').'/aboutus/'.$key->id;
        }

        return view('admin_utility_aboutus',compact('dataaboutus','dataaboutusjudul'));
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

    public function createOurworkJudul(Request $request){
        $input = $request->all();
        JudulOurWork::create([
            'title' => $request->judul,
        ]);
        return redirect()->back();
    }

    public function updateOurworkJudul(Request $request, $id){
        // Attempt to find the Judulcard with the given ID
        $data = JudulOurWork::find($id);

        if ($data) {
            $data->title = $request->judulmodal;
            $data->save();
            return redirect()->back()->with('success', 'Data berhasil diubah');
        } else {
            // No Judulcard was found with the given ID, handle the error
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }

    public function showOurwork(){
        $dataourwork = Ourworks::get();
        $dataourworkjudul = JudulOurWork::get();
        foreach ($dataourwork as $key) {
            $key->url_image = env('APP_URL').'/carousel/'.$key->id;
        }
        return view('admin_utility_ourwork',compact('dataourwork','dataourworkjudul'));
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

    public function updateOurservicesJudul(Request $request, $id){
        // Attempt to find the Judulcard with the given ID
        $data = JudulOurService::find($id);

        if ($data) {
            $data->title = $request->judulmodal;
            $data->save();
            return redirect()->back()->with('success', 'Data berhasil diubah');
        } else {
            // No Judulcard was found with the given ID, handle the error
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }

    public function showOurservices(){
        $dataourservices = Ourservices::get();
        $dataourservicesjudul = JudulOurService::get();
        foreach ($dataourservices as $key) {
            $key->url_image = env('APP_URL').'/ourservices/'.$key->id;
        }
        return view('admin_utility_ourservices',compact('dataourservices','dataourservicesjudul'));
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



    public function showCollaboration(){
        $datacollaboration = Collaboration::get();
        foreach ($datacollaboration as $key) {
            $key->url_image = env('APP_URL').'/ourcollaboration/'.$key->id;
        }
        return view('admin_utility_ourcollaboration',compact('datacollaboration'));
    }

    public function createCollaboration(Request $request){
        $input = $request->all();
        $count = Collaboration::max('id')+1;
        if($request->hasFile('imagefile')){
            // $saveFile = 'card_'.$count.'.jpg';
            $saveFile = 'collaboration_'.$count.'.'.$request->file('imagefile')->getClientOriginalExtension();
            $path = $request->file('imagefile')->storeAs('/public/Collaboration', $saveFile);
        }
        Collaboration::create([
            'title' => $request->title,
            'url_image' => $path,
            'name' => $request->namecollab,
            'description' => $request->description,
        ]);
        return redirect()->back();
    }

    public function updateCollaboration(Request $request, $id){
        // dd($request->hasFile('imagefilemodal'));
        $data = Collaboration::find($id);
        if($request->hasFile('imagefilemodal')){
            $saveFile = 'collaboration_'.$id.'.jpg';
            $path = $request->file('imagefilemodal')->storeAs('/public/Collaboration', $saveFile);
            $data->url_image = $path;
        }
        $data->title = $request->titlemodal;
        $data->name = $request->namecollabmodal;
        $data->description = $request->descriptionmodal;
        $data->save();
        return redirect()->back()->with('success','Data berhasil diubah');
    }

    public function deleteCollaboration($id){
        $data = Collaboration::find($id);
        if(Storage::exists($data->url_image)){
            Storage::delete($data->url_image);
            $data->delete();
        }else{
            dd('File does not exists.');
        }
        Collaboration::destroy($id);
        return redirect()->back()->with('success','Data berhasil dihapus');
    }
}
