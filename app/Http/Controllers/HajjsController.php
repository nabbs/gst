<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Hajj;

class HajjsController extends Controller
{
    
    public function index()
    {

        $hajjItems = Hajj::all();
        $totalResults = Hajj::count();

        // $filter = "all";

        // $query = Hajj::query();;
    
        // if (isset($_GET['filter'])) {
        //     $filter = $_GET['filter'];
        // }

        // if ($filter == "mk5star") {
        //     $query = $query->where('mk_rating', 5);
        // } elseif ($filter == "md5star") {
        //     $query = $query->where('md_rating', 5);
        // } elseif ($filter == "priceless6000"){
        //     $query = $query->where('price','<', 6000);
        // } elseif ($filter == "pricemore6000"){
        //     $query = $query->where('price','>', 6000);
        // }

        // $hajjItems =   $query->limit(15)
        //                     ->offset(0)
        //                     ->get();


        return view ('frontend.hajj.index', compact('hajjItems', 'totalResults'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        if (isset($request->offset)) {
            $offset = $request->offset;
        } else {
            $offset = 0;
        }

        $filter = "all";

        $query = Hajj::query();
    
        if (isset($_GET['filter'])) {
            $filter = $_GET['filter'];
        }

        if ($filter == "mk5star") {
            $query = $query->where('mk_rating', 5);
        } elseif ($filter == "md5star") {
            $query = $query->where('md_rating', 5);
        } elseif ($filter == "priceless6000"){
            $query = $query->where('price','<', 6000);
        } elseif ($filter == "pricemore6000"){
            $query = $query->where('price','>', 6000);
        }

        $hajjItems =   $query->limit(15)
                            ->offset($offset)
                            ->get();

        return $hajjItems;
    }

    
    public function search(Request $request)
    {
        
        // dd(request()->all());

          $hajjItems = Hajj::where([
                    ['mk_rating', '=', Request('mk_rating')],
                    ['md_rating', '=', Request('md_rating')]
                ])->get();

          return view ('frontend.hajj.index', compact('hajjItems'));
    }

    
    public function show(Hajj $hajj)
    {
        $hajjItems = Hajj::all();
        $totalResults = Hajj::count();

        return view ('frontend.hajj.search', compact('hajjItems', 'totalResults'));
    }



    public function edit(Hajj $hajj)
    {
        //
    }

    
    public function update(Request $request, Hajj $hajj)
    {
        //
    }

    
    public function destroy(Hajj $hajj)
    {
        //
    }
}