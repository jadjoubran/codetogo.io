---
extends: _layouts.usecase
date: 2017-12-16
category: strings
---

```javascript
let string = "code to go is AWESOME";
const pattern = /([^\W_]+[^\s]*) */g;

string.replace(pattern, word => {
  const first = word.charAt(0).toUpperCase();
  const rest = word.substr(1).toLowerCase();
  return first + rest;
});
```

<pre class="output">
Code To Go Is Awesome
</pre>
