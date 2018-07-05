<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Composer as Composer;
class ComposerController extends Controller
{
    public function insertOne(){

        return view('composer.insertOne');
    }

    public function insertAction(Request $request){

        $newComposer = new Composer;

        $newComposer->name=$request->name;
        $newComposer->picture=$request->picture;
        $newComposer->save();

        return redirect('/composers/showAll');
    }

    public function showAll(){
        
        $composers = Composer::all();

        return view('composer.showAll', ["composers" => $composers]);
    }

    public function updateOne(Request $request){
         
        $composerToUpdate = Composer::find($request->id);
        
        return view('composer.updateOne', ["composerToUpdate" => $composerToUpdate]);
    }

    public function updateAction(Request $request){
        
        $composerToUpdate = Composer::find($request->id);

        //dd($composerToUpdate);
        $composerToUpdate->name=$request->name;
        $composerToUpdate->picture=$request->picture;
        $composerToUpdate->save();
        return redirect('/composers/showAll');
    }
}
