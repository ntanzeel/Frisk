<?php

namespace App\Http\Requests\Resources;

use App\Http\Requests\Request;

class CreateResourceRequest extends Request {

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
            'item_id' => 'required|numeric',
            'file' => 'required'
        ];
    }
}
