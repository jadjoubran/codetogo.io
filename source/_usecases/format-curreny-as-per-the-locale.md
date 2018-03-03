---
extends: _layouts.usecase
date: 2018-03-04
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number/toLocaleString
category: number
---


```javascript
function formatCurrency(value, locale, currency) {
  return value.toLocaleString(locale, { style: "currency", currency: currency });
}
// locale can be obtained using "navigator.language"

const amount = 1999.90;

console.log("Netherlands: ", formatCurrency(amount, "nl-NL", "EUR"));
console.log("German: ", formatCurrency(amount, "de-DE", "EUR"));
console.log("United Kingdom: ", formatCurrency(amount, "en-UK", "EUR"));
console.log("Indian: ", formatCurrency(amount, "en-IN", "INR"));
console.log("United States: ", formatCurrency(amount, "en-US", "USD"));
console.log("China: ", formatCurrency(amount, "zh-Hans-CN", "CNY"));
```

<pre class="output">
Netherlands: € 1.999,90
German: 1.999,90 €
United Kingdom: €1,999.90
Indian: ₹ 1,999.90
United States: $1,999.90
China: ￥1,999.90
</pre>
