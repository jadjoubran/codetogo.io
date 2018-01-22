---
extends: _layouts.usecase
date: 2017-12-21
link: https://developer.mozilla.org/en-US/docs/Web/Guide/Events/Creating_and_triggering_events
category: DOM
---


```javascript
const button = document.querySelector('#button-id');

//trigger click
button.dispatchEvent(new Event('click'));
```
