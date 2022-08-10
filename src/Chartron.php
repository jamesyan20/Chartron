<?php

declare(strict_types = 1);
namespace Chartron\APP;

class Chartron
{
    protected DatasetData $datasetData;

    public function __construct(DatasetData $datasetData)
    {
        $this->datasetData = $datasetData;
    }

    public static function build(): Chartron
    {
        return new Chartron(new DatasetData);
    }

    public function labels(array $labels){  
        $this->datasetData->labels = $labels;
        return $this;
    }

    public function dataset(string $label,array $values){  
        
        return $this->advancedDataset($label,$values);
    }

    public function advancedDataset(string $label, array $values): Chartron
    {
        $dataset = $this->getDataset($label);
        if ($dataset) {
            $dataset->label = $label;
            $dataset->values = $values;
        } else {
            $this->datasetData->datasets[] = new ChartData($label, $values);
        }
        return $this;
    }

    public function keep()
    {   
        $d = (array) $this->datasetData;
        $t = json_decode(json_encode($this),true);

        return array_merge($d,$t);
    }

    protected function getDataset(string $label): ? Chartron
    {
        foreach ($this->datasetData->datasets as $dataset) {
            if ($dataset->label == $label) {
                return $dataset;
            }
        }
        return null;
    }


}
