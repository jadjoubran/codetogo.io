---
extends: _layouts.usecase
date: 2019-02-03
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/await
reference: Promise
category: Promise
author: "Vijay Singh"
---

```javascript
(async () => {
    try {
       const response = await fetch("https://codetogo.io/api/users.json");
       const data = await response.json();
       console.log(data);
    } catch(err){
       console.error(err);
    }
})();
```

<pre class="output">
[{
    id: 1,
    name: "Jad"
}, {
    id: 2,
    name: "Nicole"
}]
</pre>
