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
    item2: 454,
    item2: 3,
};


const b = {
    item1: 1,
    item2: 2,
    item2: 3,
};
```

```javascript
// does not work correctly if object has functions
const intersection = Object.keys(a).filter((aKey) => {
    if (b.hasOwnProperty(aKey) && b[aKey] === a[aKey]){
        return false;
    }
    return true;
});

console.log(intersection);
```

<pre class="output">['item2']</pre>

```javascript
if (intersection.length < 1) {
    console.log('True: a and b are equal');
}else{
    console.log('False: a and b are not equal');
}
```

<pre class="output">False: a and b are not equal</pre>