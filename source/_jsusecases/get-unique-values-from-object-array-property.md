---
extends: _layouts.usecase
date: 2018-03-06
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Set
reference: Set
category: objects
related: remove-duplicates-from-array
---

```javascript
const objects = [
  { id: 1, category: "Cars" },
  { id: 2, category: "Cars" },
  { id: 3, category: "Smatphones" },
  { id: 4, category: "Cars" },
  { id: 5, category: "Tablet" }
];

const categories = [...new Set(objects.map(object => object.category))];
```

<pre class="output">["Cars", "Smartphones", "Tablet"]</pre>
