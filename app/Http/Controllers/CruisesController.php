<?php

namespace App\Http\Controllers;

use App\Cruise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CruisesController extends Controller
{

    public function index()
    {      

         return view ('frontend.cruise.index', compact('cruiseItems'));

    }

    public function search(Cruise $cruise)
    {

         $query = Request('query');
         $operator = Request('operator');

         if ($query !== ''){

            $cruiseItems = Cruise::where('product_name', $query)
            // ->orWhere('merchant_name', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->orWhere('merchant_category', 'like', '%' . $query . '%')
            ->orWhere('merchant_deep_link', 'like', '%' . $query . '%')
            ->orWhere('merchant_name', 'like', '%' . $operator . '%')->paginate(21);

            // $totalItems = Cruise::count(); 

            return view ('frontend.cruise.search', compact('cruiseItems','query','totalItems', 'operator'));
        }

    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    public function show(Cruise $cruise)
    {
        
        $cruiseItems = Cruise::all();

    }

   
    public function edit(Cruise $cruise)
    {
        //
    }

   
    public function update(Request $request, Cruise $cruise)
    {
        //
    }

    
    public function destroy(Cruise $cruise)
    {
        //
    }
}
