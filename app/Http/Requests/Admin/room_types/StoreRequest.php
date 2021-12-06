<?php

namespace App\Http\Requests\Admin\room_types;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|max:300',
            'introduce' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên loại phòng không được để trống',
            'name.max' => 'Tên loại phòng không được vượt quá 300 ký tự',
            'introduce.required' => 'Thông điệp không được để trống',
        ];
    }
}
