<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phones;
use App\Http\Resources\PhonesResource;
use App\Http\Resources\PhonesCollection;
use App\Http\Requests\PhonesRequest;
use Symfony\Component\HttpFoundation\Response;

class PhonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return $phone;
        return  PhonesCollection::collection(Phones::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhonesRequest $request)
    {

        $phone =new Phones();
        $phone->phoneName=$request->phoneName;
        $phone->phoneBrand=$request->phoneBrand;
        $phone->phonePrice=$request->phonePrice;

        $phone->save();

        return response([

			'data' => new PhonesResource($phone),
		], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Phones $phone)
    {
        return new PhonesResource($phone);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phones $phone)
    {
        $phone->update($request->all());

		return response([

			'data' => new PhonesResource($phone),
		], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phones $phone)
    {
        $phone->delete();

		return response(null, Response::HTTP_NO_CONTENT);
    }
}
