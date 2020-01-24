---
extends: _layouts.usecase
date: 2018-03-11
link: https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML
reference: Element.innerHTML
category: DOM
---

```html
<div id="box"></div>
```

```javascript
const element = document.querySelector("#box");

element.innerHTML = `<div>New Content</div>`;
```
