---
extends: _layouts.usecase
date: 2017-12-24
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Spread_operator
---


```javascript
const winners = ['Jane', 'Bob'];
const losers = ['Ronald', 'Kevin'];

const players = [...winners, ...losers];
```

<pre class="output">['Jane', 'Bob', 'Ronald', 'Kevin']</pre>
