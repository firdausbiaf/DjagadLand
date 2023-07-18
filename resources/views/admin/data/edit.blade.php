@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} {{ trans('cruds.data.title_singular') }}
        </h4>
    </div>

    <div class="card-body">
        <<form action="{{ route("admin.data.update", [$data->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
                <label for="user_id">{{ trans('cruds.data.fields.user') }}*</label>
                <select name="user_id" id="user_id" class="form-control select2" required>
                    @foreach($users as $id => $user)
                        <option value="{{ $id }}" {{ (isset($data) && $data->user_id == $id) ? 'selected' : '' }}>{{ $user }}</option>
                    @endforeach
                </select>
                @if($errors->has('user_id'))
                    <p class="help-block">
                        {{ $errors->first('user_id') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.data.fields.user_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('telepon') ? 'has-error' : '' }}">
                <label for="telepon">{{ trans('cruds.data.fields.telepon') }}</label>
                <input type="text" id="telepon" name="telepon" class="form-control" value="{{ old('telepon', isset($data) ? $data->telepon : '') }}">
                @if($errors->has('telepon'))
                    <p class="help-block">
                        {{ $errors->first('telepon') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.data.fields.telepon_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
                <label for="alamat">{{ trans('cruds.data.fields.alamat') }}</label>
                <input type="text" id="alamat" name="alamat" class="form-control" value="{{ old('alamat', isset($data) ? $data->alamat : '') }}">
                @if($errors->has('alamat'))
                    <p class="help-block">
                        {{ $errors->first('alamat') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.data.fields.alamat_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('kavling') ? 'has-error' : '' }}">
                <label for="kavling">{{ trans('cruds.data.fields.kavling') }}</label>
                <input type="text" id="kavling" name="kavling" class="form-control" value="{{ old('kavling', isset($data) ? $data->kavling : '') }}">
                @if($errors->has('kavling'))
                    <p class="help-block">
                        {{ $errors->first('kavling') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.data.fields.kavling_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('tipe') ? 'has-error' : '' }}">
                <label for="tipe">{{ trans('cruds.data.fields.tipe') }}</label>
                <input type="text" id="tipe" name="tipe" class="form-control" value="{{ old('tipe', isset($data) ? $data->tipe : '') }}">
                @if($errors->has('tipe'))
                    <p class="help-block">
                        {{ $errors->first('tipe') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.data.fields.tipe_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('spk') ? 'has-error' : '' }}">
                <label for="spk">{{ trans('cruds.data.fields.spk') }}</label>
                <input type="text" id="spk" name="spk" class="form-control" value="{{ old('spk', isset($data) ? $data->spk : '') }}">
                @if($errors->has('spk'))
                    <p class="help-block">
                        {{ $errors->first('spk') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.data.fields.spk_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('progres') ? 'has-error' : '' }}">
                <label for="progres">{{ trans('cruds.data.fields.progres') }} ( % ) </label>
                <input type="text" id="progres" name="progres" class="form-control" value="{{ old('progres', isset($data) ? $data->progres : '') }}">
                @if($errors->has('progres'))
                    <p class="help-block">
                        {{ $errors->first('progres') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.data.fields.progres_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('cicilan') ? 'has-error' : '' }}">
                <label for="cicilan">{{ trans('cruds.data.fields.cicilan') }}</label>
                <input type="text" id="cicilan" name="cicilan" class="form-control" value="{{ old('cicilan', isset($data) ? $data->cicilan : '') }}">
                @if($errors->has('cicilan'))
                    <p class="help-block">
                        {{ $errors->first('cicilan') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.data.fields.cicilan_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
