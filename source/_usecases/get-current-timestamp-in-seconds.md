---
extends: _layouts.usecase
date: 2017-12-26
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/now
related: get-current-timestamp
---


```javascript
const timestamp = Math.floor(Date.now() / 1000);

console.log(timestamp);//in seconds
```
<pre class="output">1514300500</pre>
