Thank you for contributing a use case on CodeToGo!

You can either follow the below steps to send a Pull Request, or you can simply create a new Issue

0. We recommend creating an issue discussing the use case before you send a PR

1. Search the website to make sure that this use case doesn't already exist

2. Create a new markdown file in `source/_jsusecases/` or `source/_reactusecases`.

The name of the markdown file will determine the **Title** of the use case.
For example: [lowercase-a-string.md](https://github.com/jadjoubran/codetogo.io/blob/master/source/_jsusecases/lowercase-a-string.md) will automatically yield a title of:
`How to lowercase a string in JavaScript`.
`How to ` and ` in JavaScript` are always automatically added.

3. Please start off using this template

````
---
extends: _layouts.usecase
date: 2018-01-20
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/toUpperCase
reference: String.toUpperCase
related: lowercase-a-string
category: strings
author: "Your name/nickname (optional)"
---


```javascript
const text = 'Hello World';

text.toUpperCase();
```

<pre class="output">HELLO WORLD</pre>
````


4. Replace the use case with your own.

5. If there's an output for such code, show it in between `<pre class="output"></pre>`

6. If the solution for that usecase references a particular javascript method or object, please find the [MDN](https://developer.mozilla.org/
) link for it and replace it in the header of the file. Also add a `reference` that points to the method name. For example: `String.toUpperCase`.

7. If there is one or more related use cases, please reference them (comma separated) in the `related:` filed in the headers. If there are none, then please remove that line.

8. Update the `category:` to a suitable category

9. Set the `date:` to today's date
