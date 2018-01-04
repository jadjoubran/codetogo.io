---
extends: _layouts.usecase
date: 2018-01-04
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/DateTimeFormat
related: get-current-month-name,get-current-day-name
---


```javascript
const date = Date.now();

const options = {month: 'short'};

new Intl.DateTimeFormat('en-US', options)
.format(date);
```
<pre class="output">
Jan
</pre>
