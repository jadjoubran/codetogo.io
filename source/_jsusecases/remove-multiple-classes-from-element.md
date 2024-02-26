---
extends: _layouts.usecase
date: 2018-09-22
link: https://developer.mozilla.org/en-US/docs/Web/API/Element/classList
reference: Element.classList
related: remove-class-from-element
category: DOM
---

```html
<div id="box" class="active highlighted"></div>
```

```javascript
const element = document.querySelector("#box");

element.classList.remove("active", "highlighted");
```

<pre class="output">&lt;div id="box"&gt;&lt;/div&gt;</pre>
