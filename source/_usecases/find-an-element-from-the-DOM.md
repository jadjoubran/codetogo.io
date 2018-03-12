---
extends: _layouts.usecase
date: 2018-03-11
link: https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelector
reference: Document.querySelector
related: find-element-by-id,find-element-by-class,find-multiple-DOM-elements
category: DOM
---

```html
<div id="box"></div>

<div class="title"></div>
```

```javascript
const box = document.querySelector('#box');

const title = document.querySelector('.title');
```
