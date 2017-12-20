---
extends: _layouts.howto
date: 2017-12-16
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals
related: write-a-multiline-string
---


```javascript
const name = 'John';

console.log(`Welcome ${name}.
You have ${2 * 5} new notifications!`);
```
<pre class="output">
Welcome John.
You have 10 new notifications!
</pre>
