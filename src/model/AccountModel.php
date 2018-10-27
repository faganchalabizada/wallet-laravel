<?php

namespace FaganChalabizada\Wallet\model;

use Illuminate\Database\Eloquent\Model;

class AccountModel extends Model
{
    protected $table;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'user_id', 'amount', 'account_type', 'transaction_type', 'transaction_date', 'transaction_status', 'transaction_code'];
    protected $connection = 'mysql';
    public $timestamps = false;


    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
        $this->table = config('Wallet.account_table');
    }

}
