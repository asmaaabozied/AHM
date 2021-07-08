<?php

namespace App\Http\Controllers;

use App\Model\Ssesiot;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function index()
    {

        $count=\App\Model\LawyerCase::all()->count();
        $price=\App\Model\LawyerCase::all()->sum('price');
        $client=\App\Model\Client::all()->count();
        $pay=\App\Model\Payment::all()->sum('value');
        $doc=\App\Model\Document::all()->count();
        $remain=\App\Model\LawyerCase::all()->sum('price') - \App\Model\Payment::all()->sum('value');
        return view('home',compact('count','price','client','pay','remain','doc'));
    }

    public function search(Request $request){

        $start = Carbon::parse($request->get('date1'))->format('Y-m-d');
        $end = Carbon::parse($request->get('date2'))->format('Y-m-d');


        $count=\App\Model\LawyerCase::whereBetween('created_at', [$start, $end])->get()->count();

        $price=\App\Model\LawyerCase::whereBetween('created_at', [$start, $end])->get()->sum('price');

        $client=\App\Model\Client::whereBetween('created_at', [$start, $end])->get()->count();

        $pay=\App\Model\Payment::whereBetween('created_at', [$start, $end])->get()->sum('value');

        $doc=\App\Model\Document::whereBetween('created_at', [$start, $end])->get()->count();

        $remain=\App\Model\LawyerCase::whereBetween('created_at', [$start, $end])->get()->sum('price') - \App\Model\Payment::whereBetween('created_at', [$start, $end])->get()->sum('value');

        return view('home',compact('count','price','client','pay','remain','doc'));








    }
}
