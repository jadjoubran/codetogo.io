---
extends: _layouts.usecase
date: 2018-02-21
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array
category: arrays
---


```javascript
const complexArray = [1, [2], [[3], 4], 5];

const flatten = (nestedArray) =>
  nestedArray.reduce((flattenedArray, item) =>
    flattenedArray.concat(Array.isArray(item) ? flatten(item) : [item]), []);

flatten(complexArray);
```

<pre class="output">[1, 2, 3, 4, 5 ]</pre>
