---
extends: _layouts.usecase
date: 2024-02-26
link: https://developer.mozilla.org/en-US/docs/Web/API/Element/classList
reference: Element.classList.add
related: remove-class-from-element,toggle-class-of-element,replace-a-class-of-element
category: DOM
---

```html
<div id="box"></div>
```

```javascript
const element = document.querySelector("#box");

// Note: only class name, without the '.'
element.classList.add("class-name");
```
