const fs = require('fs');
const algoliasearch = require('algoliasearch');

const path = "./source/_usecases";

const initIndex = () => {
    const client = algoliasearch("7V5EBRZWFF", "8f142e7a74d7fe262bb0d74bf6098c4c");
    return client.initIndex('prod_JS-HOWTO');
}

const index = initIndex();
const questions = [];

fs.readdir(path, function(err, items) {
    for (const item of items){
        const question = formatQuestion(stripExtension(cleanPath(item)));
        const url = formatUrl(stripExtension(item));
        const objectID = url;
        questions.push({question, url, objectID});
    }
    syncQuestions(questions);
});

const syncQuestions = (questions) => {
    index.addObjects(questions, (err, content) => {
      if (err){
          console.log('Error :', err);
          return false;
      }
      console.log('Success!');
      console.log(content);
  });
}

const stripExtension = (filename) => {
    return filename.replace(".md", '');
}

const cleanPath = (filename) => {
    return filename.replace(/\-/g, ' ');
}

const formatQuestion = (question) => {
    return `How to ${question} in JavaScript`;
}

const formatUrl = (url) => {
    return `how-to-${url}-in-javascript`;
}
