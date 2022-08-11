<?php

declare(strict_types = 1);
namespace Chartron\APP;

class ChartData
{
     /**
     * Stores the dataset name.
     *
     * @var string
     */
    public string $label;
    public array $data;
    public array $options;

    public function __construct(string $label, array $data,array $options)
    {
        $this->label = $label;
        $this->data = $data;
        $this->options = $options;
    }
}

