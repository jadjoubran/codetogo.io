---
extends: _layouts.usecase
date: 2018-01-28
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_objects/Object/values
related: check-if-object-includes-substring
category: objects
---


```javascript
const person = {
    first_name: 'Joan',
    last_name: 'Leon',
    twitter: '@nucliweb'
};

Object.values(person).includes('@nucliweb');
```

<pre class="output">true</pre>