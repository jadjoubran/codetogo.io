---
extends: _layouts.usecase
date: 2020-01-28
reference: onKeyPress
category: events
---

```jsx
import React from "react";

function Input() {
  function handleInputKeyPress(event) {
    console.log(event.target.value);
  }

  return <input onKeyPress={handleInputKeyUp} />;
}
```
