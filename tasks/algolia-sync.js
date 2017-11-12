let fs = require('fs');

let walkPath = './../source/_howto';

let walk = function (dir, done) {
    fs.readdir(dir, function (error, list) {
        if (error) {
            return done(error);
        }

        let i = 0;

        (function next () {
            let file = list[i++];

            if (!file) {
                return done(null);
            }

            file = dir + '/' + file;

            fs.stat(file, function (error, stat) {

                if (stat && stat.isDirectory()) {
                    walk(file, function (error) {
                        next();
                    });
                } else {
                    // do stuff to file here
                    console.log(file);


                    next();
                }
            });
        })();
    });
};

// optional command line params
//      source for walk path
process.argv.forEach(function (val, index, array) {
    if (val.indexOf('source') !== -1) {
        walkPath = val.split('=')[1];
    }
});

console.log('-------------------------------------------------------------');
console.log('processing...');
console.log('-------------------------------------------------------------');

walk(walkPath, function(error) {
    if (error) {
        throw error;
    } else {
        console.log('-------------------------------------------------------------');
        console.log('finished.');
        console.log('-------------------------------------------------------------');
    }
});
