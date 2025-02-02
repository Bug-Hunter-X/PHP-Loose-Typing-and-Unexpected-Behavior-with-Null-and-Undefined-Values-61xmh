function foo(x) {
  //Explicitly check for null or undefined using isset()
  if (!isset($x)) {
    return 0; //Return a default value
  }
  return $x + 1; 
}

console.log(foo(null)); // Output: 0
console.log(foo(undefined)); // Output: 0