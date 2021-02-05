<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $guarded = ['id'];

    /**
     * usersテーブルとリレーション
     */
    public function users() 
    {
        return $this->belongsTo(
            'App\Models\User',       // 結合先テーブル
            'user_id',                // FK
            'id'                      // リレーション先モデルのFK
        );
    }
}
