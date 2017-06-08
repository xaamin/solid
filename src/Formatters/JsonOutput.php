<?php
namespace NullData\Formatters;

class JsonOutput implements FormatterInterface
{
    public function format($total)
    {
        return json_encode(['total' => $total]);
    }
}