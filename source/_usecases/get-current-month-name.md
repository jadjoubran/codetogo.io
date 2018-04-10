---
extends: _layouts.usecase
date: 2017-12-29
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/DateTimeFormat
reference: Intl.DateTimeFormat
related: get-current-short-month-name,get-current-day-name
category: datetime
---

```javascript
const date = Date.now();

const options = { month: 'long' };

new Intl.DateTimeFormat('en-US', options).format(date);
```

<pre class="output">
December
</pre>
