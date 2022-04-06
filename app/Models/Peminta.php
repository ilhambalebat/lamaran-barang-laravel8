<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Peminta extends Model
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

    public function departemen()
    {
        return $this->BelongsTo(Departemen::class);
    }
}
