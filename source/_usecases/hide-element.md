---
extends: _layouts.usecase
date: 2018-03-11
related: show-element
category: DOM
---

```html
<div id="box"></div>
```

```javascript
const element = document.querySelector('#box');

element.style.display = 'none';
```
