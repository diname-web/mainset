<?php

class WinCsvWriter implements CsvWriter
{

    public function write(array $line): string
    {
        return join(',', $line) . "\n";
    }
}