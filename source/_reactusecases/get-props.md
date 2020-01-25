---
extends: _layouts.usecase
date: 2020-01-25
reference: React props
related: destructure-props
category: props
---

```jsx
import React from "react";

function App(props) {
  console.log(props.theme);
  console.log(props.className);

  return <div>App</div>;
}
```

```jsx
// Example
<App theme="dark" className="container" />
```

<pre class="output">
"dark"
"container"
</pre>
