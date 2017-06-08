<?php
namespace NullData;

use NullData\Repositories\SalesRepositoryInterface;

class LiskovReporter
{
    protected $repository;

    public function __construct(SalesRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function between($startDate, $endDate)
    {
        return $this->repository->getByPeriod($startDate, $endDate);
    }
}