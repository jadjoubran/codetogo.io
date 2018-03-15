---
extends: _layouts.usecase
date: 2018-03-14
link: https://developer.mozilla.org/en-US/docs/Web/API/Performance/now
reference: performance.now
category: performance
---


```javascript
function foo(){
    // do stuff
}

let start = performance.now();
foo();
let end = performance.now();

console.log(`Call to ${foo.name} took ${(end - start)} milliseconds.`);
```

<pre class="output">Call to foo took x milliseconds</pre>
