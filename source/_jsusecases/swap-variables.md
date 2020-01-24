---
extends: _layouts.usecase
date: 2017-12-24
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Destructuring_assignment#Array_destructuring
reference: Array destructuring
category: syntax
---

```javascript
let first_name = "Doe";
let last_name = "John";

//swap
[first_name, last_name] = [last_name, first_name];

console.log(first_name, last_name);
```

<pre class="output">John Doe</pre>
