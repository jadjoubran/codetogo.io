---
extends: _layouts.usecase
date: 2017-12-19
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Spread_operator
category: functions
---


```javascript
function log(...msgs){
    //msgs is now an array
    console.log(`Received ${msgs.length} messages`);
}

log('code', 'to', 'go');
log('code', 'to', 'go', 'is', 'cool');
```

<pre class="output">
Received 3 messages
Received 5 messages
</pre>
