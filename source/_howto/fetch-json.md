---
extends: _layouts.howto
date: 2017-12-18
link: https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch
---


```javascript
fetch('https://codetogo.io/api/users.json')
.then(response => response.json())
.then(data => {
    console.log(data);
})
.catch(console.error);
```
<pre class="output">
[{
    id: 1,
    name: "Jad"
}, {
    id: 2,
    name: "Nicole"
}]
</pre>
