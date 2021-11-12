<?php

namespace App\Http\Requests\Admin\Room;

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
            'name' => 'required|max:100',
            'introduce' => 'required',
            'room_type' => 'required',
            'price' => 'required',
            'introduce_of_room' => 'required',
            'status' => 'required',
            'feature_image_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name không được để trống',
            'name.max' => 'Họ tên không được vượt quá 100 ký tự',
            'introduce.required' => 'introduce không được để trống',
        ];
    }
}
