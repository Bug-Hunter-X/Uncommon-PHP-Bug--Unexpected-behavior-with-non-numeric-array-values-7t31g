```php
function calculate_average(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  //Filter Non-numeric values
  $numericNumbers = array_filter($numbers, 'is_numeric');
  if(empty($numericNumbers)){
    return 0.0;
  }
  $sum = array_sum($numericNumbers);
  $count = count($numericNumbers);

  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; //This will output 15.0

$numbers = [10, 20, 30, 0, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; //This will output 12.0

$numbers = [];
$average = calculate_average($numbers);
echo "Average: " . $average; //This will output 0.0

$numbers = [10, 20, 'thirty'];
$average = calculate_average($numbers);
echo "Average: " . $average; //This will output 15.0
```