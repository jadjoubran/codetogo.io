---
extends: _layouts.usecase
date: 2024-02-26
link: https://developer.mozilla.org/en-US/docs/Web/API/NonDocumentTypeChildNode/nextElementSibling
reference: nextElementSibling
related: find-previous-element
category: DOM
---

```html
<div id="box"></div>
<div>Next element</div>
```

```javascript
const box = document.querySelector("#box1");
const next = box.nextElementSibling;
```

<pre class="output">&lt;div&gt;Next element&lt;/div&gt;</pre>
