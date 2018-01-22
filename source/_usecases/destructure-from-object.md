---
extends: _layouts.usecase
date: 2017-12-16
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Destructuring_assignment#Object_destructuring
related: destructure-from-array,destructure-with-default-value
category: syntax
---


```javascript
const {lat, lng} = {
    lat: 52.369661,
    lng: 4.897243,
    elevation: -2
};

console.log(lat, lng)
```
<pre class="output">
52.369661
4.897243
</pre>
