"use strict";
var app = {
    main   : function () {
        "use strict";
        app.execute();
    },
    execute: function () {
        $.backstretch([
            "assets/images/cover/1.jpg",
            "assets/images/cover/8.jpg",
            "assets/images/cover/9.jpg",
            "assets/images/cover/10.jpg",
        ], {duration: 1000, fade: 900});
    },
};
window.addEventListener('load', function () {
    app.main();
});