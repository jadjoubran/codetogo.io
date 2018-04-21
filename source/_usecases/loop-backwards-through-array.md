---
extends: _layouts.usecase
date: 2017-12-18
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/reverse
reference: Array.reverse
related: loop-through-array
category: arrays
---

```javascript
const people = ["John", "Nicole", "Jad"];

for (const person of people.reverse()) {
  console.log(person);
}
```

<pre class="output">
Jad
Nicole
John
</pre>
