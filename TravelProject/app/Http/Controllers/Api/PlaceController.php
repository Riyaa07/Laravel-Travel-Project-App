<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlaceResource;
use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlaceController extends Controller
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
        $query = Place::query();
        $query->when(request()->filled('filter'), function ($query) {
            [$criteria, $value] = explode(':', request('filter'));
            return $query->where($criteria, $value);
        });
        $places = $query->orderBy($sortColumn, $sortDirection)->paginate(4);
        return PlaceResource::collection($places);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return PlaceResource
     */
    public function store(PlaceResource $request)
    {
        try {
            $place =  Place::create($request->all());
        } catch(\Exception $e) {
            return response()->json([
                'errors' => [
                    'title'  => 'Could not find article',
                    'detail' => $e->getMessage(),
                    'code'   => 1,
                ],
            ], 404);
        }
        return new PlaceResource($place);
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
            $place =  Place::findOrFail($id);
        } catch(\Exception $e) {
            return response()->json([
                'errors' => [
                    'title'  => 'Could not find article',
                    'detail' => $e->getMessage(),
                    'code'   => 1,
                ],
            ], 404);
        }
        return new PlaceResource($place);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlaceResource $request, $id)
    {
        try {
            $place = Place::findOrFail($id);
            $place->update($request->all());
        } catch(\Exception $e) {
            return response()->json([
                'errors' => [
                    'title'  => 'Could not find article',
                    'detail' => $e->getMessage(),
                    'code'   => 1,
                ],
            ], 404);
        }
        return new PlaceResource($place);
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
            $place = Place::findOrFail($id);
            $place->delete();

        } catch(\Exception $e) {
            return response()->json([
                'errors' => [
                    'title'  => 'Could not find article',
                    'detail' => $e->getMessage(),
                    'code'   => 1,
                ],
            ], 404);
        }
        return response()->json(null, 204);
    }
}
