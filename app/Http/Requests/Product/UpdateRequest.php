<?php

namespace App\Http\Requests\Product;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

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
            'price'=>['nullable', 'string', 'numeric'],
            'description'=>['nullable', 'string'],
            'additional_information'=>['nullable', 'string'],
            'SKU'=>['nullable', 'string'],
            'cover_image.*' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
        ];
    }


    public function updateProduct($id)
    {
        $product = Product::find($id);
    
        $product->update([
            'name' => $this->input('name'),
            'price' => $this->input('price'),
            'description' => $this->input('description'),
            'additional_information' => $this->input('additional_information'),
            'category_id' => $this->input('category_id'),
            'SKU' => $this->input('SKU'),
            'image' => update_image('upload/product/', $product->image, 'image')
        ]);
    
        if ($this->hasFile('cover_image')) {
            $coverImages = upload_multiple_images('upload/cover');
            $product->cover_image = json_encode($coverImages);
        }
    
        if ($this->has('remove_cover_images')) {
            $removeImages = $this->input('remove_cover_images');
            $coverImages = json_decode($product->cover_image, true);
    
            foreach ($removeImages as $imageName) {
                $index = array_search($imageName, $coverImages);
                if ($index !== false) {
                    unset($coverImages[$index]);
                }
            }
    
            $product->cover_image = json_encode(array_values($coverImages));
        }
    
        $product->save();
    
        return true;
    }
    
}
