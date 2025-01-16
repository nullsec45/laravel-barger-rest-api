<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules= [
            'title' => ['required','max:20','unique:articles'],
            'body' => ['required','min:5']
        ];

        if ($this->isMethod("patch")) {
            $article=$this->route('article');
            $rules["title"][2] = Rule::unique('articles')->ignore($article->title);
        }

        return $rules;
        
    }
}
