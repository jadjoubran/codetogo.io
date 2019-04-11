---
extends: _layouts.usecase
date: 2019-04-11
link: https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Promise
reference: new Promise(executor)
related: how-to-create-a-promise-in-javascript
category: Promise
author: "Marvin Heilemann"
---


```javascript
const timer = ms => new Promise(r => setTimeout(r, ms)) // <---

async function doSomething() {
   console.log("Start")
   await timer(2000)
   console.log("Stop")
}

doSomething()
```

<pre class="output">
Start
Stop
</pre>