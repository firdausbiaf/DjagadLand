@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.show') }} {{ trans('cruds.data.title') }}
        </h4>
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.data.fields.id') }}
                        </th>
                        <td>
                            {{ $data->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data.fields.user') }}
                        </th>
                        <td>
                            {{ $data->user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data.fields.telepon') }}
                        </th>
                        <td>
                            {{ $data->telepon ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data.fields.kavling') }}
                        </th>
                        <td>
                            {{ $data->kavling ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data.fields.tipe') }}
                        </th>
                        <td>
                            {{ $data->tipe ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data.fields.spk') }}
                        </th>
                        <td>
                            {{ $data->spk ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data.fields.progres') }}
                        </th>
                        <td>
                            {{ $data->progres ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data.fields.cicilan') }}
                        </th>
                        <td>
                            {{ $data->cicilan ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>
@endsection
