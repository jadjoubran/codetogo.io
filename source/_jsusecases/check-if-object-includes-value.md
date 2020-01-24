---
extends: _layouts.usecase
date: 2019-12-01
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_objects/Object/values
reference: Object.values
related: check-if-object-includes-substring
category: objects
---

```javascript
const person = {
  first_name: "Sam",
  last_name: "Bradley"
};

Object.values(person).includes("Bradley");
```

<pre class="output">true</pre>
