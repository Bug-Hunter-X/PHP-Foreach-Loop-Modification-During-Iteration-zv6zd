function foo(array $arr) {
  $newArray = [];
  foreach ($arr as $key => $value) {
    if ($value !== 'target') {
      $newArray[] = $value;
    }
  }
  return $newArray;
}

$arr = ['a', 'b', 'target', 'd'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => a [1] => b [2] => d )