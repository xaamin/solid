<?php
namespace NullData\Repositories;

use NullData\Eloquent\Sale;

class SalesDatabaseRepository implements SalesRepositoryInterface
{
    public function getByPeriod($startDate, $endDate)
    {
        // Query Filesystem and return data
        // Illuminate\Support\Collection;
        return Sale::whereBetween('created_at', [$startDate, $endDate])->get()->toArray();
    }
}