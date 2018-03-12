---
extends: _layouts.usecase
date: 2018-03-11
related: hide-element
category: DOM
---

```html
<div id="box"></div>
```

```css
#box{
    display: none;
}
```

```javascript
const element = document.querySelector('#box');

element.style.display = 'block';
```
