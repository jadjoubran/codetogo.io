---
extends: _layouts.usecase
date: 2024-02-13
link: https://learnjavascript.online/topics/fetch.html?utm_source=codetogo.io
reference_website: Learn JavaScript
reference: Fetch API use cases
related: fetch-json
category: JSON
extra: https://learnjavascript.online/topics/fetch.html?utm_source=codetogo.io
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
