---
extends: _layouts.usecase
date: 2024-02-29
reference: React use hook
category: state
---

```jsx
// Must be on React 18.3 or React 19 (when released)
import { Suspense, use } from "react";

const promise = fetch(
  "https://jsonplaceholder.typicode.com/todos/1"
).then(response => response.json());

function Todo() {
  const todo = use(promise);

  return <h1>{todo.title}</h1>;
}

function App() {
  return (
    <Suspense fallback={<p>Loading...</p>}>
      <Todo />
    </Suspense>
  );
}
```
