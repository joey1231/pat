module.exports = function() {
    var client = 'resources/assets',
        clientApp = './public/app'
        dist = 'public',
        tmp = '.tmp',
        docs = 'documentation',
        landing = 'landing';
    var config = {
        client: client,
        dist: dist,
        tmp: tmp,
        index: client + "/index.html",
        alljs: [
            client + "/app/**/*.js",
            './*.js'
        ],
        assets: [
            client + "/app/**/*.html",
            client + "/components/font-awesome/css/*", 
            client + "/components/font-awesome/fonts/*", 
            client + "/components/weather-icons/css/*", 
            client + "/components/weather-icons/font/*", 
            client + "/components/weather-icons/fonts/*", 
            client + "/components/material-design-iconic-font/dist/**/*",
            client + "/fonts/**/*",
            client + "/i18n/**/*", 
            client + "/images/**/*", 
            client + "/styles/loader.css", 
            client + "/styles/ui/images/*", 
            client + "/favicon.ico"
        ],
        less: [],
        sass: [
            client + "/styles/**/*.scss"
        ],
        js: [
            clientApp + "/**/*.module.js",
            clientApp + "/**/*.js",
            '!' + clientApp + "/**/*.spec.js"
        ],
        docs: docs, 
        docsJade: [
            docs + "/jade/index.jade",
            docs + "/jade/faqs.jade",
            docs + "/jade/layout.jade"
        ],
       
    };

    return config;
};