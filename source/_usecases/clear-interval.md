---
extends: _layouts.usecase
date: 2019-01-28
link: https://developer.mozilla.org/en-US/docs/Web/API/WindowOrWorkerGlobalScope/clearInterval
reference: Window.clearInterval
related: set-interval
category: functions
---


```javascript
const intervalID = window.setInterval(() => {
    console.log('I will not be printed');
}, 2000);

window.clearInterval(intervalID);
```