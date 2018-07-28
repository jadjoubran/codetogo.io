---
extends: _layouts.usecase
date: 2018-07-28
link: https://developer.mozilla.org/en-US/docs/Web/API/Element/insertAdjacentHTML
reference: Element.insertAdjacentHTML
category: DOM
---

```html
<ul id="list"></ul>
```

```javascript
const list = document.querySelector("#list");

list.insertAdjacentHTML("beforeend", `<li>Apple</li>`);
```
