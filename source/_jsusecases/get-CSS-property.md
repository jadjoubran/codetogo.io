---
extends: _layouts.usecase
date: 2018-07-29
link: https://developer.mozilla.org/en-US/docs/Web/API/Window/getComputedStyle
reference: Window.getComputedStyle
related: change-CSS-property
category: DOM
---

```css
#box {
  padding: 15px;
}
```

```html
<div id="box"></div>
```

```javascript
const div = document.querySelector("#box");

const padding = getComputedStyle(div).padding;
```

<pre class="output">15px</pre>
