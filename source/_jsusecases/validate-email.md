---
extends: _layouts.usecase
date: 2017-12-16
category: regex
---

```javascript
const pattern = /\S+@\S+\.\S+/;

pattern.test("john@gmail.com");
```

<pre class="output">true</pre>
