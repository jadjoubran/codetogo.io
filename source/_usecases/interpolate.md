---
extends: _layouts.usecase
date: 2017-12-16
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals
reference: Template literals
related: write-a-multiline-string
category: strings
---

```javascript
const name = "John";

console.log(`Welcome ${name}.
You have ${2 * 5} new notifications!`);
```

<pre class="output">
Welcome John.
You have 10 new notifications!
</pre>
