---
extends: _layouts.usecase
date: 2017-11-11
link: https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/addEventListener
reference: EventTarget.addEventListener
related: prevent-default-action-of-event
category: DOM
---

```html
<div id="box"></div>
```

```javascript
const element = document.querySelector('#box');

element.addEventListener('click', event => {
    console.log('Element clicked');
});
```
