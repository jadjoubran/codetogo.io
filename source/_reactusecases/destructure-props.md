---
extends: _layouts.usecase
date: 2020-01-23
reference: React props
category: props
---

```jsx
import React from "react";

function App(props) {
  const { theme, className } = props;
  console.log(theme, className);

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
