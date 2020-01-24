---
extends: _layouts.usecase
date: 2019-12-01
link: https://developer.mozilla.org/en-US/docs/Web/API/NonDocumentTypeChildNode/nextElementSibling
reference: nextElementSibling
related: find-previous-element
category: DOM
---

```html
<div id="box"></div>
<div id="next-element"></div>
```

```javascript
const box = document.querySelector("#box1");
const next = box.nextElementSibling;
```

<pre class="output">&lt;div id="next-element"&gt;&lt;/div&gt;</pre>
