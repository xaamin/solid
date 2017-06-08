<?php
namespace NullData\Repositories;

class SalesFilesystemRepository implements SalesRepositoryInterface
{
    public function getByPeriod($startDate, $endDate)
    {
        // Query Filesystem and return data
        $result = [
            [
                'id' => 1,
                'client' => 'Carlos',
                'total' => 200
            ],
            [
                'id' => 1,
                'client' => 'Rafael',
                'total' => 200
            ]
        ];

        return $result;
    }
}