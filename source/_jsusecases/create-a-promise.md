---
extends: _layouts.usecase
date: 2024-02-28
link: https://learnjavascript.online/topics/promises.html?utm_source=codetogo.io
reference: Promises
reference_website: Learn JavaScript
related: async-await
category: promise
---

```javascript
new Promise((resolve, reject) => {
  // Do some work
  // then in case of success
  resolve();
  // or
  reject("failure reason");
});
```
