<?php

interface JsonWriter
{
    public function write(array $data, bool $formated): string;

}