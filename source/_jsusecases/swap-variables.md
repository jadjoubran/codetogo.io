---
extends: _layouts.usecase
date: 2024-02-27
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Destructuring_assignment#Array_destructuring
reference: Array destructuring
category: syntax
---

```javascript
let firstName = "Doe";
let lastName = "Sam";

// Swap
[firstName, lastName] = [lastName, firstName];

console.log(firstName, lastName);
```

<pre class="output">Sam Doe</pre>
