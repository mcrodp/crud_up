<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelo;
class modeloController extends Controller
{
    public function index(){
        $modil = modelo::paginate(2);
        return view('page')->with("modil",$modil);
    }

    public function store(Request $request){ //insert ng recod sa dataBase
     //   $mymodel=new modelo;
      //  $mymodel->title= $request->input('title');
      //  $mymodel->content= $request->input('content');
     //  $mymodel->save();

     $request->validate([                              //validator!, gagawa lang tayo ng associative array
         "title" => "required|min:5|max:20|unique:modil",
         "content" =>"required|min:5max:200"
     ]);

     modelo::create(["title"=>$request->title,"content"=>$request->content]); //another way to create using associative array

       echo "successfully added";

    }

    public function create(){
        return view('addform'); //tapos ipapasa natin sa 'addform na gagawin natin sa view"
    }

    public function show($id){ //pagsShow ng individual page
        $modelforshow= modelo::find($id);
        return view('show')->with("modelforshow",$modelforshow); // tapos gagawa tayo ng show file view
      
    }

    public function edit($id){

        $modelforedit= modelo::find($id);        //copy paste from show
        return view('editform')->with("modelforedit",$modelforedit);
       

    }

    public function update(Request $request,$id){ //lalagay din tayo ng ID (eto ay ang pag update after ma Edit)
        $modelupdate=modelo::find($id);
        $modelupdate->title = $request->title;
        $modelupdate->content = $request->content;
        $modelupdate->save();

        echo "Updated! yeah!";
     
    }

    public function destroy($id){
        $modelupdate=modelo::find($id);
        $modelupdate->delete();
        //modelo::destroy($id);
        //echo "deleted men!";
        Flash::success('Contact deleted.');
        
    }
}
