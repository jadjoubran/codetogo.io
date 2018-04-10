---
extends: _layouts.usecase
date: 2017-12-16
category: strings
---

```javascript
let string = "code to go is awesome";
const pattern = /([^\W_]+[^\s]*) */g;

string = string.replace(pattern, w => {
  return w.charAt(0).toUpperCase() + w.substr(1);
});
```

<pre class="output">
Code To Go Is Awesome
</pre>
