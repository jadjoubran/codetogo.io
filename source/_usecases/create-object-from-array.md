---
extends: _layouts.usecase
date: 2018-01-04
category: arrays
---


```javascript
const apps = ["phone", "calculator", "clock"];
const object = {};

apps.map((value, index) => object[index] = value);

console.log(object);
```

<pre class="output">
{
    0: "phone",
    1: "calculator",
    2: "clock"
}
</pre>
