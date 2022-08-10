<?php

declare(strict_types = 1);
namespace Chartron\PHP;

class ChartData
{
     /**
     * Stores the dataset name.
     *
     * @var string
     */
    public string $label;
    public array $values;

    public function __construct(string $label, array $values)
    {
        $this->label = $label;
        $this->values = $values;
    }
}

