---
extends: _layouts.usecase
date: 2017-12-29
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/DateTimeFormat
related: get-current-month-name
---


```javascript
const date = Date.now();

const options = {weekday: 'long'};

new Intl.DateTimeFormat('en-US', options)
.format(date);
```
<pre class="output">
Friday
</pre>
