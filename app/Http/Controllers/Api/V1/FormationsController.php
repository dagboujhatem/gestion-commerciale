<?php

namespace App\Http\Controllers\Api\V1;

use App\Formation;
use App\Http\Controllers\Controller;
use App\Http\Resources\Formation as FormationResource;
use App\Http\Requests\Admin\StoreFormationsRequest;
use App\Http\Requests\Admin\UpdateFormationsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;



class FormationsController extends Controller
{
    public function index()
    {
        

        return new FormationResource(Formation::with([])->get());
    }

    public function show($id)
    {
        if (Gate::denies('formation_view')) {
            return abort(401);
        }

        $formation = Formation::with([])->findOrFail($id);

        return new FormationResource($formation);
    }

    public function store(StoreFormationsRequest $request)
    {
        if (Gate::denies('formation_create')) {
            return abort(401);
        }

        $formation = Formation::create($request->all());
        
        

        return (new FormationResource($formation))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateFormationsRequest $request, $id)
    {
        if (Gate::denies('formation_edit')) {
            return abort(401);
        }

        $formation = Formation::findOrFail($id);
        $formation->update($request->all());
        
        
        

        return (new FormationResource($formation))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        if (Gate::denies('formation_delete')) {
            return abort(401);
        }

        $formation = Formation::findOrFail($id);
        $formation->delete();

        return response(null, 204);
    }
}
