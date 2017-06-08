<?php
namespace NullData\Workers;

class HumanWorker implements WorkableInterface, SleepableInterface, ManageableInterface
{
    public function work()
    {
        echo "Human is hard working\n";
    }

    public function sleep()
    {
        echo "Human goes home to sleep\n";
    }

    public function manage()
    {
        $this->work();
        $this->sleep();
    }
}