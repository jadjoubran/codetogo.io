const fs = require("fs");
const yamlFront = require("yaml-front-matter");
const algoliasearch = require("algoliasearch");

const paths = ["./source/_jsusecases", "./source/_reactusecases"];

const initIndex = () => {
    const appId = "7V5EBRZWFF";
    const client = algoliasearch(appId, process.env.CODETOGO_ALGOLIA_KEY);
    return client.initIndex("prod_JS-HOWTO");
};

const index = initIndex();
const questions = [];
paths.forEach(path => {

    fs.readdir(path, function(err, items) {
        for (const item of items) {
            const course = getCourseFromPath(path);
            const question = formatQuestion(stripExtension(cleanPath(item)), course);
            const url = formatUrl(stripExtension(item), course);
            if (item === ".DS_Store"){
                continue;
            }
            const objectID = url;
            const fileContents = fs.readFileSync(
                `${path}/${item}`,
                "utf8"
                );
            const info = yamlFront.loadFront(fileContents);
            const reference = info.reference;
            questions.push({ question, url, objectID, reference });
        }
        syncQuestions(questions);
    });
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

const getCourseFromPath = path => {
    if (path === "./source/_jsusecases"){
        return "javascript";
    }
    if (path === "./source/_reactusecases"){
        return "react";
    }
    console.log("Could not find course");
    process.exit();
}

const stripExtension = filename => {
    return filename.replace(".md", "");
};

const cleanPath = filename => {
    return filename.replace(/\-/g, " ");
};

const formatQuestion = (question, course) => {
    if (course === "javascript"){
        return `How to ${question} in JavaScript`;
    }
    if (course === "react"){
        return `How to ${question} in React`;
    }
};

const formatUrl = (url, course) => {
    return `how-to-${url}-in-${course}`;
};
