function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'target') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'target', 'd'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => a [1] => b [3] => d )

// The problem is that the foreach loop modifies the array during iteration.
// This leads to skipping elements in the array. 
//  A better approach would be to use a new array to store the elements to keep.