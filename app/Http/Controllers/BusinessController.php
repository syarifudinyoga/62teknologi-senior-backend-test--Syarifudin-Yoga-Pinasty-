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
    public function index(Request $request)
    {
        //get all data from database
        $business = Business::select('*');

        // retrieve all data
        if(!$request->term && !$request->location && !$request->latitude && !$request->longitude && !$request->radius && !$request->locale){
            $data = $business->get();
        }

        //====================Search Data
        // term
        if($request->term){
            $data = $business->where('term', 'LIKE', "%".$request->term."%")->get();
        }

        //location
        if($request->location){
            $data = $business->where('location', 'LIKE', "%".$request->location."%")->get();
        }

        //latitude
        if($request->latitude){
            $data = $business->where('latitude', 'LIKE', "%".$request->latitude."%")->get();
        }

        //longitude
        if($request->longitude){
            $data = $business->where('longitude', 'LIKE', "%".$request->longitude."%")->get();
        }

        //locale
        if($request->locale){
            $data = $business->where('locale', 'LIKE', "%".$request->locale."%")->get();
        }

        //term location
        if($request->term && $request->location){
            $data = $business->where('term', 'LIKE', "%".$request->term."%")->where('location', 'LIKE', "%".$request->location."%")->get();
        }

        //term latitude
        if($request->term && $request->latitude){
            $data = $business->where('term', 'LIKE', "%".$request->term."%")->where('latitude', 'LIKE', "%".$request->latitude."%")->get();
        }

        //term longitude
        if($request->term && $request->longitude){
            $data = $business->where('term', 'LIKE', "%".$request->term."%")->where('longitude', 'LIKE', "%".$request->longitude."%")->get();
        }

        //term locale
        if($request->term && $request->locale){
            $data = $business->where('term', 'LIKE', "%".$request->term."%")->where('locale', 'LIKE', "%".$request->locale."%")->get();
        }

        //location latitude
        if($request->location && $request->latitude){
            $data = $business->where('location', 'LIKE', "%".$request->location."%")->where('latitude', 'LIKE', "%".$request->latitude."%")->get();
        }

        //location longitude
        if($request->location && $request->longitude){
            $data = $business->where('location', 'LIKE', "%".$request->location."%")->where('longitude', 'LIKE', "%".$request->longitude."%")->get();
        }

        //location locale
        if($request->location && $request->locale){
            $data = $business->where('location', 'LIKE', "%".$request->location."%")->where('locale', 'LIKE', "%".$request->locale."%")->get();
        }

        //latitude longitude
        if($request->latitude && $request->longitude){
            $data = $business->where('latitude', 'LIKE', "%".$request->latitude."%")->where('longitude', 'LIKE', "%".$request->longitude."%")->get();
        }

        //latitude locale
        if($request->latitude && $request->locale){
            $data = $business->where('latitude', 'LIKE', "%".$request->latitude."%")->where('locale', 'LIKE', "%".$request->locale."%")->get();
        }

        //longitude locale
        if($request->longitude && $request->locale){
            $data = $business->where('longitude', 'LIKE', "%".$request->longitude."%")->where('locale', 'LIKE', "%".$request->locale."%")->get();
        }

        //term location latitude
        if($request->term && $request->location && $request->latitude){
            $data = $business->where('term', 'LIKE', "%".$request->term."%")->where('location', 'LIKE', "%".$request->location."%")->where('latitude', 'LIKE', "%".$request->latitude."%")->get();
        }

        //term location longitude
        if($request->term && $request->location && $request->longitude){
            $data = $business->where('term', 'LIKE', "%".$request->term."%")->where('location', 'LIKE', "%".$request->location."%")->where('longitude', 'LIKE', "%".$request->longitude."%")->get();
        }

        //term location locale
        if($request->term && $request->location && $request->locale){
            $data = $business->where('term', 'LIKE', "%".$request->term."%")->where('location', 'LIKE', "%".$request->location."%")->where('locale', 'LIKE', "%".$request->locale."%")->get();
        }

        //term latitude longitude
        if($request->term && $request->latitude && $request->longitude){
            $data = $business->where('term', 'LIKE', "%".$request->term."%")->where('latitude', 'LIKE', "%".$request->latitude."%")->where('longitude', 'LIKE', "%".$request->longitude."%")->get();
        }

        //term latitude locale
        if($request->term && $request->latitude && $request->locale){
            $data = $business->where('term', 'LIKE', "%".$request->term."%")->where('latitude', 'LIKE', "%".$request->latitude."%")->where('locale', 'LIKE', "%".$request->locale."%")->get();
        }

        //term longitude locale
        if($request->term && $request->longitude && $request->locale){
            $data = $business->where('term', 'LIKE', "%".$request->term."%")->where('longitude', 'LIKE', "%".$request->longitude."%")->where('locale', 'LIKE', "%".$request->locale."%")->get();
        }

        //location latitude longitude
        if($request->location && $request->latitude && $request->longitude){
            $data = $business->where('location', 'LIKE', "%".$request->location."%")->where('latitude', 'LIKE', "%".$request->latitude."%")->where('longitude', 'LIKE', "%".$request->longitude."%")->get();
        }

        //location latitude locale
        if($request->location && $request->latitude && $request->locale){
            $data = $business->where('location', 'LIKE', "%".$request->location."%")->where('latitude', 'LIKE', "%".$request->latitude."%")->where('locale', 'LIKE', "%".$request->locale."%")->get();
        }

        //location longitude locale
        if($request->location && $request->longitude && $request->locale){
            $data = $business->where('location', 'LIKE', "%".$request->location."%")->where('longitude', 'LIKE', "%".$request->longitude."%")->where('locale', 'LIKE', "%".$request->locale."%")->get();
        }

        //latitude longitude locale
        if($request->latitude && $request->longitude && $request->locale){
            $data = $business->where('latitude', 'LIKE', "%".$request->latitude."%")->where('longitude', 'LIKE', "%".$request->longitude."%")->where('locale', 'LIKE', "%".$request->locale."%")->get();
        }

        //term location latitude longitude
        if($request->term && $request->location && $request->latitude && $request->longitude){
            $data = $business->where('term', 'LIKE', "%".$request->term."%")->where('location', 'LIKE', "%".$request->location."%")->where('latitude', 'LIKE', "%".$request->latitude."%")->where('longitude', 'LIKE', "%".$request->longitude."%")->get();
        }

        //term location latitude locale
        if($request->term && $request->location && $request->latitude && $request->locale){
            $data = $business->where('term', 'LIKE', "%".$request->term."%")->where('location', 'LIKE', "%".$request->location."%")->where('latitude', 'LIKE', "%".$request->latitude."%")->where('locale', 'LIKE', "%".$request->locale."%")->get();
        }

        //term latitude longitude locale
        if($request->term && $request->latitude && $request->longitude && $request->locale){
            $data = $business->where('term', 'LIKE', "%".$request->term."%")->where('latitude', 'LIKE', "%".$request->latitude."%")->where('longitude', 'LIKE', "%".$request->longitude."%")->where('locale', 'LIKE', "%".$request->locale."%")->get();
        }

        //term location latitude longitude locale
        if($request->term && $request->location && $request->latitude && $request->longitude && $request->locale){
            $data = $business->where('term', 'LIKE', "%".$request->term."%")->where('location', 'LIKE', "%".$request->location."%")->where('latitude', 'LIKE', "%".$request->latitude."%")->where('longitude', 'LIKE', "%".$request->longitude."%")->where('locale', 'LIKE', "%".$request->locale."%")->get();
        }
        
        if ($data->isEmpty()){
            return response()->json([
                'status' => 200,
                'message' => 'Data Not Found',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => 200,
                'message' => 'Data Found',
                'data' => $data
            ], 200);
        }
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
        //validation
        $validator = Validator::make($request->all(), [
            'location' => 'required_without:latitude|required_without:longitude|string|min:1|max:250',
            'latitude' => 'required_without:location.city|required_with:longitude|numeric|min:-90|max:90',
            'longitude' => 'required_without:location.city|required_with:latitude|numeric|min:-180|max:180',
            'term' => 'string',
            'radius' => 'Integer|min:0|max:40000',
            'categories.*' => 'string',
            'locale' => 'string|regex:/^[a-z]{2,3}_[A-Z]{2}$/',
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
            'location.required' => 'Location City is Required',
            'location.min' => 'Location City minLength is 1',
            'location.max' => 'Location City maxLength is 250',
            'location.required_without' => 'Location City is Required When Latitude or Longitude is Null',
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
            'locale.string' => 'Locale Code Must be String',
            'locale.regex' => 'Locale Code format is invalid',
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
        //validation
        $validator = Validator::make($request->all(), [
            'location' => 'required_without:latitude|required_without:longitude|string|min:1|max:250',
            'latitude' => 'required_without:location.city|required_with:longitude|numeric|min:-90|max:90',
            'longitude' => 'required_without:location.city|required_with:latitude|numeric|min:-180|max:180',
            'term' => 'string',
            'radius' => 'Integer|min:0|max:40000',
            'categories.*' => 'string',
            'locale' => 'string|regex:/^[a-z]{2,3}_[A-Z]{2}$/',
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
            'location.required' => 'Location City is Required',
            'location.min' => 'Location City minLength is 1',
            'location.max' => 'Location City maxLength is 250',
            'location.required_without' => 'Location City is Required When Latitude or Longitude is Null',
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
            'locale.string' => 'Locale Code Must be String',
            'locale.regex' => 'Locale Code format is invalid',
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

        $business = Business::find($id);
        $business->update([
            'location' => $request->location,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'term' => $request->term,
            'radius' => $request->radius,
            'categories' => $request->categories,
            'locale' => $request->locale,
            'price' => $request->price,
            'review_count' => $request->review_count,
            'rating' => $request->rating,
            'open_now' => $request->open_now,
            'open_at' => $request->open_at,
            'attributes' => $request->attribute,
            'device_platform' => $request->device_platform,
            'reservation_date' => $request->reservation_date,
            'reservation_time' => $request->reservation_time,
            'reservation_covers' => $request->reservation_covers,
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        //Data updated, return success response
        return response()->json([
            'status' => 200,
            'message' => 'Data updated successfully',
            'data' => $business
        ], 200);
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
