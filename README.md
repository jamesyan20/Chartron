# Chartron | The easiest way to setup your dataset with PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
![Chartron Usage Model](https://user-images.githubusercontent.com/29663800/184460715-e4d83011-694a-439d-81ca-4c50bd156733.png)


## About Chartron

Chartron is a PHP library with elegant syntax. The easiest way to setup your dataset.

If you are using the `Laravel framework` i highly recommend the usage of [chartron-routes](https://github.com/jamesyan20/chartron-routes)

## Example usage

This example code generates the dataset for the graph above.

```php
//declare the library
use Chartron\APP\Chartron;

//build and configurations
$chartron = Chartron::build();
$chartron->monthLabels("EN");
    
//chart customization options
$options1 = ["backgroundColor"=>"#F20000"];
$options2 = ["backgroundColor"=>"#10A774"];
    
//set chartron datasets
$chartron->dataset("Team",[4,2,1,4,3,1,2,5,7,3,1,3],$options1);
$chartron->dataset('User',[1,2,7,6,4,5,1,5,7,1,2,5],$options2);
    
//return the json data object
return $chartron->keep();
```

## Instalation

```sh
composer require chartron/app
```

## First Steps
First initiate the cartron object
```php
$chartron = Chartron::build();
```
Setup the chart label
```php
$chartron->labels(["First","Second","Third"]);
```
Setup the dataset
```php
$chartron->dataset("Users",[4,2,1]);
```
Then use the method `keep` to generate the JSON object;
```php
$chartron->keep();
```
## Options
Inside the option field you have the possibily to customtize with whenever you want based in the front end library chart you are using.
```php
$options = ["backgroundColor"=>"#F20000"];
```
In this example i'm using [Chart JS](https://www.chartjs.org/) so i set the `backgroundColor` to `#F20000` according to the Chart JS documentation 

## License
[MIT License](https://github.com/jamesyan20/Chartron/blob/3686941f83a1a838b9714f5d402e384d43f1040c/LICENSE.md)



