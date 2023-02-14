<?php

declare(strict_types=1);

namespace jokodm\Datamining\Dataset\Demo;

use jokodm\Datamining\Dataset\CsvDataset;

class FraudDetection extends CsvDataset
{
    public function __construct()
    {
        $filepath = __DIR__ . '/../../data/fraud_detection.csv';
        parent::__construct($filepath, 7, true);
    }
}