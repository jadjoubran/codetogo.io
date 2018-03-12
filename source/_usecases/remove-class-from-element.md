---
extends: _layouts.usecase
date: 2018-03-11
link: https://developer.mozilla.org/en-US/docs/Web/API/Element/classList
reference: Element.classList
related: toggle-class-of-element,add-class-to-element,replace-a-class-of-element
category: DOM
---

```html
<div id="box"></div>
```

```javascript
const element = document.querySelector('#box');

element.classList.remove('class-name');
```
