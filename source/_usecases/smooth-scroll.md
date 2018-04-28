---
extends: _layouts.usecase
date: 2018-04-28
link: https://developer.mozilla.org/en-US/docs/Web/API/Element/scrollIntoView
reference: Element.scrollIntoView
category: DOM
---

```html
<div id="box"></div>
```

```javascript
const element = document.querySelector("#box");

element.scrollIntoView({ behavior: "smooth" });
```
