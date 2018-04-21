---
extends: _layouts.usecase
date: 2018-04-21
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/keys
reference: Object.keys
related: filter-objects-in-array
category: objects
---


```javascript
const a = {
    item1: 1,
    item2: function() {
        console.log('HELLO');
    },
};


const b = {
    item1: 1,
    item2: function() {
        console.log('HELLO');
    },
};
```

```javascript
const intersection = Object.keys(a).filter((aKey) =>{
    if (b.hasOwnProperty(aKey) && JSON.stringify(b[aKey]) === JSON.stringify(a[aKey])){
        return false;
    }
    return true;
});

console.log(intersection);
```

<pre class="output">[]</pre>

```javascript
if (intersection.length < 1) {
    console.log('True: a and b are equal');
}else{
    console.log('False: a and b are not equal');
}
```

<pre class="output">True: a and b are equal</pre>