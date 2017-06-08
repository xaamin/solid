<?php
namespace NullData;

use NullData\Repositories\SaleRepository;
use NullData\Formatters\FormatterInterface;

class Reporter
{
    protected $repository;

    public function __construct(SaleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function between($startDate, $endDate, FormatterInterface $formatter)
    {
        $total = $this->repository->between($startDate, $endDate);

        return $formatter->format($total);
    }
}