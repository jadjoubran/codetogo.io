---
extends: _layouts.usecase
date: 2020-01-28
reference: onKeyDown
category: events
---

```jsx
import React from "react";

function Input() {
  function handleInputKeyDown(event) {
    console.log(event.target.value);
  }

  return <input onKeyDown={handleInputKeyUp} />;
}
```
