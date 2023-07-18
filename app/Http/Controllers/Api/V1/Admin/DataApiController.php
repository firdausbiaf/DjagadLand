<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDataRequest;
use App\Http\Requests\UpdateDataRequest;
use App\Http\Resources\Admin\DataResource;
use App\Data;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DataApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        return DataResource::collection(Data::all());
    }

    public function store(StoreDataRequest $request)
    {
        abort_if(Gate::denies('data_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        $data = Data::create($request->all());

        return (new DataResource($data))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Data $data)
    {
        abort_if(Gate::denies('data_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        return new DataResource($data);
    }

    public function update(UpdateDataRequest $request, Data $data)
    {
        abort_if(Gate::denies('data_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        $data->update($request->all());

        return (new DataResource($data))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Data $data)
    {
        abort_if(Gate::denies('data_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        $data->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
