<?php

namespace App\Http\Controllers;

use App\model\Lawercase;

use App\Model\Ssesiot;
use Illuminate\Support\Carbon;

use App\Model\Lawyer;
use App\Model\LawyerCase;
use App\model\Statuscase;
use App\Model\Type;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lawyers = Ssesiot::get();


        return view('reports.create', compact('lawyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $start = Carbon::parse($request->get('date1'))->format('Y-m-d');
        $end = Carbon::parse($request->get('date2'))->format('Y-m-d');

        if (!empty($request->date1) && !empty($request->date2) && !empty($request->lawyer_id) && !empty($request->typecourt_id)) {
            $lawyers = Ssesiot::whereBetween('created_at', [$start, $end])->where('lawyer_id', $request->lawyer_id)->where('typecourt_id', $request->typecourt_id)->get();


        } elseif (!empty($request->lawyer_id) && !empty($request->typecourt_id)) {

            $lawyers = Ssesiot::where('lawyer_id', $request->lawyer_id)->where('typecourt_id', $request->typecourt_id)->get();


        } elseif (!empty($request->lawyer_id)) {

            $lawyers = Ssesiot::where('lawyer_id', $request->lawyer_id)->get();

        } elseif (!empty($request->typecourt_id)) {
            $lawyers = Ssesiot::where('typecourt_id', $request->typecourt_id)->get();


        } elseif (!empty($start) && !empty($end)) {

            $lawyers = Ssesiot::whereBetween('created_at', [$start, $end])->get();


        } elseif (!empty($start)) {

            $lawyers = Ssesiot::where('created_at', $start)->get();

        } elseif (!empty($end)) {
            $lawyers = Ssesiot::where('created_at', $end)->get();

        }


        return view('reports.show', compact('lawyers'));

    }

    /**
     * Display the specified resource.
     *
     * @param LawyerCase $lawyerCase
     * @return \Illuminate\Http\Response
     */
    public function show(LawyerCase $lawyerCase)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param LawyerCase $lawyerCase
     * @return \Illuminate\Http\Response
     */
    public function edit(LawyerCase $lawyerCase)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param LawyerCase $lawyerCase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LawyerCase $lawyerCase)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param LawyerCase $lawyerCase
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(LawyerCase $lawyerCase)
    {

    }
}
