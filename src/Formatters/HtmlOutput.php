<?php
namespace NullData\Formatters;

class HtmlOutput implements FormatterInterface
{
    public function format($total)
    {
        return "<strong>$total</strong>";
    }
}