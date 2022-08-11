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

    public function dataset(string $label,array $data,array $options = []){  
        
        return $this->advancedDataset($label,$data,$options);
    }

    public function advancedDataset(string $label, array $data,array $options): Chartron
    {
        $dataset = $this->getDataset($label);
        if ($dataset) {
            $dataset->label = $label;
            $dataset->data = $data;
            $dataset->options = $options;
        } else {
            $this->datasetData->datasets[] = new ChartData($label, $data,$options);
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
