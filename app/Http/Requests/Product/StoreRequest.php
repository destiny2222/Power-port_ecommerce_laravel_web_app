<?php

namespace App\Http\Requests\Product;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
       
        return [
            'name'=>['required', 'string'],
            'price'=>['nullable', 'string', 'numeric'],
            'description'=>['nullable', 'string'],
            'additional_information'=>['nullable', 'string'],
            'SKU'=>['nullable', 'string'],
            'cover_image.*' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
        ];
    }


    public function createProduct(){
        Product::create([ 
            'name'=> $this->name,
            'price'=> $this->price,
            'description'=> $this->description,
            'additional_information'=> $this->additional_information,
            'SKU'=>$this->SKU,
            'status'=>$this->status,
            'slug'=>Str::slug($this->name),
            'category_id'=>$this->category_id,
            'image'=>upload_single_image('upload/product/' , 'image'),
            'cover_image'=>upload_multiple_images('upload/cover/', 'cover_image'),
         ]);
         return true;
    }
}
