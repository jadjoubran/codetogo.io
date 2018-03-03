---
extends: _layouts.usecase
date: 2018-03-04
link: https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams
related: get-url-params
category: URL
---


```javascript
const url = new URL('https://codetogo.io');

url.searchParams.set("hello", "world)

console.log(url.href);
```
<pre class="output">https://codetogo.io?hello=world</pre>
