---
extends: _layouts.usecase
date: 2018-07-29
link: https://developer.mozilla.org/en-US/docs/Web/API/Window/getComputedStyle
reference: Window.getComputedStyle
related: change-CSS-property
category: DOM
---


```css
div {
    color: white;
    padding: 1px;
    border: 1px solid black;
}
```

```html
<div id="ex-div"></div>
```

```javascript
let div = document.querySelector('#ex-div');

console.log(getComputedStyle(div, null).color);
console.log(getComputedStyle(div, null).padding);
```

<pre class="output">"white"</pre>
<pre class="output">"1px"</pre>

The returned style is a live [CSSStyleDeclaration](https://developer.mozilla.org/en-US/docs/Web/API/CSSStyleDeclaration) object, which updates itself automatically when the element's style is changed. The object returned by `getComputedStyle` is read only, so you can't set them.

To set the style of an element you would have to use div.style.__property__, where property is css property you want to set.
