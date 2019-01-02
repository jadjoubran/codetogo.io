---
extends: _layouts.usecase
date: 2018-01-02
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/Reduce
reference: Array.reduce
category: arrays
---

```javascript
const calories = [50, 100, 200];

//sum
calories.reduce((prev, next) => prev + next, 0);
```

<pre class="output">350</pre>
