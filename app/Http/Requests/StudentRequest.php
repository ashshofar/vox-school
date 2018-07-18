<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
                    'first_name'     => 'required|string',
                    'last_name'      => 'required|string',
                    'birthdate'       => 'required|date',
                    'school_id'      => 'required|integer'
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
