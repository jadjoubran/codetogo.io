---
extends: _layouts.howto
date: 2017-12-18
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Classes
---


```javascript
class Pencil {
    constructor(price) {
        this.price = price;
    }

    isExpensive(){
        return this.price >= 10;
    }
}

//usage
const bic = new Pencil(3);
bic.isExpensive();
```
<pre class="output">false</pre>
