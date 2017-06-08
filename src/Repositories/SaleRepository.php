<?php
namespace NullData\Repositories;

class SaleRepository
{
    public function between($startDate, $endDate)
    {
        // Consulta a base datos
        //DB::table('sales')-whereBetween($startDate, $endDate)->sum('total');

        $total = '4208.5';

        return $total;
    }
}