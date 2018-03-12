
---
extends: _layouts.usecase
date: 2018-03-12
link: #
reference: #
related: fetch api
category: fetch api
---


```javascript
    fetch('filename.json')
    .then((res)=>res.json())
    .then((data)=>{
        console.log(data);
    })
    .catch((e)=>console.log(e));
```

<pre class="output">JSON DATA</pre>

   
