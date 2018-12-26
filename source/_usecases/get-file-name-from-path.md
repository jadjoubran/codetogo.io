---
extends: _layouts.usecase
date: 2018-12-26
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/lastIndexOf
reference: String.lastIndexOf
related: get-path-from-full-path
category: strings
---

```javascript
const url = "/Users/code/codetogo/index.html";

url.substring(url.lastIndexOf("/") + 1);
```

<pre class="output">index.html</pre>
