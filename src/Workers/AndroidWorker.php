<?php
namespace NullData\Workers;

class AndroidWorker implements WorkableInterface, ManageableInterface
{
    public function work()
    {
        echo "Android is hard working\n";
    }

    public function manage()
    {
        $this->work();
    }
}