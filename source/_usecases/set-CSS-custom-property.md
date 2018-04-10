---
extends: _layouts.usecase
date: 2018-03-12
link: https://developer.mozilla.org/en-US/docs/Web/API/CSSStyleDeclaration/setProperty
reference: Style.setProperty
related: get-CSS-custom-property
category: DOM
---

```css
:root {
  --primary-color: #ececec;
}
```

```javascript
document.documentElement.style.setProperty("--primary-color", "#000000");
```
