---
extends: _layouts.usecase
date: 2018-03-12
link: https://developer.mozilla.org/en-US/docs/Web/API/CSSStyleDeclaration/getPropertyValue
reference: Style.getPropertyValue
related: set-CSS-custom-property
category: DOM
---

```css
:root {
  --primary-color: #ececec;
}
```

```javascript
const color = getComputedStyle(document.body).getPropertyValue(
  "--primary-color"
);
```

<pre class="output">#ECECEC</pre>
