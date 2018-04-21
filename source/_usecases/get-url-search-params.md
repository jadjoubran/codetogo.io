---
extends: _layouts.usecase
date: 2018-03-04
link: https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams
reference: URLSearchParams
related: set-url-search-params
category: URL
---

```javascript
//https://codetogo.io?lang=en
const url = new URL(document.location);

const lang = url.searchParams.get("lang");
```

<pre class="output">en</pre>
