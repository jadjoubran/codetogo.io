---
extends: _layouts.howto
date: 2017-12-16
link: https://developer.mozilla.org/en-US/docs/Web/API/Event/preventDefault
---


```javascript
const element = document.querySelector('css-selector');

element.addEventListener('click', event => {
    event.preventDefault();
    //Default action prevented
});
```
