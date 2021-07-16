<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $table = 'vacancies';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'salary',
        'experience',
        'offer',
        'responsibilities',
        'requirements',
        'conditions',
        'published',
        'category_id',
        'address'
    ];

    public static function rules()
    {
        return [
            'name' => "required",
            'salary' => 'required',
            'experience' => 'required',
            'offer' => 'required',
            'responsibilities' => 'required',
            'requirements' => 'required',
            'conditions' => 'required',
            'category_id' => 'required',
            'address' => 'required',
//            'published' => 'required'
        ];
    }

    public static function attributesName() {
        return [
            'name' => "название вакансии",
            'salary' => 'оклад',
            'experience' => 'опыт',
            'offer' => 'мы предлагаем',
            'responsibilities' => 'обязаности',
            'requirements' => 'требования',
            'conditions' => 'условия',
            'category_id' => 'категория',
            'address' => 'адрес',
        ];
    }
}
