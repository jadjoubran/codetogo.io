---
extends: _layouts.usecase
date: 2020-02-18
link: https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch
reference: Fetch
related: fetch-json
category: JSON
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
    name: "Jad"
}, {
    id: 2,
    name: "Sam"
}]
</pre>
