---
extends: _layouts.usecase
date: 2020-01-23
reference: React useState hook
category: state
---

```jsx
import React, { useState } from "react";

function Counter() {
  const [count, setCount] = useState(0);

  function handleClick() {
    setCount(count + 1);
  }

  return (
    <>
      <h1>{count} times</h1>
      <button onClick={handleClick}>Add 1</button>
    </>
  );
}
```
