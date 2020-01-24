---
extends: _layouts.usecase
date: 2018-03-14
link: https://developer.mozilla.org/en-US/docs/Web/API/Performance/now
reference: performance.now
category: performance
---

```javascript
function foo() {
  // do stuff
}

const start = performance.now();
foo();
const end = performance.now();

console.log(`Call to ${foo.name} took ${end - start} ms.`);
```

<pre class="output">Call to foo took x ms</pre>
