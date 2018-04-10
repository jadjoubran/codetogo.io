---
extends: _layouts.usecase
date: 2018-03-12
category: strings
---

```javascript
const length = 20;

//should NOT be used for cryptography
const randomString = [...Array(length)]
    .map(() => Math.random().toString(36)[5])
    .join('');
```

<pre class="output">ga6fr8rf7uan1yn2adqy</pre>
