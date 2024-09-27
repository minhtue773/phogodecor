<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0|max:100',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'stock' => 'required|integer|min:0',
            'status' => 'required|in:0,1,2',
            'description' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm là bắt buộc.',
            'name.max' => 'Tên sản phẩm không được vượt quá 255 ký tự.',
            'category_id.required' => 'Vui lòng chọn danh mục sản phẩm.',
            'category_id.exists' => 'Danh mục không hợp lệ.',
            'price.required' => 'Giá sản phẩm là bắt buộc.',
            'price.numeric' => 'Giá sản phẩm phải là một số.',
            'discount_price.numeric' => 'Giảm giá phải là một số.',
            'discount_price.min' => 'Giảm giá không được nhỏ hơn 0%.',
            'discount_price.max' => 'Giảm giá không được lớn hơn 100%.',
            'photo.image' => 'Ảnh sản phẩm phải là định dạng hình ảnh.',
            'photo.mimes' => 'Ảnh sản phẩm phải là tệp có đuôi jpeg, png, jpg, gif.',
            'photo.max' => 'Dung lượng ảnh sản phẩm không được vượt quá 2MB.',
            'photos.*.image' => 'Ảnh liên quan phải là định dạng hình ảnh.',
            'photos.*.mimes' => 'Ảnh liên quan phải là tệp có đuôi jpeg, png, jpg, gif.',
            'photos.*.max' => 'Dung lượng ảnh liên quan không được vượt quá 2MB.',
            'stock.required' => 'Số lượng sản phẩm là bắt buộc.',
            'stock.integer' => 'Số lượng sản phẩm phải là một số nguyên.',
            'status.required' => 'Vui lòng chọn trạng thái sản phẩm.',
            'status.in' => 'Trạng thái sản phẩm không hợp lệ.'
        ];
    }
}
