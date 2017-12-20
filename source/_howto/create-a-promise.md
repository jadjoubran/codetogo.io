---
extends: _layouts.howto
date: 2017-12-17
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise#Creating_a_Promise
related: match-text-against-regex
---


```javascript
new Promise((resolve, reject) => {
    // asynchronous operation

    // then in case of success
    resolve();
    // or
    reject("failure reason");
});
```
