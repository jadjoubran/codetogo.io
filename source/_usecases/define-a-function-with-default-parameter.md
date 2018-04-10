---
extends: _layouts.usecase
date: 2017-12-18
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Functions/Default_parameters
reference: Default parameters
category: syntax
---

```javascript
function greetUser(name = 'user') {
    return `Welcome ${name} to code to go!`;
}

let result = greetUser();

console.log(result);
```

<pre class="output">Welcome user to code to go!</pre>
