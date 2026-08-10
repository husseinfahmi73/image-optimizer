<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ImageUploadRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'required|file|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5120',
        ];
    }

    public function messages(): array{
        return[
            'image.required' => 'يرجى اختيار صورة أولاً لرفعها',
            'image.file'     => 'الملف المرفوع غير صالح',
            'image.image'    => 'عذراً! الملف المرفوع يجب أن يكون صورة وليس ملفاً آخر',
            'image.mimes'    => 'صيغة الصورة يجب أن تكون إحدى الصيغ التالية: jpeg, png, jpg, gif, webp',
            'image.max'      => 'حجم الصورة كبير جداً، الحد الأقصى المسموح به هو 5 ميجابايت',
        ];
    }
}
