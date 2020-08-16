---
extends: _layouts.usecase
date: 2020-12-18
link: https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch
reference: Fetch
related: async-await-fetch
category: JSON
---

```javascript
fetch("https://codetogo.io/api/users.xml")
  .then(response => response.text())
  .then(data => {
    const parser = new DOMParser();
    const xml = parser.parseFromString(data, "application/xml");
    console.log(xml);
  })
  .catch(console.error);
```

<pre class="output">
&lt;users&gt;
    &lt;user&gt;
        &lt;id&gt;1&lt;/id&gt;
        &lt;name&gt;Jad&lt;/name&gt;
    &lt;/user&gt;
    &lt;user&gt;
        &lt;id&gt;2&lt;/id&gt;
        &lt;name&gt;Sam&lt;/name&gt;
    &lt;/user&gt;
&lt;/users&gt;
</pre>
