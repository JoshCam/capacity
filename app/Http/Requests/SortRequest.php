<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SortRequest extends FormRequest
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
        return [
            'sort' => Rule::in(['name', 'ratio']),
            'direction' => Rule::in(['asc', 'desc']),
        ];
    }

    public function getSortDirection() {
        return $this->input('direction', 'asc');
    }

    public function getSort() {
        return $this->input('sort', 'name');
    }
}
