---
extends: _layouts.usecase
date: 2017-12-24
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Spread_operator
reference: Spread operator
category: objects
---

```javascript
const person = {
  id: 1,
  name: {
    first: "John",
    last: "Doe"
  }
};

const duplicate = { ...person };
```

<pre class="output">
{
    id: 1,
    name: {
        first: 'John',
        last: 'Doe'
    }
}
</pre>
