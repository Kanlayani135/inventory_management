<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Division;
class DivisionController extends Controller
{
    private $title = 'Division';
    function __construct() {
        $this->middleware('auth');
      } 
    function list(Request $request){
        $query = Division::orderBy('id');
        $data = $request->getQueryParams();
        return view('division-list',[
            'title' =>"{$this->title} 's list",
            'divisions' =>$query->paginate(100),
        ]);
    }
    function addform(){
       
        return view('division-create',[
            'title' => "{$this->title} 's form",
           
        ]);
    }
    function create(Request $request){
      
        $division = Division::create($request->getParsedBody());
        return redirect()->route('division-list')->with('success',"Add name is success");
       
    }
    function delete($division_id){
        $division = Division::where('id',$division_id)->firstOrFail();
        $division->delete();

        return redirect()->route('division-list')
        ->with('success','Division deleted successfully');
    }
}
