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

    function show($division_id) {
        $division = Division::where('id', $division_id)->firstOrFail();

        return view('division-view', [
        'title' => "{$this->title} 's company",
        'division' => $division,
        ]);
        }
    function addform(){
       
        return view('division-create',[
            'title' => "{$this->title} 's form",
           
        ]);
    }
    function create(Request $request){
      try{
        $division = Division::create($request->getParsedBody());
        return redirect()->route('division-list')->with('success',"Add name is success");   
      }catch(\Exception $error){
          return back()->withInput()->withErrors([
              'input'=>$error ->getMessage(),
          ]);
      }
    
    
    }
    //update
 function updateForm($division_id) {
                $division = Division::where('id', $division_id)->firstOrFail();
                return view('division-update',[
                'title' => "{$this->title}  's editing",
                'division' => $division,
                ]);
            }   

        function update(Request $request, $division_id) {
            try{
                    $division = Division::where('id', $division_id)->firstOrFail();
                    $data = $request->getParsedBody();
                    $division->fill($data);
                    $division->save();
                    return redirect()->route('division-list',['division' => $division->id,
                    ])->with('success',"Department updated is successfully");
                } catch(\Exception $error){
                    return back()->withInput()->withErrors([
                    'input'=>$error ->getMessage(),
                        ]);
                } 
            }

    function delete($division_id){      
        try{
        $division = Division::where('id',$division_id)->firstOrFail();
        $division->delete();

        return redirect()->route('division-list')
        ->with('success','Division deleted successfully');
        }catch(\Exception $error){
            return back()->withInput()->withErrors([
            'input'=>$error ->getMessage(),
                ]);
    }
        }   
}