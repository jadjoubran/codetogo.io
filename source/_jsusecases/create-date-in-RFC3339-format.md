---
extends: _layouts.usecase
date: 2018-08-15
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/toISOString
reference: Date.toISOString()
category: datetime
---

```javascript
const date = new Date();

//RFC 3339 format
const formatted = date.toISOString();
```

<pre class="output">2019-12-01T21:23:34.409Z</pre>
