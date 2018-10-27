<?php
namespace FaganChalabizada\Wallet\model;
use Illuminate\Database\Eloquent\Model;
class UserTotalBalance extends Model
{
    protected $table;

    function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
        $this->table = config('Wallet.user_total_balance_table');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','user_id','total_balance','modify_date'];
    protected $connection = 'mysql';
    public $timestamps = false;
}