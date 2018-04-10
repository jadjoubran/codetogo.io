---
extends: _layouts.usecase
date: 2017-12-16
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/keys
reference: Object.keys
category: objects
---

```javascript
const person = {
    key: 'value',
    first_name: 'John',
    last_name: 'Doe'
};

Object.keys(person);
```

<pre class="output">['key', 'first_name', 'last_name']</pre>
