---
extends: _layouts.usecase
date: 2024-02-26
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_objects/Object/values
reference: Object.values
related: check-if-object-includes-substring
category: objects
---

```javascript
const person = {
  firstName: "Sam",
  lastName: "Bradley"
};

// Result is a boolean
Object.values(person).includes("Bradley");
```

<pre class="output">true</pre>
