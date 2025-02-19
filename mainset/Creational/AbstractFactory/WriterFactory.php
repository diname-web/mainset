<?php

interface WriterFactory
{
    public function createJsonWriter();
    public function createCsvWriter();

}