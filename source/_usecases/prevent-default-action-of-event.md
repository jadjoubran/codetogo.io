---
extends: _layouts.usecase
date: 2017-12-16
link: https://developer.mozilla.org/en-US/docs/Web/API/Event/preventDefault
reference: Event.preventDefault
related: listen-to-click-event
category: DOM
---

```html
<div id="box"></div>
```

```javascript
const element = document.querySelector('#box');

element.addEventListener('click', event => {
    event.preventDefault();
    //Default action prevented
});
```
