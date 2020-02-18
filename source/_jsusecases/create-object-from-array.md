---
extends: _layouts.usecase
date: 2020-02-18
category: arrays
---

```javascript
const apps = ["phone", "calculator", "clock"];
const object = { ...apps };

console.log(object);
```

<pre class="output">
{
    0: "phone",
    1: "calculator",
    2: "clock"
}
</pre>
