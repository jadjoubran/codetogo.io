---
extends: _layouts.usecase
date: 2018-03-04
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number/toLocaleString
category: numbers
---


```javascript
const amount = 1999.90;
const formattedCurrency = amount.toLocaleString("en-US", { style: "currency", currency: "USD" });

console.log("United States: ", formattedCurrency);
```

<pre class="output">United States: $1,999.90</pre>
