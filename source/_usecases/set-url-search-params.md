---
extends: _layouts.usecase
date: 2018-03-04
link: https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams
reference: URLSearchParams
related: get-url-search-params
category: URL
---


```javascript
const url = new URL(document.location);

url.searchParams.set("lang", "en");

console.log(url.href);
```
<pre class="output">https://codetogo.io/how-to-set-url-search-params-in-javascript/?lang=en</pre>
