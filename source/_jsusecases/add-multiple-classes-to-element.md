---
extends: _layouts.usecase
date: 2018-09-22
link: https://developer.mozilla.org/en-US/docs/Web/API/Element/classList
reference: Element.classList
related: add-class-to-element
category: DOM
---

```html
<div id="box"></div>
```

```javascript
const element = document.querySelector("#box");

element.classList.add("active", "highlighted");
```
