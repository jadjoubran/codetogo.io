---
extends: _layouts.usecase
date: 2018-03-04
link: https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams
related: set-url-search-params
category: URL
---


```javascript
const url = new URL(document.location);
// document.location -> 'https://codetogo.io?lang=en'

console.log(url.searchParams.get("lang"));
```
<pre class="output">en</pre>
