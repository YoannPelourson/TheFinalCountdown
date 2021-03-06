<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sound as Sound;
use App\Genre as Genre;
use App\Composer as Composer;
class SoundController extends Controller
{
    public function showAll(){
        $sounds = Sound::all()->load('genre');
        //dd($sounds[3]->genre[0]->name);
        
        
        return view('sound.showAll', ["sounds" => $sounds]);
    }

    public function insertOne(){
        
        $genres = Genre::all();
        $composers = Composer::all();
        //dd($composers);
        
        return view('sound.insertOne', ["genres" => $genres, "composers" => $composers]); 
    }

    public function insertAction(Request $request){
        //dd($request->input());
        $newSound = new Sound;
        
        $newSound->title = $request->title;
        //$newSound->genre_id = $request->genre;
        $newSound->composer_id = $request->composer;
        $newSound->price = $request->price;
        $newSound->stock = $request->stock;

        $newSound->save();
        foreach ($request->genre as $name => $genreId) {
           
            $newSound->genre()->attach($genreId); 
         }
        
        
        
        return redirect('/sounds/showAll');
    }

    public function deleteAction(Request $request){
        //dd($request->id);
        $soundToDelete = Sound::find($request->id);
        $soundToDelete->genre()->detach();
        $soundToDelete->delete();
        return redirect('/sounds/showAll');
    }

    public function updateOne(Request $request){
        
        $soundToUpdate = Sound::find($request->id);
        $genres = Genre::all();
        $composers = Composer::all();

        return view('sound.updateOne', ['soundToUpdate' => $soundToUpdate, "genres" => $genres, "composers" => $composers]);
    }
    
    public function updateAction(Request $request){
       
        $soundToUpdate = Sound::find($request->id);
        $soundToUpdate->genre()->detach();
        $soundToUpdate->title = $request->title;
        //$soundToUpdate->genre_id = $request->genre;
        $soundToUpdate->composer_id = $request->composer;
        $soundToUpdate->price = $request->price;
        $soundToUpdate->stock = $request->stock;
        
        $soundToUpdate->save();
        foreach ($request->genre as $name => $genreId) {
           
            $soundToUpdate->genre()->attach($genreId); 
         }
        return redirect('/sounds/showAll');

    }
}
