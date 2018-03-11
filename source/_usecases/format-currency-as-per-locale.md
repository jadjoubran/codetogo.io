---
extends: _layouts.usecase
date: 2018-03-04
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number/toLocaleString
reference: Number.toLocaleString
category: numbers
---


```javascript
const amount = 1999.90;
const options = {
    style: "currency",
    currency: "USD",
};

amount.toLocaleString("en-US", options);
```

<pre class="output">$1,999.90</pre>
