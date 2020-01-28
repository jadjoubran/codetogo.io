---
extends: _layouts.usecase
date: 2020-01-28
reference: ReactDOM.render
category: ReactDOM
---

```html
<div id="root"></div>
```

```jsx
import React from "react";
import { render } from "react-dom";

function App() {
  return <h1>Hello World!</h1>;
}

const root = document.querySelector("#root");

render(<App />, root);
```

<pre class="output">
&lt;h1&gt;Hello World!&lt;/h1&gt;
</pre>
