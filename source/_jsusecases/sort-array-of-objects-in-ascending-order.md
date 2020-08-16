---
extends: _layouts.usecase
date: 2020-08-16
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/sort
reference: Array.sort
related: sort-array-of-objects-in-descending-order
category: arrays
---

```javascript
const users = [
  { name: "user1", age: 28 },
  { name: "user2", age: 21 },
  { name: "user3", age: 38 },
  { name: "user4", age: 18 }
];

users.sort((user1, user2) => user1.age - user2.age);

console.log(users);
```

<pre class="output">[
  { name: "user4", age: 18 },
  { name: "user2", age: 21 },
  { name: "user1", age: 28 },
  { name: "user3", age: 38 }
]</pre>
