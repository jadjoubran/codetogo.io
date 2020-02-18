---
extends: _layouts.usecase
date: 2020-02-18
category: numbers
---

```javascript
const hex = Math.floor(Math.random() * 0xffffff)
  .toString(16)
  .padStart(6, "0");
const color = `#${hex}`;

console.log(color);
```

<pre class="output">#a75d43</pre>
