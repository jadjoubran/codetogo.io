---
extends: _layouts.usecase
date: 2017-12-18
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/filter
reference: Array.filter
category: arrays
---


```javascript
const friends = [
    { name: 'Abby', age: 22 },
    { name: 'Boby', age: 16 },
    { name: 'Coel', age: 20 },
    { name: 'Dany', age: 15 },
];

//who can drink?
friends.filter(friend => friend.age >= 18);
```
<pre class="output">
[
    { name: 'Abby', age: 22 },
    { name: 'Coel', age: 20 },
]
</pre>
