---
extends: _layouts.usecase
date: 2018-03-06
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Set
category: arrays
---


```javascript
const items = [ "Cars", "Cars", "Smartphone", "Cars", "Tablet" ];

const uniqueItems = [...new Set(items)];

console.log(uniqueItems);
```

<pre class="output">["Cars", "Smartphone", "Tablet"]</pre>
