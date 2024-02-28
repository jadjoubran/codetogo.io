---
extends: _layouts.usecase
date: 2024-02-13
link: https://learnjavascript.online/topics/fetch.html?utm_source=codetogo.io
reference_website: Learn JavaScript
reference: Fetch API use cases
related: async-await-fetch
category: JSON
---

```javascript
fetch("https://codetogo.io/api/users.json")
  .then(response => response.json())
  .then(data => {
    console.log(data);
  })
  .catch(console.error);
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
