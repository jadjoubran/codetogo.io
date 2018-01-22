---
extends: _layouts.usecase
date: 2017-12-29
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/DateTimeFormat
category: datetime
---


```javascript
let date = new Date();

//YYYY-MM-DD format
date.toISOString().split("T")[0]
```
<pre class="output">2017-12-29</pre>
