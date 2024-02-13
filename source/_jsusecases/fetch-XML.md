---
extends: _layouts.usecase
date: 2024-02-13
link: https://learnjavascript.online/topics/fetch.html?utm_source=codetogo.io
reference_website: Learn JavaScript
reference: Fetch API use cases
related: async-await-fetch
category: JSON
extra: https://learnjavascript.online/topics/fetch.html?utm_source=codetogo.io
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
