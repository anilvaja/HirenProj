<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['order_type', 'company', 'work_order_no', 'weight', 'kva', 'expected_delivery_date', 'po_date', 'po_no', 'rate', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function order_types()
    {
        return $this->belongsTo('App\OrderType');
    }
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function channel()
    {
        return $this->belongsTo('App\Channel');
    }
    public function status()
    {
        return $this->belongsTo('App\OrderStatus');
    }
    
}
