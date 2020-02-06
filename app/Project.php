<?php

namespace App;

use Illuminate\Database\Eloquent\Model;




class Project extends Model
{

    protected $fillable = [
        'name', 'deadline', 'user_id'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }


    public static function rules($update = false, $id = null)
    {
        $common = [
            'name'    => "required|unique:projects",
            'deadline' => 'required',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            'name'    => "required|unique:projects",
            'deadline' => 'required',
        ]);
    }
}
