---
extends: _layouts.usecase
date: 2024-02-13
reference: React useState hook
category: state
---

```jsx
import { useState } from "react";

function Counter() {
  const [count, setCount] = useState(0);

  function handleClick() {
    setCount(count => count + 1);
  }

  return (
    <>
      <h1>{count} times</h1>
      <button onClick={handleClick}>Add 1</button>
    </>
  );
}
```
