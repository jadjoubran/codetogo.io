---
extends: _layouts.usecase
date: 2019-12-01
link: https://developer.mozilla.org/en-US/docs/Web/API/Element/classList
reference: Element.classList
category: DOM
---

```html
<div id="box" class="active"></div>
```

```javascript
const element = document.querySelector("#box");

element.classList.contains("active");
```

<pre class="output">true</pre>
