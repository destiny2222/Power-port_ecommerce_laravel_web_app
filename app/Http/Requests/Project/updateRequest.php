<?php

namespace App\Http\Requests\Project;

use App\Models\Project;
use Illuminate\Foundation\Http\FormRequest;

class updateRequest extends FormRequest
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
            'name'=>['nullable', 'string'],
            'image'=>['nullable',  'image', 'mimes:png,jpg,jpeg,gif,svg'],
        ];
    }

    public function uodateProject($id){
        $project = Project::find($id);
        if($project){
            $project->update([ 
                'name'=> $this->input('name'),
                'image' => update_image('upload/project/', $project->image, 'image')
            ]);
        };

        return true;
    }
}
