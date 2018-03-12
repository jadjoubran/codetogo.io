---
extends: _layouts.usecase
date: 2018-03-12
link: https://firebase.google.com/docs/database/web/read-and-write
reference: Firebase Docs
related: Firebase
category: Firebase
---


```javascript
var dbref=firebase.database().ref('data');

// Write operation using set() method will write or replace data on a specified path
dbref.set({
  name:'user1',
  age:21
}).then(()=>{
  console.log("Data Added Successfully");
}).catch((e)=>{
  console.log(e);
});

// Write operation using push() method will create a unique id when the data is pushed
dbref.push({
  name:'user2',
  age:22
}).then(()=>{
  console.log("Data Added Successfully");
}).catch((e)=>{
  console.log(e);
});
```

<pre class="output">Data Added Successfully</pre>
