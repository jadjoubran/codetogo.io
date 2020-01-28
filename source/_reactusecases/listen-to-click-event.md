---
extends: _layouts.usecase
date: 2020-01-28
reference: onClick
category: events
---

```jsx
import React from "react";

function Button() {
  function handleButtonClick() {
    console.log("Button clicked!");
  }

  return <button onClick={handleButtonClick}>Click me</button>;
}
```
