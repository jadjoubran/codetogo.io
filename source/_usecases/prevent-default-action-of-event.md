---
extends: _layouts.usecase
date: 2017-12-16
link: https://developer.mozilla.org/en-US/docs/Web/API/Event/preventDefault
related: listen-to-click-event
---


```javascript
const element = document.querySelector('css-selector');

element.addEventListener('click', event => {
    event.preventDefault();
    //Default action prevented
});
```
