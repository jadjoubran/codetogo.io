---
extends: _layouts.usecase
date: 2020-12-18
link: https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch
reference: Fetch
related: fetch-json
category: JSON
---

```javascript
fetch("https://codetogo.io/api/users.json", {
  method: "POST",
  headers: {
    "Content-Type": "application/json"
  },
  body: JSON.stringify({
    key1: "value1"
  })
})
  .then(response => response.json())
  .then(data => {
    console.log(data);
  })
  .catch(console.error);
```

<pre class="output">
[{
    id: 1,
    name: "Jad"
}, {
    id: 2,
    name: "Sam"
}]
</pre>
