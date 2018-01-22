---
extends: _layouts.usecase
date: 2018-01-11
link: https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/addEventListener
category: DOM
---


```javascript
const element = document.querySelector('css-selector');

element.addEventListener('mouseover', event => {
    console.log('Mouse over');
});

element.addEventListener('mouseout', event => {
    console.log('Mouse out');
});
```
