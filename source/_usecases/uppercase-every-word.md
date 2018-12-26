---
extends: _layouts.usecase
date: 2018-12-26
category: strings
---

```javascript
let string = "code to go is AWESOME";
const pattern = /([^\W_]+[^\s]*) */g;

string.replace(pattern, word => {
  const first = word[0].toUpperCase();
  const rest = word.substring(1).toLowerCase();
  return first + rest;
});
```

<pre class="output">
Code To Go Is Awesome
</pre>
