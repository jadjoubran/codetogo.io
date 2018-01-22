---
extends: _layouts.usecase
date: 2018-01-08
category: arrays
---


```javascript
const names = ['Tom', 'Jad', 'Nicole'];

names[ Math.floor(Math.random() * names.length) ];
```

<pre class="output">
a random element from the names array
</pre>