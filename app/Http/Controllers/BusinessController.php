<?php

namespace App\Http\Controllers;

Use App\Models\Business;
use Illuminate\Http\Request;
use Validator;

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
                $rows['location'] = $row->data['location'];
                $rows['latitude'] = $row->data['latitude'];
                $rows['longitude'] = $row->data['longitude'];
                $rows['term'] = $row->data['term'];
                $rows['radius'] = $row->data['radius'];
                $rows['categories'] = $row->data['categories'];
                $rows['locale'] = $row->data['locale'];
                $rows['price'] = $row->data['price'];
                $rows['review_count'] = $row->data['review_count'];
                $rows['rating'] = $row->data['rating'];
                $rows['open_now'] = $row->data['open_now'];
                $rows['open_at'] = $row->data['open_at'];
                $rows['attributes'] = $row->data['attributes'];
                $rows['device_platform'] = $row->data['device_platform'];
                $rows['reservation_date'] = $row->data['reservation_date'];
                $rows['reservation_time'] = $row->data['reservation_time'];
                $rows['reservation_covers'] = $row->data['reservation_covers'];
                
                $data[] = $rows;
            }
        }
        
        //return response
        return response()->json([
            'status' => 200,
            'data' => $data
        ], 200);
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
        //get data json from data
        $data = json_decode($request->getContent(), true);

        //validation
        $validator = Validator::make($data['data'], [
            'location.city' => 'required_without:latitude|required_without:longitude|string|min:1|max:250',
            'latitude' => 'required_without:location.city|required_with:longitude|numeric|min:-90|max:90',
            'longitude' => 'required_without:location.city|required_with:latitude|numeric|min:-180|max:180',
            'term' => 'string',
            'radius' => 'Integer|min:0|max:40000',
            'categories.*' => 'string',
            'locale.code' => 'string|regex:/^[a-z]{2,3}_[A-Z]{2}$/',
            'price' => 'Integer|required|min:1|max:4',
            'review_count' => 'numeric',
            'rating' => 'numeric',
            'open_now' => 'boolean',
            'open_at' => 'Integer',
            'attributes.*' => 'string',
            'device_platform' => 'string',
            'reservation_date' => 'string',
            'reservation_time' => 'string',
            'reservation_covers' => 'Integer'
        ],[
            'location.city.required' => 'Location City is Required',
            'location.city.min' => 'Location City minLength is 1',
            'location.city.max' => 'Location City maxLength is 250',
            'location.city.required_without' => 'Location City is Required When Latitude or Longitude is Null',
            'latitude.required_with' => 'Latitude is Required when Longitude is declare',
            'latitude.numeric' => 'Latitude must be Numeric',
            'latitude.min' => 'Latitude minLength -90',
            'latitude.max' => 'Latitude maxLength 90',
            'longitude.required_with' => 'Longitude is Required when Latitude is declare',
            'longitude.numeric' => 'Longitude must be Numeric',
            'longitude.min' => 'Longitude minLength -180',
            'longitude.max' => 'Longitude maxLength 180',
            'term.String' => 'Terms Must be String',
            'radius.Integer' => 'Radius Must be Integer',
            'radius.min' => 'Radius minLength 0',
            'radius.max' => 'Radius maxLength 40000',
            'categories.*.string' => 'Categories Must be Array of String',
            'locale.code.string' => 'Locale Code Must be String',
            'locale.code.regex' => 'Locale Code format is invalid',
            'price.Integer' => 'Price Must Be Integer',
            'price.required' => 'Price is Required',
            'price.min' => 'Price minLength 1',
            'price.max' => 'Price maxLength 4',
            'review_count.numeric' => 'Review Count Must be Numeric',
            'rating.numeric' => 'Rating Must be Numeric',
            'open_now.boolean' => 'Open Now Must be Boolean',
            'open_at.Integer' => 'Open At Must be Integer',
            'attributes.*.string' => 'Attributes Must be Array of String',
            'device_platform.string' => 'Device Platform Must be String',
            'reservation_date.string' => 'Reservation Date Must be String',
            'reservation_time.string' => 'Reservation Time Must be String',
            'reservation_covers.Integer' => 'Reservation Covers Must be Integer'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //create data
        $business = Business::create($request->all());

        //return response
        return response()->json([
            'status' => 200,
            'message' => 'Business List created successfully',
            'data' => $business
        ], 200);

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
