---
extends: _layouts.usecase
date: 2017-12-23
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Destructuring_assignment#Array_destructuring
related: destructure-from-array,destructure-from-object
category: syntax
---


```javascript
const {id, active = true} = {
    id: 10,
    name: "John",
};

console.log(id, active);
```
<pre class="output">
10
true
</pre>
