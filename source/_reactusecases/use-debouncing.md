---
extends: _layouts.usecase
date: 2024-06-19
reference: Debouncing 
category: setTimeout
---

```jsx
import React, { useState, useEffect } from "react";

const search = (searchTerm) => {
  console.log("Searching for:", searchTerm);
};

const useDebounce = (callback, delay) => {
  const timerRef = React.useRef(null);

  const debouncedFunction = (
    (...args) => {
      if (timerRef.current) {
        clearTimeout(timerRef.current);
      }
      timerRef.current = setTimeout(() => {
        callback(...args);
      }, delay);
    }
  );

  // Cleanup the timeout when the component unmounts
  useEffect(() => {
    return () => {
      if (timerRef.current) {
        clearTimeout(timerRef.current);
      }
    };
  }, []);

  return debouncedFunction;
};

const SearchBar = () => {
  const [searchTerm, setSearchTerm] = useState("");
  const debouncedSearch = useDebounce(search, 800);

  // Call the debounced search function when the search term changes
  useEffect(() => {
    if (searchTerm) {
      debouncedSearch(searchTerm);
    }
  }, [searchTerm, debouncedSearch]);

  return (
    <input
      type="text"
      value={searchTerm}
      onChange={(e) => setSearchTerm(e.target.value)}
    />
  );
};

export default SearchBar;

```

<pre class="output">
After typing your input and if you wait for 800ms then only call will happen. (preventing from unnecesary calls)

Note :- you can optimise this code further more by using useCallback  
</pre>