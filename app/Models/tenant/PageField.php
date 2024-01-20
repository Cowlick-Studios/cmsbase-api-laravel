<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PageField extends Model
{
  use HasFactory;

  protected $table = 'page_fields';

  protected $fillable = [
    'page_id',
    'type_id',
    'name'
  ];

  public function type(): BelongsTo
  {
    return $this->belongsTo(CollectionFieldType::class, 'type_id', 'id');
  }
}
