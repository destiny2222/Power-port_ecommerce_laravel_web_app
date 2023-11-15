<?php

namespace App\Http\Requests\Category;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>['required', 'string'],
        ];
    }


    public function upddatCategory($id){
         $category = Category::find($id);
         $category->update([
            'name'=> $this->input('name'),
            'slug'=>Str::slug($this->input('name')),
         ]);
         return true;
    }
}
