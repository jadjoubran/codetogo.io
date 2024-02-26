---
extends: _layouts.usecase
date: 2024-02-26
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/toISOString
reference: Date.toISOString()
category: datetime
---

```javascript
const date = new Date();

// RFC 3339 format
const rfc339 = date.toISOString();
```

<pre class="output">2024-02-26T20:11:23.708Z</pre>
