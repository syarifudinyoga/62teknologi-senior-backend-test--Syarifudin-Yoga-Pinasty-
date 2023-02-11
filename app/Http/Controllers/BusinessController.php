<?php

namespace App\Http\Controllers;

Use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all data from database
        $test = Business::all();

        //retrieve array and combine with id
        $data = array();
        if(!empty($test)){
            foreach($test as $row){
                $rows['id'] = $row->id; 
                $rows['alias'] = $row->data['alias'];
                $rows['name'] = $row->data['name'];
                $rows['image_url'] = $row->data['image_url'];
                $rows['is_closed'] = $row->data['is_closed'];
                $rows['url'] = $row->data['url'];
                $rows['review_count'] = $row->data['review_count'];
                $rows['categories'] = $row->data['categories'];
                $rows['rating'] = $row->data['rating'];
                $rows['coordinates'] = $row->data['coordinates'];
                $rows['transactions'] = $row->data['transactions'];
                $rows['price'] = $row->data['price'];
                $rows['location'] = $row->data['location'];
                $rows['phone'] = $row->data['phone'];
                $rows['display_phone'] = $row->data['display_phone'];
                $rows['distance'] = $row->data['distance'];
                
                $data[] = $rows;
            }
        }
        return response()->json([ 'data' => $data ]);

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
    public function store(Request $request)
    {
        $business = Business::create($request->all());

        return response()->json($business, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
