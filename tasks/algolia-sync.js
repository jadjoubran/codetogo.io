const fs = require("fs");
const yamlFront = require("yaml-front-matter");
const algoliasearch = require("algoliasearch");

const path = "./source/_usecases";

const initIndex = () => {
    const appId = "7V5EBRZWFF";
    const client = algoliasearch(appId, process.env.CODETOGO_ALGOLIA_KEY);
    return client.initIndex("prod_JS-HOWTO");
};

const index = initIndex();
const questions = [];

fs.readdir(path, function(err, items) {
    for (const item of items) {
        const question = formatQuestion(stripExtension(cleanPath(item)));
        const url = formatUrl(stripExtension(item));
        const objectID = url;
        const fileContents = fs.readFileSync(
            `source/_usecases/${item}`,
            "utf8"
        );
        const info = yamlFront.loadFront(fileContents);
        const reference = info.reference;
        questions.push({ question, url, objectID, reference });
    }
    syncQuestions(questions);
});

const syncQuestions = questions => {
    index.addObjects(questions, (err, content) => {
        if (err) {
            console.log("Error :", err);
            return false;
        }
        console.log("Success!");
        console.log(content);
    });
};

const stripExtension = filename => {
    return filename.replace(".md", "");
};

const cleanPath = filename => {
    return filename.replace(/\-/g, " ");
};

const formatQuestion = question => {
    return `How to ${question} in JavaScript`;
};

const formatUrl = url => {
    return `how-to-${url}-in-javascript`;
};
