---
extends: _layouts.usecase
date: 2018-03-11
link: https://developer.mozilla.org/en-US/docs/Web/API/NonDocumentTypeChildNode/previousElementSibling
reference: previousElementSibling
related: find-next-element
category: DOM
---

```html
<div id="box1"></div>
<div id="box2"></div>
```

```javascript
const box2 = document.querySelector("#box2");
const box1 = box2.previousElementSibling;
```
