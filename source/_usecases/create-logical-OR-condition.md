---
extends: _layouts.usecase
date: 2018-01-02
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Logical_Operators
reference: Logical operators
related: create-logical-AND-condition
category: syntax
---


```javascript
const isUnderage = true;
const isDrunk = false;

if (isUnderage || isDrunk){
    console.log('Cannot drive');
}
```
<pre class="output">Cannot drive</pre>
