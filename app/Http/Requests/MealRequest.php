<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MealRequest extends FormRequest
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
            'name' => 'required|unique:meals|max:20',
            'category_id' => 'required',
            'img' => 'required|image',
            'difficulty' =>'required',
            'cost' => 'required|numeric',
            'ingredient' =>'required|max:200',
            'way' =>'required|max:200'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '※料理名を入力してください。',
            'name.unique' => '※同じ名前の料理が存在します。',
            'name.max' => '※料理名は20文字以内で入力してください。',
            'category_id.required' => '※カテゴリーを選択してください',
            'img.required' => '※料理の画像をアップロードしてください',
            'img.image' =>'※ファイルは画像（jpg、jpeg、png、bmp、gif、svg、webp）である必要があります',
            'cost.required' => '※コストを入力してください',
            'cost.numeric' => '※コストは整数で入力してください',
            'difficulty.required' =>'※難易度を選択してください',
            'ingredient.required' =>'※材料メモを入力してください',
            'ingredient.max' => '※材料メモは200文字以内で入力してください',
            'way.required' =>'※作り方を入力してください',
            'way.max' => '※作り方は200文字以内で入力してください'
        ];
        }
}
