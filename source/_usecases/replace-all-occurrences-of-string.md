---
extends: _layouts.usecase
date: 2017-12-16
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/replace
reference: String.replace
related: replace-spaces-with-dashes
category: strings
---

```javascript
const text = "We are outside. We are waiting.";

text.replace(/We/g, "You");
```

<pre class="output">You are outside. You are waiting.</pre>
