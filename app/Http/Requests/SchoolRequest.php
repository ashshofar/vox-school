<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'name'              => 'required|string',
                    'address'           => 'required|string',
                    'max_student'       => 'required|integer|min:1',
                    'annual_fee'        => 'integer'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name'      => 'required',
                ];
            }
            default:break;
        }
    }
}
