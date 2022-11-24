<?php

namespace App\Http\Requests\Public\Cart;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreCartRequest extends FormRequest
{
    use CartConvert;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'productId' => 'bail|required',
            'sizeId' => 'bail|required',
            'quantity' => 'bail|required|numeric|min:1',
        ];
    }
}
