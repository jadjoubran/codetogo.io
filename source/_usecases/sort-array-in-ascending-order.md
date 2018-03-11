---
extends: _layouts.usecase
date: 2017-12-23
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/sort
reference: Array.sort
related: sort-array-in-descending-order
category: arrays
---


```javascript
const numbers = [10, 20, 30, 100, 5, 1, 20];

numbers.sort((a, b) => a - b);

console.log(numbers);
```
<pre class="output">[1, 5, 10, 20, 20, 30, 100]</pre>
