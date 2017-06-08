<?php
namespace NullData\Workers;

use NullData\Workers\ManageableInterface;

class WorkersManager
{
    public function manage(ManageableInterface $worker)
    {
        $worker->manage();
    }
}