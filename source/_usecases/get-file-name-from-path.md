---
extends: _layouts.usecase
date: 2018-02-02
category: strings
---


```javascript
const url = '/Users/code/codetogo/index.html';

url.substr(url.lastIndexOf('/') + 1)
```

<pre class="output">index.html</pre>