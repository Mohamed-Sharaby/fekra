<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GuestMessage
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property string|null $phone
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GuestMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GuestMessage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GuestMessage query()
 * @method static \Illuminate\Database\Eloquent\Builder|GuestMessage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GuestMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GuestMessage whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GuestMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GuestMessage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GuestMessage wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GuestMessage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GuestMessage extends Model
{
    use HasFactory;
    protected $guarded = [];


}
