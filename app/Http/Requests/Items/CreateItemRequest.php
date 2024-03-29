<?php

namespace App\Http\Requests\Items;

use App\Http\Requests\Request;

class CreateItemRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name'          => 'required|string|min:6|max:20',
            'identifier'    => 'required|string|min:6',
            'location'      => 'required|numeric',
            'value'         => 'required|numeric',
            'coverImage'    => 'required|image'
        ];
    }
}
