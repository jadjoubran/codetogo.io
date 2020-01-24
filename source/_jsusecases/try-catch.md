---
extends: _layouts.usecase
date: 2018-04-28
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/try...catch
reference: try...catch
category: syntax
---

```javascript
try {
  potentialFail();
} catch (error) {
  console.log(error);
}
```

<pre class="output">ReferenceError: potentialFail is not defined</pre>
