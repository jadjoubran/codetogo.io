---
extends: _layouts.usecase
date: 2017-12-18
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/decodeURIComponent
reference: decodeURIComponent
related: encode-url
category: URL
---


```javascript
const search = 'hello%20world%3F';

decodeURIComponent(search);
```
<pre class="output">
hello world?
</pre>
