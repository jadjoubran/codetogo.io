---
extends: _layouts.usecase
date: 2018-02-16
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Spread_operator
category: objects
related: concatenate-arrays
---


```javascript
const defaultOptions = {
    verbose: false,
    src: './src',
    dist: './dist'
};
const userOptions = {verbose: true};

const options = {...defaultOptions, ...userOptions};
```

<pre class="output">{
    verbose: true,
    src: "./src",
    dist: "./dist"
}</pre>
