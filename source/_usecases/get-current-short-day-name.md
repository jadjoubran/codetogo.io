---
extends: _layouts.usecase
date: 2018-01-04
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/DateTimeFormat
reference: Intl.DateTimeFormat
related: get-current-day-name,get-current-month-name
category: datetime
---


```javascript
const date = Date.now();

const options = {weekday: 'short'};

new Intl.DateTimeFormat('en-US', options)
.format(date);
```
<pre class="output">
Thu
</pre>
