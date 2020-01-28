---
extends: _layouts.usecase
date: 2020-01-28
reference: onKeyUp
category: events
---

```jsx
import React from "react";

function Input() {
  function handleInputKeyUp(event) {
    console.log(event.target.value);
  }

  return <input onKeyUp={handleInputKeyUp} />;
}
```
