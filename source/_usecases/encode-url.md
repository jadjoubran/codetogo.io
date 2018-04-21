---
extends: _layouts.usecase
date: 2017-12-18
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/encodeURIComponent
reference: encodeURIComponent
related: decode-url
category: URL
---

```javascript
const query = encodeURIComponent("hello world?");

//safe to add to URL
const url = `https://google.com/search?q=${query}`;
```

<pre class="output">
<a href="https://google.com/search?q=hello%20world%3F" target="_blank" rel="noopener">https://google.com/search?q=hello%20world%3F</a>
</pre>
