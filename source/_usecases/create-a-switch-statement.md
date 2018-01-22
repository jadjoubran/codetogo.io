---
extends: _layouts.usecase
date: 2017-12-24
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/switch
category: syntax
---


```javascript
let key = 'right';

switch (key){
    case 'right':
        console.log('Go right');
    break;

    case 'left':
        console.log('Go left');
    break;
}
```

<pre class="output">Go right</pre>