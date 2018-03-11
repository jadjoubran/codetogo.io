---
extends: _layouts.usecase
date: 2017-12-23
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/sort
reference: Array.sort
related: sort-array-in-ascending-order
category: arrays
---


```javascript
const numbers = [10, 20, 30, 100, 5, 1, 20];

numbers.sort((a, b) => b - a);

console.log(numbers);
```
<pre class="output">[100, 30, 20, 20, 10, 5, 1]</pre>
