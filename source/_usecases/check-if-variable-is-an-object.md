---
extends: _layouts.usecase
date: 2017-12-17
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/toString
reference: Object.toString
category: objects
---

```javascript
const value = {
  name: "John"
};

Object.prototype.toString.call(value) === "[object Object]";
```

<pre class="output">true</pre>
