<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Permintaan extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    public $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) :
                $model->{$model->getKeyName()} = Str::uuid();
            endif;
        });
    }

    public function peminta()
    {
        return $this->belongsTo(Peminta::class);
    }
}
