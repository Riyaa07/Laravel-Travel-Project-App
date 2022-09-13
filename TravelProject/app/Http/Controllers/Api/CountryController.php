<?php

namespace App\Http\Controllers\Api;

use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sortColumn = $request->input('sort', 'id');
        $sortDirection = Str::startsWith($sortColumn, '-') ? 'desc' : 'asc';
        $sortColumn = ltrim($sortColumn, '-');
        $query = Country::query();
        $query->when(request()->filled('filter'), function ($query) {
            [$criteria, $value] = explode(':', request('filter'));
            return $query->where($criteria, $value);
        });

        $countries = $query->orderBy($sortColumn, $sortDirection)->paginate(3);
        return CountryResource::collection($countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryResource $request)
    {
        try {
            $countries =  Country::create($request->all());
        } catch(\Exception $e) {
            return response()->json([
                'errors' => [
                    'title'  => 'Could not find category',
                    'detail' => $e->getMessage(),
                    'code'   => 1,
                ],
            ], 404);
        }
        return new CountryResource($countries);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $countries =  Country::findOrFail($id);
        } catch(\Exception $e) {
            return response()->json([
                'errors' => [
                    'title'  => 'Could not find category',
                    'detail' => $e->getMessage(),
                    'code'   => 1,
                ],
            ], 404);
        }
        return new CountryResource($countries);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountryResource $request, $id)
    {
        try {
            $countries = Country::findOrFail($id);
            $countries->update($request->all());
        } catch(\Exception $e) {
            return response()->json([
                'errors' => [
                    'title'  => 'Could not find category',
                    'detail' => $e->getMessage(),
                    'code'   => 1,
                ],
            ], 404);
        }
        return new CountryResource($countries);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $countries = Country::findOrFail($id);
            $countries->delete();

        } catch(\Exception $e) {
            return response()->json([
                'errors' => [
                    'title'  => 'Could not find category',
                    'detail' => $e->getMessage(),
                    'code'   => 1,
                ],
            ], 404);
        }
        return response()->json(null, 204);
    }
}
