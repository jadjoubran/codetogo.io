---
extends: _layouts.usecase
date: 2018-03-06
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Set
reference: Set
category: arrays
related: get-unique-values-from-object-array-property
---

```javascript
const items = ['Cars', 'Cars', 'Smartphone', 'Cars', 'Tablet'];

const uniqueItems = [...new Set(items)];
```

<pre class="output">["Cars", "Smartphone", "Tablet"]</pre>
