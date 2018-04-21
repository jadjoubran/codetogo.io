---
extends: _layouts.usecase
date: 2018-02-02
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/lastIndexOf
reference: String.lastIndexOf
category: strings
---

```javascript
const url = "/Users/code/codetogo/index.html";

url.substr(url.lastIndexOf("/") + 1);
```

<pre class="output">index.html</pre>
