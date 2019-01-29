---
extends: _layouts.usecase
date: 2019-01-28
link: https://developer.mozilla.org/en-US/docs/Web/API/WindowOrWorkerGlobalScope/clearTimeout
reference: Window.clearTimeout
related: set-timeout
category: functions
---


```javascript
const timeOutID = setTimeout(() => {
    console.log('I will not be printed');
}, 2000);

window.clearTimeout(timeOutID);
```
