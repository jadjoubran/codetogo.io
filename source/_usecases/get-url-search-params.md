---
extends: _layouts.usecase
date: 2018-03-04
link: https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams
related: set-url-params
category: URL
---


```javascript
const url = new URL('https://codetogo.io?hello=world');

console.log(url.searchParams.get("hello"));
```
<pre class="output">world</pre>
