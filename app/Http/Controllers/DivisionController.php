<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Division;
class DivisionController extends Controller
{
    private $title = '';
    function __construct() {
        $this->middleware('auth');
      } 
    function list(Request $request){
        $query = Division::orderBy('id');
        $data = $request->getQueryParams();
        return view('division-list',[
            'title' =>"{$this->title} List of Divisions",
            'divisions' =>$query->paginate(100),
        ]);
    }

    function show($division_id) {
        $division = Division::where('id', $division_id)->firstOrFail();

        return view('division-view', [
        'title' => "{$this->title} Head of each Divisions",
        'division' => $division,
        ]);
        }
    function addform(){
       
        return view('division-create',[
<<<<<<< HEAD
<<<<<<< HEAD
            'title' => "{$this->title} 's Form",
=======
            'title' => "{$this->title} Division's form",
>>>>>>> 41274f6084b1a5bb7d8394ac346b4eb13ba2b482
=======
            'title' => "{$this->title} Division form",
>>>>>>> 0792422da09fbf8f811b1949b579750e468d6327
           
        ]);
    }
    function create(Request $request){
      try{
        $division = Division::create($request->getParsedBody());
<<<<<<< HEAD
        return redirect()->route('division-list')->with('success',"Division created is successfully");   
=======
        return redirect()->route('division-list')->with('success',"Add name is success");   
      }catch(\Exception $error){
          return back()->withInput()->withErrors([
              'input'=>$error ->getMessage(),
          ]);
      }
    
    
>>>>>>> 41274f6084b1a5bb7d8394ac346b4eb13ba2b482
    }
    function updateForm($division_id) {
                $division = Division::where('id', $division_id)->firstOrFail();
                return view('division-update',[
<<<<<<< HEAD
<<<<<<< HEAD
                'title' => "{$this->title}'s Editing",
=======
                'title' => "{$this->title}  Division's editing",
>>>>>>> 41274f6084b1a5bb7d8394ac346b4eb13ba2b482
=======
                'title' => "{$this->title}  Division editing",
>>>>>>> 0792422da09fbf8f811b1949b579750e468d6327
                'division' => $division,
                ]);
            }   

<<<<<<< HEAD
    function update(Request $request, $division_id) {
                $division = Division::where('id', $division_id)->firstOrFail();
                $data = $request->getParsedBody();
                $division->fill($data);
                $division->save();
                return redirect()->route('division-list',['division' => $division->id,
                ])->with('success',"Division updated is successfully");
=======
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
>>>>>>> 41274f6084b1a5bb7d8394ac346b4eb13ba2b482
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