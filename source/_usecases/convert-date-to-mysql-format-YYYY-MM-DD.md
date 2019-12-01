---
extends: _layouts.usecase
date: 2019-12-01
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/toISOString
reference: Date.toISOString
category: datetime
---

```javascript
const date = new Date();

//YYYY-MM-DD format
const mysqlDate = date.toISOString().split("T")[0];
```

<pre class="output">2019-12-01</pre>
