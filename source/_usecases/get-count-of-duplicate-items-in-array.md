---
extends: _layouts.usecase
date: 2018-01-08
category: arrays
---

```javascript
const chars = ['a', 'b', 'c', 'a', 'a', 'c'];
let result = {};

result = chars.reduce((acc, item) => {
    acc[item] = acc[item] ? ++acc[item] : 1;
    return acc;
}, result);
```

<pre class="output">
{
    a: 3,
    b: 1,
    c: 2
}
</pre>
