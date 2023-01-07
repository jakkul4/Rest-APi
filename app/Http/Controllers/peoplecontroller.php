<?php

namespace App\Http\Controllers;

use App\Models\people;
use Illuminate\Http\Request;
use App\Http\Resources\peopleresource;

class peoplecontroller extends Controller
{
    public function index()
    {
        $people=people::all();
        return response(\App\Http\Resources\peopleresource::collection($people),200);
    }

    public function create(Request $request)
        {
            $people = people::create($request->all());
    
            return response(new peopleresource($people), 201);
        }

    public function show(people $people, int $id)
    {
        return response(people::find($id),200);
    }

    public function update(Request $request, people $people, int $id)
    {
        $ppl = people::find($id);

        $ppl->update($request->all());

        return response($ppl, 200);
    }

    public function destroy(people $people,int $id)
    {
        $people = people::destroy($id);

        return response('Record deleted', 204);
    }
}
