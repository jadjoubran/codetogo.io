---
extends: _layouts.usecase
date: 2024-02-28
link: https://web.dev/blog/array-with?hl=en
reference: Array.with
reference_website: web.dev
category: arrays
---

```javascript
const names = ["Alex", "Sam", "Blane"];

const newNames = names.with(1, "Sammy");
// names remains unmodified
console.log(newNames);
```

<pre class="output">["Alex", "Sammy", "Blane"]</pre>
