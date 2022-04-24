<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class BaseRequest extends FormRequest
{
    /** @var array<string, mixed> Map of validation rules that apply to the request. */
    protected array $rules = [];

    /**
     * @return array<string, mixed> Map of validation rules that apply to the request.
     */
    public function rules(): array
    {
        return $this->rules;
    }
}
