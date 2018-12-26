---
extends: _layouts.usecase
date: 2018-12-26
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/lastIndexOf
reference: String.lastIndexOf
related: get-file-name-from-path
category: strings
---

```javascript
const url = "/Users/code/codetogo/index.html";

url.substring(0, url.lastIndexOf("/") + 1);
```

<pre class="output">/Users/code/codetogo/</pre>
