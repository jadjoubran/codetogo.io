---
extends: _layouts.usecase
date: 2018-03-04
link: https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams
related: get-url-search-params
category: URL
---


```javascript
const url = new URL(document.location);

url.searchParams.set("lang", "en");

console.log(url.href);
```
<pre class="output">https://codetogo.io?lang=en</pre>
