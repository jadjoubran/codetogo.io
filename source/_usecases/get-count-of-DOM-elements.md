---
extends: _layouts.usecase
date: 2018-03-09
link: https://developer.mozilla.org/en-US/docs/Web/API/NodeList/length
reference: NodeList.length
category: DOM
---

```html
<div class="title"></div>
<div class="title"></div>
```

```javascript
const elements = document.querySelectorAll('.title');

const length = elements.length;
```

<pre class="output">2</pre>