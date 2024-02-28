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
