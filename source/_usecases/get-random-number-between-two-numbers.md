---
extends: _layouts.usecase
date: 2018-01-08
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/random
reference: Math.random
category: numbers
---

```javascript
const min = 0;
const max = 10;
let rand;

rand = Math.floor(Math.random() * (max - min + 1)) + min;
```

<pre class="output">
a random number between 0 and 10 inclusive
</pre>
