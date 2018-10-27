<?php
namespace FaganChalabizada\Wallet\model;
use Illuminate\Database\Eloquent\Model;
class TransactionTypeModel extends Model
{
    protected $table;


    function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
        $this->table = config('Wallet.transaction_types_table');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','code','status'];
    protected $connection = 'mysql';
    public $timestamps = false;
}