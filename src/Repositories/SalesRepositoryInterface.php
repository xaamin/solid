<?php
namespace NullData\Repositories;

interface SalesRepositoryInterface
{
    /**
     * @param $startDate Begins of period
     * @param $endDate Ends of period
     *
     * @return array
     */
    public function getByPeriod($startDate, $endDate);
}