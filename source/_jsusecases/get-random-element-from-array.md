---
extends: _layouts.usecase
date: 2022-08-18
link: https://blog.learnjavascript.online/posts/javascript-at-method/
reference: String.at()
reference_website: Learn JavaScript Blog
category: arrays
---

```javascript
const names = ["Sam", "Alex", "Charley"];

names.at(Math.random() * names.length);
```

<pre class="output">
a random element from the names array
</pre>
