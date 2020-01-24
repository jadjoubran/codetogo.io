---
extends: _layouts.usecase
date: 2018-12-16
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Destructuring_assignment#Array_destructuring
reference: Skip values from Array destructuring
related: destructure-from-object,destructure-with-default-value
category: syntax
---

```javascript
const [, , elevation] = [52.369661, 4.897243, 3];

console.log(elevation);
```

<pre class="output">
3
</pre>
