---
extends: _layouts.usecase
date: 2018-04-28
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/lastIndexOf
reference: String.lastIndexOf
related: get-file-name-from-path
category: strings
---

```javascript
const url = "/Users/code/codetogo/index.html";

url.substr(0, url.lastIndexOf("/") + 1);
```

<pre class="output">/Users/code/codetogo/</pre>
