---
extends: _layouts.usecase
date: 2017-11-11
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/RegExp
related: create-a-regex
category: regex
---


```javascript
const result = "My age is 41".match(/\d+/);

console.log(result);
console.log(result[0]);
```
<pre class="output">
["41", index: 10, input: "My age is 41"]
41
</pre>
