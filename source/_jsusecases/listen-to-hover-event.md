---
extends: _layouts.usecase
date: 2024-02-26
link: https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/addEventListener
reference: EventTarget.addEventListener
category: DOM
---

```html
<div id="box"></div>
```

```javascript
const element = document.querySelector("#box");

element.addEventListener("mouseover", event => {
  console.log("Mouse in (over)");
});

element.addEventListener("mouseout", event => {
  console.log("Mouse out");
});
```
