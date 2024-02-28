---
extends: _layouts.usecase
date: 2024-02-28
link: https://learnjavascript.online/topics/promises.html?utm_source=codetogo.io
reference: Promises
reference_website: Learn JavaScript
category: Promise
author: "Vijay Singh"
---

```javascript
(async () => {
  try {
    const response = await fetch("https://codetogo.io/api/users.json");
    const data = await response.json();
    console.log(data);
  } catch (err) {
    console.error(err);
  }
})();
```

<pre class="output">
[{
    id: 1,
    name: "Sam"
}, {
    id: 2,
    name: "Alex"
}]
</pre>
