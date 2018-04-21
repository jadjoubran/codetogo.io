---
extends: _layouts.usecase
date: 2018-04-21
link: https://developer.mozilla.org/en-US/docs/Web/API/Element/currentStyle
reference: Element.currentStyle
related: change-CSS-property
category: DOM
---


```css
div {
    color: white;
    border: 1px solid black;
}
```

```html
<div id="ex-div"></div>
```

Element.currentStyle returns the styles of an element and the values are read only, so you can't set them. 
To set the style of an element you would have to use div.style.<property you want to set>

```javascript
let div = document.querySelector('#ex-div');

console.log(el.currentStyle.color);
```

<pre class="output">white</pre>
