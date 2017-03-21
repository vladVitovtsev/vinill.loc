<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @package App\Model\Product
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property integer $count
 * @property integer $size
 * @property string $label
 * @property string $country
 * @property string $year
 * @property integer $condition
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Product whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Product whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Product whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Product whereCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Product whereSize($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Product whereLabel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Product whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Product whereYear($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Product whereCondition($value)
 */
class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * Получить владельца данного товара.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
