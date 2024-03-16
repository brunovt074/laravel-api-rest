<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class InvoiceFilter extends ApiFilter{

    protected $safeParams = [
        'customerId' => ['eq'],
        'amount' => ['eq','gt','lt','lte'],
        'status' => ['eq','ne'],
        'billedDate' => ['eq','gt','lt','lte'],
        'paidDate' => ['eq','gt','lt','lte'],        
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_dated',
        'paidDate' => 'paid_dated',  
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];

}