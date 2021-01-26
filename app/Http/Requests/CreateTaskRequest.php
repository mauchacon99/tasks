<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Task;

class CreateTaskRequest extends FormRequest
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
            'description' => ['required', 'present']
        ];
    }

    public function messages()
    {
        return [
            'description.required' => ' Campo Requerido',
            'description.present'  => ' Recargas paginas Web'
        ];
    }

    public function createTask()
    {
         $Task = new Task;
         return $Task->create([
             'description' => $this->description
         ]);
    }
}
