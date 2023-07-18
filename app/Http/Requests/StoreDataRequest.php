<?php

namespace App\Http\Requests;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id'     => [
                'required',
            ],
            'telepon'    => [
                'required',
            ],
            'alamat'    => [
                'required',
            ],
            'kavling' => [
                'required',
            ],
            'tipe*'  => [
                'required',
            ],
            'spk'    => [
                'required',
            ],
            'progres'    => [
                'required',
            ],
            'cicilan'    => [
                'required',
            ],
        ];
    }
}
