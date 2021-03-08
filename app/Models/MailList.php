<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MailList
 *
 * @property int $id
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MailList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MailList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MailList query()
 * @method static \Illuminate\Database\Eloquent\Builder|MailList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MailList whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MailList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MailList whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MailList extends Model
{
    use HasFactory;
    protected $guarded = [];
}
