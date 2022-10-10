<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use PhpParser\Node\Expr\List_;

class ListingController extends Controller
{
    //show all listings
    public function index(){
   
        return view('listings.index',[
            'listings' => Listing::latest()->filter(request(['tag','search']))->simplepaginate(4)
        ]);
    }  


    // Show Edit Form
    public function edit(Listing $listing) {
        return view('listings.edit', ['listing' => $listing]);
    }


    //show create form
    public function create(){
        return view('listings.create');
    }

    //store listing
    public function store(Request $request){
    $formFields = $request->validate([
        'title' => 'required',
        'company'=> ['required', Rule::unique('listings','company')],
        'location' => 'required',
        'website' => 'required',
        'email' => ['required','email'],
        'tags' => 'required',
        'description' => 'required',
        
    ]);

    if($request->hasFile('logo')){
        $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }
    
    Listing::create($formFields);

    return redirect('/')->with('message','Listing created Successfully');
    }


     //update listing
     public function update(Request $request ,Listing $listing){
        $formFields = $request->validate([
            'title' => 'required',
            'company'=> 'required', 
            'location' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required',
            
        ]);
    
        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        
        $listing->update($formFields);
    
        return back()->with('message','Listing updated Successfully');
        }


        //delete listing
        public function delete(Listing $listing){
            $listing->delete();
            return redirect('/')->with('message','Listing Deleted Successfully');
        }

    //Show single listing
    public function show(Listing $listing){

        return view('listings.show', [
            'listing' =>  $listing 
        ]);
    }


 
}
